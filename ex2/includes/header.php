<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>
        <?php
        if (isset($title) && !empty($title)) {
            echo $title;
        } else {
            echo "Default Title";
        }
        ?>
    </title>

    <style>
        /* This keeps the sidebar and main content side-by-side */
        body { display: flex; flex-direction: column; min-height: 100vh; margin: 0; }
        .flex-layout { display: flex; flex: 1; }
        aside { width: 250px; background-color: white; border-right: 1px solid #ddd; padding: 20px; }
        main { flex: 1; padding: 20px; text-align: center; }
    </style>
</head>
<body class="bg-gray-100">

    <header class="bg-[#333] text-white p-10 text-center">
        <h1 class="text-4xl font-bold">Welcome to My Website</h1>
        <p class="mt-2 text-gray-300">This Website contains the whole exercise set</p>
    </header>

    <?php include 'ex2/includes/menubar.php'; ?>

    <div class="flex-layout">
        <aside class="hidden md:block">
            <h3 class="font-bold border-b border-gray-400 mb-4 text-gray-700">Quick Links</h3>
            <ul class="space-y-2 text-sm text-left">
                <li><a href="https://github.com" target="_blank" class="text-blue-600 hover:underline">My GitHub</a></li>
            </ul>
        </aside>
        
        <main>