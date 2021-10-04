<?php
/* Smarty version 3.1.39, created on 2021-09-22 13:56:15
  from 'C:\xampp\htdocs\views\painel\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b602f036272_88668592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93102239fd733794b6b58adcaf7f932befeba734' => 
    array (
      0 => 'C:\\xampp\\htdocs\\views\\painel\\sidebar.tpl',
      1 => 1632329768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614b602f036272_88668592 (Smarty_Internal_Template $_smarty_tpl) {
?><aside class="main-sidebar sidebar-dark-primary elevation-4">

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



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar nav-collapse-hide-child flex-column" data-widget="treeview" role="menu"
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library
                -->
                <li class="nav-item menu-open">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/" data-link="home" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Painel
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
