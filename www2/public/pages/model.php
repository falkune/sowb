<?php
// requette vers la bd
$request = $connexion->prepare("SELECT * FROM modeles");
$request->execute();
$models = $request->fetchAll();

if(isset($_POST['model'])){
    $_SESSION['model'] = $_POST['model'];
}
?>
<div class="marque">
    <p>Quelle est le Modele?</p>
    <form method="post">
        <?php foreach($models as $model){ ?>
            <button class="liste model" name="model" value="xxx">djkld</button>
        <?php }?>
    </form>
</div>