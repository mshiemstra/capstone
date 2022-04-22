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
      url: 'functions/get_teacher.php',
      dataType: 'json',
      data: JSON.stringify(json),
      contentType: 'application/json',
      success: function(data) {
        console.log(data);
        console.log('A String');
        $('#person_id').val(data['person_id']);
        $('#teacher_fName').val(data['person_fName']);
        $('#teacher_lName').val(data['person_lName']);
        $('#teacher_street1').val(data['person_street1']);
        $('#teacher_street2').val(data['person_street2']);
        $('#teacher_city').val(data['person_city']);
        $('#teacher_state').val(data['person_state']);
        $('#teacher_zipcode').val(data['person_zipcode']);
        $('#teacher_phone').val(data['person_phone']);
        $('#teacher_email').val(data['person_email']);
      }
    });
  }
});