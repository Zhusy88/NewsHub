<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Newshub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <link href="MyIndex.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="css/MyLogin.css">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    <script src="../newshub/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>


  </head>
  <body>


    

  <div class="container-fluid" style="padding: 0 0px">

    <div style="margin-bottom: -1rem">
      <nav class="navbar navbar-inverse " role="navigation" style="border-radius: 0px">

      <div class="nav-center-block">
        <div class="navbar-header">
          <a href="#fakelink" class="navbar-brand">NewsHub</a>
        </div>
      
        <ul class="nav navbar-nav">
          <li class="active"><a href="#fakelink">首页</a></li>
          <li><a href="#fakelink">时事</a></li>
          <li><a href="#fakelink">科技</a></li>
          <li><a href="#fakelink">体育</a></li>
        </ul>
     

        <!-- Right Navbar Button -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人设置 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">个人信息</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header" style="color:#48c9b0">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>       
          </li>

          <?php
            
            if(isset($_SESSION['username'])){
              echo 11;
          ?>
            <li>
            <p class="navbar-text" id="user_name"><?php echo $_SESSION['username']?></p>
            </li>
            
            <li><a class="cd-logout" onclick="return submitLogOut()">登出</a></li>
          <?php   
            }
            else{
              echo 22;
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


</div>



  <div class="container">

        <div class="row" style="padding-bottom: 2rem">
        <div class="col-md-12">
          <div class="span12">
            <div class="carousel slide" id="carousel-news">

              <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#carousel-news"></li> 
                <li data-slide-to="1" data-target="#carousel-news"></li>
                <li data-slide-to="2" data-target="#carousel-news"></li>
              </ol>

              <div class="carousel-inner">

                <div class="item">
                  <img alt="" src="img/pic1" />
                  <div class="carousel-caption">
                    <h4>
                      明天凌晨 1 点苹果发布会，这是最全的预测
                    </h4>
                    <p>
                      对于开发者而言，这不仅是一次技术盛会，它可能是一次软件开发领域的新机遇，而对于数以亿计的苹果用户来说，这是 iPhone、Apple Watch 和 Mac 一次进化的发布会——新 iPhone 的肉体还要三个月才出襁褓，但它的灵魂即将在今晚现身。
                    </p>
                  </div>
                </div>

                <div class="item active">
                  <img alt="" src="img/pic2" />
                  <div class="carousel-caption">
                    <h4>
                      《极品飞车：复仇》将于11月10日正式发售
                    </h4>
                    <p>
                      EA官方刚刚公布了《极品飞车：复仇》的第一支预告片，从预告来看...对不起，太像《速度与激情》了。根据官方描述，主人公将和他的同伴在Fortune Valley与当地的霸权企业The House展开对决。从预告片中各位可以看到诸如福特野马GT、柯尼塞格Regera、经典的尼桑350Z以及GTR R34等车型。
                    </p>
                  </div>
                </div>

                <div class="item">
                  <img alt="" src="img/pic3" />
                  <div class="carousel-caption">
                    <h4>
                      E3 2017展前发布会预测：任天堂篇
                    </h4>
                    <p>
                    　去年对于任天堂来说是有点特别，他们只是诚恳地向玩家和媒体展示了一款游戏：《塞尔达传说：荒野之息》。但结果证明任天堂的决定是明智的，去年的展示给许多人留下了深刻的印象，游戏的发售也堪称盛况，这都为任天堂新主机 Switch 的首发奠定了坚实的基础。            
                    </p>
                  </div>
                </div>

              </div> 
              
              <a data-slide="prev" href="#carousel-news" class="left carousel-control">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              </a> 
              <a data-slide="next" href="#carousel-news" class="right carousel-control">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              </a>

            </div>
          </div>
        </div>
        </div>


      <div class="row">

        <div class="col-md-3">
          <div class="article-item">
            <div class="article-image">
              <img src="img/pic">
            </div>
              <a href="#people" class="article-label" target="_blank">人物</a>
              <a href="http://www.ifanr.com/849911" class="article-link cover-block" target="_blank" id="article-link"></a>
              <h3>Twitter 上被特朗普拉黑的用户上书白宫：不放出小黑屋就起诉！</h3>
              <time>06-09 10:57</time>

              <div class="article-src">
                <span class="glyphicon glyphicon-bookmark article-src-icon"></span>
                 <span class="article-src-text">澎湃新闻</span>
              </div>

          </div>
        </div>
      
        <div class="js-blog-list">

        </div>
      </div>
      
        <div class="row">
            <div class="load-more-card">
                <span class="js-load-more">加载更多</span>
            </div>
        </div>
        





        <h1>Hello, world!</h1>
    </div>
    <!-- /.container -->



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
                location.reload();
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

<!-- 实现点击加载更多/滚动加载 -->


<script src="js/loadmore/loadmore.js"></script>
<script>
$(function(){

function getData(config, offset,size){

  config.isAjax = true;
  $.ajax({
    url: "php/getNews.php",  
    type: "POST",
    dataType: "json",
    success: function(reponse){
    
      config.isAjax = false;

      var data = reponse;
      var sum = reponse.length;
      
      var result = "";
      
      /************业务逻辑块：实现拼接html内容并append到页面*****************/
      
      /*如果剩下的记录数不够分页，就让分页数取剩下的记录数
      * 例如分页数是5，只剩2条，则只取2条
      *
      * 实际MySQL查询时不写这个
      */
      if(sum - offset < size ){
        size = sum - offset;
      }

      var str = location.href;
      var arr = str.split("/");
      delete arr[arr.length-1];
      var dir = arr.join("/");

      /*使用for循环模拟SQL里的limit(offset,size)*/
      for(var i=offset; i< (offset+size); i++){
        result +='<div class="col-sm-3"><div class="article-item"> <div class="article-image"><img src="img/pic"></div><a href="#people" class="article-label" target="_blank">'
        + data[i].cate 
        +'</a><a href="'
        + dir 
        + 'article?id='
        + data[i].news_thread
        + '" class="article-link cover-block"  target="_blank"></a><h3>' 
        + data[i].title 
        + '</h3><time>'
        + data[i].date 
        + '</time><div class="article-src"><span class="glyphicon glyphicon-bookmark article-src-icon"></span><span class="article-src-text">'
        + data[i].src 
        +'</span></div></div></div>';
      }

      $('.js-blog-list').append(result);


      
      /*******************************************/
      
      /*隐藏more*/
      if ( (offset + size) >= sum){
        $(".js-load-more").hide();
        config.isEnd = true; /*停止滚动加载请求*/
        //提示没有了
      }else{
        $(".js-load-more").show();
      }
    },
      error: function(xhr, status, error){
        var err = 'xhr:' + xhr + '(' + xhr.responseText + ')';
        alert(err);
    }
  });
}
  
  $.loadmore.get(getData, {scroll: true, size:4});
});
</script>




    <!-- bootstrap.js -->

    <script src="../newshub/js/bootstrap.js"></script>

  </body>
</html>
