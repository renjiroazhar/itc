<!DOCTYPE html>
<html lang="en">

<head>
  <title>Information Technology Competition 2022</title>
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="icon" type="image/png" href="<?= base_url() ?>/favicon.ico"/>
  
</head>

<body>
  <div class="logoimage" >
    <img style="margin: 20px; width: 100px" src="<?= base_url() ?>/assets/img/Logo UDINUS FIK 2.png" alt="" data-aos="fade-up">
    <img style="margin: 20px; width: 100px" src="<?= base_url() ?>/assets/img/Logo HMTI 2.png" alt="" data-aos="fade-up">
    <img style="margin: 20px; width: 100px" src="<?= base_url() ?>/assets/img/Dinusfest2022.svg" alt="" data-aos="fade-up">
</div>
  <!--<img src="<?= base_url() ?>/assets/img/l2.png">-->
  <div class="container">
    <div class="txt txtintro" data-aos="fade-up" data-aos-duration='1000'>
      <h5 style="text-align: center; font-size:62px; color: white; text-shadow: 10px 10px black; ">DINUS FEST<br /></h5>
      <h5 style="text-align: center; font-size:62px; color: white; text-shadow: 10px 10px black; ">INFORMATION<br />
      </h5>
      <h5 style="text-align: center; font-size:62px; color: white; text-shadow: 10px 10px black; ">TECHNOLOGY<br /></h5>
      <h5 style="text-align: center; font-size:62px; color: white; text-shadow: 10px 10px black; ">COMPETITION<br />
      </h5>
      <h5 style="text-align: center; font-size:62px; color: white; text-shadow: 10px 10px black; ">2022<br /></h5>

    </div>
    <div class="row" data-aos="fade-up"data-aos-duration='1500'>
      <div class="logo-row">
        <img src="<?= base_url() ?>/assets/img/itc.png" alt="logo" class="logo">
      </div>
    </div>
    <a class="startbutton" href="#">
      <span></span>
      <div class="button" >
        START
      </div>
    </a>
  </div>
  <div class="animate">
    <!-- SVG Code -->
  <svg version="1.1" id="dinus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 300" enable-background="new 0 0 800 300" xml:space="preserve">
  <text transform="matrix(1 0 0 1 4.2921 210.0535)" font-size="110" text-align="center">DinusFest 2022</text>
  </svg>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    setTimeout(function(){
      $('.animate').fadeToggle();
    },2500);
    </script>

</body>

<body style="width:100%;text-align:center;overflow: hidden;   height: 100%;
overflow: hidden;
width: 100%;
position: fixed;">
  <div class="bottomPage">
    <div class="transition">
      <div class="cover cover1"></div>
      <div class="cover cover2"></div>
      <div class="cover cover3"></div>
    </div>
    <div class="transition2">
      <div class="cover cover1"></div>
      <div class="cover cover2"></div>
      <div class="cover cover3"></div>
    </div>
    <button type="button" class="btn-close btnBottom">
      <span class="icon-cross"></span>
    </button>
    <div class="container competition">
      <div class="txt" style="position: relative;">
        <h5 style="text-align: center; font-size:62px; color: white; text-shadow: 10px 10px black; ">SELECT
          COMPETITION<br /></h5>
      </div>
      <div class="card-container">
        <div class="card" onclick="lcc()" style="box-shadow: none;">
          <div class="card-image">
            <a style="padding: 135px 225px; border: 0; opacity: 0;" class="link"></a>
          </div>
        </div>
        <div class="card" onclick="bistik()" style="box-shadow: none;">
          <div class="card-image card2">
            <a style="padding: 135px 225px; border: 0; opacity: 0;" class="link2"></a>
          </div>
        </div>
      </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?= base_url() ?>/assets/js/main.js"></script>
<script>
  const link = document.querySelector(".link");
  const transition = document.querySelector(".transition");
  link.addEventListener("click", (e) => {
    e.preventDefault();
    transition.classList.add("slide");
    setTimeout(function() {
      window.location = link.href;
    }, 3000);
  });
</script>
<script>
  const link2 = document.querySelector(".link2");
  const transition2 = document.querySelector(".transition2");
  link2.addEventListener("click", (e) => {
    e.preventDefault();
    transition2.classList.add("slide2");
    setTimeout(function() {
      window.location = link2.href;
    }, 3000);
  });
</script>
<script>
  function lcc() {
    window.location.href = '<?= base_url("lomba-cerdas-cermat") ?>';
  }
      
  function bistik() {
    window.location.href = '<?= base_url("bisnis-tik") ?>';
  }
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</html>