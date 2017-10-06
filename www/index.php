<?php

$services = [
  '/kasper/' => [
    'file' => '/kasper.jpg',
    'title' => '#hvadsigerkasper',
    'alt' => 'Hvad siger Kasper?',
    'width' => 487,
    'height' => 700,
    'boxstyle' => '
        top: 495px;
        left: 20px;
        width: 457px;
        height: 195px;',
  ],
  '/gielfeldt/' => [
    'file' => '/gille.jpg',
    'title' => '#hvadsigergielfeldt',
    'alt' => 'Hvad siger Gielfeldt?',
    'width' => 600,
    'height' => 800,
    'boxstyle' => '
        top: 590px;
        left: 20px;
        width: 570px;
        height: 195px;',
  ],
  '/morten/' => [
    'file' => '/morten.jpg',
    'title' => '#hvadsigermorten',
    'alt' => 'Hvad siger Morten?',
    'width' => 600,
    'height' => 800,
    'boxstyle' => '
        top: 590px;
        left: 20px;
        width: 570px;
        height: 195px;',
  ],
  '/magnus/' => [
    'file' => '/magnus.jpg',
    'title' => '#hvadsigermagnus',
    'alt' => 'Vad säger Magnus?',
    'width' => 487,
    'height' => 700,
    'boxstyle' => '
        top: 495px;
        left: 20px;
        width: 457px;
        height: 195px;',
  ],

];

$conf = reset($services);

$x = explode('.', $_SERVER['HTTP_HOST']);
foreach ($services as $key => $value) {
  if (preg_match($key, $x[0])) {
    $conf = $value;
    break;
  }
}
if (isset($services[$x[0]])) {
  $conf = $services[$x[0]];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset=UTF-8>
    <title><?php print $conf['title']; ?></title>
    <link href="//fonts.googleapis.com/css?family=Short+Stack" rel=stylesheet>
    <style>
      body {
        margin: 10px;
      }
      #a {
        font-size: 35px;
        text-align: center;
        font-family: 'Short Stack', cursive;
        width: 100%;
        height: 100%;
        opacity: 0;
        -webkit-transition: opacity 1s linear;
        -moz-transition: opacity 1s linear;
        -o-transition: opacity 1s linear;
        transition: opacity 1s linear;
      }
      #b {
        position: fixed;
        top: 10px;
        right: 10px;
        float: right;
      }
#c {
background-color: #fff;
border: 2px solid black;
        position: absolute;
<?php print $conf['boxstyle']; ?>
        overflow: hidden;
}
    </style>
    <script async src=/b.js></script>
  </head>
  <body spellcheck=false onload=bodyLoad()>
    <img src=<?php print $conf['file']; ?> alt="<?php print $conf['alt']; ?>" width=<?php print $conf['width']; ?> height=<?php print $conf['height']; ?>>
    <div id=c>
      <div id=a contenteditable onblur=fixUrl() onkeyup=fixUrl()><?php print $conf['title']; ?></div>
    </div>
    <div id=b>
      <a href=https://twitter.com/share class=twitter-share-button data-size=large>Tweet</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
