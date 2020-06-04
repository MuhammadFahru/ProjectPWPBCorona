
<?php $__env->startSection('title', 'Shutdown Corona'); ?>
<?php $__env->startSection('index','active'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container-fluid" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">        
          <h1 style="text-align: left;">Corona Virus Global & Indonesia Live Data</h1>
          <h2>Website Infomatif Mengenai Perkembangan Virus Corona di Dunia dan Indonesia</h2>
          <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div>
      </div>
      <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section>
<!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/img/virus.png" class="img-fluid mt-5" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
          <h3>Apa Itu Virus Corona ?</h3>
          <p class="font-italic">
            Virus Corona atau SARS-CoV-2 adalah virus yang menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga kematian. tingkat kematian (case fatality rate) berdasarkan kelompok usia adalah sebagai berikut
          </p>
          <ul>
            <li><i class="icofont-check-circled"></i> 0 - 5 tahun: 2,6%</li>
            <li><i class="icofont-check-circled"></i> 6 - 17 tahun: 0,67%</li>
            <li><i class="icofont-check-circled"></i> 18 - 30 tahun: 1,17%</li>
            <li><i class="icofont-check-circled"></i> 31 - 45 tahun: 2,39%</li>
            <li><i class="icofont-check-circled"></i> 46 - 59 tahun: 8,9%</li>
            <li><i class="icofont-check-circled"></i> > 60 tahun: 17,3%</li>
          </ul>
          <a href="https://www.alodokter.com/virus-corona" class="read-more">Read More <i class="icofont-long-arrow-right"></i></a>
        </div>
      </div>

    </div>
  </section>
  <!-- End About Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container">

      <div class="row mb-4">
        <div class="col-lg-12">
          <h3 class="white text-center">Live Data Corona Virus</h3>
        </div>          
      </div>

      <div class="row">

        <div class="col-lg-6 col-md-6 text-center">
          <div class="card mb-5">
            <div class="card-header"><b>Data Global</b></div>
            <div class="card-body">
              <div class="row counters">
                <div class="col-lg-4 col-md-4 text-center">
                  <h6>Total Positif</h6>
                  <img src="/assets/img/icons/sad.png" width="20%" alt="">
                  <span data-toggle="counter-up" class="mt-2 text-grey"><?php echo e($positif['value']); ?></span>
                </div>
      
                <div class="col-lg-4 col-md-4 text-center">
                  <h6>Total Sembuh</h6>
                  <img src="/assets/img/icons/happy.png" width="20%" alt="">
                  <span data-toggle="counter-up" class="mt-2 text-green"><?php echo e($sembuh['value']); ?></span>
                </div>
      
                <div class="col-lg-4 col-md-4 text-center">
                  <h6>Total Meninggal</h6>
                  <img src="/assets/img/icons/cry.png" width="20%" alt="">
                  <span data-toggle="counter-up" class="mt-2 text-red"><?php echo e($meninggal['value']); ?></span>
                </div>
              </div>
            </div>
            <div class="card-footer"><a href="">Detail <i class="icofont-long-arrow-right"></i></a></div>
          </div>
        </div>
                  
        <div class="col-lg-6 col-md-6 text-center">
          <div class="card mb-5">
            <div class="card-header"><b>Data Indonesia</b></div>
            <div class="card-body">
              <div class="row counters">
                <div class="col-lg-4 col-md-4 text-center">
                  <h6>Total Positif</h6>
                  <img src="/assets/img/icons/sad.png" width="20%" alt="">
                  <?php $__currentLoopData = $indonesia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span data-toggle="counter-up" class="mt-2 text-grey"><?php echo e($data['positif']); ?></span>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                    
                </div>
      
                <div class="col-lg-4 col-md-4 text-center">
                  <h6>Total Sembuh</h6>
                  <img src="/assets/img/icons/happy.png" width="20%" alt="">
                  <?php $__currentLoopData = $indonesia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span data-toggle="counter-up" class="mt-2 text-green"><?php echo e($data['sembuh']); ?></span>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                    
                </div>
      
                <div class="col-lg-4 col-md-4 text-center">
                  <h6>Total Meninggal</h6>
                  <img src="/assets/img/icons/cry.png" width="20%" alt="">
                  <?php $__currentLoopData = $indonesia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span data-toggle="counter-up" class="mt-2 text-red"><?php echo e($data['meninggal']); ?></span>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                    
                </div>
              </div>
            </div>
            <div class="card-footer"><a href="">Detail <i class="icofont-long-arrow-right"></i></a></div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Counts Section -->    

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Gejala</h2>
        <p>Orang yang terpapar <b>Virus Corona</b> akan memiliki gejala gejala sebagai berikut :</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
              </svg>
              <img src="/assets/img/icons/033-fever.png" class="iconn" alt="">
            </div>
            <h4><a href="">Demam</a></h4>
            <p>Demam adalah suatu keadaan saat suhu badan melebihi 37 °C yang disebabkan oleh penyakit atau peradangan.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
              </svg>
              <img src="/assets/img/icons/039-sneeze.png" class="iconn" alt="">
            </div>
            <h4><a href="">Batuk Kering</a></h4>
            <p>Batuk kering adalah batuk yang terjadi tanpa menghasilkan lendir. Biasanya, penderita batuk kering akan mengalami batuk ini terus menerus dan sulit dikendalikan.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-pink">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
              </svg>
              <img src="/assets/img/icons/037-fever.png" class="iconn" alt="">
            </div>
            <h4><a href="">Sesak Napas</a></h4>
            <p>Sesak napas adalah kondisi tidak nyaman yang menyulitkan Anda bernapas lantaran kurangnya pasokan udara yang masuk ke paru-paru.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-yellow">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
              </svg>
              <img src="/assets/img/icons/035-headache.png" class="iconn" alt="">
            </div>
            <h4><a href="">Sakit Kepala</a></h4>
            <p>Sakit kepala adalah kondisi ketika timbul rasa sakit dan tidak nyaman di kepala, kulit kepala, atau leher.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-red">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
              </svg>
              <img src="/assets/img/icons/036-sore throat.png" class="iconn" alt="">
            </div>
            <h4><a href="">Sakit Tenggorokan</a></h4>
            <p>Sakit tenggorokan adalah rasa sakit, gatal, atau iritasi pada tenggorokan yang terasa semakin sakit saat menelan.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-teal">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
              </svg>
              <img src="/assets/img/icons/038-vomit.png" class="iconn" alt="">
            </div>
            <h4><a href="">Mual</a></h4>
            <p>Mual adalah sensasi ketidaknyamanan di perut bagian atas yang disertai keinginan untuk muntah.</p>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Services Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Pencegahan</h2>
        <p>Untuk saat ini pencegahan terbaik yang bisa kita lakukan adalah sebagai berikut :</p>
      </div>

      <div class="row mt-3">
        <div class="image col-lg-6" data-aos="zoom-in" data-aos-delay="100">
          <img src="assets/img/stop-covid.png" alt="" class="img-fluid mt-5">
        </div>
        <div class="col-lg-6">
          <div class="row mb-2">
            <div class="col-lg-2">
              <img src="assets/img/icons/009-distance.png" width="65" alt="">
            </div>
            <div class="col-lg-10">
              <h6 class="mt-4">Pyshical Distancing</h6>                
            </div>              
          </div>
          <div class="row mb-2">
            <div class="col-lg-2">
              <img src="assets/img/icons/044-medical mask.png" width="65" alt="">
            </div>
            <div class="col-lg-10">
              <h6 class="mt-4">Gunakan Makser</h6>                
            </div>              
          </div>
          <div class="row mb-2">
            <div class="col-lg-2">
              <img src="assets/img/icons/041-hand washing.png" width="65" alt="">
            </div>
            <div class="col-lg-10">
              <h6 class="mt-4">Rajin Mencuci Tangan</h6>                
            </div>              
          </div>
          <div class="row mb-2">
            <div class="col-lg-2">
              <img src="assets/img/icons/027-protected.png" width="65" alt="">
            </div>
            <div class="col-lg-10">
              <h6 class="mt-4">Tingkatkan Daya Tahan Tubuh</h6>                
            </div>              
          </div>
          <div class="row mb-2">
            <div class="col-lg-2">
              <img src="assets/img/icons/007-no handshake.png" width="65" alt="">
            </div>
            <div class="col-lg-10">
              <h6 class="mt-4">Hindari Kontak Langsung dengan Orang Lain</h6>                
            </div>              
          </div>
          <div class="row mb-2">
            <div class="col-lg-2">
              <img src="assets/img/icons/022-rubber gloves.png" width="65" alt="">
            </div>
            <div class="col-lg-10">
              <h6 class="mt-4">Gunakan Sarung Tangan</h6>                
            </div>              
          </div>
        </div>          
      </div>

    </div>
  </section>
  <!-- End Features Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Wejangan</h2>
        <p>Berikut pesan pesan yang disampaikan oleh tokoh pemerinatah indonesia dan dunia</p>
      </div>

      <div class="owl-carousel testimonials-carousel">

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            "Kunci keberhasilan dari pengendalian penyebaran COVID-19 ini adalah kedisiplinan kita semua, kedisiplinan untuk mencuci tangan, menjaga jarak yang aman, untuk memakai masker, dan menghindari kerumunan dan keramaian atau konsentrasi massa.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/tokoh/jokowi.jpg" class="testimonial-img" alt="">
          <h3>Joko Widodo</h3>
          <h4>Presiden Republik Indonesia</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            “Wabah Covid ini belum berakhir, kita tidak boleh lengah. Kita jangan kendor. Jumlah dokter kita sangat minim. Katakan jumlah dokter paru 2.000 saja, maka satu dokter paru menangani 140 ribu warga negara.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/tokoh/doni.jpg" class="testimonial-img" alt="">
          <h3>Doni Monardo</h3>
          <h4>Ketua Tugas Gugus</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Saya ingin berpesan kepada keluarga PBSI yang hari ini berbuka puasa bersama, tetap harus patuhi protokol pencegahan Covid-19 dan jaga kesehatan. Kebersihannya juga dijaga dan tetap berada di kawasan pelatnas Cipayung.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/tokoh/menpora.jpg" class="testimonial-img" alt="">
          <h3>Zainudin Amali</h3>
          <h4>Menpora Republik Indonesia</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Maintain at least 1 metre (3 feet) distance between yourself and others. Why? When someone coughs, sneezes, or speaks they spray small liquid droplets from their nose or mouth which may contain virus. If you are too close, you can breathe in the droplets, including the COVID-19 virus if the person has the disease.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/tokoh/who.jpg" class="testimonial-img" alt="">
          <h3>Tedros Adhanom</h3>
          <h4>Direktur Jendral WHO</h4>
        </div>

      </div>

    </div>
  </section>
  <!-- End Testimonials Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Rumah Sakit Rujukan</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-aceh">Aceh</li>
            <li data-filter=".filter-bengkulu">Bengkulu</li>
            <li data-filter=".filter-jakarta">Jakarta</li>
            <li data-filter=".filter-jabar">Jabar</li>
            <li data-filter=".filter-jateng">Jateng</li>
            <li data-filter=".filter-jatim">Jatim</li>
            <li data-filter=".filter-kriau">Kep Riau</li>
            <li data-filter=".filter-lampung">Lampung</li>
            <li data-filter=".filter-riau">Riau</li>
            <li data-filter=".filter-sumatera">Sumatera</li>
            <li data-filter=".filter-yogyakarta">Yogyakarta</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-2 col-md-6 portfolio-item filter-aceh">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/Aceh/zainalAbidin.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/Aceh/zainalAbidin.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-bengkulu">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/Bengkulu/damrahManna.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/Bengkulu/damrahManna.png" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-jakarta">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/Jakarta/gatotSubroto.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/Jakarta/gatotSubroto.png" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-jakarta">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/Jakarta/durenSawit.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/Jakarta/durenSawit.png" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>          
        
        <div class="col-lg-2 col-md-6 portfolio-item filter-jabar">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/JawaBarat/hasanSadikin.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/JawaBarat/hasanSadikin.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-jabar">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/JawaBarat/bekasi.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/JawaBarat/bekasi.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-jateng">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/JawaTengah/banyumas.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/JawaTengah/banyumas.png" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-jatim">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/JawaTimur/soedonoMadiun.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/JawaTimur/soedonoMadiun.png" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-kriau">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/KepulauanRiau/muhammadSani.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/KepulauanRiau/muhammadSani.png" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-lampung">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/Lampung/ahmadYaniMetro.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/Lampung/ahmadYaniMetro.png" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-riau">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/Riau/arifinAchmad.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/Riau/arifinAchmad.png" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-sumatera">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/Sumatera/kabanjahe.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/Sumatera/kabanjahe.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-sumatera">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/Sumatera/padangSidempuan.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/Sumatera/padangSidempuan.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-yogyakarta">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/Yogyakarta/wates.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/Yogyakarta/wates.png" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-aceh">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/Aceh/cutMeutia.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/Aceh/cutMeutia.png" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-bengkulu">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/Bengkulu/argaMakmur.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/Bengkulu/argaMakmur.png" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-jakarta">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/Jakarta/mintoharjo.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/Jakarta/mintoharjo.png" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 portfolio-item filter-jabar">
          <div class="portfolio-wrap">
            <img src="assets/img/logoRumahSakit/JawaBarat/slametGarut.png" class="img-fluid" alt="">
            <div class="portfolio-info">                
              <p class="mt-3">Nama RS</p>
            </div>
            <div class="portfolio-links">
              <a href="assets/img/logoRumahSakit/JawaBarat/slametGarut.png" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="/detail-rs" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Portfolio Section -->    

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Pertanyaan Tentang Virus Corona</h2>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapsed" href="#faq-list-1">Apa Penyebab Virus Corona ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse" data-parent=".faq-list">
              <p style="text-align: left;">
                Infeksi virus Corona atau COVID-19 disebabkan oleh coronavirus, yaitu kelompok virus yang menginfeksi sistem pernapasan. Ada dugaan bahwa virus Corona awalnya ditularkan dari hewan ke manusia. Namun, kemudian diketahui bahwa virus Corona juga menular dari manusia ke manusia. Seseorang dapat tertular COVID-19 melalui berbagai cara, yaitu :
                <br><br>
                1. Tidak sengaja menghirup percikan ludah (droplet) yang keluar saat penderita COVID-19 batuk atau bersin
                <br><br>
                2. Memegang mulut atau hidung tanpa mencuci tangan terlebih dulu setelah menyentuh benda yang terkena cipratan ludah penderita COVID-19
                <br><br>
                3. Kontak jarak dekat dengan penderita COVID-19                  
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Bagaimana Mendiagnosis Virus Corona ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-parent=".faq-list">
              <p style="text-align: left;">
                Untuk menentukan apakah pasien terinfeksi virus Corona, dokter akan menanyakan gejala yang dialami pasien dan apakah pasien baru saja bepergian atau tinggal di daerah yang memiliki kasus infeksi virus Corona sebelum gejala muncul. Dokter juga akan menanyakan apakah pasien ada kontak dengan orang yang menderita atau diduga menderita COVID-19. Guna memastikan diagnosis COVID-19, dokter akan melakukan beberapa pemeriksaan berikut :
                <br><br>
                1. Rapid test untuk mendeteksi antibodi (IgM dan IgG) yang diproduksi oleh tubuh untuk melawan virus Corona
                <br><br>
                2. Swab test atau tes PCR (polymerase chain reaction) untuk mendeteksi virus Corona di dalam dahak
                <br><br>
                3. CT scan atau Rontgen dada untuk mendeteksi infiltrat atau cairan di paru-paru
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Bagaimana Mengobati Virus Corona ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-parent=".faq-list">
              <p style="text-align: left;">
                Infeksi virus Corona atau COVID-19 belum bisa diobati, tetapi ada beberapa langkah yang dapat dilakukan dokter untuk meredakan gejalanya dan mencegah penyebaran virus, yaitu :
                <br><br>
                1. Merujuk penderita COVID-19 yang berat untuk menjalani perawatan dan karatina di rumah sakit rujukan
                <br><br>
                2. Memberikan obat pereda demam dan nyeri yang aman dan sesuai kondisi penderita
                <br><br>
                3. Menganjurkan penderita COVID-19 untuk banyak minum air putih untuk menjaga kadar cairan tubuh
                <br><br>
                4. Menganjurkan penderita COVID-19 untuk melakukan isolasi mandiri dan istirahat yang cukup
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Apa saja kompilasi yang disebabkan oleh Virus Corona ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-parent=".faq-list">
              <p style="text-align: left;">
                Pada kasus yang parah, infeksi virus Corona bisa menyebabkan beberapa komplikasi berikut ini :
                <br><br>
                1. Pneumonia (infeksi paru-paru)
                <br><br>
                2. Infeksi sekunder pada organ lain
                <br><br>
                3. Gagal ginjal
                <br><br>
                4. Acute cardiac injury
                <br><br>
                5. Acute respiratory distress syndrome
                <br><br>
                6. Kematian
                <br><br>
              </p>
            </div>
          </li>

        </ul>
      </div>

    </div>
  </section>
  <!-- End Frequently Asked Questions Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p>Jl. Kliningan No.6, Turangga, Kota Bandung, Jawa Barat</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>email@smkn4bdg.sch.id</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>(022) 7303736</p>
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5719070133914!2d107.62670131485818!3d-6.94165499498469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e86413eb50ad%3A0xf9930b5268e3fee1!2sSMKN%204%20Bandung!5e0!3m2!1sid!2sid!4v1590170608754!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
  <!-- End Contact Section -->

</main>
<!-- End #main -->

<?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>  
<div id="preloader"></div>    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Diazs\Tugas\CovidProject\ProjectPWPBCorona\resources\views/welcome.blade.php ENDPATH**/ ?>