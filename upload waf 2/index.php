<!DOCTYPE html>
<html>
  <head>
    <title>Uploader</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@700&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Noto Sans Mono', monospace;
      }
    </style>
  </head>
    <h1>Uploader waf 2</h1>
    <?php
      if (!empty($_FILES)) {
        $file_name = $_FILES['file']['name'];
        $extension = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
        $dest = '/var/www/html/upload/' . $file_name;
        if ($_FILES['file']['type'] === "image/png"){
          if ($extension !== "php" ){
            move_uploaded_file($_FILES['file']['tmp_name'], $dest);
            echo "<a href='/upload/$file_name'>/upload/$file_name</a>";
            echo "<p>Sucessful Uploaded !</p>";
          } else{
            echo "<p>bad hecker detect! </p>";
          }

        }else{
          echo "<p>Upload fail! Please upload png file</p>";
        }
    ?>
    <?php } else { ?>
    <p><?php echo "Please Upload A File !"; ?></p>
    <form action="index.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <input type="submit" value="Upload !">
    </form>
    <?php } ?>
    <hr>
    <div style="display: inline-block;background-color: rgba(0,0,0,0.1);"><?php highlight_file(__FILE__); ?></div>
</html>