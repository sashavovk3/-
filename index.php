<!DOCTYPE html>
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
<html lang="ua">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
<title>Notalex</title>
<link href="css/style.css?v=4" type="text/css" rel="stylesheet">
<link href="css/media.css?v=4" type="text/css" rel="stylesheet">
<script src="js/jquery-1.9.1.min.js"></script>
<!--[if lt IE 9]>
  <script src="js/ie.js"></script>
  <script src="js/html5.js"></script>
<![endif]-->
</head>
<body>

<div class="display-none">
  <div class="box-modal" id="small-modal-1">
    <div class="modal-ob">
      <div class="modal-close arcticmodal-close"></div>
      <div class="modal-form-head">
        Зворотній дзвінок
      </div>
      <div class="modal-form__desc">
        Залиште номер телефону і ми звяжемося з вами!
      </div>
      <form action="/" class="form-modal" name="form-1">
        <input type="text" name="name" class="form-input" placeholder="Ваше Імя">
        <input type="number" name="tell" class="form-input" placeholder="Введіть телефон">
        <input type="submit" class="form-submit feedback" value="Замовити дзвінок">
      </form>
    </div>
  </div>
</div>

<div class="display-none">
  <div class="box-modal" id="small-modal-2">
    <div class="modal-ob">
      <div class="modal-close arcticmodal-close"></div>
      <div class="modal-form-head">
        Консультація по телефону
      </div>
      <div class="modal-form__desc">
		Залиште свій номер телефону і ми надамо вам консультацію!
      </div>
      <form action="/" class="form-modal" name="form-2">
        <input type="text" name="name" class="form-input" placeholder="Ваше Імя">
        <input type="number" name="tell" class="form-input" placeholder="Введіть телефон">
        <input type="submit" class="form-submit feedback" value="Відправити">
      </form>
    </div>
  </div>
</div>

<div class="display-none">
  <div class="box-modal" id="small-modal-3">
    <div class="modal-ob">
      <div class="modal-close arcticmodal-close"></div>
      <div class="modal-form-head">
        Реєстрація юридичних послуг
      </div>
      <div class="modal-form__desc"></div>
      <form action="/" class="form-modal" name="form-3">
        <input type="hidden" name="name-prob" class="modal-hidden_input-3">
        <input type="number" name="tell" class="form-input" placeholder="Введіть телефон">
        <input type="submit" class="form-submit feedback" value="Замовити дзвінок">
      </form>
    </div>
  </div>
</div>

<!-- header BEGIN -->
<header class="header">
  <div class="wrapper">
    <a class="logo">
      NotaLex
    </a>
    <nav class="nav">
      <ul class="clearfix">
        <li><a href="#services-block">Послуги</a></li>
        <li><a href="#price-block">Ціни</a></li>
        <li><a href="#cases-block">Кейси</a></li>
        <li><a href="#our-team">Команда</a></li>
        <li><a href="#map-block-ob">Контакти</a></li>
        <li><a href="tel:+380983256874">+380983256874</a></li>
      </ul>
    </nav>
    <div class="menu-icon">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
    <div class="header-contacts__item-top display-none">
      <i class="fa fa-phone"></i> <a href="tel:+380983256874">+380983256874</a>
    </div>
    <div class="header-contacts clearfix">
      <div class="header-contacts__item">
        <div class="header-contacts__item-top">
          <i class="fa fa-phone"></i> <a href="tel:+380983256874">+380983256874</a>
        </div>
        <div class="header-contacts__item-bottom">
          <a class="modal_btn-1">Зворотній дзвінок</a>
        </div>
      </div>
      <div class="header-contacts__item">
        <div class="header-contacts__item-top">
          <i class="fa fa-adress"></i> м.Львів, проспект Червоної Калини, 42
        </div>
        <div class="header-contacts__item-bottom">
          <i class="fa fa-e-mail"></i> <a href="mailto:sasha.vovk03@gmail.com">sasha.vovk03@gmail.com</a>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- header END -->

<!-- main-block BEGIN -->
<section class="main-block">
  <div class="wrapper">
    <div class="main-block__content">
      <h1>Юридична допомога<span>для бізнесу</span></h1>
      <div class="clearfix">
        <h2>з професійною практикою більше 10 років</h2>
      </div>
      <div class="main-block__bottom clearfix">
        <a class="modal_btn-2">Залишити заявку</a>
        <div class="main-block__bottom-left">Консультація по телефону за <span>0 гривень</span></div>
      </div>
    </div>
  </div>
</section>
<!-- main-block END -->

