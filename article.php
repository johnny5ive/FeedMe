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
            <div class="title">Computers See Faces in the Clouds, Just Like You</div>
            <div class="tagline">Kelsey Campbell-Dollaghan | 05/27/2013 4:00PM</div>
            <div class="contents">
              <p>Humans are all about pattern recognition: we want—and maybe need?—to believe that there’s order and meaning behind everything we see and do in life. The future is divined in teacups, superstitions are put on random objects, and—of course—we see ourselves in everything around us. Like the sky.</p>

              <p>Shinseungback Kimyonghun, a Seoul-based tech art collective, focus largely on computer vision, so most of their work take the form of script, with results that often verge on poetic. Their latest project, Cloud Face, uses facial recognition to capture wisps and puffs of vapor that—for a brief instant—converge to form the likeness of a human face.</p>

              <p>Speaking over email today, the artists explained that the idea came about after they attempted to capture real human faces using a webcam strung to the end of fishing rod, hanging out a window. It returned a fair number of human visages—but it also picked up trees, grass, and random inanimate objects that the software recognized as human-enough. “I looked up in the sky and thought ‘What if I use this error and have it find faces in clouds?’,” Kim Yong Hun remembers. “The discovery of the error led me to explore computer’s vision itself.”</p>

              <p>So the duo set out to build a system that would capture cloud faces automatically. They built a custom script using Processing and the OpenCV facial detection library, and set up a DSLR pointed at the sky, which transmitted images to a computer where the program was running. Then, they sat back and let the magic happen:</p>

              <blockquote>As soon as I opened my eyes in the morning I would check out the sky if it had a 'proper' pattern for face detection... The faces used in the 'Cloud Face' composition were selected by us manually. That means the faces are agreed upon as face by the computer vision and our vision.</blockquote>

              <p>They ended up capturing over 150,000 images of the sky—in which their script detected 1,000 faces. Which isn’t a bad ratio, considering the odds?</p>

              <p>Cloud Faces builds on research being done by scientists who are interested in why—and how—our brains are so good at seeing faces in things like clouds, toast, and rotting wood. A 2007 article in The New York Times spoke to several scientists working on facial recognition, at least one of whom argued that it represents a crucial piece of human evolution:</p>

              <blockquote>Dr. Sinha of M.I.T. says that whether the hair-trigger response to faces is innate or learned, it represents a critical evolutionary adaptation, one that dwarfs side effects like seeing Beelzebub in a crumpled tissue. “The information faces convey is so rich — not just regarding another person’s identity, but also their mental state, health and other factors,” he said. “It’s extremely beneficial for the brain to become good at the task of face recognition and not to be very strict in its inclusion criteria. The cost of missing a face is higher than the cost of declaring a nonface to be a face.”</blockquote>

              <p>So before you tell Shinseungback Kimyonghun to get their heads out of the clouds, consider this: they're just forwarding the project of human evolution—albeit with the help of a piece of script.</p>
			</div>
          </article>
		  <?php
		    include 'layout/comments.php';
			article_comments(12345);
		  ?>
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