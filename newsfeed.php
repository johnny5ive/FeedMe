<?php include 'layout/header.php'; ?>
<body>
  <?php include 'layout/banner.php'; ?>

    <div class="container-fluid" id="maincontainer">
      <div class="row-fluid">
        <div class="span1" id="thumbnail">
          <img src="static/img/default.jpg"> 
          <img src="static/img/default.jpg">
          <img src="static/img/default.jpg">
        </div>
        <div class="span8 pull-left" id="content">
          <div class="article">
            <div class="title">@Article.title</div>
            <div class="tagline">@Author.name | @Article.timestamp | @Article.articleType | @LIST(Categories.name) </div>
            <div>@Article.abstract: Synergistic visionary reinvent strategic channels visionary clicks-and-mortar back-end aggregate. Weblogs leverage embedded. </div>
          </div>
          <div class="article">
              <div class="title">@Article.title</div>
              <div class="tagline">@Author.name | @Article.timestamp | @Article.articleType | @LIST(Categories.name)</div>
              <div>@Article.abstract: Synergistic visionary reinvent strategic channels visionary clicks-and-mortar back-end aggregate. Weblogs leverage embedded. </div>
          </div>
          <div class="article">
              <div class="title">@Article.title</div>
              <div class="tagline">@Author.name | @Article.timestamp | @Article.articleType | @LIST(Categories.name)</div>
              <div>@Article.abstract: Synergistic visionary reinvent strategic channels visionary clicks-and-mortar back-end aggregate. Weblogs leverage embedded. </div>
          </div>
        </div>
        <div class="span3" id="searchspan">
          <div>
            <h4>Smart Filter</h4>
          </div>
          <form class="navbar-search">
            <input type="text" class="search-query input-large" placeholder="Search" id="searchbox">
          </form>
          <div class="clearfloats"></div>
          <div class="text-center" id="catfilter">
            stuff goes here
          </div>  
        </div>  
      </div>
      
    </div> <!-- /container -->
    <?php include 'static/scripts.php'; ?>
  </body>
</html>
