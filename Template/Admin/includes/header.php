<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=APP_NAME?> - <?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?=$admin_assets.'/images/logo.png';?>">

    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <!-- Icon Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="<?=$admin_assets.'/vendors/DataTables/datatables.min.css'?>">

    <link rel="stylesheet" href="<?=$admin_assets.'/css/style.css'?>">


    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }
    </style>
        <?php if($request === '/Admin/blog') : ?>
        <script src="<?=$admin_assets.'/vendors/quill/quill.bubble.css';?>"></script>
        <script src="<?=$admin_assets.'/vendors/quill/quill.snow.css';?>"></script>
    <?php endif;?>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/Admin/dashboard"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Navigations</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus"></i>Make Addition</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-clock-o"></i><a href="/Admin/session">Session</a></li>
                            <li><i class="fa fa-university"></i><a href="/Admin/faculty">Faculty</a></li>
                            <li><i class="fa fa-building"></i><a href="/Admin/department">Department</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i>Blog & Event</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-edit"></i><a href="/Admin/blog">Blog</a></li>
                            <li><i class="fa fa-calendar"></i><a href="/Admin/event">Events</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Library & Resources</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file"></i><a href="/Admin/pastqa">Past Q & A</a></li>
                            <li><i class="menu-icon fa fa-book"></i><a href="/Admin/ebook">Islamic E-Books</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/Admin/excos"> <i class="menu-icon fa fa-users"></i>Excos</a>
                    </li>
                    <li>
                        <a href="/Admin/ask-and-learn"> <i class="menu-icon fa fa-question-circle"></i>Ask & learn </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./dashboard.php">
                        MSSN NSUK CHAPTER
                    </a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo">
                    </a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </header>
        <!-- /#header -->
        <div class="overlay d-none">
        <span class="loader21"></span>
    </div>