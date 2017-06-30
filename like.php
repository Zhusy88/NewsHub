<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>订制| Newshub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <link href="css/MyIndex.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="css/MyLogin.css">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    <script src="../newshub/js/vendor/jquery-3.2.1.min.js"></script>



  </head>
  <body>


  <div class="container-fluid" style="padding: 0 0px">

    <div style="margin-bottom: -1.5rem">
      <nav class="navbar navbar-default" role="navigation" style="border-radius: 0px">

      <div class="nav-center-block">
        <div class="navbar-header">
          <a class="navbar-brand">NewsHub</a>
        </div>
      
        <ul class="nav navbar-nav">
          <li><a href="../newshub/index">首页</a></li>
          <li><a href="category/news.php">时事</a></li>
          <li><a href="category/tech.php">科技</a></li>
          <li><a href="category/sports.php">体育</a></li>
          <li><a href="category/ent.php">娱乐</a></li>
        </ul>
     

        <!-- Right Navbar Button -->
        <ul class="nav navbar-nav navbar-right">
          

          <?php
            
            if(isset($_SESSION['username'])){
             
          ?>
            <li class="active"><a href="#">订制</a></li>
            <li>
            <p class="navbar-text" id="user_name"><?php echo $_SESSION['username']?></p>
            </li>
            
            <li><a class="cd-logout" onclick="return submitLogOut()">登出</a></li>
          <?php   
            }
            else{
              
          ?>
          <div class="main_nav">
            <li  style="margin-right: 1rem;"><a class="cd-signin" href="#0">登陆</a></li>
            <li><a class="cd-signup" href="#0">注册</a></li>
          </div>

          <?php
            }
          ?>

        </ul>
      </div>
      </nav>

     </div> 
     
  </div>



<div id="main">

  <div class="cd-user-modal"> 

    <div class="cd-user-modal-container">

      <ul class="cd-switcher">
        <li class="f-l active"><a href="#0">登录</a></li>
        <li class="f-r"><a href="#0">注册</a></li>
      </ul>

      <div id="cd-login"> <!-- 登录表单 -->
        <form class="cd-form" onsubmit="return submitSignIn()">
          <p class="fieldset">
            <label class="image-replace cd-username" for="signin-username">用户名</label>
            <input class="full-width has-padding has-border" id="signin-username" type="text" placeholder="输入用户名">
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signin-password">密码</label>
            <input class="full-width has-padding has-border" id="signin-password" type="password"  placeholder="输入密码">
          </p>

          <p class="fieldset">
            <input type="checkbox" id="remember-me" checked>
            <label for="remember-me">记住登录状态</label>
          </p>

          <p class="fieldset">
            <input class="full-width2" type="submit" value="登 录">
          </p>
        </form>
      </div>

      <div id="cd-signup"> <!-- 注册表单 -->
        <form class="cd-form" onsubmit="return submitSignUp()">
          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-username">用户名</label>
            <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="输入用户名">
          </p>

          <p class="fieldset">
            <label class="image-replace cd-email" for="signup-email">邮箱</label>
            <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="输入mail">
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signup-password">密码</label>
            <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="输入密码">
          </p>

          <p class="fieldset">
            <input type="checkbox" id="accept-terms">
            <label for="accept-terms">我已阅读并同意 <a href="#0">用户协议</a></label>
          </p>

          <p class="fieldset">
            <input class="full-width2" type="submit" value="注册新用户">
          </p>
        </form>
      </div>

      <a href="#0" class="cd-close-form">关闭</a>
    </div>
  </div> 

</div>





      <div class="c-archive-header o-full-width" style="background-image:url('img/like.jpg')">
            <div class="o-wrapper o-wrapper--large">
            <h1 class="c-archive-header__title">订制</h1>
            <p class="c-archive-header__desc">你即你自由</p>
          </div>
        </div>




    <div class="container-fluid" id="footerRecPosts">
    <div class="container">
      <div class="row" style="padding-top: 5rem; padding-bottom: 5rem;">


            <div class="col-sm-3">
              <div class="article-item">
                <div class="like-image unlike">
                  <img style="background-image: url(img/News/news_like">
                  <a href="#">开启订制</a>
                </div>
                <a href="category/news.php" class="article-label" target="_blank">时事</a>
               
               
              
              </div>
            </div>

            <div class="col-sm-3">
              <div class="article-item">
                <div class="like-image like">
                  <img style="background-image: url(img/News/tech_like">
                  <a href="#">关闭订制</a>
                </div>
                <a href="category/tech.php" class="article-label" target="_blank">科技</a>
              
              </div>
            </div>

            <div class="col-sm-3">
              <div class="article-item">
                <div class="like-image like">
                  <img style="background-image: url(img/News/sports_like">
                  <a href="#">关闭订制</a>
                </div>
                <a href="category/sports.php" class="article-label" target="_blank">体育</a>
              
              </div>
            </div>

            <div class="col-sm-3">
              <div class="article-item">
                <div class="like-image unlike">
                  <img style="background-image: url(img/News/ent_like">
                  <a href="#">开启订制</a>
                </div>
                <a href="category/ent.php" class="article-label" target="_blank">娱乐</a>
              
              </div>
            </div>

            </div>

            <div class="row" style="padding-top: 5rem; padding-bottom: 5rem;"></div>

      </div>
    </div>

    </div>
    <!-- /.container -->


    <!-- 底部栏 -->
    <?php include 'footer.php';?>


      <!-- 提交注册！ -->
  <script>
      function submitSignUp() {
        //var name = $("[name='name']");
      //var password= $("[name='password']");
      username = document.getElementById('signup-username').value;
      passwd = document.getElementById('signup-password').value;
      email = document.getElementById('signup-email').value;

        //alert("start!");
          $.ajax({
              type: "POST",
              url: "php/signup.php",
              dataType: "json",
              data:{username:username,passwd:passwd,email:email},
              success: function(msg) {
                //alert(msg);
                alert("注册成功!");
              }
          });
          return false;
      }

      function submitSignIn() {
      username = document.getElementById('signin-username').value;
      passwd = document.getElementById('signin-password').value;

          $.ajax({
              type: "POST",
              url: "php/signin.php",
              dataType: "json",
              data:{username:username,passwd:passwd},
              success: function(msg) {
                //alert(JSON.stringify(msg));
                //alert(msg.state);
                if(msg.state == 1){
                  alert("登陆成功!");
                  location.reload();
                }
                else if(msg.state == 0){
                  alert("账号或密码错误！");
                }
                else if(msg.state == 2){
                  alert("请输入账号和密码！");
                }
                
              }
          });
          return false;
      }

      function submitLogOut() {
        //alert("start!");

          $.ajax({
              type: "POST",
              url: "php/logout.php",
              success: function(msg) {
                location.reload();
                //alert("登出成功！");
              }
          });
          return false;
      }
  </script>



    <!-- bootstrap.js -->

    <script src="../newshub/js/bootstrap.js"></script>

  </body>
</html>

