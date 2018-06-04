<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather data Messanger</title>

    <!-- Bootstrap -->
  <link href="bootstrap.css" rel="stylesheet" >
	<link href="datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>      
            
                
            
            <div class="container">
			 <div class="jumbotron">
			</br>
			<h2  align="center" style="color:#ffff;">WEATHER DATA MESSAGING APP </h2>
			<p align="center"><img src="datatables/images/suns.jpg" height="80" width="80"></p>
			
				<p style="color:#ffff;">Click add recipient</p>
				<button data-toggle="collapse" class="btn btn-primary" data-target="#demo">Add recipient</button></br>

				<div id="demo" class="collapse">
					 <form action="trial.php" method="post">
						<div class="form-group"></br>
							<input type="text" class="form-control" name="username" placeholder="Recipientname">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email Address">
						</div>	
						
						<div class="form-group">
							<input type="text" class="form-control" name="contact" placeholder="Contact">
						</div>
						
						</hr>
						
						<h4 style="color:#ffff;">Select the transfer mode</h4>
						<div class="form-group">						
							<label for="editName" class="col-sm-5 control-label" style="color:#ffff;">By email</label>							
							<input type="checkbox" class="checkbox-inline" name="email_status" value="1">
						</div>
						
						<div class="form-group">
							<label for="editName" class="col-sm-5 control-label" style="color:#ffff;">By phone number</label>
							<input type="checkbox" class="checkbox-inline"  name="contact_status" value="1">
						</div>
							
						<button type="submit" class="btn btn-primary">Enter</button>
					</form>
				</div>
				
				
				<br><a data-toggle="collapse" href="#collapse1"><span class="label label-primary">Registered recipient</span></a></br>
					<br>
					<div id="collapse1" class="panel-collapse collapse">
								  <table class="table table-striped table-bordered table-hover" id="manageMemberTable">
									<thead>
										<tr>
											<th style="color:#ffff;">S.no</th>
											<th style="color:#ffff;">User</th>
											<th style="color:#ffff;">Email</th>
											<th style="color:#ffff;">Phone Number</th>
											<th style="color:#ffff;">Option</th>
										</tr>
									</thead>
									
									<tbody>
										
									<tbody>	
								</table>
					  <div class="panel-footer">Footer</div>
					</div>
               
         
		 <!----------------------------------- remove modal-------------------------------------------- -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeMemberModal">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Remove user</h4>
  </div>
  <div class="modal-body">
  <p>Do you really want to remove?</p>
  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" id="removeBtn">Save changes</button>
  </div>
  </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--------------------------------------------------------- /remove modal ------------------------------>


<!-- ----------------------------------------------------edit modal ------------------------------------ -->
	<div class="modal fade" tabindex="-1" role="dialog" id="editMemberModal">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Edit User</h4>
  </div>
   <form class="form-horizontal" action="php_action/update.php" method="POST" id="updateMemberForm">
  <div class="modal-body">
			<div class="edit-messages"></div>
					<div class="form-group">
						<label for="editName" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="editName" name="editName" placeholder="Name">
						</div>
					  </div>
					  <div class="form-group">
						<label for="editEmail" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="editEmail" name="editEmail" placeholder="Email">
						</div>
						</div>
					   <div class="form-group">
						<label for="editPhoneNumber" class="col-sm-2 control-label">Phone Number</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="editPhoneNumber" name="editPhoneNumber" placeholder="Phone Number">
						</div>
					  </div>
					 
  </div>
  
  <div class="modal-footer editMemberModal">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary" id="removeBtn">Save changes</button>
  </div>
  </form>
  </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<!-- ------------------------------------------------------------------/edit modal -------------------------------------- -->
	
<!-- ------------------------------------------------------------------select  modal -------------------------------------- -->
	<div class="modal fade" tabindex="-1" role="dialog" id="selectMemberModal">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> SELECT TRANSFER MODE</h4>
  </div>
   <form class="form-horizontal" action="php_action/select.php" method="POST" id="selectMemberForm">
  <div class="modal-body">
			<div class="edit-messages"></div>
            <div class="form-group">
                
			 </div>
			
             <div class="form-group">
              
                    <label for="Email" class="col-sm-5 control-label">Email</label>
                    <div class="col-sm-5">
				    <input type="text" class="form-control" id="email"  disabled>
                    </div>
                    <div class="col-sm-2">
					<input type="checkbox" class="checkbox-inline"  name="email_status" value="1">
                    </div>
				
			 </div>
             <hr/>
             <div class="form-group">
                <div style="margin-left:10px" >
                    <label for="PhoneNumber" class="col-sm-5 control-label">Phone Number</label>
                    <div class="col-sm-5">
				    <input type="text" class="form-control" id="PhoneNumber" disabled>
                    </div>
                    <div class="col-sm-2">
					<input type="checkbox" class="checkbox-inline" name="contact_status" value="1">
                    </div>
				</div>
			 </div>		 
  </div>
  
  <div class="modal-footer editMemberModal">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary" id="removeBtn">Save changes</button>
  </div>
  </form>
  </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>




<!-- ------------------------------------------------------------------select modal -------------------------------------- -->
    
    </div>
	
	</div>
	<!-- end container class -->
		 
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="datatables/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="datatables/js/bootstrap.min.js"></script>
	<script src="datatables/js/jquery.dataTables.min.js"></script>
	<script src="datatables/js/dataTables.bootstrap.min.js"></script>
	<script src="index.js"></script>
	<script>
	
	$(document).ready(function(){
    $('#manageMemberTable').DataTable();
	} );

	</script>
	
   
  </body>
</html>