// Submit patient information form
$("#continue").click(function (event) {
  // Prevent default form submission
  event.preventDefault();

  // Serialize form data
  var formData = $("form").serialize();

  // Send AJAX request
  $.ajax({
    type: "POST",
    url: "../request/connect_patient_information.php",
    data: formData,
    success: function (_response) {
      // Show patient insurance section
      $("#patient_insurance").show();
    },
    error: function (xhr, _status, _error) {
      // Handle errors
      console.error(xhr.responseText);
    },
  });
});