<!-- preferences-block BEGIN -->
<div class="preferences-block">
  <div class="wrapper">
    <div class="preferences-list">
      <div class="preferences-item">
        <div class="preferences-item__icon">
          <img src="images/icon-preferences-1.png" alt="">
        </div>
        <div class="preferences-item__text">
          <p>Протягом роботи зберегли</p>
          <p>понад 18 мільйонів гривень.</p>
        </div>
      </div>
      <div class="preferences-item">
        <div class="preferences-item__icon">
          <img src="images/icon-preferences-2.png" alt="">
        </div>
        <div class="preferences-item__text">
          <p>Кожному клієнту заощадили від</p>
          <p>3 місяців дорогоцінного часу і нервів.</p>
        </div>
      </div>
      <div class="preferences-item">
        <div class="preferences-item__icon">
          <img src="images/icon-preferences-3.png" alt="">
        </div>
        <div class="preferences-item__text">
          <p>Зараз з нами співпрацюють</p>
          <p>понад 60 компаній.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- preferences-block END -->

<!-- services-block BEGIN -->
<section class="services-block landingItem" id="services-block">
  <div class="wrapper">
    <h2 class="block-title">Наша компанія спеціалізується на наступних питаннях:</h2>
    <div class="services-list">
      <div class="row">
        <?php
        // Виконання запиту на підрахунок унікальних значень
        $sql = 'SELECT COUNT(DISTINCT id) FROM kind_of_services';
        $result = mysqli_query($conn, $sql);
        $count_of_kind = 0; 
        // Обробка результату запиту
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            $count_of_kind = $row['COUNT(DISTINCT id)']; // кількість унікальних видів послуг
          }
        } else {
          echo "Результатів не знайдено";
        }

        for($i = 1; $i <= $count_of_kind; $i++) {
          // subquery вибір послуг
          $sql = 'SELECT (SELECT kind_name FROM kind_of_services WHERE id = ' . $i . ') AS kind_name, services.* FROM services WHERE kind_id = ' . $i;
          $result = mysqli_query($conn, $sql);
          
          echo('<div class="services-item">');
          
          // вивід заголовку виду послуг
          if ($row = mysqli_fetch_assoc($result)) {
            echo ('<div class="services-item__title">' . $row["kind_name"] . '</div>');
          }
          
          echo('<ul class="services-item__text">');
          // Зсув курсора на перший рядок
          mysqli_data_seek($result, 0);

          // вивід послуг
          while($row = mysqli_fetch_assoc($result)) {
            echo('<li><a class="modal_btn-3">' . $row["service_name"] . '</a></li>');
          }
          
          echo('</ul>');  
          echo('</div>');
        }
        ?>
      </div>
    </div>
  </div>
</section>
<!-- services-block END -->

<!-- price-block BEGIN -->
<section class="price-block landingItem" id="price-block">
  <h2 class="block-title">Приблизні ціни на послуги</h2>
  <div class="price-block__content">
    <div class="wrapper">
      <div class="price-left">
        <div class="price-item">
          <div class="price-item__icon">
            <img src="images/icon-price-1.png" alt="">
          </div>
          <div class="price-item__content">
            <h3>Юридичний<br>супровід</h3>
            <div class="price-item__text">
              <ul>
                <li>Стягнення 200 000 тисяч гривень юридичній фірмі</li>
              </ul>
            </div>
            <div class="price-item__amount">15 000грн.*</div>
          </div>
        </div>
        <div class="price-item">
          <div class="price-item__icon">
            <img src="images/icon-price-2.png" alt="">
          </div>
          <div class="price-item__content">
            <h3>Реєстраційні<br>послуги</h3>
            <div class="price-item__text">
              <ul>
                <li>Реєстрація ТзОВ</li>
              </ul>
            </div>
            <div class="price-item__amount">3 000грн.*</div>
          </div>
        </div>
        <div class="price-item">
          <div class="price-item__icon">
            <img src="images/icon-price-3.png" alt="">
          </div>
          <div class="price-item__content">
            <h3>Арбітражні<br>послуги</h3>
            <div class="price-item__text">
              <ul>
                <li>Ведення компанії</li>
              </ul>
            </div>
            <div class="price-item__amount">10 000грн.* <span>в місяць</span></div>
          </div>
        </div>
      </div>
      <div class="price-right">
        <div class="price-right__head">
          Залишити заявку<br>на безплатну консультацію!
        </div>
        <div class="price-right__title">
          Надішліть нам свої контактні дані, і ми зв'яжемося з вами найближчим часом!
        </div>
        <div class="price-right__form">
          <form action="#" name="form-4">
            <input type="text" name="name" class="form-input" placeholder="Імя">
            <input type="number" name="tell" class="form-input" placeholder="Телефон *">
            <div class="price-right__form-desc">* Кінцева вартість послуг залежатиме від вхідних даних.</div>
            <div class="text-r">
              <input type="submit" class="form-submit feedback" value="Відправити">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- price-block END -->

