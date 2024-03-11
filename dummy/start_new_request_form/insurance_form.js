document.addEventListener("DOMContentLoaded", function () {
  const insuranceCardOption = document.getElementById("insurance-card-option");
  const queryOption = document.getElementById("query-option");

  const insuranceCardInputs = document.querySelectorAll(
    ".formpick__insurance-card-view:nth-of-type(1) .dsl-text-input"
  );
  const queryInputs = document.querySelectorAll(
    ".formpick__insurance-card-view:nth-of-type(2) .dsl-text-input"
  );

  // Function to enable or disable input fields based on the selected option
  function toggleInputs(option, inputs) {
    option.addEventListener("change", function () {
      inputs.forEach((input) => {
        input.disabled = !option.checked;
      });
    });
  }

  // Initially disable inputs for both options
  insuranceCardInputs.forEach((input) => {
    input.disabled = true;
  });
  queryInputs.forEach((input) => {
    input.disabled = true;
  });

  // Toggle inputs based on selected option
  toggleInputs(insuranceCardOption, insuranceCardInputs);
  toggleInputs(queryOption, queryInputs);
});
