<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="files/style.css">
    <title>File Upload</title>
</head>

<body>

    <h2>Загрузка файла</h2>

    <form action="files/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept=".txt">
        <button type="submit">Загрузить</button>
    </form>

    <div id="result"></div>

</body>

</html>