<?
function worker_list_event()
{
	
	$i = 0;
	$i++;
	
	$m1 = 0;
	$m1++;
	
	$m2 = 0;
	$m2++;
	
	$c1 = 0;
	$c1++;
	
	$c2 = 0;
	$c2++;
	
	$connect = con_bd();
	
	$data = $connect->query("select * from event_list e LEFT JOIN form_list f ON e.id=f.e_id");
	whiledata($data, $i, $m1, $m2, $c1, $c2);
}

function whiledata($data, $i, $m1, $m2, $c1, $c2)
{
	
	while ($row = mysqli_fetch_array($data))
		{
		
		$nazwa = $row[1];
		
#Kontrola statusu		

		if ($row[7] == 0) {
			$color = 'info';
		} elseif ($row[7] == 2) {
			$color = 'warning';
		} elseif ($row[7] == 6){
			$color = 'danger';
		} else {
			$color = 'success';
		}
	
				
					
		echo '<tr class="'.$color.'" data-status="'.$color.'">
				<td>'.$i++.'</td>                                 
				<td>'.$nazwa.'</td>
				<td>';
				
				
		$formON =  '<span class="label label-success">Aktywny</span> <a class="label label-danger" href="admin.php?show=formDis&id='.$row[0].'" data-toggle="tooltip" data-placement="top" title="Wyłącz formularz" ><i class="fa fa-times fa-1x"></i></a>';
		
		$formOFF = '<span class="label label-warning">Nieaktywny</span> <a class="label label-success" href="admin.php?show=formAct&id='.$row[0].'" data-toggle="tooltip" data-placement="top" title="Aktywuj formularz"><i class="fa fa-check fa-1x"></i></a>';
		
		$formNONE = '<span class="label label-default">Brak formularza </span> ';
		
		if ($row['f_status'] == 2) {
			echo $formOFF;
		} elseif ($row['f_status'] == 1) {
			echo $formON;
		} else {
			echo $formNONE;
		}
						
				
		echo '</td>
				<td>'.$row[5].' - '.$row[6].'</td>
				<td>'.$row[4].'</td>
				<td>';
				
#Aktywuj - Dezaktywuj		
		$buttonActEnabled = '<a class="modalForm" href="admin.php?show=enabled&id='.$row[0].'" >
						  <button class="btn btn-success btn-xs btn-circle" data-toggle="tooltip" data-placement="top" title="Aktywuj">
						  <i class="fa fa-check fa-1x"></i></button></a>';
						  
		$buttonActDisabled = '<a class="modalForm" href="admin.php?show=disabled&id='.$row[0].'" >
						   <button class="btn btn-warning btn-xs btn-circle" data-toggle="tooltip" data-placement="top" title="Zakończ">
						   <i class="fa fa-times fa-1x"></i></button></a>';
						
		$buttonActOff = '<button data-toggle="tooltip" data-placement="top" title="Nie może nic z tym zrobić" class="btn btn-warning btn-xs btn-circle disabled">
						 <i class="fa fa-times fa-1x"></i></button>';
		
		
		if ($row[7] == 2) {
			echo $buttonActEnabled;
		} elseif ($row[7] == 0) {
			echo $buttonActEnabled;
		} elseif ($row[7] == 6) {
			echo $buttonActOff;
		} else {
			echo $buttonActDisabled;
		}
															
		
		
#Edycja
		$buttonEditOn = '<a class="modalForm" href="admin.php?show=edit&id='.$row[0].'">
			  <button class="btn btn-info btn-xs btn-circle" data-toggle="tooltip" data-placement="top" title="Edytuj">
			  <i class="fa fa-pencil fa-1x"></i></button></a>';
			  
		$buttonEditOff = '
			  <button class="btn btn-info btn-xs btn-circle disabled" data-toggle="tooltip" data-placement="top" title="Nie może nic z tym zrobić">
			  <i class="fa fa-pencil fa-1x"></i></button>';
			
		
		if ($row[7] == 6) {
			echo $buttonEditOff;
		} else {
			echo $buttonEditOn;
		}


#Podgląd
		echo '<a href="#">
			  <button class="btn btn-primary btn-xs btn-circle disabled" data-toggle="tooltip" data-placement="top" title="Podgląd">
			  <i class="fa fa-search fa-1x"></i></button></a>';
  
			  
#Lista zarejestrowanych
		echo '<a class="modalForm" href="admin.php?show=reglist&id='.$row[0].'&event='.$row['name'].'">
			  <button class="btn btn-primary btn-xs btn-circle" data-toggle="tooltip" data-placement="top" title="Lista uczestników">
			  <i class="fa fa-bars fa-1x"></i></button></a>';
	  
		  
#Usuń			
	$buttonDelOn = '&nbsp;<button class="btn btn-danger btn-xs btn-circle" data-toggle="modal" data-target="#myModal'.$m1++.'">
						<i class="fa fa-trash-o fa-1x"></i>  
						</button>																								
						<div class="modal fade" id="myModal'.$m2++.'" tabindex="-1" role="dialog" aria-labelledby="potwierdzenie" aria-hidden="true">
						<div class="modal-dialog">
						<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="potwierdzenie">Potwierdzenie usunięcia</h4>
						</div>
						<div class="modal-body">
						Czy napewno chcesz usunąć wydarzenie: <br><b>'.$nazwa.'</b> ?
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>
						<form class="modalForm" value="del"  action="admin.php?show=delete&id='.$row[0].'&nazwa='.$nazwa.'" method="post" ><button type="submit" class="btn btn-danger">Usuń</button></form>
						</div>
						</div>																	
						</div>															
						</div>																																						
						</div>';
	
	$buttonDelOff = '&nbsp;<button data-toggle="tooltip" data-placement="top" title="Nie można usunąć aktywnego wydarzenia lub zostało już usunięte" class="btn btn-danger btn-xs btn-circle disabled">
						  <i class="fa fa-trash-o fa-1x"></i></button>';																								
																		
	
	
	
	if ($row[7] == 1) {
			echo $buttonDelOff;
		} elseif ($row[7] == 6) {
			echo $buttonDelOff;
		} else {
			echo $buttonDelOn;
		} 
																
		echo '</td></tr>';
		
			
			}
}
	
	


