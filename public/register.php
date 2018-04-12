<?php
require __DIR__ . '/../app/config.php';

require DIR_VIEWS . '/main/header.inc.php';
?>

<div class="container">
<div class="main-container">
<p class="textContainer" >Formulaire d'inscription à l'experience d'Escape Game d'Aperture Science</p>

<?php
if ($advert = getAdvert()) {
    echo '<p class="'.$advert['type'].'">'.$advert['message'].'</p>';
}
?>

    <form class="form" action="do/register.php" method="post">
        <div class="form-group">

            <input class="form-input" type="text" name="lastName" id="lastName" placeholder="Nom" value="<?=$_SESSION['form']['lastName'] ?? ''?>">
        </div>

        <div class="form-group">

            <input class="form-input"  type="text" name="firstName" placeholder="Prénom" id="firstName">
        </div>

        <div class="form-group">

            <input class="form-input" type="date" name="birthdate" placeholder="JJ/MM/AAAA" id="birthdate">
        </div>

        <div class="form-group">

            <input class="form-input" type="email" name="email" placeholder="Adresse email" id="email">
        </div>

        <div class="form-group">
            <label  class="sexe-input sexe" for="sexe">Sexe</label>
            <input class="sexe-input" type="radio" name="sexe" id="homme"> <label class="sexe" for="homme">Homme</label>
            <input class="sexe-input" type="radio" name="sexe" id="femme"> <label class="sexe" for="femme">Femme</label>
        </div>

        <div class="form-group">

            <input class="form-input" type="tel" name="phone" placeholder="Numéro de tel" id="tel">
        </div>

        <div class="form-group">

            <input class="form-input" type="text" name="emergency" placeholder="Personne à contacter en cas de décès" id="emergency">
        </div>

        <div class="form-group">
            <input class="form-input valid" type="submit" value="S'inscrire">
        </div>
    </form>
</div>
<?php
$_SESSION['form'] = [];

require DIR_VIEWS . '/main/footer.inc.php';
?>