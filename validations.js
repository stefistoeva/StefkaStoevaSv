function validateForm() {
    const form = document.forms['contactMe'];
    const company = form['company'];
    const email = form['email'];
    const subject = form['subject'];
    const message = form['message'];

    // const name = obj => Object.keys(obj)[0];
    // ${name({company}).charAt(0).toUpperCase() + name({company}).slice(1)}
    if (company.value == "") {
        company.style.borderColor = "red";
        alert(`Company must be filled out`);
        // $('#alertDanger').style.visibility = 'visible';
        $('#lname').focus(function() {
            $('#lname').css('border','2px solid rgba(0, 0, 0, 0.1)');
        });
        return false;
    } 

    if (email.value == "" || !email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
        email.style.borderColor = "red";
        alert(`Please enter a valid email address!`);
        $('#email').focus(function() {
            $('#email').css('border','2px solid rgba(0, 0, 0, 0.1)');
        });
        return false;
    } 
    if (subject.value == "") {
        subject.style.borderColor = "red";
        alert(`Subject must be filled out`);
        $('#subject').focus(function() {
            $('#subject').css('border','2px solid rgba(0, 0, 0, 0.1)');
        });
        return false;
    } 
    if (message.value == "") {
        message.style.borderColor = "red";
        alert(`Message must be filled out`);
        $('#message').focus(function() {
            $('#message').css('border','2px solid rgba(0, 0, 0, 0.1)');
        });
        return false;
    }

    return true;
}

