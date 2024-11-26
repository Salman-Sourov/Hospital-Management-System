{{View::make('include.header')}}
@yield('content')



<head>

    <script type="text/javascript" src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js'></script>
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

    <section class="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                </div>
            </div>
        </div>
    </section>
    <section class="inner-content" style="padding-bottom:0;">
        <div class="container">
            <div class="row">
                <div style="width:93%;height:70%;  margin: auto;background-color:#dddeff; padding:30px;">


                    <form action="{{route('/')}}" method="post">
                        @csrf


                        <h3 style="text-align:center; color:blue;">Appoinment form</h3>

                        <!-- Name input -->


                        <div class="form-outline mb-4">

                            <input name="dept_id" style="border:1px solid #c0becffa ; width:100%;" type="hidden" id="form4Example2" class="form-control" value="" />

                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" style="margin-top:10px;" for="form4Example2">Patient Name</label>
                            <input style="border:1px solid #c0becffa ;width:100%;" type="text" name="patient_name" id="form4Example2" class="form-control" placeholder="Enter Your Full Name" />

                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" style="margin-top:20px;" for="form4Example2">Phone Number</label>
                            <input style="border:1px solid #c0becffa ;width:100%;" type="text" name="phone_number" id="form4Example2" class="form-control" required />

                        </div>

                        <div style="margin-top:20px ;" class="form-outline mb-4 department">
                            <label>Department</label>
                            <select style="padding:7px ;width:500px;width:100%;" name="dept_id" class="select" id="dept" required>
                                <option value="">Select Department</option>
                                
                               @foreach($departments as $item)
                             <option value="{{$item['id']}}">{{$item['dept_name']}}</option>
                                @endforeach
                               

                            </select>
                        </div>
                        
                        
                        
                        <div  style="margin-top:20px ;" class="form-outline mb-4 department">

                            <label>Select Doctor </label>
                            <select style="padding:7px ; width:500px;width:100%;" name="parent_id" class="select" id="parents" required>
                                <option value="">Select Doctor</option>
                                
                            </select>


                        </div>

                        <div style="margin-top:20px;" class="form-outline mb-4">
                            <label style="margin-top:-6px; max-width:max-content;">Visit Date</label>
                            <input class="visit" placeholder="Month/date/year" name="visit_date" style="border:1px solid #c0becffa; margin-top:23px; margin-left:-3px;padding:7px;width:100%;" type="text" id="txtdate" required />
                        </div>

                        

                       
                        <div class="form-outline mb-4">
                            <label class="form-label" style="margin-top:20px; max-width:max-content;" for="form4Example2"> Date of birth</label>
                            <input style="width:100%;"name="date_of_birth" id="datepicker" type="date" class="form-control " placeholder="Date Of Birth" value="{{ date('y/m/d') }}" required />

                        </div>
                        <div style=" margin-top:20px;" style="margin-left:-15px;" class="col-md-4 col-sm-6 col-xs-12 department">

                            <select name="flexRadioDefault" style="padding:7px ;max-width:110%; margin-left:-15px;" class="select" id="parents" required>
                                <option style="height: 193px ;" value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>

                            </select>
                        </div>

                        <!-- Message input -->
                        <div class="form-outline mb-4">
                            <label style="margin-top:20px;" class="form-label" for="form4Example3">Message</label>
                            <textarea name="messege" style="border:1px solid #c0becffa ;" class="form-control" id="form4Example3" rows="4"></textarea>

                        </div>

                        <div style="" style="" class="col-md-4 col-sm-6 col-xs-12 department">

                            <select style="padding:7px;max-width:110%; margin-left:-15px;  margin-top:20px;" name="visit_type" class="select" id="parents" required>
                                <option style="height: 193px ; " value="">Select Visit Type</option>
                                <option value="first visit">First Visit</option>
                                <option value="Second Visit">Second Visit</option>
                                <option value="Follow up">Follow up</option>
                            </select>
                        </div>

                        <!-- Checkbox -->

                        <!-- Submit button -->
                        <button id="myBtn" class="btn btn-info" style="margin-top:80px;margin-left:60px;width:223px;height:50px " type="submit">Confirm Appoinment</button>

                    </form>

                </div>
            </div>
        </div>
    </section>
    
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

    