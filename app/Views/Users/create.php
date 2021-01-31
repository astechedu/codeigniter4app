
<?= $this->extend('Layout/default') ?>

<?= $this->section('content') ?>

 <div class="container mt-5">
  <h1>Add User</h1>

    <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('/save') ?>">

      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" class="form-control">
      </div>


      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Update Data</button>
      </div>
    </form>
  </div>


<?= $this->endSection() ?>

