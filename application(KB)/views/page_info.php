        <div class="container-fluid" >

            <div class="row-fluid">

                <div class="area-top clearfix">

                    <div class="pull-left header">

                        <h3 class="title">

                        <i class="icon-info-sign"></i>

                        <?php echo $page_title;?> </h3>

                    </div>

                    <ul class="inline pull-right sparkline-box">

                        <li class="sparkline-row">

                            <h4 class="green">

                                <span><?php echo get_phrase('doctor');?></span> 

                                <?php echo $this->db->count_all_results('doctor');?>

                            </h4>

                        </li>

                        <li class="sparkline-row">

                            <h4 class="red">

                                <span><?php echo get_phrase('patient');?></span> 

                                <?php echo $this->db->count_all_results('patient');?>

                            </h4>

                        </li>

                    

                    </ul>

                </div>

            </div>

        </div>

        

        <?php if($this->session->flashdata('flash_message') != ""):?>

 		<script>

			$(document).ready(function() {

				Growl.info({title:"<?php echo $this->session->flashdata('flash_message');?>",text:""})

			});

		</script>

        <?php endif;?>
