<?php
    if (isset($_POST['check_voting'])) {
        $name = htmlspecialchars($_POST['voter_name']);
        $age = (int)$_POST['voter_age']; // Casting to integer for math

        echo "<div class='mt-6 p-4 rounded-lg text-center border'>";

        // The core If-Else logic
        if ($age >= 18) {
            echo "<h4 class='text-green-800 bg-green-100 p-3 rounded'>
                    Hello $name, you are <strong>eligible</strong> to vote!
                  </h4>";
        } else {
            $years_left = 18 - $age;
            echo "<h4 class='text-red-800 bg-red-100 p-3 rounded'>
                    Hello $name, you are <strong>not eligible</strong> to vote yet. 
                    Wait $years_left more year(s).
                  </h4>";
        }

        echo "</div>";
    }
    ?>
</section>