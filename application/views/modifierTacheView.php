<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>TodoApp</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url('MDB4/css/font-awesome.min.css')?>">

    <!-- Material Design Bootstrap -->
    <link href="<?=base_url('MDB4/css/mdb.css')?>" rel="stylesheet">

</head>

<body class="hidden-sn mdb-skin">

    <!--Double navigation-->
    <header>

        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav custom-scrollbar">

            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light">
                    <a href="#"><img src="img/cristal.png" class="img-fluid flex-center"></a>
                </div>
            </li><br><br>
            <!--/. Logo -->

            
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    
                    <li>
                    <a href="<?= site_url('indexx/charger_acceuil')?>" class="waves-effect "><i class="fa fa-home"></i>Acceuil</a>
                        <a class="collapsible-header waves-effect arrow-r"><i class="fa fa-calendar"></i>Taches<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="<?= site_url('indexx/lien_nouvelle_tache')?>" class="waves-effect "><i class="fa fa-plus"></i>Ajouter une tache</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('indexx/select_data')?>" class="waves-effect"><i class="fa fa-align-justify"></i>Lister mes taches</a>
                                </li>
                                
                                 
                            </ul>
                        </div>
                    </li>
                     
                     
                </ul>
            </li>
            <!--/. Side navigation links -->

        </ul>
        <!--/. Sidebar navigation -->

        <!--Navbar-->
        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav blue-gradient">

            <!-- SideNav slide-out button -->
            <div class="float-xs-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>

            <!-- Breadcrumb-->
            <div class="breadcrumb-dn">
                <p>TodoApp</p>
            </div>

            <ul class="nav navbar-nav float-xs-right">

               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>  <?=$this->session->pseudo?></a>
                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item" href="<?=site_url('indexx/deconnexion')?>">Se deconnecter</a>
                        
                         
                    </div>
                </li>
            </ul>

        </nav>
        <!--/.Navbar-->

    </header>
    <!--/Double navigation-->

    <main>
        <div class="container ">
               <br><br><br>

         <form action="<?=site_url('indexx/modif_tache?id='.$_GET['id'])?>" method="POST">
                    <div class="card">
                        <div class="card-block">
                    
                            <!--Header-->
                            <div class="form-header blue-gradient">
                                <h3><i class="fa  fa-edit"></i> Modifier la tache</h3>
                            </div>
                    
                            <!--Body-->
                           <div class="md-form">
                                <i class="fa fa-edit"></i> 
                                <input type="text" name="description"id="form3" class="form-control" value="<?=set_value('description')?>">
                                <label for="form3">Description de la tache</label>
                                <div class="alert alert-danger">
                                    <?= form_error('description','<em>','</em>') ?>
                                </div>

                            </div>
                            
                            <div class="text-xs-center ">
                                <button class="btn  blue-gradient" type="submit">Modifier</button>
                                
                            </div>
                    
                        </div>
                    </div>
                </form>
                <div style="height: 100px"></div>
              
           
           

            <footer class="page-footer blue center-on-small-only  blue-gradient">

                    

                    <!--Copyright-->
                        <div class="footer-copyright">
                            <div class="container-fluid">
                                © 2019 Copyright: <a href=" ">TODO APP </a>

                            </div>
                        </div>
                    <!--/.Copyright-->

                </footer>
            <!--/.Footer-->

        </div>
    </main>


    <!-- /Start your project here-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script src="<?= base_url('asset/js/jquery3.js')?>"></script> 
  <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?=base_url('MDB4/js/tether.min.js')?>"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?=base_url('MDB4/js/mdb.js')?>"></script>
    <script>
        $(".button-collapse").sideNav();

        // Custom scrollbar init
        var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);
    </script>

</body>

</html>