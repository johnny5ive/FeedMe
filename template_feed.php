<?php include 'layout/header.php' ?>

  <body>
    <?php include 'layout/banner.php' ?>

    <!-- container -->
    <div class="container-fluid">
     
      <div class="row-fluid">
        <div class="span9" id="content">
          {% for article in articles %>
          <article>
            <img src="{thumbnails/articles/{{article.thumbnailURL}}.jpg}" class="article-image" />
            <?php include 'layout/controls.php' ?>
            <div class="title">{{article.title}}</div>
            <div class="tagline">{{article.author}} | {{article.postDate}}</div>
            <div class="abstract">{{article.abstract}}</div>
          </article>
          {% endofor %}
        </div>
        <div class="span3" id="sidebar">
          <?php include 'layout/template_user_sidebar.php' ?>
        </div>
      </div>
    
    </div> 
<?php include 'layout/share_box.php' ?> <!-- /share -->
    <!-- /container -->
  </body>
</html>