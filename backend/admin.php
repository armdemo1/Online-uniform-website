<!DOCTYPE html>
<html>

<head>
  <?php include('h.php'); 
  error_reporting(0);
  ?>
  <head>

  <body>
    <div class="container">
    <img src="banner4.png" class="img-fluid" alt="Responsive image">
      <?php include('navbar.php'); ?>
      <p></p>
      <div class="row">
        <div class="col-md-3">
          Hi! Admin <?php echo $a_name; ?>
          <?php include('menu_left.php'); ?>
        </div>
        <div class="col-md-8">
          <a href="admin.php?act=add" class="btn-info btn-sm"> Add </a>
          <p></p>

          <?php
          $act = $_GET['act'];
          if ($act == 'add') {
            include('admin_form_add.php');
          } elseif ($act == 'edit') {
            include('admin_form_edit.php');
          } else {
            include('admin_list.php');
          }
          ?>

        </div>
      </div>
    </div>
  </body>

</html>