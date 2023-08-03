<?php
// requette vers la bd
$request = $connexion->prepare("SELECT * FROM types WHERE modele = ?");
$request->execute(array($_POST["model"]));
$types = $request->fetchAll();
?>
<div class="marque">
    <p>Quelle est le Modele?</p>
    <form method="post">
        <?php foreach($types as $type){ ?>
            <button class="liste model" name="type" value="<?= $type['id_type'] ?>"><?= $type['nom_type'] ?></button>
        <?php }?>
    </form>
</div>