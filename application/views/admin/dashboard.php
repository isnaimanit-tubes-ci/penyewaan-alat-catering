
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
          <p>
            <a href="<?php echo base_url("index.php/Admin/create/ ")?>">
              <button type="button" class="btn btn-success">Add</button>
            </a>
          </p>
            <table class="table table-hover table-stripped">
            <thead>
              <tr>
            <th>Id</th>   
            <th>Nama</th>
            <th>Pinjam</th>
            <th>Jumlah</th>
            <th>Tanggal Pengembalian</th>
            <th>Harga</th>
            <th>Gambar</th>
            <?php if ($level == 'admin') : ?>
            <th>Action</th>
          <?php endif; ?>
          </tr>
              </thead>

            <tbody>

                        <?php foreach ($catering_list as $key => $value): ?>
            <tr>
              <td><?php echo $value['id'] ?></td>
              <td><?php echo $value['nama'] ?></td>
              <td><?php echo $value['pinjam'] ?></td>
              <td><?php echo $value['jumlah'] ?></td>
              <td><?php echo $value['tanggal'] ?></td>
              <td><?php echo $value['harga'] ?></td>
              <td><img class="img img-rounded" src="<?php echo base_url().'assets/uploads/'.$value['gambar'];?>" height="100px" width="100px" alt="Card image cap"></td>
              <?php if ($level == 'admin') : ?>
              <td>
                <a href="<?php echo base_url("index.php/catering/update/".$value['id']) ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</button></a>
                <a href="<?php echo base_url("index.php/catering/delete/".$value['id']) ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</button></a>
              </td>
            </tr>
          <?php endif; ?>
            
          <?php endforeach ?>
              </tbody>
          </table>
          </canvas>
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

