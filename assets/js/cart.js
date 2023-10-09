const button_pay = document.querySelector('.cart .button .flex-btn .right');

const question = document.getElementById('question');

const question_container = document.querySelector('#question .container');


button_pay.addEventListener('click',function() {
    question.classList.remove('close');
});

question.addEventListener('click',function() {
    question.classList.add('close');
})

question_container.addEventListener('click',function(e) {
    e.stopPropagation();
})