<!-- cases-block BEGIN -->
<section class="cases-block landingItem" id="cases-block">
  <div class="wrapper">
    <h2 class="block-title">Реальні справи наших клієнтів</h2>
    <div class="cases-slider"><?php 
		$sql_affairs = 'SELECT t2.*, t1.kind_name FROM affairs t2 JOIN kind_of_services t1 ON t2.theme = t1.id';
		$result_affairs = mysqli_query($conn, $sql_affairs);
		if (mysqli_num_rows($result_affairs) > 0) {
			  while($row = mysqli_fetch_assoc($result_affairs)) {
				  echo'<div class="cases-item-ob">
					<div class="cases-item clearfix">
					  <div class="cases-item__left">
						<div class="cases-item__head clearfix">
						  <div class="cases-item__head-item">
							Сфера:
							<h4>' .$row["sphere"]. '</h4>
						  </div>
						  <div class="cases-item__head-item">
							Тематика:
							<h4>' .$row["kind_name"]. '</h4>
						  </div>
						</div>
						<div class="cases-item__text">
						  <div class="cases-item__block">
							<h4>Проблема:</h4>' .$row["problem"]. '
						  </div>
						  <div class="cases-item__block">
							<h4>Завдання:</h4>' .$row["task"]. '
						  </div>
						  <div class="cases-item__block">
							<h4>Результат:</h4>' .$row["result"]. '
						  </div>
						</div>
					  </div>
					  <div class="cases-item__right">
						<div class="cases-item__right-list">
						  <div class="cases-item__right-item">
							Час виконання завдання:
							<h4>' .$row["time"]. '</h4>
						  </div>
						  <div class="cases-item__right-item">
							Вартість послуги:
							<h4>' .$row["cost"]. ' грн.</h4>
						  </div>
						  <div class="cases-item__right-item">
							Економія завдяки проведенню справи:
							<h4>' .$row["economy"]. ' грн.</h4>
						  </div>
						</div>
					  </div>
					</div>
				  </div>';
			  }
			} else {
			  echo "Результатів не знайдено";
			}
	?>  
	</div>
  </div>
</section>
<!-- cases-block END -->

<!-- feedback-block BEGIN -->
<div class="feedback-block">
  <div class="wrapper">
    <div class="feedback-left">
      Зв'яжіться з нами
      <span>і ми обов'язково допоможемо вам!</span>
    </div>
    <div class="feedback-right">
      <a class="form-submit modal_btn-1">Залишити заявку</a>
    </div>
  </div>
</div>
<!-- feedback-block END -->

<!-- our-team BEGIN -->
<section class="our-team landingItem" id="our-team">
  <h2 class="block-title">Наша команда</h2>
  <div class="our-team__list">
    <div class="wrapper">
      <img src="images/our-team-img.jpg" alt="">
    </div>
  </div>
</section>
<!-- our-team END -->

<!-- map-block-ob BEGIN -->
<div class="map-block-ob landingItem" id="map-block-ob">
  <div class="map-right">
    <div class="wrapper">
      <div class="map-contacts">
        <div class="map-contacts__list">
          <div class="map-contacts__item">
            <div class="map-contacts__item-icon">
              <img src="images/icon-contacts-adress.png" alt="">
            </div>
            <div class="map-contacts__item-text">
              м.Львів, проспект Червоної Калини, 42
            </div>
          </div>
          <div class="map-contacts__item">
            <div class="map-contacts__item-icon">
              <img src="images/icon-contacts-phone.png" alt="">
            </div>
            <div class="map-contacts__item-text">
              <a href="+380983256874">+380983256874</a>
            </div>
          </div>
          <div class="map-contacts__item">
            <div class="map-contacts__item-icon">
              <img src="images/icon-contacts-e-mail.png" alt="">
            </div>
            <div class="map-contacts__item-text">
              <a href="mailto:sasha.vovk03@gmail.com">sasha.vovk03@gmail.com</a><br>Для листів керівнику
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- map-block-ob END -->

<!-- nav ↓ -->
<script src="js/jquery.liLanding.js"></script>
<!-- min-height ↓ -->
<script type="text/javascript" src="js/jquery.matchHeight-min.js"></script>
<!-- feedback ↓ -->
<script src="feedback/js/feedback.js?v=3"></script>
<script src="feedback/js/jquery.arcticmodal.js?v=3"></script>
<script src="feedback/js/jquery.jgrowl.js?v=3"></script>
<script src="feedback/js/modal-list.js?v=3"></script>
<!-- slick-slider ↓ -->
<script type="text/javascript" src="js/slick.min.js"></script>
<!-- main ↓ -->
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>