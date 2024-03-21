<?php
$username = "";
$password = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST["username"];
    $password = $_POST["password"];

    do{
        if ( empty($username) || empty($password) ) {
            $errorMessage = "All the fields are required";
            break;
        }

        //add new client to database

        $username = "";
        $password = "";

        $successMessage = "Client added correctly";

    } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="icon" href="../dummy/new_photos/LG.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>NEW CLIENT</h2>

        <?php
        if ( !empty($errorMessage) ) {
            echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <srong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>    
                ";
        }
        ?>

        <form method="post">
            <div class="row nb-3">
                <label class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                </div>
            </div>

            <div class="row nb-3">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
                </div>
            </div>


            <?php
            if ( !empty($successMessage) ) {
                echo"
                <div class='row mb-3'>
                    <div class= 'offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outlime-priimary" href="../dummy/admin_page-inside.php" role="button">Cancel</a>
                </div>
            </div>
            

        </form>
    </div>
</body>
</html>