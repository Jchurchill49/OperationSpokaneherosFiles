
    <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAvBmA9jAEBi3CtHtAnG1VJxR0hCKsNOJVIWStSKyJbfaJjIiGiBRsOiqiOYO4aJEn-jl13L3L8xOyDw"></script>
    <script type="text/javascript">
 
    google.load("feeds", "1");
 
    function initialize() {
      var feed = new google.feeds.Feed("http://www.digg.com/rss/index.xml");
      feed.load(function(result) {
        if (!result.error) {
          var container = document.getElementById("feed");
          for (var i = 0; i < result.feed.entries.length; i++) {
            var entry = result.feed.entries[i];
            var div = document.createElement("div");
            div.appendChild(document.createTextNode(entry.title));
            container.appendChild(div);
          }
        }
      });
    }
    google.setOnLoadCallback(initialize);
 
    </script>
 
    <div id="feed"></div>
