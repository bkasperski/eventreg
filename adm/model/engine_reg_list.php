<?
function worker_reg_list()
{

	$id = $_GET['id'];
	$event = $_GET['event'];
	
	$i = 0;
	$i++;
	
	$m1 = 0;
	$m1++;
	
	$m2 = 0;
	$m2++;
	
	$connect = con_bd();
	$data = $connect->query("select * from reg_list where e_id='$id'");
	whilereglist($data, $event, $i, $m1, $m2);		
}

function whilereglist($data, $event, $i, $m1, $m2)
{	
	
	while ($var = mysqli_fetch_array($data))
		{
		
		
		if ($var['status'] == 0) {
			$status = 'Oczekujący';
		} elseif ($var['status'] == 1) {
			$status = 'Odrzucony';
		} elseif ($var['status'] == 2) {
			$status = 'Potwierdzony';
		} else {
			$status = 'Błąd';
		}
		
		if ($var['status'] == 0) {
			$color = 'info';
		} elseif ($var['status'] == 1) {
			$color = 'danger';
		} elseif ($var['status'] == 2){
			$color = 'success';
		} else {
			$color = 'warning';
		}
	
				
					
		echo '<tr class="'.$color.'" data-status="'.$color.'">
				<td>'.$i++.'</td>                                 
				<td>'.$var['imie'].' '.$var['nazwisko'].'</td>       
				<td>'.$var['firma'].'</td>
				<td>'.$var['miejscowosc'].'</td>
				<td>'.$var['email'].'</td>
				<td>'.$var['tel'].'</td>
				<td>'.$var['dane1'].'</td>
				<td>'.$var['dane2'].'</td>
				<td>'.$var['dane3'].'</td>
				<td>'.$var['dane4'].'</td>
				<td>'.$status.'</td>
				<td>';
				
		
		$buttonConEnabled = '<button class="btn btn-success btn-xs btn-circle" data-toggle="modal" data-target="#myModal'.$m1++.'">
						<i class="fa fa-check fa-1x"></i>  
						</button>																								
						<div class="modal fade" id="myModal'.$m2++.'" tabindex="-1" role="dialog" aria-labelledby="odrzucenie" aria-hidden="true">
							<div class="modal-dialog">				
								<div class="panel panel-green">
									<div class="panel-heading">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="odrzucenie">Potwierdź uczestnictwo</h4>
									</div>
									<div class="panel-body">
										<p>Czy napewno chcesz potwierdzić uczestnictwo osoby: <b>'.$var['imie'].' '.$var['nazwisko']. '</b> z wydarzenia</br>
										<b>'.$event.'</b> ?</br></br></p>
									</div>
									<div class="panel-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>
										<form class="modalForm pull-right" value="del"  action="admin.php?show=accept&id='.$var['id'].'" method="post" >
										<button type="submit" class="btn btn-success "><i class="fa fa-thumbs-up fa-1x"></i> Potwierdź uczestnictwo</button>
										<input type="hidden" name="id" value="'.$var['id'].'">
										<input type="hidden" name="e_id" value="'.$var['e_id'].'">
										<input type="hidden" name="event" value="'.$event.'">
										<span class="button-checkbox">
											<button type="button" class="btn" data-color="success"><i class="glyphicon glyphicon-envelope"></i></button>
											<input type="checkbox" class="hidden" checked />
										</span>
										<span class="button-checkbox">
											<button type="button" class="btn" data-color="success"><i class="glyphicon glyphicon-phone"></i></button>
											<input type="checkbox" class="hidden" />
										</span>
										</form>
									</div>
								</div>																																																
							</div>															
						</div> ';
						
		$buttonConOff = '<button data-toggle="tooltip" data-placement="top" title="Nie możesz nic z tym zrobić" class="btn btn-success btn-xs btn-circle disabled">
						 <i class="fa fa-check fa-1x"></i></button> ';
		
		
		if ($var['status'] == 0) {
			echo $buttonConEnabled;
		} else {
			echo $buttonConOff;
		}
															
		
			
		#echo '<a class="modalForm" href="admin.php?show=reglist&id='.$var[0].'">
		#	  <button class="btn btn-primary btn-xs btn-circle" data-toggle="tooltip" data-placement="top" title="Lista uczestników">
		#	  <i class="fa fa-bars fa-1x"></i></button></a>';
			  
			  
			
	$buttonDenOn = '<button class="btn btn-danger btn-xs btn-circle" data-toggle="modal" data-target="#myModal'.$m1++.'">
						<i class="fa fa-times fa-1x"></i>  
						</button>																								
						<div class="modal fade" id="myModal'.$m2++.'" tabindex="-1" role="dialog" aria-labelledby="odrzucenie" aria-hidden="true">
							<div class="modal-dialog">				
								<div class="panel panel-red">
									<div class="panel-heading">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="odrzucenie">Odrzuć uczestnictwo</h4>
									</div>
									<div class="panel-body">
										<p>Czy napewno chcesz odrzucić uczestnictwo osoby: <b>'.$var['imie'].' '.$var['nazwisko']. '</b> z wydarzenia</br>
										<b>'.$event.'</b> ?</br></br></p>
									</div>
									<div class="panel-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>
										<form class="modalForm pull-right" value="del"  action="admin.php?show=deny&id='.$var[0].'" method="post" >
										<button type="submit" class="btn btn-danger "><i class="fa fa-warning fa-1x"></i> Odrzuć uczestnictwo</button>
										<input type="hidden" name="id" value="'.$var['id'].'">
										<input type="hidden" name="e_id" value="'.$var['e_id'].'">
										<input type="hidden" name="event" value="'.$event.'">
										<span class="button-checkbox">
											<button type="button" class="btn" data-color="success"><i class="glyphicon glyphicon-envelope"></i></button>
											<input type="checkbox" class="hidden" name="sendmail" value="1" checked />
										</span>
										<span class="button-checkbox">
											<button type="button" class="btn" data-color="success"><i class="glyphicon glyphicon-phone"></i></button>
											<input type="checkbox" class="hidden" name="sendsms" value="1" />
										</span>
										</form>
									</div>
								</div>																																																
							</div>															
						</div> ';
	
	$buttonDenOff = '<button data-toggle="tooltip" data-placement="top" title="Nie możesz nic z tym zrobić" class="btn btn-danger btn-xs btn-circle disabled">
						  <i class="fa fa-times fa-1x"></i></button> ';																								
																		
	
	
	
		if ($var['status'] == 0) {
			echo $buttonDenOn;
		} else {
			echo $buttonDenOff;
		} 														
			echo '</td></tr>';
			
	}
}
	
	



function accept()
{	
$connect = con_bd();
$id = $_POST['id'];
$e_id = $_POST['e_id'];
$event = $_POST['event'];
$status = 2;
$connect->query("UPDATE reg_list SET status='$status' WHERE id='$id'");
header('Location: admin.php?show=reglist&id='.$e_id.'&event='.$event.'');
}


function deny()
{
$connect = con_bd();
$id = $_POST['id'];
$e_id = $_POST['e_id'];
$event = $_POST['event'];
$status = 1;
$connect->query("UPDATE reg_list SET status='$status' WHERE id='$id'");
header('Location: admin.php?show=reglist&id='.$e_id.'&event='.$event.'');
}
	
	
	

	
	
/*	
<form action="#" method="post">
<input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label><br/>
<input type="checkbox" name="check_list[]" value="Java"><label>Java</label><br/>
<input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label><br/>
<input type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
echo $selected."</br>";
}
}
}
?>	
*/	
?>