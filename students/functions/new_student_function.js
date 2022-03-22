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
      url: 'new_student_process.php',
      dataType: 'json',
      data: json,
      contentType: 'application/json',
      success: function(data) {
        console.log(data);
        $('#result').text(data['message']);
        if(data['success']){
          $('#class_id').val("");
          $('#student_id').val("");
        }        
      }
    });
  });
});