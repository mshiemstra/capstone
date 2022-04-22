const serialize_form = form => JSON.stringify(
    Array.from(new FormData(form).entries())
    .reduce((m, [ key, value ]) => Object.assign(m, { [key]: value }), {})
);

$('#enrollment_form').on('submit', function(e) {
  e.preventDefault();
  const json = serialize_form(this);
  console.log(json);
  $.ajax({
    type: 'POST',
    url: 'functions/enroll_student_function.php',
    dataType: 'json',
    data: json,
    contentType: 'application/json',
    success: function(data) {
      console.log(data);
      $('#result').text(data['message']);
      if(data['success']){
        $('#class_id').val("");
        $('#role').val("");          
      }
    }/*,

    fail: function() {
      console.log('error sending data');       
    } */
  });
});