<?php

$con = mysqli_connect("localhost", "root", "", "my_tt_db");
?>
<div class="container">
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title fw-bold" id="exampleModalLongTitle">ADD DATA</h5>
					<a type="button" class="close text-dark" data-bs-dismiss="modal" aria-label="Close">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
							<path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
						</svg>
					</a>
				</div>
				<div class="modal-body">
					
						<form action="" method="post">
							<div class="mb-3">
								<label for="name">Name</label>
								<input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
							</div>
							<div class="mb-3">
								<label for="number">Contact</label>
								<input id="number" name="number" type="number" class="form-control" placeholder="Mobile Number" required>
							</div>
							<div class="mb-3">
								<label for="email">Email</label>
								<input id="email" type="email" name="email" class="form-control" placeholder="name@example.com" required>
							</div>
							<div class="mb-3">
								<label for="country">Country</label>
								<select id="country" name="country" class="form-select" aria-label="Default select example">
									<option value="">Select Your Country</option>
									<option value="USA">USA</option>
									<option value="INDIA">INDIA</option>
									<option value="AUSTRAILIA">AUSTRAILIA</option>
									<option value="SOUTH AFRICA">SOUTH AFRICA</option>
									<option value="MEXICO">MEXICO</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="Message">Message</label>
								<textarea name="Message" id="Message" cols="30" rows="5" class="form-control"></textarea>
							</div>
						</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
					<button type="reset" id="click" class="btn btn-dark">Clear</button>
					<button type="button" id="submit" class="btn btn-warning" data-bs-dismiss="modal">Save</button>
				</div>
			</div>
		</div>
	</div>



	<div class="container">
	<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title fw-bold" id="exampleModalLongTitle">UPDATE DATA</h5>
					<a type="button" class="close text-dark" data-bs-dismiss="modal" aria-label="Close">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
							<path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
						</svg>
					</a>
				</div>
				<div class="modal-body">
						<form action="" method="post">
							<div class="mb-3">
								<label for="name">Name</label>
								<input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
							</div>
							<div class="mb-3">
								<label for="number">Contact</label>
								<input id="number" name="number" type="number" class="form-control" placeholder="Mobile Number" required>
							</div>
							<div class="mb-3">
								<label for="email">Email</label>
								<input id="email" type="email" name="email" class="form-control" placeholder="name@example.com" required>
							</div>
							<div class="mb-3">
								<label for="country">Country</label>
								<select id="country" name="country" class="form-select" aria-label="Default select example">
									<option value="">Select Your Country</option>
									<option value="USA">USA</option>
									<option value="INDIA">INDIA</option>
									<option value="AUSTRAILIA">AUSTRAILIA</option>
									<option value="SOUTH AFRICA">SOUTH AFRICA</option>
									<option value="MEXICO">MEXICO</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="Message">Message</label>
								<textarea name="Message" id="Message" cols="30" rows="5" class="form-control"></textarea>
							</div>
						</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
					<button type="reset" id="click" class="btn btn-dark">Clear</button>
					<button type="button" id="submit" class="btn btn-warning" data-bs-dismiss="modal">Save</button>
				</div>
			</div>
		</div>
	</div>



	<div class="table-responsive-sm" style="margin-top: -3%;">
		<table class="table table-dark table-bordered border-light table-striped table-hover rounded-3 text-center" id="tabb">
			<thead class="table-light">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Number</th>
					<th>Email</th>
					<th>Country</th>
					<th>Message</th>
					<th>Action</th>
				</tr>
			</thead>
			<?php
			$sql = "select * from data";
			$result = $con->query($sql);
			while ($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo"	<td> {$row['id']} </td>";
				echo"	<td> {$row['name']} </td>";
				echo"	<td> {$row['number']} </td>";
				echo"	<td> {$row['email']} </td>";
				echo"	<td> {$row['country']} </td>";
				echo"	<td> {$row['Message']} </td>";
       	 		echo"<td><a type='button' class='del mx-3' data-id='{$row['id']}'><svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-trash text-info' viewBox='0 0 16 16'>
					<path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
					<path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
				  </svg><a type='button' data-bs-toggle='modal' data-bs-target='#update' class='' data-id='{$row['id']}'><svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-pencil-square text-warning' viewBox='0 0 16 16'>
				  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
				  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
				</svg></td>";
        		echo"</tr>";
      		}     
			?>

		</table>
	</div>
	</div>
<script src="script.js"></script>
<script>
	$(document).ready(function() {
$('#tabb').DataTable();

		$('#click').click(function() {
			$('#name').val('');
			$('#number').val('');
			$('#email').val('');
			$('#country').val('');
			$('#Message').val('');
		});
	});
	$(document).on("click",".del",function(){
        var del=$(this);
        var id=$(this).attr("data-id");
        $.ajax({
        type: "POST",
        url: "delete.php",
        data: {id:id},
        success: function () {
           del.closest("tr").hide();
        }
        
    });
    });

</script>