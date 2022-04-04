$(document).ready(function(){
  //alert('ready');

  function trimString() {
    var class_id = $("#class_id").text();
    var class_idTrim = $.trim(class_id);

    var class_term = $("#class_term").text();
    var class_termTrim = $.trim(class_term);

    var class_desc = $("#class_desc").text();
    var class_desc = $.trim(class_desc);

    var class_name = $("#class_name").text();
    var class_nameTrim = $.trim(class_name);

    var person_id = $("#person_id").text();
    var person_idTrim = $.trim(person_id);
    
    

    $("#class_id").html(class_idTrim);
    $("#class_term").html(class_termTrim);
    $("#class_desc").html(class_descTrim);
    $("#class_name").html(class_nameTrim);
    $("#person_id").html(person_id);
  }


  function class_idNumber() {
   
      let class_id = $("#class_id").val();      
      let patt = new RegExp(/^[0-9]*$/);
      let res = patt.exec(class_id);

      if(class_id == "" || class_id == null || class_id == "null" || class_id == undefined || class_id == "undefined" || res == null) {
       

        $('#class_error1').html('Please enter a valid class ID');

        return validForm = false;
      }
      else {
        $('#class_error1').html('');
        $('#class_id').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }
  


  function class_term() {
   
      let class_term = $("#class_term").val();      
      let patt = new RegExp(/^[A-Za-z0-9]*$/);
      let res = patt.exec(class_term);

      if(class_term == "" || class_term == null || class_term == "null" || class_term == undefined || class_term == "undefined" || res == null) {
       

        $('#class_error6').html('Please enter a valid term');

        return validForm = false;
      }
      else {
        $('#class_error6').html('');
        $('#class_term').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }



  function class_description() {
   
      let class_desc = $("#class_desc").val();      
      let patt = new RegExp(/^[A-Za-z.0-9\s_-]+$/);
      let res = patt.exec(class_desc);

      if(class_desc == "" || class_desc == null || class_desc == "null" || class_desc == undefined || class_desc == "undefined" || res == null) {
       

        $('#class_error2').html('Please enter a class description');

        return validForm = false;
      }
      else {
        $('#class_error2').html('');
        $('#class_desc').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }




  function class_name() {
   
      let class_name = $("#class_name").val();      
      let patt = new RegExp(/^[A-Za-z.0-9\s_-]*$/);
      let res = patt.exec(class_name);

      if(res == null) {
       

        $('#class_error3').html('Please enter a valid address');

        return validForm = false;
      }
      else {
        $('#class_error3').html('');
        $('#class_name').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }


  function teacher_ID() {
   
      let class_fName = $("#person_id").val();      
      let patt = new RegExp(/^[a-zA-Z -]*$/);
      let res = patt.exec(person_id);

      if(person_id == "" || person_id == null || person_id == "null" || person_id == undefined || person_id == "undefined" || res == null) {
       

        $('#class_error4').html('Please enter a valid first name');

        return validForm = false;
      }
      else {
        $('#class_error4').html('');
        $('#person_id').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }


  



  $('#class_id').blur(class_idNumber);
  $('#class_term').blur(class_term);
  $('#class_desc').blur(class_desc);
  $('#class_name').blur(class_name);
  $('#person_id').blur(person_id);

  function validateForm() {
    class_idNumber();
    class_term();
    class_description();
    class_name();
    teacher_ID();


    if(validForm == true){
      var class_id = $('#class_id').val();
      var class_term = $('#class_term').val();  
      var class_desc = $('#class_desc').val();
      var class_name = $('#class_name').val();
      var person_id = $('#person_id').val();
    } 
    else {
      return false;
    }

  }

  function goBack() {
      window.location.reload();
  }

});  
