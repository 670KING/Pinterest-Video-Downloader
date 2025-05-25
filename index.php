<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest Video Downloader</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Pinterest Video Downloader</h1>
        <form id="download-form" method="POST" action="download.php">
            <div class="mb-3">
                <label for="url" class="form-label">Paste Pinterest video link:</label>
                <input type="url" name="url" class="form-control" placeholder="https://pinterest.com/pin/..." required>
            </div>
            <button type="submit" class="btn btn-danger">Download Video</button>
        </form>
    </div>

    <script src="static/js/script.js"></script>
</body>
</html>