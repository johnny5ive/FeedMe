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
          <div id="side_panel">
            <div class="panel rounded-top" id="user_panel">
              <img src="static/img/default.jpg" class="user-pic">
              USERNAME
              <div id="connected-services">
                <img src="static/img/facebook.png" class="service-image" />
                <img src="static/img/linkedin.png" class="service-image" />
                <img src="static/img/googleplus.png" class="service-image" />
                <div id="notification-image">122</div>
              </div>
            </div>
            <div class="panel" id="friends_panel">
              <div class="friend-activity">
                <img src="static/img/default.jpg" class="activity-pic"><span class="activity-title">Article Name</span><br />
                <span class="activity-user">Friend A</span> <span class="activity-description">commented on the following article!</span>
              </div>
              <div class="clearfloats">
              <div class="friend-activity">
                  <img src="static/img/default.jpg" class="activity-pic"><span class="activity-title">Article Name</span><br />
                  <span class="activity-user">Friend A</span> <span class="activity-description">commented on the following article!</span>
                </div>
              </div>
              <div class="clearfloats">
              <div class="friend-activity">
                  <img src="static/img/default.jpg" class="activity-pic"><span class="activity-title">Article Name</span><br />
                  <span class="activity-user">Friend A</span> <span class="activity-description">commented on the following article!</span>
                </div>
              </div>
              <div class="clearfloats">
              <div class="friend-activity">
                <img src="static/img/default.jpg" class="activity-pic"><span class="activity-title">Article Name</span><br />
                <span class="activity-user">Friend A</span> <span class="activity-description">commented on the following article!</span>
              </div>
            </div>

            </div>
            <div class="panel rounded-bottom" id="actives_panel">
              <span id="active-friends">Active Friends</span>
              <div class="carousel-wrapper">
                <ul id="friends-activity-carousel" class="jcarousel-skin-tango">
                  <li><img src="static/img/default.jpg" class="carousel-img" /></li>
                  <li><img src="static/img/default.jpg" class="carousel-img" /></li>
                  <li><img src="static/img/default.jpg" class="carousel-img" /></li>
                  <li><img src="static/img/default.jpg" class="carousel-img" /></li>
                  <li><img src="static/img/feedme.png" class="carousel-img"/></li>
                  <li><img src="static/img/default.jpg" class="carousel-img" /></li>
                  <li><img src="static/img/default.jpg" class="carousel-img" /></li>
                  <li><img src="static/img/default.jpg" class="carousel-img" /></li>
                  <li><img src="static/img/default.jpg" class="carousel-img" /></li>
                  <li><img src="static/img/feedme.png" class="carousel-img"/></li>
                </ul>
              </div>
            </div>
          </div>
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