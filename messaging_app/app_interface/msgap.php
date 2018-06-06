<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>Example of Auto Loading Bootstrap Modal on Page Load</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Weather Data Messanger </h4>
            </div>
            <div class="modal-body">
				<p>Enter the information</p>
				<button data-toggle="collapse" class="btn btn-primary" data-target="#demo">Add recipient</button>

				<div id="demo" class="collapse">
					 <form action="trial.php" method="post">
						<div class="form-group"></br>
							<input type="text" class="form-control" name="username" placeholder="Company/Username">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email Address">
						</div>	
						
						<div class="form-group">
							<input type="text" class="form-control" name="contact" placeholder="Contact">
						</div>
						
						</hr>
						
						<h4>Select the transfer mode</h4>
						<div class="form-group">						
							<label for="editName" class="col-sm-5 control-label">By email</label>							
							<input type="checkbox" class="checkbox-inline" name="email_status" value="1">
						</div>
						
						<div class="form-group">
							<label for="editName" class="col-sm-5 control-label">By phone number</label>
							<input type="checkbox" class="checkbox-inline"  name="contact_status" value="1">
						</div>
							
						<button type="submit" class="btn btn-primary">Enter</button>
					</form>
				</div>
				
			   <h3 class="panel-title">
				<a data-toggle="collapse" href="#collapse1">Registered recipient</a>
				</h3>
    
					<div id="collapse1" class="panel-collapse collapse">
					  <ul class="list-group">
						<li class="list-group-item">One</li>
						<li class="list-group-item">Two</li>
						<li class="list-group-item">Three</li>
					  </ul>
					  <div class="panel-footer">Footer</div>
					</div>
               
            </div>
        </div>
    </div>
</div>
</body>
</html> 
