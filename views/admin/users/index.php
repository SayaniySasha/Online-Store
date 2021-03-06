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
                    <div class="panel-title"><h3><?= $title;?></h3></div>
                    <a href="/admin/users/add"><button class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus-sign"></i> Add New</button></a>
                </div>
        
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>User Name</th>
                              <th>User Role</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <tbody class="table-items">
                          <?php foreach ($users as $user):?>
                            <tr>
                              <td><?= $user['id']?></td>
                              <td><?= $user['name']?></td>
                              <td><?= $user['role_id']?></td>
                              <td>
                              <button class="btn btn-default"><i class="glyphicon glyphicon-eye-open"></i> View</button>
                              <a href="/admin/users/edit/<?php echo $user['id']?>"><button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</button></a>
                              <a href="/admin/users/delete/<?php echo $user['id']?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</button></a></td>
                            </tr>
                            <?php endforeach;?>
                            
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>

        <main>

        </main>
       
<?php
include_once VIEWS.'shared/admin/footer.php';
