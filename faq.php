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
<body>
<header>
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

<style>
  .accordion{
    display: flex;
    max-width: 1010px;
    width: 100%;
    align-items: center;
    justify-content: space-between;
    background: #fff;
    border-radius: 25px;
    padding: 45px 90px 45px 60px;
  }
  .accordion .image-box{
    height: 360px;
    width: 300px;
    margin-right: 20px;
  }
  .accordion .image-box img{
    height: 100%;
    width: 100%;
    object-fit: contain;
  }
  .accordion .accordion-text{
    width: calc(60% - 20px);
  }
  .accordion .accordion-text .title{
    font-size: 35px;
    font-weight: 600;
    color: red;
    font-family: 'Fira Sans', sans-serif;
  }
  .accordion .accordion-text .faq-text{
    margin-top: 25px;
    height: 263px;
    overflow-y: auto;
  }
  .faq-text::-webkit-scrollbar{
    display: none;
  }
  .accordion .accordion-text li{
    list-style: none;
    cursor: pointer;
  }
  .accordion-text li .question-arrow{
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .accordion-text li .question-arrow .question{
    font-size: 18px;
    font-weight: 500;
    color: #595959;
    transition: all 0.3s ease;
  }
  .accordion-text li .question-arrow .arrow{
    font-size: 20px;
    color: #595959;
    transition: all 0.3s ease;
  }
  .accordion-text li.showAnswer .question-arrow .arrow{
    transform: rotate(-180deg);
  }
  .accordion-text li:hover .question-arrow .question,
  .accordion-text li:hover .question-arrow .arrow{
    color: red;
  }
  .accordion-text li.showAnswer .question-arrow .question,
  .accordion-text li.showAnswer .question-arrow .arrow{
    color: red;
  }
  .accordion-text li .line{
    display: block;
    height: 2px;
    width: 100%;
    margin: 10px 0;
    background: rgba(0, 0, 0, 0.1);
  }
  .accordion-text li p{
    width: 92%;
    font-size: 15px;
    font-weight: 500;
    color: #595959;
    display: none;
  }
  .accordion-text li.showAnswer p{
    display: block;
  }
  
  @media (max-width: 994px) {
    body{
      padding: 40px 20px;
    }
    .accordion{
      max-width: 100%;
      padding: 45px 60px 45px 60px;
    }
    .accordion .image-box{
      height: 360px;
      width: 220px;
    }
    .accordion .accordion-text{
      width: 63%;
    }
  }
  @media (max-width: 820px) {
    .accordion{
      flex-direction: column;
    }
    .accordion .image-box{
      height: 250px;
      width: 250px;
      background: red;
      width: 100%;
      border-radius: 25px;
      padding: 30px;
    }
    .accordion .accordion-text{
      width: 100%;
      margin-top: 30px;
    }
  }
  @media (max-width: 538px) {
    .accordion{
      padding: 25px;
    }
    .accordion-text li p{
      width: 98%;
    }
  }
</style>
<section class="faq" id="faq">
    <div class="accordion">
        <div class="image-box">
          <img src="question.png" alt="">
        </div>
        <div class="accordion-text">
          <div class="title">Frequently Asked Question</div>
        <ul class="faq-text">
          <li>
            <div class="question-arrow">
              <span class="question">What do you mean by HTML & CSS?</span>
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, doloribus.</p>
            <span class="line"></span>
          </li>
          <li>
            <div class="question-arrow">
              <span class="question">What do you mean by JavaScript?</span>
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>JavaScript is a text-based programming language used both on the client-side and server-side that allows you to make web pages interactive</p>
            <span class="line"></span>
          </li>
          <li>
            <div class="question-arrow">
              <span class="question">From where you learned HTML & CSS?</span>
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, necessitatibus.</p>
            <span class="line"></span>
          </li>
          <li>
            <div class="question-arrow">
              <span class="question">Which code editor do you use?</span>
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, labore.</p>
            <span class="line"></span>
          </li>
          <li>
            <div class="question-arrow">
              <span class="question">Software you use for video editing?</span>
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, repudiandae!</p>
            <span class="line"></span>
          </li>
        </ul>
        </div>
      </div>
</section>

<footer id="footer">
    <div class="cont">
     <div class="inner">
      <div class="leftSide">
       <a href="https://j-class.id" class="logo hvO">
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