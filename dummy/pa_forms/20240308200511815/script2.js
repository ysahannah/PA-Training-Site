$(document).ready(function () {
    // Fetch questions from the PHP script
    $.ajax({
      url: "./fetch_patient_information.php",
      type: "GET",
      dataType: "json",
      success: function (response) {
        // Update the span elements with questions
        $.each(response, function (index, question) {
          $(".statement:eq(" + index + ")").text(question.QuestionText);
        });
      },
      error: function (xhr, _status, _error) {
        console.error(xhr.responseText);
      },
    });
  });
  