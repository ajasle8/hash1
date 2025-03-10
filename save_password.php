<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["password"])) {
    $password = trim($_POST["password"]) . PHP_EOL;
    file_put_contents("passwords.txt", $password, FILE_APPEND | LOCK_EX);
    echo "Password saved successfully.";
} else {
    echo "Invalid request.";
}
?>
