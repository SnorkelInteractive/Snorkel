	<hr/>
	<? 
	if (isset($save_successful)){
		if ($save_successful){
			?>
			<div class="alert alert-success" id="save_confirm">
				<img src="/img/accept.png" /> Your contact submission was sent successfully.
			</div>		
			<?
		}
	}
	?>
	<form action="" method="post">
		<p><label>Name: <?=form_error('name');?><br/><input type="text" name="name" id="name" placeholder="Your name" value="<?=set_value('name');?>" class="req_input" required /></label></p>
		<p><label>E-mail: <?=form_error('email');?><br/><input type="email" name="email" id="email" placeholder="example@domain.com" class="req_input" value="<?=set_value('email');?>" required /></label></p>
		<p><label>Comment: <?=form_error('comment');?><br/><textarea name="comment" id="comment" class="req_input" required><?=set_value('comment');?></textarea></label></p>

		<button type="submit" name="submit" id="submit" class="btn btn-primary"><i class="icon-envelope icon-white"></i>&nbsp;Please Contact Me!</button>
	</form>