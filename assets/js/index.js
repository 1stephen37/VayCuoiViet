     // const wedding_img = document.querySelector('.section3 .box .box-3 .img');

    
    // console.log(wedding_img);
    
    // wedding_img.addEventListener('hover', function () {
    //     const effect = document.createElement('.section3 .box .box-3 .img .effect');
    //     effect.addEventListener('click', function () { 
    //         window.open('product.html', '_self');
    //     });
    // });

    const btn_form = document.querySelector('.section2 .left .button');

    const img_form = document.querySelector('.section2 .right');

    const showForm = function () { 
        form.classList.remove('close');
    }

    const hideForm = function () { 
        form.classList.add('close');
    }

    img_form.addEventListener('click', showForm);
    btn_form.addEventListener('click', showForm);

    const form = document.querySelector('#form');

    form.addEventListener('click', hideForm );

    const form_container = document.querySelector('#form .container');

    form_container.addEventListener("click", function(event) {
        event.stopPropagation();
    });

    const width_mobile = screen.availWidth;

    if(width_mobile <= 740) {
        resize_write_section2();
    } else {

    }

    function resize_write_section2() {
        const container = document.querySelector('.section2 .right');

        const output = '    <div class="heading flex">\n' +
            '                   sản phẩm nổi bật nhất trong tháng\n' +
            '                       <img src="assets/img/section/Vector 1.svg" alt="" class="img-full">\n' +
            '                      </div>';

        container.innerHTML = output;
        console.log(width_mobile);
    }

