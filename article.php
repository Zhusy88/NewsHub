<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Newshub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="../newshub/MyIndex.css" rel="stylesheet">

    <link href="../newshub/MyArticle.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>




  <div class="container">

<div class="o-single">
  <div class="o-single-content">

    <div id="article-header" class="o-single-content__header" style="background-image: url('http://ifanr-cdn.b0.upaiyun.com/wp-content/uploads/2017/06/oneplus.jpg')">
      <div class="o-single-content__body c-single-normal__header">
        <div class="c-article-header-meta">
          <a class="text-link" href="http://www.ifanr.com/category/%e8%8c%83%e8%af%84" target="_blank">
          <span class="glyphicon glyphicon-bookmark c-article-header-meta__category" id="article-cate">cate</span>
          </a>
          <span class="c-article-header-meta__time" id="article-date">date</span>
        </div>
        <h1 class="c-single-normal__title" id="article-title"title</h1>
      </div>
    </div>      

    <div class="o-single-content__body o-single-content__body--main">
      <article class="o-single-content__body__content article-content">
        <!-- 文章内容 -->
      </article>
    </div>

  </div>
</div>

  </div>
    <!-- /.container -->



<script src="../newshub/js/vendor/jquery-3.2.1.min.js"></script>

<script>
$(function(){

	news_thread = <?php echo $_GET['id']; ?>;
 
  $.ajax({
    url: "php/getArticle.php",  
    type: "POST",
    data:{news_thread:news_thread},
    dataType: "json",
    success: function(reponse){

      var data = reponse;
      
      var title=document.getElementById("article-title");
      title.innerHTML=data[0].title;

      var date=document.getElementById("article-date");
      date.innerHTML=data[0].date;

      var cate=document.getElementById("article-cate");
      cate.innerHTML=data[0].cate;
      
      $('.article-content').append(data[0].content);
      
    },
      error: function(xhr, status, error){
        var err = 'xhr:' + xhr + '(' + xhr.responseText + ')';
        alert(err);
    }
  });

});
</script>





<script src="../newshub/js/bootstrap.js"></script>

  </body>
</html>
