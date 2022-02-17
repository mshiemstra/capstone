  

  function trimString() {
        
          let student_firstNameTrim = document.getElementById("student_fName");
          let student_lastnameTrim = document.getElementById("student_lName");
          let student_address1Trim = document.getElementById("student_street1");
          let student_address2Trim = document.getElementById("student_street2");
          let student_cityTrim = document.getElementById("student_city");
          let student_zipTrim = document.getElementById("student_zipcode");
          let student_emailTrim = document.getElementById("student_email");
         
          student_firstNameTrim.value = student_firstNameTrim.value.replace(/^\s+/,"");        
          student_firstNameTrim.value = student_firstNameTrim.value.replace(/\s+$/,"");
          
          student_lastnameTrim.value = student_lastnameTrim.value.replace(/^\s+/,"");        
          student_lastnameTrim.value = student_lastnameTrim.value.replace(/\s+$/,"");
          
          student_address1Trim.value = student_address1Trim.value.replace(/^\s+/,"");        
          student_address1Trim.value = student_address1Trim.value.replace(/\s+$/,"");
   
          student_address2Trim.value = student_address2Trim.value.replace(/^\s+/,"");        
          student_address2Trim.value = student_address2Trim.value.replace(/\s+$/,"");

          student_cityTrim.value = student_cityTrim.value.replace(/^\s+/,"");        
          student_cityTrim.value = student_cityTrim.value.replace(/\s+$/,"");

          student_zipTrim.value = student_zipTrim.value.replace(/^\s+/,"");        
          student_zipTrim.value = student_zipTrim.value.replace(/\s+$/,"");

          student_emailTrim.value = student_emailTrim.value.replace(/^\s+/,"");        
          student_emailTrim.value = student_emailTrim.value.replace(/\s+$/,"");
  }


function student_id() {
      let student_id = document.getElementById("student_id").value;
      
      let patt = new RegExp(/^[0-9]*$/);
      let res = patt.exec(student_fName);
     
      if(student_id == "" || student_id == null || student_id == "null" || student_id == undefined || student_id == "undefined" || res == null) {

        document.getElementById("student_error2").innerHTML = "Please enter a valid ID";
        document.getElementById("student_id").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("student_error1").innerHTML = "";
        document.getElementById("student_id").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("student_id").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("student_id").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("student_id").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
  }



  function student_firstName() {
      let student_fName = document.getElementById("student_fName").value;
      
      let patt = new RegExp(/^[a-zA-Z -]*$/);
      let res = patt.exec(student_fName);
     
      if(student_fName == "" || student_fName == null || student_fName == "null" || student_fName == undefined || student_fName == "undefined" || res == null) {

        document.getElementById("student_error2").innerHTML = "Please enter a valid first name";
        document.getElementById("student_fName").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("student_error2").innerHTML = "";
        document.getElementById("student_fName").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("student_fName").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("student_fName").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("student_fName").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
  }


  

  function student_lastName() {

      let student_lastname = document.getElementById("student_lName").value;
      
      let patt = new RegExp(/^[a-zA-Z -]*$/);
      let res = patt.exec(student_lastname);
      
      if(student_lastname == "" || student_lastname == null || student_lastname == "null" || student_lastname == undefined || student_lastname == "undefined" || res == null) {

        document.getElementById("student_error2").innerHTML = "Please enter a valid last name";
        document.getElementById("student_lName").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("student_error2").innerHTML = "";
        document.getElementById("student_lName").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("student_lName").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("student_lName").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("student_lName").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
  }

  function student_addressOne() {

      let student_address1 = document.getElementById("student_street1").value;
      
      let patt = new RegExp(/^[A-Za-z.0-9\s_-]+$/);
      let res = patt.exec(student_address1);
      
      if(student_address1 == "" || student_address1 == null || student_address1 == "null" || student_address1 == undefined || student_address1 == "undefined" || res == null) {

        document.getElementById("student_error3").innerHTML = "Please enter a valid street address";
        document.getElementById("student_street1").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("student_error3").innerHTML = "";
        document.getElementById("student_street1").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("student_street1").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("student_street1").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("student_street1").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
  }

  function student_addressTwo() {
      let student_address2 = document.getElementById("student_street2").value;
     
      let patt = new RegExp(/^[a-zA-Z0-9 -]*$/);
      let res = patt.exec(student_address2);
      //alert(res);  
      if(res == null) {

        document.getElementById("student_error4").innerHTML = "Please enter a valid street address";
        document.getElementById("student_street2").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("student_error4").innerHTML = "";
        document.getElementById("student_street2").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("student_street2").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("student_street2").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("student_street2").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
  }

  function student_cityName() {
   
      let student_city = document.getElementById("student_city").value;
      
      let patt = new RegExp(/^[a-zA-Z ]*$/);
      let res = patt.exec(student_city);
       
      if(student_city == "" || student_city == null || student_city == "null" || student_city == undefined || student_city == "undefined" || res == null) {

        document.getElementById("student_error5").innerHTML = "Please enter a valid city";
        document.getElementById("student_city").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("student_error5").innerHTML = "";
        document.getElementById("student_city").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("student_city").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("student_city").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("student_city").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 

  }

  function student_stateName() {
      let student_state = document.getElementById("student_state").value;
      
      if(student_state == "") {

        document.getElementById("student_error6").innerHTML = "Please select your state";
        document.getElementById("student_state").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("student_error6").innerHTML = "";
        document.getElementById("student_state").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("student_state").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("student_state").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("student_state").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
     
  }

  function student_zipCode() {
   
      let student_zip = document.getElementById("student_zipcode").value;
      let patt = new RegExp(/^[0-9]{5}$/);
      let res = patt.exec(student_zip);
      if(student_zip == "" || student_zip == null || student_zip == "null" || student_zip == undefined || student_zip == "undefined" || res == null) {

        document.getElementById("student_error7").innerHTML = "Please enter your 5 digit zip code";
        document.getElementById("student_zipcode").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("student_error7").innerHTML = "";
        document.getElementById("student_zipcode").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("student_zipcode").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("student_zipcode").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("student_zipcode").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      }
  }

  function student_validateEmail() {
      
      let student_email = document.getElementById("student_email").value;
      let patt = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
      let res = patt.exec(student_email);

      if (student_email == "" || student_email == null || student_email == "null" || student_email == undefined || student_email == "undefined" || res == null) {
        document.getElementById("student_error8").innerHTML = "Please enter a valid email address";
        
        document.getElementById("student_email").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("student_error8").innerHTML = "";
        document.getElementById("student_email").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("student_email").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("student_email").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("student_email").style.borderRight = "1px solid #BDBDBD";
        return validForm = true;
      }
  }

  function goBack() {
      window.location.reload();
  }

  function validateForm() {
   
    student_firstName();
  	student_lastName();
    student_addressOne();
    student_addressTwo();
    student_cityName();
    student_stateName();
    student_zipCode();
    student_validateEmail();

     if(validForm == true) {
        let student_fName = document.getElementById('student_fName').value;
       	let student_lastname = document.getElementById('student_lastname').value;
        let student_address1 = document.getElementById('student_address1').value;
        let student_address2 = document.getElementById('student_address2').value;
        let student_city = document.getElementById('student_city').value;
        let student_state = document.getElementById('student_state').value
        let student_zip = document.getElementById('student_zipcode').value;
        let student_email = document.getElementById('student_email').value;

       
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