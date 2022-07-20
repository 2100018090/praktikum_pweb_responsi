<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Proyek Pweb</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts      -->

<header>

    <a  href="#" class="logo"><i class="fas fa-utensils"></i>Resto Pras</a>

    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="#dishes">minuman</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#review">review</a>
        <a href="pengiriman.php">order</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="tampilan2.php" class="fas fa-shopping-cart"></a>
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Hidangan Spesial</span>
                    <h3>Sotong Goreng</h3>
                    <p>Jl Parangtritis Km.22 Kretek, Parangtritis, Kretek, Bantul, Yogyakarta</p>
                    <a href="#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/menu-19.jpg" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Hidangan Spesial</span>
                    <h3>Ikan Bakar Bawal</h3>
                    <p>Jl Parangtritis Km.22 Kretek, Parangtritis, Kretek, Bantul, Yogyakarta</p>
                    <a href="#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/menu-20.jpg" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Hidangan Spesial</span>
                    <h3>Sate Kambing</h3>
                    <p>Jl Parangtritis Km.22 Kretek, Parangtritis, Kretek, Bantul, Yogyakarta</p>
                    <a href="#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/menu-23.jpg" alt="">
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- dishes section starts  -->

<section class="dishes" id="dishes">

    <h3 class="sub-heading"> menu minuman </h3>
    <h1 class="heading"> minuman populer </h1>

    <div class="box-container">

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/menu-10.jpg" alt="">
            <h3 >es cincau cup</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>Rp 13.000</span>
            <a class="btn" href="pengiriman.html">masukan ke Keranjang</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/menu-11.jpg" alt="">
            <h3>es green tea</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>Rp 14.000</span>
            <a href="pengiriman.php" class="btn">masukan ke keranjang</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/menu-12.jpg" alt="">
            <h3>es lemon tea</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>Rp 15.000</span>
            <a href="pengiriman.php" class="btn">masukan ke keranjang</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/menu-13.jpg" alt="">
            <h3>alpukat kocok</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>Rp 16.000</span>
            <a href="pengiriman.php" class="btn">masukan ke keranjang</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/menu-14.jpeg" alt="">
            <h3>coffe latte</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>Rp 10.000</span>
            <a href="pengiriman.php" class="btn">masukan ke keranjang</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/menu-15.jpg" alt="">
            <h3>coffe hitam putih</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>Rp 15.000</span>
            <a href="pengiriman.php" class="btn">masukan ke keranjang</a>
        </div>

    </div>

</section>

