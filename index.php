<?php session_start();?>
<?php include('h.php');?>
<body>

  <div class="container">
    <img src="banner4.png" class="img-fluid" alt="Responsive image">
    <?php include('navbar.php');?>

    <div class="row">
        <div class="col-md-2">
        <?php include('menu.php');?>
        </div>
        <div class="col-md-10">
        <?php
          $act = (isset($_GET['act']) ? $_GET['act'] :' ');
          if($act =='showbytype'){
            include('show_product_type.php');
          }else{
           include('show_product.php');
          }
         ?>
        </div>
    </div>

  </div>

</body>
</html>