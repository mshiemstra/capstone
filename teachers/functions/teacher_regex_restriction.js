$(document).ready(function(){

    var inputPhone = document.querySelector("#teacher_phone");

    console.log(inputPhone);
    inputPhone.addEventListener('input', formatPhone);


    var teacher_id_restrict = document.getElementById('person_id');
    var teacher_fName_restrict = document.getElementById('teacher_fName');
    var teacher_lName_restrict = document.getElementById('teacher_lName');
    var teacher_street1_restrict = document.getElementById('teacher_street1');
    var teacher_street2_restrict = document.getElementById('teacher_street2');
    var teacher_city_restrict = document.getElementById('teacher_city');
    var teacher_zipcode_restrict = document.getElementById('teacher_zipcode');
    var teacher_phone_restrict = document.getElementById('teacher_phone');
    var teacher_email_restrict = document.getElementById('teacher_email');
    

    
    teacher_id_restrict.onkeypress = teacher_id_restrict.onpaste = checkInputNumbers;
    teacher_fName_restrict.onkeypress = teacher_fName_restrict.onpaste = checkInputLetters;
    teacher_lName_restrict.onkeypress = teacher_lName_restrict.onpaste = checkInputLetters;
    teacher_city_restrict.onkeypress = teacher_city_restrict.onpaste = checkInputLetters;
    teacher_street1_restrict.onkeypress = teacher_street1_restrict.onpaste = checkInputAlphanumeric;
    teacher_street2_restrict.onkeypress = teacher_street2_restrict.onpaste = checkInputAlphanumeric;  
    teacher_zipcode_restrict.onkeypress = teacher_zipcode_restrict.onpaste = checkInputNumbers;
    teacher_phone_restrict.onkeypress = teacher_phone_restrict.onpaste = checkInputPhone;
    teacher_email_restrict.onkeypress = teacher_email_restrict.onpaste = checkInputEmail;


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