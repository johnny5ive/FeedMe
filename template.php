<?php include 'layout/header.php' ?>

  <body>
    <?php include 'layout/banner.php' ?>

    <!-- container -->
    <div class="container-fluid">
     
      <div class="row-fluid">
        <div class="span10" id="content">
          content
        </div>
        <div class="span2" id="sidebar">
          <div id="side_panel">
            <div class="panel rounded-top" id="user_panel">
              
              connected services<br>
              profile image - name<br>
            </div>
            <div class="panel" id="friends_panel">Friend liked your mom.</div>
            <div class="panel rounded-bottom" id="user_info">This person is active!</div>
          </div>
        </div>
      </div>
    
    </div> 
    <!-- /container -->
    
    <?php include 'layout/scripts.php' ?>

  </body>
</html>