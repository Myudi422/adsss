<?php
// List of URLs
$urls = [
    "https://www.highratecpm.com/j10z40hvf0?key=c9b7d12c462d2d6b4c6693a0de308ffa",
    "https://www.highratecpm.com/wnsqkxka?key=1cd0a432fe5974344f2cff5179d9951b",
    "https://sighhigherapprove.com/h4k7q2gs5?key=581807036aac9f85bb9ff68b94c57247",
    "https://sighhigherapprove.com/pfx282b3vy?key=72ba2eb37700e164e30d968e179da5d6",
    // Add more URLs as needed
];

// Select a random URL
$randomUrl = $urls[array_rand($urls)];

// Output HTML with Facebook Pixel and redirect logic
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting To Videos...</title>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,"script",
        "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "1541410373161338"); // Your Pixel ID here
        fbq("track", "PageView");

        // Redirect after Pixel initialization
        fbq("track", "PageView", {}, {eventID: "randomEventID"});
        setTimeout(function() {
            window.location.href = "' . $randomUrl . '";
        }, 1000); // Delay to ensure Pixel is tracked
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1541410373161338&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body>
    <p>Redirecting you, please wait...</p>
</body>
</html>';
exit(); // Ensure that no other content is sent
?>
