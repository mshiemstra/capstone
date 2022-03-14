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
    url: 'https://localhost/hiemstraonlinedesign.com/school-files/simpson/spring_2022/capstone/enroll_student.php',
    dataType: 'json',
    data: json,
    contentType: 'application/json',
    success: function(data) {
      console.log(data)
    }
  });
});