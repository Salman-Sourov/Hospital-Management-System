{{View::make('include.header')}}
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<script type='text/javascript' src="js/jquery.min.js"></script> 
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
@yield('content')
<section class="inner-header" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>MRD SERVICES</h1>
      </div>
    </div>
  </div>
</section>
<!-- end inner header -->

@php
    $mrd_main= App\Models\MrdMain::first();
@endphp
<section class="inner-content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
       
        <h1 class="title-bottom-line"><strong>MRD &nbsp;</strong> SERVICES DEPARTMENT </h1>
        <p><?= $mrd_main->content ?></p>
        <br>
        
        <br>
        
      </div>
    </div>
    <!-- end row --> 
  </div>
</section>

@php
    $services= App\Models\MrdService::all();
@endphp
<section style="padding: 5px 0;" class="inner-content">
<div class="container">
  <div class="row">
    <div class="col-12 d-flex mb-5">
      <a href="{{$mrd_main->bc_form}}" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-file"></i> Birth Certificate Form</a>
      <a href="{{$mrd_main->dc_form}}" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-file"></i> Death Certificate Form</a>
    </div>
    <div class="col-md-8">
      @php
          $sl=1;
      @endphp
      <table class="table table-striped table-responsive">
        <thead>
          <tr>
            <th>Sl.</th>
            <th>Service Name</th>
            <th>Fee</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($services as $item)
              <tr>
                <td><?= $sl++ ?></td>
                <td>{{$item->name}}</td>
                <td>BDT {{$item->fee}}/-</td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>






{{View::make('include.footer')}}