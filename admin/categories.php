<?php include "includes/header.php" ?>

<div id="wrapper">

  <!-- Navigation -->

  <?php include "includes/navigation.php" ?>

  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">

          <h1 class="page-header">
            Welcome to Admin
            <small>Author</small>
          </h1>

          <div class="col-xs-6">
            <form action="">
              <div class="form-group">
                <label for="cat_title">Add Category</label>
                <input class="form-control" type="text" name="cat_title">
              </div>
              <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
              </div>
            </form>
          </div> <!-- Add Category Form -->

          <div class="col-xs-6">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Category Title</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Baseball Category</td>
                  <td>Basketball Category</td>
                </tr>
                <tr>
                  <td>Cricket Category</td>
                  <td>Football Category</td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->
  <?php include "includes/footer.php" ?>