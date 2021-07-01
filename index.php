<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    	<div class="container">
    	  <h3><i class="fas fa-cart-plus text-light mr-2"></i></h3>
		  <a class="navbar-brand font-weight-bold" href="#">MY SHOP</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto mr-4">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Reseller <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Help <span class="sr-only">(current)</span></a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-light text-dark my-2 my-sm-0" type="submit">Search</button>
		    </form>

		    <div class="icon ml-4">
		        <h5>
		          <i class="fas fa-shopping-cart mr-3" data-toggle="tooltip" title="Keranjang"></i>
		          <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Inbox"></i>
		          <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notification"></i>
		        </h5>
		    </div>
		  </div>
	  </div>
	</nav>

	<div class="row mt-1 no-gutters">
		<div class="col-md-2 bg-light">
			<ul class="list-group list-group-flush p-2 pt-4">
			  <li class="list-group-item bg-primary"><i class="fas fa-list"></i> Kategori Produk</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Peralatan Elektronik</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Aksesoris Elektronik</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Fashion Pria</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Fashion Wanita</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Fashion Anak</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Otomotif</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Hobi dan Olahraga</li>
			</ul>
		</div>
		<div class="col-md-10">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="img/1.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="img/2.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="img/shop.jpg" class="d-block w-100" alt="...">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

			<h4 class="text-center font-weight-bold m-4">PRODUK TERBARU</h4>

			<div class="row mx-auto">
				<div class="card mr-2 ml-2" style="width: 16rem;">
				  <img src="img/produk/product03.png" class="card-img-top" alt="...">
				  <div class="card-body bg-light">
				    <h5 class="card-title">MacBook</h5>
				    <p class="card-text">Original iBox</p>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star-half-alt text-warning"></i>
				    <i class="far fa-star text-warning"></i><br>
				    <a href="#" class="btn btn-primary" data-target="#produk1" data-toggle="modal">Detail</a>
				    <a href="#" class="btn btn-danger">Rp. 14.999.999</a>
				  </div>
				</div>

				<div class="card mr-2 ml-2" style="width: 16rem;">
				  <img src="img/produk/product02.png" class="card-img-top" alt="...">
				  <div class="card-body bg-light">
				    <h5 class="card-title">Headphone</h5>
				    <p class="card-text">Wireless + Bluetooth</p>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star-half-alt text-warning"></i>
				    <i class="far fa-star text-warning"></i><br>
				    <a href="#" class="btn btn-primary">Detail</a>
				    <a href="#" class="btn btn-danger">Rp. 350.000</a>
				  </div>
				</div>

				<div class="card mr-2 ml-2" style="width: 16rem;">
				  <img src="img/produk/taslouis.jpg" class="card-img-top" alt="...">
				  <div class="card-body bg-light">
				    <h5 class="card-title">LV</h5>
				    <p class="card-text">Original </p>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star-half-alt text-warning"></i>
				    <i class="far fa-star text-warning"></i><br>
				    <a href="#" class="btn btn-primary">Detail</a>
				    <a href="#" class="btn btn-danger">Rp. 40.000.000</a>
				  </div>
				</div>

				<div class="card mr-2 ml-2" style="width: 16rem;">
				  <img src="img/produk/sepatubootkulit.jpg" class="card-img-top" alt="...">
				  <div class="card-body bg-light">
				    <h5 class="card-title">Boot Shoes</h5>
				    <p class="card-text">100% Kulit Asli</p>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star-half-alt text-warning"></i>
				    <i class="far fa-star text-warning"></i><br>
				    <a href="#" class="btn btn-primary">Detail</a>
				    <a href="#" class="btn btn-danger">Rp. 599.000</a>
				  </div>
				</div>
			</div>

			<div class="row mx-auto mt-5">
				<div class="card mr-2 ml-2" style="width: 16rem;">
				  <img src="img/produk/sepatuhitam.jpg" class="card-img-top" alt="...">
				  <div class="card-body bg-light">
				    <h5 class="card-title">High Heels</h5>
				    <p class="card-text">Hanya Tersedia Warna Hitam</p>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star-half-alt text-warning"></i>
				    <i class="far fa-star text-warning"></i><br>
				    <a href="#" class="btn btn-primary">Detail</a>
				    <a href="#" class="btn btn-danger">Rp. 325.000</a>
				  </div>
				</div>

				<div class="card mr-2 ml-2" style="width: 16rem;">
				  <img src="img/produk/tas.jpg" class="card-img-top" alt="...">
				  <div class="card-body bg-light">
				    <h5 class="card-title">Tas Wanita</h5>
				    <p class="card-text">Trendy dan Berkualitas</p>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star-half-alt text-warning"></i>
				    <i class="far fa-star text-warning"></i><br>
				    <a href="#" class="btn btn-primary">Detail</a>
				    <a href="#" class="btn btn-danger">Rp. 299.000</a>
				  </div>
				</div>

				<div class="card mr-2 ml-2" style="width: 16rem;">
				  <img src="img/produk/celanapanjang.jpg" class="card-img-top" alt="...">
				  <div class="card-body bg-light">
				    <h5 class="card-title">Boyfriend Pans</h5>
				    <p class="card-text">Nyaman Dipakai, Stylish</p>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star-half-alt text-warning"></i>
				    <i class="far fa-star text-warning"></i><br>
				    <a href="#" class="btn btn-primary">Detail</a>
				    <a href="#" class="btn btn-danger">Rp. 150.000</a>
				  </div>
				</div>

				<div class="card mr-2 ml-2" style="width: 16rem;">
				  <img src="img/produk/jaketbulu.jpg" class="card-img-top" alt="...">
				  <div class="card-body bg-light">
				    <h5 class="card-title">Jaket Bulu</h5>
				    <p class="card-text">Bahan Import, Kualitas Terjamin</p>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star text-warning"></i>
				    <i class="fas fa-star-half-alt text-warning"></i>
				    <i class="far fa-star text-warning"></i><br>
				    <a href="#" class="btn btn-primary">Detail</a>
				    <a href="#" class="btn btn-danger">Rp. 575.000</a>
				  </div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <div class="row">
				        	<div class="col-md-6">
				        		<img src="img/produk/product03.png">
				        	</div>
				        	<div class="col-md-6">
				        		<table class="table table-borderless">
				        			<tr>
				        				<th>Nama Produk</th>
				        				<td>Laptop MacBook</td>
				        			</tr>
				        			<tr>
				        				<th>Merk/Type</th>
				        				<td>MacBook/19</td>
				        			</tr>
				        			<tr>
				        				<th>Rating Produk</th>
				        				<td>
				        					<i class="fas fa-star text-warning"></i>
										    <i class="fas fa-star text-warning"></i>
										    <i class="fas fa-star text-warning"></i>
										    <i class="fas fa-star-half-alt text-warning"></i>
										    <i class="far fa-star text-warning"></i><br>
										</td>
				        			</tr>
				        			<tr>
				        				<th>Stok</th>
				        				<td>15 Pcs</td>
				        			</tr>
				        			<tr>
				        				<th>Harga</th>
				        				<td>Rp. 14.999.999</td>
				        			</tr>
				        		</table>
				        	</div>
				        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
				        <button type="button" class="btn btn-primary">Beli</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>

	<footer class="bg-dark text-white p-5 mt-5">
		<div class="row">
			<div class="col-md-3">
				<h5>LAYANAN PELANGGAN</h5>
				<ul>
					<li>Pusat Bantuan</li>
					<li>Cara Pembelian</li>
					<li>Pengiriman</li>
					<li>Cara Refund</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h5>TENTANG KAMI</h5>
				<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
			</div>
			<div class="col-md-3">
				<h5>MITRA KERJA SAMA</h5>
				<ul>
					<li>Grab</li>
					<li>Gojek</li>
					<li>JNE</li>
					<li>Si Cepat</li>
					<li>J&T</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h5>HUBUNGI KAMI</h5>
				<ul>
					<li>021-9867-9822</li>
					<li>customer@myshop.com</li>
				</ul>
			</div>
		</div>
	</footer>

	<div class="copyright text-center text-white font-weight-bold bg-primary p-2">
		<p>Developed by Widia Novita Sari CopyRight <i class="far fa-copyright"></i> 2021</p>
	</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" src="style.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>