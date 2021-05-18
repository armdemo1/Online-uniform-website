<?php include('h.php'); ?>
<form  name="admin" action="admin_form_add_db.php" method="POST" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_user" type="text" required class="form-control" id="a_user" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="Only English or Number" minlength="2"  />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_pass" type="password" required class="form-control" id="a_pass" placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_name" type="text" required class="form-control" id="a_name" placeholder="Firstname-Surname" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="right">
              <button type="submit" class="btn btn-success btn-sm" id="btn"> <span class="glyphicon glyphicon-saved"></span> Save  </button>      
            </div> 
          </div>
        </form>