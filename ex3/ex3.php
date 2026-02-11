<?php
    $title = "Exercise 3";
    // ../ means go out of ex3, then look for includes
    include '../includes/header.php'; 
?>

<form action="ex3.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        echo "<h3>Hello $fname $lname, You are welcome to my site.</h3>";
    }

    include '../includes/footer.php';
?>