<script>
        // JavaScript to save session variables in session storage
        <?php
        session_start(); // Start the session if not already started
        if(isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
            echo "sessionStorage.setItem('user_id', " . json_encode($_SESSION['user_id']) . ");\n";
            echo "sessionStorage.setItem('username', " . json_encode($_SESSION['username']) . ");\n";
            // You can add other session variables here
        }
        ?>
</script>