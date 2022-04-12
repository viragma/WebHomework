window.onload = function() {
    var kuld = document.getElementById("reg");
    if (kuld) {
        kuld.disabled = true;
    }
};


function ellen() {
    var rendben = true;
    var fokusz = null;

    var  ln = document.getElementById("ln");
    console.log(ln);
    if (ln) {

        if (ln.value.length<3) {
            rendben = false;
            ln.style.background = '#f99';
            fokusz = ln;
        } else {
            ln.style.background = '#9f9';
        }
    }
    var fn = document.getElementById("fn");
    if (fn) {
        if (fn.value.length<3) {
            rendben = false;
            fn.style.background = '#f99';
            fokusz = fn;
        } else {
            fn.style.background = '#9f9';
        }
    }
    var un = document.getElementById("un");
    if (un) {
        if (un.value.length<3) {
            rendben = false;
            un.style.background = '#f99';
            fokusz = un;
        } else {
            un.style.background = '#9f9';
        }
    }

    var email = document.getElementById("email");
    if (email) {
        var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; //online segítség: https://regex101.com/
        if (!checkPattern.test(email.value)) {
            rendben = false;
            email.style.background = '#f99';
            fokusz = email;
        } else {
            email.style.background = '#9f9';
        }
    }
    var ps1 = document.getElementById("pass1");
    var ps2 = document.getElementById("pass2");
    if (ps1 && ps2) {
        if (ps1.value.length<=6 || ps1.value!==ps2.value) {
            rendben = false;
            ps1.style.background = '#f99';
            ps2.style.background = '#f99';
            fokusz = ps1;
            fokusz = ps2;
        } else {
            ps1.style.background = '#9f9';
            ps2.style.background = '#9f9';
        }
    }


    if (fokusz) {
        fokusz.focus();
    }

    var kuld = document.getElementById("reg");
    if (kuld) {
        kuld.disabled = !rendben;
    }

    return rendben;
}