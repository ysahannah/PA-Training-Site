$(document).ready(function () {
  // AJAX request to fetch medicine data based on search input
  $("#search").keyup(function () {
    var query = $(this).val();
    if (query != "") {
      $.ajax({
        url: "../request/connect_new_request.php",
        method: "POST",
        data: {
          query: query,
        },
        success: function (data) {
          $("#result").html(data);
        },
      });
    } else {
      $("#result").html("");
    }
  });

  // Keep clicked medicine in the search box and show patient information
  $(document).on("click", "#result div", function () {
    var value = $(this).text();
    $("#search").val(value);
    $("#result").html("");
    $("#patient_information").show();
  });

  // Click event for the "Continue" button
  $("#continue").click(function (event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Show the additional process
    $("#patient_insurance").show();

    // Serialize the form data and store it in sessionStorage
    var formData = $("#patientForm").serialize();
    sessionStorage.setItem("patientFormData", formData);
  });

  // Retrieve form data from sessionStorage and populate input fields
  var formData = sessionStorage.getItem("patientFormData");
  if (formData) {
    var params = new URLSearchParams(formData);
    $("#secondPageForm input[name='firstName']").val(
      params.get("firstName") || ""
    );
    $("#secondPageForm input[name='lastName']").val(
      params.get("lastName") || ""
    );
    $("#secondPageForm input[name='birthday']").val(
      params.get("birthday") || ""
    );
    $("#secondPageForm input[name='zip_code']").val(
      params.get("zip_code") || ""
    );

    // Iterate through radio buttons for gender and check the correct one
    var genderValue = params.get("gender") || "";
    $("#secondPageForm input[name='gender']").each(function () {
      if ($(this).val === genderValue) {
        $(this).prop("checked", true);
      }
    });
  }

  // Fetch patient addresses
  $.ajax({
    url: "../request/connect_address_book.php",
    type: "GET",
    success: function (data) {
      $("#patientAddresses").html(data);
    },
  });

  // Fetch insurance states via AJAX and populate dropdown
  $.ajax({
    url: "../start_new_request_form/choose_patient_insurance.php",
    type: "GET",
    dataType: "json",
    success: function (data) {
      $.each(data, function (_index, state) {});
    },
    error: function () {
      alert("Error fetching insurance states");
    },
  });
});

// Function to fetch insurance states and populate dropdown
function populateInsuranceStates() {
  $.ajax({
    url: "../start_new_request_form/choose_patient_insurance.php",
    type: "GET",
    dataType: "json",
    success: function (data) {
      $.each(data, function (index, state) {
        $("#insurance-state").append(
          '<option value="' +
            state.insurance_state_id +
            '">' +
            state.insurance_state_name +
            "</option>"
        );
        $("#insurance-state-option2").append(
          '<option value="' +
            state.insurance_state_id +
            '">' +
            state.insurance_state_name +
            "</option>"
        );
        $("#insurance-state-id").append(
          '<option value="' +
            state.insurance_state_id +
            '">' +
            state.insurance_state_name +
            "</option>"
        );
      });
    },
    error: function () {
      alert("Error fetching insurance states");
    },
  });
}

// Script for handling patient insurance
$(document).ready(function () {
  // Click event for the "Enter Later" button
  $("#enter_later").click(function () {
    console.log("Button clicked!");
    $("#patient_insurance").show();
  });

  // Trigger the function initially
  populateInsuranceStates();

  // Change event handler for radio buttons
  $('input[type="radio"]').change(function () {
    var selectedOption = $('input[name="insurance-card-search"]:checked').val();
    $(".result").text("Selected option: " + selectedOption);

    // Enable/disable input fields based on the selected option
    if (selectedOption === "Option 1") {
      $("#bin, #pcn, #group_id").prop("disabled", false);
      $("#q").prop("disabled", true);
    } else if (selectedOption === "Option 2") {
      $("#bin, #pcn, #group_id").prop("disabled", true);
      $("#q").prop("disabled", false);
    }

    // If Option 1 is selected, trigger live search
    if (selectedOption === "Option 1") {
      $("#insurance-state").on("change", function () {
        var selectedState = $(this).val();
      });
    }

    // If Option 2 is selected, trigger live search
    if (selectedOption === "Option 2") {
      $("#insurance-state-option2").on("change", function () {
        var selectedState = $(this).val();
      });
    }
  });

  // Clear button functionality
  $("#clearButton").click(function () {
    // Clear input fields
    $('input[type="text"], input[type="date"], select').val("");
  });
});

// Script for handling PA forms
$(document).ready(function () {
  // Function to handle AJAX request
  function fetchFormData(formData) {
    $.ajax({
      url: "../start_new_request_form/process_pa_forms.php",
      type: "POST",
      data: formData,
      dataType: "json",
      success: function (data) {
        if (data.length > 0) {
          // Update PA Forms section with fetched data
          $("#pa_forms_name").text(data[0].pa_forms_name);
          $("#pa_forms_description").text(data[0].pa_forms_description);
          $("#eligibility-form").show();
        } else {
          // Handle case when no data is found
          $("#proceed").click(function () {
            $("#form-search-results").show();
            $("#eligibility-form").hide();
            $("#submit-pa-form").attr("action", data[0].pa_forms_pdf);
            $("#form-search-results").hide();
            console.log("No matching data found.");
          });
        }
      },
      error: function () {
        console.log("Error fetching form data.");
      },
    });
  }

  // Event listener for input fields
  $("#bin, #pcn, #group_id").on("input", function () {
    var bin = $("#bin").val().trim();
    var pcn = $("#pcn").val().trim();
    var groupId = $("#group_id").val().trim();
    var formData = {
      bin: bin,
      pcn: pcn,
      group_id: groupId,
    };
    fetchFormData(formData);
  });
});

// Define the startRequest function
function startRequest() {
  // Serialize the form data
  var formData = $("#patientForm").serialize();

  // Generate a random request key
  var requestKey = generatedRandomString(8);

  // Store the form data in sessionStorage
  sessionStorage.setItem("patientFormData", formData);
  sessionStorage.setItem("requestKey", requestKey);

  // Submit the form
  $("#patientForm").submit();
}

// Function to generate a random alphanumeric string of a specified length
function generateRandomString(length) {
  var result = "";
  var characters =
    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  var charactersLength = characters.length;
  for (var i = 0; i < length; i++) {
    result += characters.charAt(Math.floor(Math.random() * charactersLength));
  }     
  return result;
}
