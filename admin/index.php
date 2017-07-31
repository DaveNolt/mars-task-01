<?php
	$host = 'localhost'; // адрес сервера 
	$database = 'icrowdme'; // имя базы данных
	$user = 'root'; // имя пользователя
	$password = ''; // пароль

  // подключаемся к серверу
	$link = mysqli_connect($host, $user, $password, $database) 
		or die("Ошибка " . mysqli_error($link));
	
  $action = isset($_GET['action']) ? $_GET['action'] : '';

  if($action == "add") {
    if(!empty($_POST)) {
      block_add($link, $_POST['textedit']);
      header("Location: index.php");
    }
    include("form.php");
  }
  else if ($action == "edit") {
    if(!isset($_GET['id'])) 
      header("Location: index.php");
    $id = (int)$_GET['id'];

    if(!empty($_POST) && $id > 0) {
      block_edit($link, $id, $_POST["textedit"]);
      header("Location: index.php");
    }
    $formtext = get_block($link, $id)['content_text'];
    include("form.php");
  }
  else if ($action == "delete") {
    $id = (int)$_GET['id'];
    block_delete($link, $id);
    header("Location: index.php");
  }
  else {
    $query = "SELECT * FROM page_content ORDER BY id";
    $results = mysqli_fetch_all(mysqli_query($link, $query), MYSQLI_ASSOC) or die("Ошибка " . mysqli_error($link));
    include("page.php");
  }

  function block_add ($link, $text) {
    $text = trim($text);

    if($text == '') 
      return false;

    $sql = "INSERT INTO page_content (content_block, content_text) VALUES ('sec_1_text', '%s')";

    $query = sprintf($sql, mysqli_real_escape_string($link, $text));
    $result = mysqli_query($link, $query);
    if (!$result)
      die(mysqli_error($link));

    return true;
  }

  function block_edit ($link, $id, $text) {
    $text = trim($text);
    $id = (int)$id;

    if($text == '') 
      return false;

    $sql = "UPDATE page_content SET content_text='%s' WHERE id='%d'";
    $query = sprintf($sql, mysqli_real_escape_string($link, $text), $id);
    $result = mysqli_query($link, $query);
    if (!$result)
      die(mysqli_error($link));

    return mysqli_affected_rows($link);
  }

  function block_delete ($link, $id) {
    $id = (int)$id;

    if ($id == 0)
      return false;

    $query = sprintf("DELETE FROM page_content WHERE id='%d'", $id);
    $result = mysqli_query($link, $query);

    if (!$result)
      die(mysqli_error($link));

    return mysqli_affected_rows($link);
  }

	// выполняем операции с базой данных
  function get_block ($link, $id) {
    $query = sprintf("SELECT * FROM page_content WHERE id='%d'", $id);

    $result = mysqli_query($link, $query);

    if (!$result)
      die(mysqli_error($link));

    return mysqli_fetch_assoc($result);
  }

 	// закрываем подключение
	mysqli_close($link);
  
?>

