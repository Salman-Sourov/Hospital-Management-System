<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Appointment Information</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
            <img src="<?php echo $pic ?>" alt="">
            <p>Ashraf Tower, 4/1 </p>
               <p> Walter Road, Sutrapur, Dhaka-1100</p>

					
						<table>
							<tr>
								<td class="title">
									
								</td>

								<td>
									Invoice #: {{$data->id}}<br />
									Created: {{$data->created_at}}<br />
									
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					
				</tr>

				<tr class="heading">
					<td>Patient Information</td>
						<td></td>

					
				</tr>

				<tr class="item">
					<td>Patient Name</td>

					<td>{{$data->patient_name}}</td>
				</tr>

				<tr class="item">
					<td>Phone Number</td>

					<td>{{$data->phone_number}}</td>
				</tr>

				<tr class="item last">
					<td>Date Of Birth:</td>

					<td>{{$data->date_of_birth}}</td>
				</tr>
        <tr class="item last">
					<td>Gender:</td>

					<td>{{$data->gender}}</td>
				</tr>

				


        <tr class="heading">
					<td>Appointment Info</td>

					<td></td>
				</tr>

				<tr class="item">
					<td>Doctor Name:</td>

					<td>{{$data->name}}</td>
				</tr>

				<tr class="item">
					<td>Department::</td>

					<td>{{$data->dept_name}}</td>
				</tr>

				<tr class="item last">
					<td>Problem:</td>

					<td>{{$data->messege}}</td>
				</tr>

        <tr class="item last">
					<td>Visit Date:</td>

					<td>{{$data->visit_date}}</td>
				</tr>
        <tr class="item last">
					<td>Issue Date:</td>

					<td>{{$data->created_at}}</td>
				</tr>

        <tr class="item last">
					<td>Visit Type</td>
					<td>{{$data->visit_type}}</td>
				</tr>
				
				

				
			</table>
			<table>
							<tr>
								 <tr class="heading">
					<td>Millennium Specialized Hospital Limited</td>
					<td>Contact With Us</td>

					<td></td>
				</tr>

								<td>
                Ashraf Tower, 4/1 <br />
                Walter Road, Sutrapur, Dhaka-1100<br />
                
                HOTLINE : 09639206020 <br/>
                EMAIL : millenniumspecialized@gmail.com <br />
									
								</td>
							</tr>
						</table>
		</div>
	</body>

 
</html>