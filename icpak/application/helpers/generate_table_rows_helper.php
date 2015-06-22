<?php
function generate_tables($data){?>
	<?php foreach ($data as $row):?>
							
		<tr data-toggle="modal" class="dt-rows" id="<?php echo $row['firm_id']; ?>" data-id="" data-target="#myModal-2" href="#myModal-2">
			<td class="col-md-4">
				<span class="lead" id="FirmName"><i class="fa fa-users" style="margin-right:5px;"></i><?php echo $row['firm_name']?></span><br/>
				<span id="Partners"><i class="fa fa-user-plus" style="margin-right:5px;"></i><?php echo $row['partners']?></span>
			</td>		
			<td class="col-md-4">
				<span id="Address1"><i class="fa fa-home" style="margin-right:5px;"></i><?php echo $row['address1']?></span><br>

				<?php if($row['address2']):?>
					<span id='Address2'><i class='fa fa-map-marker' style='margin-right:5px;'></i><?php echo $row['address2'];?></span><br>
				<?php endif;?>

				<?php if($row['address3']):?>
					<span id='Address2'><i class='fa fa-location-arrow' style='margin-right:5px;'></i><?php echo $row['address3'];?></span><br>
				<?php endif;?>

				
				<?php if($row['city']):?>
					<span id="City"><i class="fa fa-building" style="margin-right:5px;"></i><?php echo $row['city']?></span>
				<?php endif;?>
			</td>
			<td class="col-md-4">
				<?php if($row['email']):?>
					<span id="Email"><i class="fa fa-inbox" style="margin-right:5px;"></i><?php echo $row['email']?></span><br>
				<?php endif; ?>
				<?php if($row['telephone']):?>
					<span id="Telephone"><i class="fa fa-phone" style="margin-right:5px;"></i><?php echo $row['telephone']?></span>
				<?php endif;?>
			</td>
		</tr>
	<?php endforeach;?>

						
<?php }?>