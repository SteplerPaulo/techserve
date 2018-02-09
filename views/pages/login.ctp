<section>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<?php echo $this->Form->create('User',array('inputDefaults' => array('label'=>false,'class'=>'form-control','between'=>'<div class="form-group">','after'=>'</div>')));?>				

			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Please Log In</h3>
				</div>
				<div class="panel-body">
					<?php echo $this->Session->flash('auth').'<br>';?>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" placeholder="Username" required="required">
					</div><br/>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-key"></i></span>
						<input id="email" type="text" class="form-control" placeholder="Password" required='required'>
					</div>
					<br/>
					<button class="btn btn-success" type="button">Log In</button>
					<button class="btn btn-default" type="button">Forgot Password ?</button>
					<hr/>
					<i class="fa fa-lock"></i></span><a href="javascript:void()" class="text-muted"> Privacy Policy</a>
				</div>
			</div>
			<?php echo $this->Form->end();?>
		</div>
	</div>
</section>