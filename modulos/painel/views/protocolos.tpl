        <!-- =========================================================== -->
        <!-- Small Box (Stat card) -->
        <div class="row">

            <div class="col-md-6 col-12">
                <h5 class="mb-2 mt-4">Small Box</h5>

                <div class="row">
                    <div class="col-md-6 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{$abertos.qtd}</h3>
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
                                <h3>{$atendidos.qtd}</h3>

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
                                <h3>{$aguardando.qtd}</h3>
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
                                <h3>{$pendentes.qtd}</h3>
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
                            <a type="button" href="{$_pgParams.RAIZ}suporte/protocolos/novo"
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
                                {if $listaProtocolos}
                                    {foreach from=$listaProtocolos item="pro" name=i}
                                        <tr>
                                            <td>{$pro.PRO_id}</td>
                                            <td>
                                                <b>{$pro.USU_nome}</b><br>
                                                <span style="font-size: 11px;">{$pro.EMP_fantasia}</span>
                                            </td>
                                            <td>[{$pro.TIP_tipo}] {$pro.PRO_assunto}</td>
                                            <td>{$pro.PRO_aberto}</td>
                                            <td><span class="badge bg-{$pro.STA_corHtml}">{$pro.STA_status}</span></td>
                                            <td>
                                                <a href="{$_pgParams.RAIZ}suporte/protocolos/ver/{$pro.PRO_id}"
                                                    class="btn btn-primary float-right">
                                                    <i class="fa fa-eye"></i> Ver
                                                </a>
                                            </td>
                                        </tr>

                                    {/foreach}
                                {/if}

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->






        <script src="{$_pgParams.path_layout}plugins/datatables/jquery.dataTables.js"></script>
        <script src="{$_pgParams.path_layout}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="{$_pgParams.path_layout}plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{$_pgParams.path_layout}plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="{$_pgParams.path_layout}plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{$_pgParams.path_layout}plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="{$_pgParams.path_layout}plugins/jszip/jszip.min.js"></script>
        <script src="{$_pgParams.path_layout}plugins/pdfmake/pdfmake.min.js"></script>
        <script src="{$_pgParams.path_layout}plugins/pdfmake/vfs_fonts.js"></script>
        <script src="{$_pgParams.path_layout}plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="{$_pgParams.path_layout}plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="{$_pgParams.path_layout}plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- ChartJS -->
        <script src="{$_pgParams.path_layout}plugins/chart.js/Chart.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{$_pgParams.path_layout}dist/js/dashboard.js"></script>


        <script>
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
        </script>
