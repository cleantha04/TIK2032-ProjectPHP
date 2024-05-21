<?php
  require 'functions.php';
  $databaseblog = query("SELECT * FROM blog");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <meta name="theme-color" content="#ffffff" />
    <title>Cleantha Portfolio</title>
  </head>
  <body>
    <!-- Header -->
    <header class="header" id="header">
      <nav class="nav container">
        <div class="nav_menu">
          <ul class="nav_list">
            <li class="nav_item">
              <a href="#" class="nav_section">
                <span class="nav_name">Home</span>
              </a>
            </li>
            <li class="nav_item">
              <a href="#about" class="nav_section">
                <span class="nav_name">About</span>
              </a>
            </li>
            <li class="nav_item">
              <a href="#gallery" class="nav_section">
                <span class="nav_name">Gallery</span>
              </a>
            </li>
            <li class="nav_item">
              <a href="#myblog" class="nav_section">
                <span class="nav_name">My Blog</span>
              </a>
            </li>
            <li class="nav_item">
              <a href="#contact" class="nav_section">
                <span class="nav_name">Contact</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="nav_soc">
          <a href="https://github.com/cleantha04" target="_blank" class="icon_link none">
            <img src="img/github.png" />
          </a>
          <a href="https://www.instagram.com/cleanthahillary?igsh=MW9nejVnNmcxMDJrbA==" target="_blank" class="icon_link none">
            <img src="img/instagram.png" />
          </a>
          <img src="img/moon.png" class="moon-icon icon_link" id="theme-button" />
        </div>
      </nav>
    </header>

    <main>
      <div class="container">
        <!-- Landing page -->
        <div class="title">
          <div class="title-text">
            <h1>Hallo!!</h1>
            <h1 class="margin_min">Saya Cleantha.</h1>
            <h4 class="subtitle_lpg">| Seorang Mahasiswa Universitas Sam Ratulangi Manado |</h4>
          </div>
          <img src="img/Photo.jpg" alt="Your Image" class="title-image" />
        </div>

        <!-- About -->
        <section class="about_container" id="about">
          <h1>About me</h1>
          <p class="about_desc">
            Halo! Selamat datang di Website Saya Nama Saya Cleantha Polii, biasa di panggil Anta, hobi saya menonton, sekarang usia saya 19 tahun kelahiran tahun 2004, Saya seorang Mahasiswi yang berkuliah di Universitas Sam Ratulangi
            Fakultas Teknik Prodi Teknik Informatika.
          </p>
        </section>

        <!-- Gallery -->
        <section class="gallery" id="gallery">
          <div class="heading">
            <h1>My Gallery</h1>
          </div>
          <div class="gallery-container">
            <div class="box">
              <div class="box-img">
                <img src="img/Photo1.jpg" />
              </div>
            </div>
            <div class="box">
              <div class="box-img">
                <img src="/img/Photo2.jpg" />
              </div>
            </div>
            <div class="box">
              <div class="box-img">
                <img src="/img/Photo3.jpg" />
              </div>
            </div>
            <div class="box">
              <div class="box-img">
                <img src="/img/Photo4.jpg" />
              </div>
            </div>
            <div class="box">
              <div class="box-img">
                <img src="/img/Photo5.jpg" />
              </div>
            </div>
            <div class="box">
              <div class="box-img">
                <img src="/img/Photo6.jpg" />
              </div>
            </div>
          </div>
        </section>
      </div>

      <!-- Blog Section -->
    <section class="section_container" id="myblog">
        <div class="blog-section">
            <div class="container">
                <h2 class="text-center">My Blog</h2>
                <br />
                <?php foreach ($databaseblog as $blog_row): ?>
                <article>
                    <h2><?php echo htmlspecialchars($blog_row['judul']); ?></h2>
                    <p><?php echo nl2br(htmlspecialchars($blog_row['deskripsi'])); ?></p>
                    <br />
                    <p>Sumber: <a href="<?php echo htmlspecialchars($blog_row['sumber']); ?>" target="_blank"><?php echo htmlspecialchars($blog_row['sumber']); ?></a></p>
                </article>
                <br />
                <?php endforeach; ?>
            </div>
        </div>
    </section>

      <div class="container">
        <!-- Contact -->
        <section class="section_container contact" id="contact">
          <h1>Contact</h1>
          <div class="email">
            <h4 class="headerct">Email</h4>
            <span>cleanthapolii0411@gmail.com</span>
          </div>

          <div class="phone">
            <h4 class="headerct">Phone</h4>
            <span>+62 895-1072-9480</span>
          </div>

          <div class="location">
            <h4 class="headerct">Location</h4>
            <span>Manado, Indonesia</span>
          </div>
        </section>
      </div>
    </main>

    <script src="js/script.js"></script>
  </body>
</html>
