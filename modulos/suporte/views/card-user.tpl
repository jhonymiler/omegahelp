<div class="col-md-3">




    <div class="card card-widget widget-user shadow">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-info">
            <h3 class="widget-user-username">{$usuario.USU_nome}</h3>
            <h5 class="widget-user-desc">{$usuario.EMP_fantasia}</h5>

        </div>
        <div class="widget-user-image">
            <img class="img-circle elevation-2" src="{$imagem}" alt="User Avatar">
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header"><span class="badge bg-info">{$abertos.qtd}</span>
                        </h5>
                        <span style="font-size:12px;">Protocolos</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header"><span class="badge bg-success">{$atendidos.qtd}</span></h5>
                        <span style="font-size:12px;">Atendidos</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                    <div class="description-block">
                        <h5 class="description-header"><span class="badge bg-danger">{$aguardando.qtd}</span></h5>
                        <span style="font-size:12px;">Aguardando</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <div class="card-footer p-0">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{$_pgParams.RAIZ}suporte/" class="nav-link">
                        Página Inicial
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Meu Perfil
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{$_pgParams.RAIZ}suporte/protocolos/novo" class="nav-link">
                        Novo Protocolo
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{$_pgParams.RAIZ}suporte/protocolos/" class="nav-link">
                        Meus Protocolos
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
