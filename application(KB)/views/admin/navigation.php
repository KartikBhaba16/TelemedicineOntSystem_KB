<div class="sidebar-background">

	<div class="primary-sidebar-background">

	</div>

</div>

<div class="primary-sidebar">

	<!-- Main nav -->

    <br />

    <div style="text-align:center;">

    	<a href="<?php echo base_url();?>">

        	<img src="<?php echo base_url();?>uploads/logohms.png"  style="max-height:100px; max-width:100px;"/>

        </a>

    </div>

   	<br />

	<ul class="nav nav-collapse collapse nav-collapse-primary">


		<li class="<?php if($page_name == 'dashboard')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php/admin/dashboard" >

					<i class="icon-desktop icon-2x"></i>

					<span><?php echo get_phrase('dashboard');?></span>

				</a>

		</li>

        


		<li class="<?php if($page_name == 'manage_department')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php/admin/manage_department" >

					<i class="icon-sitemap icon-2x"></i>

					<span><?php echo get_phrase('department');?></span>

				</a>

		</li>

        


		<li class="<?php if($page_name == 'manage_doctor')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php/admin/manage_doctor" >

					<i class="icon-user-md icon-2x"></i>

					<span><?php echo get_phrase('doctor');?></span>

				</a>

		</li>

        


		<li class="<?php if($page_name == 'manage_patient')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php/admin/manage_patient" >

					<i class="icon-user icon-2x"></i>

					<span><?php echo get_phrase('patient');?></span>

				</a>

		</li>

        

		<li class="dark-nav <?php if(	$page_name == 'view_appointment' 	|| 

										$page_name == 'view_payment' 		|| 

										$page_name == 'view_bed_status' 	|| 

										$page_name == 'view_blood_bank' 	|| 

										$page_name == 'view_medicine' 		|| 

										$page_name == 'view_report'  )echo 'active';?>">

			<span class="glow"></span>

            <a class="accordion-toggle  " data-toggle="collapse" href="#view_hospital_submenu" >

                <i class="icon-screenshot icon-2x"></i>

                <span><?php echo get_phrase('monitor_hospital');?><i class="icon-caret-down"></i></span>

            </a>

            

            <ul id="view_hospital_submenu" class="collapse <?php if(	$page_name == 'view_appointment' 	|| 

																		$page_name == 'view_payment' 		|| 

																		$page_name == 'view_bed_status' 	|| 

																		$page_name == 'view_blood_bank' 	|| 

																		$page_name == 'view_medicine' 		|| 

																		$page_name == 'view_report'  )echo 'in';?>">

                <li class="<?php if($page_name == 'view_appointment')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php/admin/view_appointment">

                      <i class="icon-exchange"></i> <?php echo get_phrase('view_appointment');?>

                  </a>

                </li>

                <li class="<?php if($page_name == 'view_payment')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php/admin/view_payment">

                      <i class="icon-money"></i> <?php echo get_phrase('view_payment');?>

                  </a>

                </li>


                <li class="<?php if($page_name == 'view_medicine')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php/admin/view_medicine">

                      <i class="icon-medkit"></i> <?php echo get_phrase('view_medicine');?>

                  </a>

                </li>


            </ul>

		</li>


		<li class="dark-nav <?php if(	$page_name == 'manage_email_template' 	|| 

										$page_name == 'manage_noticeboard' 		||

										$page_name == 'system_settings' 		|| 

										$page_name == 'manage_language' 		|| 

										$page_name == 'backup_restore' )echo 'active';?>">

            

            <ul id="settings_submenu" class="collapse <?php if(	$page_name == 'manage_email_template' 	|| 

																$page_name == 'manage_noticeboard' 		||

																$page_name == 'system_settings' 		|| 

																$page_name == 'manage_language' 		|| 

																$page_name == 'backup_restore' )echo 'in';?>">


            </ul>

		</li>



		<li class="<?php if($page_name == 'manage_profile')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php/admin/manage_profile" >

					<i class="icon-lock icon-2x"></i>

					<span><?php echo get_phrase('profile');?></span>

				</a>

		</li>

		

	</ul>

	

</div>
