
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

    <div class="flex flex-1">
        <aside class="w-64 p-5 hidden md:block">
            <br>
            <h3 class="font-bold border-b border-gray-400 mb-4">Quick Links</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="https://github.com" class="text-blue-600">My GitHub</a></li>

            </ul>
        </aside></main>
</header>
<main class="flex-1 p-5 text-center">