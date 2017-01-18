<?php 
  include "includes/header.php";
?>

  <div class="container" style="margin-top: 150px;">
    <div class="row">
      <div class="col-md-5">
        <div class="panel panel-primary">
          <div class="panel-heading">
            Enter Medicine Details
          </div>
          <div class="panel-body">
            <form class="table-responsive">
              <table class="table">
                <tr>
                  <td>Medicine Name</td>
                  <td>
                    <div class="form-group" id="has-name">
                      <input type="text" id="name" class="form-control" name="name" placeholder="Enter Medicine Name">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Quantity</td>
                  <td>
                    <div class="form-group"  id="has-qty">
                      <input type="number" name="qty" id="qty" class="form-control" placeholder="Enter Quantity">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" align="center">
                    <input type="button" id="submit" name="button" class="btn btn-primary" value="Save">  
                    <input type="reset" id="cancel" name="cancel" class="btn btn-warning" value="Cancel">
                  </td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-7 table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <th>#</th>
            <th>Medicine Name</th>
            <th>Available Stock</th>
            <th style="text-align: center !important;">Action</th>
          </thead>
          <tbody></tbody>
        </table>
      </div>
      <div class="col-md-3"></div>
    </div>  
  </div>

<?php 
  include "includes/footer.php";
?>
