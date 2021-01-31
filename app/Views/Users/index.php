
<?= $this->extend('Layout/default') ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/create') ?>" class="btn btn-success mb-2">Add User</a>
	</div>
 
  <div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>User Id</th>
             <th>Name</th>
             <th>Email</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          
          <?php foreach($users as $user): ?>
          <tr>
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['name']; ?></td>
             <td><?php echo $user['email']; ?></td>

             <td>
	              <a href="<?php echo base_url('user/edit/'.$user['id']);?>" class="btn btn-primary btn-sm">Edit</a>
	              
	              <a href="<?php echo base_url('user/delete/'.$user['id']);?>" class="btn btn-danger btn-sm">Delete</a>
              </td>

          </tr>
         <?php endforeach; ?>
        
       </tbody>
     </table>
  </div>
</div>	

<?= $this->endSection() ?>



