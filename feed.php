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
            <div class="abstract">If you find a feeling of helpless despair descending upon you every time you open up your email inbox, help is at hand—you can get on top of your messages without hiring a personal secretary, and we're here to show you how.</div>
          </article>
          <article>
              <img src="thumbnails/articles/thumb2.jpg" class="article-image" />
              <?php include 'layout/controls.php' ?>
              <div class="title">Heineken Wanted Beer Bottles To Be Bricks For People In Need</div>
              <div class="tagline">Lily Newman | 6/2/2013</div>
              <div class="abstract">Beer and soda companies are doing bottle redesigns left and right lately, and like so many things these overhauls seem to be motivated by brand appeal aka money. But you kind of can't blame manufacturers for wanting to, you know, sell more of their product or whatever. Free market! Anyway. It wasn't always like this.… </div>
          </article>
          <article>
              <img src="thumbnails/articles/thumb3.jpg" class="article-image" />
              <?php include 'layout/controls.php' ?>
              <div class="title">This Fabulously Oddball Galaxy Only Has One Spiral Arm</div>
              <div class="tagline">Lily Newman | 6/2/2013</div>
              <div class="abstract">Most galaxies, like the Milky Way, have two or more spiral "arms," but NGC 4725 only has one. Don't worry NGC 4725 you may be weird, but we still love you and think you're great looking. Space is a safe space.</div>
          </article>
           <article>
              <img src="thumbnails/articles/thumb4.jpg" class="article-image" />
              <?php include 'layout/controls.php' ?>
              <div class="title">Study The Physical Properties Floating In Your Breakfast</div>
              <div class="tagline">Lily Newman | 6/2/2013</div>
              <div class="abstract">There's so much noise about breakfast lately. Apparently, eating a morning meal makes you more focused, healthier and generally superhuman. It might seem like a lot of hype, but Andong He, a geologist at Yale, actually found a research topic in a bowl of cereal. So keep knocking that oatmeal back.</div>
          </article>
        </div>
        <div class="span3" id="sidebar">
          <?php include 'layout/user_sidebar.php' ?>
        </div>
      </div>
    
    </div> 
<?php include 'layout/share_box.php' ?> <!-- /share -->
    <!-- /container -->
  </body>
</html>