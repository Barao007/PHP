<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Controle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sistema de Controle</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?page=home">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Medicos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar-medico">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="?page=listar-medico">Listar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pacientes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar-paciente">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="?page=listar-paciente">Listar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Consultas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar-consulta">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="?page=listar-consulta">Listar</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <?php
            //include do banco de dados
            include('config.php');
            
            switch (@$_REQUEST['page']) {
                case 'cadastrar-medico':
                    include('cadastrar-medico.php');
                    break;
                case 'editar-medico':
                    include('editar-medico.php');
                    break;
                case 'listar-medico':
                    include('listar-medico.php');
                    break;
                case 'salvar-medico':
                    include('salvar-medico.php');
                    break;

                case 'cadastrar-paciente':
                    include('cadastrar-paciente.php');
                    break;
                case 'editar-paciente':
                    include('editar-paciente.php');
                    break;
                case 'listar-paciente':
                    include('listar-paciente.php');
                    break;

                case 'cadastrar-consulta':
                    include('cadastrar-consulta.php');
                    break;
                case 'editar-consulta':
                    include('editar-consulta.php');
                    break;
                case 'listar-consulta':
                    include('listar-consulta.php');
                    break;
                case 'salvar-consulta':
                    include('salvar-consulta.php');
                    break;

                default:
                    include('home.php');
            }
            ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
