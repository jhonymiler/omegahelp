        <!-- =========================================================== -->
        <!-- Small Box (Stat card) -->
        <h5 class="mb-2 mt-4">Small Box</h5>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>150</h3>
                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>

                                <p>Bounce Rate</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>44</h3>
                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>
                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card-body col-12">
                        <p class="text-center">
                            <strong>Relatório do dia: 1 Jan, 2021 - 30 Jul, 2021</strong>
                        </p>

                        <div class="chart">
                            <!-- Sales Chart Canvas -->
                            <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                        </div>
                        <!-- /.chart-responsive -->
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-md-6">

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
                $('#protocolos-lista').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
