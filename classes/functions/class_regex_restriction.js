$(document).ready(function(){

    var class_term_restrict = document.getElementById('class_term');
    var class_desc_restrict = document.getElementById('class_desc');
    var class_name_restrict = document.getElementById('class_name');
    
    

    
    class_term_restrict.onkeypress = class_term_restrict.onpaste = checkInputAlphanumeric;
    class_desc_restrict.onkeypress = class_desc_restrict.onpaste = checkInputAlphanumeric;
    class_name_restrict.onkeypress = class_name_restrict.onpaste = checkInputLetters;
    


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
        if (/^[a-z0-9-\s]+$/gi.test(char)) {
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
});