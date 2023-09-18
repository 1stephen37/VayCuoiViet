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

function chek_form_sign_in() {

    const email_sign_in = document.getElementById('email_sign_in');

    const user_password_sign_in = document.getElementById('user_password_sign_in');

    if (email_sign_in.value === '') {
        email_sign_in.placeholder = 'Bạn phải nhập tài khoản';
        email_sign_in.focus();
        return false;
    }

    // if(email_sign_in.value == 'admin') {
    //     alert('user_name  goi');
    //     return false;
    // }

    if (user_password_sign_in.value == 'admin123' && email_sign_in.value == 'admin') {
        // window.open('index.php?act=admin', '_self');
        alert('10 diem lun goi');
    }

    if (user_password_sign_in.value === '') {
        user_password_sign_in.placeholder = 'Bạn phải nhập mật khẩu';
        user_password_sign_in.focus();
        return false;
    }

    return true;

}

function chek_form_sign_up() {

    const user_name_sign_up = document.getElementById('user_name_sign_up');

    const user_password_sign_up = document.getElementById('user_password_sign_in');

    if (user_name_sign_up.value === '') {
        user_name_sign_up.placeholder = 'Bạn phải nhập tài khoản';
        user_name_sign_up.focus();
        return false;
    }

    if (user_password_sign_up.value === '') {
        user_password_sign_up.placeholder = 'Bạn phải mật khẩu';
        user_password_sign_up.focus();
        return false;
    }

    return true;

}

const Catalog = document.querySelector('.filter .type .input select');

function open_cata() {
    // console.log(Catalog.value);
    // alert();
    window.open(`index.php?act=dress&danhmuc=${Catalog.value}`, '_self');
}

function check_form_order() {

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










