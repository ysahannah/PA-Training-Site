<?php 
session_start();


?>
<!DOCTYPE html>
<html
  lang="en"
  class="h-full"
  data-scrapbook-source="https://portal.covermymeds.com/requests/current/1"
  data-scrapbook-create="20240221204931169"
  data-scrapbook-title="Request List - CoverMyMeds">
  <head>
    <meta charset="UTF-8" />
    <title>Request List - Prior Authorization Training Site</title>
    <link rel="icon" type="image/png" href="/dummy/new_photos/LG.png">
    
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="css/dsl-fonts-WT5DQAQL.css" />
    <link rel="stylesheet" href="css/dsl-styles-YCXHNMA7.css" />
    <link rel="stylesheet" href="css/TopNav-L337IQDX.css" />
    <link rel="stylesheet" href="css/main-YBGK6ACJ.css" />
    <link rel="stylesheet" href="css/UnsupportedBrowser-KAWX53IV.css" />
   
    <link rel="stylesheet" href="css/RequestList-BXHXX3ZG.css" />
    <link rel="stylesheet" href="css/RequestCard-7EUGJETM.css" />
    <link rel="stylesheet" href="/dummy/request/user_management.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS (popper.js and bootstrap.bundle.js are required for toast functionality) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery (required for AJAX) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script>
        // Function to get URL parameter by name
        function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        }

        $(document).ready(function() {
            // Check for query parameter indicating success
            var success = getUrlParameter('success');

            // If success is true, show the toast notification
            if (success === 'true') {
                var successToast = new bootstrap.Toast(document.getElementById("successToast"));
                successToast.show();
            } else if (success === 'false') {
                // If there was an error, alert the user
                var error = getUrlParameter('error');
                alert("An error occurred: " + error);
            }
        });
    </script>
  </head>

  <body class="h-full">
  <nav
      class="top-nav top-nav--with-side-nav"
      aria-label="top navigation links">
      <a href="index.html" id="cmmLogoLink" aria-label="Home">
        <img
          style="height: 250px; width: 200px; padding-top: 4%"
          id="logo"
          src="../new_photos/PA-logo.png"
          alt="" />
      </a>
      <ul class="top-nav__links"></ul>
    </nav>
    <!-- Bootstrap Toast -->
    <div aria-live="polite" aria-atomic="true" class="toast-container row justify-content-center" style="z-index: 9999; top: 0; right: 0;">
        <div id="successToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Success</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                User added successfully...
            </div>
        </div>

        <!-- Second Toast for User already exists -->
    <div id="userExistsToast" class="toast" role="alert" aria-lisve="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Warning</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            User already exists...
        </div>
    </div>
         <!-- End Bootstrap Toast for User already exists -->

        <!-- Bootstrap Toast for Delete User Success -->
    <div id="deleteSuccessToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Success</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            User deleted successfully...
        </div>

    </div>
 
        </div>
    </div>
         <!-- End Bootstrap Toast for User already exists -->

        <!-- Bootstrap Toast for Delete User Success -->
    <div id="deleteSuccessToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Success</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            User deleted successfully...
        </div>
    </div>
    <!-- End Bootstrap Toast -->


    <!-- Add the modal markup -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Delete User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this user?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
      </div>
    </div>
  </div>
