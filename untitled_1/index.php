<!DOCTYPE html>
<html>

<head>
  <title>Image Upload</title>

  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- style -->
  <link rel="stylesheet" href="style.css">


</head>

<body>
  <div id="content">
    <?php
    // while ($row = mysqli_fetch_array($result)) {
    //   echo "<div id='img_div'>";
    //   	echo "<img src='images/".$row['image']."' >";
    //   	echo "<p>".$row['image_text']."</p>";
    //   echo "</div>";
    // }
    ?>
    <form action="process_upload.php" method="POST" enctype="multipart/form-data">

      <div class="">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
        <input type="file" name="upload" value="" />
        <div>
          <textarea id="text" cols="40" rows="4" name="image_text"
            placeholder="Say something about this image..."></textarea>
        </div>
        <input type="submit" name="submit" value="submit" />
      </div>
    </form>
  </div>



  <!-- <div id="content">

    <?php
    // while ($row = mysqli_fetch_array($result)) {
    //   echo "<div id='img_div'>";
    //   	echo "<img src='images/".$row['image']."' >";
    //   	echo "<p>".$row['image_text']."</p>";
    //   echo "</div>";
    // }
    ?>
    <form method="POST" action="index.php" enctype="multipart/form-data">
      <input type="hidden" name="size" value="1000000">
      <div>
        <input type="file" name="image">
      </div>
      <div>
        <textarea id="text" cols="40" rows="4" name="image_text"
          placeholder="Say something about this image..."></textarea>
      </div>
      <div>
        <button type="submit" name="upload">POST</button>
      </div>
    </form>

  </div> -->

</body>

</html>