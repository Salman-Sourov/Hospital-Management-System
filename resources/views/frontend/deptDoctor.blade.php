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
        <h1>DOCTORS</h1>
      </div>
    </div>
  </div>
</section>
<!-- end inner header -->
<section class="specialists">
  <div class="container">
    <div class="row">

      <div style="border-radius:4px;height:250px; font-size:12px;  overflow: scroll; width:100%; background-color:#f3f3f3; padding:20px; margin-top:-64px; border-bottom: 1px solid #cccfe5;" class="col-xs-12 margin-bottom">
      <a style="padding:6px ; margin:2px; background-color:#f1f7fb; border-radius:6px;border-bottom: 1px solid #999;" class="btn btn-primary" href="{{url('/doctors/')}}" role="button">All Doctor</a>
        @foreach($departments as $item)
        <a style="padding:6px ;border-bottom: 1px solid #999; margin:2px; background-color:#f1f7fb; border-radius:6px;" class="btn btn-primary" href="{{url('/deptdoc/'.$item->id)}}" role="button">{{$item->dept_name}}</a>
        @endforeach


      </div>
      <div>
       
      @foreach($doctors as $item)
        <div style="margin-top:20px; " class="col-md-3 col-sm-4 col-xs-6">
       

          <div style="  float:left; background-image: linear-gradient(#059ba3, #05244a); border-radius:5px;width: 100%;float: left;padding: 0 10px;margin-bottom: 40px;border: 1px solid #d9d3d3;position: relative;" class="members">

            <img style=" 
  margin-right: auto; margin-top:10px; border-collapse: separate; color:#2d388c; background-size: 300px 100px; display: inline-block;
                    position: relative;overflow: hidden;
                     border-radius: 50%;border: 4px solid #adb0bf; " src="/uploads/doctor/{{$item['images']}}" alt="Image">


            <h4 style="color:white; text-align: center;">{{$item['name']}}</h4>
            <h5 style="color:white; text-align: center; ">Department: {{$item['dept_name']}}</h5>
            
            <a href="{{url('/doctorProfile/'.$item['id'])}}"> <button  style="" class="doc" type="submit">PROFILE</button></a>
          </div>


        
      
        </div>
        @endforeach
      </div>


      <div>
      
      </div>



      <div class="col-xs-12 margin-bottom">&nbsp;</div>
      <span>

      </span>


    </div>
  </div>
  </div>
  <span style="text-align: center;">
  
  </span>
</section>

<!-- end section -->
{{View::make('include.footer')}}