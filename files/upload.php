<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>File Upload</title>
</head>

<body>
    <?php
    require_once 'FileProcessor.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $filePath = '/home/nurbek/Recoursia/amo/files/' . basename($_FILES['file']['name']);

        $fileProcessor = new FileProcessor($filePath);

        $fileProcessor->uploadFile($_FILES['file']);
    }
    ?>
</body>

</html>