<?php

use yii\db\Migration;

/**
 * Class m240727_145323_init_rbac
 */
class m240727_145323_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240727_145323_init_rbac cannot be reverted.\n";

        return false;
    }


    public function up()
    {
        $auth = Yii::$app->authManager;

        $gerirColaboradores= $auth->createPermission('gerirColaboradores');
        $gerirColaboradores->description = 'Gestão de todos os Admins, Funcionarios';
        $auth->add($gerirColaboradores);


        $gerirClientes = $auth->createPermission('gerirClientes');
        $gerirClientes->description = 'Acesso total à gestão de clientes (Clientes)';
        $auth->add($gerirClientes);

        $gerirProdutos = $auth->createPermission('gerirProdutos');
        $gerirProdutos->description = 'Gerir Produtos';
        $auth->add($gerirProdutos);

        $gerirAvaliacoes = $auth->createPermission('gerirAvaliacoes');
        $gerirAvaliacoes->description = 'Gerir Avaliacoes';
        $auth->add($gerirAvaliacoes);

        $gerirCategorias = $auth->createPermission('gerirCategorias');
        $gerirCategorias->description = 'Gerir Categorias';
        $auth->add($gerirCategorias);

        $gerirIvas = $auth->createPermission('gerirIvas');
        $gerirIvas ->description = 'Gerir Ivas';
        $auth->add($gerirIvas );

        $realizarCompras = $auth->createPermission('realizarCompras');
        $realizarCompras ->description = 'Fazer Compras';
        $auth->add($realizarCompras);

        $realizarAvaliacoes = $auth->createPermission('realizarAvaliacoes');
        $realizarAvaliacoes ->description = 'Fazer Avaliacoes';
        $auth->add($realizarAvaliacoes);

        $cliente = $auth->createRole('cliente');
        $auth->add($cliente);
        $auth->addChild($cliente, $realizarCompras);
        $auth->addChild($cliente, $realizarAvaliacoes);

        $funcionario = $auth->createRole('funcionario');
        $auth->add($funcionario);
        $auth->addChild($funcionario, $gerirClientes);
        $auth->addChild($funcionario, $gerirProdutos);
        $auth->addChild($funcionario, $gerirAvaliacoes);
        $auth->addChild($funcionario, $gerirCategorias);
        $auth->addChild($funcionario, $gerirIvas);


        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $funcionario);
        $auth->addChild($admin, $gerirColaboradores);


    }

    public function down()
    {
        echo "m240727_145323_init_rbac cannot be reverted.\n";

        return false;
    }

}
