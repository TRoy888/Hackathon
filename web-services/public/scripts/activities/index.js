$(document).ready(function(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("location is not supported");
    }
    function showPosition(position) {
      var p = {
        'lon':position.coords.longitude
        , 'lat':position.coords.latitude
      };
      console.log(p.lon);
      console.log(p.lat);

      $.ajax({
        url : "http://localhost:8888/Hackathon/web-services/public/get_activity/"+p.lon+"/"+p.lat
      }).done(function(textResults){
        console.log(textResults);
        var results = JSON.parse(textResults);
        for(var i = 0; i < results.length; ++i){
            // <ul>
            //   <div class="row">
            //     <div class="col-xs-3">
            //       <img src="https://pbs.twimg.com/profile_images/1158130486/freefood.jpg" alt="HTML tutorial" style="width:80px;height:80px;border:0">
            //     </div>
            //     <div class="col-xs-9">
            //       <h3>
            //         <?php echo $activity->activity_name;?>
            //       </h3>
            //     </div>
            //   </div>
            //   <hr>
            // </ul>
          var linkToDetail = "http://localhost:8888/Hackathon/web-services/public/activity";
          var ul = $("<ul></ul>");
          var a = $("<a></a>");
          a.attr("href",linkToDetail+"/"+results[i].id);
          var row = $("<div class='row'></div>");
          var img = $("<img>");
          img.attr("src","https://pbs.twimg.com/profile_images/1158130486/freefood.jpg");
          img.attr("alt", "Image is not available");
          img.attr("style", "width:80px;height:80px;border:0");
          var col1 = $("<div class='col-xs-3'></div>");
          var col2 = $("<div class='col-xs-9'></div>");
          var topic = $("<h3></h3>");
          topic.append(results[i].activity_name);
          var hr = $("<hr>");

          col1.append(img);
          col2.append(topic);
          row.append(col1);
          row.append(col2);
          a.append(row);
          ul.append(a);
          ul.append(hr);

          $("#list").append(ul);
        }
      });
    }
});
