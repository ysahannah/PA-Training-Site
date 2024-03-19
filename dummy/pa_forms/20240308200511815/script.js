$(document).ready(function () {
  // Fetch questions from PHP script
  $.ajax({
    url: "./process_pa_forms.php",
    type: "GET",
    dataType: "json",
    success: function (data) {
      // Process fetched questions
      if (data.length > 0) {
        var questionsContainer = $("#question-section");
        $.each(data, function (_index, question) {
          // Create HTML for each question
          var questionHTML =
            '<div class="row question">' +
            '<div class="content" style="display: block">' +
            '<div class="questions">' +
            '<div class="question" style="display: block">' +
            "<div>" +
            '<span class="statement">' +
            question.QuestionText +
            "</span>" +
            "</div>" +
            '<div class="choices">' +
            "<label>" +
            '<input type="radio" name="question_' +
            question.QuestionID +
            '" value="yes" />' +
            "YES" +
            "</label>" +
            "<label>" +
            '<input type="radio" name="question_' +
            question.QuestionID +
            '" value="no" />' +
            "NO" +
            "</label>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "</div>";
          questionsContainer.append(questionHTML);
        });
      } else {
        // Handle case when no questions are fetched
        $("#questions-container").html("No questions found.");
      }
    },
    error: function (xhr, status, error) {
      // Handle error
      console.error(error);
      $("#questions-container").html("Error fetching questions.");
    },
  });
});
