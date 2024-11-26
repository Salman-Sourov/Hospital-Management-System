{{View::make('include.header')}}
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<script type='text/javascript' src="js/jquery.min.js"></script> 
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
@yield('content')



<body style="background-image:none ;">

    <div class="container emp-profile">
        @foreach($doctors as $item)
        <form style="margin-top:50px;" method="">

            <div class="row">
                <div class="col-md-4">
                    <div style="margin-top:10px ;" class="profile-img">
                        <img src="/uploads/doctor/{{$item['images']}}" alt="" />

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="profile-head">
                        <h2>
                            {{$item['name']}}
                        </h2>
                        <h4>
                            {{$item['qualification']}}
                        </h4>
                        
                        <h4> Designation:
                            {{$item['designation']}}
                        </h4>
                        <h4>Department:
                        {{$item['dept_name']}}</h4>

                        <h4>Institution:
                         {{$item['institution']}}
                        </h4>

                        
                         <h4>visiting time:
                         {{$item['visiting_time']}}
                        </h4>
                         
                         
                     

                    </div>
                      <a style="color:white;" href="http://103.146.150.42:8020/Appointment"><button class="btn btn-dark" style="margin-top:50px;background-color: #228284;" type="button" class="read_more_btn">Fix Appointment</button></a>
                </div>


            </div>
            <div style="margin-top: 20px;background-color: #b1bce1;" class="row">

                <div class="col-md-8">
                    <div class=" " id="myTabContent">
                        <div class="" id="home" role="tabpanel" aria-labelledby="home-tab">

                        </div>
                        <div style="Width:100%;" class="" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              

                            <h4>
                                If Yoy want to fix appoinment with {{$item['name']}}
                                Click The Button Above
                            </h4>

                        </div>
                    </div>
                </div>
            </div>
        </form>
        @endforeach
    </div>






















{{View::make('include.footer')}}




</body>


</html>