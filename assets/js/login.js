const logo = document.querySelector('header .nav .nav-link img');

const logo_footer = document.querySelector("footer .footer .left .logo");

logo_footer.addEventListener('click', function () {
    window.open('index.php', '_self');
});

logo.addEventListener('click', function() {
    window.open('index.php', '_self');
});

const sub_menu = document.getElementById('sub-menu');

const link = document.querySelector('header .nav .nav-link:nth-child(5)');

link.addEventListener('click', function () {
    if(sub_menu.classList.contains('open')) {
        sub_menu.classList.remove('open');
    } else {
        sub_menu.classList.add('open');
    }
});


const search = document.querySelector('#search');

const search_input = document.querySelector('#search-input');

search.addEventListener('click', function() {
    if(search_input.classList.contains('close')) {
        search_input.classList.remove('close');
    } else {
        search_input.classList.add('close');
    }
} );

const button_sign = document.getElementById('sign-button');

button_sign.addEventListener('click', function () {
   window.open('user/index.php', '_self');
});

const Catalog = document.querySelector('.filter .type .input select');

function open_cata () {
    // console.log(Catalog.value);
    // alert();
    window.open(`index.php?act=dress&danhmuc=${Catalog.value}`, '_self');
}

const mobile_icon = document.querySelector("header .nav .icon-mobile");

const mobile_menu = document.querySelector("header .mobile-menu");

mobile_icon.addEventListener('click', function () {
    if (mobile_menu.classList.contains('close')) {
        mobile_menu.classList.remove('close');
    } else {
        mobile_menu.classList.add('close');
    }
});

const main_img = document.querySelector(".section1 .left .main-img img");

const sub_img = document.querySelectorAll(".section1 .left .sub-img .img img");

for(sub of sub_img) {
    sub.addEventListener('click', function() {
        main_img.src = sub.src;
    });
}




