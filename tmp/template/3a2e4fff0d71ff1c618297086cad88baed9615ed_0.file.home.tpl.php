<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-08-28 18:49:16
=======
/* Smarty version 3.1.39, created on 2021-10-04 19:00:16
>>>>>>> master
  from 'C:\xampp\htdocs\sistemas\omegahelp\modulos\suporte\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_612aaf5cf38086_14738623',
=======
  'unifunc' => 'content_615b7970df5be1_04594450',
>>>>>>> master
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a2e4fff0d71ff1c618297086cad88baed9615ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\modulos\\suporte\\views\\home.tpl',
      1 => 1630187269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_612aaf5cf38086_14738623 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_615b7970df5be1_04594450 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['_pgParams']->value['REAL_PATH'])."modulos/suporte/views/card-user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="card col-md-9">

    <div class="card-header">
        <h3 class="card-title float-left">Lista de Chamdos</h3>
        <!-- Check all button -->
        <div class="btn-group float-right">
            <a type="button" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
suporte/protocolos/novo" class="btn btn-block bg-gradient-success ">
                <i class="fas fa-plus"></i>
                Novo
            </a>
        </div>
    </div>
    <!-- ./card-header -->
    <div class="card-body">
        <table id="protocolos-lista" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Assunto</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <?php if ($_smarty_tpl->tpl_vars['listaProtocolos']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaProtocolos']->value, 'pro', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['pro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pro']->value) {
$_smarty_tpl->tpl_vars['pro']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['pro']->value['PRO_id'];?>
</td>
                            <td>[<?php echo $_smarty_tpl->tpl_vars['pro']->value['TIP_tipo'];?>
] <?php echo $_smarty_tpl->tpl_vars['pro']->value['PRO_assunto'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['pro']->value['PRO_aberto'];?>
</td>
                            <td><span class="badge bg-<?php echo $_smarty_tpl->tpl_vars['pro']->value['STA_corHtml'];?>
"><?php echo $_smarty_tpl->tpl_vars['pro']->value['STA_status'];?>
</span></td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
suporte/protocolos/ver/<?php echo $_smarty_tpl->tpl_vars['pro']->value['PRO_id'];?>
"
                                    class="btn btn-primary float-right">
                                    <i class="fa fa-eye"></i> Ver
                                </a>
                            </td>
                        </tr>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
</div>




<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-responsive/js/dataTables.responsive.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-responsive/js/responsive.bootstrap4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-buttons/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-buttons/js/buttons.bootstrap4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/jszip/jszip.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/pdfmake/pdfmake.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/pdfmake/vfs_fonts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-buttons/js/buttons.html5.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-buttons/js/buttons.print.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-buttons/js/buttons.colVis.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('#protocolos-lista').DataTable({
            "language": pt_br,
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "paging": true,
            "select": true,
            "ordering": true,
            "rowReorder": true,
            "columnDefs": [{
                    orderable: false,
                    className: 'reorder',
                    targets: [-1]
                },
                {
                    orderable: true,
                    targets: '_all'
                }
            ]
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
