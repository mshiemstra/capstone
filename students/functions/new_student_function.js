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
  console.log('Another String');
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  console.log(urlParams.get('id'));
  if(urlParams.get('id')) {
    var id = urlParams.get('id');
    const json = {"id":id};
    console.log(json);
    console.log('Yet Another String');
    $.ajax({
      type: 'POST',
      url: 'functions/get_student.php',
      dataType: 'json',
      data: JSON.stringify(json),
      contentType: 'application/json',
      success: function(data) {
        console.log(data);
        console.log('A String');
        $('#person_id').val(data['person_id']);
        $('#student_fName').val(data['person_fName']);
        $('#student_lName').val(data['person_lName']);
        $('#student_street1').val(data['person_street1']);
        $('#student_street2').val(data['person_street2']);
        $('#student_city').val(data['person_city']);
        $('#student_state').val(data['person_state']);
        $('#student_zipcode').val(data['person_zipcode']);
        $('#student_phone').val(data['person_phone']);
        $('#student_email').val(data['person_email']);
      }
    });
  }
});