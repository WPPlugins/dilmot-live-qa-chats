<div class="col-xs-12 zero-lateral-padding">
	<img class="img-responsive" id="public-stream-guest-image" src="<?php echo $templateData['stream_image']; ?>">
</div>
  
<?php if ($templateData['stream_status'] != 'closed') { ?>
	<iframe src="<?php echo $templateData['question_form_iframe_url']; ?>" id="new-question-form" width="100%" height="290" scrolling="no" frameborder="0" style="margin-bottom:30px;"></iframe>
<?php } ?>