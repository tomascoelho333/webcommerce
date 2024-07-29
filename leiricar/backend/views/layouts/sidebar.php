<?php use common\models\User;

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .9; margin-left: 50px;">
        <br>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/img/iconprofile.png" class="img-circle elevation-1" alt="User Image" style="width: 30px; height: 30px; object-fit: cover;">
            </div>
            <div class="info">
                <a class="d-block"><?= Yii::$app->user->identity->username; ?>  </a>

            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Starter Pages',
                        'icon' => 'tachometer-alt',
                        'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'Active Page', 'url' => ['site/index'], 'iconStyle' => 'far'],
                            ['label' => 'Inactive Page', 'iconStyle' => 'far'],
                        ]
                    ],
                    ['label' => 'Utilizadores:', 'header' => true],
                    ['label' => 'Colaboradores', 'url' => ['user/index'], 'icon' => 'key'],
                    ['label' => 'Funcionários', 'url' => ['user/index'], 'icon' => 'id-card'],
                    ['label' => 'Clientes', 'url' => ['clientes/index'], 'icon' => 'user'],
                    ['label' => 'Gestão de Empresa:', 'header' => true],
                    ['label' => 'Produtos', 'url' => ['produtos/index'], 'icon' => 'box'],
                    ['label' => 'Avaliacoes', 'url' => ['avaliacoes/index'], 'icon' => 'star'],


                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>