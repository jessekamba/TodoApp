<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>conf sup_tache</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <h1>Suppression de la tache</h1> <hr>

    <p>voulez-vous vraiment supprimer cette tache? <br> </p>

    <?php
         
           foreach ($res as $v) {
               echo ($v->description .' <a href="'.site_url('indexx/sup_tache/'.$v->id).'">  oui</a> '  );
           }
        
       

            
    ?>

</body>
</html>