
<?php
    if(isset($_POST['submit'])){
        $fullName = $_POST['complete_name'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $satisfiedLevel = $_POST['satisfaction_level'];
        $message = $_POST['feedback_message'];
        echo "<h1 style = 'font-family:arial; font-size:50px;'>Thank You!</h1>";
        echo "<p style = 'font-family:arial; font-size:25px;'>Received\n$type\nmessage from\n$fullName\n($email)</p></br>";
        echo "<p style = 'font-family:arial; font-size:25px;'>Satisfaction Level:\n$satisfiedLevel</p></br>";
        echo "<p style = 'font-family:arial; font-size:25px;'>$message</p>";
}
?>

