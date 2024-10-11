<!-- includes/header.php -->
<?php
    // Definir caminho absoluto para a pasta raiz do projeto
    $rootUrl = '/Prj_headers'; // Caminho da raiz do projeto
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página</title>
    <!-- Caminho absoluto para o CSS -->
    <link rel="stylesheet" href="<?php echo $rootUrl; ?>/assets/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <span class="logo-icon"></span> <!-- Ícone da academia -->
            Minha Academia
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $rootUrl; ?>/index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $rootUrl; ?>/pages/pagina1.php">Página 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $rootUrl; ?>/pages/subpages/subpagina1.php">Subpágina 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
