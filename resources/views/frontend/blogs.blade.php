{{View::make('include.header')}}
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<script type='text/javascript' src="js/jquery.min.js"></script> 
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
@yield('content')



<style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

tr td {
  border: 1px solid #ddd;
  padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}
 td {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#656a6a;
  color: white;
}
</style>

<body style="background-image:none ;">
<section class="inner-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>BLOGS</h1>
      </div>
    </div>
  </div>
</section>
<!-- end inner header -->
<section class="inner-content news-list">
  <div class="container">
    <div class="row">
    
      <div class="col-xs-12">
        <h1 class="title-bottom-line"><strong>LATEST</strong> BLOGS</h1>
      </div>
      @foreach($blogs as $item)
      <div class="col-md-4 col-sm-4 col-xs-12"> <img src="/uploads/content/{{$item['image']}}" alt="Image"></div>
      <div class="col-md-8 col-sm-8 col-xs-12">
        <h3>{{$item->title}}</h3>
        <small>Posted <strong>{{$item->created_at}}</strong></small>
        <div  style="overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 5;
  -webkit-box-orient: vertical;">
        <p style="white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 200px;">{!!$item['description']!!}</p>
  </div>
        <a href="{{url('/blogdetails/'.$item['id'])}}" class="btn-turquaz-md">READ MORE</a>
      </div>
      <div class="col-xs-12">
        <hr>
      </div>
      @endforeach

    </div>




  </div>
</section>

<span style="text-align: center;">
    {{ $blogs->links() }}
  </span>

  
</body>


{{View::make('include.footer')}}