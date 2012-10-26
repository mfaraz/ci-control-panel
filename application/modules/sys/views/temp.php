<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<base href="<?=base_url()?>" />
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
		<title>Dashboard</title>
		
		<?=link_tag(base_url('application/css/main.css'))?>
		<?=link_tag('http://fonts.googleapis.com/css?family=Cuprum')?>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
		
		<script src="<?=base_url('application/js/plugins/spinner/jquery.mousewheel.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('application/js/plugins/spinner/ui.spinner.js')?>" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
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
		<style type="text/css">
		.CRZ{table-layout:fixed}.CRZ td,
		.CRZ th{overflow:hidden}.CRC{height:0px;position:relative}.CRG{margin-left:-5px;position:absolute; z-index:5}.CRG .CRZ{position:absolute;background-color:red;filter:alpha(opacity=1);opacity:0;width:10px;cursor:e-resize;height:100%}.CRL{position:absolute;width:1px}.CRD{border-left:1px dotted black}
		</style>
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
		            	<?=anchor(base_url('users/profile'), img(base_url('application/images/userPic.png')))?> <span>Elmo, Ruben Giancarlo!</span>
		            </div>
		            <div class="userNav">
		                <ul>
		                    <li><?=anchor(base_url('users/profile'), img(base_url('application/images/icons/topnav/profile.png'))."<span>Profile</span>")?></li>
		                    <li class="dd">
		                    	<?=anchor(base_url('users/messages'), img(base_url('application/images/icons/topnav/messages.png')))?> <span>Messages</span><span class="numberTop">8</span>
		                        <ul class="menu_body">
		                        	<li><?=anchor(base_url('users/new_message'), 'new message', 'class="sAdd"')?></li>
		                        	<li><?=anchor(base_url('users/messages'), 'inbox', 'class="sInbox"')?></li>
		                        </ul>
		                    </li>
		                    <li><?=anchor(base_url('sys/logout'), img(base_url('application/images/icons/topnav/logout.png'))."<span>Logout</span>")?></li>
		                </ul>
		            </div>
		            <div class="fix"></div>
		        </div>
		    </div>
		</div> <!-- topNav -->
	
		<div class="wrapper" id="header">
		    <div class="logo"><a title="" href="/"><img alt="" src="<?=base_url()?>application/images/loginLogo.png"></a></div>
		    <div class="middleNav">
		    	<ul>
		        	<li class="iMes"><a title="" href="#"><span>Support tickets</span></a><span class="numberMiddle">9</span></li>
		            <li class="iStat"><a title="" href="#"><span>Statistics</span></a></li>
		            <li class="iUser"><a title="" href="#"><span>User list</span></a></li>
		            <li class="iOrders"><a title="" href="#"><span>Billing panel</span></a></li>
		        </ul>
		    </div>
		    <div class="fix"></div>
		</div> <!-- header -->
	
		<div class="wrapper">
	
			<!-- Left navigation -->
		    <div class="leftNav">
		    	<ul id="menu">
		        	<li class="dash"><a class="active" title="" href="index.html"><span>Dashboard</span></a></li>
		            <li class="graphs"><a title="" href="charts.html"><span>Graphs and charts</span></a></li>
		            <li class="forms"><a title="" href="form_elements.html"><span>Form elements</span></a></li>
		            <li class="login"><a title="" href="ui_elements.html"><span>Interface elements</span></a></li>
		            <li class="typo"><a title="" href="typo.html"><span>Typography</span></a></li>
		            <li class="tables"><a title="" href="tables.html"><span>Tables</span></a></li>
		            <li class="cal"><a title="" href="calendar.html"><span>Calendar</span></a></li>
		            <li class="gallery"><a title="" href="gallery.html"><span>Gallery</span></a></li>
		            <li class="widgets"><a title="" href="widgets.html"><span>Widgets</span></a></li>
		            <li class="files"><a title="" href="file_manager.html"><span>File manager</span></a></li>
		            <li class="errors"><a class="exp inactive" title="" href="#"><span>Error pages</span><span class="numberLeft">6</span></a>
		            	<ul class="sub" style="display: none;">
		                    <li><a title="" href="403.html">403 page</a></li>
		                    <li><a title="" href="404.html">404 page</a></li>
		                    <li><a title="" href="405.html">405 page</a></li>
		                    <li><a title="" href="500.html">500 page</a></li>
		                    <li><a title="" href="503.html">503 page</a></li>
		                    <li class="last"><a title="" href="offline.html">Website is offline</a></li>
		                </ul>
		            </li>
		            <li class="pic"><a title="" href="icons.html"><span>Buttons and icons</span></a></li>
		            <li class="contacts"><a title="" href="contacts.html"><span>Contact list</span></a></li>
		        </ul>
		    </div>
		
		    
		    <!-- Content -->
		    <div class="content">
		    	<div class="title"><h5>Dashboard</h5></div>
		        
		        <!-- Statistics -->
		        <div class="stats">
		        	<ul>
		            	<li><a title="" class="count grey" href="#">52</a><span>new pending tasks</span></li>
		                
		                <li><a title="" class="count grey" href="#">520</a><span>pending orders</span></li>
		                <li><a title="" class="count grey" href="#">14</a><span>new opened tickets</span></li>
		                <li class="last"><a title="" class="count grey" href="#">48</a><span>new user registrations</span></li>
		            </ul>
		            <div class="fix"></div>
		        </div>
			    
		        <!-- Full width tabs --> 
		        <div class="widget">      
		            <ul class="tabs">
		                <li class="activeTab"><a href="#tab3">Tab Active</a></li>
		                <li><a href="#tab4">Tab Inactive</a></li>
		            </ul>
		            
		            <div class="tab_container">
		                <div class="tab_content" id="tab3" style="display: block;">
		                	<h4 class="aligncenter red pt10">Nice looking tables with custom widgets, file manager and contact list!</h4>
		                    <p><a title="" href="http://themes.kopyov.com/itsbrain">It's Brain</a> is a new unique admin template with lots of <a title="" href="form_elements.html">features</a>, detailed documentation and quick support.. It includes <span class="red">19 html pages</span> and 10 .psd files, loaded with 20+ of plugins and comes with <span class="red">5 pattern backgrounds</span>. Hope you'll find this theme interesting and useful for your next project!</p>
		                </div>
		                <div class="tab_content" id="tab4" style="display: none;">This tab is active now</div>
		            </div>	
		            <div class="fix"></div>	 
		        </div>
		        
		        <!-- Dynamic table -->
		        <div class="table">
		            <div class="head"><h5 class="iFrames">Dynamic table</h5></div>
		            <div class="dataTables_wrapper" id="example_wrapper">
		            	<div class="">
		            		<div class="dataTables_filter" id="example_filter">
		            			<label>Search: <input type="text" placeholder="type here...">
		            				<div class="srch"></div>
		            			</label>
		            		</div>
		            	</div>
		            	<table cellspacing="0" cellpadding="0" border="0" id="example" class="display">
		                	<thead>
		                    	<tr>
		                    		<th>Rendering engine</th>
		                    		<th>Browser</th>
		                    		<th>Platform(s)</th>
		                    		<th>Engine version</th>
		                    		<th>CSS grade</th>
		                    	</tr>
		                    </thead>
		                
			                <tbody>
			                    <tr class="gradeA odd">
			                        <td class=" sorting_1">Gecko</td>
			                        <td>Firefox 1.0</td>
			                        <td>Win 98+ / OSX.2+</td>
			                        <td class="center">1.7</td>
			                        <td class="center">A</td>
			                    </tr>
			                    <tr class="gradeA even">
			                        <td class=" sorting_1">Gecko</td>
			                        <td>Firefox 1.5</td>
			                        <td>Win 98+ / OSX.2+</td>
			                        <td class="center">1.8</td>
			                        <td class="center">A</td>
			                    </tr>
			                    <tr class="gradeA odd">
			                        <td class=" sorting_1">Gecko</td>
			                        <td>Firefox 2.0</td>
			                        <td>Win 98+ / OSX.2+</td>
			                        <td class="center">1.8</td>
			                        <td class="center">A</td>
			                    </tr>
			                    <tr class="gradeA even">
			                        <td class=" sorting_1">Gecko</td>
			                        <td>Firefox 3.0</td>
			                        <td>Win 2k+ / OSX.3+</td>
			                        <td class="center">1.9</td>
			                        <td class="center">A</td>
			                    </tr>
			                    <tr class="gradeA odd">
			                        <td class=" sorting_1">Gecko</td>
			                        <td>Camino 1.0</td>
			                        <td>OSX.2+</td>
			                        <td class="center">1.8</td>
			                        <td class="center">A</td>
			                    </tr>
			                    <tr class="gradeA even">
			                        <td class=" sorting_1">Gecko</td>
			                        <td>Camino 1.5</td>
			                        <td>OSX.3+</td>
			                        <td class="center">1.8</td>
			                        <td class="center">A</td>
			                    </tr>
			                    <tr class="gradeA odd">
			                        <td class=" sorting_1">Gecko</td>
			                        <td>Netscape 7.2</td>
			                        <td>Win 95+ / Mac OS 8.6-9.2</td>
			                        <td class="center">1.7</td>
			                        <td class="center">A</td>
			                    </tr>
			                    <tr class="gradeA even">
			                        <td class=" sorting_1">Gecko</td>
			                        <td>Netscape Browser 8</td>
			                        <td>Win 98SE+</td>
			                        <td class="center">1.7</td>
			                        <td class="center">A</td>
			                    </tr>
			                    <tr class="gradeA odd">
			                        <td class=" sorting_1">Gecko</td>
			                        <td>Netscape Navigator 9</td>
			                        <td>Win 98+ / OSX.2+</td>
			                        <td class="center">1.8</td>
			                        <td class="center">A</td>
			                    </tr>
			                    <tr class="gradeA even">
			                        <td class=" sorting_1">Gecko</td>
			                        <td>Mozilla 1.0</td>
			                        <td>Win 95+ / OSX.1+</td>
			                        <td class="center">1</td>
			                        <td class="center">A</td>
			                    </tr>
			                </tbody>
			            </table>
			        </div>
			    </div>
		        
		        
		        <!-- Widgets -->
		        <div class="widgets">
		            <div class="left">
		            
		                <!-- Search -->
		                <div class="searchWidget">
		                	<form action="">
		                    	<input type="text" placeholder="Enter search text..." id="ac" name="search" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
		                        <input type="submit" value="" name="find">
		                    </form>
		                </div>
		                
		                <!-- Statistics -->
		                <div class="widget">
		                    <div class="head"><h5 class="iChart8">Website statistic</h5><div class="num"><a class="blueNum" href="#">+245</a></div></div>
		                    <table width="100%" cellspacing="0" cellpadding="0" class="tableStatic">
		                        <thead>
		                            <tr>
		                              <td width="21%">Amount</td>
		                              <td>Description</td>
		                              <td width="21%">Changes</td>
		                            </tr>
		                        </thead>
		                        <tbody>
		                            <tr>
		                                <td align="center"><a class="webStatsLink" title="" href="#">980</a></td>
		                                <td>returned visitors</td>
		                                <td><span class="statPlus">0.32%</span></td>
		                            </tr>
		                            <tr>
		                                <td align="center"><a class="webStatsLink" title="" href="#">1545</a></td>
		                                <td>new registrations</td>
		                                <td><span class="statMinus">82.3%</span></td>
		                            </tr>
		                            <tr>
		                                <td align="center"><a class="webStatsLink" title="" href="#">457</a></td>
		                                <td>new affiliates registrations</td>
		                                <td><span class="statPlus">100%</span></td>
		                            </tr>
		                            <tr>
		                                <td align="center"><a class="webStatsLink" title="" href="#">9543</a></td>
		                                <td>new visitors</td>
		                                <td><span class="statPlus">4.99%</span></td>
		                            </tr>
		                            <tr>
		                                <td align="center"><a class="webStatsLink" title="" href="#">354</a></td>
		                                <td>new pending comments</td>
		                                <td><span class="statMinus">9.67%</span></td>
		                            </tr>
		                        </tbody>
		                    </table>                    
		                </div>
		            	
		                <!-- Latest orders -->
		                <div class="widget">
		                    <div class="head"><h5 class="iMoney">Latest orders</h5><div class="num"><a class="blueNum" href="#">+245</a></div></div>
		                    
		                    <div class="supTicket nobg">
		                    	<div class="issueType">
		                        	<span class="issueInfo"><a title="" href="#">VPS Basic</a></span>
		                            <span class="issueNum"><a title="" href="#">[ #21254 ]</a></span>
		                            <div class="fix"></div>
		                        </div>
		                        
		                        <div class="issueSummary">
		                       		<a class="floatleft" title="" href="#"><img alt="" src="application/images/user.png"></a>	
		                            <div class="ticketInfo">
		                            	<ul>
		                                	<li>Current order status:</li>
		                                    <li class="even"><strong class="green">[ pending ]</strong></li>
		                                    <li>User email:</li>
		                                    <li class="even"><a title="" href="#">user@company.com</a></li>
		                                </ul>
		                                <div class="fix"></div>
		                            </div>
		                            <div class="fix"></div>
		                        </div> 
		                    </div>
		                    
		                    <div class="supTicket">
		                    	<div class="issueType">
		                        	<span class="issueInfo"><a title="" href="#">VPS Basic</a></span>
		                            <span class="issueNum"><a title="" href="#">[ #21254 ]</a></span>
		                            <div class="fix"></div>
		                        </div>
		                        
		                        <div class="issueSummary">
		                       		<a class="floatleft" title="" href="#"><img alt="" src="application/images/user.png"></a>	
		                            <div class="ticketInfo">
		                            	<ul>
		                                	<li>Current order status:</li>
		                                    <li class="even"><strong class="green">[ pending ]</strong></li>
		                                    <li>User email:</li>
		                                    <li class="even"><a title="" href="#">user@company.com</a></li>
		                                </ul>
		                                <div class="fix"></div>
		                            </div>
		                            <div class="fix"></div>
		                        </div> 
		                    </div> 
		                    
		                    <div class="supTicket">
		                    	<div class="issueType">
		                        	<span class="issueInfo"><a title="" href="#">VPS Basic</a></span>
		                            <span class="issueNum"><a title="" href="#">[ #21254 ]</a></span>
		                            <div class="fix"></div>
		                        </div>
		                        
		                        <div class="issueSummary">
		                       		<a class="floatleft" title="" href="#"><img alt="" src="application/images/user.png"></a>	
		                            <div class="ticketInfo">
		                            	<ul>
		                                	<li>Current order status:</li>
		                                    <li class="even"><strong class="green">[ pending ]</strong></li>
		                                    <li>User email:</li>
		                                    <li class="even"><a title="" href="#">user@company.com</a></li>
		                                </ul>
		                                <div class="fix"></div>
		                            </div>
		                            <div class="fix"></div>
		                        </div> 
		                    </div>                    
		                </div>
		                
		                <div class="fix"></div>                 
		            </div>
		            
		            
		            <!-- Right widgets -->
		            <div class="right">
		            	
		                <!-- Support tickets widget -->
		                <div class="widget">
		                    <div class="head"><h5 class="iHelp">Support ticket widget</h5><div class="num"><a class="redNum" href="#">+128</a></div></div>
		                    
		                    <div class="supTicket nobg">
		                    	<div class="issueType">
		                        	<span class="issueInfo">General financial issue</span>
		                            <span class="issueNum">[ #21254 ]</span>
		                            <div class="fix"></div>
		                        </div>
		                        
		                        <div class="issueSummary">
		                       		<a class="floatleft" title="" href="#"><img alt="" src="application/images/user.png"></a>	
		                            <div class="ticketInfo">
		                            	<ul>
		                                	<li><a title="" href="#">Eugene Kopyov</a></li>
		                                    <li class="even"><strong class="red">[ High priority ]</strong></li>
		                                    <li>Status: <strong class="green">[ Pending ]</strong></li>
		                                    <li class="even">Oct 25, 2011  23:12</li>
		                                </ul>
		                                <div class="fix"></div>
		                            </div>
		                            <div class="fix"></div>
		                        </div> 
		                    </div>
		                    
		                    <div class="supTicket">
		                    	<div class="issueType">
		                        	<span class="issueInfo">General financial issue</span>
		                            <span class="issueNum">[ #21254 ]</span>
		                            <div class="fix"></div>
		                        </div>
		                        
		                        <div class="issueSummary">
		                       		<a class="floatleft" title="" href="#"><img alt="" src="application/images/user.png"></a>	
		                            <div class="ticketInfo">
		                            	<ul>
		                                	<li><a title="" href="#">Eugene Kopyov</a></li>
		                                    <li class="even"><strong class="red">[ High priority ]</strong></li>
		                                    <li>Status: <strong class="green">[ Pending ]</strong></li>
		                                    <li class="even">Oct 25, 2011  23:12</li>
		                                </ul>
		                                <div class="fix"></div>
		                            </div>
		                            <div class="fix"></div>
		                        </div> 
		                    </div>
		                    
		                    <div class="supTicket">
		                    	<div class="issueType">
		                        	<span class="issueInfo">General financial issue</span>
		                            <span class="issueNum">[ #21254 ]</span>
		                            <div class="fix"></div>
		                        </div>
		                        
		                        <div class="issueSummary">
		                       		<a class="floatleft" title="" href="#"><img alt="" src="application/images/user.png"></a>	
		                            <div class="ticketInfo">
		                            	<ul>
		                                	<li><a title="" href="#">Eugene Kopyov</a></li>
		                                    <li class="even"><strong class="red">[ High priority ]</strong></li>
		                                    <li>Status: <strong class="green">[ Pending ]</strong></li>
		                                    <li class="even">Oct 25, 2011  23:12</li>
		                                </ul>
		                                <div class="fix"></div>
		                            </div>
		                            <div class="fix"></div>
		                        </div> 
		                    </div>                    
		                </div>
		                
		                <!-- Tabs widget -->
		                <div class="widget">       
		                    <ul class="tabs">
		                        <li class="activeTab"><a href="#tab1">Tab 1</a></li>
		                        <li><a href="#tab2">Tab 2</a></li>
		                    </ul>
		                    
		                    <div class="tab_container">
		                        <div class="tab_content" id="tab1" style="display: block;">Active tab</div>
		                        <div class="tab_content" id="tab2" style="display: none;">Now this one is active</div>
		                    </div>	
		                    <div class="fix"></div>		 
		                </div>
		                
		                <!-- User widget -->
		                <div class="widget">
		                    <div class="head">
		                        <div class="userWidget">
		                            <form action="">
		                                <div id="uniform-check1"><span class="checked"><input type="checkbox" checked="checked" name="chbox" id="check1" style="opacity: 0;"></span></div>
		                            </form>
		                        <a class="userLink" title="" href="#">Eugene Kopyov</a>
		                        </div>
		                        <div class="num"><span>Balance:</span><a class="greenNum" href="#">+128</a></div>
		                    </div>
		                    
		                    <table width="100%" cellspacing="0" cellpadding="0" class="tableStatic">
		                        <tbody>
		                            <tr class="noborder">
		                                <td width="50%">Current package:</td>
		                                <td align="right"><strong class="red">VPS Ultimate</strong></td>
		                            </tr>
		                            <tr>
		                                <td>Paid until:</td>
		                                <td align="right">Oct 25, 2011 &nbsp; 23:12</td>
		                            </tr>
		                            <tr>
		                                <td>User email:</td>
		                                <td align="right"><a title="" href="#">user@company.com</a></td>
		                            </tr>
		                            <tr>
		                                <td>Support tickets:</td>
		                                <td align="right"><a class="green" href="#">no pending tickets</a></td>
		                            </tr>
		                            <tr>
		                                <td>Expiring domains:</td>
		                                <td align="right"><span class="expire">12 domains</span></td>
		                            </tr>
		                        </tbody>
		                    </table> 
		                                       
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="fix"></div>
		</div> <!-- wrapper -->
		
		<div id="footer">
			<div class="wrapper">
		    	<span>&copy; Copyright 2011. All rights reserved. It's Brain admin theme by <a title="" href="#">Eugene Kopyov</a></span>
		    </div>
		</div> <!-- footer -->
		
		<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none;"></ul>
		<div id="limiterBox" class="limiterBox" style="position: absolute; display: none;"></div>
		<a id="toTop" href="#" style="display: none;"><span id="toTopHover"></span>To Top</a>
		
	</body>

</html>