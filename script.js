function validateForm() {
    const firstName =
        document.forms.RegForm.firstname.value;
    const lastName =
        document.forms.RegForm.lastname.value;
    const mobile =
        document.forms.RegForm.mobile.value;
    const email =
        document.forms.RegForm.email.value;
    
    const regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;
                                  // 

    if (firstName === "" || regName.test(name)) {
        window.alert("Please enter your first name.");
        firstname.focus();
        return false;
    }

    if (lastName === "" || regName.test(name)) {
        window.alert("Please enter your last name.");
        lastname.focus();
        return false;
    }

    if (mobile === "") {
        window.alert("Please enter your phone number.");
        mobile.focus();
        return false;
    }

    if (email === "" || !regEmail.test(email)) {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    return true;
}
       