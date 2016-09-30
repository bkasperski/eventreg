<? function list_event() { ?>
	<? head(); ?>
	
		<!-- wrapper -->
		<div id="wrapper">	
			<? navigation(); ?>		
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
						<h1 class="">Wydarzenia</h1>
					</div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#list" data-toggle="tab"><i class="fa fa-list-alt fa-fw"></i> Lista wydarzeń</a>
                                </li>
                                <li><a href="#new" data-toggle="tab"><i class="fa fa-plus-circle fa-fw"></i> Utwórz wydarzenie</a>
                                </li>
								<li><a href="#list2" data-toggle="tab"><i class="fa fa-list-alt fa-fw"></i> Lista wydarzeń - TEST</a>
                                </li>
															
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="list">
								</br>
                                    <div class="col-lg-12">
					<div class="form-group">
						<div class="input-group ">
							<div class="btn-group">
								<button type="button" class="btn btn-success btn-filter" data-target="success">Aktywne</button>
								<button type="button" class="btn btn-warning btn-filter" data-target="warning">Nieaktywne</button>
								<button type="button" class="btn btn-danger btn-filter" data-target="danger">Anulowane</button>
								<button type="button" class="btn btn-default btn-filter" data-target="all">Wszystkie</button>
							</div>
						</div>
					</div>
				</div>			
				<div class="col-lg-12">
                    <div class="panel panel-default">                     
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nazwa Wydarzenia</th>
											<th>Formularz</th>
											<th>Data wydarzenia</th>
											<th>Data dodania</th>	
                                            <th>Opcje</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fill">
                                       <? worker_list_event(); ?>                                                                        
                                        

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                                </div>
                                <div class="tab-pane fade" id="new">
                                    </br>
				<div class="row">
				<div class="col-lg-12">
					<form method="post" action="admin.php?show=engine_add_event">
						<div class="form-group">							
							<input name=name class="form-control" placeholder="Wrowadź nazwę wydarzenia" />
							<p class="help-block"><!--help block --></p>
						</div>
				</div>
				<div class='col-md-4'>
					<div class="form-group">
						<div class='input-group date' id='datetimepicker'>
							<input name=e_date_start type='text' class="form-control" placeholder="Wybierz datę rozpoczęcia wydarzenia" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
				</div> 
				<div class='col-md-4'>
					<div class="form-group">
						<div class='input-group date' id='datetimepicker2'>
							<input name=e_date_end type='text' class="form-control" placeholder="Wybierz datę zakończenia wydarzenia" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
				</div> 
				<div class='col-md-2'>
				
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
						Aktywować wydarzenie :
						<div class="btn-group" data-toggle="buttons">
							  <label class="btn btn-outline btn-default ">
								<input type="radio" name=status value=1 ><i class="fa fa-check"></i>
							  </label>
							  <label class="btn btn-outline btn-default active">
								<input type="radio" name=status value=2 checked><i class="fa fa-times"></i>
							  </label>
						</div>				
					</div>
				</div> 
				<div class='col-md-2'>
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
							<textarea id="description_text" name=description ></textarea> 										
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">								
							<textarea id="content_text" name=content ></textarea> 										
						</div>
					</div>
					<div class="col-lg-12">
						<!--<label class="checkbox-inline">
							<input name=status value=0 checked type="hidden" >
							<input id="toggle-one" name=status value=1 type="checkbox" data-toggle="toggle" >
						</label>-->

						<button type="submit" class="btn btn-success">Dodaj</button>
						<button type="reset" class="btn btn-warning">Reset</button><br><br>
					</div>
					
					</form>
                                </div>															
                            </div>
							<div class="tab-pane fade" id="list2">
								<script>
/* Formatting function for row details - modify as you need */
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Full name:</td>'+
            '<td>'+d.name+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extension number:</td>'+
            '<td>'+d.extn+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extra info:</td>'+
            '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
    '</table>';
}
 
$(document).ready(function() {
    var table = $('#example').DataTable( {
        "ajax": "data/objects.txt",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "salary" }
        ],
        "order": [[1, 'asc']]
    } );
     
    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
} );
</script>
								<table id="example" class="display" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th></th>
											<th>Name</th>
											<th>Position</th>
											<th>Office</th>
											<th>Salary</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th></th>
											<th>Name</th>
											<th>Position</th>
											<th>Office</th>
											<th>Salary</th>
										</tr>
									</tfoot>
								</table>
								
							</div>
                        </div>
                        <!-- /.panel-body -->
                   
                    <!-- /.panel -->
                </div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
                <!-- /.col-lg-12 -->
            
				
                <!-- /.col-lg-6 -->
					<!-- /.col-lg-12 -->
				</div>	
				</div>
				</div>
						</div>					
			<? footer(); ?>				
<? } ?>