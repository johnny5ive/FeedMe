<?php include 'layout/header.php' ?>

<body>
  <?php include 'layout/banner.php' ?>

  <!-- container -->
  <div class="container-fluid">

    <div class="row-fluid">
      <div class="span9" id="content">
        <article>
          <img src="{%% Articles.thumbnailURL %%}" alt="{%% Articles.thumbnailURL %%}" class="article-image" />
          <?php include 'layout/controls.php' ?>
          <div class="title">{%% Articles.title %%}</div>
          <div class="tagline">{%% Articles.author %%} | {%% Articles.postDate %%}</div>
          <div class="contents">
            {%% Articles.content %%}
          </div>
        </article>
        <?php
        include 'layout/templates_comments.php';
        article_comments(12345);
        ?>
      </div>
      <div class="span3" id="sidebar">
        <?php include 'layout/user_sidebar.php';
        include 'layout/templates_article_sidebar.php';
        ?>
      </div>
    </div>
    
  </div>
  <?php include 'layout/share_box.php' ?> <!-- /share -->
  <!-- /container -->
</body>
</html>