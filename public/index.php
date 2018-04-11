<?php
    require __DIR__ . '/../app/config.php';

    require DIR_VIEWS . '/main/header.inc.php';
?>

<!-- <section class="Video-section" id="div1">
  <div class="Video-section__video">
    <div class="Video-section__video__overlay"></div>
    <video autoplay loop muted>
      <source src="videos/3d_model.mp4">
      Your browser does not support the video tag.
    </video>
  </div>
</section> -->

<video class="videoLanding" src="videos/3d_model.mp4" autoplay loop>
</video>
<section class="Home">
  <div class="Home-header">
    <h2 class="Home-headerText">Venez</h2>
    <h2 class="Home-headerText">vivre</h2>
    <h2 class="Home-headerText">l'innovation</h2>
  </div>
</section>

<!-- SECTION PORTALGUN -->

<section class="PortalGun-section">
  <div class="PortalGun-section__overlay">
    <img src="images/blueprint_bw.jpg" alt="blueprint">
  </div>
  <div class="PortalGun-section__description">
    <div class="PortalGun-section__description__left-border"></div>
    <div class="PortalGun-section__description__container">
      <span class="PortalGun-section__description__container__number">01</span>
      <p class="PortalGun-section__description__container__title">Portal Gun</p>
      <p class="PortalGun-section__description__container__paragraph">
        Aperture Science vous propose aujourd’hui une révolution. <br>
Un seul point d’entrée, un seul point de sortie. <br>
Entre les deux, un univers à découvrir.<br>
Le futur est enfin là.
      </p>
    </div>
    <div class="PortalGun-section__description__container__blueprint">
      <img src="images/blueprint_trace.png" alt="blueprint">
    </div>
  </div>
  </section>

    <div class="videoWrapper">
      <video muted>
        <source src="videos/escape.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
        <button class="videoStartBtn">voir la démo</button>
    </div>
<!-- FIN SECTION PORTALGUN -->

<!-- SECTION 3D MODEL -->
<section class="Model3D-section">
      <p class="Model3D-section__quote">"Anditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.”</p>
  <div class="webgl-content">
      <div id="gameContainer" style="width:600px;height:400px"></div>
      <div class="footer">
          <div class="webgl-logo"></div>
          <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
      </div>
  </div>
</section>
<!-- END 3D MODEL SECTION -->


<!-- ESCAPE GAME SECTION -->
<section class="Escape-section">
  <div class="Escape-section__description">
    <div class="Escape-section__description__left-border"></div>
    <div class="Escape-section__description__container">
      <span class="Escape-section__description__container__number">02</span>
      <p class="Escape-section__description__container__title">L'Escape Game</p>
      <p class="Escape-section__description__container__paragraph">Seul ou à deux, entrez dans l’Escape Game le plus <br /> immersif au monde.<br /> Un seul objectif : trouver la clé de sortie avant la fin du temps imparti. <br /> Un seul conseil : Oubliez tout ce que vous saviez, <br />ce que vous allez vivre
        dépasse <br />tout ce que vous avez pu imaginer…
      </p>
    </div>
  </div>
  <div class="Escape-section__video">
    <video autoplay loop muted>
      <source src="videos/escape.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
  <p class="Escape-section__quote">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.”</p>
  <div class="Escape-section__registration">
    <div class="Escape-section__registration__decoration">
      <img src="images/white_deco.png" alt="decoration">
    </div>
    <span class="Escape-section__registration__title">Rejoignez l'expérience</span>
    <div class="Escape-section__registration__icons">
      <div class="Escape-section__registration__icons__icon-container"><img src="images/icon_01.png" alt=""></div>
      <div class="Escape-section__registration__icons__icon-container"><img src="images/icon_02.png" alt=""></div>
      <div class="Escape-section__registration__icons__icon-container"><img src="images/icon_03.png" alt=""></div>
      <div class="Escape-section__registration__icons__icon-container"><img src="images/icon_04.png" alt=""></div>
      <div class="Escape-section__registration__icons__icon-container"><img src="images/icon_05.png" alt=""></div>
      <div class="Escape-section__registration__icons__icon-container"><img src="images/icon_06.png" alt=""></div>
      <div class="Escape-section__registration__icons__icon-container"><img src="images/icon_07.png" alt=""></div>
      <div class="Escape-section__registration__icons__icon-container"><img src="images/icon_08.png" alt=""></div>
      <div class="Escape-section__registration__icons__icon-container"><img src="images/icon_09.png" alt=""></div>
      <div class="Escape-section__registration__icons__icon-container"><img src="images/icon_10.png" alt=""></div>
    </div>
    <span class="Escape-section__registration__span">Inscrivez-vous.</span>
    <div class="Escape-section__registration__container">
      <a class="Escape-section__registration__container__link"><img src="images/test.svg" alt="register_icon"></a>
    </div>
  </div>
</section>
<!-- END ESCAPE GAME SECTION -->

<?php
    require DIR_VIEWS . '/main/footer.inc.php';
?>
