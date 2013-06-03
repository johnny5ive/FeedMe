<?php include 'layout/header.php' ?>

  <body>
    <?php include 'layout/banner.php' ?>

    <!-- container -->
    <div class="container-fluid">
     
      <div class="row-fluid">
        <div class="span9" id="content">
          <article>
            <img src="static/img/default.jpg" class="article-image" />
            <?php include 'layout/controls.php' ?>
            <div class="title">@Article.title</div>
            <div class="tagline">@Author.name | @Article.timestamp | @Article.articleType | @LIST(Categories.name) </div>
            <div>@Article.abstract: Synergistic visionary reinvent strategic channels visionary clicks-and-mortar back-end aggregate. Weblogs leverage embedded. </div>
          </article>
          <article>
              <img src="static/img/default.jpg" class="article-image" />
              <?php include 'layout/controls.php' ?>
              <div class="title">@Article.title</div>
              <div class="tagline">@Author.name | @Article.timestamp | @Article.articleType | @LIST(Categories.name)</div>
              <div>@Article.abstract: Synergistic visionary reinvent strategic channels visionary clicks-and-mortar back-end aggregate. Weblogs leverage embedded. </div>
          </article>
          <article>
              <img src="static/img/default.jpg" class="article-image" />
              <?php include 'layout/controls.php' ?>
              <div class="title">@Article.title</div>
              <div class="tagline">@Author.name | @Article.timestamp | @Article.articleType | @LIST(Categories.name)</div>
              <div>@Article.abstract: Synergistic visionary reinvent strategic channels visionary clicks-and-mortar back-end aggregate. Weblogs leverage embedded. </div>
          </article>
        </div>
        <div class="span3" id="sidebar">
          <?php include 'layout/user_sidebar.php' ?>
        </div>
      </div>
    
    </div> 
    <div class="share mrl" id="share-box">
  <ul>
    <li>
      <label class="share-label" for="share-toggle2">Facebook</label>
      <input type="checkbox" data-toggle="switch" />
    </li>
    <li>
      <label class="share-label" for="share-toggle4">Twitter</label>
      <input type="checkbox" checked="" data-toggle="switch" />
    </li>
    <li>
      <label class="share-label" for="share-toggle6">Pinterest</label>
      <input type="checkbox" data-toggle="switch" />
    </li>
  </ul>
  <a href="#" class="btn btn-primary btn-block btn-large" id="share-button">Share</a>
</div> <!-- /share -->
    <!-- /container -->
  </body>
</html>