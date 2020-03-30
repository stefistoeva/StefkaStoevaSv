function validateForm() {
    const form = document.forms['contactMe'];
    const company = form['company'].value;
    const email = form['email'].value;
    const subject = form['subject'].value;
    const message = form['message'].value;

    validateField(company);
    validateField(email);
    validateField(subject);
    validateField(message);
}

function validateField(field) {
    if (!field) {
        alert(`${capitalizeFirstLetter(field)} must be filled out`);
        return false;
    }

    return true;
}

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}