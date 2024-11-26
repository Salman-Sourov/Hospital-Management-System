<div class="deznav">
			<div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
						<ul style="margin-bottom:-173px;" aria-expanded="false">
							<li><a href="{{url('/dashboard')}}">Dashboard</a></li>
							<li><a href="{{url('/ad_admin')}}">Add Admin</a></li>
			
							<li><a href="{{url('/addPatientinfo')}}">Service Info</a></li>
							<li><a href="{{url('/addservice')}}">Add Facilities</a></li>
							
							<li><a href="{{url('/ad_doctor')}}">Doctor Details</a></li>
							<li><a href="{{url('/ad_dept')}}">Departments</a></li>
							<li><a href="{{url('/ad_content')}}">Add Gallery Content</a></li>
							<li><a href="{{url('/ad_blog')}}">Add Blog</a></li>
							<li><a href="{{url('/ad_poster')}}">Pop Up</a></li>
							<li><a href="{{url('/ad_about_us')}}">About us</a></li>
							<li><a href="{{url('/ad_mrd')}}">MRD Services</a></li>
							<li><a href="{{url('/ad_mrd_main')}}">MRD Contents</a></li>
							<li>
								<a>
									<form method="POST" action="{{ route('logout') }}" class="inline">
										@csrf
										<button type="submit" class="btn btn-info btn-sm d-flex" style="border-radius:10px">
											{{ __('Log Out') }}
										</button>
									</form>
								</a>
							</li>
							

						</ul>
						
					</li>







				</ul>

				<div style="margin-top:469px;" class="copyright">
					<p><strong>Millenium Hospital Admin Dashboard</strong> © 2022 All Rights Reserved</p>

				</div>
			</div>
		</div>