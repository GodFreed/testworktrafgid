<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
   
<div class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-brand">TESTWORK</div>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li id="offer_statistic"><a href="#" onclick="showOffers();">Статистика по товарам</a></li>
				<li id="operator_statistic"><a href="#" onclick="showOperators();">Статистика операторов</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="container" id="main">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                  <div class="table-responsive">
                       <table class="table">
                           <thead>
                                
                           </thead>
                           <tbody>
                                
                           </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jquery -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
<!-- Bootstrap.min.js -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>