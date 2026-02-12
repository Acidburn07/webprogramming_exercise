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

     <button type="submit" name="submit_form" 
        class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200 shadow-md">
    Submit Information
</button>
    </form>

<?php
   
    if (isset($_POST['submit_form'])) {
      
        $firstname = htmlspecialchars($_POST['fname']);
        $lastname = htmlspecialchars($_POST['lname']);

        echo "<h3 class='mt-6 p-4 bg-blue-50 text-blue-900 font-bold rounded-lg border border-blue-200 text-center'>";
        echo "Hello " . $firstname . " " . $lastname . ", You are welcome to my site.";
        echo "</h3>";
    }
    ?>
    <div class 

<?php

    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
?>
<br>
<div class="mt-10">
    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-sm">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">S.n</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Grade</th>
                </tr>
            </thead>
            
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">John</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-blue-600"><?php echo $g1; ?></td>
                </tr>
                
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alice</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-blue-600"><?php echo $g2; ?></td>
                </tr>
                
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">3</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Bob</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-blue-600"><?php echo $g3; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    
<section class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mt-10">
    
    <?php
        // 1. Define the variables
        $str1 = "Hello";
        $str2 = "World";

        $combined = $str1 . " " . $str2;

    //Displying the combined string and its length
        echo "<p class='text-lg'> <span class='font-mono font-bold text-blue-600'>$combined</span></p>";
        
        echo "<p class='text-lg mt-2 text-gray-600'>";
        echo " <span class='font-bold'>" . strlen($combined) . "</span> characters.";
        echo "</p>";
    ?>
</section>


<?php
//Number Addition
    $num1 = 298;
    $num2 = 234;
    $num3 = 46;
    $sum = $num1 + $num2 + $num3;

    echo "<p class='text-lg mt-6'>The sum of <span class='font-bold text-green-600'>$num1</span>, <span class='font-bold text-green-600'>$num2</span>, and <span class='font-bold text-green-600'>$num3</span> is <span class='font-bold text-green-600'>$sum</span>.</p>";

?>
<br>
<section class="bg-gray-50 p-6 rounded-lg border border-gray-200 mt-10">
    
    <?php
        // Accessing the predefined $_SERVER variable
        $browser = $_SERVER['HTTP_USER_AGENT'];

        // Displaying the browser information in a styled box
        echo "<div class='p-4 bg-white border rounded shadow-inner font-mono text-xs text-purple-700 break-words'>";
        echo $browser;
        echo "</div>";
    ?>
</section>




















<?php
// Included the universal footer 
    include '../ex2/footer.php'; 
?>
