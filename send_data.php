<?php

function adopt($text) {
	return '=?UTF-8?B?'.Base64_encode($text).'?=';
}

function write_data_db($mess_name, $mess_tel, $mess_email, $mess_comment) {
	require_once 'config.php';
	$ret = array();

	/** Запрос к БД */
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if(!$link) {
		$ret["link"] = "error";
		$ret["error"] = mysqli_connect_error();
		$ret["write"] = "0";
		$ret["last_id"] = "0";
	} else {
		$ret["link"] = "OK";
		mysqli_set_charset($link, "utf8");
		mysqli_options($link, MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
		
		$date_reg = time();
		$sql = "INSERT INTO `db_personal_data` (`id`, `name`, `phone`, `email`, `data_reg`, `comment`) VALUES (NULL, '$mess_name', '$mess_tel', '$mess_email', '$date_reg', '$mess_comment')";
		//echo $sql;
		$result = mysqli_query($link, $sql);
		if($result) {
			// определение id последней строки из БД
			$ret["write"] = "OK";
			$ret["last_id"] = mysqli_insert_id($link);
			$ret["error"] = "0";
			//print($last_id.' id <br>');
		} else {
			$ret["write"] = "error";
			$ret["error"] = "ошибка записи в БД " . mysqli_error($link);
			$ret["last_id"] = "0";
			//print($error);
		}
		
	}
	return $ret;
}

$method = $_SERVER['REQUEST_METHOD'];
// 

$message = '';
$admin_email = 'andreww1762@gmail.com'; // 
//$email_from = 'andrew1562@yandex.ru'; // 
if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']=='POST')) {

	$mess_name  = trim(htmlspecialchars($_POST["name"]));
	$mess_tel  = trim(htmlspecialchars($_POST["phone"]));
	$mess_email = trim(htmlspecialchars($_POST["email"]));
	$form_subject = "Данные заявки";

	$message .= 'name: ' . $mess_name . PHP_EOL;
	$message .= 'Телефон: ' . $mess_tel . PHP_EOL;
	$message .= 'email: ' . $mess_email . PHP_EOL;
} 

$ret = array();
$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt("sender").' <'.$admin_email.'>' . PHP_EOL .
'Reply-To: '.$mess_email.'' . PHP_EOL;

//mail($admin_email, adopt($form_subject), $message, $headers);
if(mail($mess_email, adopt($form_subject), $message)) {
	$ret["mail"] = "sent";
} else {
	$ret["mail"] = "not sent";
}

$retW = write_data_db($mess_name, $mess_tel, $mess_email, $form_subject);
$ret["link"] = $retW["link"];
$ret["error"] = $retW["error"];
$ret["write"] = $retW["write"];
$ret["last_id"] = $retW["last_id"];
/*/
$ret["mail"] = "sent";
$ret["link"] = "OK";
$ret["error"] = "error";
$ret["write"] = "OK";
$ret["last_id"] = "6";
*/
echo json_encode($ret);
