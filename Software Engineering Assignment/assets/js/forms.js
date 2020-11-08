 function passwdRecov(form, ansq1, ansq2, ansq3)
 {
     var passwd = ansq1.value+ansq2.value+ansq3.value;

         // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(passwd);

    // Make sure the plaintext password doesn't get sent. 
    passwd = "";
    ansq3.value = "";
    ansq2.value = "";
    ansq1.value = "";

    // Finally submit the form. 
    form.submit();

     //formhash(form, passwd);
 }

function formhash(form, password) {
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Make sure the plaintext password doesn't get sent. 
    password.value = "";

    // Finally submit the form. 
    form.submit();
}

function regformhash(form, uid, email, password, conf) {
    // Check each field has a value
    if (uid.value == '' || email.value == '' || password.value == '' || conf.value == '') {
        alert('You must provide all the requested details. Please try again');
        return false;
    }
    
    // Check the username
    re = /^\w+$/; 
    if(!re.test(form.username.value)) { 
        alert("Username must contain only letters, numbers and underscores. Please try again"); 
        form.username.focus();
        return false; 
    }
    
    // Check that the password is sufficiently long (min 6 chars)
    // The check is duplicated below, but this is included to give more
    // specific guidance to the user
    if (password.value.length < 6) {
        alert('Passwords must be at least 6 characters long.  Please try again');
        form.password.focus();
        return false;
    }
    
    // At least one number, one lowercase and one uppercase letter 
    // At least six characters 
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    if (!re.test(password.value)) {
        alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
        return false;
    }
    
    // Check password and confirmation are the same
    if (password.value != conf.value) {
        alert('Your password and confirmation do not match. Please try again');
        form.password.focus();
        return false;
    }
        
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    conf.value = "";

    // Finally submit the form. 
    form.submit();
    return true;
}

function changePasswd(form, pass, repass) {
    // Check each field has a value
    if (pass.value == '' || repass.value == '') {
        alert('You must provide all the requested details. Please try again');
        return false;
    }
    
    // Check that the password is sufficiently long (min 6 chars)
    // The check is duplicated below, but this is included to give more
    // specific guidance to the user
    if (pass.value.length < 6) {
        alert('Passwords must be at least 6 characters long.  Please try again');
        form.pass.focus();
        return false;
    }
    
    // At least one number, one lowercase and one uppercase letter 
    // At least six characters 
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    if (!re.test(pass.value)) {
        alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
        return false;
    }
    
    // Check password and confirmation are the same
    if (pass.value != repass.value) {
        alert('Your password and confirmation do not match. Please try again');
        form.pass.focus();
        return false;
    }
        
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(pass.value);

    // Make sure the plaintext password doesn't get sent. 
    pass.value = "";
    repass.value = "";

    // Finally submit the form. 
    form.submit();
    return true;
}

function changePasswdR(form, ansq1, ansq2, ansq3) {
    // Check each field has a value
    //alert('You must provide all the requested details. Please try again');
    if (ansq1.value == '' || ansq2.value == '' || ansq3.value == '') {
        alert('You must provide all the requested details. Please try again');
        return false;
    }
    
    // Check that the password is sufficiently long (min 6 chars)
    // The check is duplicated below, but this is included to give more
    // specific guidance to the user
    if (ansq1.value.length > 10)
     {
        alert('Answer must not be more than 10 characters long.  Please try again');
        form.ansq1.focus();
        return false;
    }
    if(ansq2.value.length > 10)
    {
        alert('Answer must not be more than 10 characters long.  Please try again');
        form.ansq2.focus();
        return false;
    }
    if(ansq3.value.length > 10)
    {
        alert('Answer must not be more than 10 characters long.  Please try again');
        form.ansq3.focus();
        return false;
    }
    
    var pass = ansq1.value+ansq2.value+ansq3.value;

    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(pass);
    // alert(pass);
    // Make sure the plaintext password doesn't get sent. 
    pass = "";
    ansq3.value = "";
    ansq2.value = "";
    ansq1.value = "";
    // Finally submit the form. 
    form.submit();
    return true;
}

function addUser(form, pass, repass, userid)
{
        // Check each field has a value
        if (form.value == '' || pass.value == '' || repass.value == '' || userid.value == '') 
        {
            alert('You must provide all the requested details. Please try again');
            return false;
        }
        
        // Check the username
        re = /^\w+$/; 
        if(!re.test(form.stid.value)) { 
            alert("Username must contain only letters, numbers and underscores. Please try again"); 
            form.username.focus();
            return false; 
        }
        
        // Check that the password is sufficiently long (min 6 chars)
        // The check is duplicated below, but this is included to give more
        // specific guidance to the user
        if (pass.value.length < 6) {
            alert('Passwords must be at least 6 characters long.  Please try again');
            form.password.focus();
            return false;
        }
        
        // At least one number, one lowercase and one uppercase letter 
        // At least six characters 
        var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
        if (!re.test(pass.value)) {
            alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
            return false;
        }
        
        // Check password and confirmation are the same
        if (pass.value != repass.value) {
            alert('Your password and confirmation do not match. Please try again');
            form.pass.focus();
            return false;
        }
            
        // Create a new element input, this will be our hashed password field. 
        var p = document.createElement("input");
    
        // Add the new element to our form. 
        form.appendChild(p);
        p.name = "p";
        p.type = "hidden";
        p.value = hex_sha512(pass.value);
    
        // Make sure the plaintext password doesn't get sent. 
        pass.value = "";
        repass.value = "";
    
        // Finally submit the form. 
        form.submit();
        return true;
}