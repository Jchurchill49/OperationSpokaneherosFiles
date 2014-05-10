

  <link type="text/css" href="../events/ermy_event/css/style.css" media="screen" charset="utf-8" rel="stylesheet"  />

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" charset="utf-8"></script>
  <script type="text/javascript" src="../events/ermy_event/js/jquery.movingboxes.min.js" charset="utf-8"></script>
  <script type="text/javascript">
  $(function(){

   $('#slider-one').movingBoxes({
    startPanel  : 4,   // start with this panel
    width       : 300, // overall width of movingBoxes
    imageRatio  : 1    // Image ration set to 1:1
   });

   $('#slider-two').movingBoxes({
    startPanel  : 3,   // start with this panel
    width       : 600, // overall width of movingBoxes
    panelWidth  : .7,  // current panel width adjusted to 50% of overall width
    imageRatio  : 16/9 // Image ratio set to 16:9
   });

   // Example of how to move the panel from outside the plugin, only works on first selector (Use ID instead of class to target other movingboxes).
   // get: var currentPanel = $('.slider').data('movingBoxes').currentPanel(); // returns # of currently selected/enlarged panel
   // set: var currentPanel = $('.slider').data('movingBoxes').currentPanel(2); // scrolls to 2nd panel & returns 2.

   // Set up navigation links
   var i, t = '', len = $('#slider-one .panel').length + 1;
   for ( i=1; i<len; i++ ){
    t += '<a href="#" rel="' + i + '">' + i + '</a> ';
   }
   $('.dlinks')
    .find('span').html(t).end()
    .find('a').click(function(){
     $('#slider-one').data('movingBoxes').currentPanel( $(this).attr('rel') );
     return false;
    });

  });
 </script>



 <div id="wrapper">
  <div id="title"></div>

  <br /><br />



  <!-- Slider #1 -->
  <!-- end Slider #1 -->
  <br />
  <br />

  <!-- Slider #2 (images of slider #1 reversed) -->
  <div class="slider" id="slider-two">
  
  
  
  
  
  
  
    <div class="panel">
    <img src="../events/ermy_event/images/8.jpg" alt="picture" />
    <h2><!--News Heading</h2>
    <p>A very short exerpt goes here... <a href="http://flickr.com/photos/justbcuz/112479862/">more--></a></p>
   </div>
  
  
    <div class="panel">
    <img src="../events/ermy_event/images/7.jpg" alt="picture" />
    <h2><!--News Heading</h2>
    <p>A very short exerpt goes here... <a href="http://flickr.com/photos/justbcuz/112479862/">more--></a></p>
   </div>
  
  
  
  
  
  
  
  
  
  
  <div class="panel">
    <img src="../events/ermy_event/images/6.jpg" alt="picture" />
    <h2><!--News Heading</h2>
    <p>A very short exerpt goes here... <a href="http://flickr.com/photos/justbcuz/112479862/">more--></a></p>
   </div>
   <div class="panel">
    <img src="../events/ermy_event/images/5.jpg" alt="picture" />
    <h2><!--News Heading</h2>
    <p>A very short exerpt goes here... <a href="http://flickr.com/photos/fensterbme/499006584/">more--></a></p>
   </div>

   <div class="panel">
    <img src="../events/ermy_event/images/4.jpg" alt="picture" />
    <h2><!--News Heading</h2>
    <p>A very short exerpt goes here... <a href="http://flickr.com/photos/emikohime/294092478/">more--></a></p>
   </div>

   <div class="panel">
    <img src="../events/ermy_event/images/3.jpg" alt="picture" width="326" height="240" />
    <h2><!--News Heading</h2>
    <p>A very short exerpt goes here... <a href="http://flickr.com/photos/ruudvanleeuwen/468309897/">more--></a></p>
   </div>

   <div class="panel">
    <img src="../events/ermy_event/images/2.jpg" alt="picture" width="326" height="240" />
    <h2><!--News Heading</h2>
    <p>A very short exerpt goes here... <a href="http://flickr.com/photos/joshuacraig/2698975899/">more--></a></p>
   </div>

   <div class="panel">
    <img src="../events/ermy_event/images/1.jpg" alt="picture" />
    <h2><!--News Heading</h2>
    <p>A very short exerpt goes here... <a href="http://flickr.com/photos/justbcuz/112479862/">more--></a></p>
   </div>

  </div>


</div> <!-- end wrapper -->
