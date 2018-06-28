//global the manage member table
var manageMemberTable;

$(document).ready(function(){
	manageMemberTable=$("#manageMemberTable").DataTable({
		"ajax": "php_action/retrieve.php",
		"order": []
	});

});

/****************************************************** Remove user ************************************************************** */

function removeMember(id){

		if(id){
			//click remove btn
			$("#removeBtn").unbind('click').bind('click',function(){
				$.ajax({
					url:'php_action/remove.php',
					type:'post',
					data: {user_id : id},
					dataType: 'json',
					success:function(response){
						if(response.success==true){
							$(".removeMessages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                             '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                            '</div>');
							
							//refresh the table
							manageMemberTable.ajax.reload(null,false);
							//close the modal
							$("#removeMemberModal").modal('hide');
						}else{
							$(".removeMessages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                             '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                            '</div>');
						}
					}
				});
			});//click remove btn
		}else{
			alert('Error: Refresh the page again');
		}
	
	
}



/****************************************************** Remove user ************************************************************** */


/****************************************************** Edit user ************************************************************** */

function editMember(id){
	if(id){
		
		
		
		//remove the error
		$(".form-group").removeClass('has-error').removeClass('has-success');
		$(".text-danger").remove();
		$(".edit-messages").html("");
		// remove the id
		$("#member_id").remove();
		//fetch the member data
		$.ajax({
			url: 'php_action/getSelectedUser.php',
			type: 'post',
			data: {user_id : id},
			dataType:'json',
			success: function(response){
				$("#editName").val(response.name);
				$("#editEmail").val(response.email);
				$("#editPhoneNumber").val(response.PhoneNumber);
				
				//member id
				$(".editMemberModal").append('<input type="hidden" name="member_id" id="member_id" value="'+response.id+'"/>');
				//update the member data
				$("#updateMemberForm").unbind('submit').bind('submit',function(){
					//remove error messages
					$(".text-danger").remove();
					
					var form = $(this);
					//validation
			var editName= $("#editName").val();
			var editEmail= $("#editEmail").val();
			var editPhoneNumber= $("#editPhoneNumber").val();
			
			
			if(editName==""){
				$("#editName").closest('.form-group').addClass('has-error');
				$("#editName").after('<p class="text-danger">The Name field is required</p>');
			}else{
				$("#editName").closest('.form-group').removeClass('has-error');
				$("#editName").closest('.form-group').addClass('has-success');
				
			}
			
			if(editEmail==""){
				$("#editEmail").closest('.form-group').addClass('has-error');
				$("#editEmail").after('<p class="text-danger">The Address field is required</p>');
			}else{
				$("#editEmail").closest('.form-group').removeClass('has-error');
				$("#editEmail").closest('.form-group').addClass('has-success');
			
			}
			
			if(editPhoneNumber==""){
				$("#editPhoneNumber").closest('.form-group').addClass('has-error');
				$("#editPhoneNumber").after('<p class="text-danger">The Contact field is required</p>');
			}else{
				$("#editPhoneNumber").closest('.form-group').removeClass('has-error');
				$("#editPhoneNumber").closest('.form-group').addClass('has-success');
				
			}
		
			if(editName && editEmail && editPhoneNumber){
				  $.ajax({
					url : form.attr('action'),
                    type : form.attr('method'),
                    data : form.serialize(),
                    dataType : 'json',
					success:function(response){
						if(response.success==true){
							  $(".edit-messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                             '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                            '</div>');
						  
						  //reload the datatables
							manageMemberTable.ajax.reload(null,false);
						  //this function is built in function of datatables
						
						//remove the error
						$(".form-group").removeClass('has-success').removeClass('has-error');
						$(".text-danger").remove();
						}
						else{
							$(".edit-messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                             '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                            '</div>');
						}
					}//success
				  });//ajax
			}//if
					
					return false;
				});
				
			}//success
		});//fetch selected member info
		
	}else{
			alert('Error: Refresh the page again');
	}
}



/****************************************************** end Edit user ************************************************************** */

/****************************************************** select transfer mode ************************************************************** */
function select(id){
	if(id){
		
		//remove the error
		$(".form-group").removeClass('has-error').removeClass('has-success');
		$(".text-danger").remove();
		$(".edit-messages").html("");
		// remove the id
		$("#member_id").remove();
		//fetch the member data
		$.ajax({
			url: 'php_action/getSelectedUser.php',
			type: 'post',
			data: {user_id : id},
			dataType:'json',
			success: function(response){
				
				$("#email").val(response.email);
				$("#PhoneNumber").val(response.PhoneNumber);
				
				//member id
				$(".editMemberModal").append('<input type="hidden" name="member_id" id="member_id" value="'+response.id+'"/>');
				//update the member data
				$("#updateMemberForm").unbind('submit').bind('submit',function(){
					//remove error messages
					$(".text-danger").remove();
					
					var form = $(this);
					//validation
			var email= $("#email").val();
			var PhoneNumber= $("#PhoneNumber").val();
			
			
			
		
			if(email || PhoneNumber){
				  $.ajax({
					url : form.attr('action'),
                    type : form.attr('method'),
                    data : form.serialize(),
                    dataType : 'json',
					success:function(response){
						if(response.success==true){
							  $(".edit-messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                             '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                            '</div>');
						  
						  //reload the datatables
							manageMemberTable.ajax.reload(null,false);
						  //this function is built in function of datatables
						
						//remove the error
						$(".form-group").removeClass('has-success').removeClass('has-error');
						$(".text-danger").remove();
						}
						else{
							$(".edit-messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                             '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                            '</div>');
						}
					}//success
				  });//ajax
			}//if
					
					return false;
				});
				
			}//success
		});//fetch selected member info
		
	}else{
			alert('Error: Refresh the page again');
	}
}


/****************************************************** end select transfer mode r ************************************************************** */