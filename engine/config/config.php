<?
function con_bd()
	// funkcja ³aczy z baza danych
{
   $result = new mysqli('localhost', 'wr1511_ev', 'SXcNn7Cfo', 'wr1511_ev', '3306'); 
   //$result = new mysqli('localhost', 'root', 'rowerek88', 'reg', '3306'); 
   if (!$result)
      throw new Exception('Po³¹czenie z serwerem bazy danych nie powiod³o siê');
   else
      return $result;
}
?>