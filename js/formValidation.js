  

 /* function trimString() {
        
          let student_fNameTrim = document.getElementById("student_fName");
      /*    let lastnameTrim = document.getElementById("lastname");
          let address1Trim = document.getElementById("address1");
          let address2Trim = document.getElementById("address2");
          let cityTrim = document.getElementById("city");
          let zipTrim = document.getElementById("zip");
          let emailTrim = document.getElementById("email");
          */
        //  student_fNameTrim.value = student_fNameTrim.value.replace(/^\s+/,"");        
         // student_fNameTrim.value = student_fNameTrim.value.replace(/\s+$/,"");
          
        /*  lastnameTrim.value = lastnameTrim.value.replace(/^\s+/,"");        
          lastnameTrim.value = lastnameTrim.value.replace(/\s+$/,"");
          
          address1Trim.value = address1Trim.value.replace(/^\s+/,"");        
          address1Trim.value = address1Trim.value.replace(/\s+$/,"");
   
          address2Trim.value = address2Trim.value.replace(/^\s+/,"");        
          address2Trim.value = address2Trim.value.replace(/\s+$/,"");

          cityTrim.value = cityTrim.value.replace(/^\s+/,"");        
          cityTrim.value = cityTrim.value.replace(/\s+$/,"");

          zipTrim.value = zipTrim.value.replace(/^\s+/,"");        
          zipTrim.value = zipTrim.value.replace(/\s+$/,"");

          emailTrim.value = emailTrim.value.replace(/^\s+/,"");        
          emailTrim.value = emailTrim.value.replace(/\s+$/,"");*/
//  }

/*
function student_id() {
      let student_id = document.getElementById("student_id").value;
      
      let patt = new RegExp(/^[0-9]*$/);
      let res = patt.exec(student_fName);
     
      if(student_id == "" || student_id == null || student_id == "null" || student_id == undefined || student_id == "undefined" || res == null) {

        document.getElementById("error2").innerHTML = "Please enter a valid ID";
        document.getElementById("student_id").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("error1").innerHTML = "";
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

        document.getElementById("error2").innerHTML = "Please enter a valid first name";
        document.getElementById("student_fName").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("error2").innerHTML = "";
        document.getElementById("student_fName").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("student_fName").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("student_fName").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("student_fName").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
  }

*/
  

