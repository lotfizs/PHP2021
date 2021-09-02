<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<head>
    <div class="wrapper2">
        <img src="img/cookie2.jpg" alt="">
        <div class="content1">
            <header>Cookies Content</header>
            <p>This website use cookies to give you the best experience</p>
            <div class="buttons2">
                <button class="item">I understand</button>
                <a href="#" class="item">Learn More</a>
            </div>
        </div>
    </div>
<body>
<script>
    const cookieBox = document.querySelector(".wrapper2"),
        acceptBtn = cookieBox.querySelector(".buttons2 button");

    acceptBtn.onclick = ()=>{
        //1 month cookie regestrtion
        document.cookie = "CookieBy=Lzs; max-age="+60*60*24*30;
        if(document.cookie){
            cookieBox.classList.add("hide");
        }else{
            alert("Cookie can't be set!");
        }
    }
</script>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>


  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</head>
</html>
