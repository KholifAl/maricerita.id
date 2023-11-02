<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/swiper.css">



    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"rel="stylesheet">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <title>One Word For Today</title>
</head>

<body>

        <div class="bg-circle circ1"></div>
        <div class="bg-circle circ2"></div>
        <div class="bg-circle circ3"></div>



    <header>
    <nav>
            <img class="logo" src="assets/img/logo.png" alt="Satu Kata">
            <ul class="navigation">
                <li><a href="#home" class="home">Home</a></li>
                <li><a href="#about" class="about">About</a></li>
                <li><a href="#komentar" class="about">Cerita</a></li>
                <li><a href="#kata" class="about">Quotes</a></li>
                <li><a href="#kami" class="news">Kami</a></li>
                <li><a href="#contact" class="contact">Contact</a></li>
            </ul>
            <a href="login/" class="btnLogin-popup">Login</a>
            
        </nav>
        <!-- <div class="hamburger" id="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div> -->
    </header>

    <main>

        <div class="bgcon" id="blur" ></div>
        <div class="col-kom2" id="popup" >
            <h1 class="ab-text">Kata Untuk Hari Ini</h1>
            <form action="textarea.php" method="post">
                <div class="col-area2">
                    <textarea style="width: 450px" class="custom-area" name="komentar" placeholder="Tulis Quotes..." maxlength="40"></textarea>
                </div>
                <div class="foot">
                    <div class="bt-sub" onclick="toggle()" >Kembali</div>
                    <button type="submit" class="bt-sub">Posting</button>
                </div>
            </div>
        </form>
        </div>


        <!-- <div class="col-kom2" id="logout" >
            <h1 class="ab-text">Kata Untuk Hari Ini</h1>
            <form action="textarea.php" method="post">
                <div class="col-area2">
                    <textarea style="width: 450px" class="custom-area" name="komentar" placeholder="Tulis Quotes..." maxlength="40"></textarea>
                </div>
                <div class="foot">
                    <div class="bt-sub" onclick="toggle()" >Kembali</div>
                    <button type="submit" class="bt-sub">Posting</button>
                </div>
            </div>
        </form>
        </div> -->
    
    <section id="home" class="vh Judul">   
        <div class="container">
            <div class="kepala">
                <h1>One Word For Today</h1>
                <h4>Website ini berisi tentang satu kata untuk hari ini kok yaa</h4>
            </div>
            <div class="gambar">
                <img src="assets/img/gambar_utama.png" alt="gambar bagus">
            </div>
        </div>
        <?php
        unset($_SESSION['alert']);
        session_start();

        if (isset($_SESSION['loguname'])) {
        echo "Selamat Datang " . $_SESSION['loguname'] ." !";
        } else {
        echo "Anda Belum Login";
        }
        ?>
            <a href='logout.php' >Logout Akun</a>

    </section>
    
    <section id="about" class="vh About">

        <svg class="editorial" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 
                58-18 88-18s
                58 18 88 18 
                58-18 88-18 
                58 18 88 18
                v44h-352z" />
            </defs>
            <g class="parallax1">
                <use xlink:href="#gentle-wave" x="50" y="3" fill="#E99582" />
            </g>
            <g class="parallax2">
                <use xlink:href="#gentle-wave" x="50" y="0" fill="#F5CDBF" />
            </g>
            <g class="parallax3">
                <use xlink:href="#gentle-wave" x="50" y="9" fill="#f5f5f5" />
            </g>
            </svg>

    
        <div class="col">
            <div class="con">
                <img src="assets/img/page2.png" alt="">
            </div>
            <div class="ab-text">
                <h1>Mari Kita Bercerita.</h1>
                <h3>A Word For Today adalah sebuah website yang berfungsi sebagai wadah untuk saling berbagi kata-kata dari banyak orang. Website ini memiliki dua tipe form, yaitu Quotes dan Mari Cerita.</h3>
                <ol class="custom-ol">
                    <li>
                        <h3>Quotes adalah form untuk berbagi kutipan atau kata-kata bijak dari berbagai sumber. Pengguna dapat berbagi kutipan dari buku, film, lagu, atau sumber lainnya.</h3></li>
                    <li>
                        <h3>Mari Cerita adalah form untuk berbagi cerita atau pengalaman pribadi. Pengguna dapat berbagi cerita tentang kehidupan, pengalaman, atau hal-hal yang mereka sukai.</h3>
                    </li>
                </ol>
            </div>
        </div>
    </section>



    <section id="komentar" class="vh komentar">
        <div class="text-kom ">
            <div class="col-kom">
                <h1 class="ab-text">Ada Cerita Apa Hari Ini?</h1>
                <form action="textarea.php" method="post">
                    <div class="col-area">
                        <textarea class="custom-area" name="komentar" placeholder="Mulai Kisahmu..."></textarea>
                    </div>
                    <button type="submit" class="btn-box">
                        <a>Posting</a>
                    </button>
                </form>
            </div>
        </div>

        <div class="con-kom">
            <!-- <div class="scrollbar"></div> -->
                    <div class="container_kom">
                        
                        <div class="conkom2">

                            
                            <?php
                            include "koneksi.php";
                            $kom_sql = "SELECT * FROM komentar ORDER BY created_at DESC";
                            $result = mysqli_query($koneksi, $kom_sql);                          

                            if (mysqli_num_rows($result) > 0) { 
                                while ($row = mysqli_fetch_assoc($result)) {
                                    
                                    $name = $row['nama'];
                                    $pic_sql = "SELECT * FROM user WHERE user_name = '$name'";
                                    $res = mysqli_query($koneksi, $pic_sql) ;
                                    if ($row2 = mysqli_fetch_assoc($res)){
                                        $foto = $row2['profile'];
                                    }

                                    else {
                                        $foto = "base.png";
                                    };
                                    

                                    $mysqlTimestamp = $row["created_at"];

                                    $dateTime = new DateTime($mysqlTimestamp);

                                    $currentDateTime = new DateTime();
                                    $interval = $dateTime->diff($currentDateTime);

                                    if ($interval->y > 0) {
                                        $formattedTimestamp = $dateTime->format('M j, Y');
                                    } elseif ($interval->m > 0) {
                                        $formattedTimestamp = $interval->m . ' bulan';
                                    } elseif ($interval->d > 0) {
                                        $formattedTimestamp = $interval->d . ' hari';
                                    } elseif ($interval->h > 0) {
                                        $formattedTimestamp = $interval->h . ' jam';
                                    } elseif ($interval->i > 0) {
                                        $formattedTimestamp = $interval->i . ' menit';
                                    } else {
                                        $formattedTimestamp = 'just now';
                                    }

                                    // Output the Twitter-like formatted timestamp
                                    
                                    
                                    ?>
                                    
                                    <div class="post">
                                        <div class="post-header">
                                        <div class="post-circle">
                                        <img src="Upload/uploads/<?php echo $foto?>" alt="Profile picture">
                                    </div>
                                    <h2><?php echo $row["nama"] ?></h2>
                                    </div>
                                    <div class="post-content">
                                        <p><?php echo $row["komentar"] ?></p>
                                    </div>
                                    <div class="p-kom">
                                        <span><?php echo $formattedTimestamp?></span>
                                    </div>
                                    </div>
                                <?php
                                }
                            } else {
                                echo "<h3>Tidak ada Komentar yang tersimpan.<h3> <br>";
                            }
                            // Menutup koneksi
                            mysqli_close($koneksi);
                            ?>
                            
                            
                                
                        
                        </div>
                        <div class="kom-but">
                            
                        <?php
                        include "koneksi.php";
                        if (isset($_SESSION['uname'])) {
                        $uname = $_SESSION['uname'];
                        $sql = "SELECT * FROM user WHERE user_name ='$uname'";
                        $result = mysqli_query($koneksi, $sql);
                        $row = mysqli_fetch_assoc($result);
                        
                        ?>
                                <div class="bt-circle">
                                    <img src="Upload/uploads/<?=$row['profile']?>" alt="Foto Profil">
                                </div>

                                <!-- <div class="sub-menu-wrap">
                                    <div class="sub-menu">

                                        <h2>Kholif Al Hamdhany</h2>
                                    </div>
                                </div> -->

                            <!-- <div class="dropdown-square"></div> -->
<!-- 
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div> -->

                        <?php 
                        } else { 
                            
                        ?>
                        <!-- <div class="bt-circle">

                        </div> -->

                        <?php } ?>

                            <div id="scroll-up" class="bt-circle n"><i class='bx bx-chevron-up' ></i></div>
                            <div id="scroll-down" class="bt-circle n"><i class='bx bx-chevron-down' ></i></div>
                        </div>
                </div>
                
            </div>

            
        </section>


        <section id="kata" class="vh Kata">

            <div>
                <h1 class="ab-text k">Kata Untuk Hari Ini.</h1>
            </div>
            <div class="flex">
                <div class="kat-box">
                    <div class="card__container swiper">
                
                        <div class="card__content">
                            <div class="swiper-wrapper">


                                <article class="card__article swiper-slide">
                                    <div class="card__image">
                                    <!-- <img src="assets/img/avatar-1.png" alt="image" class="card__img"> -->
                                    <div class="card__shadow"></div>
                                </div>
                                <div class="card__data">
                                    <p class="card__description">
                                        Teman Adalah Asik Lho
                                    </p>
                                    <h3 class="card__name">Kell Dawx</h3>
                                </div>
                                </article>

                            
                                <?php
                                include "koneksi.php";
                                $kat_sql = "SELECT * FROM kata ORDER BY created_at DESC";
                                $kat_result = mysqli_query($koneksi, $kat_sql);

                                if (mysqli_num_rows($kat_result) > 0) { 
                                    while ($kat = mysqli_fetch_assoc($kat_result)) { ?>               
                                    
                                <article class="card__article swiper-slide">
                                    <div class="card__image">
                                    <!-- <img src="assets/img/avatar-1.png" alt="image" class="card__img"> -->
                                        <div class="card__shadow"></div>
                                    </div>
                                    <div class="card__data">
                                        <p class="card__description">
                                            " <?php echo $kat["kata"] ?> "
                                        </p>
                                        <h3 class="card__name">- <?php echo $kat["nama"] ?></h3>
                                    </div>
                                </article>

                                <?php
                                }
                            } else {
                                echo "<h3>Belum ada yang memberikan Quotes Hari ini.</h3> <br>";
                            } ?>

                            </div>
                        </div>

                        <!-- Navigation buttons -->
                <div class="swiper-button-next">
                    <i class='bx bx-chevron-right'></i>
                </div>

                <div class="swiper-button-prev">
                    <i class='bx bx-chevron-left'></i>
                </div>
                    

                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>
            </div>
                </div>
                <div class="btn-box kat">
                    <a onclick="toggle()" >Tulis Kata!</a>
                </div>

            </div>
            <svg class="four editorial" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 
                    58-18 88-18s
                    58 18 88 18 
                    58-18 88-18 
                    58 18 88 18
                    v44h-352z" />
                </defs>
                <g class="parallax1">
                    <use xlink:href="#gentle-wave" x="50" y="3" fill="#F5CDBF" />
                </g>
                <g class="parallax2">
                    <use xlink:href="#gentle-wave" x="50" y="0" fill="#E99582" />
                </g>
                <g class="parallax3">
                    <use xlink:href="#gentle-wave" x="50" y="9" fill="#EC594C" />
                </g>
              </svg>
        
        </section>
        
        <section id="kami" class="vh Kita">

            

            <h1>Meet Us</h1>
            <div class="kartu">
                <div class="front a">

                </div>
                <div class="back a">
                    <h1>Nickname</h1>
                    <h4>Nama Lengkap</h4>
                    <h4>NIM</h4>
                    <h4>Kelas</h4>
                </div>
            </div>
            <button class="arrow-left"></button>
            <button class="arrow-right"></button>
        </div>      
        <div class="swiper-container">
            <div class="mySwiper" effect="cards" grab-cursor="true">
                <div class="swiper-slide">Slide1</div>
                <div class="swiper-slide">Slide2</div>
                <!-- <swiper-slide>Slide 1</swiper-slide>
                <swiper-slide>Slide 2</swiper-slide> -->
                <!-- <swiper-slide>Slide 3</swiper-slide>
                <swiper-slide>Slide 4</swiper-slide>
                <swiper-slide>Slide 5</swiper-slide>
                <swiper-slide>Slide 6</swiper-slide>
                <swiper-slide>Slide 7</swiper-slide>
                <swiper-slide>Slide 8</swiper-slide>
                <swiper-slide>Slide 9</swiper-slide> -->
                </div>
        </div>

    </section>



        
        <section id="contact" class="vh Mail">



            <h1>Hubungi Kami</h1>
            <div class="sosmed">
                <a class="bundar ig"><i class='bx bxl-instagram'></i></a>
                <a class="bundar fb"><i class='bx bxl-facebook'></i></a>
                <a class="bundar x">
                    <svg id="xtwt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                    </svg>
                </a>
                <a class="bundar yt"><i class='bx bxl-youtube'></i></a>
            </div>
        </section>




    </main>

    <footer>
        <p>Belajar Dasar Pemrograman Web &#169; 2019, Tugas UTS PDW</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/script.js"></script>


</body>

</html>