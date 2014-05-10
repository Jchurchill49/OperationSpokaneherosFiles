
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/jquery.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 7000, true);
	});
</script>



		
		
<div id="featured" >
  <ul class="ui-tabs-nav">
    <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="event_mages/image1-small.png" alt="" /><span><br />
  Java For Joes</span></a></li>
    <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="event_mages/image2-small.png" alt="" /><span><br />
    </span></a></li>
    <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="http://operationspokaneheroes.org/featured-content-slider/event_mages/image3-small.png" alt=""  /><span>Contact Us To Help </span></a> </li>
  </ul>
  <!-- First Content -->
  <div id="fragment-1" class="ui-tabs-panel" style=""> <img src="/public_html/featured-content-slider/event_mages/image1.jpg" alt="" width="390" height="240" />
  <div class="info" >
       
       
        <div id="upcoming"><a href="http://javaforjoes.org" target="_blank" >More Information</a></div>
      <p></p>
    </div>
  </div>
  <!-- Second Content -->
  <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style=""> <img src="http://operationspokaneheroes.org/featured-content-slider/event_mages/image1.jpg" alt="" width="400" height="250" />
        
     <div class="info" >
    
        <div id="upcoming"><a href="http://javaforjoes.org" target="_blank" >More Information</a></div>
        <p></p>
    </div>
  </div>
  <!-- Third Content -->
  <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style=""> <img src="http://operationspokaneheroes.org/featured-content-slider/event_mages/image3.jpg" alt="" width="400" height="250" />
        
     <div class="info" >
        <p><strong></strong></p>
        <div id="upcoming"><a href="mailto:contact@operationspokaneheroes.org">Contact Us </a></div>
        <p></p>
    </div>
  </div>



</div>
	