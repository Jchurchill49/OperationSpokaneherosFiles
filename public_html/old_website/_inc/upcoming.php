<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Featured Content Slider Using jQuery - Web Developer Plus  Demos</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 7000, true);
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
    <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="cal_images/image2-small.png" alt="" /><span>Fri Dec 3, Christmas Carrousel Party </span></a></li>
    <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="cal_images/image2-small.png" alt="" /><span>Fri Dec 10, Toys for Tots Dinner</span></a></li>
    <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="cal_images/image3-small.png" alt="" /><span>Contact Us To Help </span></a> </li>
  </ul>
  <!-- First Content -->
  <div id="fragment-1" class="ui-tabs-panel" style=""> <img src="cal_images/image1.jpg" alt="" width="400" height="250" />
      <div class="info" >
        <h2><a href="#" >Christmas Carrousel Party For Our Local Military Families!</a></h2>
        <p><strong>December 3, 2010</strong></p>
        <p><strong>6:00-8:00PM, Spokane Riverfront Park</strong></p>
        <div id="upcoming"><a href="../pdf/CarrouselPoster.pdf" target="_blank" >More Information</a></div>
        </p>
    </div>
  </div>
  <!-- Second Content -->
  <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style=""> <img src="cal_images/image2.jpg" alt="" width="400" height="250"  />
      <div class="info" >
         <h2><a href="#" >Toys for Tots Dinner</a></h2>
        <p><strong>December 10, 2010</strong></p>
        <p><strong>4:30 until 7:30 pm, VFW Post 51, on 300 W.  Mission </strong></p>
        <div id="upcoming"><a href="../pdf/t4tspaghetti2010.pdf" target="_blank" >More Information</a></div>
        </p>
      </div>
  </div>
  <!-- Third Content -->
  <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style=""> <img src="cal_images/image3.jpg" alt="" width="400" height="250" />
       <div class="info" >
         <h2><a href="#" >Toys for Tots Dinner</a></h2>
        <p><strong>December 10, 2010</strong></p>
        <p><strong>4:30 until 7:30 pm, VFW Post 51, on 300 W.  Mission </strong></p>
        <div id="upcoming"><a href="../pdf/t4tspaghetti2010.pdf" target="_blank" >More Information</a></div>
        </p>
      </div>
  </div>
  <!-- Fourth Content -->
</div>
</body>
</html>