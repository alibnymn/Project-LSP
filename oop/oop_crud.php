<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
         <h1 class="text-center">PHP OOP CRUD</h1>
         <hr style="heigt: 1px;color: black;background=color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-5">
         <?php
           
           include 'model.php';
           $model = new Model();
           $insert = $model->insert();

         ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Mobile No.</label>
              <input type="text" name="mobile" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <textarea name="address" id="" cols="" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="button" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
   </div>
 
  



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    
  </body>
</html>