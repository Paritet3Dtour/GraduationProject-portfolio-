<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- PHP SCRIPT BEGIN-->
    <?php
      function getXLS($xls){
          include_once '../phpExcel1/Classes/PHPExcel/IOFactory.php';
          $objPHPExcel = PHPExcel_IOFactory::load($xls);
          $objPHPExcel->setActiveSheetIndex(0);
          $aSheet = $objPHPExcel->getActiveSheet();
      
          //цей масив буде містити масиви, які містять в собі значення осередків кожного рядка
          $array = array();
          //отримаємо итератор рядка і пройдемося по ньому циклом
          foreach($aSheet->getRowIterator() as $row){
              //отримаємо итератор осередків поточного рядка
              $cellIterator = $row->getCellIterator();
              //пройдемося циклом по осередках рядка
              //цей масив буде містити значення кожного окремого рядка
              $item = array();
              foreach($cellIterator as $cell){
                  //заносимо значення осередків одного рядка в окремий масив
                  //array_push($item, iconv('utf-8', 'cp1251', $cell->getCalculatedValue()));
                      array_push($item, $cell->getCalculatedValue());
              }
              //заносимо масив зі значеннями осередків окремого рядка в " загальний массв рядків "
              array_push($array, $item);
          }
          return $array;
      
      }
      
      $xlsData = getXLS('../phpExcel1/Simple1.xls');  //витягаємо дані з XLS
      
      /*  Студент - номер строки
          Андрійев Андрій Андрійович  - 11
          Денисов Денис Денисович - 12
          Богданов Богдан Богданович - 13
          Артемов Артем Артемович - 14
          Максимов Максим Максимович - 15
          Вікторов Віктор Вікторович - 16
          Дмитренко Дмитро Дмітрійевич  - 17
          Станіславов Станіслав Станіславович - 18
          Юрченко Юрій Юрійевич  - 19
          Миколайев Миколай Миколайевич - 20
          Валерченко Валерій Валерійович  - 21
          Олексійев Олексій Олексійович 22
          Платонов Платон Платонович - 23
          Йевгенченко Йевген Йевгенійович - 24
          Олегченко Олег Олегович - 25
          Вітальченко Віталій Віталійович - 26
          Сергійев Сергій Сергійович - 27
          Владченко Володимир Володимирович - 28
          Ярославченко Ярослав Ярославович - 29
          Олександров Олександр Олександрович - 30
          Радченко Радислав Радиславович - 31
          Ігорченко Ігор Ігорович - 43
          Семенченко Семен Семенович - 44
          Тритонов Тритон Тритонович - 45
          Петренко Петро Петрович - 46
          Романов Роман Романович - 47
          Альбертов Альберт Альбертович - 48
          Русланов Руслан Русланович - 49
      */
      
      $line_number = 11;                                                             // Номер строки
      $name_of_student = $xlsData[$line_number][1];                                  // Ім'я студента
      $introduction_to_specialty = $xlsData[$line_number][2];                        // Вступ до спеціальності
      $history_of_ukraine = $xlsData[$line_number][3];                               // Історія України
      $culturology = $xlsData[$line_number][4];                                      // Культурологія
      $ukrainian_language = $xlsData[$line_number][5];                               // Українська мова
      $philosophy = $xlsData[$line_number][6];                                       // Основи філософії
      $economic_theory = $xlsData[$line_number][7];                                  // Єкономічна теорія
      $law = $xlsData[$line_number][8];                                              // Основи правознавства
      $sociology = $xlsData[$line_number][9];                                        // Соціологія
      $english_language = $xlsData[$line_number][10];                                // Іноземна мова
      $training = $xlsData[$line_number][11];                                        // Фізичне виховання
      $mathematical_analysis = $xlsData[$line_number][12];                           // Математичний аналіз
      $linear_algebra = $xlsData[$line_number][13];                                  // Лінійна алгебра та геометрія
      $differential_equations = $xlsData[$line_number][14];                          // Диференціальні рівняння
      $discrete_math = $xlsData[$line_number][15];                                   // Дискретна математика
      $probability_theory = $xlsData[$line_number][16];                              // Теорія ймовірності
      $theory_of_algorithms = $xlsData[$line_number][17];                            // Теорія алгоритмів
      $numerical_methods = $xlsData[$line_number][18];                               // Числені методи
      $mathematical_methods = $xlsData[$line_number][19];                            // Математичні методи
      $physics = $xlsData[$line_number][20];                                         // Фізика
      $life_safety = $xlsData[$line_number][21];                                     // Безпека життєдіяльності
      $ecology = $xlsData[$line_number][22];                                         // Основи єкології
      $algorithmic_and_programming = $xlsData[$line_number][23];                     // Алгоритмізація і програмування
      $object_oriented_programming = $xlsData[$line_number][24];                     // Обєктно орієнтоване програмування
      $operating_systems = $xlsData[$line_number][25];                               // Операційні системи
      $company_database = $xlsData[$line_number][26];                                // Організація баз даних
      $web_technologies = $xlsData[$line_number][27];                                // Web-технології та Web-дизайн
      $computer_graphics = $xlsData[$line_number][28];                               // Комп'ютерна графіка
      $development_of_client_server_applications = $xlsData[$line_number][29];       // Розробка клієнт-серверних застосувань
      $technology_creation_software = $xlsData[$line_number][30];                    // Технології створення програмних продуктів
      $technology_information_security = $xlsData[$line_number][31];                 // Технології захисту інформації
      $testing_of_software_systems_and_complexes = $xlsData[$line_number][32];       // Тестування програмних систем та комплексів
      $administration_software_systems = $xlsData[$line_number][33];                 // Адміністрування програмних систем
      $electrical_engineeringa = $xlsData[$line_number][34];                         // Електротехніка
      $computer_circuitry = $xlsData[$line_number][35];                              // Комп'ютерна схемотехніка
      $computer_architecture = $xlsData[$line_number][36];                           // Архітектура компютера
      $computer_networks = $xlsData[$line_number][37];                               // Компютерні мережі
      $basics_of_labor_protection = $xlsData[$line_number][38];                      // Основи охорони праці
      $occupational_health_in = $xlsData[$line_number][39];                          // Охорона праці в галузі
      $business_and_it_business_basics = $xlsData[$line_number][40];                 // Економіка та основи IT бізнесу
      $introduction_to_modern_it_technologies = $xlsData[$line_number][41];          // Введення в сучасні IT технології
      $design_workshop = $xlsData[$line_number][42];                                 // Проектний практикум
      $man_machine_interface = $xlsData[$line_number][43];                           // Людино-машинний інтерфейс
      $coursework_1 = $xlsData[$line_number][44];                                    // Курсова робота-1
      $coursework_2 = $xlsData[$line_number][45];                                    // Курсова робота-2
      $coursework_3 = $xlsData[$line_number][46];                                    // Курсова робота-3
      $educational_practice_1 = $xlsData[$line_number][47];                          // Навчальна практика-1
      $educational_practice_2 = $xlsData[$line_number][48];                          // Навчальна практика-2
      $pereddiplomna_practice = $xlsData[$line_number][49];                          // Переддипломна практика
      $design_diploma = $xlsData[$line_number][50];                                  // Дипломне проектування
      $protection_degree_project = $xlsData[$line_number][51];                       // Захист дипломного проекту
      $number_of_excellent_ratings = $xlsData[$line_number][64];                     // Кількість оцінок відмінно
      $number_of_good_ratings = $xlsData[$line_number][65];                          // Кількість оцінок добре
      $number_of_satisfactory_ratings = $xlsData[$line_number][66];                  // Кількість оцінок задовільно
      $gpa = $xlsData[$line_number][70];                                             // Середній бал без ДЕК
      ?>
    <!-- PHP SCRIPT END-->

    <!-- JQUERY SCRIPT BEGIN-->
    <script>
      function printBlock() {
      $("input").each(function(){
          $(this).attr("value", $(this).val());
      });
      $("select").each(function(){
          var val=$(this).val();
          $("option[value='"+val+"']", this).attr('selected', 'selected');
      });
      var PrintContent=$('#PrintContent').html();
      $('body').addClass('printSelected');
      $('body').append('<div class="printSelection"><div class="printLogo"><img src="/templates/images/logo.gif" alt=""/></div>'+PrintContent+'</div>');
      window.print();
      window.setTimeout(pageCleaner,0);
      return false;
      }
      function pageCleaner(){
      $('body').removeClass('printSelected');
      $('.printSelection').remove();
      }
      
      function printBlock1() {
      PrintContent = $('#PrintContent1').html();
      $('body').addClass('printSelected');
      $('body').append('<div class="printSelection">'+PrintContent+'</div>');
      window.print();
      window.setTimeout(pageCleaner,0);
      return false;
      }
      function pageCleaner1(){
      $('body').removeClass('printSelected');
      $('.printSelection').remove();
      }

			function slyLink() {
  		var istS = 'Источник:'; // Слово должно находится в кавычках!
  		var copyR = '© сайт'; // Название сайта - слово должно находится в кавычках!
  		var body_element = document.getElementsByTagName('body')[0];
  		var choose;
  		choose = window.getSelection();
  		var myLink = document.location.href;
  		var authorLink = " " + istS + ' ' + " "+myLink+" " + copyR;
  		var copytext = choose + authorLink;
  		var addDiv = document.createElement('div');
  		addDiv.style.position = 'absolute';
  		addDiv.style.left = '-99999px';
  		body_element.appendChild(addDiv);
  		addDiv.innerHTML = copytext;
  		choose.selectAllChildren(addDiv);
  		window.setTimeout(function() {
  		  body_element.removeChild(addDiv);
  		},0);
			}
			document.oncopy = slyLink;
		</script>

    <!-- JQUERY SCRIPT END-->

    <!-- HEADER BEGIN -->
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="logo">
            <a href="http://www.krok.edu.ua/ua/">
            <img src="image/logo-dark.png" alt="logo" class="header__logo">
            </a>
          </div>
          <div class="header__buttons">
            <a role="button" href="http://www.krok.edu.ua/ua/pro-krok/pidrozdili" class="btn btn-primary text-uppercase">підрозділи</a>
            <a role="button" href="http://www.krok.edu.ua/ua/rozklad" class="btn btn-primary text-uppercase">розклад</a>
            <a role="button" href="http://www.krok.edu.ua/ua/telefoni-adresa-mapa" class="btn btn-primary text-uppercase">контакти</a>
          </div>
        </div>
      </div>
    </div>
    <!-- HEADER END -->
   
    <!-- CONTENT BEGIN -->
    <div class="content">
      <div class="container">
        <!-- APPENDED2 BEGIN -->
        <div class="row" id="PrintContent">
          <div class="append__2">
            <div class="table__2">
              <div class="table__1_block-1">
                <table class="table table-condensed ">
                  <p class=" table__header"> Кваліфікаційна робота (тема, час виконання, оцінка)</p>
                  <tbody>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td class="table__text-align">Інформація про атестацію:</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Назва дисципліни (курсу)</td>
                      <td class="table__text-align">Оцінка</td>
                    </tr>
                    <tr>
                      <td>Комплексний екзамен зі<br> спеціальності</td>
                      <td><input class="table__text-align" type="text" name="" value="" 
                        placeholder="Введіть оцінку" style="border:none;background:white;" /></td>
                    </tr>
                    <tr>
                      <td>з дисциплін:</td>
                      <td class="table__text-align">протокол</td>
                    </tr>
                    <tr>
                      <td><input type="text" name="" value="" 
                        placeholder="Введіть назву дисципліни" style="border:none;background:white;" /></td>
                      <td><input class="table__text-align" type="text" name="" value="" 
                        placeholder="№1" style="border:none;background:white;" /></td>
                    </tr>
                    <tr>
                      <td><input type="text" name="" value="" 
                        placeholder="Введіть назву дисципліни" style="border:none;background:white;" /></td>
                      <td><input class="table__text-align" type="text" name="" value="" 
                        placeholder="від 22" style="border:none;background:white;" /></td>
                    </tr>
                    <tr>
                      <td><input type="text" name="" value="" 
                        placeholder="Введіть назву дисципліни" style="border:none;background:white;" /></td>
                      <td><input class="table__text-align" type="text" name="" value="" 
                        placeholder="червня" style="border:none;background:white;" /></td>
                    </tr>
                    <tr>
                      <td><input type="text" name="" value="" 
                        placeholder="Введіть назву дисципліни" style="border:none;background:white;" /></td>
                      <td><input class="table__text-align" type="text" name="" value="" 
                        placeholder="2016 року" style="border:none;background:white;" /></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>
                        <p class="table__header2"> Рішенням екзаменаційної комісії</p>
                      </td>
                      <td><input class="table__header2 table__text-align" type="text" name="" value="" 
                        placeholder="Введіть дату" style="border:none;background:white;" /></td>
                    </tr>
                    <tr>
                      <td>присвоєно кваліфікацію </td>
                      <td>"молодший спеціаліст з розробки програмного забезбечення"</td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                </table>
              </div>
              <div class="table__2_block-1">
                <table class="table table-condensed ">
                  <p class=" table__header"> Директор Коледжу економіки, права та<br>інформаційних технологій</p>
                  <br> 
                  <p class="table__text-align-right">Л.П. Сумбаєва</p>
                  <tbody>
                    <tr>
                      <td >
                        <p class="table__greey-text">(підпис)</p>
                      </td>
                      <td >
                        <p class="table__greey-text2">(ініціали, прізвище)</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table__2_block-1">
                <table class="table table-condensed ">
                  <p class=" table__header"> Голова екземенаційної комісії
                  <p class="table__text-align-right"><input class="table__text-align-right" type="text" name="" value="" 
                    placeholder="Введіть ім,я голови" style="border:none;background:white;" /></p>
                  <tbody>
                    <tr>
                      <td >
                        <p class="table__greey-text">(підпис)</p>
                      </td>
                      <td >
                        <p class="table__greey-text2">(ініціали, прізвище)</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <p class="table__2_block-1"><input type="text" name="" value="" 
                placeholder="Введіть дату" style="border:none;background:white;" /></p>
              <p class="table__3_block-1">Реєстраційний номер____________________________</p>
            </div>
            <div class="table__2">
              <p class="append__header text-uppercase">додаткова інформація</p>
              <div class="table__2_block-2">
                <table class="table table-condensed ">
                  <p class=" table__header"> Тип вищого навчального закладу ВНЗ І-го рівня</p>
                  <tbody>
                    <tr>
                      <td>акредитації в структурі ВНЗ IV-го рівня акредитації,</td>
                    </tr>
                    <tr>
                      <td>приватна форма власності</td>
                    </tr>
                    <tr>
                      <td>Умови вступу за конкурсом</td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td>Вимоги освітньої програми</td>
                    </tr>
                    <tr>
                      <td>базова загальна середня освіта</td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td>Навчальне навантаження</td>
                    </tr>
                    <tr>
                      <td>(годин/кредитів ECTS)</td>
                    </tr>
                    <tr>
                      <td class="table__text-align">6705/186,25</td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td>Система іспитів: екзамени, диференційовані заліки</td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td>Шкала оцінок<br>екзамени та диференційовані заліки оцінюються</td>
                    </tr>
                    <tr>
                      <td>за чотирибальною шкалою: «відмінно», «добре»,</td>
                    </tr>
                    <tr>
                      <td>«задовільно», «незадовільно»</td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="table__2">
              <div class="table__3_block-3">
                <p class="table__3_block-3_header">Додаток до диплома</p>
                <p class="table__3_block-3_header"><input class="table__text-align" type="text" name="" value="" placeholder="Введіть №" style="border:none;background:white; text-decoration:underline;" /></p>
                <p class="table__3_block-3_header"><input class="table__text-align" type="text" name="" value="" placeholder="Дата видачі:" style="border:none;background:white;" /></p>
                <p  class="table__3_block-3_header">(без диплома не дійсний)</p>
                <table class="table table-condensed ">
                  <p class=" table__header2">П.І.Б.&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <?php echo $name_of_student ?></p>
                  <tbody>
                    <tr>
                      <td>Дата народження&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<input type="text" name="" value="" 
                        placeholder="Введіть дату народження" style="border:none;background:white;" /></td>
                    </tr>
                    <tr>
                      <td>Попередній документ про освіту свідоцтво про базову загальну середню освіту
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td class="table__text-align"><input class="table__text-align" type="text" name="" value="" 
                        placeholder="Введіть номер документа" style="border:none;background:white;" /></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Найменування вищого навчального закладу Коледж економіки, права та інформаційних технологій
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Університет економіки та права «КРОК»</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Строк навчання&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;4 роки</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Форма навчання&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;денна</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Спеціальність&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;5.05010301</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td class="table__text-align">Розробка програмного забезпечення</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Періоди практики:</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Навчальна практика <input type="text" name="" value="" 
                        placeholder="Введіть назву практики" style="border:none;background:white;" /></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Навчальна практика <input type="text" name="" value="" 
                        placeholder="Введіть назву практики" style="border:none;background:white;" /></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Навчальна практика <input type="text" name="" value="" 
                        placeholder="Введіть назву практики" style="border:none;background:white;" /></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Навчальна практика <input type="text" name="" value="" 
                        placeholder="Введіть назву практики" style="border:none;background:white;" /></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Виробнича практика. <input type="text" name="" value="" 
                        placeholder="Введіть назву практики" style="border:none;background:white;" /></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Виробнича практика. <input type="text" name="" value="" 
                        placeholder="Введіть назву практики" style="border:none;background:white;" /></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Дата вступу до вищого навчального закладу</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td class="table__text-align"><input class="table__text-align" type="text" name="" value="" 
                        placeholder="Введіть дату вступу" style="border:none;background:white;" /></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Дата закінчення вищого навчального закладу</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td class="table__text-align"><input class="table__text-align" type="text" name="" value="" 
                        placeholder="Введіть дату закінчення" style="border:none;background:white;" /></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Академічні права &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;продовження</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>навчання для отримання ступеня бакалавра</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Професійні права&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Робота за фахом</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><br></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- APPENDED2 END -->

    <!-- APPENDED1 BEGIN -->
    <div class="row" id="PrintContent1">
      <div class="append">
        <div class="table__1">
          <table class="table table-condensed ">
            <p class="table__text-align table__header"> Програма навчання складається з таких навчальних дисциплін:</p>
            <tbody>
              <tr>
                <td class="table__text-align">Назва дисципліни</td>
                <td class="table-bordered table__text-align">Навчальний час/кр ECTS</td>
                <td>Оцінка</td>
              </tr>
              <tr>
                <td class="table__text-align">1</td>
                <td class="table-bordered table__text-align">2</td>
                <td class="table__text-align">3</td>
              </tr>
              <tr>
                <td>Вступ до спеціальності</td>
                <td class="table-bordered table__text-align">1,5</td>
                <td><?php echo $introduction_to_specialty ?></td>
              </tr>
              <tr>
                <td>Історія України</td>
                <td class="table-bordered table__text-align">1,5</td>
                <td><?php echo $history_of_ukraine ?></td>
              </tr>
              <tr>
                <td>Культурологія</td>
                <td class="table-bordered table__text-align">1,5</td>
                <td><?php echo $culturology ?></td>
              </tr>
              <tr>
                <td>Українська мова(за профессійним спрямуванням)</td>
                <td style="vertical-align:middle"class="table-bordered table__text-align">1,5</td>
                <td style="vertical-align:middle"><?php echo $ukrainian_language ?></td>
              </tr>
              <tr>
                <td>Основи філософських знань (філософія та релігієзнавство)</td>
                <td style="vertical-align:middle" class="table-bordered table__text-align">1,5</td>
                <td style="vertical-align:middle"><?php echo $philosophy ?></td>
              </tr>
              <tr>
                <td>Економічна теорія</td>
                <td class="table-bordered table__text-align">1,5</td>
                <td><?php echo $economic_theory ?></td>
              </tr>
              <tr>
                <td>Основи правознавства</td>
                <td class="table-bordered table__text-align">1,5</td>
                <td><?php echo $law?></td>
              </tr>
              <tr>
                <td>Соціологія</td>
                <td class="table-bordered table__text-align">1,5</td>
                <td><?php echo $sociology ?></td>
              </tr>
              <tr>
                <td>Іноземна мова (за професійним спрямуванням)</td>
                <td style="vertical-align:middle" class="table-bordered table__text-align">6</td>
                <td style="vertical-align:middle"><?php echo $english_language ?></td>
              </tr>
              <tr>
                <td>Фізичне виховання</td>
                <td class="table-bordered table__text-align">7,5</td>
                <td><?php echo $training ?></td>
              </tr>
              <tr>
                <td>Математичний аналіз</td>
                <td class="table-bordered table__text-align">6</td>
                <td><?php echo $mathematical_analysis ?></td>
              </tr>
              <tr>
                <td>Лінійна алгебра та геометрія</td>
                <td class="table-bordered table__text-align">4</td>
                <td><?php echo $linear_algebra ?></td>
              </tr>
              <tr>
                <td>Диференціальні рівняння</td>
                <td class="table-bordered table__text-align">5</td>
                <td><?php echo $differential_equations ?></td>
              </tr>
              <tr>
                <td>Дискретна математика</td>
                <td class="table-bordered table__text-align">6</td>
                <td><?php echo $discrete_math ?></td>
              </tr>
              <tr>
                <td>Теорія ймовірності та математична статистика</td>
                <td style="vertical-align:middle" class="table-bordered table__text-align">4,5</td>
                <td style="vertical-align:middle"><?php echo $probability_theory ?></td>
              </tr>
              <tr>
                <td>Теорія алгоритмів</td>
                <td class="table-bordered table__text-align">3,5</td>
                <td><?php echo $theory_of_algorithms ?></td>
              </tr>
              <tr>
                <td>Чисельні методи</td>
                <td class="table-bordered table__text-align">3,5</td>
                <td><?php echo $numerical_methods ?></td>
              </tr>
              <tr>
                <td>Математичні методи дослідження операцій</td>
                <td style="vertical-align:middle" class="table-bordered table__text-align">4</td>
                <td style="vertical-align:middle"><?php echo $mathematical_methods ?></td>
              </tr>
              <tr>
                <td>Фізика</td>
                <td class="table-bordered table__text-align">6</td>
                <td><?php echo $physics ?></td>
              </tr>
              <tr>
                <td>Безпека життєдіяльності</td>
                <td class="table-bordered table__text-align">1,5</td>
                <td><?php echo $life_safety ?></td>
              </tr>
              <tr>
                <td>Основи екології</td>
                <td class="table-bordered table__text-align">1,5</td>
                <td><?php echo $ecology ?></td>
              </tr>
              <tr>
                <td>Алгоритмізація та програмування</td>
                <td class="table-bordered table__text-align">6</td>
                <td style="vertical-align:middle"><?php echo $algorithmic_and_programming ?></td>
              </tr>
              <tr>
                <td>Об'єктно-орієнтоване програмування</td>
                <td style="vertical-align:middle" class="table-bordered table__text-align">5</td>
                <td style="vertical-align:middle"><?php echo $object_oriented_programming ?></td>
              </tr>
              <tr>
                <td>Операційні системи</td>
                <td class="table-bordered table__text-align">4</td>
                <td><?php echo $operating_systems ?></td>
              </tr>
              <tr>
                <td>Організація баз даних та знань</td>
                <td class="table-bordered table__text-align">5</td>
                <td><?php echo $company_database ?></td>
              </tr>
              <tr>
                <td>WEB-технології та WEB-дизайн</td>
                <td class="table-bordered table__text-align">5,5</td>
                <td style="vertical-align:middle"><?php echo $web_technologies ?></td>
              </tr>
              <tr>
                <td>Комп'ютерна графіка</td>
                <td class="table-bordered table__text-align">3</td>
                <td><?php echo $computer_graphics?></td>
              </tr>
              <tr>
                <td>Розробка клієнт-серверних застосувань</td>
                <td style="vertical-align:middle" class="table-bordered table__text-align">5,5</td>
                <td style="vertical-align:middle"><?php echo $development_of_client_server_applications ?></td>
              </tr>
              </tr>
              <tr>
                <td>Примітка:1 кредит ECTS-36годин</td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table__2">
          <table class="table table-condensed ">
            <tbody>
              <tr>
                <td class="table__text-align">1</td>
                <td class="table-bordered table__text-align">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;2&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;</td>
                <td class="table__text-align">&#160;&#160;&#160;&#160;3&#160;&#160;&#160;&#160;</td>
              </tr>
              <tr>
                <td>Технологія створення програмних продуктів</td>
                <td style="vertical-align:middle" class="table-bordered table__text-align">4</td>
                <td style="vertical-align:middle"><?php echo $technology_creation_software ?></td>
              </tr>
              <tr>
                <td>Технологія захисту інформації</td>
                <td class="table-bordered table__text-align">4</td>
                <td><?php echo $technology_information_security ?></td>
              </tr>
              <tr>
                <td>Тестування програмних систем і комплексів</td>
                <td style="vertical-align:middle" class="table-bordered table__text-align">3</td>
                <td style="vertical-align:middle"><?php echo $testing_of_software_systems_and_complexes ?></td>
              </tr>
              <tr>
                <td>Адміністрування програмних систем і комплексів</td>
                <td style="vertical-align:middle" class="table-bordered table__text-align">4</td>
                <td style="vertical-align:middle"><?php echo $administration_software_systems ?></td>
              </tr>
              <tr>
                <td>Електротехніка та основи електроніки</td>
                <td style="vertical-align:middle"class="table-bordered table__text-align">3</td>
                <td style="vertical-align:middle"><?php echo $electrical_engineeringa ?></td>
              </tr>
              <tr>
                <td>Комп'ютерна схемотехніка</td>
                <td class="table-bordered table__text-align">2</td>
                <td><?php echo $computer_circuitry ?></td>
              </tr>
              <tr>
                <td>Архітектура комп'ютерів</td>
                <td class="table-bordered table__text-align">3,5</td>
                <td><?php echo $computer_architecture ?></td>
              </tr>
              <tr>
                <td>Комп'ютерні мережі</td>
                <td class="table-bordered table__text-align">5</td>
                <td><?php echo $computer_networks ?></td>
              </tr>
              <tr>
                <td>Основи охорони праці</td>
                <td class="table-bordered table__text-align">2</td>
                <td><?php echo $basics_of_labor_protection ?></td>
              </tr>
              <tr>
                <td>Охорона праці в галузі</td>
                <td class="table-bordered table__text-align">1,5</td>
                <td><?php echo $occupational_health_in ?></td>
              </tr>
              <tr>
                <td>Економіка та основи ІТ-бізнесу</td>
                <td class="table-bordered table__text-align">3</td>
                <td><?php echo $business_and_it_business_basics ?></td>
              </tr>
              <tr>
                <td>Введення в сучасні інформаційні технології</td>
                <td style="vertical-align:middle" class="table-bordered table__text-align">3</td>
                <td style="vertical-align:middle"><?php echo $introduction_to_modern_it_technologies ?></td>
              </tr>
              <tr>
                <td>Проектний практикум</td>
                <td class="table-bordered table__text-align">1,5</td>
                <td><?php echo $design_workshop ?></td>
              </tr>
              <tr>
                <td>Людино-машинний інтерфейс</td>
                <td class="table-bordered table__text-align">1,5</td>
                <td><?php echo $man_machine_interface ?></td>
              </tr>
              <tr>
                <td>Курсова робота з дисципліни "Алгоритмізація та програмування"</td>
                <td style="vertical-align:middle" class="table-bordered table__text-align">1</td>
                <td style="vertical-align:middle"><?php echo $coursework_1 ?></td>
              </tr>
              <tr>
                <td>Курсова робота з дисципліни "Об'єктно-орієнтоване програмування"</td>
                <td style="vertical-align:middle" class="table-bordered table__text-align">1</td>
                <td style="vertical-align:middle"><?php echo $coursework_2 ?></td>
              </tr>
              <tr>
                <td>Курсова робота зі спеціальності</td>
                <td class="table-bordered table__text-align">2</td>
                <td><?php echo $coursework_3 ?></td>
              </tr>
              <tr>
                <td>Навчальна практика ч.1</td>
                <td class="table-bordered table__text-align">10,5</td>
                <td><?php echo $educational_practice_1 ?></td>
              </tr>
              <tr>
                <td>Навчальна практика ч.2</td>
                <td class="table-bordered table__text-align">12</td>
                <td><?php echo $educational_practice_2 ?></td>
              </tr>
              <tr>
                <td>Переддипломна практика</td>
                <td class="table-bordered table__text-align">6</td>
                <td><?php echo $pereddiplomna_practice ?></td>
              </tr>
              <tr>
                <td>Дипломне проектування</td>
                <td class="table-bordered table__text-align">6</td>
                <td><?php echo $design_diploma ?></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td class="text-uppercase">всього</td>
                <td class="table-bordered table__text-align">184,5</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table__text-align"><br></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table__3">
          <table class="table table-condensed ">
            <tbody>
              <tr>
                <td class="table__text-align">&#160;&#160;&#160;1&#160;&#160;&#160;</td>
                <td class="table-bordered table__text-align">&#160;2&#160;<br></td>
                <td class="table__text-align">3</td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="table-bordered table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class=" table__text-align"><br></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class=" table__text-align"><br></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- APPENDED2 END -->
    <!-- BUTTONS BEGIN-->
    <div class="content__buttons">
      <a class="btn btn-primary text-uppercase btn-lg btn__content disabled" href="" role="button">попередній студент</a>
      <a class="btn btn-primary text-uppercase btn-lg btn__content2" href="index2.php" role="button">наступний студент</a>
      <div class="btn__big">
        <a class="btn btn-success btn-block text-uppercase btn-md btn__content3" href="#" role="button" onclick="printBlock();">роздрукувати першу сторінку додатка</a>
        <a class="btn btn-success btn-block text-uppercase btn-md btn__content3" href="#" role="button" onclick="printBlock1();">роздрукувати другу сторінку додатка</a>
      </div>
    </div>
    </div>
    </div>
    <!-- BUTTONS END-->
    <!-- CONTENT END -->

    <!-- FOOTER BEGIN -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer__contacts-float">
            <p class="footer__header text-uppercase">контактна інформація</p>
            <p class="footer__contacts">
              <i class="glyphicon glyphicon-home"> Адреса:вул.Лагерна,30-32,м.Київ</i><br>
              <i class="glyphicon glyphicon-phone"> Тел.: -38 044 455-57-57</i><br>
              <i class="glyphicon glyphicon-envelope"> Email:krok@krok.edu.ua</i><br>
            </p>
          </div>
          <div class="footer__socials">
            <p class="footer__header text-uppercase">ми в соціальних мережах</p>
            <div class="footer__socials-icons">
              <a class="btn btn-social-icon btn-twitter" href="https://twitter.com/KROK_University" target="blank">
              <span class="fa fa-twitter"></span>
              </a>
              <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/KROK.University" target="blank">
              <span class="fa fa-facebook"></span>
              </a>
              <a class="btn btn-social-icon btn-vk" href="http://vk.com/ilovekrok" target="blank">
              <span class="fa fa-vk"></span>
              </a>
              <a class="btn btn-social-icon btn-google" href="https://plus.google.com/109578874581016365492/about" target="blank">
              <span class="fa fa-google"></span>
              </a>
              <a class="btn btn-social-icon btn-flickr" href="https://www.flickr.com/photos/krok-university/albums" target="blank">
              <span class="fa fa-flickr"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FOOTER END -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>