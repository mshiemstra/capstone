$(document).ready(function(){
  const serialize_form = form => JSON.stringify(
    Array.from(new FormData(form).entries())
    .reduce((m, [ key, value ]) => Object.assign(m, { [key]: value }), {})
  );

  $('#new_teacher_form').on('submit', function(e) {
    e.preventDefault();
    const json = serialize_form(this);
   // const json = {"name":"bob"};
    console.log(json);
    $.ajax({
      type: 'POST',
      url: 'functions/new_teacher_process.php',
      dataType: 'json',
      data: json,
      contentType: 'application/json',
      success: function(data) {
        console.log(data);
        $('#result').text(data['message']);
        if(data['success']){
          $('#teacher_id').val("");
          $('#teacher_fName').val("");
          $('#teacher_lName').val("");
          $('#teacher_street1').val("");
          $('#teacher_street2').val("");
          $('#teacher_city').val("");
          $('#teacher_state').val("");
          $('#teacher_zipcode').val("");
          $('#teacher_phone').val("");
          $('#teacher_email').val("");
        }        
      }
    });
  });
});