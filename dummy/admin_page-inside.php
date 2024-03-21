<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../dummy/new_photos/LG.png">
    <title>Admin Page</title>
    <!--<link rel="stylesheet" href="../dummy/admin_page.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <!--Logo-->
    <header></header>

    <div class="container my-5">
       <h2>LIST OF USERS</h2>
       <a class="btn btn-primary" href="" role="button">New CLIENT</a>
       <br>
       <table class="table">
            <thead>
                <tr>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "pa_training_site";

                //Create Connection
                $connection = new mysqli($servername, $username, $password, $database);

                //check connection
                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }

                //read all row from database table
                $sql = "SELECT *FROM users";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }

                //read data of each row
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[username]</td>
                        <td>$row[password]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='edit.php?id=$row'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='delete.php?id=$row'>Delete</a>
                        </td>
                    </tr>
                    ";
                }

                ?>
                
               
            </tbody>
       </table>
    </div>   
</body>

</html>