</div>

    <div class="dsl-side-nav-wrapper slide-from-left-react-enter-done">
      <!-- Start of Sidebar -->
      <nav
        aria-label="navigation panel"
        class="dsl-side-nav"
        style="padding-top: 0px">
        <ul class="dsl-side-nav__list">
          <li>
            <div>
              <a
                href="https://www.covermymeds.com/request/list"
                class="dsl-side-nav__item dsl-side-nav__item--is-selected"
                id="ga-qa-dsl-side-nav-item-request"
                ><img
                  alt=""
                  src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQiIGhlaWdodD0iNDIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiAgICA8ZyBmaWxsPSJub25lIj4KICAgICAgICA8cGF0aCBzdHJva2U9IiNGRkZGRkYiIGQ9Ik0xLjUgMS41aDMxdjM5aC0zMXoiLz4KICAgICAgICA8cGF0aCBzdHJva2U9IiNGRkZGRkYiIGQ9Ik0yOC41IDUuNWgtMjN2MzFoMjN2LTMxeiIvPgogICAgICAgIDxwYXRoCiAgICAgICAgICAgICAgICBkPSJNMTMgMTB2MmgydjJoLTJ2MmgtMnYtMi4wMDFMOSAxNHYtMmwyLS4wMDFWMTBoMnoiCiAgICAgICAgICAgICAgICBmaWxsPSIjRTAwMDREIgogICAgICAgIC8+CiAgICAgICAgPHBhdGgKICAgICAgICAgICAgICAgIHN0cm9rZT0iI0ZGRkZGRiIKICAgICAgICAgICAgICAgIGQ9Ik05IDMwLjVoMTZNOSAyNS41aDE2TTkgMjAuNWgxNk0xOCAxNS41aDciCiAgICAgICAgLz4KICAgIDwvZz4KPC9zdmc+Cg==" />
                <div class="dsl-side-nav__item__title">Requests</div>
              </a>
            </div>
          </li>
        </ul>

        <ul class="dsl-side-nav__list">
          <li>
            <div>
              <a
                aria-expanded="false"
                data-preview-links=""
                href="../request/user_management.html"
                class="dsl-side-nav__item"
                id="ga-qa-dsl-side-nav-item-logout"
                ><img
                  alt=""
                  style="height: 50px";
                  src="../request/images/group.png" />
                <div class="dsl-side-nav__item__title">User Management</div>
              </a>
            </div>
          </li>
          <li>
            <div>
              <a
                aria-expanded="false"
                data-preview-links=""
                href="../request/settings.html"
                class="dsl-side-nav__item"
                id="ga-qa-dsl-side-nav-item-logout"
                ><img
                  alt=""
                  src="../request/images/icons8-settings.svg" />
                <div class="dsl-side-nav__item__title">Settings</div>
              </a>
            </div>
          </li>
        </ul>
        
        <ul class="dsl-side-nav__list">
          <li>
            <div>
              <button
                aria-expanded="false"
                data-preview-links="ga-qa-dsl-side-nav-item-preview-account-preferences,ga-qa-dsl-side-nav-item-preview-account-profile,ga-qa-dsl-side-nav-item-preview-recent-activity,ga-qa-dsl-side-nav-item-preview-verify-prescribers,ga-qa-dsl-side-nav-item-preview-help,ga-qa-dsl-side-nav-item-preview-privacy-and-terms"
                class="dsl-side-nav__item"
                id="ga-qa-dsl-side-nav-item-account"
                type="button"
                aria-haspopup="true">
                <img
                  alt=""
                  src="data:image/svg+xml;base64,PHN2ZwogICAgICAgIHdpZHRoPSIzMSIKICAgICAgICBoZWlnaHQ9IjM2IgogICAgICAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKPgogICAgPGcgc3Ryb2tlPSIjMDE0MjZBIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxjaXJjbGUgc3Ryb2tlPSIjMDE0MjZBIiBzdHJva2Utd2lkdGg9IjMiIGN4PSIxNS41IiBjeT0iOC41IiByPSI3IiAvPgogICAgICAgIDxwYXRoCiAgICAgICAgICAgICAgICBzdHJva2U9IiMwMTQyNkEiCiAgICAgICAgICAgICAgICBkPSJNOS41MjIgMTguNTEzQTguNDcyIDguNDcyIDAgMDAzLjk5IDIwLjk5IDguNDczIDguNDczIDAgMDAxLjUgMjd2Ny41aDI4VjI3YTguNDczIDguNDczIDAgMDAtMi40OS02LjAxIDguNDc0IDguNDc0IDAgMDAtNS4wODgtMi40NGwtNi40ODcgMTMuNTYyLTUuOTEzLTEzLjU5OXoiCiAgICAgICAgICAgICAgICBzdHJva2Utd2lkdGg9IjMiCiAgICAgICAgLz4KICAgICAgICA8cGF0aCBzdHJva2U9IiMwMTQyNkEiIGQ9Ik0yMy41IDMzdi01LjUiIC8+CiAgICAgICAgPHBhdGgKICAgICAgICAgICAgICAgIHN0cm9rZT0iIzAxNDI2QSIKICAgICAgICAgICAgICAgIGQ9Ik0yMC41OTggMTguOTA4QzE4LjY5OCAxOS42NCAxNy4xNjQgMjAgMTYgMjBjLTEuMjEgMC0zLjA5LS4zOTMtNS42NC0xLjE5NWw1LjE0IDEyLjg0OSA1LjA5OC0xMi43NDZ6IgogICAgICAgICAgICAgICAgZmlsbD0iI0UwMDA0RCIKICAgICAgICAvPgogICAgICAgIDxwYXRoIHN0cm9rZT0iIzAxNDI2QSIgZD0iTTcuNSAzM3YtNS41IiAvPgogICAgPC9nPgo8L3N2Zz4K" />
                <div class="dsl-side-nav__item__title">Account</div>
              </button>
            </div>
          </li>
          <li>
            <div>
              <a
                aria-expanded="false"
                data-preview-links=""
                href="https://account.covermymeds.com/logout"
                class="dsl-side-nav__item"
                id="ga-qa-dsl-side-nav-item-logout"
                ><img
                  alt=""
                  src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzEiIGhlaWdodD0iMzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiAgICA8ZyBzdHJva2Utd2lkdGg9IjMiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGgKICAgICAgICAgICAgc3Ryb2tlPSIjMDE0MjZBIgogICAgICAgICAgICBkPSJNMTguNSA3VjEuNWgtMTd2MjhoMTdWMjQiCiAgICAgICAgLz4KICAgICAgICA8ZyBzdHJva2U9IiNFMDAwNEQiPgogICAgICAgICAgICA8cGF0aCBkPSJNMjAuNzAyIDlsNy45MzMgNi40OS03LjkzMyA2LjQ5TTExIDE1LjQ5aDE2LjE5MiIgLz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPgo=" />
                <div class="dsl-side-nav__item__title">Logout</div>
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- End of Sidebar -->
    </div>

    <!-- main -->
    <main id="main" class="with-side-nav">
      <div class="container">
        <div class="main-title">
            <h2>USERS</h2>
        </div>
      
        <div class="main-cards">

            <div class="card">
                <div class="card-inner">
                    <h3>USERS</h3>
                    <span class="material-icon-outlined">groups</span>
                </div>
                <h1>1500</h1>
            </div>

            <div class="card">
                <div class="card-inner">
                    <h3>USERS</h3>
                    <span class="material-icon-outlined">groups</span>
                </div>
                <h1>1500</h1>
            </div>

            <div class="card">
                <div class="card-inner">
                    <h3>USERS</h3>
                    <span class="material-icon-outlined">groups</span>
                </div>
                <h1>1500</h1>
            </div>

            <div class="card">
                <div class="card-inner">
                    <h3>USERS</h3>
                    <span class="material-icon-outlined">groups</span>
                </div>
                <h1>1500</h1>
            </div>
        </div>

      <div class="user-table">
        <table id="documentTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
  // Function to show the delete success toast
  function showDeleteSuccessToast() {
    var deleteSuccessToast = new bootstrap.Toast(document.getElementById("deleteSuccessToast"));
    deleteSuccessToast.show();
  }

  $(document).ready(function() {
    $('#documentTable').DataTable({
      "ajax": {
        "url": "../request/fetch_user.php",
        "dataSrc": ""
      },
      "columns": [{
          "data": "id"
        },
        {
          "data": "username"
        },
        {
          "data": null,
          "render": function(data, type, row) {
            var editButton = '<a href="../request/edit_user.php?id=' + row.id +
              '" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/></svg></a>';

            var deleteButton = '<button type="button" class="btn btn-danger deleteUserBtn" data-id="' + row.id + '" data-bs-toggle="modal" data-bs-target="#deleteUserModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/></svg></button>';
            return editButton + " " + deleteButton;
          }
        },
      ]
    });

     // Delete confirmation
     $(document).on('click', '.deleteUserBtn', function() {
        var userIdToDelete = $(this).data('id'); // Corrected the way of retrieving data-id

        $('#confirmDeleteBtn').data('id', userIdToDelete); // Setting data-id to the confirm delete button

        // Show delete confirmation modal
        $('#deleteUserModal').modal('show');
    });

    $('#confirmDeleteBtn').click(function() {
        var userIdToDelete = $(this).data('id');


      $.ajax({
        url: '../request/delete_user.php',
        type: 'GET',
        data: { id: userIdToDelete },
        success: function(response) {
          console.log(response);
          // Show the delete success toast
          showDeleteSuccessToast();
          // Reload the DataTable after successful deletion
          $('#documentTable').DataTable().ajax.reload();

          $('.deleteUserBtn').off('click').on('click', function() {
            var userIdToDelete = $(this).data('id');
            $('#confirmDeleteBtn').data('id', userIdToDelete);
          });
        

          // Re-enable click on the rest of the screen
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText);
        }
      });
      // Close the modal
      $('#deleteUserModal').modal('hide');
    });
  });
</script>


      </div>
      <br>

      <button type="button" class="btn btn-primary"><a class="link-offset-2 link-underline link-underline-opacity-0 text-light" href="../request/add_user.php">Add user</a>
        </button>

        <button type="button" class="btn btn-danger"><a class="link-offset-2 link-underline link-underline-opacity-0 text-light" href="../request/admin.php">Cancel</a>
        </button>
      </div>
      </div>
    </main>
  </body>
</html>