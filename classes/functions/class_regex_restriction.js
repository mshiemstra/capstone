$(document).ready(function(){

    var inputPhone = document.querySelector("#class_phone");

    console.log(inputPhone);
    inputPhone.addEventListener('input', formatPhone);


    var class_id_restrict = $('#class_id');
    var class_desc_restrict = $('#class_desc');
    var class_name_restrict = $('#class_name');
    var class_fName_restrict = $('#class_fName');
    var class_lName_restrict = $('#class_lName');    
    var class_term_restrict = $('#class_term');
    
    

    
    class_id_restrict.onkeypress = class_id_restrict.onpaste = checkInputNumbers;
    class_desc_restrict.onkeypress = class_desc_restrict.onpaste = checkInputAlphanumeric;
    class_name_restrict.onkeypress = class_name_restrict.onpaste = checkInputLetters;
    class_fName_restrict.onkeypress = class_fName_restrict.onpaste = checkInputLetters;
    class_lName_restrict.onkeypress = class_lName_restrict.onpaste = checkInputLetters;
    class_term_restrict.onkeypress = class_term_restrict.onpaste = checkInputAlphanumeric;
    

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
    
});