{{View::make('include.header')}}
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<script type='text/javascript' src="js/jquery.min.js"></script> 
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>


@yield('content')


<body style=" ">
    <div class="container">
        <div style="margin-top:10px;">
        <p>&nbsp</p><br><br>
        </div>
        <div style="height:40%; width:fit-content; margin-top:-100px;  background-color:transparent; box-shadow:none; border:none;"class="modal-content">

        <img  style="width:1500px;"src="{{asset('images/Info.jpg')}}" class="img-fluid" alt="Responsive image">
        </div>
        <div style="margin-top:-240px ;">
            <h2>Our Patient Information With Cost List</h2>
            <p>রোগীর চিকিৎসার জন্য প্রয়োজনীয় পরীক্ষা নিরীক্ষা,ডাক্তারের ভিজিট, মেডিসিন ,প্রসিডিউর ও ডায়লাইসিস চার্জসমূহ বিল এর সাথে যুক্ত হবে ।
            </p>
            <table style="margin-top: 57px ;" class="table table-striped">
                <thead>
                    <tr style="background-color:#042956 ; color:white;">

                        <th  style="padding-left: 80px ;">Description</th>
                        <th>Rate (TK)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($infos as $item)
                    <tr class="">

                        <td style="padding-left: 80px ;">{{$item['description']}}</td>
                        <td>{{$item['rate']}}</td>


                    </tr>
                    @endforeach

                </tbody>
            </table>
            </div>
        
    </div>

    <span style="text-align: center;">
    {{ $infos->links() }}
  </span>
</body>



{{View::make('include.footer')}}