  

  function trimString() {
          let teacher_idTrim = document.getElementById("teacher_id");
          let teacher_firstNameTrim = document.getElementById("teacher_fName");
          let teacher_lastnameTrim = document.getElementById("teacher_lName");
          let teacher_address1Trim = document.getElementById("teacher_street1");
          let teacher_address2Trim = document.getElementById("teacher_street2");
          let teacher_cityTrim = document.getElementById("teacher_city");
          let teacher_zipTrim = document.getElementById("teacher_zipcode");
          let teacher_phoneTrim = document.getElementById("teacher_phone");
          let teacher_emailTrim = document.getElementById("teacher_email");
         

          teacher_idTrim.value = teacher_idTrim.value.replace(/^\s+/,"");        
          teacher_idTrim.value = teacher_idTrim.value.replace(/\s+$/,"");

          teacher_firstNameTrim.value = teacher_firstNameTrim.value.replace(/^\s+/,"");        
          teacher_firstNameTrim.value = teacher_firstNameTrim.value.replace(/\s+$/,"");
          
          teacher_lastnameTrim.value = teacher_lastnameTrim.value.replace(/^\s+/,"");        
          teacher_lastnameTrim.value = teacher_lastnameTrim.value.replace(/\s+$/,"");
          
          teacher_address1Trim.value = teacher_address1Trim.value.replace(/^\s+/,"");        
          teacher_address1Trim.value = teacher_address1Trim.value.replace(/\s+$/,"");
   
          teacher_address2Trim.value = teacher_address2Trim.value.replace(/^\s+/,"");        
          teacher_address2Trim.value = teacher_address2Trim.value.replace(/\s+$/,"");

          teacher_cityTrim.value = teacher_cityTrim.value.replace(/^\s+/,"");        
          teacher_cityTrim.value = teacher_cityTrim.value.replace(/\s+$/,"");

          teacher_zipTrim.value = teacher_zipTrim.value.replace(/^\s+/,"");        
          teacher_zipTrim.value = teacher_zipTrim.value.replace(/\s+$/,"");

          teacher_phoneTrim.value = teacher_phoneTrim.value.replace(/^\s+/,"");        
          teacher_phoneTrim.value = teacher_phoneTrim.value.replace(/\s+$/,"");

          teacher_emailTrim.value = teacher_emailTrim.value.replace(/^\s+/,"");        
          teacher_emailTrim.value = teacher_emailTrim.value.replace(/\s+$/,"");
  }


