<?php
session_start();
//ERROR
error_reporting(-1);
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_BAIL, 0);
assert_options(ASSERT_QUIET_EVAL, 0);
assert_options(ASSERT_CALLBACK, 'assert_callcack');
set_error_handler('error_handler');
set_exception_handler('exception_handler');
register_shutdown_function('shutdown_handler');

function assert_callcack($file, $line, $message) {
    throw new Customizable_Exception($message, null, $file, $line);
}

function error_handler($errno, $error, $file, $line, $vars) {
    if ($errno === 0 || ($errno & error_reporting()) === 0) {
        return;
    }

    throw new Customizable_Exception($error, $errno, $file, $line);
}

function exception_handler(Exception $e) {
    // Do what ever!
    echo '<pre>', print_r($e, true), '</pre>';
    exit;
}

function shutdown_handler() {
    try {
        if (null !== $error = error_get_last()) {
            throw new Customizable_Exception($error['message'], $error['type'], $error['file'], $error['line']);
        }
    } catch (Exception $e) {
        exception_handler($e);
    }
}

class Customizable_Exception extends Exception {
    public function __construct($message = null, $code = null, $file = null, $line = null) {
        if ($code === null) {
            parent::__construct($message);
        } else {
            parent::__construct($message, $code);
        }
        if ($file !== null) {
            $this->file = $file;
        }
        if ($line !== null) {
            $this->line = $line;
        }
    }
}
//ERROR
//	Funkcja weryfikuje czy user jest zalogowany, jesli tak załącza odpowiednie biblioteki.
if (isset($_SESSION['current_user']))
	{
		
		require_once 'config/load.php';	
		function content()
		{
			if(!isset($_GET['show']))
			{
				$_GET['show'] = 'admin';
			}
					switch($_GET['show'])
					{
						// wylogowanie
						case 'wyloguj':
							wyloguj();
						break;
						// ustawienia
						case 'settings':
							settings();
						break;
						// Event tables
						case 'report_event':
							report_event();
						break;
						// Event tables
						case 'add_event':
							add_event();
						break;
						// Event tables
						case 'engine_add_event':
							engine_add_event();
						break;
						// Event tables
						case 'engine_update_event':
							engine_update_event();
						break;
						// Event tables
						case 'edit':
							engine_edit_event();
						break;
						// Event tables
						case 'list_event':
							list_event();
						break;
						case 'form_build':
							form_build();
						break;
						case 'reglist':
							reg_list();
						break;
						// Event tables
						case 'delete':
							del();
						break;
						// Event tables
						case 'enabled':
							enabled();
						break;
						// Event tables
						case 'notify':
							notify();
						break;
						// Event tables
						case 'disabled':
							disabled();
						break;
						case 'accept':
							accept();
						break;
						case 'formAct':
							formAct();
						break;
						case 'formDis':
							formDis();
						break;
						case 'deny':
							deny();
						break;
						// Dashboard - domyślny
						default:
							dashboard();
					}
		}		
		content();	
	}
	else
	{
		$error_login = "Nie masz uprawnień do przeglądania tej strony musisz się zalogować.";
		$_SESSION['error_login'] = $error_login;
		header("Location: index.php");
	}
?>