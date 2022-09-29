<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php?vista=home">
            <img src="/inc/book.png" class="image-responsive" width="38" height="40">
        </a>
        <div class="navbar-collapse collapse flex-row-reverse" id="navbarTogglerDemo03">
            <div>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuarios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Nuevo</a></li>
                            <li><a class="dropdown-item" href="#">Lista</a></li>
                            <li><a class="dropdown-item" href="#">Buscar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Nueva</a></li>
                            <li><a class="dropdown-item" href="#">Lista</a></li>
                            <li><a class="dropdown-item" href="#">Buscar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Nuevo</a></li>
                            <li><a class="dropdown-item" href="#">Lista</a></li>
                            <li><a class="dropdown-item" href="#">Por categorías</a></li>
                            <li><a class="dropdown-item" href="#">Buscar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login.php">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Salir</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex me-auto mx-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" />
            </form>
        </div>
    </div>
</nav>