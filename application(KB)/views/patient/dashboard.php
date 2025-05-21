<div class="container-fluid padded">

	<div class="row-fluid">

        <div class="span30">


            <div class="action-nav-normal">

                <div class="row-fluid">

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php/patient/view_doctor">

                        <i class="icon-stethoscope"></i>

                        <span><?php echo get_phrase('doctor');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php/patient/view_appointment">

                        <i class="icon-exchange"></i>

                        <span><?php echo get_phrase('appointment');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php/patient/view_prescription">

                        <i class="icon-stethoscope"></i>

                        <span><?php echo get_phrase('prescription');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php/patient/view_invoice">

                        <i class="icon-credit-card"></i>

                        <span><?php echo get_phrase('view_invoice');?></span>

                        </a>

                    </div>

                </div>

            </div>

        </div>


    </div>

    <hr />

    <div class="row-fluid">

    


        <div class="span6">

            <div class="box">

                <div class="box-header">

                    <div class="title">

                        <i class="icon-calendar"></i> <?php echo get_phrase('calendar_schedule');?>

                    </div>

                </div>

                <div class="box-content">

                    <div id="schedule_calendar">

                    </div>

                </div>

            </div>

        </div>


    </div>

</div>



  

  <script>

  $(document).ready(function() {






    $("#schedule_calendar").fullCalendar({

            header: {

                left: 	"prev,next",

                center: "title",

                right: 	"month,agendaWeek,agendaDay"

            },

            editable: 0,

            droppable: 0,

            events: [

					<?php 

                    $appointments	=	$this->db->get_where('appointment' , array('patient_id' => $this->session->userdata('patient_id')))->result_array();

                    foreach($appointments as $row):

                    ?>

					{

						title: "<?php echo get_phrase('appointment').' : '.$this->crud_model->get_type_name_by_id('doctor' ,$row['doctor_id'], 'name' );?>",

						start: new Date(<?php echo date('Y',$row['appointment_timestamp']);?>, <?php echo date('m',$row['appointment_timestamp'])-1;?>, <?php echo date('d',$row['appointment_timestamp']);?>),

						end:	new Date(<?php echo date('Y',$row['appointment_timestamp']);?>, <?php echo date('m',$row['appointment_timestamp'])-1;?>, <?php echo date('d',$row['appointment_timestamp']);?>)  

            		},

					<?php

					endforeach;

					?>

					]

        })



});

  </script>
