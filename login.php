<?php
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
	
	?>

<!DOCTYPE html>
<html>
  <head>
    <title>Форма входу</title>
  </head>
  <body>
    <h1>Вхід</h1>
    <form method="post" action="login.php">
      <label for="username">Ім'я користувача:</label><br>
      <input type="text" id="username" name="username"><br>
      <label for="password">Пароль:</label><br>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Увійти">
    </form>
  </body>
</html>

<?php
	// перевірка, чи відправлена форма
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// отримання даних з форми
		$username = $_POST["username"];
		$password = $_POST["password"];
		// формування запиту до бази даних по користувачу
		$sql = "SELECT `id`, `user_name`, `pass` FROM `user` WHERE `user_name`='" .$username . "'";
		$result = mysqli_query($conn, $sql);
		while($result_array = mysqli_fetch_assoc($result)) {
			// перевірка правильності паролю користувача
			if ($result_array["pass"] == $password){
				session_start();
				// збереження інформації про користувача у сесії
				$_SESSION["id"] = $result_array["id"];
				// перенаправлення на захищену сторінку
				header("Location: admin.php?id=" . $result_array["id"]);
			}
		}		
	}	
?>