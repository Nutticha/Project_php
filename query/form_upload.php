<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Picture</title>
</head>
<body>
    <form action="query/upload.php" method="post" id="formData" enctype="multipart/form-data">
        <input type="text" name="detail">
        <input id="file" type="file" name="picture">
        <button id="SendData" type="submit">OK</button>
        <button type="reset" hidden></button>
    </form>


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>