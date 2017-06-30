<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>科技 | Newshub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">


    <link href="../css/MyIndex.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="../css/MyLogin.css">

    <link rel="shortcut icon" href="../img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    <script src="../js/vendor/jquery-3.2.1.min.js"></script>
    <script src="../js/main.js"></script>


  </head>
  <body>


  <?php
    include 'navbar.php';
  ?>





<div style="padding-bottom: 1.5rem;">

      <div class="c-archive-header o-full-width" style="background-image:url('../img/News/tech.jpg')">
            <div class="o-wrapper o-wrapper--large">
            <h1 class="c-archive-header__title">科技</h1>
            <p class="c-archive-header__desc"></p><p>艺术挑战技术，技术启发艺术。——约翰·拉塞特（John Lasseter</p>
      <p></p>
          </div>
      </div>


</div>



    <div class="container">

      <div class="row">
      
        <div class="js-blog-list">

        </div>
      </div>
      
        <div class="row">
            <div class="load-more-card">
                <span class="js-load-more">下面没有了</span>
            </div>
        </div>
        






    </div>
    <!-- /.container -->

    <!-- 底部栏 -->
    <?php include '../footer.php';?>

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
              url: "../php/signup.php",
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
              url: "../php/signin.php",
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
              url: "../php/logout.php",
              success: function(msg) {
                location.reload();
                //alert("登出成功！");
              }
          });
          return false;
      }
  </script>

<!-- 实现点击加载更多/滚动加载 -->


<script src="../js/loadmore/loadmore.js"></script>
<script>
$(function(){

function getData(config, offset,size){

  config.isAjax = true;
  $.ajax({
    url: "../php/getNews/getTechNews.php",  
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
      delete arr[arr.length-2];
      var dir = arr.join("/");
      dir=dir.substring(0,dir.length-1);

      /*使用for循环模拟SQL里的limit(offset,size)*/
      for(var i=offset; i< (offset+size); i++){
        //判断有无封面
        if(!data[i].pic){
          data[i].pic = "../img/pic";
        }

        result +='<div class="col-sm-3"><div class="article-item"> <div class="article-image"><img style="background-image: url('
        + data[i].pic
        +'"></div><a href="#people" class="article-label" target="_blank">'
        + data[i].cate 
        +'</a><a href="'
        + dir 
        + 'article?id='
        + data[i].title
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
  
  $.loadmore.get(getData, {scroll: true, size:8});
});
</script>




    <!-- bootstrap.js -->

    <script src="../js/bootstrap.js"></script>

  </body>
</html>
