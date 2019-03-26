 
<h3>Modifier une   tache</h3>
 
<form method="post" action="<?=site_url('indexx/modif_tache?id='.$_GET['id'])?>">
    Description : <input type="text" name="description" value="<?=set_value('description')?>" />
    <?= form_error('description','<em>','</em>') ?>
    <br/>
    Date debut  : <input type="date" name="date_debut" value="<?=set_value('date_debut')?>" />
    <?= form_error('date_debut','<em>','</em>') ?>
    <br />
    Date fin    : <input type="date" name="date_fin"  value="<?=set_value('date_fin')?>" />
    <?= form_error('date_fin','<em>','</em>') ?>
     <br/>
                  <input type="submit" value="Modifier" />

</form>

<br>

<a href="<?=site_url('indexx/retour') ?>">Retour a la page d'acceuil</a>
<!--   -->