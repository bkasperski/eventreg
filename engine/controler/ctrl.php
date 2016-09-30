<?



function content()
{
	if(!isset($_GET['show']))
	{
	$_GET['show'] = 'index';
	}
	switch($_GET['show'])
	{

		case 'select':
			e_event_content_engine();
		break;
		
		case 'rejestracja':
			reg();
		break;
		
		case 'form':
			f_event_form();
		break;
		
		case 'registration-success':
			registration_success ($var);
		break;
		
		case 'registration-error':
			registration_error ($var, $mail);
		break;
		
		default:
			e_event_list_engine();
		break;
	}
}
?>
