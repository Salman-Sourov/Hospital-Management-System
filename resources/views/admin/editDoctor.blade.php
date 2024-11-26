<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title> Edit Doctor | MSHL </title>
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
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
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
						<h2 class="text-black font-w600">Doctors</h2>
					
					</div>
					<div>
						<a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+Edit Doctor</a>

					</div>
				</div>
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModal">
					<div class="modal-dialog" role="document">
						<div style="overflow:scroll; height:600px;"class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Doctor</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="{{route('edit_doctor')}}" method="post" enctype="multipart/form-data">
									@csrf
									<div class="form-group">
										<label class="text-black font-w500">Doctor Name</label>
										<input type="text" name="name" value="{{$data['name']}}" class="form-control" >
                                        
                                        <input type="hidden" name="id" value="{{$data['id']}}" class="form-control" >
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Designation</label>
										<input type="text" name="designation"  value="{{$data['designation']}}" class="form-control">
									</div>


									<div class="form-group">
										<label class="text-black font-w500">Qualification</label>
										<input type="text" name="qualification" value="{{$data['qualification']}}" class="form-control " >
									</div>


									<select class="form-select" name="dept_id" aria-label="Default select example" required>
										@foreach($departments as $item)
										<option value="{{$item['id']}}">{{$item['dept_name']}}</option>
										@endforeach
									</select>
									
									<div class="form-group">
										<label class="text-black font-w500">Visiting Time</label>
										<input type="text" name="visit_time" value="{{$data['visiting_time']}}" class="form-control"  placeholder="Example= (Saturday,Sunday,Monday) at 4pm-7pm" >
									</div>
									
									<div class="form-group">
										<label class="text-black font-w500">Doctors Institution</label>
										<input type="text" name="institution" value="{{$data['institution']}}" class="form-control" >
									</div>


										

										<div style="margin-top:30px ;" class="form-group">
											<label class="text-black font-w500">Upload Image</label>
											<input type="file" name="image" class="form-control" >
										</div>

										<div class="form-group">
											<button type="submit" style="margin-bottom:-60px ;" class="btn btn-primary">CREATE</button>
										</div>
								</form>
							</div>
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
			<div class="copyright">
				
			</div>
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
</body>

</html>