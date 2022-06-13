window.addEventListener('scroll', function() {
    let menu = document.querySelector('.menu');
    if (window.pageYOffset >= 500) {
        menu.classList.add('sticky');
        // } else if (window.pageYOffset >= 80) {
        //     menu.classList.remove('sticky');

        // } else if (window.pageYOffset >= 100) {
        //     menu.classList.remove('sticky');

    } else {
        menu.classList.remove('sticky');

    };
});

// banner
// 1
window.addEventListener('scroll', function() {
    let img1 = document.querySelector('.img1');
    if (window.pageYOffset >= 80) {
        img1.classList.add('imgOne');
    } else {
        img1.classList.remove('imgOne');

    }

});

// 2

window.addEventListener('scroll', function() {
    let img2 = document.querySelector('.img2');
    if (window.pageYOffset >= 90) {
        img2.classList.add('imgTwo');
    } else {
        img2.classList.remove('imgTwo');

    }

});

// choose

window.addEventListener('scroll', function() {
    let choose = document.querySelector('.choose-us');
    if (window.pageYOffset >= 2000) {
        choose.classList.add('choose-us-new');
        // console.log('scroll');

    } else {
        choose.classList.remove('choose-us-new');

    }
});


// single-banner

window.addEventListener('scroll', function() {
    let singleBanner = document.querySelector('.single-banner');
    if (window.pageYOffset >= 3800) {
        singleBanner.classList.add('single-banner-new');

    } else {
        singleBanner.classList.remove('single-banner-new');

    }
});

// feature


window.addEventListener('scroll', function() {
    let feature = document.querySelector('.feature-sec');
    if (window.pageYOffset >= 4100) {
        feature.classList.add('feature-sec-new');

    } else {
        feature.classList.remove('feature-sec-new');

    }
});

// team

window.addEventListener('scroll', function() {
    let team = document.querySelector('.team-sec');
    if (window.pageYOffset >= 6300) {
        team.classList.add('team-new');

    } else {
        team.classList.remove('team-new');

    }
});





// count

let count1 = 50;

let menu = setInterval(menu2, 100 / 500);

function menu2() {

    count1++;
    let num1 = document.querySelector('#num1').innerHTML = count1;

    if (count1 == 1500) {
        clearInterval(menu);
    }

}

let count2 = 0;

let food = setInterval(food2, 0);

function food2() {

    count2++;
    let num2 = document.querySelector('#num2').innerHTML = count2;

    if (count2 == 75) {
        clearInterval(food);
    }

};

let count3 = 0;

let chief = setInterval(chief2, 0);

function chief2() {

    count3++;
    let num3 = document.querySelector('#num3').innerHTML = count3;

    if (count3 == 200) {
        clearInterval(chief);
    }

};

let count4 = 0;

let client = setInterval(client2, 1);

function client2() {

    count4++;
    let num4 = document.querySelector('#num4').innerHTML = count4;

    if (count4 == 350) {
        clearInterval(client);
    }

};


// gallery img

let galBtnOne = document.querySelector('.galBtnOne');
let galBtn2 = document.querySelector('.galBtn2');
let galImgRow1 = document.querySelector('.gal_img_row');
let galImgRow2 = document.querySelector('.gal_img_row2');


galBtnOne.addEventListener('click', function() {


    galImgRow1.style.transform = "translateX(0)";
    galImgRow1.style.transition = "all .9s ease-in-out";
    galImgRow2.style.transform = "translateX(-2500px)";


});

galBtn2.addEventListener('click', function() {


    galImgRow2.style.transform = "translateX(0)";
    // galImgRow2.style.opacity = "1";
    galImgRow2.style.transition = "all .9s ease-in-out";
    galImgRow1.style.transform = "translateX(-2500px)";
})