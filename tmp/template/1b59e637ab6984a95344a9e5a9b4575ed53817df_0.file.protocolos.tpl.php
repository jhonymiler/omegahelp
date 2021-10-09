<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-09-25 10:39:14
=======
/* Smarty version 3.1.39, created on 2021-10-04 19:00:35
>>>>>>> master
  from 'C:\xampp\htdocs\sistemas\omegahelp\modulos\painel\views\protocolos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_614f26825bfb59_82846328',
=======
  'unifunc' => 'content_615b79834c56c0_90294783',
>>>>>>> master
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b59e637ab6984a95344a9e5a9b4575ed53817df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\modulos\\painel\\views\\protocolos.tpl',
      1 => 1631484599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_614f26825bfb59_82846328 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_615b79834c56c0_90294783 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master
?>        <!-- =========================================================== -->
        <!-- Small Box (Stat card) -->
        <div class="row">

            <div class="col-md-6 col-12">
                <h5 class="mb-2 mt-4">Small Box</h5>

                <div class="row">
                    <div class="col-md-6 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?php echo $_smarty_tpl->tpl_vars['abertos']->value['qtd'];?>
</h3>
                                <p>Abertos</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-6 col-6">
                        <!-- small card -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?php echo $_smarty_tpl->tpl_vars['atendidos']->value['qtd'];?>
</h3>

                                <p>Atendidos</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-6 col-6">
                        <!-- small card -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><?php echo $_smarty_tpl->tpl_vars['aguardando']->value['qtd'];?>
</h3>
                                <p>aguardando</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-6 col-6">
                        <!-- small card -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?php echo $_smarty_tpl->tpl_vars['pendentes']->value['qtd'];?>
</h3>
                                <p>Pendentes</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body col-md-6 col-12">
                <p class="text-center">
                    <strong>Relatório do dia: 1 Jan, 2021 - 30 Jul, 2021</strong>
                </p>

                <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" height="250"></canvas>
                </div>
                <!-- /.chart-responsive -->
            </div>
        </div>
        <!-- ./col -->
        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title float-left">Lista de Chamdos</h3>
                        <!-- Check all button -->
                        <div class="btn-group float-right">
                            <a type="button" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
suporte/protocolos/novo"
                                class="btn btn-block bg-gradient-success ">
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
                                    <th>Proprietário</th>
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
                                            <td>
                                                <b><?php echo $_smarty_tpl->tpl_vars['pro']->value['USU_nome'];?>
</b><br>
                                                <span style="font-size: 11px;"><?php echo $_smarty_tpl->tpl_vars['pro']->value['EMP_fantasia'];?>
</span>
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
painel/protocolos/ver/<?php echo $_smarty_tpl->tpl_vars['pro']->value['PRO_id'];?>
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
        </div>
        <!-- /.row -->






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
        <!-- ChartJS -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/chart.js/Chart.min.js"><?php echo '</script'; ?>
>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/dashboard.js"><?php echo '</script'; ?>
>


        <?php echo '<script'; ?>
>
            $(document).ready(function() {
                var table = $('#protocolos-lista').DataTable({
                    "language": pt_br,
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "paging": true,
                    "select": true,
                    "ordering": true,
                    "rowReorder": true,
                    "columnDefs": [{
                        orderable: true,
                        className: 'reorder',
                        targets: [0]
                    }, {
                        orderable: false,
                        targets: [-1],
                    }]
                });
                table.columns('.reorder').order('desc').draw();

            })
        <?php echo '</script'; ?>
>
<?php }
}
