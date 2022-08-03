<!DOCTYPE html>
<html>
<head>

	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container"><br>
		
		<h1 class="text-primary text-uppercase text-center">AJAX CRUD OPERATION</h1>
		
		<div class="d-flex justify-content-end">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

		
		</div>
		
		<h2 class="text-danger">All Records</h2>
		<div id="records_content"></div>


		<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">AJAX CRUD OPERATION</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>
				  <div class="modal-body">
					<div class="form-group">
						<label>Firstname:</label>
						<input type="text" name="" id="firstname" class="form-control" placeholder="First Name">
					</div>
					
					<div class="form-group">
						<label>Lastname:</label>
						<input type="text" name="" id="lastname" class="form-control" placeholder="Last Name">
					</div>
					
					<div class="form-group">
						<label >Email Id:</label>
						<input type="email" name="" id="email" class="form-control" placeholder="Email">
					</div>
					
					<div class="form-group">
						<label >Mobile:</label>
						<input type="text" name="" id="mobile" class="form-control" placeholder="Mobile Number">
					</div>
					
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-primary" onclick="addRecord()">Save</button>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					
				  </div>
				</div>
			  </div>
			</div>
	</div>
	
	
		
		
	
	
	<script type="text/javascript">
	
		function readRecords(){
			var readrecord = "readrecord";
			$.ajax({
				url:"response.php",
				type:"post",
				data:{"readrecord:readrecord"},
				success:function(data,status){
					$('#records_content').html(data);
				}
			});
		}
		function addRecord(){
			var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();
			var email = $('#email').val();
			var mobile = $('#mobile').val();
			
			$.ajax({
				url:"response.php",
				type:'post',
				data:{firstname :firstname,
					lastname : lastname,
					email : email,
					mobile : mobile
					
					
				},
				
				success:function(data,status){
					readRecords();
				}
			});
		}
	</script>
	
	
</body>



</html>