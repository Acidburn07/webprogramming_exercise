<?php
    $title = "Exercise 3 - User Information";
    // Including universal layout
    include '../ex2/header.php'; 
?>

<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-xl shadow-lg border border-gray-100">
    

    <form action="ex3.php" method="POST" class="space-y-4">
        <div>
            <label for="fname" class="block text-sm font-medium text-gray-700">First Name</label>
            <input type="text" id="fname" name="fname" required 
                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 outline-none transition">
        </div>

        <div>
            <label for="lname" class="block text-sm font-medium text-gray-700">Last Name</label>
            <input type="text" id="lname" name="lname" required 
                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 outline-none transition">
        </div>

        <button type="submit" 
                class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200 shadow-md">
            Submit Information
        </button>
    </form>
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            // Requirement: Print inside an <h3> tag
            echo "<h3 class='mt-4 text-success'>Hello $fname $lname, You are welcome to my site.</h3>";
        }
        ?>
</div>

<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-xl shadow-lg border border-gray-100">
    
<table border='1'>
<tr>
<th>S.n</th>
<th>Name</th>
<th>Grade</th>
</tr>

<tr>
<td>1</td>
<td>John</td>
<td><?php echo $g1; ?></td>
</tr>

<tr>
<td>2</td>
<td>Alice</td>
<td><?php echo $g2; ?></td>
</tr>

<tr>
<td>3</td>
<td>Bob</td>
<td><?php echo $g3; ?></td>
</tr>
</table>
</div>


<!-- // Including the universal footer -->
<?php 
    include '../ex2/footer.php'; 
?>