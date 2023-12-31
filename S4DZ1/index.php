<!-- 1. На основе верстки из html-документа https://disk.yandex.ru/d/H9_wDMSChowFVg (можно отсюда скопировать: https://pastebin.com/H4rsjsNa), необходимо создать php-файл с названием index.php и вставить в этот сайт все что есть в html-документе.

Необходимо создать массив в самом верху php-файла, в котором будет описываться опыт работы (правая верхняя часть сайта). Необходимо вставить из массива данные на странице, а именно, название работ, дату и описание для каждой работы.

Если хотите усложнить себе задание, то можете попробовать вывести с помощью цикла эти данные.

Примечание: файлы .php не стоит пробовать открывать как обычные html-файлы в браузере, браузеры не умеют выполнять php-код, для этого нужен интерпретатор (специальная программа, которая разбирает и выполняет код), если вы его не устанавливали себе на компьютер, то можете воспользоваться сайтом https://www.w3schools.com/php/phptryit.asp?filename=tryphp_compiler

Примечание №2: в песочнице php, на сайте https://www.w3schools.com/php/phptryit.asp?filename=tryphp_compiler, есть ограничение по количеству символов/строк, в случае если превысить лимит, то будет сгенерирован, в результате, пустой лист.

Примечание №3: задание сложное, поэтому есть его решение: https://youtu.be/8EByZ4DgNs0, решение смотреть советую только если столкнулись с проблемами, которые непонятно как решать. Также, не забывайте, что можно задать вопрос в телеграм. -->

<?php
$info = [
    [
        'post' => 'ООО "Проектмонтажюг" Инженер технического обслуживания систем противопожарной защиты',
        'date' => 'Октябрь 2013 - Февраль 2016',
        'description' => 'Я занимался обслуживание систем противопожарных систем в жилых многоквартирных домах',
    ],
    [
        'post' => 'ООО Территория комфорта" Инженер по пожарной безопасности',
        'date' => 'Март 2016 - Июль 2018',
        'description' => 'Курировал направление пожарной безопасности в управляющей компании',
    ],
    [
        'post' => 'АО "Тандер" Инженер по пожарной безопасности',
        'date' => 'Июль 2018 - по настоящее время',
        'description' => 'Курирую направление пожарной безопасности в секторе не торговых форматов (Распределительные центры)',
    ],
];

?>
<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2>Имя</h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Профессия</p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Город, страна</p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>E-mail</p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Телефон</p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <p>Adobe Photoshop</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
            </div>
            <p>Photography</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                <div class="w3-center w3-text-white">80%</div>
              </div>
            </div>
            <p>Illustrator</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
            </div>
            <p>Media</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
            </div>
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Испанский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>Немецкий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
          <?php for ($i=0; $i < count($info); $i++):?>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo $info[$i]['post']?></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $info[$i]['date']?><span
                class="w3-tag w3-teal w3-round"></span></h6>
            <p><?php echo $info[$i]['description']?></p>
            <hr>
          <?php endfor;?>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2025 </h6>
            <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit
              sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2025</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
          </div>
        </div>
 
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>КубГУ (СПО)</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2004 - 2007</h6>
            <p>ПО ВТ И АС</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>СОШ №12</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>1994 - 2004</h6>
            <p>Начало начал XD</p><br>
          </div>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Вдохновление получил от просмотра сериала "Кремниевая Долина" - Не силиконовая бл..., а Кремниевая</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>