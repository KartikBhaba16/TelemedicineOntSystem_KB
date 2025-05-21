<div class="container-fluid padded">

	<div class="row-fluid">

        <div class="span30">


            <div class="action-nav-normal">

                <div class="row-fluid">

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php/pharmacist/manage_medicine_category">

                        <i class="icon-edit"></i>

                        <span><?php echo get_phrase('medicine_category');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php/pharmacist/manage_medicine">

                        <i class="icon-medkit"></i>

                        <span><?php echo get_phrase('manage_medicine');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php/pharmacist/manage_prescription">

                        <i class="icon-stethoscope"></i>

                        <span><?php echo get_phrase('provide_medication');?></span>

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

                    $notices	=	$this->db->get('noticeboard')->result_array();

                    foreach($notices as $row):

                    ?>

					{

						title: "<?php echo $row['notice_title'];?>",

						start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),

						end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>)  

            		},

					<?php

					endforeach;

					?>

					]

        })



});

  </script>
