<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Kid Care Systems</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <script src="//code.jquery.com/jquery.js"></script>
    <link href="<?php echo base_url()?>bootstrap_3/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url()?>bootstrap_3/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
   <link href="<?php echo base_url()?>bootstrap_3/css/datepicker.css" rel="stylesheet" media="screen">
   
   <script src="<?php echo base_url()?>bootstrap_3/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url()?>bootstrap_3/js/bootstrap-datepicker.js"></script>
   
   <!--<style>
      body {
        padding-top: 70px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
   </style>-->
   
  </head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>index.php/"><?=$this->config->item('home_icon');?> Kid Care Systems</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
          	<li class="" title="Home"><?php echo anchor('public/market/', ''.$this->config->item('home_icon').' Home');?></li>
            <li class="" title="About"><?php echo anchor('public/market/about', ''.$this->config->item('about_icon').' About');?></li>
          	<li class="" title="Contact Us"><?php echo anchor('public/market/contact', ''.$this->config->item('envelope_icon').' Contact Us');?></li>
          	<li class="" title="Register"><?php echo anchor('public/cart', ''.$this->config->item('pencil_icon').' Register');?></li>
          </ul>          
        </div><!--/.navbar-collapse -->
      </div><!-- END CONTAINER -->
</div><!--END NAVBAR-->

	<div class="container no-padding">
		<div class="panel panel-default">
			<div class="panel-heading">
				<legend><?php echo lang('change_password_heading');?></legend>
				<div class="panel-info">
					<div class="" id="infoMessage">
						<small><?php echo $message;?></small>
					</div>					
				</div>
			</div>
			<?php echo form_open("auth/change_password", 'class="form-horizontal"');?>
				<fieldset>
			<div class="panel-body">			
					<div class="form-group">
      					<label for="old_password" class="control-label"><?php echo lang('change_password_old_password_label', 'old_password');?></label>
      					<div class="input-group">
            				<?php echo form_input($old_password);?>
      					</div>
					</div>
					<div class="form-group">
						<label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
      					<div class="input-group">
            				<?php echo form_input($new_password);?>
      					</div>
					</div>
					<div class="form-group">
      					<?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
      					<div class="input-group">
            				<?php echo form_input($new_password_confirm);?>
      					</div>
					</div>
					<div class="hidden">
						<?php echo form_input($user_id);?>
      				</div>	
			</div><!--END PANEL BODY-->
			<div class="panel-footer">
      				<?php echo form_submit('submit', lang('change_password_submit_btn'), 'class="btn btn-primary"');?>
      		</div>
			</fieldset>
				<?php echo form_close();?>
		</div><!--END PANEL-->
	</div><!--END CONTAINER-->
<footer>
<div class="container-narrow" style="text-align: center;">
	<p><sub><?php echo anchor('public/market', 'HOME'); ?> | <?php echo anchor('public/market/about', 'ABOUT'); ?> | <?php echo anchor('public/market/contact', 'CONTACT'); ?> | <?php echo anchor('public/cart', 'REGISTER'); ?> | <?php echo anchor('public/support', 'SUPPORT'); ?></sub></p>
    <p><sub>&COPY; 2012 DefSteelDevelopment &TRADE; All Rights reserved</sub></p>
    <p><sub>Page rendered in <strong>{elapsed_time}</strong> seconds</sub></p>
    <div id="sitelock_shield_logo" class="fixed_btm" style="bottom:0;position:fixed;_position:absolute;right:0;">
        <a href="https://www.sitelock.com/verify.php?site=kidcaresystems.com" onclick="window.open('https://www.sitelock.com/verify.php?site=kidcaresystems.com','SiteLock','width=600,height=600,left=160,top=170');return false;" ><img alt="malware removal and website security" title="SiteLock"  src="//shield.sitelock.com/shield/kidcaresystems.com"/></a>
    </div>
</div>
</footer>
</body>