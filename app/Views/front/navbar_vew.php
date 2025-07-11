
                    <!--Navegacion-->
<?php                    
    $session = session();
    $nombre =$session->get('usuario');
    $perfil=$session->get('perfil_id');   
    ?>                

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d63384">
    <div class="container-fluid">
        <a class="navbar-brand barra" href="<?php echo base_url('principal_ultimo')?>">
            <img src="<?php echo base_url('assets/img/pretyStile.png')?>" alt="marca" width="30" height="30" class="img-fluid"/>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if(session()->perfil_id == 1): ?>
                <div class="btn btn-secondary active btnUser btn-sm me-2">
                    <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
                </div>
                <ul class="navbar-nav navbar-links me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href='principal_ultimo'>Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='Nosotros'>Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='registro'>Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='login'>Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>

            <?php elseif(session()->perfil_id == 2): ?>
                <div class="btn btn-info active btnUser btn-sm me-2">
                    <a href="">USUARIO: <?php echo session('nombre'); ?> </a>
                </div>
                <ul class="navbar-nav navbar-links me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href='principal_ultimo'>Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='Nosotros'>Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>

            <?php else: ?>
                <ul class="navbar-nav navbar-links mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href='principal_ultimo'>Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='Nosotros'>Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='registro'>Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='login'>Login</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</nav>