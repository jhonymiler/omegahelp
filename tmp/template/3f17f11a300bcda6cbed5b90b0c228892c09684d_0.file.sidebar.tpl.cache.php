<?php
/* Smarty version 3.1.39, created on 2021-10-02 10:59:55
  from 'C:\xampp\htdocs\sistemas\omegahelp\views\painel\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615865db81e761_98903616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f17f11a300bcda6cbed5b90b0c228892c09684d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\views\\painel\\sidebar.tpl',
      1 => 1633183077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615865db81e761_98903616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2090068053615865db8152e8_14892513';
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/" class="brand-link">
        <img src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/aro-logo.png" alt="ARO HELPDESK"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>ARO HELPDES</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <?php if (!empty($_smarty_tpl->tpl_vars['sessaoUsuario']->value['USU_imagem'])) {?>
            <?php $_smarty_tpl->_assignInScope('avatar', ((string)$_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'])."upload/".((string)$_smarty_tpl->tpl_vars['sessaoUsuario']->value['USU_imagem']));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('avatar', ((string)$_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'])."dist/img/avatar.png");?>

        <?php }?>

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" class="img-circle elevation-2" alt="<?php echo $_smarty_tpl->tpl_vars['sessaoUsuario']->value['USU_nome'];?>
">
            </div>
            <div class="info">
                <a href="#" class="d-block"><b><?php echo $_smarty_tpl->tpl_vars['sessaoUsuario']->value['USU_nome'];?>
</b></a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar nav-collapse-hide-child flex-column" data-widget="treeview"
                role="menu">
                <li class="nav-item menu-open">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/" data-link="home" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Painel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/empresas" data-link="empresas" class="nav-link">
                        <i class="nav-icon fas fa-user-tie "></i>
                        <p>Empresas</p>
                    </a>
                </li>
                <!--<li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/os" data-link="os" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <p>Ordens de Serviço</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/protocolos" data-link="protocolos" class="nav-link">
                        <i class="nav-icon fas fa-ticket-alt"></i>
                        <p>
                            Protocolos
                        </p>
                    </a>
                </li> !-->
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/departamentos" data-link="departamentos" class="nav-link">
                        <i class="nav-icon fas fa-map-signs"></i>
                        <p>
                            Departamentos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/usuarios" data-link="usuarios" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Usuários
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/suporte" data-link="suporte" class="nav-link">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>
                            Suporte Online
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php }
}
