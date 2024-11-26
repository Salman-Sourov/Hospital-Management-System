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
                <div style="width:70%;height:70%;  margin: auto;background-color:#dddeff; padding:30px;">


                    <form  action="{{route('/')}}" method="post">
                    @csrf

                    @foreach($doctors as $item)
                        <h3 style="text-align:center; color:blue;">Appointment form</h3>

                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" style="margin-top:10px;" for="form4Example2">Doctor Name : {{$item['name']}}</label>
                            <label class="form-label" style="margin-top:10px;" for="form4Example2">Department: {{$item['dept_name']}}</label>
                            <input name="parent_id"  style="border:1px solid #c0becffa ;" type="hidden" id="form4Example2" class="form-control" value="{{$item['id']}}"   />

                        </div>

                        <div class="form-outline mb-4">
                            
                            <input name="dept_id" style="border:1px solid #c0becffa ;" type="hidden" id="form4Example2" class="form-control" value="{{$item['department_id']}}"   />

                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" style="margin-top:10px;" for="form4Example2">Patient Name</label>
                            <input style="border:1px solid #c0becffa ;" type="text"  name="patient_name" id="form4Example2" class="form-control" placeholder="Enter Your Full Name"  />

                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" style="margin-top:20px;" for="form4Example2">Phone Number</label>
                            <input style="border:1px solid #c0becffa ;" type="text"  name="phone_number" id="form4Example2" class="form-control" required />

                        </div>

                        <div style="margin-top:20px;" class="form-outline mb-4">
                            <label style="margin-top:20px; max-width:max-content;">Visit Date</label>
                            <input class="visit" placeholder="Month/date/year" name="visit_date"  style="border:1px solid #c0becffa; margin-top:10px; margin-left:5px;padding:5px;" type="text" id="txtdate" required />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" style="margin-top:20px; max-width:max-content;" for="form4Example2"> Date of birth</label>
                            <input name="date_of_birth" id="datepicker" type="date" class="form-control " placeholder="Date Of Birth"  value="{{ date('y/m/d') }}" required />
                            @php
                            $offday = json_decode($item->off_day);
                            $offday = implode(",",$offday);
                            @endphp
                            <input type="hidden" value="{{ $offday }}" id="off_day">
                        </div>
                        <div style=" margin-top:20px;" style="margin-left:-1px;" class="col-md-4 col-sm-6 col-xs-12 department">

                            <select name="flexRadioDefault" style="width: 193px ;border:1px solid #c0becffa ;max-width:max-content; margin-top:10px; padding:5px; margin-left:-13px; "  class="select" id="parents" required>
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

                            <select style="width: 193px ;border:1px solid #c0becffa ;max-width:max-content; margin-top:10px; padding:5px; margin-left:-13px;" name="visit_type" class="select" id="parents" required>
                                <option style="height: 193px ; " value="">Select Visit Type</option>
                                <option value="New Patient">New Patient</option>
                                <option value="Old Patient">Old Patient</option>
                                <option value="Follow Up">Follow up</option>
                            </select>
                        </div>

                        <!-- Checkbox -->

                        <!-- Submit button -->
                        <button id="myBtn"  class="btn btn-info" style="margin-top:80px; " type="submit">Confirm Appointment</button>
                    @endforeach
                    </form>

                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        $(function() {

               


    
            var offday = $("#off_day").val();
            console.log(offday);
            var selectedDates = [];
            datePicker = $('[id*=txtdate]').datepicker({
                startDate: new Date(),
                
                minDate: 0,
               
                format: "mm/dd/yyyy",
                daysOfWeekHighlighted: offday,
                language: 'en',
            
                daysOfWeekDisabled: offday
               
            });
            
            datePicker.on('changeDate', function(e) {
                if (e.dates.length <= 3) {
                    selectedDates = e.dates;
                } else {
                    datePicker.data('datepicker').setDates(selectedDates);
                    alert('You can only select 3 dates.');
                }
            });

       
        });
    </script>