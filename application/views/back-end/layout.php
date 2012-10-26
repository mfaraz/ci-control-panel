<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Dashboard</title>
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
		<script src="<?=base_url('application/js/plugins/flot/jquery.flot.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/flot/jquery.flot.orderBars.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/flot/jquery.flot.pie.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/flot/excanvas.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/flot/jquery.flot.resize.js')?>" type="text/javascript"></script>
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
		<script src="<?=base_url('application/js/charts/chart.js')?>" type="text/javascript"></script>
	</head>
	<body>
		<div id="topNav">
		    <div class="fixed">
		        <div class="wrapper">
		            <div class="welcome">
		            	<?=anchor(base_url('users/profile'), img(base_url('application/images/userPic.png')))?> <span><?=$this->session->userdata('surname')?>, <?=$this->session->userdata('name')?>!</span>
		            </div> <!-- welcome -->
		            <div class="userNav">
		                <ul>
		                    <li><?=anchor(base_url('admin/users/profile'), img(base_url('application/images/icons/topnav/profile.png'))."<span>Profile</span>")?></li>
		                    <li class="dd">
		                    	<?=anchor(base_url('admin/users/messages'), img(base_url('application/images/icons/topnav/messages.png')))?> <span>Messages</span><span class="numberTop">8</span>
		                        <ul class="menu_body">
		                        	<li><?=anchor(base_url('admin/users/new_message'), 'new message', 'class="sAdd"')?></li>
		                        	<li><?=anchor(base_url('admin/users/messages'), 'inbox', 'class="sInbox"')?></li>
		                        </ul>
		                    </li>
		                    <li><?=anchor(base_url('admin/logout'), img(base_url('application/images/icons/topnav/logout.png'))."<span>Logout</span>")?></li>
		                </ul>
		            </div> <!-- userNav -->
		            <div class="fix"></div>
		        </div> <!-- wrapper -->
		    </div> <!-- fixed -->
		</div> <!-- topNav -->
	
		<div class="wrapper" id="header">
		    <div class="logo">
		    	<?=anchor(base_url('admin/dashboard'), img(base_url('application/images/loginLogo.png')))?>
		    </div> <!-- logo -->
		    
		    <div class="middleNav">
		    	<ul>
		        	<li class="iMes">
		        		<?=anchor(base_url(), '<span>Support tickets</span>')?> <span class="numberMiddle">9</span>
		        	</li>
		            <li class="iUser">
		            	<?=anchor(base_url(), '<span>Admin list</span>')?>
		            </li>
		        </ul>
		    </div> <!-- middleNav -->
		    
		    <div class="fix"></div>
		</div> <!-- header -->
	
		<div class="wrapper">
	
			<!-- Left navigation -->
		    <div class="leftNav">
		    	<ul id="menu">
		    	<? foreach($modules as $m): ?>
			    	<li class="<?=$m->class?>"><?=anchor("admin/{$m->controller}", "<span>{$m->module}</span>", 'class="'.$m->active.'"')?></li>
		    	<? endforeach; ?>
		    	</ul>
		    </div> <!-- leftNav -->
		
		    <!-- Content -->
		    <div class="content">
		    	<?=$module_content?>
		    </div> <!-- content -->
		    
		    <div class="fix"></div>
		</div> <!-- wrapper -->
		
		<div id="footer">
			<div class="wrapper">
		    	<span>&copy; Copyright 2012. All rights reserved. <?=anchor('http://www.mantisworks.net', 'Mantisworks')?></span>
		    </div> <!-- wrapper -->
		</div> <!-- footer -->
		
		<?=anchor('#', '<span id="toTopHover"></span>To Top', 'id="toTop"')?>
	</body>
</html>