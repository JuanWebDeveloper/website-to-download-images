<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview And Download Images</title>
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">
    <!--===========================
    <|-Fonts And Icons          -|>
    ============================-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!--===========================
    <|-Custom CSS               -|>
    ============================-->
    <link rel="stylesheet" href="./styles/styles.css">

    <!--===========================
    <|-Plugins Of JavaScript    -|>
    ============================-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <div class="container">
        <!--===============
        <|-Preview Image-|>
        ================-->
        <div class="previewBox" id="previewBox">
            <div class="cancelIcon" id="cancelIcon">
                <i class="fas fa-times"></i>
            </div>

            <div class="imgPreview" id="imgPreview"></div>

            <div class="content" id="content">
                <div class="imgIcon"><i class="far fa-image"></i></div>
                <div class="text">Copy the url of the image to get the preview.</div>
            </div>
        </div>

        <!--===============
        <|-Image Url    -|>
        ================-->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="inputDate">
            <input type="text" id="field" name="imageUrl" autocomplete="off" placeholder="Paste the url of the image.">
            <input type="submit" id="button" name="download" value="Download">
        </form>
    </div>

    <!--===========================
    <|-Custom JavaScript        -|>
    ============================-->
    <script src="./script/app.js"></script>
</body>
</html>