<!-- dishes section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h3 class="sub-heading"> TENTANG MENU POPULER </h3>
    <h1 class="heading"> MENGAPA MEMILIH RESTO INI </h1><br><br>

    <div class="row">

        <div class="image">
            <img src="images/menu-20.jpg" alt="">
        </div>

        <div class="content">
            <h3>makanan terbaik di resto ini</h3>
            <p>Manfaat lainnya dari sate daging berguna untuk memperkuat tulang dan gigi. Kandungan vitamin A, B dan D yang ada dalam makanan ini sangat berguna untuk memperkuat tulang dan gigi sehingga jika anda mengkonsumsinya maka anda akan memiliki tulang yang kuat. Meningkatkan energi.</p>
            <p>Meningkatkan energi. Kandungan gizi yang ada dalam makanan ini sangat banyak seperti halnya kandungan protein, zat besi, sumber vitamin, mineral, lemak, kalori, kolesterol, dan mineral. Sehingga tidak heran banyak orang yang mengkonsumsi makanan ini sebagai asupan makanan yang menyehatkan.</p>

            <a href="https://www.bing.com/ck/a?!&&p=a45852962acfc81bJmltdHM9MTY1ODMzMjQ2NSZpZ3VpZD01MzZmYzYxZi00YmUyLTQ4MzgtOTQxOS0xMjJjMDAzZmY3MTImaW5zaWQ9NTE2MA&ptn=3&hsh=3&fclid=3aa066bc-0844-11ed-9ec4-b7f05c82355d&u=a1aHR0cHM6Ly9raGFzaWF0LmNvLmlkL21ha2FuYW4vc2F0ZS1rYW1iaW5nLmh0bWw&ntb=1" class="btn">Pelajari lebih lanjut</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h3 class="sub-heading"> menu makanan </h3>
    <h1 class="heading"> makanan populer </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/menu-16.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>nasi goreng special</h3>
                <p>Jl Parangtritis Dusun 1 Kretek, Parangtritis, Kretek, Bantul, Yogyakarta</p>
                <a href="pengiriman.php" class="btn">masukan keranjang</a>
                <span class="price">Rp 15.000</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-17.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>mei goreng special</h3>
                <p>Jl Parangtritis Dusun 1 Kretek, Parangtritis, Kretek, Bantul, Yogyakarta</p>
                <a href="pengiriman.php" class="btn">masukan keranjang</a>
                <span class="price">Rp 10.000</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-18.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>ayam bakar</h3>
                <p>Jl Parangtritis Dusun 1 Kretek, Parangtritis, Kretek, Bantul, Yogyakarta</p>
                <a href="pengiriman.php" class="btn">masukan keranjang</a>
                <span class="price">Rp 23.000</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-19.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>ikan bawal bakar</h3>
                <p>Jl Parangtritis Dusun 1 Kretek, Parangtritis, Kretek, Bantul, Yogyakarta</p>
                <a href="pengiriman.php" class="btn">masukan keranjang</a>
                <span class="price">Rp 25.000</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-20.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>sate kambing</h3>
                <p>Jl Parangtritis Dusun 1 Kretek, Parangtritis, Kretek, Bantul, Yogyakarta</p>
                <a href="pengiriman.php" class="btn">masukan keranjang</a>
                <span class="price">Rp 28.000</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-21.jpeg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>tongseng kambing</h3>
                <p>Jl Parangtritis Dusun 1 Kretek, Parangtritis, Kretek, Bantul, Yogyakarta</p>
                <a href="pengiriman.php" class="btn">masukan keranjang</a>
                <span class="price">Rp 20.000</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-23.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>sotong goreng</h3>
                <p>Jl Parangtritis Dusun 1 Kretek, Parangtritis, Kretek, Bantul, Yogyakarta</p>
                <a href="pengiriman.php" class="btn">masukan keranjang</a>
                <span class="price">Rp 25.000</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-22.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>udang goreng</h3>
                <p>Jl Parangtritis Dusun 1 Kretek, Parangtritis, Kretek, Bantul, Yogyakarta</p>
                <a href="pengiriman.php" class="btn">masukan keranjang</a>
                <span class="price">Rp 30.000</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-24.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>bakso</h3>
                <p>Jl Parangtritis Dusun 1 Kretek, Parangtritis, Kretek, Bantul, Yogyakarta</p>
                <a href="pengiriman.php" class="btn">masukan keranjang</a>
                <span class="price">Rp 12.000</span>
            </div>
        </div>

    </div>

</section>

<!-- menu section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h3 class="sub-heading"> customer's review </h3>
    <h1 class="heading"> komentar customer </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-5.jpeg" alt="">
                    <div class="user-info">
                        <h3>fikri</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Teksturnya crunchy banget, asli enak banget, kalian harus coba, Bumbunya berasa banget, langsung nyes banget di mulut</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-6.jpeg" alt="">
                    <div class="user-info">
                        <h3>wahyu</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Teksturnya crunchy banget, asli enak banget, kalian harus coba, Bumbunya berasa banget, langsung nyes banget di mulut</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-7.jpeg" alt="">
                    <div class="user-info">
                        <h3>melissa</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Teksturnya crunchy banget, asli enak banget, kalian harus coba, Bumbunya berasa banget, langsung nyes banget di mulut</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-8.jpeg" alt="">
                    <div class="user-info">
                        <h3>satria</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Teksturnya crunchy banget, asli enak banget, kalian harus coba, Bumbunya berasa banget, langsung nyes banget di mulut</p>
            </div>

        </div>

    </div>
    
</section>

<!-- review section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>lokasi</h3>
            <a>indonesia</a>
            <a>singapura</a>
            <a>timor leste</a>
            <a>thailand</a>
            <a>malaysia</a>
        </div>

        <div class="box">
            <h3>menu</h3>
            <a href="#">home</a>
            <a href="#">dishes</a>
            <a href="#">about</a>
            <a href="#">menu</a>
            <a href="#">reivew</a>
            <a href="#">order</a>
        </div>

        <div class="box">
            <h3>kontak info</h3>
            <a>0812-7567-1818</a>
            <a>0856-4373-5039</a>
            <a>muhammadkusprasetyo@gmail.com</a>
            <a>yogyakarta, indonesia - 400104</a>
        </div>

        <div class="box">
            <h3>social media</h3>
            <a href="https://www.facebook.com/">facebook</a>
            <a href="https://www.traveloka.com/id-id/">treveloka</a>
            <a href="https://www.instagram.com/">instagram</a>
            <a href="https://shopee.co.id/">shopee</a>
        </div>

    </div>

    <div class="credit"> copyright @ 2022 by <span>mr. muhammad kus prasetyo</span> </div>

</section>

<!-- footer section ends -->

<!-- loader part  -->
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>