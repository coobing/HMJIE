<?php
	require_once ('class/ClassProker.php');
	require_once ('class/strukturClass.php');
    $proker = new proker();
    $dataProker = $proker->getProker();
	$struktur = new struktur();
    $dataStruktur = $struktur->getStruktur();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- favicon.ico and apple-touch-icon.png -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/timeline.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300' rel='stylesheet' type='text/css'>

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-46457738-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

    </head>
    <body data-spy="scroll" data-target=".navbar">
        
        <section id="home">
            <div class="container">
                <div class="containerblack">
                    <ul class="homenav left">
                        <li><a href="#works" class="scrollto">Galery</a></li>
                        <li><a href="#about" class="scrollto">About</a></li>
                    </ul>
                    <ul class="homenav right">
                        <li><a href="#timeline" class="scrollto">Proker</a></li>
                        <li><a href="#contact" class="scrollto">Struktur Org</a></li>
                    </ul>
                    <h1><img src="img/hmjie.png"></h1>
                    <div id="slider">
                        <div class="slide">Contoh<strong> Slogan</strong> yang akan ditampilkan.</div>
						<div class="slide">Contoh<strong> Slogan</strong> sesuai keinginan.</div>
						<div class="slide">Contoh<strong> Slogan</strong> HMJIE.</div>
                     </div><!-- end: #slider -->    
                </div>
                <a href="#works" id="arrow_down">See our work</a>
            </div><!-- end: .containter -->                    	
        </section><!-- end: #home -->

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="#"><img src="img/hmjie-logo.png"> <b>Himpunan Mahasiswa Jurusan Ilmu Ekonomi</b></a>
                    <div class="pull-right">
                        <ul class="nav">
                            <li><a href="#home" class="scrollto">Home</a></li>
                            <li><a href="#works" class="scrollto">Galery</a></li>
                            <li><a href="#about" class="scrollto">About</a></li>
                            <li><a href="#timeline" class="scrollto">Proker</a></li>
                            <li><a href="#contact" class="scrollto">Struktur organisasi</a></li>
                            <li><a href="admin.php">Login</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
       
        <section id="works">
            <div class="container">
                <h2 class="text-center">Galery<i class="icon-works"><img src="img/icon-works.png"></i></h2>
                <p class="text-center lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            </div> <!-- end: container -->
            <div id="works_items">
                <ul id="og-grid" class="og-grid">
                    <li>
                        <a href="http://ecofair2014.blogspot.com/" data-largesrc="temp/eco.jpg" data-title="ECONOMIC FAIR 2014 " data-description="Economics Fair merupakan rangkaian acara Himpunan Mahasiswa Jurusan Ilmu Ekonomi Fakultas Ekonomi UNAND. Acara Economics Fair telah sukses diselenggarakan pada tahun 2013 dan untuk kedua kalinya diselenggarakan pada tahun 2014 dan semoga menjadi acara rutin hingga tahun-tahun selanjutnya. Rangkaian acara Economics Fair tahun 2014 terdiri dari Seminar Praktisi Syariah, Seminar IT, Bazar, Ekonomic Expo, Acoustic Competition, Olimpiade Ekonomi SMA/MA Tk Sumatra tanggal 28 April-3 Mei 2014">
                            <img src="temp/thumbs/eco.jpg" alt="img01"/><div>ECONOMIC FAIR 2014 </div>
                        </a>
                                                <div class="thumbs">
                                                    <a href="http://ecofair2014.blogspot.com/" data-largesrc="temp/eco1.jpg" data-thumb="temp/eco1.jpg" data-title="Seminar Nasional" data-description="SEMINAR NASIONAL PERBANKAN SYARIAH INDONESIA MENUJU PUSAT PEREKONOMIAN SYARIAH bersama SUHARNO ELIANDY (DIREKTUR EKSEKUTIF & MANAJEMEN RISIKO LPS) dan RONALD RULINDO (KEPALA DIVISI SYARIAH & MANAJEMEN RISIKO LPS ). Tanggal 28 April 2014 Pukul 9.00AM-selesai di CONVENTION HALL UNAND. Insert: IDR 10.000. Pendaftaran : Stand Economics Fair di PKM Lt.1/Sekretariatan HMJIE FE-UA. Contact person : Rima (082389266191) Ian (081266684551)"></a>
                                                    <a href="http://ecofair2014.blogspot.com/" data-largesrc="temp/eco2.jpg" data-thumb="temp/eco2.jpg" data-title="Accoustic Competition" data-description="Acoustic Competition "Simphony with Acoustic" tanggal 2 Mei 2014. Pendaftaran 10 April-30 April 2014. Fee 100rb/group."></a>
                                                    <a href="http://ecofair2014.blogspot.com/" data-largesrc="temp/eco3.jpg" data-thumb="temp/eco3.jpg" data-title="Olimpiade Ekonomi" data-description="OLIMPIADE EKONOMI SMA/MA se-Sumatera. Pendaftaran dimulai tanggal 1 April-2 Mei 2014."></a>
                                                    <a href="http://ecofair2014.blogspot.com/" data-largesrc="temp/eco4.jpg" data-thumb="temp/eco4.jpg" data-title="Seminar Nasional IT" data-description="Seminar Nasional IT Taking A Business's Chance Through IT bersama KEN DEAN LAWADINATA (CEO of KASKUS) The Largest Indonesian Community dan CALVIN KIZANA (Founder of PICMIX) Aplikasi Edit Foto yang Mendunia Tanggal 29 April 2014 Pukul : 9.00 AM-Selesai Insert: IDR 25.000. Pendaftaran : Stand Economics Fair di PKM Lt.1 atau Sekretariatan HMJIE UNAND. CP : Nandya 08975140093 Iza 083180422905."></a>
                                                   
                                                </div>
                    </li>
                    <li>
                        <a href="#" data-largesrc="temp/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="temp/thumbs/2.jpg" alt="img02"/><div>Magazine publishing 2013</div>
                        </a>
                                                <div class="thumbs">
                                                    <a href="#" data-largesrc="temp/2.jpg" data-thumb="temp/thumbs/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu."></a>
                                                    <a href="#" data-largesrc="temp/z1.jpg" data-thumb="temp/thumbs/z1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."></a>
                                                    <a href="#" data-largesrc="temp/z2.jpg" data-thumb="temp/thumbs/z2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu."></a>
                                                    <a href="#" data-largesrc="temp/z3.jpg" data-thumb="temp/thumbs/z3.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."></a>
                                                </div>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="temp/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="temp/thumbs/3.jpg" alt="img03"/><div>Business marketing event</div>
                        </a>
                                                <div class="thumbs">
                                                    <a href="http://exot.sk/" data-largesrc="temp/3.jpg" data-thumb="temp/thumbs/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato."></a>
                                                    <a href="http://exot.sk/" data-largesrc="temp/z1.jpg" data-thumb="temp/thumbs/z1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."></a>
                                                    <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="temp/z2.jpg" data-thumb="temp/thumbs/z2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu."></a>
                                                    <a href="http://exot.sk/" data-largesrc="temp/z3.jpg" data-thumb="temp/thumbs/z3.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."></a>
                                                    <a href="http://exot.sk/" data-largesrc="temp/1.jpg" data-thumb="temp/thumbs/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."></a>
                                                </div>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="temp/4.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="temp/thumbs/4.jpg" alt="img01"/><div>Magazine publishing and graphic design</div>
                        </a>
                                                <div class="thumbs">
                                                    <a href="http://exot.sk/" data-largesrc="temp/4.jpg" data-thumb="temp/thumbs/4.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."></a>
                                                    <a href="http://exot.sk/" data-largesrc="temp/z1.jpg" data-thumb="temp/thumbs/z1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."></a>
                                                    <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="temp/z2.jpg" data-thumb="temp/thumbs/z2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu."></a>
                                                    <a href="http://exot.sk/" data-largesrc="temp/z3.jpg" data-thumb="temp/thumbs/z3.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."></a>
                                                </div>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="temp/5.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="temp/thumbs/5.jpg" alt="img02"/><div>Motor boat photoshooting</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="temp/6.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="temp/thumbs/6.jpg" alt="img03"/><div>Superstar website development</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="temp/7.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="temp/thumbs/7.jpg" alt="img01"/><div>Yacht magazine design</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="temp/8.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="temp/thumbs/8.jpg" alt="img02"/><div>Motor boat design contest</div>
                        </a>
                    </li>
                </ul>
            </div><!-- end: #works_items -->
        </section><!-- end: #works -->

        <div class="container txtblock">
            <p class="text-center lead">Untuk anggota HMJIE yang ingin update, sharing informasi dan bahan kuliah, Ayo  <a href="admin.php">Login</a> dulu.</p>
        </div> <!-- end: container txtblock -->

        <section id="about">
            <div class="container">
                <div class="span10">
					<h2 class="text-center">About<i class="icon-about"><img src="img/icon-about.png"></i></h2>
					<p class="text-center lead marginer">HIMA Jurusan Ilmu Ekonomi Universitas Andalas adalah himpunan mahasiswa yang berada di bawah naungan jurusan Ilmu Ekonomi Fakultas Ekonomi Universitas Andalas. Merupakan wadah mahasiswa untuk belajar berorganisasi dan bersosialisasi sesama mahasiswa diluar jam akademik.</p>
				</div>
                <p class="text-center lead ">
                <strong>Sejarah</strong>
				</p>
				<p class="text-center lead">sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                <hr />
				<p class="text-center lead ">
                <strong>Latar Belakang</strong>
				</p>
				<p class="text-center lead">sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                <hr />
				<p class="text-center lead ">
                <strong>Visi</strong>
				</p>
				<p class="text-center lead">sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                <hr />
				<p class="text-center lead ">
                <strong>Misi</strong>
				</p>
				<p class="text-center lead">sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                <hr />
				<p class="text-center lead">
				<strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                <div class="clear"></div>
    
                <div class="row"> 
                    <div class="span3">
                        <div class="person"> 
                            <img alt="NAME" src="server/foto/images.jpg">
                            <h2>Trendy M. Iqbal</h2>
                            <p class="position">Ketua</p>
                            <p><a href="mailto:something">TrendyM.Iqbal@gmail.com</a></p>
                            <ul class="inline text-center">
                                <a href="#"><i class="ico">F</i></a>
                                <a href="#"><i class="ico">L</i></a>
                                <a href="#"><i class="ico">D</i></a>
                            </ul>
                        </div><!-- end: .person -->
                    </div><!-- end: .span3 -->
                    
                    <div class="span3">
                        <div class="person"> 
                            <img alt="NAME" src="server/foto/images.jpg">
                            <h2>Moh. Idsembit </h2>
                            <p class="position">Komunikasi dan informasi</p>
                            <p><a href="mailto:something">idsembit@gmail.com</a></p>
                            <ul class="inline text-center">
                                <a href="#"><i class="ico">I</i></a>
                                <a href="#"><i class="ico">L</i></a>
                                <a href="#"><i class="ico">D</i></a>
                            </ul>
                        </div><!-- end: .person -->
                    </div><!-- end: .span3 -->
                    
                    <div class="span3">
                        <div class="person"> 
                            <img alt="NAME" src="server/foto/images.jpg">
                            <h2>Sitty Amelia</h2>
                            <p class="position">Hubungan Masyarakat</p>
                            <p><a href="mailto:something">titi@gmail.com</a></p>
                            <ul class="inline text-center">
                                <a href="#"><i class="ico">F</i></a>
                                <a href="#"><i class="ico">L</i></a>
                                <a href="#"><i class="ico">D</i></a>
                            </ul>
                        </div><!-- end: .person -->
                    </div><!-- end: .span3 -->

                    <div class="span3">
                        <div class="person"> 
                            <img alt="NAME" src="server/foto/images.jpg">
                            <h2>Briliant Yudistira </h2>
                            <p class="position">Developer</p>
                            <p><a href="mailto:something">dog@exot.sk</a></p>
                            <ul class="inline text-center">
                                <a href="#"><i class="ico">L</i></a>
                                <a href="#"><i class="ico">D</i></a>
                                <a href="#"><i class="ico">I</i></a>
                            </ul>
                        </div><!-- end: .person -->
                    </div><!-- end: .span3 -->
					
					<div class="span3">
                        <div class="person"> 
                            <img alt="NAME" src="server/foto/images.jpg">
                            <h2>Ovilia M</h2>
                            <p class="position">Developer</p>
                            <p><a href="mailto:something">rich.dog@exot.sk</a></p>
                            <ul class="inline text-center">
                                <a href="#"><i class="ico">L</i></a>
                                <a href="#"><i class="ico">D</i></a>
                                <a href="#"><i class="ico">I</i></a>
                            </ul>
                        </div><!-- end: .person -->
                    </div><!-- end: .span3 -->
					
					<div class="span3">
                        <div class="person"> 
                            <img alt="NAME" src="server/foto/images.jpg" width="128px" height="140px">
                            <h2>Rizki Hamdani </h2>
                            <p class="position">Developer</p>
                            <p><a href="mailto:something">rich.dog@exot.sk</a></p>
                            <ul class="inline text-center">
                                <a href="#"><i class="ico">L</i></a>
                                <a href="#"><i class="ico">D</i></a>
                                <a href="#"><i class="ico">I</i></a>
                            </ul>
                        </div><!-- end: .person -->
                    </div><!-- end: .span3 -->
					
					<div class="span3">
                        <div class="person"> 
                            <img alt="NAME" src="server/foto/images.jpg">
                            <h2>Wenny Ilham </h2>
                            <p class="position">Developer</p>
                            <p><a href="mailto:something">rich.dog@exot.sk</a></p>
                            <ul class="inline text-center">
                                <a href="#"><i class="ico">L</i></a>
                                <a href="#"><i class="ico">D</i></a>
                                <a href="#"><i class="ico">I</i></a>
                            </ul>
                        </div><!-- end: .person -->
                    </div><!-- end: .span3 -->
					
					<div class="span3">
                        <div class="person"> 
                            <img alt="NAME" src="server/foto/images.jpg">
                            <h2>Yudhi Barlin </h2>
                            <p class="position">Developer</p>
                            <p><a href="mailto:something">rich.dog@exot.sk</a></p>
                            <ul class="inline text-center">
                                <a href="#"><i class="ico">L</i></a>
                                <a href="#"><i class="ico">D</i></a>
                                <a href="#"><i class="ico">I</i></a>
                            </ul>
                        </div><!-- end: .person -->
                    </div><!-- end: .span3 -->

                </div><!-- end: .row -->
            </div><!-- end: .container -->
        </section>

        <section id="timeline">
            <div class="container">
                <h2 class="text-center">Program &nbsp Kerja  &nbsp HMJIE<i class="icon-time"><img src="img/icon-time.png"></i></h2>
                <p class="text-center lead">Daftar Program Kerja</p> 
                <ul class="cbp_tmtimeline">
				<?php
					if($dataProker === null)
							{
								echo"<tr>"
									. "<td colspan='7'><div class='alert alert-danger text-center'>Data Kosong"
									."</div></td>"
									. "</tr>";
							}
						else 
							{
								$i=1;
								foreach ($dataProker as $data)
									{
					?>
                    <li>
                        <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span><?php echo $data['waktu']; ?> - <?php echo $data['waktu1']; ?> </span> <span><h4><?php echo $data['divisi']; ?></h4>	</span></time>
						
                        <div class="cbp_tmicon cbp_tmicon-phone"></div>
                        <div class="cbp_tmlabel">
                            <h2><?php echo $data['nama_proker']; ?></h2>
                            <h4>Tujuan Pelaksanaan</h4>
                            <p><?php echo $data['tujuan']; ?></p>
							<hr/>
							<h4>Sasaran Pelaksanaan</h4>
                            <p><?php echo $data['sasaran']; ?></p>
                        </div>
                    </li>
					<?php
									$i++;
								}
						}
					?>
                </ul>
            </div><!-- end: .containter -->
        </section><!-- end: #timeline -->

        <div class="container txtblock nrthree">
            <p class="text-center lead">Our offices are situated in London where we have a base for the leading graphic designers, developers and other magicians in the country. <a href="#contact" class="scrollto">Let`s talk.</a></p>
        </div> <!-- end: container txtblock -->
        
        <section id="contact">
            <div class="container">
			<?php
			if($dataStruktur === null)
			  {
				  echo"<tr>"
					  . "<td colspan='7'><div class='alert alert-danger text-center'>Data Kosong"
					  ."</div></td>"
					  . "</tr>";
			  }
		  else 
			  {
			?>
                <h2 class="text-center"><?php echo $dataStruktur['nama']; ?><i class="icon-contact"><img src="img/icon-contact.png"></i></h2>
                <p class="text-center lead">Let`s get together and create something beautiful for you and your business. The time is now. <strong>Go for it</strong>.</p> 
                
                <footer> 
                
                      <img src="<?php echo $dataStruktur['foto']; ?>">
                    </div> 
                </footer><!-- end: .row -->
			<?php
				}
			?>
            </div><!-- end: .container -->
        </section><!-- end: #contact -->
       
        <footer>
            <a href="#home" class="scrollto">
                <img src="img/hmjie-logo.png">
            </a>
        </footer>

        <script src="js/vendor/jquery-1.9.1.min.js"></script>        
			
        <script src="js/vendor/bootstrap.min.js"></script>

		<script src="js/waypoints.min.js" type="text/javascript"></script>
		<script src="js/waypoints-sticky.js" type="text/javascript"></script>
		

        <script src="js/jquery.cycle2.min.js"></script>
        <script src="js/jquery.cycle2.scrollVert.min.js"></script>

		<script src="js/jquery.scrollto.js"></script>
		<script src="js/grid.js"></script>
		<script>
            $('#slider').cycle({
                fx : 'scrollVert',
                timeout: 3000,
                speed: 300,
                slides: '.slide'
            });

			$('.navbar').waypoint('sticky');

			$('a.scrollto, a#arrow_down').click(function(e){
				$('html,body').scrollTo(this.hash, this.hash);
				e.preventDefault();
			});

			$(function() {
				Grid.init();
			});
		</script>
        
        <script src="js/main.js"></script>
    </body>
</html>
