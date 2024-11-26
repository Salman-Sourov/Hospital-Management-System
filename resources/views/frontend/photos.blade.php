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
        <h1>GALLERY</h1>
      </div>
    </div>
  </div>
</section>
<!-- end inner header -->
<section class="gallery">
  <div class="container">
    <div class="row">
      <div class="col-xs-12" style="margin-bottom:-34px">
        <h1 style="padding-bottom: -10px;" class="title-bottom-line"><strong>MILLENNIUM SPESIALIZED HOSPITAL</strong> PHOTOS</h1>
        
      </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
    @foreach($photos as $item)
    <div class="col-md-3 col-sm-4 col-xs-6 no-padding">
      <div style="margin-top:-7px;" class="thumb">
  
        <div style="height:100%; width:100% " class="desc"><a style="height:233px; width:233px;" href="/uploads/content/{{$item['content']}}" class="fancybox" rel="lightbox" title="{{$item['title']}}"><strong>{{$item['title']}}</strong><i class="ion-qr-scanner"></i></a></div>
        <img style=" vertical-align: middle; margin-top:10px; margin-bottom:3px;  width:600px;border-collapse: separate; color:#2d388c; background-size: 300px 100px; display: inline-block;
                    position: relative;overflow: hidden;
                    border: 2px solid #c8c9e5;" src="/uploads/content/{{$item['content']}}" alt="Image">
     
      </div>
    </div>
    @endforeach


  </div>
  <!-- end container -->
</section>


<span style="text-align: center;">
    {{ $photos->links() }}
  </span>


{{View::make('include.footer')}}