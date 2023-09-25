const notice = document.querySelector('.notice');

const notice_container = document.querySelector('.notice .container');

notice_container.addEventListener('click', function(e) {
    e.stopPropagation();
})

notice.addEventListener('click', function() {
    notice.classList.add('close');
})

const code = document.querySelector('.code input[name=\'codeValue\']');

console.log(code.value);

function checkCode() {
    if(code.value === '') {
        code.focus();
        return false;
    }

    return true;
}

function checkPass() {

    const pass1 = document.querySelector('miss_pass_re');

    const pass2 = document.querySelector('miss_pass_re2');

    if (pass1.value === '' || pass2.value === '') {
        return false;
    }

    if (pass1.value === '') {
        pass1.focus();
        return false;
    }

    if (pass2.value === '') {
        pass2.focus();
        return false;
    }

    if (pass1.value !== pass2.value) {
        pass2.focus();
        return false;
    }

    // return true;
}
