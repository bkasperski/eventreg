<?
function engine_edit_event()
{
	$id = $_GET['id'];
	$con = con_bd();	
	$result = $con->query("select * from event_list where id='$id'");	
	while ($var = mysqli_fetch_row($result))
		
		{
			edit_event($var);
		}	
}

function engine_update_event()
{
	$name=$_POST['name'];
	$description=$_POST['description'];
	$content=$_POST['content'];
	$e_date_start=$_POST['e_date_start'];
	$e_date_end=$_POST['e_date_end'];
	$type=$_POST['type'];
	
	if ($name && $description)
		{
			update_event($name, $description, $content, $e_date_start, $e_date_end, $type);			
			#echo $name, $description, $content, $e_date_start, $e_date_end; #DEBUG
			header("Location: admin.php?show=list_event");
			
		}
			else
				{
				echo ('Rejestracja w bazie danych niemo¿liwa — proszê o kontakt z administratorem');			
				}
}

function update_event($name, $description, $content, $e_date_start, $e_date_end, $type)
{
	$connect = con_bd();
	$add_e_date = date('Y-m-d');
	$id = $_GET['id'];
	
	$dane = $connect->query("update event_list 
							set name='$name', description='$description', content='$content', e_date_start='$e_date_start', e_date_end='$e_date_end', type='$type'
							where id='$id'");
		if (!$dane)	
			echo ('Rejestracja w bazie danych niemo¿liwa — proszê o kontakt z administratorem');
		else return true;	
}
?>