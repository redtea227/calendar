<?php
$strArr = [
  "The more I like me, the less I want to pretend to be other people.",
  "Friendship is like wine, it gets better as it grows older",
  "The joy of living comes from what we put into living, not from what we seek to get from it.",
  "What you can do today. nothing is impossible to a willing heart.",
  "The hardest lesson I had to learn was to believe in myself.",
  "When you’re prepared, spiritually, mentally, and physically, you have nothing to fear.",
  "Love What You Do, Do What You Love",
  "The higher we rise, the smaller we appear to those who do not know how to fly.",
  "I am a slow walker,but I never walk backwards.",
  "No one is perfect! So why pretend to be something you are not?",
  "Men come closest to their true selves in the sober moments of life,under the shadows of sorrowloss.",
  "The true nobility is in being superior to your previous self."
];
$strChtArr = [
  "我越喜歡我自己，我越不想假裝成爲別人。",
  "友誼像醇酒，越久越濃。",
  "生活的樂趣在於投入，而非所求。",
  "心之所願，心想事成。",
  "我必須學會的最艱難的一課就是相信自己。",
  "當精神上、心理上和物質上都做好準備的時候，一切就無所畏懼了。",
  "愛你所做，做你所愛。",
  "我們上升得越高，我們在那些不懂飛翔的人眼裡就顯得越小。",
  "我雖然走得慢，但我從來不會後退。",
  "人無完人！那麼，爲什麼要僞裝成我們實際上本不是的呢？",
  "在人生清醒的時刻，在悲傷與失落的陰影之下，人們與真實的自我最爲接近。",
  "真正的高貴是優於過去的自己。"
];

// Y - A full numeric representation of a year, 4 digits
// w- Numeric representation of the day of the week
// m - 0 for sunday,6 for sat
// t - Number of days in the given month
// mktime(hour, minute, second, month, day, year, is_dst)
// $dayStr = (($-1)*7+$j) - $firstDayWeek

//now
if (empty($_GET['year']) && empty($_GET['month'])) {
  $now = time(); //現在時間timestamp
  $month = date('m', $now);
  $year = date('Y', $now);
} else {
  $month = $_GET['month'];
  $year = $_GET['year'];
}

// //get year month
// $year = $_GET['year'];

// $month = $_GET['month'];


// $year = 2021;
// $month = 05;
// 設定本月第一天
$firstDayMonth = mktime(0, 0, 0, $month, 1, $year);
// 抓出本月有幾天
$days = date('t', $firstDayMonth);
// 抓出本月第一天是星期幾
$firstDayWeek = date('w', $firstDayMonth);
// var_dump($firstDayWeek);

if ($month == 1) {
  $preYear = $year - 1;
  $preMonth = 12;
} else {
  $preYear = $year;
  $preMonth = $month - 1;
}

