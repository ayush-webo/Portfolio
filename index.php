
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayush UI</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
  <body>

<div class="purple">
        <header class="main-header">
            <div class="t">MI-Ayush</div>
            <div class="nav">
                <div class="li">
                    <a href="./index.php" class="link">Service</a>
                    <a href="./index.php" class="link">About us</a>
                    <a href="./index.php" class="link">Contact</a>
                </div></div>
    <header class=".head">

        <?php if(!isset($_SESSION['username'])) { ?>
        <div id="dropdown">
            <button>LOGIN</button>
            <div id="dropdown-content">
                <a href="./login.php">Login into existing account</a>
                <a href="./register.php">Create a new account</a>
            </div>
        </div>

        <?php } else { ?>

        <div id="dropdown">
            <button><?php echo $_SESSION['username'] ?></button>
            <div id="dropdown-content">
                <a href="./changepwd.php">Change account password</a>
                <a href="./index.php?logout=true">Logout</a>
            </div>
        </div>

        <?php } ?>      
</header></header>
          <section class="main-sec">
          <section class="sec">
            <img src="./image/2023-06-04 (2).png" alt="" class="sec-img img-fluid">
            <h2 class="sec-h">A creative <br> company That's more</h2>
            <input type="search" name="search" id="" placeholder="WWW.GMAIL.COM" class="search">
          </section>
          <img src="./image/92921df1-2281-4c8d-8993-07c5c9268240.png" alt="" class="sec-img2 img-fluid">
        </section>

        <div class="f-box">
            <p class="oath"> An agency refers to a relationship comprising two parties,
                where one party, called the agent, represents the other party, called the principal. An agency is
                usually hired by the principal to perform an act or service on his behalf.
            </p>
            <p id="by">by Founder</p>
            <p id="founder">Majarul Islam</p>
        </div>
        <div class="flex-img ">
            <div class="img">
            <img class="img-1 img-fluid" src="./image/92921df1-2281-4c8d-8993-07c5c9268240.png" alt="12" ></div>
            <div class="dic">
              <h2 class="dic-h">Correct decision is the main purpose of this agency.</h2>
              <p class="dic-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus nulla neque explicabo veniam Aut
                dolorum fugiat temporibus sapiente quia, suscipit illo aperiam quae </p>
              </div></div></div>
    <div class="box-b">
      <div class="box" id="box1">
        <h1 class="box-h"> 01</h1> 
            <h2 class="box-hd">Planning</h2>
        </div>
        <div class="box" id="box2">
          <h1 class="box-h">02</h1>
          <h2 class="box-hd"> Experiment</h2>
        </div>
        <div class="box" id="box3">
          <h1 class="box-h">03</h1> 
          <h2 class="box-hd">Project</h2>
        </div>
    </div>
    
    <main class="main">
      <div class="main-txt">
        <h1 class="main-h">Here goes title about the cases datadash has on here</h1>
        <span class="main-s">Check out of our cases -></span>
      </div>
      <div class="card" id="card-1">
        <img src="./image/image.jpg" class="card-img-top img-fluid" alt="..." id="card-img1">
        <div class="card-body" id="card-body1">
          <p class="card-text" id="card-text1">
          <h4>check out of our cases</h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum
          perferendis fugiat consectetur exercitationem</p>
        </div>
      </div></main>
      <main class="main">
      <div class="card" id="card-2">
        <img src="./image/WhatsApp Image 2023-06-05 at 3.02.28 PM (1) (1).jpeg" class="card-img-top img-fluid" alt="..." id="card-img1">
        <div class="card-body" id="card-body2">
          <p class="card-text" id="card-text2">
          <h4>check out of our cases</h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum
          perferendis fugiat consectetur exercitationem</p>
        </div>
      </div>
      <div class="card" id="card-3">
        <img src="./image/WhatsApp Image 2023-06-05 at 3.02.29 PM (1).jpeg" class="card-img-top img-fluid" alt="..." id="card-img3">
        <div class="card-body" id="card-body3">
          <p class="card-text" id="card-text3">
          <h4>check out of our cases</h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum
          perferendis fugiat consectetur exercitationem</p>
        </div>
      </div>
    </main>
    <div class="st">
      <h2 class="notin">All you need to do is follow our steps</h2>
      <div class="steps">
        
        <div class="a1">
          <h2 class="num">01</h2>
          <hr class="hr">
          <h2 class="num-h">check out of our cases</h2>
          <p class="num-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dignissimos laborum, sed
            repudiandae
            quae doloribus! Maxime unde ducimus praesentium </p>
          </div>
          
          <div class="a2">
            <h2 class="num">02</h2>
          <hr class="hr">
          <h2 class="num-h">check out of our cases</h2>
          <p class="num-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dignissimos laborum, sed
            repudiandae
            quae doloribus! Maxime unde ducimus praesentium </p>
          </div>
          
          <div class="a3">
            <h2 class="num">03</h2>
          <h2 class="num-h">check out of our cases</h2>
          <p class="num-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dignissimos laborum, sed
            repudiandae
            quae doloribus! Maxime unde ducimus praesentium </p>
        </div>
      </div>
    </div>
        <div class="container">
            <h2 class="left">Concept</h2>
            <p class="right1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio est impedit amet hic laboriosam nesciunt ex, earum neque architecto quisquam, dolore exercitationem. Repellendus nesciunt enim dolorem voluptatem obcaecati, quae delectus?</p>
              </div>
          
              <footer>
                <div class="sec">
                    <h4>Product</h4>
                    <a href="#" class="d-block">Icon design</a>
                    <a href="#" class="d-block">Logo design</a>
                    <a href="#" class="d-block">UI/UX design</a>
                </div>
                <div class="sec">
                  <h4>Resources</h4>
                    <a href="#" class="d-block">Blog</a>
                    <a href="#" class="d-block">Support</a>
                    <a href="#" class="d-block">Newsletter</a>
                  </div>
                <div class="sec">
                  <h4>Community</h4>
                  <a href="#"class="d-block">Twitter</a>
                  <a href="#"class="d-block">Instagram</a>
                    <a href="#" class="d-block">Stack</a>
                    <a href="#" class="d-block">Dribble</a>
                  </div>
                  <div class="sec">
                    <h4>Support</h4>
                    <a href="#" class="d-block">My Account</a>
                    <a href="#" class="d-block">Help & support</a>
                    <a href="#" class="d-block">Contact</a>
                  </div>
                  <div class="sec">
                    <h4>Company</h4>
                    <a href="#" class="d-block">Privacy Policy</a>
                    <a href="#" class="d-block">Terms of service</a>
                    <a href="#" class="d-block">Code of Conduct</a>
                  </div>
            </footer>
<!--             
  <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
          </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div> -->
          <script src="./js/bootstrap.bundle.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
          <script type="text/javascript">
            document.getElementById("btn").onclick = function (){
              location.href="./register"
            }
          </script>
        </body>
        
        </html>