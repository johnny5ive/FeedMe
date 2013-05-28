<?php include("header.php"); ?>
<body>
  <div class="navbar navbar-inverse">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="brand" href="#"><img src="static/img/feedme.png" width="150px" /></a>
        
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li class="active"><a href="#hot">Hot</a></li>
            <li><a href="#new">New</a></li>
            <li><a href="#controversial">Controversial</a></li>
            <li><a href="#recommended">Recommended</a></li>
          </ul>
        </div>

         <div class="nav pull-right">
              <img src="static/img/default.jpg" class="nav pull-left" id="profile-image" />
              <ul class="nav">
                 <li class="up-item"><a href="#account">Jacob Vickers</a></li><br>
                 <li class="up-item"><a href="#usertype">User</a></li><br>
                 <li class="up-item"><a href="#notification">Notifications: 0</a></li>
              </ul>
              <ul class="nav">
                <li class="dropdown"> 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret large-caret"></b></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#userpage">User Center</a></li>
                    <li><a href="#settings">Settings</a></li>
                    <li><a href="#logout">Logout</a></li>
                  </ul>
                </li>
              </ul>
          </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span9" id="content">
        <article>
          <h1>Computers See Faces in the Clouds, Just Like You</h1>
          <h3>Kelsey Campbell-Dollaghan 05/27/2013 4:00PM</h3>
          <p>Humans are all about pattern recognition: we want—and maybe need?—to believe that there’s order and meaning behind everything we see and do in life. The future is divined in teacups, superstitions are put on random objects, and—of course—we see ourselves in everything around us. Like the sky.</p>

          <p>Shinseungback Kimyonghun, a Seoul-based tech art collective, focus largely on computer vision, so most of their work take the form of script, with results that often verge on poetic. Their latest project, Cloud Face, uses facial recognition to capture wisps and puffs of vapor that—for a brief instant—converge to form the likeness of a human face.</p>

          <p>Speaking over email today, the artists explained that the idea came about after they attempted to capture real human faces using a webcam strung to the end of fishing rod, hanging out a window. It returned a fair number of human visages—but it also picked up trees, grass, and random inanimate objects that the software recognized as human-enough. “I looked up in the sky and thought ‘What if I use this error and have it find faces in clouds?’,” Kim Yong Hun remembers. “The discovery of the error led me to explore computer’s vision itself.”</p>

          <p>So the duo set out to build a system that would capture cloud faces automatically. They built a custom script using Processing and the OpenCV facial detection library, and set up a DSLR pointed at the sky, which transmitted images to a computer where the program was running. Then, they sat back and let the magic happen:</p>

          <blockquote>As soon as I opened my eyes in the morning I would check out the sky if it had a 'proper' pattern for face detection... The faces used in the 'Cloud Face' composition were selected by us manually. That means the faces are agreed upon as face by the computer vision and our vision.</blockquote>

          <p>They ended up capturing over 150,000 images of the sky—in which their script detected 1,000 faces. Which isn’t a bad ratio, considering the odds?</p>

          <p>Cloud Faces builds on research being done by scientists who are interested in why—and how—our brains are so good at seeing faces in things like clouds, toast, and rotting wood. A 2007 article in The New York Times spoke to several scientists working on facial recognition, at least one of whom argued that it represents a crucial piece of human evolution:</p>

          <blockquote>Dr. Sinha of M.I.T. says that whether the hair-trigger response to faces is innate or learned, it represents a critical evolutionary adaptation, one that dwarfs side effects like seeing Beelzebub in a crumpled tissue. “The information faces convey is so rich — not just regarding another person’s identity, but also their mental state, health and other factors,” he said. “It’s extremely beneficial for the brain to become good at the task of face recognition and not to be very strict in its inclusion criteria. The cost of missing a face is higher than the cost of declaring a nonface to be a face.”</blockquote>

          <p>So before you tell Shinseungback Kimyonghun to get their heads out of the clouds, consider this: they're just forwarding the project of human evolution—albeit with the help of a piece of script.</p>
        </article>
      </div>

      <div class="span3">
        <ul class="relevant" data-role="listview" data-inset="true">
        <li data-role="list-divider">Relevant Articles</li>
        <li>
          <h4>Report: Chinese Hackers Have Stolen Sensitive US Weapon Design Files</h4>
          <img src="http://fpoimg.com/100x100" alt="">
          <div>@import Article.abstract to provide
          content for this section that can
          help entice the user to read the
          article.
          <span class="pull-right">Relevancy Score: ###</span></div>
        </li>
        <li>
          <h4>Would You Take a Flight Which Only Had One Pilot?</h4>
          <img src="http://fpoimg.com/100x100" alt="">
          <div>@import Article.abstract to provide
          content for this section that can
          help entice the user to read the
          article.
          <span class="pull-right">Relevancy Score: ###</span></div>
        </li>
        <li>
          <h4>Lego's Opening a School In Denmark</h4>
          <img src="http://fpoimg.com/100x100" alt="">
          <div>@import Article.abstract to provide
          content for this section that can
          help entice the user to read the
          article.
          <span class="pull-right">Relevancy Score: ###</span></div>
        </li>
      </ul>
        <!-- <div class="thumbnail" style="overflow:hidden;">
          <h4>@import Article.title</h4>
          <img src="http://fpoimg.com/100x100" alt="" class="pull-left">
          <p>@import Article.abstract to provide
          content for this section that can
          help entice the user to read the
          article.
          </p>
          <p class="pull-right">Relevancy Score ###</p>
        </div>
        <div class="thumbnail" style="overflow:hidden;">
          <h4>@import Article.title</h4>
          <img src="http://fpoimg.com/100x100" alt="" class="pull-left">
          <p>@import Article.abstract to provide
          content for this section that can
          help entice the user to read the
          article.
          </p>
          <p class="pull-right">Relevancy Score ###</p>
        </div>
        <div class="thumbnail" style="overflow:hidden;">
          <h4>@import Article.title</h4>
          <img src="http://fpoimg.com/100x100" alt="" class="pull-left">
          <p>@import Article.abstract to provide
          content for this section that can
          help entice the user to read the
          article.
          </p>
          <p class="pull-right">Relevancy Score ###</p>
        </div> -->
      </div>
    </div>
  </div> <!-- /container -->
</body>
</html>
