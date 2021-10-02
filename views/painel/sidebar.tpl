<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="{$_pgParams.RAIZ}painel/" class="brand-link">
        <img src="{$_pgParams.path_layout}dist/img/aro-logo.png" alt="ARO HELPDESK" class="brand-image"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><b>ARO HELPDESK</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        {if  !empty($sessaoUsuario.USU_imagem)}
            {assign var="avatar" value="{$_pgParams.RAIZ}upload/{$sessaoUsuario.USU_imagem}"}
        {else}
            {assign var="avatar" value="{$_pgParams.path_layout}dist/img/avatar.png"}

        {/if}

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{$avatar}" class="img-circle elevation-2" alt="{$sessaoUsuario.USU_nome}">
            </div>
            <div class="info">
                <a href="#" class="d-block"><b>{$sessaoUsuario.USU_nome}</b></a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar nav-collapse-hide-child flex-column" data-widget="treeview"
                role="menu">
                <li class="nav-item menu-open">
                    <a href="{$_pgParams.RAIZ}painel/" data-link="home" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Painel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{$_pgParams.RAIZ}painel/empresas" data-link="empresas" class="nav-link">
                        <i class="nav-icon fas fa-user-tie "></i>
                        <p>Empresas</p>
                    </a>
                </li>
                <!--<li class="nav-item">
                    <a href="{$_pgParams.RAIZ}painel/os" data-link="os" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <p>Ordens de Serviço</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{$_pgParams.RAIZ}painel/protocolos" data-link="protocolos" class="nav-link">
                        <i class="nav-icon fas fa-ticket-alt"></i>
                        <p>
                            Protocolos
                        </p>
                    </a>
                </li> !-->
                <li class="nav-item">
                    <a href="{$_pgParams.RAIZ}painel/departamentos" data-link="departamentos" class="nav-link">
                        <i class="nav-icon fas fa-map-signs"></i>
                        <p>
                            Departamentos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{$_pgParams.RAIZ}painel/usuarios" data-link="usuarios" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Usuários
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{$_pgParams.RAIZ}painel/suporte" data-link="suporte" class="nav-link">
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
