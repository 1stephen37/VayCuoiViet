const main_img = document.querySelector(".section1 .left .main-img img");

const sub_img = document.querySelectorAll(".section1 .left .sub-img .img img");

console.log(sub_img);

for(let sub of sub_img) {
    sub.addEventListener('click', function() {
        main_img.src = sub.src;
    });
}

const mirror = document.getElementById("mirror");

let scope = 4;

main_img.addEventListener('mousemove', function(e) {
    mirror.classList.remove('close');

    mirror.style.top = `${e.clientY}px`;
    mirror.style.left = `${e.clientX}px`;

    mirror.style.backgroundSize = '600px 800px';

    let percentMouseOfWidth = (e.offsetX / this.offsetWidth) * 100;
    let percentMouseOfHeight = (e.offsetX / this.offsetHeight) * 100;

    mirror.style.backgroundPosition = `${percentMouseOfWidth}% ${percentMouseOfHeight}%`;

});

main_img.addEventListener('mouseleave', function() {
    mirror.classList.add('close');
});

