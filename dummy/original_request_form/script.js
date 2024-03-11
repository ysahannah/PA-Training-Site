document.addEventListener("DOMContentLoaded", function () {
  var form = document.querySelector("#patient-section form");
  if (form) {
    var params = new URLSearchParams(window.location.search);
    var firstName = params.get("firstName") || "";
    var lastName = params.get("lastName") || "";
    var birthday = params.get("birthday") || "";
    var gender = params.get("gender") || "";
    var zip_code = params.get("zip_code") || "";

    var firstNameInput = form.querySelector('input[name="firstName"]');
    var lastNameInput = form.querySelector('input[name="lastName"]');
    var birthdayInput = form.querySelector('input[name="birthday"]');
    var genderInputs = form.querySelectorAll('input[name="gender"]');
    var zip_codeInput = form.querySelector('input[name="zip_code"]');

    if (
      firstNameInput &&
      lastNameInput &&
      birthdayInput &&
      genderInputs.length > 0 &&
      zip_codeInput
    ) {
      firstNameInput.value = firstName;
      lastNameInput.value = lastName;
      birthdayInput.value = birthday;
      // Loop through genderInputs to find the checked one and set its value
      genderInputs.forEach(function (input) {
        if (input.value === gender) {
          input.checked = true;
        }
      });
      zip_codeInput.value = zip_code;
    } else {
      console.error("Input fields not found in the form.");
    }
  } else {
    console.error("Form not found.");
  }
});
