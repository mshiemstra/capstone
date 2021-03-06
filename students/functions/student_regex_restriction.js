$(document).ready(function(){

    var inputPhone = document.querySelector("#student_phone");

    console.log(inputPhone);
    inputPhone.addEventListener('input', formatPhone);


    var student_id_restrict = document.getElementById('student_id');
    var student_fName_restrict = document.getElementById('student_fName');
    var student_lName_restrict = document.getElementById('student_lName');
    var student_street1_restrict = document.getElementById('student_street1');
    var student_street2_restrict = document.getElementById('student_street2');
    var student_city_restrict = document.getElementById('student_city');
    var student_zipcode_restrict = document.getElementById('student_zipcode');
    var student_phone_restrict = document.getElementById('student_phone');
    var student_email_restrict = document.getElementById('student_email');
    

    
    student_id_restrict.onkeypress = student_id_restrict.onpaste = checkInputNumbers;
    student_fName_restrict.onkeypress = student_fName_restrict.onpaste = checkInputLetters;
    student_lName_restrict.onkeypress = student_lName_restrict.onpaste = checkInputLetters;
    student_city_restrict.onkeypress = student_city_restrict.onpaste = checkInputLetters;
    student_street1_restrict.onkeypress = student_street1_restrict.onpaste = checkInputAlphanumeric;
    student_street2_restrict.onkeypress = student_street2_restrict.onpaste = checkInputAlphanumeric;  
    student_zipcode_restrict.onkeypress = student_zipcode_restrict.onpaste = checkInputNumbers;
    student_phone_restrict.onkeypress = student_phone_restrict.onpaste = checkInputPhone;
    student_email_restrict.onkeypress = student_email_restrict.onpaste = checkInputEmail;


    function checkInputLetters(e) {
        var e = e || event;
        var char = e.type == 'keypress' 
            ? String.fromCharCode(e.keyCode || e.which) 
            : (e.clipboardData || window.clipboardData).getData('Text');
        if (/^[a-zA-Z\s]*$/gi.test(char)) {
            return true;
        }
        else {
          return false;
        }
    }

    function checkInputAlphanumeric(e) {
        var e = e || event;
        var char = e.type == 'keypress' 
            ? String.fromCharCode(e.keyCode || e.which) 
            : (e.clipboardData || window.clipboardData).getData('Text');
        if (/^[a-z0-9\s]+$/gi.test(char)) {
            return true;
        }
        else {
          return false;
        }
    }

    function checkInputNumbers(e) {
        var e = e || event;
        var char = e.type == 'keypress' 
            ? String.fromCharCode(e.keyCode || e.which) 
            : (e.clipboardData || window.clipboardData).getData('Text');
        if (/^[0-9]+$/gi.test(char)) {
            return true;
        }
        else {
          return false;
        }
    }


    function checkInputPhone(e) {
        var e = e || event;
        var char = e.type == 'keypress' 
            ? String.fromCharCode(e.keyCode || e.which) 
            : (e.clipboardData || window.clipboardData).getData('Text');
        if (/^[\(0-9\)-]$/gi.test(char)) {

            return true;
        }
        else {
          return false;
        }
    }

    function formatPhone(e) {
        console.log(e.target.value);
        if(/^[0-9]$/.test(e.target.value)){
            e.target.value = "(" + e.target.value;
        }

        if(/^\([0-9]{3}$/.test(e.target.value)){
            e.target.value = e.target.value + ")";
        }

        if(/^\([0-9]{3}\)[0-9]{3}$/.test(e.target.value)){
            e.target.value = e.target.value + "-";
        }



    }

    function checkInputEmail(e) {
        var e = e || event;
        var char = e.type == 'keypress' 
            ? String.fromCharCode(e.keyCode || e.which) 
            : (e.clipboardData || window.clipboardData).getData('Text');
        if(/^[a-z0-9\.\-\_\@]+$/.test(char)){
          return true;
        } 
        else {
          return false;
        }
    }

    
});