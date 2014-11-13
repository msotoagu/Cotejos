<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
            
	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />-->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />-->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />-->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />-->
        <style>
            body{
                padding-top: 70px;
            }
        </style>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
   
<body>
    <header class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-contents">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="navbar-brand">Cotejos</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-contents">
                <ul class="nav navbar-nav" role="navigation">
                    <li><a href="#">Torneos</a></li>
                    <li><a href="#">Partidos</a></li>
                    <li><a href="#">Equipos</a></li>
                    <li><a href="#">Jugadores</a></li>
                    <li><a href="#">Canchas</a></li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Entrar</a></li>
                    <li><a href="#">Salir</a></li>
                    <li><button class="bnt btn-warning navbar-btn btn-sm" type="button">Tour</button></li>
                </ul>
            </div>
        </div>
    </header>
    
    <div class="container">
        <section>
            <div class="well well-lg text-center">
                <h1>Conoce nuevas personas para jugar tu deporte favorito</h1>
                            <ul class="list-unstyled">
                <li>
                    <h3><a href="#">Partidos</a></h3>
                </li>
                <li>
                    <h3><a href="#">Jugadores</a></h3>
                </li>
                <li>
                    <h3><a href="#">Torneos</a></h3>
                </li>
                <li>
                    <h3><a href="#">Y Mas..</a></h3>
                </li>
            </ul>
                <a href="#" class="btn btn-warning btn-lg">Entrar</a> o <a href="">Toma el tour</a>
            </div>

            
        </section>
    </div>
    
    
    
<!-- Latest compiled and minified JavaScript -->
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
