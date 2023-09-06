const logo = document.querySelector('header .nav .nav-link img');

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
    window.open('admin/index.php?act=admin', '_self');
});

const Catalog = document.querySelector('.filter .type .input select');

function open_cata () {
    // console.log(Catalog.value);
    // alert();
    window.open(`index.php?act=dress&danhmuc=${Catalog.value}`, '_self');
}








