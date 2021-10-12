  <div class="row" style="margin-bottom: 10px;">
      <div class="col-md-6">
          <div id="grafico_clientes" style="height:300px;width:100%; paddin-left: 5px;"></div>
      </div>
      <div class="col-md-6">
          <div id="status_protocolos" style="height:300px;width:100%"></div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-12">

          <div class="card">

              <div class="card-header">
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
                                          <a href="{$_pgParams.RAIZ}painel/protocolos/ver/{$pro.PRO_id}"
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

  <script src="{$_pgParams.path_layout}dist/js/canvasjs.min.js"></script>

  <script>
      $(document).ready(function() {
          const table = $('#protocolos-lista').DataTable({
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


      window.onload = function() {

          var departamentos = new CanvasJS.Chart("status_protocolos", {
              theme: "light2", // "light1", "light2", "dark1", "dark2"
              animationEnabled: true,
              title: {
                  text: "Protocolos X Status"
              },

              data: [{
                  {literal}
                      type: "pie",
                      showInLegend: false,
                      toolTipContent: "{name}: <strong>{y}%</strong>",
                      indexLabel: "{name} - {y}%",
                  {/literal}
                  click: explodePie,
                  //explodeOnClick: true,
                  dataPoints: {$protocoloXstatus}
              }]
          });
          departamentos.render();

          var clientes = new CanvasJS.Chart("grafico_clientes", {
              animationEnabled: true,
              exportEnabled: true,
              theme: "light1", // "light1", "light2", "dark1", "dark2"
              title: {
                  text: "Protocolos X Assuntos"
              },
              axisY: {
                  includeZero: true
              },
              data: [{
                  type: "column", //change type to bar, line, area, pie, etc
                  indexLabelFontColor: "#5A5757",
                  indexLabelFontSize: 16,
                  indexLabelPlacement: "outside",
                  dataPoints: {$protocolosXassuntos},
                  explodeOnClick: true,
                  click: selectAssunto,
                  cursor: "pointer",

              }]
          });
          clientes.render();
      }

      var index = 0;

      function explodePie(e) {
          console.log(e);

          if (e.dataPoint.exploded == false) {
              $('#protocolos-lista').DataTable().search('').draw();
              e.dataSeries.dataPoint[e.dataPointIndex].exploded = true;
          } else {
              $('#protocolos-lista').DataTable().search(e.dataPoint.name).draw();
              e.dataSeries.dataPoint[e.dataPointIndex].exploded = false;
          }
          e.chart.render();

      }

      function selectAssunto(e) {
          if (e.dataPointIndex != index) {
              index = e.dataPointIndex;
              $('#protocolos-lista').DataTable().search(e.dataPoint.label).draw();
          } else {
              $('#protocolos-lista').DataTable().search('').draw();
          }

      }
  </script>