if ($month == 12) {
  $nextYear = $year + 1;
  $nextMonth = 1;
} else {
  $nextYear = $year;
  $nextMonth = $month + 1;
}
$changeMonth = str_pad($month, 2, "0", STR_PAD_LEFT);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <style>
    /* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    center,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
      margin: 0;
      padding: 0;
      border: 0;
      font-size: 100%;
      font: inherit;
      vertical-align: baseline;
    }

    /* HTML5 display-role reset for older browsers */
    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
      display: block;
    }

    body {
      line-height: 1;
    }

    ol,
    ul {
      list-style: none;
    }

    blockquote,
    q {
      quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
      content: '';
      content: none;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    body {
      font-family: 'Krona One', sans-serif;
      overflow: hidden;
      background: url("image/hiking.jpg") no-repeat;
      background-size: cover;
      background-position: center;
      position: relative;
      width: 100%;
      height: 100vh;
    }

    div.container {
      margin: 20px;
      width: 600px;
      height: 550px;
      background: rgba(255, 255, 255, 0.1);
      box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.5);
      border-right: 1px solid rgba(255, 255, 255, 0.2);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(5px);
      border-radius: 10px;
    }

    nav {
      padding: 10px;
    }

    .center {
      margin: auto;
      text-align: center;
      color: #008573;
      /* border-collapse: collapse; */
      /* border-radius:30px; */
      /* border-spacing: separate; */
    }

    table {
      /* background:lightgrey; */
      /* border-radius:10px; */
      opacity: 1;
      color: lightblue;
    }

    td {
      height: 45px;
      width: 100px;
      text-align: center;
      font-size: 1.5rem;
      padding-top: 5px;
    }

    td:hover {
      /* background: lightgreen; */
      /* transform: scale(1.2); */
      font-size: 2rem;
      cursor: pointer;
      /* border-radius:50%; */
    }

    #box1 {
      /* border: 2px solid grey; */
      /* border-radius: 25px; */
      position: relative;
      top: 20px;
      color: #c3c3c3;
      font-size: 1.2em;
    }

    #box1:hover {
      /* background: lightblue; */
      transform: scale(1.05);
      border-radius: 20px;
    }

    #box1::after {
      font-size: 1.5rem;
      content: attr(data-cht);
      position: absolute;
      /* background: red; */
      top: 100%;
      left: 50%;
      transform: translate(-50%, 0);
      width: 120%;
      height: 70px;
      text-align: center;
      display: none;
      margin-top: 10px;
    }

    #box1:hover::after {
      display: block;
    }


    a {
      color: #4c4747;
      text-decoration: none;
      font-size: 1.5rem;
    }

    a:hover {
      color: grey;
      text-decoration: none;
      cursor: pointer;
    }

    .holiday {
      color: #f78746;
    }


    @media (max-width:768px) {
      div.container {
        margin: 20px auto;
        max-width: 100%;
      }
    }
  </style>
</head>

<body>
  <div class="container">
        <!-- <header class="center">
          <h3>Monthly Calendar</h3>
          <h4 style="margin-bottom:18px"><?= $year . "&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;" . $changeMonth ?></h4>
        </header> -->
        <nav class="center">
          <a href="./index.php?year=<?= $preYear; ?>&month=<?= $preMonth; ?>">
            <i class="far fa-hand-point-left fa-2x"></i>
          </a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="./index.php">
            <?= $year . "&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;" . $changeMonth ?>
          </a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="./index.php?year=<?= $nextYear; ?>&month=<?= $nextMonth; ?>">
            <i class="far fa-hand-point-right fa-2x"></i>
          </a>
        </nav>
        <br>
        <table class="center" width="80%">
          <tr class="margin-1">
            <th class="holiday">Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th class="holiday">Sat</th>
          </tr>


          <?php for ($i = 1; $i <= 6; $i++) : ?>

            <tr>
              <?php
              for ($j = 1; $j <= 7; $j++) {
                $dayStr = (($i - 1) * 7 + $j) - $firstDayWeek;
                if ($i == 1) { //判斷1st Row 處理第一天
                  if ($dayStr > 0) {
                    //日期為1號 以後 會顯示
                    echo "<td>$dayStr</td>";
                  } else {
                    //dayStr 0以下 該格無資料
                    echo "<td></td>";
                  }
                } else {
                  // row 2 後的處理
                  if ($dayStr <= $days) {
                    echo "<td>$dayStr</td>";
                  } else {
                    if ($j == 1) {
                      break;
                    }
                    echo "<td></td>";
                  }
                }
              }
              ?>
            </tr>
          <?php endfor; ?>
          <tr>
            <td colspan="7" id="box1" data-cht=<?= $strChtArr[$month - 1]; ?>><?= $strArr[$month - 1]; ?></td>
            <!-- <td colspan="7" id="box1">I didn't fail the test, I just found 100 ways to do it wrong.</td> -->
          </tr>
        </table>
  </div>
</body>

</html>