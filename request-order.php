<!DOCTYPE html>
<html lang="en-US">
  <?php
    // define variables and set to empty values
$nameErr = $emailornumbErr = $genderErr = "";
$name = $emailornumb = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["emailornumb"])) {
    $emailornumbErr = "Email or phone # is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

  ?>
</html>
