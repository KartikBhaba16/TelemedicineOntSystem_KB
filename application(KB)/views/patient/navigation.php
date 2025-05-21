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

				<a href="<?php echo base_url();?>index.php/patient/dashboard" >

					<i class="icon-desktop icon-2x"></i>

					<span><?php echo get_phrase('dashboard');?></span>

				</a>

		</li>

        


		<li class="<?php if($page_name == 'view_appointment')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php/patient/view_appointment" >

					<i class="icon-edit icon-2x"></i>

					<span><?php echo get_phrase('view_appointment');?></span>

				</a>

		</li>

        


		<li class="<?php if($page_name == 'view_prescription')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php/patient/view_prescription" >

					<i class="icon-stethoscope icon-2x"></i>

					<span><?php echo get_phrase('view_prescription');?></span>

				</a>

		</li>

        


		<li class="<?php if($page_name == 'view_doctor')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php/patient/view_doctor" >

					<i class="icon-user-md icon-2x"></i>

					<span><?php echo get_phrase('view_doctor');?></span>

				</a>

		</li>

        


		<li class="<?php if($page_name == 'view_invoice')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php/patient/view_invoice" >

					<i class="icon-credit-card icon-2x"></i>

					<span><?php echo get_phrase('view_invoice');?></span>

				</a>

		</li>

		


		<li class="<?php if($page_name == 'payment_history')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php/patient/payment_history" >

					<i class="icon-money icon-2x"></i>

					<span><?php echo get_phrase('payment_history');?></span>

				</a>

		</li>




		<li class="<?php if($page_name == 'manage_profile')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php/patient/manage_profile" >

					<i class="icon-lock icon-2x"></i>

					<span><?php echo get_phrase('profile');?></span>

				</a>

		</li>

		

	</ul>

	

</div>
