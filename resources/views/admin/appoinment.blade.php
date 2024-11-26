<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Appointment List | MSHL </title>
    <!-- Favicon icon -->
        <link href="{{asset('ico/logo.png')}}" rel="shortcut icon">
    <link href="{{asset('./admin/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('./admin/vendor/chartist/css/chartist.min.css')}}">
    <!-- Datatable -->
    <link href="{{asset('./admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('./admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('./admin/css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->

    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">


            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->

        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->

        {{View::make('include.admin_sidebar')}}

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="form-head d-flex mb-sm-4 mb-3">
                    <div class="mr-auto">
                        <h2 class="text-black font-w600">Appointments</h2>
                        <p class="mb-0">Appointment details are only visible for admin. Admin can search patient list by searching date. </p>
                    </div>
                    <div style="margin-top:10px; ">
                    <form action="{{route('all_appoinment')}}" method="post" style="">
                        @csrf
                        <label>Search Appointment By Date </label>
                        <input name="visit_date" id="dob" type="date" class="form-control" placeholder="Date Of Birth" value="{{ date('y/m/d') }}">
                        <button id="myBtn" style="margin-left:380px; width:80px;height:24px; border-style:none; font-weight:400; color:white;font-size:17px; margin-top:7px;  border-radius:5px; background-color:#176e17;" type="submit">Submit</button>
                    </form>
                    </div>
                    

                </div>

                <!-- Add Order -->


                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive card-table">
                            <table id="example5" class="display dataTablesCard table-responsive-xl">
                                <thead>
                                    <tr>
                                        <th>Patient Name </th>
                                        <th>Contact Number</th>
                                        <th>Visiting Date</th>
                                        <th>Department</th>
                                        <th>Doctor Name</th>
                                        <th>Gender</th>
                                        <th>Problem</th>
                                        <th>Visit Type</th>
                                        <th>Issue Date</th>
                                        
                                        
                                         



                                     

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($apps as $item)
                                    <tr>



                                        <td>{{$item['patient_name']}}</td>
                                        <td>{{$item['phone_number']}}</td>
                                        <td>{{$item['visit_date']}}</td>
                                        <td>{{$item['dept_name']}}</td>
                                        <td>{{$item['name']}}</td>
                                        <td>{{$item['gender']}}</td>
                                        <td>{{$item['messege']}}</td>
                                        <td>{{$item['visit_type']}}</td>
                                        <td>{{$item['created_at']}}</td>



                                        <td>
                                            <div class="dropdown ml-auto text-right">
                                                <div class="btn-link" data-toggle="dropdown">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                   
                                                    <a class="dropdown-item" href="{{url('/appoinment_delete/'.$item['id'])}}">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            
                        </div>
                        
                    </div>
                </div>

                </table>
                {{ $apps->links() }}
            </div>
        </div>
        
 
        
    </div>
    </div>
    </div>
    
    <!--**********************************
            Content body end
        ***********************************-->

    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer">

    </div>
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('./admin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('./admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('./admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('./admin/js/custom.min.js')}}"></script>
    <script src="{{asset('./admin/js/deznav-init.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>

    <!-- Datatable -->
    <script src="{{asset('./admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script>
        (function($) {
            var table = $('#example5').DataTable({
                searching: false,
                paging: true,
                select: false,
                //info: false,         
                lengthChange: false

            });
            $('#example tbody').on('click', 'tr', function() {
                var data = table.row(this).data();

            });
        })(jQuery);
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>