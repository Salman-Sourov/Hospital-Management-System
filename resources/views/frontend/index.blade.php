{{View::make('include.header')}}

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<script type='text/javascript' src="js/jquery.min.js"></script> 
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

@yield('content')

<style>

 .hhh{
          margin-left:43%; width:100px;height:32px; border-style:none; font-weight:400; color:white;font-size:13px; margin-top:91px;  border-radius:9px;   background-image: linear-gradient(#2fb358bf, #013a3c);
 }
 .section_our_solution .row {
  align-items: center;
}


.our_solution_category {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}
.our_solution_category .solution_cards_box {
  display: flex;
  justify-content: center;
}




.solution_cards_box .solution_card:hover::before {
  background: rgb(85 108 214 / 10%);
}

.solution_cards_box .solution_card:hover .solu_title h3,
.solution_cards_box .solution_card:hover .solu_description p {
  color: #fff;
}

.solution_cards_box .solution_card:before {
  content: "";
  position: absolute;
  background: rgb(85 108 214 / 5%);
  width: 170px;
  height: 400px;
  z-index: -1;
  transform: rotate(42deg);
  right: -56px;
  top: -23px;
  border-radius: 35px;
}

.solution_cards_box .solution_card:hover .solu_description button {
  background: #fff !important;
  color: #309df0;
}

.solution_card .so_top_icon {
}

.solution_card .solu_title h3 {
  color: #212121;
  font-size: 1.3rem;
  margin-top: 13px;
  margin-bottom: 13px;
}

.solution_card .solu_description p {
  font-size: 15px;
  margin-bottom: 15px;
}



.our_solution_content h1 {
  text-transform: capitalize;
  margin-bottom: 1rem;
  font-size: 2.5rem;
}
.our_solution_content p {
}

.hover_color_bubble {
  position: absolute;
  background: rgb(54 81 207 / 15%);
  width: 100rem;
  height: 100rem;
  left: 0;
  right: 0;
  z-index: -1;
  top: 16rem;
  border-radius: 50%;
  transform: rotate(-36deg);
  left: -18rem;
  transition: 0.7s;
}

.solution_cards_box .solution_card:hover .hover_color_bubble {
  top: 0rem;
}

.solution_cards_box .solution_card .so_top_icon {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: #fff;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.solution_cards_box .solution_card .so_top_icon img {
  width: 40px;
  height: 50px;
  object-fit: contain;
}

/*start media query*/
@media screen and (min-width: 320px) {
  .solution_card .solu_description button {
  border-radius: 3px;
  background: linear-gradient( 140deg, #131549 0%, #0e0b0c 50%, #0c0f0fc7 75% ) !important;
  color: #fff;
  font-weight: 500;
  font-size: 1.5rem;
 
}
 .solution_cards_box .solution_card {
  flex: 0 50%;
  background: #48a7a9e3;
  box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
    0 5px 15px 0 rgba(37, 44, 97, 0.15);
  border-radius: 15px;
  margin: 3px;
  padding: 0px 5px;
  position: relative;
  z-index: 1;
  overflow: hidden;
  max-height: 135px;
  max-width: 123px;
  transition: 0.7s;
}
  .sol_card_top_3 {
    position: relative;
    top: 0;
  }

  .our_solution_category {
    width: 100%;
    margin: 0 auto;
  }

  .our_solution_category .solution_cards_box {
    flex: auto;
  }
}
@media only screen and (min-width: 768px) {
    .solution_cards_box .solution_card:hover {
  background:#d64c49;
  color: #fff;
  transform: scale(1.1);
  z-index: 9;
}
    .solution_card .solu_description button {
  border: 0;
  border-radius: 8px;
 background: linear-gradient( 140deg, #131549 0%, #0e0b0c 50%, #0c0f0fc7 75% ) !important;
  color: #fff;
  font-weight: 500;
  font-size: 1.5rem;
  padding: 12px 78px;
}
     .solution_cards_box .solution_card {
  flex: 0 50%;
  background: #48a7a9e3;
  box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
    0 5px 15px 0 rgba(37, 44, 97, 0.15);
  border-radius: 15px;
  margin: 8px;
  padding: 10px 15px;
  position: relative;
  z-index: 1;
  overflow: hidden;
  min-height: 265px;
  transition: 0.7s;
}
  .our_solution_category .solution_cards_box {
    flex: 1;
  }
}

@media only screen and (min-width: 1024px) {
    .solution_cards_box .solution_card:hover {
  background:#d64c49;
  color: #fff;
  transform: scale(1.1);
  z-index: 9;
}
 .solution_card .solu_description button {
  border: 0;
  border-radius: 8px;
 background: linear-gradient( 140deg, #131549 0%, #0e0b0c 50%, #0c0f0fc7 75% ) !important;
  color: #fff;
  font-weight: 500;
  font-size: 1.5rem;
  padding: 12px 78px;
}
.solution_cards_box .solution_card {
  flex: 0 50%;
  max-width:40%;
  background: #48a7a9e3;
  box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
    0 5px 15px 0 rgba(37, 44, 97, 0.15);
  border-radius: 3px;
  margin: 8px;
  padding: 10px 15px;
  position: relative;
  z-index: 1;
  overflow: hidden;
  min-height: 265px;
  transition: 0.7s;
}
   
  .sol_card_top_3 {
    position: relative;
    top: -3rem;
  }
  .our_solution_category {
    
    margin: 0 auto;
  }
}
 .aaa {
    margin-left: -215px;
  }

  .bbb {
    margin-top: -415px;
    margin-left: 239px;
  }

  .btn-1 {
    margin: 23px -1px;
  }
  .btn-3 {
    display: none;
  }

  .modal-content {
    height: 63%;
  }
  
  .cont {
    height: 48%;
  }

 .fa-rectangle-xmark {
      
      margin-top:-7%;margin-left:105%;background-color:transparent;
    }
    
    
     sss{
         margin-top: 2%;
      margin-left: 97%;
      background-color: transparent;
    }

  .latest-news {
    margin-top: 90px;
  }

  .btn-3 {
    display: none;
  }

  @media only screen and (max-width: 767px),
  only screen and (max-device-width: 767px) {
      
      .hhh{
          margin-left:85px; width:100px;height:32px; border-style:none; font-weight:400; color:white;font-size:13px; margin-top:-7px;  border-radius:9px;   background-image: linear-gradient(#2fb358bf, #013a3c);
      }
   .aaa {
      margin-left: -215px;
      margin-top: 5px;
    }

    .bbb {
      margin-top: -370px;
      margin-left: 239px;
    }

    .btn-3 {
      display: block;
    }

    .btn-1 {
      margin: -2px -18px;
    }

    .btn-3 {
      margin: 18px -16px;
    }


    .modal-content {
      height: 38%;
      width: 80%;
    }

    .fa-rectangle-xmark {
        margin-top:-7%;margin-left:105%;background-color:transparent;
     
    }
    
    sss{
         margin-top: -7%;
      margin-left: 95%;
      background-color: transparent;
    }
        
    }

    .latest-news {
      margin-top: 40px;
    }

  }
</style>

<head>


  <!-- end header -->

  <section class="slider">
    <div class="demo-2">
      <div id="slider" class="sl-slider-wrapper">



        <div class="sl-slider">
          <div class="sl-slide " data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner overlay">
              <div class="bg-img bg-img-1"></div>

              <!-- end content -->
            </div>
            <!-- end sl-slide-inner -->
          </div>
          <!-- end sl-slide -->
          <div class="sl-slide " data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner overlay">
              <div class="bg-img bg-img-2"></div>

              <!-- end content -->
            </div>
            <!-- end sl-slide-inner -->
          </div>
          <!-- end sl-slide -->
          <div class="sl-slide " data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner overlay">
              <div class="bg-img bg-img-3"></div>

              <!-- end content -->
            </div>
            <!-- end sl-slide-inner -->
          </div>
          <!-- end sl-slide -->
          <div class="sl-slide " data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner overlay">
              <div class="bg-img bg-img-4"></div>

              <!-- end content -->
            </div>
            <!-- end sl-slide-inner -->
          </div>



          <!-- end sl-slide -->
        </div>
        <!-- sl-slider -->

        <!-- end nav-arrows -->
        <nav style="margin-bottom: 65px;" id="nav-dots" class="nav-dots"> <span class="nav-dot-current"></span> <span></span> <span></span> <span></span> </nav>
        <!-- end nav-dots -->
      </div>
      <!-- end sl-slider-wrapper -->
    </div>
    <!-- end demo2 -->
  </section>
  <!-- end slider -->
   <section>
    <div class="container bbb" style="">
      <div class="aaa" style=" position: absolute;z-index: 1;">
    
      
      </div>
    </div>
  </section>


  <section class="appointment">
    <div class="container" style="margin-top:-178px;">
      <div class="row">
        <div class="col-xs-12">

        </div>





        @if(Session::has('success'))

        <div id="myModal" class="model">

          <!-- Modal content -->
          <div style="background-color: white;" class="modal-content  cont">

            <p style="font-size:18px;text-align: center; margin-top:5%;">Your Appointment request has been submitted successfully. Please wait for a confirmation call shortly. For any quaries please contact with 09639206020. Please download your appointments info </p>
            <a href="{{url('/pdf')}}"><button id="" class="hhh" style="" type="submit">Download PDF</button></a>
            <i style="" id="mybtn" class="fa-solid fa-rectangle-xmark sss" aria-hidden="true"></i>

          </div>

        </div>
        @elseif (Session::has('fail'))
        <div id="myModal" class="model">

          <!-- Modal content -->
          <div class="modal-content">

            <p style="font-size:18px;">Sorry We Can not Accept Your Request ! Try Again later Or Dial 09639206020 for Appointment</p>


          </div>

        </div>
        @else
        @if(isset($poster['image']))

        <div style="height:100%;" id="myModal" class="model">

          <!-- Modal content -->
          <div style=" margin-top:250px;height:300px;" class="modal-content">


            <img style="width:100%; margin-top:-22px;margin-left:-20px; height:100%;z-index: -1;position: absolute;" src="{{asset('/uploads/content/'.$poster['image'])}}" class="img-fluid" alt="Responsive image">

            <i style="" id="mybtn" class="fa-solid fa-rectangle-xmark" aria-hidden="true"></i>


          </div>


        </div>
        @endif

        @endif

        <!-- end col-12 -->
        
        <div style="margin-top:30px;" class="">
           <div class="section_our_solution">
  <div class="row">
      
    <div style="display:flex;>
      <div  width:100%" class="our_solution_category">
        <div  class="solution_cards_box">
             <a style="color:white;" href="http://103.146.150.42:8020/Appointment">
          <div class="solution_card col-md-4 col-lg-4 col-sm-4">
            <div style="margin-top:40px; text-align:center;" class="solu_title">
              <h4 > Make An Appoinment</h4>
            </div>
            <div class="solu_description">
              <div>
              <br>
              <br>
               </div>
               <div style="text-align:center;"">
              <button style="margin-top:50px;"  type="button" class="read_more_btn"> Click Here</button>
              </div>
            </div>
               </a>
          </div>
       
           <a style="color:white;" href="{{url('/doctors')}}">
          <div class="solution_card col-md-4 col-lg-4 col-sm-4">
            
           
            <div style="margin-top:40px;text-align:center;" class="solu_title">
              <h4> Find Consultant</h4>
            </div>
             <div>
              <br>
              <br>
               </div>
            <div style="text-align:center;" class="solu_description">
              <a style="color:white;" href="{{url('/doctors')}}"><button style="margin-top:50px;" type="button" class="read_more_btn"> Click Here</button></a>
            </div>
          </div>
          </a>
          
            </div>
          </div>
        </div>
        <div>
     
        </div>
      </div>
   
            </div>



            <!-- end col-4 -->
          </form>
        </div>
        <!-- end form -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>

<!-- end box-content -->
<section style="" class="latest-news">
  <div class="container">
    <div style=" padding:20px ;border-left: 5px solid #2d388c; box-shadow: 3px 2px 8px #2d388c59;  background-color:#1c727414;" class="row">
      <div class="col-xs-12 text-center">
        <div style="margin-top:42px;" class="title-box">
          <h2>About Millennium Specialized Hospital Ltd.</h2>

        </div>
        <!-- end title-box -->
      </div>
      <!-- end col-12 -->
      <div class="col-md-6 col-xs-12">
        @php
            $about_content= App\Models\About::first();
        @endphp
        <div class="left">
          <div class="article-image"><iframe style="border-radius:18px;" width="450" height="250" src="{{$about_content->video_link}}">
            </iframe> </div>
          <img src="{{asset('images/rated-article.png')}}" alt="Image" class="rounded-circle">

          <h3><strong>About </strong> MILLENIUM Specialized Hospital Ltd. </h3>

          <p style="text-align: justify;text-justify: inter-word; margin-left:2px;"><?=$about_content->content ?></p>
        </div>
        <!-- end left -->
      </div>
      <div class="col-md-6 col-xs-12">
        <div style="margin-top:-1px;" class="right">
          <div class="article-image"><img style="background-color:gray;" src="{{asset('uploads/content/'.$about_content->image)}}" alt="Image"> </div>
          <img src="{{asset('images/rated-article.png')}}" alt="Image" class="rounded-circle">
          <h3><strong>WE ARE COMITTED TO :</strong> </h3>

          <div class="card" style="width: 33rem;margin-top:15px; box-shadow: 1px 1px 8px #888888;">
            <ul style="padding:20px -1px " class="list-group list-group-flush">
              <li style="padding:20px 15px;background-color:#d3ffda;" class="list-group-item"> <img style=" height:30px; " src="{{asset('images/s1.png')}}" alt="Image" class="rounded-circle"> &nbsp সাশ্রয়ী মূল্যে সর্বোচ্চ সেবার নিশ্চয়তা </li>
              <li style="padding:20px 15px;background-color:#d3ffda;" class="list-group-item"> <img style=" height:30px;" src="{{asset('images/s2.png')}}" alt="Image" class="rounded-circle"> &nbsp ২৪ ঘণ্টা সেবা</li>
              <li style="padding:20px 15px;background-color:#d3ffda;" class="list-group-item"> <img style="height:30px; " src="{{asset('images/s3.png')}}" alt="Image" class="rounded-circle"> &nbsp ১০০ শজ্জা বিশিষ্ট হাঁসপাতাল</li>
              <li style="padding:20px 15px;background-color:#d3ffda;" class="list-group-item"> <img style="height:30px; " src="{{asset('images/s3.png')}}" alt="Image" class="rounded-circle"> &nbsp ক্যাফেটেরিয়া</li>
              <li style="padding:20px 15px;background-color:#d3ffda;" class="list-group-item"> <img style="height:30px; " src="{{asset('images/s3.png')}}" alt="Image" class="rounded-circle"> &nbsp ভিজিটর কার পার্কিং</li>

            </ul>
          </div>

        </div>
        <!-- end col-6 -->

        <!-- end col-6 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
</section>

<section class="home-services text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="title-box">
          <h2>Specialities</h2>
          <h5>Most Popular Services in MILLENIUM Specialized Hospital Ltd. </h5>
        </div>
        <!-- end title-box -->
      </div>
      <!-- end col-12 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="line">
            <div class="icon"><img src="images/dialysis.png" alt="Icon"> </div>
          </div>
          <h3>24/7 Dialysis</h3>

        </div>
        <!-- end content -->
      </div>
      <!-- end col-3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="line">
            <div class="icon"><img src="images/ICU.png" alt="Icon"></div>
          </div>
          <h3>Intensive Care Unit (ICU)</h3>

        </div>
        <!-- end content -->
      </div>
      <!-- end col-3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="line">
            <div class="icon"><img src="images/HDU.png" alt="Icon"></div>
          </div>
          <h3>24/7 Emergency & Trauma</h3>

        </div>
        <!-- end content -->
      </div>
      <!-- end col-3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="icon"><img src="images/NICU.png" alt="Icon"></div>
          <h3>Neonatal Intensive Care Unit (NICU)</h3>

        </div>
        <!-- end content -->
      </div>
      <!-- end col-3 -->
      <div class="col-xs-12"> </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>

<section style="margin-top:-118px;" class="home-services text-center">
  <div class="container">
    <div class="row">
      <!-- end col-12 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="line">
            <div class="icon"><img src="images/dialysis.png" alt="Icon"> </div>
          </div>
          <h3>Diabetes Center</h3>

        </div>
        <!-- end content -->
      </div>
      <!-- end col-3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="line">
            <div class="icon"><img src="images/ICU.png" alt="Icon"></div>
          </div>
          <h3>Asthma Center</h3>

        </div>
        <!-- end content -->
      </div>
      <!-- end col-3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="line">
            <div class="icon"><img src="images/HDU.png" alt="Icon"></div>
          </div>
          <h3>Stroke Care Center</h3>

        </div>
        <!-- end content -->
      </div>
      <!-- end col-3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="icon"><img src="images/NICU.png" alt="Icon"></div>
          <h3>Cosmetic Surgery</h3>

        </div>
        <!-- end content -->
      </div>
      <!-- end col-3 -->
      <div class="col-xs-12">

        <a href="{{url('/service')}}"> <button style=" width:196px;height:45px; border-style:none; font-weight:400; color:white;font-size:18px; margin-top:35px;  border-radius:1px;   background-image: linear-gradient(#ade89b, #ade89b);" type="submit">Our all Services</button></a>

      </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end home-services -->
<section class="box-content">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
        <div class="first-box" style="box-shadow:2px 5px 2px #1f1f204d;">
          <div class="icon"><img src="images/icon1.png" alt="Icon"></div>
          <div class="content">
            <h3>UROLOGY</h3>
            <p>Urology can be broadly defined as the specialty that manages patients with diseases of the male and female urinary tract, and of the male reproductive organs</p>
           
          </div>
          <!-- end content -->
        </div>
        <!-- end first-box -->
      </div>
      <!-- end col-4 -->
      <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
        <div class="second-box" style="box-shadow:6px 10px 5px #1f1f204d;">
          <div class="icon"><img src="images/icon2.png" alt="Icon"></div>
          <div class="content">
            <h3>CARDIOLOGY</h3>
            <p>The Department generally treats cardiac conditions related to hypertension, aortic disease, arrhythmias, atrial fibrillation, cardiomyopathy, high cholesterol, congenital heart defects</p>
            
          </div>
          <!-- end content -->
        </div>
        <!-- end second-box -->
      </div>
      <!-- end col-4 -->
      <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
        <div class="third-box" style="box-shadow:2px 5px 2px #1f1f204d;">
          <div class="icon"><img src="images/icon3.png" alt="Icon"></div>
          <div class="content">
            <h3>CANCER SURGERY</h3>
            <p>The Surgical Oncology Department has a team of qualified and trained surgical oncologists for every aspect of surgical management for cancer patients.</p>
           
          </div>
          <!-- end content -->
        </div>
        <!-- end third-box -->
      </div>
      <!-- end col-4 -->

      <div style="" class="col-xs-12 text-center">

        <a href="{{url('/dept_details/14')}}"> <button style=" width:196px;height:45px; border-style:none; font-weight:400; color:white;font-size:18px; margin-top:50px;  border-radius:1px;   background-image: linear-gradient(#2d388c, #203f40);" type="submit">Our all Department</button></a>

      </div>
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end latest-news -->
<!-- end frase -->
<section class="gallery text-center" style="margin-bottom:145px; background-color:#1c727414;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="title-box">
          <h2 style="margin-bottom:-54px ;margin-top:-20px ">Gallery</h2>
          <h5> </h5>
        </div>
        <!-- end title-box -->
      </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->

  <div class="home-gallery">
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/1.jpeg')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong></a></div>
        <img src="{{asset('images/1.jpeg')}}" alt="Image">
      </div>
    </div>
    <!-- end item -->
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/2.jpeg')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/2.jpeg')}}" alt="Image">
      </div>
    </div>
    <!-- end item -->
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/3.jpeg')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/3.jpeg')}}" alt="Image">
      </div>
    </div>
    <!-- end item -->
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/4.JPG')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/4.JPG')}}" alt="Image">
      </div>
    </div>
    <!-- end item -->
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/5.JPG')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/5.JPG')}}" alt="Image">
      </div>
    </div>
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/6.JPG')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/6.JPG')}}" alt="Image">
      </div>
    </div>

    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/7.JPG')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong> <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/7.JPG')}}" alt="Image">
      </div>
    </div>
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/8.JPG')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/8.JPG')}}" alt="Image">
      </div>
    </div>
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/9.JPG')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/9.JPG')}}" alt="Image">
      </div>
    </div>
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/10.JPG')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/10.JPG')}}" alt="Image">
      </div>
    </div>
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/11.JPG')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/11.JPG')}}" alt="Image">
      </div>
    </div>
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/12.JPG')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/12.JPG')}}" alt="Image">
      </div>
    </div>
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/13.JPG')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/13.JPG')}}" alt="Image">
      </div>
    </div>
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/14.jpeg')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/14.jpeg')}}" alt="Image">
      </div>
    </div>
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/15.jpeg')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/15.JPG')}}" alt="Image">
      </div>
    </div>
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/16.jpeg')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/16.JPG')}}" alt="Image">
      </div>
    </div>
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/17.JPG')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/17.JPG')}}" alt="Image">
      </div>
    </div>
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/18.JPG')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/18.JPG')}}" alt="Image">
      </div>
    </div>
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/19.JPG')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/19.JPG')}}" alt="Image">
      </div>
    </div>
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="{{asset('images/20.JPG')}}" class="fancybox" rel="lightbox" title="Millennium Specialized Hospital Photos"><strong></strong>  <i class="ion-qr-scanner"></i></a></div>
        <img src="{{asset('images/20.JPG')}}" alt="Image">
      </div>
    </div>


  </div>
   </section>
  <!-- end home-gallery -->

  <!-- end gallery -->

  <!-- end boxed-image-feature -->

  <!-- end logos -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('select[name="dept_id"]').on('change', function() {
        var deptID = $(this).val();

        //e.g. 2015-11-1yyy
        //e.g. Fri Nov 13 2015 00:00:00 GMT+0000 (GMT Standard Time)

        if (deptID) {
          $.ajax({

            url: '/parents/' + deptID,
            type: "GET",
            dataType: "json",
            success: function(data) {
              $('select[name="parent_id"]').empty();
              $('select[name="parent_id"]').append('<option value="' + " " + '">' + "Select Doctor" + '</option>');
              $.each(data, function(key, value) {

                $('select[name="parent_id"]').append('<option value="' + value.id + '">' + value.name + '</option>');
              });
            }
          });
        } else {
          $('select[name="parent_id"]').empty();
        }
      });
    });
  </script>


  <script type="text/javascript">
    $(document).ready(function() {
      $('select[name="parent_id"]').on('change', function() {
        $('#txtdate').datepicker('destroy');


        var doctID = $(this).val();



        //e.g. 2015-11-1yyy
        //e.g. Fri Nov 13 2015 00:00:00 GMT+0000 (GMT Standard Time)

        console.log(doctID);

        if (doctID) {
          $.ajax({

            url: '/docs/' + doctID,
            type: "GET",
            dataType: "json",

            success: function(data) {


              $.each(data, function(key, value) {

                var date = value.off_day;
                var offday = JSON.parse(date);
                var offday = offday.join(',')
                date = '"' + offday + '"';

                console.log(date);

                $('#txtdate').datepicker({

                  startDate: new Date(),
                  minDate: 0,
                  format: "mm/dd/yyyy",

                  daysOfWeekHighlighted: date,
                  language: 'en',
                  daysOfWeekDisabled: date


                });




              });

            }
          });
        } else {
          $('select[name="parent_id"]').empty();
        }
      });
    });
  </script>

  <script>
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("mybtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];



    btn.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks on the button, open the modal

    modal.style.display = "block";


    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>




  {{View::make('include.footer')}}




  </body>

  </html>