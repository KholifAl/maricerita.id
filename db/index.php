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
                <li><a href="#home" class="home nav-link">Home</a></li>
                <li><a href="#about" class="about nav-link">About</a></li>
                <li><a href="#komentar" class="about nav-link">Cerita</a></li>
                <li><a href="#kata" class="about nav-link">Quotes</a></li>
                <li><a href="#kami" class="news nav-link">Kami</a></li>
                <li><a href="#contact" class="contact nav-link">Contact</a></li>
            </ul>
            <div>
                <a class="btn-box" href="login/">Login</a>
            </div>
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
            <form action="kat.php" method="post">
                <div class="col-area2">
                    <textarea style="width: 450px" class="custom-area" name="kata" placeholder="Tulis Quotes..." maxlength="40"></textarea>
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
        <br><br><br>
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
            <h1 style="font-size: 50px;">About Us</h1>
            <div class="kartu">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="assets/img/dapa.jpg" alt="Daffa Zacky" style="width: 300px; height: 400px">
                        </div>
                        <div class="flip-card-back">
                            <h1>Daffa Zacky Primanda</h1>
                            <p>21301241047</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="assets/img/kolip.jpg" alt="Kholif" style="width:300px; height: 400px">
                        </div>
                        <div class="flip-card-back">
                            <h1>Kholif Al Hamdhany</h1>
                            <p>21301244016</p>
                        </div>
                    </div>
                </div>
            </div>
            <h2 style="font-size: 30px;">Mathematics Education</h2>
            <h2 style="font-size: 30px;">Faculty of Math and Sciences</h2>
            <h2 style="font-size: 30px;">Yogyakarta State University</h2>
            <br><br>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ec594c" fill-opacity="1" d="M0,224L10.9,197.3C21.8,171,44,117,65,96C87.3,75,109,85,131,112C152.7,139,175,181,196,202.7C218.2,224,240,224,262,208C283.6,192,305,160,327,128C349.1,96,371,64,393,58.7C414.5,53,436,75,458,101.3C480,128,502,160,524,192C545.5,224,567,256,589,240C610.9,224,633,160,655,144C676.4,128,698,160,720,186.7C741.8,213,764,235,785,208C807.3,181,829,107,851,64C872.7,21,895,11,916,37.3C938.2,64,960,128,982,176C1003.6,224,1025,256,1047,240C1069.1,224,1091,160,1113,128C1134.5,96,1156,96,1178,85.3C1200,75,1222,53,1244,80C1265.5,107,1287,181,1309,208C1330.9,235,1353,213,1375,218.7C1396.4,224,1418,256,1429,272L1440,288L1440,0L1429.1,0C1418.2,0,1396,0,1375,0C1352.7,0,1331,0,1309,0C1287.3,0,1265,0,1244,0C1221.8,0,1200,0,1178,0C1156.4,0,1135,0,1113,0C1090.9,0,1069,0,1047,0C1025.5,0,1004,0,982,0C960,0,938,0,916,0C894.5,0,873,0,851,0C829.1,0,807,0,785,0C763.6,0,742,0,720,0C698.2,0,676,0,655,0C632.7,0,611,0,589,0C567.3,0,545,0,524,0C501.8,0,480,0,458,0C436.4,0,415,0,393,0C370.9,0,349,0,327,0C305.5,0,284,0,262,0C240,0,218,0,196,0C174.5,0,153,0,131,0C109.1,0,87,0,65,0C43.6,0,22,0,11,0L0,0Z"></path></svg>
        <section id="contact" class="vh Mail">
            <h1 style="font-size: 50px;">Hubungi Kami</h1>
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
        <p>Masih Pemula Puh &#169; 2023, Project UTS PDW</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/script.js"></script>


</body>

</html>