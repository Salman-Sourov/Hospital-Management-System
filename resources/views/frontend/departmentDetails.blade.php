{{View::make('include.header')}}
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<script type='text/javascript' src="js/jquery.min.js"></script> 
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

@yield('content')



<!-- end header -->
<style>
  /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
  .row.content {
    height: 1500px
  }

  /* Set gray background color and 100% height */
  .sidenav {
    background-color: #f1f1f1;
    height: 100%;
  }

  /* Set black background color, white text and some padding */
  

  /* On small screens, set height to 'auto' for sidenav and grid */
  @media screen and (max-width: 767px) {
    .sidenav {
      height: auto;
      padding: 15px;
    }

    .row.content {
      height: auto;
    }
  }
</style>
<body style="background-image:none ;">
  

<section class="specialists">
<div class="container">
  <div class="row">
    <div style="overflow: scroll; height: 655px;"  class="col-sm-3 sidenav">
      <div  class="profile-work">
        <h4 style="color:#b13f3f; ">ALL DEPARTMENT</h4>
        @foreach($alldepartments as $item)
        <a href="{{url('/dept_details/'.$item['id'])}}">{{$item['dept_name']}}</a><br />
      
        @endforeach
      </div>
      
    </div>

    <div class="col-sm-9">
    @foreach($departments as $item)
      <hr>
      <h4 style="color:#000000; ">Department Name:</h4>
      <h2 style="color:#b13f3f; "> {{$item['dept_name']}}</h2>
     
     
      <p>{{$item['description']}}</p>
      <br><br>

      

      

      
         
        @endforeach
        </div>

        <h4 style="color:#000000; "> &nbsp All Doctors Of This Department:</h4>
        <div >
        @foreach($depts as $item)
        <div style="margin-top:20px; " class="col-md-3 col-sm-4 col-xs-6">
       

          <div style="  float:left; background-image: linear-gradient(#059ba3, #05244a); border-radius:5px;width: 100%;float: left;padding: 0 10px;margin-bottom: 40px;border: 1px solid #d9d3d3;position: relative;" class="members">

            <img style=" 
  margin-right: auto; margin-top:10px; border-collapse: separate; color:#2d388c; background-size: 300px 100px; display: inline-block;
                    position: relative;overflow: hidden;
                     border-radius: 50%;border: 4px solid #adb0bf;  " src="/uploads/doctor/{{$item['images']}}" alt="Image">


            <h4 style="color:white; text-align: center;">{{$item['name']}}</h4>
            <h5 style="color:white; text-align: center; ">Department: {{$item['dept_name']}}</h5>
            
            <a href="{{url('/doctorProfile/'.$item['id'])}}"> <button  style="" class="doc"  type="submit">PROFILE</button></a>
          </div>


        
      
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
</section>

</body>

{{View::make('include.footer')}}