 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayumi Nihongo Gakkou</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-qiDyhAp6r2L94MpOE7/M6ftMQ7pcTwPsW3Gm5ld61GTc0ZOxDZhrEWUw77QkPWtFJZzv6aEjjE5bzVXNyvK8Mw==" crossorigin="anonymous" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body><header>
        <div class="logo"><a href="#"><img src="logo ayumi.png" alt=""></a></div>
            <ul class="navbar">
                <li><a href="">Beranda</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="translator.php">Translator</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="faq.php">Any Question?</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>
            <ul class="header-icons">

            </ul>
            <a href="login.php" class="action_btn">Daftar Dulu Yuk!</a>
    </header>

    <section class="home" id="home">
        <div class="home-text">
            <h4>PT. Ayumi Nihonggo Gakkou</h4>
            <h1><b>The Solution for
                Intercultural Communication!</b></h1>
            <p>"Memberi support terhadap pengembangan SDM berkualitas
                tinggi yang paham akan bahasa dan budaya kerja Jepang".</p>
        </div>

        <div class="home-api">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1310.671154229395!2d107.13418794876846!3d-6.320173574002018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699aefd01bfd2d%3A0xa39c292ab788fea6!2sPT.%20AYUMI!5e0!3m2!1sen!2sid!4v1705293563131!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>
<h2 align="center">MORE CONTENT COMING SOON!</h2>

<footer id="footer">
    <div class="cont">
     <div class="inner">
      <div class="leftSide">
        <img src="logo ayumi.png" alt="Ayumi Nihonggo Gakkou">
       </a>
       <h2>Ayumi Nihonggo Gakkou</h2>
       <div class="information">
        <div>
         <div class="icon">
            <i class='fas fa-map-marker-alt' style='font-size:36px'></i>
         </div>
         <div class="text">
          <p>Ruko CTC Blok B No 11</p>
          <p>Cikarang Selatan, Bekasi</p>
          <p>Indonesia - 17530</p>
          <br>
          <h4>Email : info@ayumi.co.id</p>
          <P>Telp. 021-8990 8258</P>
          <p>WhatsApp : 08979637115</p>
         </div>
        </div>
        <div>

   </footer>

   <p class="copyright">&copy;
    <script type="text/javascript">
    document.write(new Date().getFullYear());
    </script> Ayumi Nihonggo Gakkou All rights reserved.</p>
   </div>
       
   </div>
      <script>
        let li = document.querySelectorAll(".faq-text li");
        for (var i = 0; i < li.length; i++) {
          li[i].addEventListener("click", (e)=>{
            let clickedLi;
            if(e.target.classList.contains("question-arrow")){
              clickedLi = e.target.parentElement;
            }else{
              clickedLi = e.target.parentElement.parentElement;
            }
           clickedLi.classList.toggle("showAnswer");
          });
        }
      </script>
</section>
    <!--js link-->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>