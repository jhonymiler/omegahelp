<?php
/* Smarty version 3.1.39, created on 2021-10-10 12:45:59
  from 'C:\xampp\htdocs\sistemas\omegahelp\modulos\suporte\views\card-user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61630ab7725b08_94008219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a008dd16d1f4e7dd7cad9d6a3f9438b6b94d866' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\modulos\\suporte\\views\\card-user.tpl',
      1 => 1633204612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61630ab7725b08_94008219 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-3">




    <div class="card card-widget widget-user shadow">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-info">
            <h3 class="widget-user-username"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['USU_nome'];?>
</h3>
            <h5 class="widget-user-desc"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['EMP_fantasia'];?>
</h5>

        </div>
        <div class="widget-user-image">
            <img class="img-circle elevation-2" src="<?php echo $_smarty_tpl->tpl_vars['imagem']->value;?>
" alt="User Avatar">
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header"><span class="badge bg-info"><?php echo $_smarty_tpl->tpl_vars['abertos']->value['qtd'];?>
</span>
                        </h5>
                        <span style="font-size:12px;">Protocolos</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header"><span class="badge bg-success"><?php echo $_smarty_tpl->tpl_vars['atendidos']->value['qtd'];?>
</span></h5>
                        <span style="font-size:12px;">Atendidos</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                    <div class="description-block">
                        <h5 class="description-header"><span class="badge bg-danger"><?php echo $_smarty_tpl->tpl_vars['aguardando']->value['qtd'];?>
</span></h5>
                        <span style="font-size:12px;">Aguardando</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!--<div class="card-footer p-0">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
suporte/" class="nav-link">
                        Página Inicial
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
suporte/perfil" class="nav-link">
                        Meu Perfil
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
suporte/protocolos/novo" class="nav-link">
                        Novo Protocolo
                    </a>
                </li>
            </ul>
        </div> -->
    </div>
</div>
<?php }
}
