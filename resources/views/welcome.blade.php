<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dynamically add and remove element with jQuery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron text-center">
	  <h1>Dynamically add and remove element with jQuery</h1>
	</div>
	<div class="container">
	  <div class="row">
		
		<div class="col-md-6 col-sm-12">
			@if(session()->has('success'))
			<div class="alert alert-success success-alert">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="fa fa-check-circle fa-2x" aria-hidden="true"></i> <span style="font-size: 25px;">{{ session()->get('success') }} </span>
			</div>
			@endif	
			<form method="post" action="{{route('savetodb')}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<table  class="table table-striped" style="margin-bottom: 0px;" id="myTable6">
					<thead>
						<tr>
						  <th>S.No.</th>
						  <th>Name & Address</th>
						  <th>Phone</th>
						  <th>Relation</th>
						</tr>
					</thead>
					<tbody>
						<tr class="tbl_tbl">
						  <td>1</td>
						  <td class="item">
							 <input type="text" class="form-control" name="name_address[]" Placeholder="Name & Address" required>
						  </td>
						  <td class="rate">
							 <input type="number" class="form-control" name="phone[]" placeholder="Phone" value="" required>
						  </td>
						  <td class="disc">
							 <input type="text" class="form-control" name="relation[]" placeholder="Relation" value="" required>
						  </td>
						</tr>
					</tbody>
				</table>
				<a href="#" id="add_new_6" style="padding-left:45px;padding-bottom:15px;font-size:17px;color:#428ff4"><span style="font-size:25px;">+</span> ADD NEW LINE</a>
				<hr>
				<button type="submit" name="sub" class="btn btn-success">Save To Database</button>
			</form>
		</div>
		<div class="col-md-6 col-sm-12">
			<table id="example" class="table">
				<thead>
					<tr>
						<th>S.No.</th>
						<th>Name & Address</th>
						<th>Phone</th>
						<th>Relation</th>
					</tr>
				</thead>	
				<tbody>
				{!! $showAR !!}
				</tbody>
			</table>
		</div>
	  </div>
	</div>
	<script src="{{URL('/')}}/customjs/jquery-2.2.3.min.js"></script>			
	<script src="{{URL('/')}}/customjs/add-remove.js"></script>			 
</body>
</html>















