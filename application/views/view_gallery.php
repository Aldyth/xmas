<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<link rel="stylesheet" href="/xmas/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="/xmas/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="/xmas/css/style.css" type="text/css" media="all">
<script type="text/javascript" src="/xmas/js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="/xmas/js/cufon-yui.js"></script>
<script type="text/javascript" src="/xmas/js/cufon-replace.js"></script>
<script type="text/javascript" src="/xmas/js/UkrainianMysl_400.font.js"></script>
<script type="text/javascript" src="/xmas/js/HomewardBound_400.font.js"></script>

<script type="text/javascript">
			$(document).ready(function()
			{
				//alert('e');
			
			});
		</script>
</head>
<body id="page1">
<div class="main">
<!-- header -->
	<header>
		<div class="wrapper">
			<ul id="icons">
				<li><a href='http://www.facebook.com'><img src="/xmas/images/icon1.gif"></a></li>
				<li><a href='http://www.myspace.com'><img src="/xmas/images/icon2.gif" alt=""></a></li>
				<li><a href='http://www.twitter.com'><img src="/xmas/images/icon3.gif" alt=""></a></li>
			</ul>
		</div>
		<div class="wrapper">
			<div id="banner">
				<h1><div id="logo">Merry X-Mas</div></h1>
				<span class="text">Enjoy Your X-Mas With Family <span>And Keep Your Spirits High!</span></span>
			</div>
		</div>
		<div id="menu">
			<div id="menu_left">
				<div id="menu_right">
					<nav>
						<ul>
							<li><?php echo anchor('home',"Home");?></li>
							<li><?php echo anchor('home/artikel',"Artikel");?></li>
							<li><a href="">Gallery</a></li>
							<li><?php echo anchor('home/kontak',"Contacts");?></li>
							<li><?php echo anchor('home/sitemap',"Sitemap");?></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
<!-- / header -->
<!--content -->
	<section id="content">
		<article class="col1">
			<div class="box1 min_height">
				<h3><span><span><strong>&nbsp;</strong>Foto - Foto Natal</span></span></h3>
		
				<table width="564" height="100" cellspacing="40">
								<tr>
									<td width="100" height="100" align="center"><img src="/xmas/images/natal1.jpg"></td>
									<td align="center"><img src="/xmas/images/natal2.jpg"></td>
									<td align="center"><img src="/xmas/images/natal3.jpg"></td>
								</tr>
								<tr>
									<td width="100" height="100" align="center"><img src="/xmas/images/natal4.jpg"></td>
									<td align="center"><img src="/xmas/images/natal5.jpg"></td>
									<td align="center"><img src="/xmas/images/natal6.jpg"></td>
								</tr>
				</table>
			</div>
 </article>
		<article class="col2 pad_left1">
			<div class="box1">
				<h2><span><span><strong>&nbsp;</strong>Artikel Natal</span></span></h2>
				<p><strong class="color1">Kado Natal</strong><br>
				"Ada apa?" Tanyaku ketika memasuki dapur dan kulihat ayahku duduk di kursi dapur. Kepalanya yang beruban bertumpu pada tangannya. Pada hari Sabtu, aku singgah ... 	
				<a href='artikel' class="marker">&nbsp;</a></p>
				<p><strong class="color1">Pernak - Pernik Natal</strong><br>
					Pohon cemara menghiasi rumah kami, Memancarkan semerbak harumnya nuansa Natal, Setiap hati diselimuti suasana syahdu, Menandakan Natal t'lah tiba..
					<a href='artikel' class="marker">&nbsp;</a></p>
				<p><strong class="color1">Hiasan Natal</strong><br>
				Pulang sekolah, Tita dan Ati berjalan beriringan menyusuri jalan di pertokotan. Mereka amat menikmati perjalanan pulang ini. Soalnya, toko-toko di sepanjang ...
				<a href='artikel'class="marker">&nbsp;</a></p>
			</div>
			<div id="banner1"><img src="/xmas/images/banner1.jpg" alt=""></div>
 </article>
	</section>
<!-- / content -->
<!-- footer -->
	<footer>
		<?php echo $footer; ?>
	</footer>
<!-- / footer -->
</div>
<script type="text/javascript"> Cufon.now();</script>
</body>
</html>