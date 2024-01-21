<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet Infra Logiciel</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="../vendor/almasaeed2010/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="../vendor/almasaeed2010/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="../vendor/almasaeed2010/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="../vendor/almasaeed2010/adminlte/plugins/datatables-colreorder/css/colReorder.bootstrap4.min.css">
    <link rel="stylesheet"
        href="../vendor/almasaeed2010/adminlte/plugins/datatables-fixedcolumns/css/fixedColumns.bootstrap4.min.css">
    <link rel="stylesheet"
        href="../vendor/almasaeed2010/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet"
        href="../vendor/almasaeed2010/adminlte/plugins/datatables-searchbuilder/css/searchBuilder.bootstrap4.css">
    <link rel="stylesheet"
        href="../vendor/almasaeed2010/adminlte/plugins/datatables-select/css/select.bootstrap4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../vendor/almasaeed2010/adminlte/plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
</head>

<body>
    <div class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="index.php?page=accueil" class="nav-link">Accueil</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="index.php?page=accueil" class="brand-link">
                    <img src="../assets/img/ballon.png" alt="EllisphereLogo"
                        class="brand-image img-circle elevation-2" style="opacity: .8">
                    <span class="brand-text font-weight-light">Projet Infra Logiciel</span>
                </a>
                <div class="sidebar">
                    
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Recherche"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item">
                                <a href="index.php?page=accueil" class="nav-link">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>
                                        Accueil
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>-
                </div>
            </aside>
            <aside class="control-sidebar control-sidebar-dark">
            </aside>
            <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{$page_name}</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php?page=accueil">Projet</a></li>
                                <li class="breadcrumb-item active">{$short_page_name}</li>
                            </ol>
                        </div>
                    </div>
                </div>
</div>