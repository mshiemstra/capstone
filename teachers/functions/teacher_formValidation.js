$(document).ready(function(){
  //alert('ready');

  function trimString() {
    var teacher_id = $("#person_id").text();
    var teacher_idTrim = $.trim(teacher_id);

    var teacher_fNmae = $("#teacher_fName").text();
    var teacher_fNameTrim = $.trim(teacher_fName);

    var teacher_lName = $("#teacher_lName").text();
    var teacher_lNameTrim = $.trim(teacher_lName);

    var teacher_address1 = $("#teacher_street1").text();
    var teacher_street1Trim = $.trim(teacher_street1);

    var teacher_address2 = $("#teacher_street2").text();
    var teacher_street2Trim = $.trim(teacher_street2);
    
    var teacher_city = $("#teacher_city").text();
    var teacher_cityTrim = $.trim(teacher_city);

    var teacher_zip = $("#teacher_zipcode").text();
    var teacher_zipTrim = $.trim(teacher_zip);

    var teacher_phone = $("#teacher_phone").text();
    var teacher_phoneTrim = $.trim(teacher_phone);

    var teacher_email = $("#teacher_email").text();
    var teacher_emailTrim = $.trim(teacher_email);



    $("#person_id").html(teacher_idTrim);
    $("#teacher_fName").html(teacher_fNameTrim);
    $("#teacher_lName").html(teacher_lNameTrim);
    $("#teacher_street1").html(teacher_address1Trim);
    $("#teacher_street2").html(teacher_addres2Trim);
    $("#teacher_city").html(teacher_cityTrim);
    $("#teacher_zipcode").html(teacher_zipTrim);
    $("#teacher_phone").html(teacher_phoneTrim);
    $("#teacher_email").html(teacher_emailTrim);

  }


  function teacher_idNumber() {
   
      let teacher_id = $("#pereson_id").val();      
      let patt = new RegExp(/^[0-9]*$/);
      let res = patt.exec(teacher_id);

      if(teacher_id == "" || teacher_id == null || teacher_id == "null" || teacher_id == undefined || teacher_id == "undefined" || res == null) {
       

        $('#teacher_error1').html('Please enter a valid teacher ID');

        return validForm = false;
      }
      else {
        $('#teacher_error1').html('');
        $('#person_id').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }
  


  function teacher_firstname() {
   
      let teacher_fName = $("#teacher_fName").val();      
      let patt = new RegExp(/^[a-zA-Z -]*$/);
      let res = patt.exec(teacher_fName);

      if(teacher_fName == "" || teacher_fName == null || teacher_fName == "null" || teacher_fName == undefined || teacher_fName == "undefined" || res == null) {
       

        $('#teacher_error2').html('Please enter a valid first name');

        return validForm = false;
      }
      else {
        $('#teacher_error2').html('');
        $('#teacher_fName').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }



  function teacher_lastname() {
   
      let teacher_lName = $("#teacher_lName").val();      
      let patt = new RegExp(/^[a-zA-Z -]*$/);
      let res = patt.exec(teacher_lName);

      if(teacher_lName == "" || teacher_lName == null || teacher_lName == "null" || teacher_lName == undefined || teacher_lName == "undefined" || res == null) {
       

        $('#teacher_error3').html('Please enter a valid last name');

        return validForm = false;
      }
      else {
        $('#teacher_error3').html('');
        $('#teacher_lName').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
      }
  }




  function teacher_addressOne() {
   
      let teacher_street1 = $("#teacher_street1").val();      
      let patt = new RegExp(/^[A-Za-z.0-9\s_-]+$/);
      let res = patt.exec(teacher_street1);

      if(teacher_street1 == "" || teacher_street1 == null || teacher_street1 == "null" || teacher_street1 == undefined || teacher_street1 == "undefined" || res == null) {
       

        $('#teacher_error4').html('Please enter a valid address');

        return validForm = false;
      }
      else {
        $('#teacher_error4').html('');
        $('#teacher_street1').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }




  function teacher_addressTwo() {
   
      let teacher_street2 = $("#teacher_street2").val();      
      let patt = new RegExp(/^[A-Za-z.0-9\s_-]*$/);
      let res = patt.exec(teacher_id);

      if(res == null) {
       

        $('#teacher_error5').html('Please enter a valid address');

        return validForm = false;
      }
      else {
        $('#teacher_error5').html('');
        $('#teacher_street2').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }




  function teacher_city() {
   
      let teacher_city = $("#teacher_city").val();      
      let patt = new RegExp(/^[a-zA-Z\s]*$/);
      let res = patt.exec(teacher_city);

      if(teacher_city == "" || teacher_city == null || teacher_city == "null" || teacher_city == undefined || teacher_city == "undefined" || res == null) {
       

        $('#teacher_error6').html('Please enter a valid City');

        return validForm = false;
      }
      else {
        $('#teacher_error6').html('');
        $('#teacher_city').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }
  }



  function teacher_stateName() {
      let teacher_state = $("#teacher_state").val();

      if(teacher_state == "") {
       

        $('#teacher_error7').html('Please select a state');

        return validForm = false;
      }
      else {
        $('#teacher_error7').html('');
        $('#teacher_state').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }
     
  }




  function teacher_zipCode() {
   
      let teacher_zipcode = $("#teacher_zipcode").val();      
      let patt = new RegExp(/^[0-9]{5}$/);
      let res = patt.exec(teacher_zipcode);

      if(teacher_zipcode == "" || teacher_zipcode == null || teacher_zipcode == "null" || teacher_zipcode == undefined || teacher_zipcode == "undefined" || res == null) {
       

        $('#teacher_error8').html('Please enter a valid zipcode');

        return validForm = false;
      }
      else {
        $('#teacher_error8').html('');
        $('#teacher_zipcode').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }
 



  function teacher_phone() {
   
      let teacher_phone = $("#teacher_phone").val();      
      let patt = new RegExp(/^\(?[0-9]{3}\)?[0-9]{3}[-\s\.]?[0-9]{4}$/);
      let res = patt.exec(teacher_phone);

      if(teacher_phone == "" || teacher_phone == null || teacher_phone == "null" || teacher_phone == undefined || teacher_phone == "undefined" || res == null) {
       

        $('#teacher_error9').html('Please enter a valid Phone Number');

        return validForm = false;
      }
      else {
        $('#teacher_error9').html('');
        $('#teacher_phone').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }


  function teacher_emailAddress() {
   
      let teacher_email = $("#teacher_email").val();      
      let patt = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
      let res = patt.exec(teacher_email);      

      if(teacher_email == "" || teacher_email == null || teacher_email == "null" || teacher_email == undefined || teacher_email == "undefined" || res == null) {
       

        $('#teacher_error10').html('Please enter a valid Phone Number');

        return validForm = false;
      }
      else {
        $('#teacher_error10').html('');
        $('#teacher_email').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }




  $('#person_id').blur(teacher_idNumber);
  $('#teacher_fName').blur(teacher_firstname);
  $('#teacher_lName').blur(teacher_lastname);
  $('#teacher_street1').blur(teacher_addressOne);
 // $('#teacher_street2').blur(teacher_addressTwo);
  $('#teacher_city').blur(teacher_city);
  $('#teacher_state').blur(teacher_stateName);
  $('#teacher_zipcode').blur(teacher_zipCode);
  $('#teacher_phone').blur(teacher_phone);
  $('#teacher_email').blur(teacher_emailAddress);


  function validateForm() {
    teacher_idNumber();
    teacher_firstName();
    teacher_lastName();
    teacher_addressOne();
    teacher_addressTwo();
    teacher_cityName();
    teacher_stateName();
    teacher_zipCode();
    teacher_phoneNumber();
    teacher_emailAddress();


    if(validForm == true){
      var teacher_id = $('#person_id').val();
      var teacher_fName = $('#teacher_fName').val();
      var teacher_lName = $('#teacher_lName').val();
      var teacher_street1 = $('#teacher_street1').val();
      var teacher_street2 = $('#teacher_street2').val();
      var teacher_city = $('#teacher_city').val();
      var teacher_state = $('#teacher_state').val();
      var teacher_zipcode = $('#teacher_zipcode').val();
      var teacher_phone = $('#teacher_phone').val();
      var teacher_email = $('#teacher_email').val();


      if(address2 != null && address2 != '' && address2 != undefined) {
        $('#teacher_street2').text('<br>');
      }
      else {
        $('#teacher_street2').text('N/A <br>');
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
