<?php
include_once VIEWS.'shared/admin/header.php';
?>
<div class="page-content">
   <div class="row">
        <div class="col-md-2">
        <?php
          include_once VIEWS.'shared/admin/_aside.php';
        ?>
        </div>
      <div class="col-md-10">
        <div class="content-box-large">
          <div class="panel-heading">
                <div class="panel-title"><?= $title;?></div>
                              
                <div class="panel-options">
                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
          </div>
          <form class="form-horizontal" role="form" id="idForm" method="POST">
            
            <div class="panel-body">
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                        <label for="name" class="col-sm-12 control-label"><h3>Delete User #<?= $user_id; ?></h3>
                        <p>Are You Sure Destroy This User?</p>
                        </label>
                </div>

            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button id="save" type="submit" name="submit" class="save btn btn-primary">Delete User</button>
                </div>
            </div>

          </form>
        </div>
      </div>
  </div>
</div>

<?php
include_once VIEWS.'shared/admin/footer.php';