<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>todoApp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Bienvenu sur TODO-APP, votre gestionnnaire de taches</h1>
      <hr/>
        <a href="<?=site_url('indexx/select_data')?>">Mes taches</a>  ||
        <a href='<?= site_url('indexx/lien_nouvelle_tache');  ?>'> Nouvelle tache</a> <br><br>

         
        

 <?php
//  $i=1;
//  foreach ($tache as $value) {

//      # code...
//      echo $i.'.'.' ';
//      echo 'du' . ' '.$value->date_debut.' '.' '.'au'.' ' ;
//      echo $value->date_fin.' ';
//      echo  $value->description.   '   ||   '."   " . ''.'<br>'.'<br>';
      
    
//      $i++;
//  }
?>

</body>
</html>




