<? function edit_event($var) { ?>
	<? head(); ?>
		<!-- wrapper -->
			
			<? navigation(); ?>
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Edytuj Wydarzenie</h1>
					</div>
						<!-- /.col-lg-12 -->
				</div>
				<div class="row">
				<div class="col-lg-12">
					<form method="post" action="<? echo 'admin.php?show=engine_update_event&id='.$var[0].'';?>">
						<div class="form-group">							
							<input name=name class="form-control" placeholder="Wrowadź nazwę wydarzenia" value="<?php echo $var[1]; ?>" />
							<p class="help-block"><!--help block --></p>
						</div>
				</div>
				<div class='col-md-4'>
					<div class="form-group">
						<div class='input-group date' id='datetimepicker'>
							<input name=e_date_start type='text' class="form-control" placeholder="Wybierz datę rozpoczęcia wydarzenia" value="<?php echo $var[5]; ?>" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
				</div> 
				<div class='col-md-4'>
					<div class="form-group">
						<div class='input-group date' id='datetimepicker2'>
							<input name=e_date_end type='text' class="form-control" placeholder="Wybierz datę zakończenia wydarzenia" value="<?php echo $var[6]; ?>" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
				</div> 
				<div class='col-md-4'>
				
<!--				<div class="form-group">						
							<div class="input-group">						
								<input type="text" class="form-control" placeholder="Aktywować wydarzenie :" disabled />									
								<span class="input-group-btn">
								<div class="btn-group" data-toggle="buttons">
								 <label class="btn btn-outline btn-default ">	
								<input type="radio" name=status value=1 ><i class="fa fa-check"></i>
								 </label>
								 <label class="btn btn-outline btn-default active">
								<input type="radio" name=status value=2 checked><i class="fa fa-times"></i>
								</label>
								</span>	
</div>								
							</div>						
					</div>-->
				
				
				
				
				
				
				
					<div class="form-group ">						
						Wydarzenie ukryte :
						<div class="btn-group" data-toggle="buttons">
							  <label class="btn btn-outline btn-default ">
								<input type="radio" name=type value=prv><i class="fa fa-check"></i>
							  </label>
							  <label class="btn btn-outline btn-default active">
								<input type="radio" name=type value=pub checked><i class="fa fa-times"></i>
							  </label>
						</div>	
					</div>
				</div> 
					<div class="col-lg-12">
						<div class="form-group">								
							<textarea id="description_text" name=description ><?php echo $var[2]; ?></textarea> 										
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">								
							<textarea id="content_text" name=content ><?php echo $var[3]; ?></textarea> 										
						</div>
					</div>
					<div class="col-lg-12">
						<!--<label class="checkbox-inline">
							<input name=status value=0 checked type="hidden" >
							<input id="toggle-one" name=status value=1 type="checkbox" data-toggle="toggle" >
						</label>-->

						<button type="submit" class="btn btn-success">Aktualizuj</button>
					</div>
					
					</form>
			</div>				<!-- /.col-lg-12 -->
			</div>
				
											
			<? footer(); ?>				
<? } ?>