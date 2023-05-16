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
		
		if($_SERVER["REQUEST_METHOD"] == "POST") {
				$service_name = $_POST["service_name"];
				$kind_id = $_POST["kind_id"];
				$sql = "INSERT INTO `services` (service_name, kind_id) VALUES ('" . $service_name . "', '" . $kind_id . "')"; // додавання нової послуги
				$result = mysqli_query($conn, $sql);
				if($result){
					header("Location: admin.php?id=" . $_SESSION['id']); 
				}
			}
		// вихід з адмін панелі
		if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"]) && isset($_GET["exit"])) {
			session_unset();
			session_destroy();
			header("Location: index.php");
		}
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

	<!-- header BEGIN -->
	<br>
	<a href="admin.php?id=<?php echo($_SESSION['id']);?>&exit=true" class="modal_btn-1">Вийти з адмін-панелі</a>
	<!-- header END -->

	<!-- services-block BEGIN -->
	<section class="services-block landingItem" id="services-block">
	  <div class="wrapper">
		<h2 class="block-title">Наша компанія спеціалізується на наступних питаннях:</h2>
		<div class="services-list">
		  <div class="row">
		  <?php // Виконання запиту на підрахунок унікальних значень
				$sql = 'SELECT COUNT(DISTINCT id) FROM kind_of_services';
				$result = mysqli_query($conn, $sql);
				$count_of_kind = 0;
				// Обробка результату запиту
				if (mysqli_num_rows($result) > 0) {
				  // Виведення результату запиту
				  while($row = mysqli_fetch_assoc($result)) {
					$count_of_kind = $row['COUNT(DISTINCT id)'];
				  }
				} else {
				  echo "Результатів не знайдено";
				}
				for($i=1;$i<=$count_of_kind;$i++){
					$sql = 'SELECT * FROM kind_of_services WHERE id=' . $i;
					$result = mysqli_query($conn, $sql);
					echo('<div class="services-item">');
					while($row = mysqli_fetch_assoc($result)) {
						echo ('
						<div class="services-item__title">' . $row["kind_name"] . '</div><ul class="services-item__text">');
						$sql_services = 'SELECT * FROM services WHERE kind_id=' . $row["id"];
						$sql_services_result = mysqli_query($conn, $sql_services);
						while($services_row = mysqli_fetch_assoc($sql_services_result)) {
							echo('<li><a class="modal_btn-3">' .$services_row["service_name"] . '</a></li>
							<a href="/edit.php?content_id=' . $services_row["id"] . '&id=' . $_SESSION["id"] . '">Редагувати</a>
							<a href="/delete.php?content_id=' . $services_row["id"] . '&id=' . $_SESSION["id"] . '">Видалити</a>');
						}
					}
					echo('</ul></div>');
				}
			?>
		  </div>
		<h2 class="block-title"><br><br><br>Добавити послугу</h2>
		<?php
		echo('<form method="post" action="admin.php?id='. $_SESSION["id"] .'">
				<input type="text" id="service_name" class="form-input" placeholder="Введіть послугу" name="service_name" value=""><br>
				<input type="text" id="kind_id" class="form-input" placeholder="Тип послуги 1/2/3" name="kind_id" value=""><br>
				<input class="form-submit feedback" type="submit" value="Додати">
			</form>');
			
		?>
		</div>
	  </div>
	</section>
	<!-- services-block END -->
	</body>
	</html>

<?php
}
?>