<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF FORM</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-3">

    <form method="POST" action="./makepdf.php">

      <h1>Create your Own PDF</h1>
      <p>Fill Out the details below and the PDF will download</p>
      <div class="form-row">
        <div class="col">

          <div class="form-group">
            <label>Name:</label>
            <input type="text" name="fname" class="form-control" placeholder="enter your name" required>
          </div>

        </div>

        <div class="col">

          <div class="form-group">
            <label>Lastname:</label>
            <input type="text" name="lname" class="form-control" placeholder="enter your Last name" required>
          </div>

        </div>
      </div>

      <div class="form-group">
        <label for="inputAddress">Email:</label>
        <input type="email" name="email" class="form-control" placeholder="enter your email" required>
      </div>


      <div class="form-group">
        <label for="inputAddress">Phone:</label>
        <input type="text" name="phone" class="form-control" placeholder="enter your phone" required>
      </div>

      <div class="form-group">
        <label for="inputAddress">Phone:</label>
        <textarea type="text" name="message" class="form-control" placeholder="your messages" required></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Create PDF</button>
      </div>

    </form>

  </div>

</body>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>