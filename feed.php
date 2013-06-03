<?php include 'layout/header.php' ?>

  <body>
    <?php include 'layout/banner.php' ?>

    <!-- container -->
    <div class="container-fluid">
     
      <div class="row-fluid">
        <div class="span9" id="content">
          <article>
            <img src="thumbnails/articles/thumb1.jpg" class="article-image" />
            <?php include 'layout/controls.php' ?>
            <div class="title">How to Conquer Your Inbox Once and For All</div>
            <div class="tagline">David Nield | 6/1/2013</div>
            <div>If you find a feeling of helpless despair descending upon you every time you open up your email inbox, help is at hand—you can get on top of your messages without hiring a personal secretary, and we're here to show you how.</div>
          </article>
          <article>
              <img src="thumbnails/articles/thumb2.jpg" class="article-image" />
              <?php include 'layout/controls.php' ?>
              <div class="title">Heineken Wanted Beer Bottles To Be Bricks For People In Need</div>
              <div class="tagline">Lily Newman | 6/2/2013</div>
              <div>Beer and soda companies are doing bottle redesigns left and right lately, and like so many things these overhauls seem to be motivated by brand appeal aka money. But you kind of can't blame manufacturers for wanting to, you know, sell more of their product or whatever. Free market! Anyway. It wasn't always like this.… </div>
          </article>
          <article>
              <img src="thumbnails/articles/thumb3.jpg" class="article-image" />
              <?php include 'layout/controls.php' ?>
              <div class="title">This Fabulously Oddball Galaxy Only Has One Spiral Arm</div>
              <div class="tagline">Lily Newman | 6/2/2013</div>
              <div>Most galaxies, like the Milky Way, have two or more spiral "arms," but NGC 4725 only has one. Don't worry NGC 4725 you may be weird, but we still love you and think you're great looking. Space is a safe space.</div>
          </article>
           <article>
              <img src="thumbnails/articles/thumb4.jpg" class="article-image" />
              <?php include 'layout/controls.php' ?>
              <div class="title">Study The Physical Properties Floating In Your Breakfast</div>
              <div class="tagline">Lily Newman | 6/2/2013</div>
              <div>There's so much noise about breakfast lately. Apparently, eating a morning meal makes you more focused, healthier and generally superhuman. It might seem like a lot of hype, but Andong He, a geologist at Yale, actually found a research topic in a bowl of cereal. So keep knocking that oatmeal back.</div>
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
                <img src="thumbnails/users/Brock_Kercher_Warden.jpg" class="activity-pic"><span class="activity-title">SpaceX launches space shuttle!</span><br />
                <span class="activity-user">Brock Warden</span> <span class="activity-description">commented on the above article!</span>
              </div>
              <div class="clearfloats">
              <div class="friend-activity">
                  <img src="thumbnails/users/Daniel_Paul_Vice_Archon.jpg" class="activity-pic"><span class="activity-title">Twinkies are coming back.</span><br />
                  <span class="activity-user">Daniel Paul</span> <span class="activity-description">commented on the above article!</span>
                </div>
              </div>
              <div class="clearfloats">
              <div class="friend-activity">
                  <img src="thumbnails/users/Exec_Jared1.jpg" class="activity-pic"><span class="activity-title">Bitcoins found on the street.</span><br />
                  <span class="activity-user">Exec Jared</span> <span class="activity-description">commented on the above article!</span>
                </div>
              </div>
              <div class="clearfloats">
              <div class="friend-activity">
                <img src="thumbnails/users/Johnathan_Faler.jpg" class="activity-pic"><span class="activity-title">Article Name</span><br />
                <span class="activity-user">Jonathan Faler</span> <span class="activity-description">commented on the above article!</span>
              </div>
            </div>

            </div>
            <div class="panel rounded-bottom" id="actives_panel">
              <span id="active-friends">Active Friends</span>
              <div class="carousel-wrapper">
                <ul id="friends-activity-carousel" class="jcarousel-skin-tango">
                  <li><img src="thumbnails/users/Brock_Kercher_Warden.jpg" class="carousel-img" /></li>
                  <li><img src="thumbnails/users/Johnathan_Faler.jpg" class="carousel-img" /></li>
                  <li><img src="thumbnails/users/Exec_Jared1.jpg" class="carousel-img" /></li>
                  <li><img src="thumbnails/users/Daniel_Paul_Vice_Archon.jpg" class="carousel-img" /></li>
                  <li><img src="static/img/default.jpg" class="carousel-img" /></li>
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