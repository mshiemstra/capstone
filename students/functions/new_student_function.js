$(document).ready(function(){
  const serialize_form = form => JSON.stringify(
    Array.from(new FormData(form).entries())
    .reduce((m, [ key, value ]) => Object.assign(m, { [key]: value }), {})
  );

  $('#new_student_form').on('submit', function(e) {
    e.preventDefault();
    const json = serialize_form(this);
   // const json = {"name":"bob"};
    console.log(json);
    $.ajax({
      type: 'POST',
      url: 'functions/new_student_process.php',
      dataType: 'json',
      data: json,
      contentType: 'application/json',
      success: function(data) {
        console.log(data);
        $('#result').text(data['message']);
        if(data['success']){
          $('#student_id').val("");
          $('#student_fName').val("");
          $('#student_lName').val("");
          $('#student_street1').val("");
          $('#student_street2').val("");
          $('#student_city').val("");
          $('#student_state').val("");
          $('#student_zipcode').val("");
          $('#student_phone').val("");
          $('#student_email').val("");
        }        
      }
    });
  });
});