/*  function lastName() {

      let lastname = document.getElementById("lastname").value;
      
      let patt = new RegExp(/^[a-zA-Z -]*$/);
      let res = patt.exec(lastname);
      
      if(lastname == "" || lastname == null || lastname == "null" || lastname == undefined || lastname == "undefined" || res == null) {

        document.getElementById("error2").innerHTML = "Please enter a valid last name";
        document.getElementById("lastname").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("error2").innerHTML = "";
        document.getElementById("lastname").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("lastname").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("lastname").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("lastname").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
  }

  function addressOne() {

      let address1 = document.getElementById("address1").value;
      
      let patt = new RegExp(/^[A-Za-z.0-9\s_-]+$/);
      let res = patt.exec(address1);
      
      if(address1 == "" || address1 == null || address1 == "null" || address1 == undefined || address1 == "undefined" || res == null) {

        document.getElementById("error3").innerHTML = "Please enter a valid street address";
        document.getElementById("address1").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("error3").innerHTML = "";
        document.getElementById("address1").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("address1").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("address1").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("address1").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
  }

  function otherAddress() {
      let address2 = document.getElementById("address2").value;
     
      let patt = new RegExp(/^[a-zA-Z0-9 -]*$/);
      let res = patt.exec(address2);
      //alert(res);  
      if(res == null) {

        document.getElementById("error4").innerHTML = "Please enter a valid street address";
        document.getElementById("address2").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("error4").innerHTML = "";
        document.getElementById("address2").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("address2").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("address2").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("address2").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
  }

  function cityName() {
   
      let city = document.getElementById("city").value;
      
      let patt = new RegExp(/^[a-zA-Z ]*$/);
      let res = patt.exec(city);
       
      if(city == "" || city == null || city == "null" || city == undefined || city == "undefined" || res == null) {

        document.getElementById("error5").innerHTML = "Please enter a valid city";
        document.getElementById("city").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("error5").innerHTML = "";
        document.getElementById("city").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("city").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("city").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("city").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 

  }

  function stateName() {
      let state = document.getElementById("state").value;
      
      if(state == "") {

        document.getElementById("error6").innerHTML = "Please select your state";
        document.getElementById("state").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("error6").innerHTML = "";
        document.getElementById("state").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("state").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("state").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("state").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      } 
     
  }

  function zipCode() {
   
      let zip = document.getElementById("zip").value;
      let patt = new RegExp(/^[0-9]{5}$/);
      let res = patt.exec(zip);
      if(zip == "" || zip == null || zip == "null" || zip == undefined || zip == "undefined" || res == null) {

        document.getElementById("error7").innerHTML = "Please enter your 5 digit zip code";
        document.getElementById("zip").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("error7").innerHTML = "";
        document.getElementById("zip").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("zip").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("zip").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("zip").style.borderRight = "1px solid #BDBDBD";
        
        return validForm = true;
      }
  }

  function validateEmail() {
      
      let email = document.getElementById("email").value;
      let patt = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
      let res = patt.exec(email);

      if (email == "" || email == null || email == "null" || email == undefined || email == "undefined" || res == null) {
        document.getElementById("error8").innerHTML = "Please enter a valid email address";
        
        document.getElementById("email").style.border = "1px solid red";
        return validForm = false;
      }
      else {
        document.getElementById("error8").innerHTML = "";
        document.getElementById("email").style.borderTop = "2px solid #BDBDBD";
        document.getElementById("email").style.borderLeft = "1px solid #BDBDBD";
        document.getElementById("email").style.borderBottom = "1px solid #BDBDBD";
        document.getElementById("email").style.borderRight = "1px solid #BDBDBD";
        return validForm = true;
      }
  }
*/
  function goBack() {
      window.location.reload();
  }

  function validateForm() {
   
    firstName();
  /*  lastName();
    addressOne();
    otherAddress();
    cityName();
    stateName(); 
    zipCode();
    validateEmail();
*/
     if(validForm == true) {
        let student_fName = document.getElementById('student_fName').value;
    /*    let lastname = document.getElementById('lastname').value;
        let address1 = document.getElementById('address1').value;
        let address2 = document.getElementById('address2').value;
        let city = document.getElementById('city').value;
        let state = document.getElementById('state').value
        let zip = document.getElementById('zip').value;
        let email = document.getElementById('email').value;

        //document.getElementById('output').innerHTML = firstname + ' ' + lastname + '<br>' + address1 + '<br>' + address2 + '<br>' + city + ', ' + state + zipCode; 
        document.write('<section id="container">');
        document.write('<section id="contentLayer"></section>');
        document.write('<section id="content">');
        document.write('<header id="header">');
        document.write('<h1>Simple Form Submission</h1>');
        document.write('</header>');
        document.write('<section id="description">');
        document.write('<section class="output">')
        document.write('<strong>' + firstname + ' ');
        document.write(lastname + '</strong><br>');
        document.write('<address>');
        document.write(address1 + '<br>');
        if(address2 != null && address2 != '' && address2 != undefined) {
          document.write(address2 + '<br>');
        }
        else {
          document.write('N/A <br>');
        }
        document.write(city + ', ');
        document.write(state + ' ');
        document.write(zip + '<br>');
        document.write('</address>');
        document.write('<a href="mailto:' + email + '">' + email + '</a><br><br>');
        document.write('<button id="return" onclick="goBack()">Return to Form</button>');
        document.write('</section>');
        document.write('</section>');
        document.write('</section>');
        document.write('</section>');
        document.write('</section>'); */

        let el = document.createElement("link");
        el.type = "text/css";
        el.rel = "stylesheet";
        el.href = "css/student_form.css";
        document.getElementsByTagName("head")[0].appendChild(el);
      }
      else {
        return false;
      }
  }
