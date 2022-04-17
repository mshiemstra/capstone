$(document).ready(function(){
  //alert('ready');

  function trimString() {
    
    var class_term = $("#class_term").text();
    var class_termTrim = $.trim(class_term);

    var class_desc = $("#class_desc").text();
    var class_descTrim = $.trim(class_desc);

    var class_name = $("#class_name").text();
    var class_nameTrim = $.trim(class_name);

    $("#class_term").html(class_termTrim);
    $("#class_desc").html(class_descTrim);
    $("#class_name").html(class_nameTrim);

  }



  function class_term() {
   
      let class_term = $("#class_term").val();      
      let patt = new RegExp(/^[A-Za-z0-9]*$/);
      let res = patt.exec(class_term);

      if(class_term == "" || class_term == null || class_term == "null" || class_term == undefined || class_term == "undefined" || res == null) {
       

        $('#class_error1').html('Missing Term');

        return validForm = false;
      }
      else {
        $('#class_error1').html('');
        $('#class_term').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }



  function class_desc() {
   
      let class_desc = $("#class_desc").val();      
      let patt = new RegExp(/^[A-Za-z0-9-]*$/);
      let res = patt.exec(class_desc);

      if(class_desc == "" || class_desc == null || class_desc == "null" || class_desc == undefined || class_desc == "undefined" || res == null) {
       

        $('#class_error2').html('Missing Description');

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
      let patt = new RegExp(/^[A-Za-z ]*$/);
      let res = patt.exec(class_name);

      if(class_name == "" || class_name == null || class_name == "null" || class_name == undefined || class_name == "undefined" || res == null) {
       

        $('#class_error3').html('Missing Name');

        return validForm = false;
      }
      else {
        $('#class_error3').html('');
        $('#class_name').css('border', '2px solid #BDBDBD');
        
        return validForm = true;
    }

  }


  $('#class_term').blur(class_term);
  $('#class_desc').blur(class_desc);
  $('#class_name').blur(class_name);


  function validateForm() {
    class_term();
    class_desc();
    class_name();


    if(validForm == true){      
      var class_term = $('#class_term').val();
      var class_desc = $('#class_desc').val();
      var class_name = $('#class_name').val();
    }
  }

  function goBack() {
      window.location.reload();
  }

});  
