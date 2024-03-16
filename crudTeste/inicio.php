<?php
include "bloquear.php";
?>


<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home Page</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />

</head>

<body>
    <header>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-success p-4">
                <h5 class="text-white h4">CRUD</h5>
                <ul class="navbar-nav">
                    <li class="nav=item"><a href="inicio.php" class="nav-link text-white">Home</a></li>
                    <li class="nav=item"><a href="?page=novo" class="nav-link text-white">Novo Usuario</a></li>
                    <li class="nav=item"><a href="?page=listar" class="nav-link text-white">Listar Usuarios</a></li>
                </ul>
                <!--span class="text-muted">Não ha nada por aqui</span-->
            </div>
        </div>
        <nav class="navbar navbar-dark bg-success">
            <div class="container-fluid">
                <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                switch (@$_REQUEST["page"]) {
                    case "novo":
                        include "user-add.php";
                        break;

                    case "listar":
                        include "user-listar.php";
                        break;

                    default:
                        echo "Teste";
                }
                ?>

            </div>
        </div>
    </div>

    <!-- MDB JS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>

</body>

</html>