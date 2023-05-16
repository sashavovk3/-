<!DOCTYPE html>
	<?php
	session_start();
	$servername = '127.0.0.1:3306'; // Ім'я сервера бази даних
	$username = 'root'; // Логін користувача бази даних
	$password = ''; // Пароль користувача бази даних
	$dbname = 'notalex'; // Назва бази даних, до якої ви хочете підключитися
	// Підключення до бази даних
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Перевірка підключення
	if (!$conn) {
	  die('Connection failed: ' . mysqli_connect_error());
	}
	// Відображення сторінки якщо id адміністратора дорвінює id користувача
	if(isset($_GET['id']) && isset($_SESSION['id']) && $_GET['id'] == $_SESSION['id']) {
?>
	<html lang="ua">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
	<title>Notalex</title>
	<link href="css/style.css?v=4" type="text/css" rel="stylesheet">
	<link href="css/media.css?v=4" type="text/css" rel="stylesheet">
	</head>
	<body>
	  <div class="wrapper">
		<h2 class="block-title">Редагування</h2>
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST") {
					// отримання даних з форми
					$content_id = $_POST["content_id"];
					$new_service_name = $_POST["service_name"];
					$sql = "UPDATE `services` SET `service_name`='" . $new_service_name . "' WHERE `id`='" . $content_id . "'"; // запит на оновлення послуги в таблиці
					$result = mysqli_query($conn, $sql);
					if (mysqli_query($conn, $sql)) {
					  header("Location: admin.php?id=" . $_SESSION['id']);
					} else {
					  echo "Помилка оновлення: " . mysqli_error($conn);
					}
					
				}
				$content_id = $_GET["content_id"];
				$sql = "SELECT * FROM `services` WHERE `id`='" . $content_id . "'";
				$result = mysqli_query($conn, $sql);
				while($result_array = mysqli_fetch_assoc($result)) {
					$service_name = $result_array['service_name'];
					echo('<form method="post" action="edit.php?content_id='. $result_array['id'] .'&id=' . $_SESSION['id'] . '">
					<input type="text" class="form-input" id="service_name" name="service_name" value="' . $service_name . '"><br>
					<input type="hidden" name="content_id" value="' . $result_array['id'] . '">
					<input type="submit" class="form-submit" value="Відправити">
					</form>');
					}
					

			?>
	</div>

	</body>
	</html>

<?php
}
?>