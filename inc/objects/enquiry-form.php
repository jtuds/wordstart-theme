<form action"<?php the_permalink(); ?>" method="post" id="enquiryForm" role="form">
	<fieldset>
		<div class="form__field">
			<label for="enq_name" class="form__label">Name</label>
			<input type="text" name="enq_name" id="enq_name" class="form__input form__field--full form__input--text">
		</div><!--
		--><div class="form__field">
			<label for="enq_email" class="form__label">Email</label>
			<input type="email" name="enq_email" id="enq_email" class="form__input form__field--full form__input--text">
		</div><!--
		--><div class="form__field">
			<label for="enq_company" class="form__label">Company</label>
			<input type="text" name="enq_company" id="enq_company" class="form__input form__field--full form__input--text">
		</div>
		<div class="form__field">
			<label for="enq_msg" class="form__label">Enquiry</label>
			<textarea name="enq_msg" id="enq_msg" class="form__input form__input--full form__input--textarea" placeholder="Tell us about your enquiry"></textarea>
		</div>
		<input type="hidden" name="form_source_url" value="<?php the_permalink(); ?>">
		<input type="hidden" name="form_source_page" value="<?php the_title(); ?>">
		<label for="form_no" class="visuallyhidden">Please don't fill in this field. This field is to detect and stop spam bots.</label>
		<input type="text" name="form_no" class="visuallyhidden" value="">
	</fieldset>
	<button type="submit" name="enq_submit" id="enq_submit" class="btn btn--background-secondary-grad form__btn">Submit</button>
</form>
