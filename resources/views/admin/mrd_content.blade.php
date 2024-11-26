<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Add MRD Content| MSHL</title>
    <!-- Favicon icon -->
        <link href="{{asset('ico/logo.png')}}" rel="shortcut icon">
    <link href="{{asset('./admin/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('./admin/vendor/chartist/css/chartist.min.css')}}">
	<!-- Datatable -->
    <link href="{{asset('./admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('./admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('./admin/css/style.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/ckeditor.js"></script>
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
						<h2 class="text-black font-w600">MRD Content</h2>
						<h6>No need to delete. Just Upload to replace existing</h6>
						
					</div>
					<div>
						<a href="javascript:void(0)" onclick="replaceCkeditor()" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+Replace MRD Content</a>
						
					</div>
				</div>
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add MRD Content</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="{{route('ad_mrd_main_submit')}}" method="post" enctype="multipart/form-data">
                                    @csrf
									<div style="margin-top:30px ;" class="form-group">
										<label class="text-black font-w500">Birth Certificate Google Form Link</label>
										<input type="url" name="bc_form" class="form-control" required>
									</div>
									<div style="margin-top:30px ;" class="form-group">
										<label class="text-black font-w500">Death Certificate Google Form Link</label>
										<input type="url" name="dc_form" class="form-control" required>
									</div>
									<div style="margin-top:30px ;" class="form-group">
										<label class="text-black font-w500">Content</label>
										<textarea rows="10" name="content" id="editor" class="form-control" required></textarea>
									</div>
		
									<div class="form-group">
										<button type="submit" style="margin-bottom:-60px ;" class="btn btn-primary">CREATE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="table-responsive card-table">
							<table id="example5" class="display dataTablesCard table-responsive-xl">
								<thead>
									<tr>
										<th>Birth Certificate Link</th>
										<th>Death Certificate Link</th>
										<th>Content</th>
									</tr>
								</thead>
								<tbody>
									@php
										$sl=1;
									@endphp
								@foreach($contents as $item)
									<tr>
										<td><a href="{{$item['bc_form']}}" class="btn btn-primary btn-sm">Birth Certificate Link</a></td>
										<td><a href="{{$item['dc_form']}}" class="btn btn-secondary btn-sm">Death Certificate Link</a></td>
										<td><?= $item['content'] ?></td>
									</tr>
							
                                    @endforeach
								</tbody>
							</table>
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
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			$('#example tbody').on('click', 'tr', function () {
				var data = table.row( this ).data();
				
			});
		})(jQuery);
		
	</script>

	<script>
		function replaceCkeditor()
		{
			CKEDITOR.replace('editor');
		}
	</script>
</body>
</html>