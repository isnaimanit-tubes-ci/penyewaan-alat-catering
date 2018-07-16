
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
            <th>Id Barang</th>   
            <th>Nama Barang</th>
            <th>Stock/th>
            <th>Gambar</th>
            <th>Action</th>
          </tr>
              </thead>

            <tbody>
              <?php
                foreach ($Barang_list->result_array() as $row)
                    {
                      echo "<tr>";
                      echo "<td>".$row['id_barang']."</td>";
                      echo "<td>".$row['nama_barang']."</td>";
                      echo "<td>".$row['stock']."</td>";
                      echo "<td><img src='".base_url().'assets/uploads/'.$row['gambar']."' width='50px' height='50px'></td>";
    echo "<td><a href='".site_url('Barang/C_edit/'.$row['id_barang'])."'><i class='fa fa-pencil'></i></a>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<a href='".site_url('Barang/delete/'.$row['id_barang'])."'><i class='fa fa-trash'></i></a></td>";
                    echo "</tr>";

                  }
              ?>
          
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

