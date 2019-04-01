<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TodoAp<!DOCTYPE html>
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

        <div class="container">
            <header>
                <!--Navbar-->
                    <nav class="navbar navbar-fixed-top scrolling-navbar double-nav blue-gradient">
        
                    <!-- Breadcrumb-->
                        <div class="breadcrumb-dn">
                            <p>TodoApp:  Votre gestionnaire de taches</p>
                        </div>
                    </nav>
                <!--/.Navbar-->

            </header>
        </div>
            <!--/Double navigation-->

            <main>
                <div class="container ">
                    <br><br>

                <form action="<?= site_url('indexx/add_user')?>" method="POST">
                            <div class="card">
                                <div class="card-block">
                            
                                    <!--Header-->
                                    <div class="form-header blue-gradient">
                                        <h3><i class="fa  fa-user prefix"></i> Se connecter</h3>
                                    </div>
                            
                                    <!--Body-->
                                <div class="md-form">
                                        <i class="fa fa-user prefix"></i>
                                        <input type="text" name="pseudo" class="form-control"  value="<?=set_value('pseudo')?>"  >
                                        <label for="form3">Pseudo</label>
                                        <?= form_error('pseudo','<em>','</em>') ?>
                                    </div>
                                    
                                    <div class="md-form">
                                        <i class="fa fa-lock prefix"></i>
                                        <input type="password" name="mdp" class="form-control" value="<?=set_value('mdp')?>"  >
                                        <label for="form3">Mot de passe</label>
                                        <?= form_error('mdp','<em>','</em>') ?>
                                    </div>
                                    
                                    <div class="text-xs-center ">
                                        <button class="btn  blue-gradient" type="submit">Se connecter</button>
                                        
                                    </div>
                            
                                </div>
                            </div>
                        </form>
                        
                
                

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

        
        
                <script src="<?= base_url('asset/js/jquery3.js')?>"></script> 
                <script src="<?= base_url('asset/js/bootstrap.js')?>"></script> 
                
    </body>
</html>