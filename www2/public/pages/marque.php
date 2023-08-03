<?php
    if(isset($_POST['marque'])){
        $_SESSION['marque'] = $_POST['marque'];
    }
?>

<?php if($_GET['id'] == "phone"){?>
    <div class="marque">
        <p>De quelle marque sagit-il?</p>
        <form method="post">
            <button class="liste logo_m" name="marque" value="apple"><img src="<?= IMGS ?>logo_marques/apple.png" alt=""></button>
            <button class="liste logo_m" name="marque" value="1"><img src="<?= IMGS ?>logo_marques/Samsung.png" alt=""></button>
            <button class="liste logo_m" name="marque" value="huawei"><img src="<?= IMGS ?>logo_marques/huawei.png" alt=""></button>
            <button class="liste logo_m" name="marque" value="xiaomi"><img src="<?= IMGS ?>logo_marques/Xiaomi.png" alt=""></button>
            <button class="liste logo_m" name="marque" value="oppo"><img src="<?= IMGS ?>logo_marques/oppo.png" alt=""></button>
            <button class="liste logo_m" name="marque" value="wiko"><img src="<?= IMGS ?>logo_marques/wiko.png" alt=""></button>
            <button class="liste logo_m" name="marque" value="sony"><img src="<?= IMGS ?>logo_marques/Sony_logo.svg.png" alt=""></button>
            <button class="liste logo_m" name="marque" value="6"><img src="<?= IMGS ?>logo_marques/Asus-Logo.png" alt=""></button>
            <button class="liste logo_m" name="marque" value="motorola"><img src="<?= IMGS ?>logo_marques/Motorola.png" alt=""></button>
            <button class="liste logo_m" name="marque" value="zte"><img src="<?= IMGS ?>logo_marques/ZTE.png" alt=""></button>
        </form>
    </div>
<?php } elseif($_GET['id'] == "computer"){?>

<?php } elseif($_GET['id'] == "tablette"){ ?>

<?php } ?>
