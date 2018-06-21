<!DOCTYPE html><html class="full" lang="en">  <head>    <meta charset="utf-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1">    <title>Template</title>    <link href="css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,400italic,900,700' rel='stylesheet' type='text/css'>    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->    <!--[if lt IE 9]>      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>    <![endif]-->   </head>    <body id="Form">
  	
  	<?php include($_SERVER['DOCUMENT_ROOT']. '/html/nav.html'); ?>
  	
  	<div id="MainForm">
  		<div class="container">
  			<div class="row">
	  			<div class="col-md-12">
		  			<h2>Разместить запрос на перевозку</h2>
	  			</div>
  			</div><!--row-->
  			<div class="row">
  				<!--<div class="col-sm-12">
	  				<!--<div class="MainPrice">
			  				Стоимость доставки: <span>&asymp; 18 950</span> руб. 
			  				
		  				</div><!--MainPrice-->
	  				<!--<div class="ShowUlPrice">
	  				<div id="showHideContent"><span>Подробнее о цене</span></div>

	  				<div id="HideContent">
	  					<div class="col-sm-2"></div>
	  					<div class="col-sm-8">
	  					<table class="table">
	  						<tr>
		  						<td>Маршрут</td>
		  						<td>Москва Санкт <span class="glyphicon glyphicon-arrow-right"></span> Петербург</td>
		  						<td>15600 руб</td>
	  						</tr>
	  						<tr>
		  						<td>Километраж</td>
		  						<td>950 км</td>
		  						<td>700 руб</td>
	  						</tr>
	  						<tr>
		  						<td>Машина</td>
		  						<td>1299 руб</td>
		  						<td>Формирование цены</td>
	  						</tr>
	  					</table>
	  					</div>
	  					<div class="col-sm-2"></div>
	  				</div>
	  				</div>
  				</div>-->
  				
  				<div class="col-sm-2"></div>
  				
	  			<div id="Bid" class="col-sm-8">
	  				<div class="DeliveryType clearfix">
  						<ul>
  							<li class="Active"><a href="#">Сборный груз</a></li>
  							<li><a href="#">Генеральный груз</a></li>
  						</ul>
  					</div><!--DeliveryType-->
		  			<form role="form">
			  		<div class="Route Box Correct">
		  				<h3><span>1</span>Маршрут перевозки</h3>
		  				<div class="row form-group">

			  				<div class="col-sm-12">
			  					<label for="InputCity">Откуда</label>
				  				<input type="text" class="form-control" id="InputCity" placeholder="Город (откуда)">
				  			</div>
				  			
				  			
				  			
		  				</div><!--row form-group-->
		  				<div class="row form-group">
		  					<div class="col-sm-12">
			  					<label for="InputCityWhere">Куда</label>
			  					<input type="text" class="form-control" id="InputCityWhere" placeholder="Город (куда)">    
			  				</div>
		  				</div>
		  				
			  		</div><!--Route-->	
		  				
		  			<div class="Box Correct">	
		  				<h3><span>2</span>Какая нужна машина</h3>
		  				<div id="TypeCarChoose" class="form-group">
			  				<div class="OpacityWindow" data-toggle="modal" data-target="#ChooseCarWindow">
				  			</div><!--OpacityWindow-->
				  			<select  class="selectpicker">
					  			<option>Выберите машину</option>	
					  		</select>
					  	</div><!--TypeCarChoose-->
					  	
					  	<div id="CoosenCar" class="row form-group">
						  	
					  	<div class="col-sm-12">
					  			<span class="Img"><img class="img-responsive" src="img/c1.png" alt="s1" /></span>

						  		<h3>Газель тент</h3>
							  		<p class="Weight">1,5 тонны, 9 м&#179;</p>
							  		<p class="Price">450 <span>руб. / час</span></p>

					  		</div>
					  	</div>
					  	
					  	
		  			</div><!--Box-->
		  			
		  			
		  			
		  			<div class="Box Correct">
		  			<h3><span>3</span>Что и когда нужно перевезти:</h3>
		  				<div class="form-group textarea">
			  			  <label for="InputDescription">Описание</label>
			  			  <textarea class="form-control" rows="3">Кратко опишите груз ( температурный режим требования )
Пример:
Хорошо бы написать образец заполнения
				  			
			  			  </textarea>
			  			</div><!--textarea-->
			  			
			  			<div class="form-group">
			  			  <label for="InputWhen">Когда</label>
			  			  
			  			  <input  type="text" class="form-control" placeholder="Когда планируется перевозка?"  id="datepicker">
			  			  		
			  			  </div> <!--form-group-->
		  			</div><!--Box-->
			  			
		  			<div class="Box Correct">
		  				<h3><span>4</span>Пожалуйста, представтесь</h3>
		  				
		  				<div class="row form-group">

			  				<div class="col-sm-6">
			  					<label for="InputName">Имя</label>
				  				<input type="text" class="form-control" id="InputName" placeholder="Введите Имя">
				  			</div>
				  			
				  			<div class="col-sm-6 ">
			  					<label for="InputPhone">Телефон</label>
			  				     <input type="text" class="form-control" id="InputPhone" placeholder="Введите телефон">
			  				    
			  				</div>
				  			
		  				</div><!--row form-group-->
		  				
			  			<div class="form-group has-success ">
			  			  <label for="InputEmail">Email</label>
			  			  <label class="control-label" for="inputSuccess">( E-mail введен успешно )</label>
			  			  <input type="email" class="form-control" id="InputEmail" placeholder="Введите email">
			  			  
			  			</div>
			  			
		  			</div><!--Box-->
			  			<button type="submit" class="Submit btn btn-default">Отправить</button>
			  		</form>

	  			</div>
	  			<div class="col-sm-2"></div>
  			</div><!--row-->
  		</div><!--container-->
  	</div><!--MainForm-->
  
  <div class="FormConsult">	
  	<div class="container Consult">
	<div class="row">
		<div class="col-sm-12">
			<h2>Возникли вопросы? </h2>
		</div>
	</div><!--row-->	
		
		<div class="row WhatBetter">
			<div class="col-sm-12">
			    <p>Проконсультируйтесь с нашими специалистами по телефону и мы подскажем какое решение лучше подходит для вас</p>
			    <p class="Phone">+7 ( <span>495</span> ) 269-29-29</p>
			    <img class="img-responsive visible-lg" src="../img/girl.png" alt="girl" width="199" height="248" />
			</div>
		</div>	<!--FormConsult-->
					
		</div><!--WhatBetter-->
		
	
</div><!--Consult-->
  	
  	
  	
  	
 	
  	<?php include($_SERVER['DOCUMENT_ROOT']. '/html/footer.html'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/html/mainwindow.html'); ?>
	 <?php include($_SERVER['DOCUMENT_ROOT']. '/html/choosecarwindow.html'); ?>	