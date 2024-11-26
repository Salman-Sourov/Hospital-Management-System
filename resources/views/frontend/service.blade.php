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
        <h1>All Service</h1>
      </div>
    </div>
  </div>
</section>
<section class="home-services text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="title-box">
          
          <h3>All Services in Millenium Specialized Hospital</h3>
        </div>
        <!-- end title-box -->
      </div>
      <!-- end col-12 -->
      @foreach($services as $item)
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="line">
            <div class="icon"><img src="{{asset('/uploads/content/'.$item['logo'])}}" alt="Icon"> </div>
          </div>
          <h3>{{$item->title}}</h3>

        </div>
        <!-- end content -->
      </div>
      @endforeach
      <!-- end col-3 -->
      
      <!-- end col-3 -->
     
      <!-- end col-3 -->
     
      <!-- end col-3 -->
      <div class="col-xs-12"> </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  
  </div>
  <!-- end container -->
  
</section>
<span style="text-align: center;">
    {{ $services->links() }}
  </span>



<!-- end section -->
{{View::make('include.footer')}}