<!DOCTYPE html>
<html>

  <head>

  <!--Get styles-->
  <link href="/css/bootstrap.min.css" rel="stylesheet"/>

  <link href="/css/style.css" rel="stylesheet"/>
  
  <!--There's body styling in startup so it needs its own sheet-->
  <?php if($title == "Startup"): ?>
  <link href="/css/start.css" rel="stylesheet"/>
  <!--Get user's preferred theme-->
  <?php elseif($_SESSION["theme"] == "woodland"):?>
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Rajdhani:300" rel="stylesheet">
  <link href="/css/woodland.css" rel="stylesheet"/>
  <?php elseif($_SESSION["theme"] == "ocean"):?>
  <link href="https://fonts.googleapis.com/css?family=News+Cycle|Dancing+Script:400,700" rel="stylesheet"/>
  <link href="/css/sunset.css" rel="stylesheet"/>
  <?php else:?>
  <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:400,400i|Source+Code+Pro:700,900" rel="stylesheet"/>
  <link href="/css/rustic.css" rel="stylesheet"/>
  <?php endif?>

  <!--Set title-->  
  <?php if (isset($title)): ?>
  <title><?= htmlspecialchars($title)?></title>
  <?php else: ?>
  <title>PhP Practice Site</title>
  <?php endif ?>

  <!--Get scripts-->
  <script src="/js/jquery-3.2.1.min.js"></script>

  <script src="/js/bootstrap.min.js"></script>

  </head>

  <body>

  <div class="container">

    <div id="header">
      <!--Header content won't be showing on the startup page-->  
      <?php if(!empty($_SESSION["name"])): ?>
      <div class="row">
            <div class="col">
                <div class="jumbotron">Hello, <?= htmlspecialchars($_SESSION["name"])?>!</div>
            </div>
        </div>
    
        <div class="row">
            <div class="col">
                <a href="index.php">
                    <!--span class="glyphicon glyphicon-home"--> Home
                </a>
                <a href="themes.php">
                    Themes
                </a>
                <a href="quit.php">
                    Quit
                </a>
                <hr>
            </div>
        </div>
        <?php endif ?>
    </div>
  <div id="view">
