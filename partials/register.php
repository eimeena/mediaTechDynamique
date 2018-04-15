<?php
	include 'partials/_header.php';
  ?>

  <div class="container-fluid">

  	<div class="container">
  		<div class="g-form col-md-6">
  			<p></p>
  			<div class="container">
	<div class="row">
    <div class="col col-md-5">
		<div class="modal-content">
    			<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">
						Create an account
					</h4>
				</div>
				<div class="modal-body">
					<form novalidate="novalidate" id="formSignUp">
						<div id="errorSignUp">
						
						</div>
						
						<div class="form-group">
							<label class="control-label" for="email">Email</label>
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input class="form-control" placeholder="email@example.com" name="emailSignUp" id="emailSignUp" type="email">
							</div>
						</div>
							
						<div class="form-group">
							<label class="control-label" for="password">Password</label>
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input class="form-control" placeholder="password" name="passwordSignUp" id="passwordSignUp" type="password">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label" for="password">Confirm password</label>
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input class="form-control" placeholder="confirm password" name="passwordConfirmSignUp" id="passwordConfirmSignUp" type="password">
							</div>
						</div>
						
						<div class="checkbox">
							<label>
								<input id="term" type="checkbox">
								I have read and accepted  <a target="_blank" href="#">the terms and conditions of use.</a>
							</label>
						</div>
						
						<button type="submit" id="btnSignUp" class="btn btn-primary" style="width: 127px;">Create an account</button>
					</form>
					
				</div>
				<div class="modal-footer">
					<small>Already a member? <a class="alreadySignUp" href="#">Login here</a></small>
				</div>
			</div>
            </div>
	</div>
</div>
  		</div>
  		<div class="b-form g-form col-md-6"></div>
  		
  	</div>
  	
  </div>