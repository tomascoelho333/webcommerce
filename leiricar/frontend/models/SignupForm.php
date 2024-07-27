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
    public $telefone;
    public $nif;
    public $codigoPostal;
    public $rua;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este nome de utilizador já existe.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este endereço de email já se encontra registado!.'],

            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],

            ['nome', 'required'],
            ['nome', 'string', 'max' => 255],

            ['codigopostal', 'required'],
            ['codigopostal', 'string', 'min' => 8, 'max' => 8],

            ['telefone', 'trim'],
            ['telefone', 'required'],
            ['telefone', 'string', 'min' => 0, 'max' => 9],

            ['localidade', 'required'],
            ['localidade', 'string', 'min' => 3, 'max' => 100],

            ['rua', 'required'],
            ['rua', 'string', 'min' => 3, 'max' => 100],

            ['nif', 'trim'],
            ['nif', 'unique', 'min' => 0, 'max' => 9],
            ['nif', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este NIF já está em utilização!.'],
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

        $cliente = new Clientes();
        $cliente->user_id = $user->id;
        $cliente->nome = $this->nome;
        $cliente->codigopostal = $this->codigoPostal;
        $cliente ->localidade = $this->localidade;
        $cliente->telefone = $this->telefone;
        $cliente->nif = $this->nif;
        $cliente->rua = $this->rua;

        $auth = Yii::$app->authManager;
        $clienteRole = $auth->getRole('cliente');
        $auth->assign($clienteRole, $user->getId());

        return $user->save() && $cliente->save();
        //&& $this->sendEmail($user)
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
