<form method="post" action="">
    Name: <input type="text" name="voter_name" required><br><br>
    Age: <input type="number" name="voter_age" required><br><br>
    <input type="submit" name="submit" value="Check Status">
</form> 

<?php
// 2. Check if the form was submitted
if (isset($_POST['submit'])) {
    
    // 3. Store inputs in variables
    $name = $_POST['voter_name'];
    $age = $_POST['voter_age'];

    // 4. If-Else Logic
    if ($age >= 18) {
        echo "<h4>Hello $name, you are eligible to vote!</h4>";
    } else {
        echo "<h4>Hello $name, you are not eligible to vote.</h4>";
    }
}
?>
<?php
    // to get the current month
    $month = date("F");

    //Using switch case to check the month
    switch ($month) {
        case "August":
            echo "It's August, so it's still holiday.";
            break;

        default:
            echo "Not August, this is $month so I don't have any holidays.";
            break;
    }
?>
