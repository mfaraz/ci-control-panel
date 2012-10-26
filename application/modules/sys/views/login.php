<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Admin - Login</title>
		<base href="<?=base_url()?>" />
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
		<?=link_tag(base_url('application/css/main.css'))?>
		<?=link_tag('http://fonts.googleapis.com/css?family=Cuprum')?>
		<script src="<?=base_url('application/js/jquery.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/spinner/jquery.mousewheel.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/spinner/ui.spinner.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/jquery-ui.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/wysiwyg/jquery.wysiwyg.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/wysiwyg/wysiwyg.image.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/wysiwyg/wysiwyg.link.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/wysiwyg/wysiwyg.table.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/tables/jquery.dataTables.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/tables/colResizable.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/forms/forms.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/forms/autogrowtextarea.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/forms/autotab.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/forms/jquery.validationEngine-en.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/forms/jquery.validationEngine.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/forms/jquery.dualListBox.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/forms/chosen.jquery.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/forms/jquery.maskedinput.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/forms/jquery.inputlimiter.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/forms/jquery.tagsinput.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/other/calendar.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/other/elfinder.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/uploader/plupload.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/uploader/plupload.html5.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/uploader/plupload.html4.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/uploader/jquery.plupload.queue.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/ui/jquery.progress.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/ui/jquery.jgrowl.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/ui/jquery.tipsy.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/ui/jquery.alerts.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/ui/jquery.colorpicker.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/wizards/jquery.form.wizard.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/wizards/jquery.validate.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/ui/jquery.breadcrumbs.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/ui/jquery.collapsible.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/ui/jquery.ToTop.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/ui/jquery.listnav.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/ui/jquery.sourcerer.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/ui/jquery.timeentry.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/ui/jquery.prettyPhoto.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/custom.js')?>" type="text/javascript"></script>
	</head>
	<body>
		<!-- Top navigation bar -->
		<div id="topNav">
		    <div class="fixed">
		        <div class="wrapper">
		            <div class="backTo">
		            	<?=anchor(base_url(),img(base_url('application/images/icons/topnav/mainWebsite.png')).'<span>Main website</span>')?>
		            </div>
		            <div class="userNav">
		                <ul>
		                	<li class="selected"><?=anchor(base_url('admin/login'), img(base_url('application/images/icons/topnav/profile.png')).'<span>Login</span>')?></li>
		                    <li><?=anchor(base_url('admin/register'), img(base_url('application/images/icons/topnav/register.png')).'<span>Register</span>')?></li>
		                    <li><?=anchor('mailto:info@mantisworks.net', img(base_url('application/images/icons/topnav/contactAdmin.png')).'<span>Contact admin</span>')?></li>
		                    <li><?=anchor(base_url('admin/help'), img(base_url('application/images/icons/topnav/help.png')).'<span>Help</span>')?></li>
		                </ul>
		            </div>
		            <div class="fix"></div>
		        </div>
		    </div>
		</div> <!-- topNav -->
		
		<!-- Login form area -->
		<div class="loginWrapper">
			<div class="loginLogo"><?=img(base_url('application/images/loginLogo.png'))?></div>
		    <div class="loginPanel">
		        <div class="head"><?=heading('Login', 5, 'class="iUser"')?></div>
		        
		        <?=form_open(current_url(), array('class'=>'mainForm', 'id'=>'valid', 'method'=>'post'))?>
		            <?=form_fieldset()?>
		                <div class="loginRow noborder">
		                    <?=form_label('Username:', 'req1')?>
		                    <div class="loginInput"><?=form_input(array('type'=>'text', 'id'=>'req1', 'class'=>'validate[required]', 'placeholder'=>'Email', 'name'=>'email'))?></div>
		                    <div class="fix"></div>
		                </div>
		                
		                <div class="loginRow">
		                    <?=form_label('Password:', 'req2')?>
		                    <div class="loginInput"><?=form_input(array('type'=>'password', 'id'=>'req2', 'class'=>'validate[required]', 'placeholder'=>'Password', 'name'=>'password'))?></div>
		                    <div class="fix"></div>
		                </div>
		                
		                <div class="loginRow">
		                	<?=form_submit(array('class'=>'greyishBtn submitForm', 'value'=>'Login', 'name'=>'mysubmit'))?>
		                	<div class="fix"></div>
		                </div>
		            <?=form_fieldset_close()?>
		        <?=form_close()?>
		    </div> <!-- loginPanel -->
		    
		    <?=validation_errors()?>
		    
		</div> <!-- loginWrapper -->
		
		<?=anchor('#', '<span id="toTopHover"></span>To Top', 'id="toTop"')?>
		
	</body>
</html>