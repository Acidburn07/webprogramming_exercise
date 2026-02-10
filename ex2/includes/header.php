
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php 
    echo $title; 
    ?> </title>

    <title>
        <?php
        if (isset($title) && !empty($title))
        {
            echo $title;
        }
        else{
            echo"Default Title";
        }
        ?>
</title>

    <style>
    
 main {
            padding: 20px;
            text-align: center;
            flex: 1; /* This is the key for the footer */
        }

    </style>
    
</head>
<body>
   <header class="bg-[#333] text-white p-10 text-center">
    <h1 class="text-4xl font-bold">Welcome to My Website</h1>
    <p class="mt-2 text-gray-300">This Website contains the whole exercise set</p>
</header>