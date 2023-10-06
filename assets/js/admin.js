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

const mobile_icon = document.querySelector("header .nav .icon-mobile");

const mobile_menu = document.querySelector("header .mobile-menu");

mobile_menu.innerHTML = `
    
     <a href="../index.php?act=about" class="nav_mobile">
            Về chúng tối
        </a>

        <a href="../index.php?act=thuvien" class="nav_mobile">
            Thư viện
        </a>
  
        <a href="../index.php?act=contact" class="nav_mobile">
            Liên hệ
        </a>

        <a href="../index.php?act=dress" class="nav_mobile">
            Váy cưới
        </a>

        <a href="../index.php?act=error" class="nav_mobile">
            Quay - Chụp ảnh cưới
        </a>

        <a href="../index.php?act=error" class="nav_mobile">
            Makeup
        </a>

        <a href="admin/index.php" class="nav_mobile">
            Tài khoản
        </a>
    
`;

mobile_icon.addEventListener('click', function () {
    if (mobile_menu.classList.contains('close')) {
        mobile_menu.classList.remove('close');
    } else {
        mobile_menu.classList.add('close');
    }
});


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




