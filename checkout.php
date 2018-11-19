<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Checkout - web Baju Lora</title>
	<link rel="stylesheet" href="../lora/css/style.css" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]-->
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="logo">
				<a href="../lora/index.php"><img src="../lora/images/Logol.jpg" alt="LOGO" width="581" height="82"></a>
			</div>
			<div id="navigation">
				<ul>
					<li>
						<a href="../lora/index.php">home</a>
					</li>
					<li>
						<a href="../lora/news.php">Terbaru</a>
					</li>
					<li class="selected">
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
		<div id="contents">
			<div id="main">
				<form action="../lora/index.php" method="post" id="checkout">
					<div class="contentbox fillup">
						<h2>Step 1 <span>Informasi Tagihan</span></h2>
						<ul>
							<li>
								<label>Nama:</label>
								<input type="text" value="" class="txtfield">
							</li>
							<li>
								<label>alamat:</label>
								<input type="text" value="" class="txtfield">
							</li>
							<li>
								<label>tanggal lahir:</label>
								<input type="text" value="" class="txtfield">
							</li>
							<li>
								<label>Kota:</label>
								<input type="text" value="" class="txtfield">
							</li>
							<li>
								<label>Status:</label>
								<div class="fakeselect">
									<!-- browse button is here as background -->
									<input type="text" name="fakeselect">
								</div>
								<select>
									<option></option>
								</select>
							</li>
							<li>
								<label>kode zip:</label>
								<input type="text" value="" class="txtfield">
							</li>
							<li>
								<label>Email:</label>
								<input type="text" value="" class="txtfield">
							</li>
							<li>
								<label>nomor telepon:</label>
								<input type="text" value="" class="txtfield">
							</li>
						</ul>
						<p>
							Women's Fashion Melayani apa yang anda inginkan
						</p>
					</div>
					<div class="contentbox fillup">
						<h2>Step 2 <span>Pengiriman informasi</span></h2>
						<ul>
							<li>
								<label></label>
								<label for="billingAdd" class="checkbox">
									<input type="checkbox" checked="checked" id="billingAdd">
									Gunakan Tagihan saya</label>
							</li>
							<li>
								<label>Nama:</label>
								<input type="text" value="" class="txtfield">
							</li>
							<li>
								<label>Alamat:</label>
								<input type="text" value="" class="txtfield">
							</li>
							<li>
								<label>tanggal lahir:</label>
								<input type="text" value="" class="txtfield">
							</li>
							<li>
								<label>Kota:</label>
								<input type="text" value="" class="txtfield">
							</li>
							<li>
								<label>Status:</label>
								<div class="fakeselect">
									<!-- browse button is here as background -->
									<input type="text" name="fakeselect">
								</div>
								<select>
									<option></option>
								</select>
							</li>
							<li>
								<label>Kode Zip:</label>
								<input type="text" value="" class="txtfield">
							</li>
							<li>
								<label>Email:</label>
								<input type="text" value="" class="txtfield">
							</li>
							<li>
								<label>Nomor Telepon:</label>
								<input type="text" value="" class="txtfield">
							</li>
						</ul>
					</div>
					<div class="contentbox">
						<h2>Step 3 <span>pilihan Pengiriman</span></h2>
						<label for="shipping" class="checkbox">
							<input type="checkbox" checked="checked" id="shipping">
							pengiriman biasa $25.00</label>
						<label for="courier" class="checkbox">
							<input type="checkbox" checked="checked" id="courier">
							pengiriman cepat $31.00</label><br>
						<p>
							Women's Fashion Melayani apa yang anda inginkan
						</p>
					</div>
					<div class="contentbox" id="payment">
						<h2>Step 4 <span>Metode Pembayaran</span></h2>
						<ul>
							<li>
								<label>Kartu Kredit:</label>
								<div class="fakeselect">
									<!-- browse button is here as background -->
									<input type="text" name="fakeselect">
								</div>
								<select>
									<option></option>
								</select>
							</li>
							<li>
								<label>Type:</label>
								<input type="text" value="" class="txtfield">
							</li>
							<li>
								<label>Nomor Kartu:</label>
								<input type="text" value="" class="txtfield">
							</li>
							<li>
								<label>Nama nomor:</label>
								<div class="fakeselect">
									<!-- browse button is here as background -->
									<input type="text" name="fakeselect">
								</div>
								<select>
									<option></option>
								</select>
							</li>
							<li>
								<label>tanggal:</label>
								<input type="text" value="" class="txtfield">
							</li>
						</ul>
						<p>
							Women's Fashion Melayani apa yang anda inginkan.
						</p>
					</div>
					<div id="compute" class="contentbox">
						<h2><span>Ringkasan Pemesanan </span></h2>
						<table>
							<thead>
								<tr>
									<th>Deskripsi Barang </th>
									<th>Unit</th>
									<th>Harga Masing-Masing</th>
									<th class="last-child">Harga Pesanan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><div class="frame2">
											<img src="../lora/images/13.jpg" alt="Img" height="41" width="45">
										</div>
										<span class="title">Batik Wanita</span>
										<p>
											Women's Fashion Melayani apa yang anda inginkan
										</p></td>
									<td>1</td>
									<td>$1.00</td>
									<td><span class="total">$1.00</span></td>
								</tr> <tr>
									<td><div class="frame2">
											<img src="../lora/images/12.jpg" alt="Img" height="41" width="45">
										</div>
										<span class="title">Baatik Wanita</span>
										<p>
											Women's Fashion Melayani apa yang anda inginkan
										</p></td>
									<td>1</td>
									<td>$1.00</td>
									<td><span class="total">$1.00</span></td>
								</tr> <tr>
									<td><div class="frame2">
											<img src="../lora/images/11.jpg" alt="Img" height="41" width="45">
										</div>
										<span class="title">Batik Wanita</span>
										<p>
											Women's Fashion Melayani apa yang anda inginkan
										</p></td>
									<td>1</td>
									<td>$1.00</td>
									<td><span class="total">$1.00</span></td>
								</tr>
							</tbody>
						</table>
						<ul>
							<li>
								Subtotal: <span>$3.00</span>
							</li>
							<li>
								Sales Tax: <span>$1.00</span>
							</li>
							<li>
								Shipping: <span>$24.00</span>
							</li>
							<li>
								Order Total: <span>$28.00</span>
							</li>
						</ul>
					</div>
					<input type="submit" value="Submit Order" class="order">
				</form>
			</div>
			<div id="sidebar">
				<h1>Checkout</h1>
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
				<li class="selected">
					<a href="../lora/cosmetics.php">BajuBlush</a>
				</li>
				<li>
					<a href="../lora/skincare.php">DresBatik</a>
				</li>
				<li>
					<a href="../lora/fragrance.php">FashionWanita</a>
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
				© Eternal Beauty Essentials 2012. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>