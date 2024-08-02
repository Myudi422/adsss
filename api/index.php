<?php
// List of URLs
$urls = [
    "https://www.highratecpm.com/j10z40hvf0?key=c9b7d12c462d2d6b4c6693a0de308ffa",
    "https://www.highratecpm.com/wnsqkxka?key=1cd0a432fe5974344f2cff5179d9951b",
    // Add more URLs as needed
];

// Select a random URL
$randomUrl = $urls[array_rand($urls)];

// Redirect to the selected URL
header("Location: $randomUrl");
exit(); // Ensure that no other content is sent
?>
