				<?php $this->load->view('include/header');?>
				
				<div class="row">
					<a href="#myModal-1" data-target="#myModal-1" data-toggle="modal" class="btn btn-lg btn-primary advanced-search" style="float:right !important;" onclick="">Advanced Search</a>
					<a href="<?=base_url()?>index.php/firms/index"  class="btn btn-lg btn-primary advanced-search" style="float:left !important;">Back</a>
			        <div class="col-sm-6 col-sm-offset-3">
			            <?php echo form_open('firms/search'); ?>
				            <div id="imaginary_container"> 
				                <div class="input-group stylish-input-group">
				                    <input type="text" class="form-control"  placeholder="Search" id="search" name="search">
				                    <span class="input-group-addon">
				                        <button type="submit" id="submit">
				                            <span class="glyphicon glyphicon-search"></span>
				                        </button>  
				                    </span>				                
				                </div>
				            </div>
				        <?php echo form_close();?>
			        </div>
				</div>
				<table class="table table-hover">
					<thead style="background-color:#DDB426; color:#fff; border-top-left-radius: 4px;">
						<tr>
							<th class="lead">Firm Name/Partner</th>
							<th class="lead">Location</th>
							<th class="lead">Contacts</th>
						</tr>
					</thead>
					<tbody>
						<?php if ($results != NULL){ ?>
						<?php foreach ($results as $row) : ?>
							
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

						<?php endforeach; ?>
						<?php } else{	echo "No results matched!!";}?>
					</tbody>
				</table>
			<div class="row">
				<div class="col-md-12">
					<span class="current_page">
						<?php echo $this->pagination->create_links(); ?>
					</span>
				</div>					
			</div>
			<!--Modal-1-->
			<div class="modal fade" id="myModal-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							<h3 class="modal-title">Advanced Search</h3>
						</div>
						<div class="modal-body" style="padding:0px; margin:0 auto; ">
							<div class="col-md-12" style="padding:30px !important; margin:0 auto;">
								<!-- <form id="contactForm" class="contact"> -->
								<?php echo form_open('firms/advanced', array('id' => 'contactForm', 'class' => 'contact'));?>
									<div class="row">
										<div class="form-group">
											<label class="col-sm-4 control-label">Location</label>
											<div class="col-sm-8">
												<input class="form-control mb15" type="input" id= "address2" name="address2" placeholder="Search by Location" aria-controls="firms" />
											</div>
										</div><br><br>
									</div>
									<div class="row">
										<div class="form-group">
											<label class="col-sm-4 control-label">Members</label>
											<div class="col-sm-8">
												<input class="form-control mb15" type="input" id="partners" name="partners" placeholder="Search by Member" aria-controls="firms" />
											</div>
										</div><br><br>
									</div>
									<div class="row">
										<div class="form-group">
											<label class="col-sm-4 control-label">Type of Firm</label>
											<div class="col-sm-8">
												<select class="form-control mb15" id="typeofirm" name="typeofirm">
													<option value="" disabled selected>Search by Type of Firm</option>												
													<option value="Auditing">Auditing</option>
													<option value="NULL">Null</option>
												</select>
											</div>
										</div><br><br>
									</div>
									<div class="row">
										<div class="form-group">
											<button class="btn btn-primary" id="mod_submit">Submit</button>
											<button type="reset" class="btn btn-reset">Reset</button>
										</div>
									</div>
								</form>
								<?php echo form_close();?>
							</div>
						</div> <!-- col-md-12 -->
					</div> <!-- modal-body -->
				</div> <!-- modal content -->
			</div> <!-- modal-dialog -->
		</div> <!-- modal fade -->
		<!--End -Modal-1-->
			<!--Modal-2-->
			  <div class="modal fade" id="myModal-2">
			      <div class="modal-dialog">
			        <div class="modal-content">
			          <div class="modal-header">
			            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			              <h3 class="modal-title firm-name"></h3>
			          </div>
			          <div class="modal-body" style="padding:0px; margin:0 auto; ">
			            <div class="col-md-12" style="padding:30px !important; margin:0 auto;">
			              <div class="container">
			                <div class="row">
			                  <div class="col-md-12">
			                    <strong><span>Partners:</span></strong><br>
			                    <p class="center lead partner"></p>
			                  </div>
			                </div>
			                <div class="row">
			                  <div class="col-md-12">
			                    <strong><span>Address:</span></strong><br>
			                    <p class="address-1"></p>
			                    <p class="address-2"></p>
			                    <p class="city"></p>
			                  </div>
			                </div>
			                <div class="row">
			                  <div class="col-md-12">
			                    <strong><span>Type of Firm:</span></strong><br>
			                    <p class="type-of-firm"></p>
			                  </div>
			              </div><!--container-->
			            </div> <!-- col-md-12 -->
			          </div> <!-- modal-body -->
			        </div> <!-- modal content -->
			      </div> <!-- modal-dialog -->
			 </div> <!-- modal fade -->		
		</div>
		<!-- Custom Script -->
		<script  type="text/javascript" charset="utf-8">
			$(document).ready(function(){    
				$('.dt-rows').on('click',function(){
					$.ajax({
						url:"<?php echo base_url(); ?>index.php/firms/view/"+$(this).attr('id'),
						type:"GET",
						dataType:"JSON",
						success:function(data){
							$('.firm-name').html(data.firm_name);
							$('.partner').html(data.partners);
							$('.address-1').html(data.address1);
							$('.address-2').html(data.address2);
							$('.city').html(data.city);
							$('.type-of-firm').html(data.typeofirm);
						}
					})
				}); 
				// $('#contactForm').on('submit',function(e){
				// 	e.preventDefault();
				// 	console.log($('form#address2').val());
				// 	$.post('<?php echo base_url(); ?>index.php/firms/advanced',
				// 		{
				// 			Address:$('#address2').val(),
				// 			Partners:$('#partners').val(),
				// 			Typeoffirm:$('#typeofirm').val()
				// 		});
				// });

				
				
			});
		</script>
	</body>
</html>