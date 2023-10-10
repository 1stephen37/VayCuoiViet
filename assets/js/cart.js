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

const form_pay = document.getElementById('information');

const form_pay_container = form_pay.querySelector('.information .container');

console.log(form_pay_container);

function showForm_information(){
    form_pay.classList.remove('close');
    question.classList.add('close');
}

function showForm_login(){
    sign_up_form.classList.remove('close');
    question.classList.add('close');
}

form_pay.addEventListener('click', function() {
    form_pay.classList.add('close');
})

form_pay_container.addEventListener('click', function(e) {
    e.stopPropagation();
})
