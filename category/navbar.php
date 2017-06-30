<div class="container-fluid" style="padding: 0 0px">

    <div style="margin-bottom: -1.5rem">
      <nav class="navbar navbar-default" role="navigation" style="border-radius: 0px">

      <div class="nav-center-block">
        <div class="navbar-header">
          <a class="navbar-brand">NewsHub</a>
        </div>
      
        <ul class="nav navbar-nav">
          <li><a href="../index">首页</a></li>
          <li><a href="news.php">时事</a></li>
          <li><a href="tech.php">科技</a></li>
          <li><a href="sports.php">体育</a></li>
          <li><a href="ent.php">娱乐</a></li>
        </ul>
     

        <!-- Right Navbar Button -->
        <ul class="nav navbar-nav navbar-right">


          <?php
            
            if(isset($_SESSION['username'])){
             
          ?>
            <li><a href="../like.php">订制</a></li>
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