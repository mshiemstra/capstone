$(document).ready(function(){
  //alert('ready');

  function trimString() {
    var student_id = $("#student_id").text();
    var student_idTrim = $.trim(student_id);

    var student_fNmae = $("#student_fName").text();
    var student_fNameTrim = $.trim(student_fName);

    var student_lName = $("#student_lName").text();
    var student_lNameTrim = $.trim(student_lName);

    var student_address1 = $("#student_street1").text();
    var student_street1Trim = $.trim(student_street1);

    var student_address2 = $("#student_street2").text();
    var student_street2Trim = $.trim(student_street2);
    
    var student_city = $("#student_city").text();
    var student_cityTrim = $.trim(student_city);

    var student_zip = $("#student_zipcode").text();
    var student_zipTrim = $.trim(student_zip);

    var student_phone = $("#student_phone").text();
    var student_phoneTrim = $.trim(student_phone);

    var student_email = $("#student_email").text();
    var student_emailTrim = $.trim(student_email);



    $("#student_id").html(student_idTrim);
    $("#student_fName").html(student_fNameTrim);
    $("#student_lName").html(student_lNameTrim);
    $("#student_street1").html(student_address1Trim);
    $("#student_street2").html(student_addres2Trim);
    $("#student_city").html(student_cityTrim);
    $("#student_zipcode").html(student_zipTrim);
    $("#student_phone").html(student_phoneTrim);
    $("#student_email").html(student_emailTrim);

  }


  function student_idNumber() {
   
      let student_id = $("#student_id").val();      
      let patt = new RegExp(/^[0-9]*$/);
      let res = patt.exec(student_id);

      if(student_id == "" || student_id == null || student_id == "null" || student_id == undefined || student_id == "undefined" || res == null) {
       

        $('#student_error1').html('Please enter a valid Student ID');

        return validForm = false;
      }
      else {
        $('#student_error1').html('');
        $('#student_id').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }
  


  function student_firstname() {
   
      let student_fName = $("#student_fName").val();      
      let patt = new RegExp(/^[a-zA-Z -]*$/);
      let res = patt.exec(student_fName);

      if(student_fName == "" || student_fName == null || student_fName == "null" || student_fName == undefined || student_fName == "undefined" || res == null) {
       

        $('#student_error2').html('Please enter a valid first name');

        return validForm = false;
      }
      else {
        $('#student_error2').html('');
        $('#student_fName').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }



  function student_lastname() {
   
      let student_lName = $("#student_lName").val();      
      let patt = new RegExp(/^[a-zA-Z -]*$/);
      let res = patt.exec(student_lName);

      if(student_lName == "" || student_lName == null || student_lName == "null" || student_lName == undefined || student_lName == "undefined" || res == null) {
       

        $('#student_error3').html('Please enter a valid last name');

        return validForm = false;
      }
      else {
        $('#student_error3').html('');
        $('#student_lName').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
      }
  }




  function student_addressOne() {
   
      let student_street1 = $("#student_street1").val();      
      let patt = new RegExp(/^[A-Za-z.0-9\s_-]+$/);
      let res = patt.exec(student_street1);

      if(student_street1 == "" || student_street1 == null || student_street1 == "null" || student_street1 == undefined || student_street1 == "undefined" || res == null) {
       

        $('#student_error4').html('Please enter a valid address');

        return validForm = false;
      }
      else {
        $('#student_error4').html('');
        $('#student_street1').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }




  function student_addressTwo() {
   
      let student_street2 = $("#student_street2").val();      
      let patt = new RegExp(/^[A-Za-z.0-9\s_-]*$/);
      let res = patt.exec(student_id);

      if(res == null) {
       

        $('#student_error5').html('Please enter a valid address');

        return validForm = false;
      }
      else {
        $('#student_error5').html('');
        $('#student_street2').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }




  function student_city() {
   
      let student_city = $("#student_city").val();      
      let patt = new RegExp(/^[a-zA-Z\s]*$/);
      let res = patt.exec(student_city);

      if(student_city == "" || student_city == null || student_city == "null" || student_city == undefined || student_city == "undefined" || res == null) {
       

        $('#student_error6').html('Please enter a valid City');

        return validForm = false;
      }
      else {
        $('#student_error6').html('');
        $('#student_city').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }
  }



  function student_stateName() {
      let student_state = $("#student_state").val();

      if(student_state == "") {
       

        $('#student_error7').html('Please select a state');

        return validForm = false;
      }
      else {
        $('#student_error7').html('');
        $('#student_state').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }
     
  }




  function student_zipCode() {
   
      let student_zipcode = $("#student_zipcode").val();      
      let patt = new RegExp(/^[0-9]{5}$/);
      let res = patt.exec(student_zipcode);

      if(student_zipcode == "" || student_zipcode == null || student_zipcode == "null" || student_zipcode == undefined || student_zipcode == "undefined" || res == null) {
       

        $('#student_error8').html('Please enter a valid zipcode');

        return validForm = false;
      }
      else {
        $('#student_error8').html('');
        $('#student_zipcode').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }
 



  function student_phone() {
   
      let student_phone = $("#student_phone").val();      
      let patt = new RegExp(/^\(?[0-9]{3}\)?[0-9]{3}[-\s\.]?[0-9]{4}$/);
      let res = patt.exec(student_phone);

      if(student_phone == "" || student_phone == null || student_phone == "null" || student_phone == undefined || student_phone == "undefined" || res == null) {
       

        $('#student_error9').html('Please enter a valid Phone Number');

        return validForm = false;
      }
      else {
        $('#student_error9').html('');
        $('#student_phone').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }


  function student_emailAddress() {
   
      let student_email = $("#student_email").val();      
      let patt = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
      let res = patt.exec(student_email);      

      if(student_email == "" || student_email == null || student_email == "null" || student_email == undefined || student_email == "undefined" || res == null) {
       

        $('#student_error10').html('Please enter a valid Phone Number');

        return validForm = false;
      }
      else {
        $('#student_error10').html('');
        $('#student_email').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }




  $('#student_id').blur(student_idNumber);
  $('#student_fName').blur(student_firstname);
  $('#student_lName').blur(student_lastname);
  $('#student_street1').blur(student_addressOne);
 // $('#student_street2').blur(student_addressTwo);
  $('#student_city').blur(student_city);
  $('#student_state').blur(student_stateName);
  $('#student_zipcode').blur(student_zipCode);
  $('#student_phone').blur(student_phone);
  $('#student_email').blur(student_emailAddress);


  function validateForm() {
    student_idNumber();
    student_firstName();
    student_lastName();
    student_addressOne();
    student_addressTwo();
    student_cityName();
    student_stateName();
    student_zipCode();
    student_phoneNumber();
    student_emailAddress();


    if(validForm == true){
      var student_id = $('#student_id').val();
      var student_fName = $('#student_fName').val();
      var student_lName = $('#student_lName').val();
      var student_street1 = $('#student_street1').val();
      var student_street2 = $('#student_street2').val();
      var student_city = $('#student_city').val();
      var student_state = $('#student_state').val();
      var student_zipcode = $('#student_zipcode').val();
      var student_phone = $('#student_phone').val();
      var student_email = $('#student_email').val();


      if(address2 != null && address2 != '' && address2 != undefined) {
        $('#student_street2').text('<br>');
      }
      else {
        $('#student_street2').text('N/A <br>');
      }     
    } 
    else {
      return false;
    }

  }

  function goBack() {
      window.location.reload();
  }

});  
