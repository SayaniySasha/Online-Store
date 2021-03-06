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
                        <label for="name" class="col-sm-2 control-label"> Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'];?>">
                        </div>
                </div>

                <div class="form-group">
                        <label for="email" class="col-sm-2 control-label"> Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'];?>">
                        </div>
                </div>
                <div class="form-group">
                        <label for="password" class="col-sm-2 control-label"> Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="password" name="password" value="<?= $user['password'];?>">
                        </div>
                </div>

                <div class="form-group">
                        <label for="role" class="col-sm-2 control-label"> Role</label>
                        <div class="col-sm-10">
                          <select name="role" class="form-control">
                            <?php if (is_array($roles)): ?>
                                <?php foreach ($roles as $role): ?>
                                    <option value="<?= $role['id']; ?>"
                                        <?php if ($user['role_id'] == $role['id']) echo ' selected'; ?>>
                                            <?= $role['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                          </select>
                          
                        </div>
                </div>

                <div class="form-group">
                        <label for="status" class="col-sm-2 control-label"> Status</label>
                        <div class="col-sm-10">
                          <input type="checkbox" class="form-control" id="status" name="status"  <?php if ($user['status'] == 1) echo ' checked'; ?>>
                        </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button id="save" type="submit" class="save btn btn-primary">Update User</button>
                </div>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>

<?php
include_once VIEWS.'shared/admin/footer.php';
