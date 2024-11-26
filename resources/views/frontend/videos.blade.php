{{View::make('include.header')}}
@yield('content')
<section class="inner-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>VIDEO GALLERY</h1>
      </div>
    </div>
  </div>
</section>
<!-- end inner header -->
<section class="gallery">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 margin-bottom">
        <h1 class="title-bottom-line"><strong>MILLENIUM VIDEO GALLERY</strong></h1>
        
      </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
      <div class="col-md-3 col-sm-4 col-xs-6 no-padding">
       
        <div class="desc"><iframe style="border-radius:18px;" width="300" height="200" src="https://www.youtube.com/embed/O_fOI98Fh64?autoplay=1&mute=1">
            </iframe></div>
       
      </div>
     
  </div>
  <!-- end container -->
</section>






{{View::make('include.footer')}}