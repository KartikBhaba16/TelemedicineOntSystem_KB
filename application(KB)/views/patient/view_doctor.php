<div class="box">

	<div class="box-header">

    


		<ul class="nav nav-tabs nav-tabs-left">

			<li class="active">

            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 

					<?php echo get_phrase('doctor_list');?>

                    	</a></li>

		</ul>


        

	</div>

	<div class="box-content padded">

		<div class="tab-content">


            <div class="tab-pane box active" id="list">

				

                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">

                	<thead>

                		<tr>

                    		<th><div>#</div></th>

                    		<th><div><?php echo get_phrase('doctor_name');?></div></th>

                    		<th><div><?php echo get_phrase('department');?></div></th>

						</tr>

					</thead>

                    <tbody>

                    	<?php $count = 1;foreach($doctors as $row):?>

                        <tr>

                            <td><?php echo $count++;?></td>

							<td><?php echo $row['name'];?></td>

							<td><?php echo $this->crud_model->get_type_name_by_id('department',$row['department_id']);?></td>

                        </tr>

                        <?php endforeach;?>

                    </tbody>

                </table>

			</div>


		</div>

	</div>

</div>
