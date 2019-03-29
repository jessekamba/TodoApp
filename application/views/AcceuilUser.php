<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TodoApp</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.css');?>"> 
        <script src="main.js"></script>
    </head>
    <body>
        <div class="container">
            <form action="<?= site_url('indexx/authentification')?>" method="post">
                <div class="form-group">
                    
                    <label for="pseudo"></label>
                    <input type="text" class="form-control" name="pseudo" id="" aria-describedby="helpId" placeholder="pseudo"  value="<?=set_value('pseudo')?>"/>
                    <?= form_error('pseudo','<em>','</em>') ?>
                    <small id="helpId" class="form-text text-muted">Votre peudo</small>
                   
                    <label for="mot de passe"></label>
                    <input type="text" class="form-control" name="mdp" id="" aria-describedby="helpId" placeholder="mot de passe" value="<?=set_value('mdp')?>"/>
                    <?= form_error('mdp','<em>','</em>') ?>
                    <small id="helpId" class="form-text text-muted">Votre Mot de passe</small><br>
                    <input name="" id="" class="btn btn-success" type="submit" value="Valider">
                    
                 
                </div>
            </form>
        </div>

        <script src="<?= base_url('asset/js/jquery3.js')?>"></script> 
        <script src="<?= base_url('asset/js/bootstrap.js')?>"></script> 
        
    </body>
</html>