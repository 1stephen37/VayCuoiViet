const form_contact = document.querySelectorAll('.contact_form_disable');

const form_contact_input = document.querySelector('#form');

const form_contact_input_container = document.querySelector('#form .container');

for(let form of form_contact) {
    form.addEventListener('submit', function(e) {
        e.preventDefault();
    })

    const contact_btn = form.querySelector('input[name="contact_btn"]');

    contact_btn.addEventListener('click', function(e) {
        form_contact_input.classList.remove('close');
    })

}

form_contact_input.addEventListener('click', function(e) {
    form_contact_input.classList.add('close');
})

form_contact_input_container.addEventListener('click', function(e) {
    e.stopPropagation();
})



