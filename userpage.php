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
        <div class="friend-feed">
          <a href="article.html"><img src="http://fpoimg.com/175x175" alt="" class="pull-left"></a>
          <h1>This Color-Changing LED Chameleon Scarf Perfectly Matches Any Outfit</h1>
	        <h3><a href="#" class="user">User A</a> replied to your comment with the following:</h3>
	        <p><q>Synergistic visionary reinvent strategic channels visionary clicks-and-mortar back-end aggregate. Weblogs leverage embedded.</q> <a href="article.html">Read More</a></p>
	      </div>
        <div class="friend-feed">
  		    <a href="article.html"><img src="http://fpoimg.com/175x175" alt="" class="pull-left"></a>
  		    <h1>The iPad Cleverly Detects This Connected Picture Book's Page Turns</h1>
  		    <h3>This article was recently favorited by <a href="#" class="user">Friend C</a></h3>
  		    <p><q>The arrival of the iPad had many predicting the device would wipe out books, magazine, and newspapers once and for all. But their doomsday predictions were a little premature, and as the folks at engageLab demonstrate with this fantastic conceptual app, tablets and books can live in perfect harmony.</q> <a href="article.html">Read More</a></p>
	      </div>
        <div class="friend-feed">
        <a href="article.html"><img src="http://fpoimg.com/175x175" alt="" class="pull-left"></a>
  			<h1>Fight Bad Breath and Bathroom Clutter With This Toothbrush Cup</h1>
  			<h3>We recommend the following article for you to read!</h3>
  			<p><q>Counter clutter can be even worse in a bathroom which is typically a lot smaller than a kitchen. And if you find yourself constantly battling to find room to store things around the sink, you'll immediately see the genius behind this flippable cup that doubles as a way to rinse your mouth and a convenient spot to…</q> <a href="article.html">Read More</a></p>
	      </div>
      </div>
      <div class="span3">
        <ul class="friends-and-services" data-role="listview" data-inset="true">
          <li>
            <h4>Active Friends</h4>
		        <div class="thumb-container">
            <img src="http://fpoimg.com/80x80" alt="">
            <img src="http://fpoimg.com/80x80" alt="">
            <img src="http://fpoimg.com/80x80" alt="">
		        </div>
          </li>
		      <li><!-- <div class="thumb-container"> -->
            <h4>Connected Services</h4>
		        <div class="thumb-container">
            <img src="http://fpoimg.com/80x80" alt="">
		        <img src="http://fpoimg.com/80x80" alt="">
            <img src="http://fpoimg.com/80x80" alt="">
            </div>
          </li>
        </ul>
        <ul class="friend-activity" data-role="listview" data-inset="true">
        <li>
			    <img src="http://fpoimg.com/80x80" alt="">
			    <div><a href="#" class="user">Friend A</a> commented on @Article.title</div>
        </li>
        <li>
			    <img src="http://fpoimg.com/80x80" alt="">
			    <div><a href="#" class="user">Friend B</a> just read @Article.title</div>
        </li>
        <li>
			    <img src="http://fpoimg.com/80x80" alt="">
			    <div><a href="#" class="user">Friend C</a> favorited this: @Article.title</div>
        </li>
        <li>
			    <img src="http://fpoimg.com/80x80" alt="">
			    <div><a href="#" class="user">Friend D</a> commented on @Article.title</div>
        </li>
      </ul>
      </div>        
    </div>
    
  </div> <!-- /container -->
</body>
</html>
