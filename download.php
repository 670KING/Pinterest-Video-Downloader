<?php
if (isset($_POST['url'])) {
    $videoUrl = $_POST['url'];

    // Example simple response
    // In real, you'd scrape or use an API to fetch direct video link
    echo "<h2>Video URL: $videoUrl</h2>";
    echo "<a href='$videoUrl' download>Click to Download (placeholder link)</a>";
} else {
    echo "No URL received.";
}
?>