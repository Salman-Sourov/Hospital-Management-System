{{View::make('include.header')}}
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<script type='text/javascript' src="js/jquery.min.js"></script> 
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
@yield('content')
<section class="inner-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>DEPARTMENTS</h1>
      </div>
    </div>
  </div>
</section>
<!-- end inner header -->
<section class="inner-content" style="padding-bottom:0;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 margin-bottom">
        <h1 class="title-bottom-line"><strong>EMERGENCY</strong> SERVICES</h1>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use <strong class="turquaz">Lorem Ipsum</strong> as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
      	<h3><strong>Some of our clinics</strong></h3><br>
      	<ul>
        	<li>Readable content of a page when looking at</li>
            <li>Its layout. The point of using </li>
            <li>Lorem Ipsum is that it has a more-or-less normal </li>
            <li>distribution of letters, as opposed to using </li>
            <li>'Content here, content here', making it look like readable</li>
        </ul>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
      	<h3><strong>Some of our special departments</strong></h3><br>
      	<ul>
        	<li>Readable content of a page when looking at</li>
            <li>Its layout. The point of using </li>
            <li>Lorem Ipsum is that it has a more-or-less normal </li>
            <li>distribution of letters, as opposed to using </li>
            <li>'Content here, content here', making it look like readable</li>
        </ul>
      </div>
    </div>
    <!-- end row --> 
  </div>
</section>
<section class="boxed-image-feature">
  <div class="container" style="position:relative; z-index:2;">
    <div class="row">
      
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="content-box"> 
        <div class="thumb"><img src="images/image4.jpg" alt="Image"></div>
          <div class="icon"><img src="images/icon6.png" alt="Image"></div>
          <h3>CARDIOLOGY</h3>
          <p>You need a doctor urgently outside of medicenter opening hours, call <strong>emergency</strong> appointmen</p>
          <a href="#" class="btn-ghost-md">READ MORE</a> </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="content-box">
        <div class="thumb"><img src="images/image6.jpg" alt="Image"></div>
          <div class="icon"><img src="images/icon5.png" alt="Image"></div>
          <h3>DENTAL</h3>
          <p>You need a doctor <strong>urgently</strong> outside of medicenter opening hours, call emergency appointmen</p>
          <a href="#" class="btn-ghost-md">READ MORE</a> </div>
      </div>
      
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="content-box"> 
        <div class="thumb"><img src="images/image2.jpg" alt="Image"></div>
          <div class="icon"><img src="images/icon2.png" alt="Image"></div>
          <h3>NEUROLOGY</h3>
          <p>You need a doctor urgently outside of medicenter opening hours, call <strong>emergency</strong> appointmen</p>
          <a href="#" class="btn-ghost-md">READ MORE</a> </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="content-box">
        <div class="thumb"><img src="images/image3.jpg" alt="Image"></div>
          <div class="icon"><img src="images/icon3.png" alt="Image"></div>
          <h3>OPHTHALMOLOGY</h3>
          <p>You need a doctor <strong>urgently</strong> outside of medicenter opening hours, call emergency appointmen</p>
          <a href="#" class="btn-ghost-md">READ MORE</a> </div>
      </div>
    </div>
  </div>
</section>
<!-- end section -->

{{View::make('include.footer')}}