import '../scss/common.scss';
var $ = require('jquery');

/* ----------- start function scrollTo jquery ---------*/
let scrollTo = (button, target, speed) => {
	$(button).click(function (){
		let goTo = $(target).offset().top - 100;
        $('html, body').animate({
            scrollTop: goTo
        }, speed);
    });
};

$(document).ready(function (){
    // scrollTo("#click1", "#div1", 2000);
    // scrollTo("#click2", "#div2", 1000);
    scrollTo(".header-navBarList-item1", ".portalGunSection", 1000);
    scrollTo("#Layer_1", "#div1", 1000);

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

let gameInstance = UnityLoader.instantiate("gameContainer", "Unity/BuildTest.json");

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
