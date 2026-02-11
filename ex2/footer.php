</main> 
</div> 

<footer class="bg-[#333] text-white p-6 text-center mt-auto">
    <div class="container mx-auto">
        <p class="text-gray-300">This website is created for educational purposes in web programming.</p>
        
        <div class="mt-4 text-xs text-gray-400 italic">
            <?php
                // Get the current file name
                $filename = basename($_SERVER['PHP_SELF']);
                // Get the last modification time
                $filetime = filemtime($filename);
                // Print the formatted date and time
                echo "Last modified: " . date("F d Y H:i:s.", $filetime);
            ?>
        </div>
    </div>
</footer>

</body>
</html>