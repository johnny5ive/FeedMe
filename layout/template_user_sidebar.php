  <div id="side_panel">
    <div class="panel rounded-top" id="user_panel">
      <img src="static/img/{{user.userPic}}" class="user-pic">
      {{user.name}}
      <div id="connected-services">
        <img src="static/img/facebook.png" class="service-image" />
        <img src="static/img/linkedin.png" class="service-image" />
        <img src="static/img/googleplus.png" class="service-image" />
        <div id="notification-image">{{notification.count}}</div>
      </div>
    </div>
    <div class="panel" id="friends_panel">
      {% for activity in activities %}
      <div class="friend-activity">
        <img src="thumbnails/users/{{activity.userPic}}" class="activity-pic"><span class="activity-title">{{activity.title}}</span><br />
        <span class="activity-user">{{activity.user}}</span> <span class="activity-description">commented on the above article!</span>
      </div>
      <div class="clearfloats"></div>
      {% endfor %}

    </div>
    <div class="panel rounded-bottom" id="actives_panel">
      <span id="active-friends">Active Friends</span>
      <div class="carousel-wrapper">
        <ul id="friends-activity-carousel" class="jcarousel-skin-tango">
          {% for friend in active_friends %}
          <li><img src="thumbnails/users/{friend.userPic}" class="carousel-img" /></li>
          {% endfor %}
        </ul>
      </div>
    </div>
  </div>