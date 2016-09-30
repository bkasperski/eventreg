<?
function engine_add_event()
{
	$name=$_POST['name'];
	$description=$_POST['description'];
	$content=$_POST['content'];
	$status=$_POST['status'];
	$type=$_POST['type'];
	$e_date_start=$_POST['e_date_start'];
	$e_date_end=$_POST['e_date_end'];
	
	if ($name && $description)
		{
			add_new_event($name, $description, $content, $status, $e_date_start, $e_date_end, $type );			
			header("Location: admin.php?show=list_event");
			
		}
			else
				{
				echo ('dsfsdf sdf');			
				}
}

function add_new_event($name, $description, $content, $status, $e_date_start, $e_date_end, $type)
{
	$connect = con_bd();
	$add_e_date = date('Y-m-d');
	
	$dane = $connect->query("insert into event_list values ('','$name', '$description', '$content', '$add_e_date', '$e_date_start', '$e_date_end', '$status', '$type' )");
		if (!$dane)	
			echo ('Rejestracja w bazie danych niemo¿liwa — proszê o kontakt z administratorem');
		else return true;	
}
?>