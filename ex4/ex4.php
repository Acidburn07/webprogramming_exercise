<form method="post" action="">
    Name: <input type="text" name="voter_name" required><br>
    <br>
    Age: <input type="number" name="voter_age" required><br>
    <br>
    <input type="submit" name="vote_submit" value="Check Eligibility">
</form>

<?php
if (isset($_POST['vote_submit'])) {
    $name = htmlspecialchars($_POST['voter_name']);
    $age = (int)$_POST['voter_age'];

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
<br>


<form method="post" action="">
    Enter a number: <input type="number" name="n" required>
    <input type="submit" name="calc_table" value="Print Table">
</form>

<?php
// This check stops the "Undefined array key" error
if (isset($_POST['calc_table'])) {
    
    $n = $_POST['n']; // This is the number you typed in the box
    echo "<h4>Multiplication Table of $n:</h4>";

    // This loop prints the table from 1 to 10
    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n x $i = $result <br>";
    }
}
?>
<br>

<form method="post" action="">
    Enter a number (n): <input type="number" name="limit" required>
    <input type="submit" name="print_numbers" value="Print Numbers">
</form>

<?php
if (isset($_POST['print_numbers'])) {
    $n = (int)$_POST['limit'];
    $i = 1; // Start our counter at 1

    echo "<h4> $n </h4>";

    // the while loop
    while ($i <= $n) {
        echo $i . " "; // Print the number and a space
        $i++; // loop counter increment
    
    }
}
?>