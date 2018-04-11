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
    console.log("bonjour" + i);
    gameInstance.SendMessage("GameInterface", "SetPortalGunColor", JSON.stringify(i))
};

let gameInstance = UnityLoader.instantiate("gameContainer", "Unity/Build_Web.json");

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

let scaleHeaderText = () => {
  let headerText = document.querySelectorAll(".Home-headerText");

  if (window.scrollY > 0 && window.scrollY < 100) {
    let firstFont = headerText[0].style.fontSize + Math.floor(window.scrollY);
    headerText[0].style.fontSize = Math.floor(window.scrollY) / 2 + "px";
  }
  if (window.scrollY > 50 && window.scrollY < 150) {
    let firstFont = headerText[1].style.fontSize + Math.floor(window.scrollY);
    headerText[1].style.fontSize = (Math.floor(window.scrollY) - 50) / 2 + "px";
  }
  if (window.scrollY > 100 && window.scrollY < 200) {
    let firstFont = headerText[2].style.fontSize + Math.floor(window.scrollY);
    headerText[2].style.fontSize = (Math.floor(window.scrollY) - 100) / 2 + "px";
  }
  if (window.scrollY === 0) {
    for (let i = 0; i < 3; i++)
    headerText[i].style.display = "none";
  }
  else {
    for (let i = 0; i < 3; i++)
    headerText[i].style.display = "block";
  }
};

document.addEventListener('scroll', () => {
  scaleHeaderText();
});