<!DOCTYPE html>
<html>
<head>
	<title>Covid 19: Jangan Diremehkan</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
  	<link rel="stylesheet" href="assets/css/style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- ============================================== -->
<nav class="navbar navbar-expand-md  fixed-top maine-menu">
    <div class="container">
      <button class="navbar-toggler ml-auto" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"> <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active"> <a class="nav-link" href="#">Beranda</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#gejala" tabindex="-1" aria-disabled="true">Gejala</a></li>
          <li class="nav-item"> <a class="nav-link" href="#penyebab" tabindex="-1" aria-disabled="true">Penyebab</a></li>
          <li class="nav-item"> <a class="nav-link" href="#sejarah" tabindex="-1" aria-disabled="true">Sejarah</a></li>
          <!-- <li class="nav-item"> <a class="nav-link" href="#berita" tabindex="-1" aria-disabled="true">Berita</a></li> -->
        </ul>
      </div>
    </div>
 </nav>

 <div class="container-fluid fh5co-home-banner">
    <div class="card"> <img class="card-img" src="assets/img/bgcovid.jpg" alt="">
      <div class="card-img-overlay">
        <div class="center-text">
          <h2 class="card-title">Pantau Penyebaran Pandemi Covid 2019</h2>
          <p>by : iqbal okthapian</p>
          <a href="#penyebaran" class="btn">
            <svg width="201" height="51" viewBox="0 0 201 51">
              <defs>
                <style>
                .cls-1 {
                  fill: none;
                  stroke-width: 1px;
                  stroke: url(#linear-gradient);
                }
              </style>
              <linearGradient id="linear-gradient" x1="140.508" y1="50.5" x2="60.492" y2="0.5" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#e90e65"/>
                <stop offset="1" stop-color="#fff"/>
              </linearGradient>
            </defs>
            <rect id="Rounded_Rectangle_1" data-name="Rounded Rectangle 1" class="cls-1" x="0.5" y="0.5" width="200" height="50" rx="25" ry="25"/>
          </svg>
        Pantau</a> </div>
      </div>
    </div>
 </div>
<!-- ========================================================================================================================= -->
<div id="penyebaran">
	<div class="container" style="padding-top: 20px">
		<h2 align="center">PENYEBARAN COVID-19 di INDONESIA</h2>
		<?php 
			$sumber = 'https://api.kawalcorona.com/indonesia/';
			 $konten = file_get_contents($sumber);
			 $data = json_decode($konten, true);

			  // var_dump($data[0]['positif']);
		 ?>
		 <div class="row">
		 	<div class="col-md-2"></div>
		 	<div class="col-md-8">
		 		<table class="table">
			 		<tr>
			 			<td>POSITIF</td>
			 			<td><?php echo $data[0]['positif']; ?></td>
			 		</tr>

			 		<tr>
			 			<td>SEMBH</td>
			 			<td><?php echo $data[0]['sembuh']; ?></td>
			 		</tr>

			 		<tr>
			 			<td>SEMBH</td>
			 			<td><?php echo $data[0]['meninggal']; ?></td>
			 		</tr>

			 		<tr>
			 			<td>DIRAWAT</td>
			 			<td><?php echo $data[0]['dirawat']; ?></td>
			 		</tr>
			 	</table>
		 	</div>
		 	<div class="col-md-2"></div>
		</div>
	</div>
</div>
<!-- ========================================================================================== -->
<hr/>
<div id="gejala">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 align="center">Gejala Virus Corona (COVID-19)</h2>
			<p align="center">
				Gejala awal infeksi virus Corona atau COVID-19 bisa menyerupai gejala flu, yaitu demam, pilek, batuk kering, sakit tenggorokan, dan sakit kepala. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat. Penderita dengan gejala yang berat bisa mengalami demam tinggi, batuk berdahak bahkan berdarah, sesak napas,Sakit tenggorokan dan nyeri dada. Gejala-gejala tersebut muncul ketika tubuh bereaksi melawan virus Corona.
			</p>
			</div>
			
			<div class="col-md-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title" align="center">Demam Tinggi</h5>
				    <p class="card-text" align="center">
				    	Menurut Pokja Infeksi Pengurus Pusat Perhimpunan Dokter Paru Indonesia, dr Erlina Burhan SpP(K) MSc PhD, sejak awal wabah Covid-19 ini melanda Wuhan, China gejala yang paling umum dan banyak dialami mencapai 98 persen oleh pasiennya adalah demam tinggi di atas 38,5 derajat Celsius.
				    </p>
				  </div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title" align="center">Batk Berdahak</h5>
				    <p class="card-text" align="center">
				    	Batuk yang dimaksudkan dalam kategori kemungkinan terinfeksi virus SARS-CoV-2 adalah batuk yang terlampau sering dalam sejam. Umumnya batuk kering dan terjadi terus-menerus, secara lebih dari tiga kali 24 jam.
				    </p>
				  </div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title" align="center">Sesak Nafas</h5>
				    <p class="card-text" align="center">Sesak napas menjadi salah satu gejala yang serius. Umumnya pasien Covid-19 dalam kasus yang serius, akan mengalami pneumonia. Di mana kondisi paru-paru pasien dipenuhi dengan nanah dan cairan.
				    </p>
				  </div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title" align="center">Sakit tenggorokan</h5>
				    <p class="card-text" align="center">Hal itu bisa terjadi, saat selama Anda tidur dan terlalu banyak menghirup udara tanpa disadari dan membuat tenggorokan Anda kering di pagi hari. Namun, jika Anda mengalami keluhan tenggorokan kering yang terus-menerus selama beberapa hari, Anda juga perlu mewaspadai ini.</p>
				  </div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>

<!-- ================================================================================================= -->
<div class="container-fluid fh5co-about-me" id="penyebab">
    <div id="my-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="card"> <img class="card-img d-block w-100" src="assets/img/covidbg.jpg" alt="">
          <div class="card-img-overlay">
            <h2>Penularan Virus Corona(Covid-19)</h2>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption d-md-block"> <img src="assets/img/quote-icon.png" alt="">
            <p>
            	Virus dapat berpindah secara langsung melalui percikan batuk dan napas orang yang terinfeksi yang kemudian terhirup orang sehat
            </p>
          </div>
        </div>
        <div class="carousel-item active">
          <div class="carousel-caption d-md-block"> <img src="assets/img/quote-icon.png" alt="">
            <p>
            	Virus juga dapat menyebar secara tidak langsung melalui benda-benda yang tercemar virus akibat percikan atau sentuhan tangan yang tercemar virus
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption d-md-block"> <img src="assets/img/quote-icon.png" alt="">
            <p>Virus bisa tertinggal di permukaan benda-benda dan hidup selama beberapa jam hingga berhari-hari terutama pada makanan yang terbuka</p>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" > <img src="assets/img/1_batk.png" alt=""> <span>Percikan / udara</span> </li>
        <li class="active" data-target="#my-carousel" data-slide-to="1" aria-current="location"> <img src="assets/img/2_benda.png" alt=""> <span>Sentuhan</span> </li>
        <li data-target="#my-carousel" data-slide-to="2"> <img src="assets/img/3_makanan.png" alt=""> <span>Makanan</span> </li>
      </ol>
    </div>
  </div>

  <!-- ====================================================================== -->
  <div id="sejarah">
	<div class="container" style="padding-top: 3%">
		<div class="row">
			<div class="col-md-12">
				<u><h2 align="center">Sejarah Virus Corona (COVID-19)</h2></u>
				<p align="center">
					Dilihat dari sejarahnya, virus corona pertama kali diidentifikasi sebagai penyebab flu biasa pada tahun 1960. Hingga sampai tahun 2002, virus itu belum dianggap fatal. Tetapi, pasca adanya Severe Acute Respiratory Syndrome (SARS-Cov) di China, para pakar mulai berfokus pada penyebab dan menemukan hasil apabila wabah ini diakibatkan oleh bentuk baru corona. 
						<br>
					Pada tahun 2012, terjadi pula wabah yang mirip yakni Middle East Respiratory Syndrome (MERS-Cov) di Timur Tengah. Dari kedua peristiwa itulah diketahui bahwa corona bukan virus yang stabil serta mampu berdaptasi menjadi lebih ganas, bahkan dapat mengakibatkan kematian. Sejak itulah, penelitian terhadap corona semakin berkembang. 
						<br>
					Munculnya jenis baru corona Prof Soewarno yang juga Wakil Dekan III Fakultas Kedokteran Hewan (FKH) Universitas Airlangga tersebut berpendapat bahwa virus corona jenis baru atau Novel Corona Virus ( 2019-nCoV ) yang sekarang sedang berkembang, bukan merupakan sebuah hal baru, melainkan hasil dari mutasi. Virus itu serupa dengan corona yang menjadi penyebab SARS-Cov dan MERS-Cov.
						<br><br>
					(smber: <a href="https://edukasi.kompas.com/read/2020/03/05/09490121/akademisi-unair-beberkan-sejarah-virus-corona-kelelawar-penyebabnya">edukasi.kompas.com</a>)
				</p>
			</div>
		</div>
	</div>
</div>
<!-- ============================================================================================== -->
  <footer class="container-fluid p-0 pr-0">
    <div class="copy pt-4 pb-4">
      <p><a href="" target="_blank"> &copy; 2020 Web Pantau Covid19</a>  &nbsp;  |  &nbsp; Design by <a href="" target="_blank"> Iqbal_okthapian</a> &nbsp; | &nbsp;  All rights reserved</p>
    </div>
  </footer>

  <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
  <script src="assets/js/jquery-3.3.1.slim.min.js"></script> 
  <script src="assets/js/popper.min.js" ></script> 
  <script src="assets/js/bootstrap.min.js"></script> 
  <script src="assets/js/owl.carousel.min.js"></script> 
  <script src="assets/js/main.js"></script>


</body>