#Funkcje
function del()
{
$connect = con_bd();
$id = $_GET['id'];
$nazwa = $_GET['nazwa'];

	$wynik = $connect->query("update event_list set status='6' where id = '$id'");

	if($wynik)
		header("Location: admin.php?show=list_event");

}

function enabled()
{
$connect = con_bd();
$id = $_GET['id'];

	$wynik = $connect->query("update event_list set status='1' where id = '$id'");
	
	if($wynik)
		header("Location: admin.php?show=list_event");

}

function disabled()
{
$connect = con_bd();
$id = $_GET['id'];

	$wynik = $connect->query("update event_list set status='2' where id = '$id'");
	$wynik2 = $connect->query("update form_list set status='0' where e_id = '$id'");
	
	if($wynik AND $wynik2) 
		header("Location: admin.php?show=list_event");

}		

function edit()
{
$connect = con_bd();
$id = $_GET['id'];

	$wynik = $connect->query("select * event_list where id = '$id'");
	
	if($wynik) 
		header("Location: admin.php?show=list_event");

}

function formAct()
{
$connect = con_bd();
$id = $_GET['id'];

	$wynik = $connect->query("update form_list set f_status='1' where e_id = '$id'");
	
	if($wynik) 
		header("Location: admin.php?show=list_event");

}

function formDis()
{
$connect = con_bd();
$id = $_GET['id'];

	$wynik = $connect->query("update form_list set f_status='2' where e_id = '$id'");
	
	if($wynik) 
		header("Location: admin.php?show=list_event");

}

	
	
	
	
	
?>