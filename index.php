<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>web Baju Lora</title>
	<link rel="stylesheet" href="../lora/css/style.css" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]-->
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="logo">
				<a href="../lora/index.php"><img src="../lora/images/Logol.jpg" alt="LOGO" width="692" height="81"></a>
			</div>
			<div id="navigation">
				<ul>
					<li class="selected">
						<a href="../lora/index.php">home</a>
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
						<a href="../lora/fragrance.php">FashionJilbab</a>
					</li>
					<li>
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
		</div>
        <?php
		session_start();
			$konek=new MySQLi ("localhost", "lora", "lora", "dbecom");
			$select="SELECT * FROM tblecom";
			$hasil=$konek->query($select);
			while ($row=$hasil->fetch_assoc()) {
		?>
		<div id="contents">
			<div id="main">
				<div id="adbox">
					<img src="../lora/images/1.jpg" alt="Img" height="384" width="700">
					<div class="info">
						<h1>women's fashion</h1>
						<p>
							Hadir untuk Anda.
						</p>
						<a href="../lora/index.php" class="shop">Kami Siap Untuk Anda</a>
					</div>
				</div>
				<ul id="promotions">
					<li>
						<div class="poster">
							<a href="../lora/fragrance.php"> <img src="../lora/images/4.png" alt="Img" height="282" width="204"> <span>Special Offers!</span></a>
						</div>
						<a href="../lora/fragrance.php">Shop</a>
						<h2>blush</h2>
						<p>
							Kami hadir membuat kesulitan kamu menjadi lebih mudah hanya dengan membuka web kami semua urusan kekawatiran anda terselesaikan 
						</p>
					</li>
					<li>
						<div class="poster">
							<a href="../lora/cosmetics.php"> <img src="../lora/images/6.jpg" alt="Img" height="282" width="204"></a>
						</div>
						<a href="../lora/cosmetics.php">Shop</a>
						<h2>Kemeja </h2>
						<p>
							banyak variasi warna yang dapat anda temui di sini
						</p>
					</li>
					<li>
						<div class="poster">
							<a href="../lora/skincare.php"> <img src="../lora/images/5.jpg" alt="Img" height="282" width="204"></a> <span class="clearance"></span>
						</div>
						<a href="../lora/skincare.php">Shop</a>
						<h2>Batik Wanita</h2>
						<p>
							Bulan Desember akan tiba, apa salahnya kita membuat batik dengan keluarga atau untuk pakaian kerja kita nantinya. mau tau lebih banyak? ikuti kami terus yuk 
						</p>
					</li>
				</ul>
				<div class="sidebar">
					<div id="connect" class="box">
						<h2>Stay Connected</h2>
						<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a> <a href="http://freewebsitetemplates.com/go/youtube/" target="_blank" class="vimeo"></a>
					</div>
					<div id="newsletter" class="box">
						<h2>Sign up for Newsletter</h2>
						<form action="../lora/index.php" method="post">
							<input type="text" value="Email-address" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
							<input type="submit" value="Subscribe">
						</form>
						<p>
							Women's Fashion Hadir untuk Anda
						</p>
					</div>
				</div>
				<div id="updates" class="box">
					<h2>Latest Blogs</h2>
					<ul>
						<li>
							<img src="../lora/images/10.jpg" alt="Img" height="90" width="136">
							<div class="links">
								<h4>Stel terbaru</h4>
								<a href="../lora/index.php" class="time">05 July 2018</a> <a href="../lora/index.html" class="comments">2 Comments</a>
							</div>
							<p>
								Kami Hadir untuk Anda dan memenuhi semua keinginan anda hanya pada kami. <a href="../lora/blog.html">Read More.</a>
							</p>
						</li>
						<li>
							<img src="../lora/images/lk.jpg" alt="Img" height="90" width="136">
							<div class="links">
								<h4>Stel Terbaru</h4>
								<a href="../lora/index.php" class="time">05 July 2018</a> <a href="../lora/index.php" class="comments">2 Comments</a>
							</div>
							<p>
								Kami Hadir untuk Anda dan memenuhi semua keinginan anda hanya pada kami. <a href="../lora/blog.php">Read More.</a>
							</p>
						</li>
					</ul>
				</div>
			</div>
            <?php } ?>
			<div id="sidebar">
				<div class="cart">
					<a href="../lora/cart.php">View Cart</a> <span>Your cart<br> is empty</span>
				</div>
				<div class="news">
					<h2>Terbaru</h2>
					<ul>
						<li>
							<a href="../lora/news.php"> <img src="../lora/images/2.jpg" alt="Img" height="111" width="178"> Batik Fashion</a>
						</li>
						<li>
							<a href="../lora/news.php"> <img src="../lora/images/3.jpg" alt="Img" height="111" width="178"> Katun Batik</a>
						</li>
						<li>
							<a href="../lora/news.php"> <img src="../lora/images/11.jpg" alt="Img" height="111" width="178"> Dress Terbaru</a>
						</li>
					</ul>
				</div>
				<div class="box">
					<h2>Featured Items</h2>
					<ul>
						<li>
							<a href="../lora/news.php"> <img src="../lora/images/13.jpg" alt="Img" height="111" width="178">Varian Batik Coklat</a></li>
						<li>
							<a href="../lora/news.php"> <img src="../lora/images/12.jpg" alt="Img" height="111" width="178">Varian Batik Hijau </a></li>
						<li>
							<a href="../lora/news.php"> <img src="../lora/images/11.jpg" alt="Img" height="111" width="178">Dress dan Jumsit</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">
			<ul class="navigation">
				<li class="selected">
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
					<a href="../lora/fragrance.php">FashionJilbab</a>
				</li>
				<li>
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