<html>
 <head>
  <title>Membuat Image Rotator dengan JQuery</title>
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript">
    // tentukan lokasi atau directory gambar-gambar yang akan di load
    var imageDirectory = './'; 
    var imageList = ['slide1.jpg','slide2.jpg','slide3.jpg','slide4.jpg'];
 
    // flag yang digunakan untuk mendeteksi berapa banyak gambar yang sudah di load
    var imageHasLoad = 0;
 
    // flag yang digunakan untuk melakukan rotator berdasar urutan gambar
    var imagePosition = 0;
  
    $(imageList).each( // looping isi array gambar
        function(){
            var Img = new Image(); // buat object gambar di javascript
            Img.src = imageDirectory+this // lokasi gambar di tentukan dari masing-masing nilai array yang sudah ditentukan sebelumnya
            $(Img).load( // membuat fungsi ketika gambar selesai di load
              function(){
                  imageHasLoad++; // setup flag berapa banyak gambar yang sudah di load
                  if(imageHasLoad == imageList.length) // jika semua gambar selesai di load
                      insertImages(); 
              }
            ); 	    
        }
    ); 
    // fungsi untuk memasukan HTML TAG gambar di dalam sebuah elemen DIV 
    function insertImages(){
        var imgStr = '';
        $(imageList).each( // looping isi array gambar
           function(){
        	  // gambar secara default di sembunyikan terlebih dahulu 
              imgStr += '<img src="'+imageDirectory+this+'" border="0" style="display:none" />'; 
           }
        );
        $('#divSlideShow').html(imgStr); // masukkan semua HTML TAG gambar ke dalam element dengan ID #divSlideShow
        rotateImages(); // lakukan animasi rotator
    } 	
    // fungsi untuk melakukan rotator 
    function rotateImages(){
        /* logika pada fungsi ini adalah sembuyikan image yang sudah tampil sebelumnya, lalu setelah selesai di sembunyikan
		   maka tampilkan image selanjutnya. Menyembunyikan dan menampilkan image dengan fungsi fadeOut dan fadeIn dari jQuery */
    	$($('#divSlideShow').find('img')[imagePosition > 0 ? imagePosition - 1 : imageList.length - 1]).fadeOut(
    	    'slow',
			function(){ // fungsi yang akan dijalankan setelah gambar sebelumnya selesai disembuyikan
				$($('#divSlideShow').find('img')[imagePosition]).fadeIn();
			}
    	);
    	// jika posisi rotator sudah sama dengan jumlah image yang di load sebelumnya, maka kembalikan ke posisi awal atau nol
		if(imagePosition == imageList.length - 1) 
			imagePosition = 0; 
    	else 
			imagePosition++; 
    	setTimeout('rotateImages()',2000); // lama rotasi per image adalah 2000 miliseconds atau 2 detik
    }
  </script>
 </head>
<body>
<!-- tampilkan text "loading images" selama pengunjung menunggu hasil pre-load image -->
<div id="divSlideShow">loading images...</div>
Text ini ada di bawah image rotator animation
</body>
</html>
