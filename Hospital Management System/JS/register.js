"use strict"
var fnamevalid = false;
var lnamevalid = false;
var emailvalid = false;
var gendervalid = false;
var unamevalid = false;
var passwordvalid = false;
var reemailvalid = false;
var utypevalid = false;



var i;

//name validation
function FnameEmpty() {
    var name = document.getElementById("firstname").value;
    var lent = name.length;

    if (name == "") {
        document.getElementById("fnameMsg").innerHTML = "*field can't be empty!";

        fnamevalid = false;
    } else if (name.length <= 3) {
        document.getElementById("fnameMsg").innerHTML = "*Name should be greater than 3 character!";

        fnamevalid = false;
    } else if (!isNaN(name)) {
        document.getElementById("fnameMsg").innerHTML = "*Only Characters are allowed!";
        fnamevalid = false;
    } else {
        fnamevalid = true;
    }


}


function FnameRemover() {
    document.getElementById('fnameMsg').innerHTML = "";

}

//Last name validation
function LnameEmpty() {
    var name = document.getElementById("lastname").value;
    var lent = name.length;

    if (name == "") {
        document.getElementById("lnameMsg").innerHTML = "*field can't be empty!";

        namevalid = false;
    } else if (name.length <= 3) {
        document.getElementById("lnameMsg").innerHTML = "*Name should be greater than 3 character!";

        namevalid = false;
    } else if (!isNaN(name)) {
        document.getElementById("lnameMsg").innerHTML = "*Only Characters are allowed!";
        namevalid = false;
    } else {
        namevalid = false;
    }


}


function LnameRemover() {
    document.getElementById('lnameMsg').innerHTML = "";

}


//email validation
function emailEmpty() {
    var email = document.getElementById("email").value;

    var email_datas = '' +
        'check_email=' + window.encodeURIComponent('ON') +
        '&emailId=' + window.encodeURIComponent(email);
    let xhttp = new XMLHttpRequest();

    if (email == "") {
        document.getElementById("emailMsg").innerHTML = "  *field can't be empty!";
        emailvalid = false;
    } else if (email.indexOf('@') <= 0) {

        document.getElementById("emailMsg").innerHTML = "  *Invalid @ format!";
        emailvalid = false;
    } else if (email.charAt(email.length - 4) != '.') {
        document.getElementById("emailMsg").innerHTML = "  *Invalid .(dot) position!";
        emailvalid = false;
    } else if (email != "") {

        xhttp.open('POST', 'php/reg.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(email_datas);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("emailMsg").innerHTML = this.responseText;
            } else {
                emailvalid = true;
            }
        }

        emailvalid = false;
    } else {
        emailvalid = true;
    }
}

function emailRemover() {
    document.getElementById('emailMsg').innerHTML = "";

}


//User Type
function usertypeEmpty() {
    var userType = document.getElementById("usertype").value;

    if (userType == "") {
        document.getElementById("utMsg").innerHTML = "*please choose at least one.";
        utypevalid = false;

    } else {
        utypevalid = true;
    }
}

function uTRemover() {
    document.getElementById("utMsg").innerHTML = "";
}

//Recovery email validation
function Rec_emailEmpty() {
    var email = document.getElementById("remail").value;


    if (email == "") {
        document.getElementById("remailMsg").innerHTML = "  *field can't be empty!";
        reemailvalid = false;
    } else if (email.indexOf('@') <= 0) {

        document.getElementById("remailMsg").innerHTML = "  *Invalid @ format!";
        reemailvalid = false;
    } else if (email.charAt(email.length - 4) != '.') {
        document.getElementById("remailMsg").innerHTML = "  *Invalid .(dot) position!";
        reemailvalid = false;
    } else {
        reemailvalid = true;
    }
}

function Rec_emailRemover() {
    document.getElementById('remailMsg').innerHTML = "";

}


//Username Validation
function unameEmpty() {
    var uname = document.getElementById("username").value;
    var username_datas = '' +
        'check_user=' + window.encodeURIComponent('ON') +
        '&userName=' + window.encodeURIComponent(uname);
    let xhttp = new XMLHttpRequest();

    if (uname == "") {
        document.getElementById("usernameMsg").innerHTML = "  *field can't be empty!";

        unamevalid = false;
    } else if (uname != "") {
        xhttp.open('POST', 'php/reg.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(username_datas);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("usernameMsg").innerHTML = this.responseText;


            }
        }
    } else {
        unamevalid = true;
    }
}

function unameRemover() {
    document.getElementById('usernameMsg').innerHTML = "";

}



// gender validation

function genderEmpty() {
    if (document.getElementById("male").checked) {
        gendervalid = true;
    } else if (document.getElementById("female").checked) {
        gendervalid = true;
    } else if (document.getElementById("other").checked) {
        gendervalid = true;
    } else {
        document.getElementById("genderMsg").innerHTML = "  *please choose a gender!";
        gendervalid = false;

    }
}

function genderRemover() {
    document.getElementById("genderMsg").innerHTML = "";
}


//password validation
function PEmpty() {
    var password = document.getElementById("password").value;
    var plength = password.length;
    if (password == "") {
        document.getElementById("passMsg").innerHTML = "*password field can't be empty!";
        window.pvalid = false;

    } else if ((plength < 6) || (plength > 8)) {
        document.getElementById("passMsg").innerHTML = "*password field should between 6 to 8 !";
        window.pvalid = false;

    } else {
        window.pvalid = true;

    }
}

function pRemover() {
    document.getElementById("passMsg").innerHTML = "";
}

function validation() {
    if (fnamevalid == true && lnamevalid == true && emailvalid == true && gendervalid == true && unamevalid == true && passwordvalid == true && reemailvalid == true && utypevalid == true) {
        return true;
    } else {
        return false;
    }
}