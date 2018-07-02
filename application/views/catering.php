<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UTS</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!-- 	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script> -->
   <script src=”https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js”></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>
	 <div class="container">
  <nav class="navbar navbar-inverse" role="navigation">
    <style type="text/css">
    .navbar-inverse {
    background-color: #DFE6EF;
    font-size:18px;
    }
</style>
  	<div class="container-fuild">
  		<!-- Brand and toggle get grouped for better mobile display -->
  		<div class="navbar-header">
  			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
  				<span class="sr-only">Toggle navigation</span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  			</button>
  			<a class="navbar-brand" href="#"></a>
  		</div>
  		<!-- Collect the nav links, forms, and other content for toggling -->
  		<div class="collapse navbar-collapse navbar-ex1-collapse">
  			<ul class="nav navbar-nav">
  				<li class="active"><a href="<?php echo site_url()?>/catering">Home</a></li>
          <li><a href="<?php echo site_url()?>/Home/index">JS GRID</a></li>
  			</ul>

  			<ul class="nav navbar-nav navbar-right">
  				<li class="dropdown">
  					<a href="#" class="dropdown-toggle" data-toggle="dropdown">MENU<b class="caret"></b></a>
  					<ul class="dropdown-menu">
  						<li><a href="#">BERANDA</a></li>
  						<li><a href="#">JUMLAH</a></li>
  						<li><a href="#"></a></li>
  						<li><a href="#"></a></li>
  					</ul>
  				</li>
  			</ul>
  		</div><!-- /.navbar-collapse -->
  	</div>
  </nav>
  
  <div class="container">
  	<h1></h1>
  	</div>
    <p>
        <a href="<?php echo base_url("index.php/catering/create/ ")?>"><button type="button" class="btn btn-info">
      <span class="glyphicon glyphicon-plus"></span>TAMBAH DATA
    </button></a>
      </p>
  </div>
		     <blockquote>
					<table class="table table-hover">
						<thead>
							<tr>
						<th>Id</th>		
						<th>Nama</th>
						<th>Pinjam</th>
            <th>Jumlah</th>
            <th>Tanggal Pengembalian</th>
            <th>Harga</th>
						<th>Action</th>
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
              <td>
                <a href="<?php echo base_url("index.php/catering/update/".$value['id']) ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</button></a>
                <a href="<?php echo base_url("index.php/catering/delete/".$value['id']) ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</button></a>
              </td>
            </tr>
            
          <?php endforeach ?>
							</tbody>
					</table></blockquote>
</div>
</body>

</html>