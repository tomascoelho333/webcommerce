<?php
namespace frontend\models;

use common\models\Clientes;
use Yii;
use yii\base\Model;
use common\models\User;

/**
* Signup form
*/
class SignupForm extends Model
    {
        public $username;
        public $email;
        public $password;
        public $nome;
        public $localidade;
        public $codPostal;
        public $telefone;
        public $nif;
        public $morada;


    /**
    * {@inheritdoc}
    */
        public function rules()
        {
        return [
        ['username', 'trim'],
        ['username', 'required'],
        ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Esse username já está a ser utilizado.'],
        ['username', 'string', 'min' => 2, 'max' => 255],

        ['email', 'trim'],
        ['email', 'required'],
        ['email', 'email'],
        ['email', 'string', 'max' => 255],
        ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Esse email já está a ser utilizado.'],

        ['password', 'required'],
        ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],

        ['nome', 'trim'],
        ['nome', 'required'],

        ['localidade', 'trim'],
        ['localidade', 'required'],

        ['codPostal', 'trim'],
        ['codPostal', 'required'],
        ['codPostal', 'match', 'pattern' => '/^\d{4}-\d{3}$/', 'message' => 'Código postal inválido!'],

        ['telefone', 'trim'],
        ['telefone', 'required'],
        ['telefone', 'match', 'pattern' => '/^\d{9}$/', 'message' => 'Número de telemóvel inválido!'],

        ['nif', 'trim'],
        ['nif', 'required'],
        ['nif', 'match', 'pattern' => '/^\d{9}$/', 'message' => 'NIF inválido'],

        ['morada', 'trim'],
        ['morada', 'required'],
        ];
        }

        /**
        * Signs user up.
        *
        * @return bool whether the creating new account was successful and email was sent
        */
        public function signup()
        {
        if (!$this->validate()) {
        return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->save();

        $dados = new Clientes();
        $dados->user_id = $user->id;
        $dados->nome = $this->nome;
        $dados->codigopostal = $this->codPostal;
        $dados->localidade = $this->localidade;
        $dados->telefone = $this->telefone;
        $dados->nif = $this->nif;
        $dados->rua = $this->morada;

        $dados->save();



        $auth = \Yii::$app->authManager;
        $clienteRole = $auth->getRole('cliente');
        $auth->assign($clienteRole, $user->getId());

        return $user;
        }
    }
?>