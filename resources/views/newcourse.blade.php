<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Add New Course</title>

<!-- Bootstrap Core CSS -->
<link href="{{ asset('css/bootstrap.min.css') }}"
	rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="{{ asset('css/metisMenu.min.css') }}"
	rel="stylesheet">

<!-- Custom CSS -->
<link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

<!-- Custom Fonts -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<form method="post" action="/insertcourse">
  {{ csrf_field() }}
	<div id="wrapper">

		<!-- Navigation -->


<!--nav-->
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="page-header"></h4>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Add Course</div>
						<div class="panel-body">
							<div class="row">
						 	<div class="col-lg-10">

										<div class="form-group">
											<div class="col-lg-4">
					 <label>Course ID<span id="" style="font-size:11px;color:red">*</span>	</label>
											</div>
											<div class="col-lg-6">

  <input class="form-control" name="ID" id="cshort" required="required">
							<span id="course-availability-status" style="font-size:12px;"></span>				</div>

										</div>

								<br><br>

		<div class="form-group">
		<div class="col-lg-4">
		<label>Course Full Name<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
		<input class="form-control" name="courseName" id="cfull" required="required">
	<span id="course-status" style="font-size:12px;"></span>				</div>
	 </div>

	 <br><br>

	<div class="form-group">
	<div class="col-lg-4">
	 <label>Creation Date</label>
	</div>
	<div class="col-lg-6">
	<input class="form-control" name="createdOn" value="<?php echo date('Y-m-d');?>" readonly="readonly">

	</div>
	</div>
	</div>

		<br><br>

	<div class="form-group">
					<div class="col-lg-4">

					</div>
					<div class="col-lg-6"><br><br>
	<input type="submit" class="btn btn-primary" name="submit" value="Create Course"></button>
					</div>

				</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

	<script src="{{ asset('js/jquery.min.js') }}"
		type="text/javascript"></script>


	<script src="{{ asset('js/bootstrap.min.js') }}"
		type="text/javascript"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="{{ asset('js/metisMenu.min.js') }}"
		type="text/javascript"></script>

	<!-- Custom Theme JavaScript -->
	<script src="{{ asset('js/sb-admin-2.js') }}" type="text/javascript"></script>
</form>
</body>

</html>
