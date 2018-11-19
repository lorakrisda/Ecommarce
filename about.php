<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>About - web Baju Lora</title>
	<link rel="stylesheet" href="../lora/css/style.css" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]-->
</head>
<body>
<?php 
session_start();
$konek=new MySQLi ("localhost", "lora", "lora", "dbecom");
$select="SELECT * FROM tblecom";
$hasil=$konek->query($select);
while ($row=$hasil->fetch_assoc()) {
	
?>
	<div id="page">
		<div id="header">
			<div id="logo"><a href="../lora/index.php"><img src="../lora/images/Logol.jpg" alt="LOGO" width="652" height="86"></a></div>
			<div id="navigation">
				<ul>
					<li>
						<a href="index.php">home</a>
					</li>
					<li>
						<a href="news.php">Terbaru</a>
					</li>
					<li>
						<a href="cosmetics.php">BajuBlush</a>
					</li>
					<li>
						<a href="skincare.php">DresBatik</a>
					</li>
					<li>
						<a href="../lora/fragrance.php">FashionJilbab</a>
					</li>
					<li class="selected">
						<a href="../lora/about.php">About</a>
					</li>
					<li>
						<a href="../lora/blogs.php">Blog</a>
					</li>
					<li>
						<a href="../lora/contact.php">Contact</a>
					</li>
				</ul>
			</div>
            <?php } ?>
		</div>
		<div id="contents">
			<div id="main">
				<div class="header">
					<img src="../lora/images/lk.php" alt="Img" height="384" width="700">
				</div>
				<div id="about" class="box">
					<h2>Women's fashion</h2>
					<p>
						Kami menghadirkan banyak fariasi atau bentuk baju yang di inginkan oleh banyak wanita sekarang.karena baju merupakan kebutuhan yang menurut kami sangat dibutuhkan apalagi seorang wanita berbelanja baju sudah merupakan hal yang menjadi kebutuhan sehingga kami berfikir bahwa baju ini tidak akan jatuh hanya saja harus meng update terus model-modelnya agar tidak ketinggalan pada yang lainnya dan harus dapat memikirkan hal-hal yang baru juga .
					</p>
					<h2>Baju? apakah butuh?</h2>
					<p>
                    wah pertanyaan yang muncul saat berbincangan berlangsung, menurut kami dan sudah kami jelaskan bahwa baju merupakan kebutuhan yang wajib apalagi bagi wanita, jika sedikit saja mata mereka sudah memikat oleh baju itu maka mereka akan membelinya tanpa pandang hari besok dan setelah dibeli banyak sekali pengalaman wanita menyesal karena melihat isi baju mereka yang ada di lemari sudah tidak muat lagi, ya namun begitu hal ini akan terus berulang .
				</p>
					<h2>Easy To Get</h2>
					<p>
                    para kamu-kamu semua pasti taulah ya hampir semua jalan tempat-tempat tak lepas yang namanya kata pakian, lihat aja di sepanjang kita pergi liburan, di pasar, di emperan jalan raya pasti ada saja yang menjual barang yang namnya pakian ini karena memang hampir semua manusia akan membutuhkan baju.
		</p>
					<h2>Kurang Tertarik?</h2>
					<p>
						jika memang kurang mengenak atau kurang mengerti apa arti baju bagi kalian mari ikuti web kami, Kami siap membantu anda-anda yang kesulitan. mau bergabung dengan kami? mari kita sama-sama membangun bisnis online dari yang kecil hingga sampai saatnya tiba akan menjadi perusahaan yang besar dan dapat membangun lowongan kerja yang baru sehingga semuanya dapat tertolong baik adanya Terima Kasih.
					</p>
				</div>
			</div>
			<div id="sidebar">
				<h1>About</h1>
			</div>
		</div>
		<div id="footer">
			<ul class="navigation">
				<li>
					<a href="../lora/index.php">Home</a>
				</li>
				<li>
					<a href="../lora/news.php">Terbaru</a>
				</li>
				<li>
					<a href="../lora/cosmetics.php">BajuBlush</a>
				</li>
				<li>
					<a href="../lora/skincare.php">DresBatik</a>
				</li>
				<li>
					<a href="../lora/fragrance.php">FashionWanita</a>
				</li>
				<li class="selected">
					<a href="../lora/about.php">About</a>
				</li>
				<li>
					<a href="../lora/blogs.php">Blog</a>
				</li>
				<li>
					<a href="../lora/contact.php">Contact</a>
				</li>
			</ul>
			<p id="footnote">
				© Elegant Outfist 2018. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>