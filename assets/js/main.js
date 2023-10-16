const logo = document.querySelector('header .nav .nav-link img');

const logo_footer = document.querySelector("footer .footer .left .logo");

logo_footer.addEventListener('click', function () {
    window.open('index.php', '_self');
});

logo.addEventListener('click', function () {
    window.open('index.php', '_self');
});

const sub_menu = document.getElementById('sub-menu');

const link = document.querySelector('header .nav .nav-link:nth-child(5)');

link.addEventListener('click', function () {
    if (sub_menu.classList.contains('open')) {
        sub_menu.classList.remove('open');
    } else {
        sub_menu.classList.add('open');
    }
});


const search = document.querySelector('#search');

const search_input = document.querySelector('#search-input');

search.addEventListener('click', function () {
    if (search_input.classList.contains('close')) {
        search_input.classList.remove('close');
    } else {
        search_input.classList.add('close');
    }
});

const button_sign = document.getElementById('sign-button');

const sign_in_form = document.getElementById('sign-in');

const sign_in_container = document.querySelector('.sign-in .container');

button_sign.addEventListener('click', function () {
    sign_in_form.classList.remove('close');
});
sign_in_form.addEventListener('click', function () {
    sign_in_form.classList.add('close');
});

sign_in_container.addEventListener("click", function (event) {
    event.stopPropagation()
})

const button_sign_up = document.querySelector('.sign-in .container .content .right .quest');

const sign_up_form = document.getElementById('sign-up');

const sign_up_container = document.querySelector('.sign-up .container');

button_sign_up.addEventListener('click', function () {
    sign_up_form.classList.remove('close');
});

sign_up_form.addEventListener('click', function () {
    sign_up_form.classList.add('close');
});

sign_up_container.addEventListener("click", function (event) {
    event.stopPropagation()
})

const miss_button = document.querySelector('.sign-in .container .content .right .miss');

const miss = document.getElementById('miss_pass');

const miss_container = document.querySelector('.miss_pass .container');

miss_button.addEventListener('click', function(e) {
    miss.classList.remove('close');
});

miss.addEventListener('click', function() {
    miss.classList.add('close');
})

miss_container.addEventListener('click', function (e) {
    e.stopPropagation();
})

function show() {
    console.log("13123");
}

const Catalog = document.querySelector('.filter .type .input select');

function open_cata() {
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


function check_mail_miss() {

    const email_miss = document.querySelector('.miss_pass .container .input input');

    if(email_miss.value === '') {
        return false;
    } else {
        console.log(email_miss.value);
        return true;
    }
}

const content_keyword = document.querySelector("input[name = 'search_content']");

const btn_search = document.getElementById('btn_search');

function check_search(content_keyword) {
    if(content_keyword.value == '') {
        content_keyword.focus();
        content_keyword.value = '';
        // content_keyword.placeholder = "bạn phải nhập mới có thể tìm";
    } else {
        const str = "index.php?act=dress&keyword=" + content_keyword.value;
        window.open(str, "_self");
    }
}

btn_search.addEventListener('click', function() {
    check_search(content_keyword);
});

const sorry = document.getElementById('sorry');

function sorry_panel() {
    sorry.classList.remove('close');
}

sorry.addEventListener('click',function() {
    sorry.classList.add('close');
})







