<?php
    $file = 'counter.txt'; // File to store the visitor count
    $count = file_exists($file) ? (int)file_get_contents($file) : 0; // Read the current count from the file

    $count++;
    file_put_contents($file, $count);
?>
