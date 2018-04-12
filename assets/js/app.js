import '../scss/common.scss';
let $ = require('jquery');

/* ----------- start function scrollTo jquery ---------*/
let scrollTo = (button, target, speed) => {
	$(button).click(function (){
		let goTo = $(target).offset().top - 60;
        $('html, body').animate({
            scrollTop: goTo
        }, speed);
    });
};

$(document).ready(function (){
    scrollTo("#Layer_1", ".Home", 1000);
    scrollTo(".header-navBarList-item1", ".PortalGun-section", 1000);
		scrollTo(".header-navBarList-item2", ".Escape-section", 1000);
		scrollTo(".header-navBarList-item3", ".Escape-section__registration__title", 1000);

});
/* ----------- end function scrollTo jquery ---------*/

// payload: {index: 0}
let changeColor = (i) => {
    gameInstance.SendMessage("GameInterface", "SetColor", JSON.stringify(i))
};

// payload: {indexPortalGun: 0}
let changePortalGunColor = (i) => {
    gameInstance.SendMessage("GameInterface", "SetPortalGunColor", JSON.stringify(i))
};

//let gameInstance = UnityLoader.instantiate("gameContainer", "Unity/Build_Prerelease.json");

/**
 * Loader overlay
 *
 * @type {Element | null}
 */
let loaderContainer = document.querySelector('#loader');

setTimeout(() => {
    loaderContainer.classList.add('fade-out');

    setTimeout(() => {
	   loaderContainer.style.display = 'none';
    }, 1000);
}, 3000);

// -------------- start fullScreen function -------------

let fullScreenBtn = document.querySelector('.fullScreenBtn');
let videoDemo = document.querySelector('.videoDemo');
let checkFullScreen = 0;

let fullScreenFct = () => {
  if (!checkFullScreen) {
    videoDemo.webkitRequestFullScreen();
    fullScreenBtn.classList.toggle('fullScreenBtn_fs');
    checkFullScreen = 1;
  } else {
    videoDemo.webkitExitFullscreen();
    fullScreenBtn.classList.toggle('fullScreenBtn_fs');
    checkFullScreen = 0;
  }
};

let startStop = () => {
  if (videoDemo.paused) {
    videoDemo.play()
  } else {
    videoDemo.pause()
  }
};

fullScreenBtn.addEventListener("click", () => {
  fullScreenFct();
});

videoDemo.addEventListener("dblclick", () => {
  fullScreenFct();
});

videoDemo.addEventListener("click", () => {
  startStop();
});

window.document.addEventListener("keyup", (e) => {
  if (e.keyCode === 27 && checkFullScreen) {
    videoDemo.webkitExitFullscreen();
    fullScreenBtn.classList.toggle('fullScreenBtn_fs');
    checkFullScreen = 0;
  }
});