<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=<?php echo base_url();?>/index.php/about/user/>BRAND</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
        <li class="<?echo$active['0']?>" Title=""><a href=<?php echo base_url();?>index.php/manage/><?=$this->config->item('check_icon');?>1</a></li>
        <li class="<?echo$active['1']?>" Title=""><a href=<?php echo base_url();?>index.php/waitlist/><?=$this->config->item('list_icon');?> 2</a></li>
        <li class="<?echo$active['2']?>" Title=""><a href=<?php echo base_url();?>index.php/mileage/><?=$this->config->item('plane_icon');?>3</a></li>
        <li class="<?echo$active['3']?>" Title=""><a href=<?php echo base_url();?>index.php/manage/record_payment/><?=$this->config->item('cash_icon');?>4</a></li>
        <li class="<?echo$active['4']?>" Title=""><a href=<?php echo base_url();?>index.php/manage/user_manage/><?=$this->config->item('cog_icon');?>5</a></li>
        <li><form class="navbar-form pull-right" action="<?php echo base_url();?>index.php/auth/logout" method="post">
          	<input type=submit class="btn-group btn-group-sm pull-right" title="Log out of your account" value="Log Out">
        </form></li>  
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <!--end of bar.php-->