<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>liste taches</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>liste de taches</h1> <hr>
<?php
$i=1;
 foreach ($tache as $value) {

     # code...
     echo $i.'.'.' ';
     echo 'du' . ' '.$value->date_debut.' '.' '.'au'.' ' ;
     echo $value->date_fin.' ';
     echo  $value->description.   '   ||   '   ."   " . ''.'<a href="'.site_url('indexx/conf_supp_tache/'.$value -> id).'">supprimer</a><br/><br/>'; 
    
   
    
     $i++;
 }
?>

   <a href="<?=site_url('indexx/select_data')?>">Mes taches</a>

     

</body>
</html>