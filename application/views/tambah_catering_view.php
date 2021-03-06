
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Myhgk Dashboard</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Area Chart Example</div>
        <div class="card-body">
          <?php echo form_open_multipart('Admin/create'); ?> 
  <legend>Tambah Data </legend>
  <?php echo validation_errors(); ?>
  <div class="form-group">
    <label for="">Nama</label>
    <input type="text" class="form-control" name="nama" value="" placeholder="Input field">
  </div>

  <div class="form-group">
    <label for="">Pinjam</label>
    <input type="text" class="form-control" name="pinjam" value="" placeholder="Input field">
  </div>

  <div class="form-group">
    <label for="">Jumlah</label>
    <input type="text" class="form-control" name="jumlah" value="" placeholder="Input field">
  </div>

  <div class="form-group">
    <label for="">Tanggal Pengembalian</label>
    <input type="date" class="form-control" name="tanggal" value="" placeholder="Input field">
  </div>

  <div class="form-group">
    <label for="">Harga</label>
    <input type="text" class="form-control" name="harga" value="" placeholder="Input field">
  </div>

  <div class="form-group">
    <label for="">Gambar</label>
    <input type="file" class="form-control" name="gambar" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <?php echo form_close(); ?>
            
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>