function teacher_idNumber() {
      let teacher_id = document.getElementById("teacher_id").value;      
      let patt = new RegExp(/^[0-9]*$/);
      let res = patt.exec(teacher_id);
      
      if(teacher_id == "" || teacher_id == null || teacher_id == "null" || teacher_id == undefined || teacher_id == "undefined" || res == null) {

        document.getElementById("teacher_error1").innerHTML = "Please enter a valid teacher ID";
        document.getElementById("teacher_id").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("teacher_error1").innerHTML = "";
        document.getElementById("teacher_id").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("teacher_id").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("teacher_id").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("teacher_id").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
  }



  function teacher_firstName() {
      let teacher_fName = document.getElementById("teacher_fName").value;
      
      let patt = new RegExp(/^[a-zA-Z -]*$/);
      let res = patt.exec(teacher_fName);
     
      if(teacher_fName == "" || teacher_fName == null || teacher_fName == "null" || teacher_fName == undefined || teacher_fName == "undefined" || res == null) {

        document.getElementById("teacher_error2").innerHTML = "Please enter a valid first name";
        document.getElementById("teacher_fName").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("teacher_error2").innerHTML = "";
        document.getElementById("teacher_fName").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("teacher_fName").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("teacher_fName").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("teacher_fName").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
  }


  

  function teacher_lastName() {

      let teacher_lastname = document.getElementById("teacher_lName").value;
      
      let patt = new RegExp(/^[a-zA-Z -]*$/);
      let res = patt.exec(teacher_lastname);
      
      if(teacher_lastname == "" || teacher_lastname == null || teacher_lastname == "null" || teacher_lastname == undefined || teacher_lastname == "undefined" || res == null) {

        document.getElementById("teacher_error3").innerHTML = "Please enter a valid last name";
        document.getElementById("teacher_lName").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("teacher_error3").innerHTML = "";
        document.getElementById("teacher_lName").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("teacher_lName").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("teacher_lName").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("teacher_lName").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
  }

  function teacher_addressOne() {

      let teacher_address1 = document.getElementById("teacher_street1").value;
      
      let patt = new RegExp(/^[A-Za-z.0-9\s_-]+$/);
      let res = patt.exec(teacher_address1);
      
      if(teacher_address1 == "" || teacher_address1 == null || teacher_address1 == "null" || teacher_address1 == undefined || teacher_address1 == "undefined" || res == null) {

        document.getElementById("teacher_error4").innerHTML = "Please enter a valid street address";
        document.getElementById("teacher_street1").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("teacher_error4").innerHTML = "";
        document.getElementById("teacher_street1").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("teacher_street1").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("teacher_street1").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("teacher_street1").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
  }

  function teacher_addressTwo() {
      let teacher_address2 = document.getElementById("teacher_street2").value;
     
      let patt = new RegExp(/^[a-zA-Z0-9 -]*$/);
      let res = patt.exec(teacher_address2);
      
      if(res == null) {

        document.getElementById("teacher_error5").innerHTML = "Please enter a valid street address";
        document.getElementById("teacher_street2").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("teacher_error5").innerHTML = "";
        document.getElementById("teacher_street2").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("teacher_street2").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("teacher_street2").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("teacher_street2").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
  }

  function teacher_cityName() {
   
      let teacher_city = document.getElementById("teacher_city").value;
      
      let patt = new RegExp(/^[a-zA-Z ]*$/);
      let res = patt.exec(teacher_city);
       
      if(teacher_city == "" || teacher_city == null || teacher_city == "null" || teacher_city == undefined || teacher_city == "undefined" || res == null) {

        document.getElementById("teacher_error6").innerHTML = "Please enter a valid city";
        document.getElementById("teacher_city").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("teacher_error6").innerHTML = "";
        document.getElementById("teacher_city").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("teacher_city").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("teacher_city").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("teacher_city").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 

  }

  function teacher_stateName() {
      let teacher_state = document.getElementById("teacher_state");
      
      if(teacher_state.value == "") {

        document.getElementById("teacher_error7").innerHTML = "Please select your state";
        document.getElementById("teacher_state").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("teacher_error7").innerHTML = "";
        document.getElementById("teacher_state").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("teacher_state").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("teacher_state").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("teacher_state").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
     
  }

  function teacher_zipCode() {
   
      let teacher_zip = document.getElementById("teacher_zipcode").value;
      let patt = new RegExp(/^[0-9]{5}$/);
      let res = patt.exec(teacher_zip);
      if(teacher_zip == "" || teacher_zip == null || teacher_zip == "null" || teacher_zip == undefined || teacher_zip == "undefined" || res == null) {

        document.getElementById("teacher_error8").innerHTML = "Please enter your 5 digit zip code";
        document.getElementById("teacher_zipcode").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("teacher_error8").innerHTML = "";
        document.getElementById("teacher_zipcode").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("teacher_zipcode").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("teacher_zipcode").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("teacher_zipcode").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      }
  }


  function teacher_phoneNumber() {
      
    let teacher_phone = document.getElementById("teacher_phone").value;
    let patt = new RegExp(/^\(?[0-9]{3}\)?[0-9]{3}[-\s\.]?[0-9]{4}$/);
    let res = patt.exec(teacher_phone);

    if (teacher_phone == "" || teacher_phone == null || teacher_phone == "null" || teacher_phone == undefined || teacher_phone == "undefined" || res == null) {
      document.getElementById("teacher_error9").innerHTML = "Please enter a valid phone number";
      
      document.getElementById("teacher_phone").style.border = "1px solid red";
      return validForm = false;
    }
    else {
      document.getElementById("teacher_error9").innerHTML = "";
      document.getElementById("teacher_phone").style.borderTop = "2px solid #BDBDBD";
      document.getElementById("teacher_phone").style.borderLeft = "1px solid #BDBDBD";
      document.getElementById("teacher_phone").style.borderBottom = "1px solid #BDBDBD";
      document.getElementById("teacher_phone").style.borderRight = "1px solid #BDBDBD";
      return validForm = true;
    }
  }

  function teacher_emailAddress() {
      
      let teacher_email = document.getElementById("teacher_email").value;
      let patt = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
      let res = patt.exec(teacher_email);

      if (teacher_email == "" || teacher_email == null || teacher_email == "null" || teacher_email == undefined || teacher_email == "undefined" || res == null) {
        document.getElementById("teacher_error10").innerHTML = "Please enter a valid email address";
        
        document.getElementById("teacher_email").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("teacher_error10").innerHTML = "";
        document.getElementById("teacher_email").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("teacher_email").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("teacher_email").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("teacher_email").style.borderRight = "1px solid #BDBDBD";
        return validForm = true;
      }
  }

  function goBack() {
      window.location.reload();
  }

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

     if(validForm == true) {
        let teacher_id = document.getElementById('teacher_id').value;
        let teacher_fName = document.getElementById('teacher_fName').value;
       	let teacher_lastname = document.getElementById('teacher_lName').value;
        let teacher_address1 = document.getElementById('teacher_street1').value;
        let teacher_address2 = document.getElementById('teacher_street2').value;
        let teacher_city = document.getElementById('teacher_city').value;
        let teacher_state = document.getElementById('teacher_state').value
        let teacher_zip = document.getElementById('teacher_zipcode').value;
        let teacher_email = document.getElementById('teacher_email').value;

       
        if(address2 != null && address2 != '' && address2 != undefined) {
          document.write(address2 + '<br>');
        }
        else {
          document.write('N/A <br>');
        }        
      }
      else {
        return false;
      }
  }