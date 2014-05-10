<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Featured Content Slider Using jQuery - Web Developer Plus  Demos</title>
<link rel="stylesheet" type="text/css" href="../featured-content-slider/featured-content-slider/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
	});
</script>
<style type="text/css">
<!--
.upcoming {}







#upcoming  a {
	display: block;
	font-weight: bold;color:#00CCFF;
	text-decoration: none;
	font-weight: bold;

	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:11px;	
}

#upcoming a:hover {
	color: #FFFFFF;
	background-color: #0A074E;
}



}
-->
</style>
</head>
<body>
<div id="featured" >
  <ul class="ui-tabs-nav">
    <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="../featured-content-slider/featured-content-slider/images/image1-small.png" alt="" /><span>Holiday Care Packages for Local Deployed Navy Reserve Troops</span></a></li>
    <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="../featured-content-slider/featured-content-slider/images/image2-small.png" alt="" /><span>Happy Holidays</span></a></li>
    <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="../featured-content-slider/featured-content-slider/images/image3-small.png" alt="" /><span>Contact Us To Help </span></a> </li>
  </ul>
  <!-- First Content -->
  <div id="fragment-1" class="ui-tabs-panel" style=""> <img src="../featured-content-slider/featured-content-slider/images/image1.jpg" alt="" />
      <div class="info" >
        <h2><a href="#" >Holiday Care Package</a></h2>
        <p>Operation Spokane Heroes is collecting items for Holiday Care Packages to be 
          sent to deployed Navy troops from our local Naval Reserve Center.....</p>

         <div id="upcoming"><a href="../pdf/Holiday Navy Care Packages Media Advisory.pdf" target="_blank" >More Information/Request List</a></div>
        </p>
      </div>
  </div>
  <!-- Second Content -->
  <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style=""> <img src="../featured-content-slider/featured-content-slider/images/image2.jpg" alt="" />
      <div class="info" >
        <h2><a href="#" >Check back for December events</a></h2>
        <p>
          <!--Vestibulum leo quam, accumsan nec porttitor a, euismod ac tortor. Sed ipsum lorem, sagittis non egestas id, suscipit....<a href="#" >read more</a>-->
        </p>
      </div>
  </div>
  <!-- Third Content -->
  <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style=""> <img src="../featured-content-slider/featured-content-slider/images/image3.jpg" alt="" />
      <!--     <div class="info" >  
         <h2><a href="#" >35 Amazing Logo Designs</a></h2>  
         <p>liquam erat volutpat. Proin id volutpat nisi. Nulla facilisi. Curabitur facilisis sollicitudin ornare....<a href="#" >read more</a></p>  
         </div> -->
  </div>
  <!-- Fourth Content -->
</div>
</body>
</html>