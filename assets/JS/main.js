const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () =>
    container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () =>
    container.classList.remove('right-panel-active'));




// JS for exp-6
var ck_name = /^[a-zA-Z ]*$/;
var ck_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;

function validate(form) {
    var name = form.name.value;
    var email = form.email.value;
    var password = form.password.value;


    var errors = [];

    if (!ck_name.test(name)) {
        errors[errors.length] = "Enter Your valid Name .";
    }

    if (!ck_email.test(email)) {
        errors[errors.length] = "You must enter a valid email address.";
    }
    if (!ck_password.test(password)) {
        errors[errors.length] = "You must enter a valid Password min 6 char.";
    }

    if (errors.length > 0) {
        reportErrors(errors);
        return false;
    }

    return true;
}

function reportErrors(errors) {
    var msg = "Please Enter Valide Data...\n";
    for (var i = 0; i < errors.length; i++) {
        var numError = i + 1;
        msg += "\n" + numError + ". " + errors[i];
    }
    alert(msg);
}