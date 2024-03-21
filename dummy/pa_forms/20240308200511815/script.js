$(document).ready(function () {
  // Fetch questions from the PHP script
  $.ajax({
    url: "./process_pa_forms.php",
    type: "GET",
    dataType: "json",
    success: function (response) {
      // Update the span elements with questions
      $.each(response, function (index, question) {
        $(".statement:eq(" + index + ")").text(question.QuestionText);
      });
    },
    error: function (xhr, status, error) {
      console.error(xhr.responseText);
    },
  });
});
