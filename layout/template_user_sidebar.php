  <div id="side_panel">
    <div class="panel rounded-top" id="user_panel">
      <img src="static/img/{{users.picture}}" class="user-pic">
      {%% users.name %%}
      <div id="connected-services">
        <img src="static/img/facebook.png" class="service-image" />
        <img src="static/img/linkedin.png" class="service-image" />
        <img src="static/img/googleplus.png" class="service-image" />
        <div id="notification-image">{%% notificationCount(userID) %%}</div>
      </div>
    </div>
    <div class="panel" id="friends_panel">
      {% for activity in activities(userID) %}
      <div class="friend-activity">
        <img src="thumbnails/users/{{activity.picture}}" class="activity-pic"><span class="activity-title">{{activity.title}}</span><br />
        <span class="activity-user">{{activity.name}}</span> <span class="activity-description">commented on the above article!</span>
      </div>
      <div class="clearfloats"></div>
      {% endfor %}

    </div>
    <div class="panel rounded-bottom" id="actives_panel">
      <span id="active-friends">Active Friends</span>
      <div class="carousel-wrapper">
        <ul id="friends-activity-carousel" class="jcarousel-skin-tango">
          {% for friend in activities(userID) %}
          <li><img src="thumbnails/users/{friend.picture}" class="carousel-img" /></li>
          {% endfor %}
        </ul>
      </div>
    </div>
  </div>