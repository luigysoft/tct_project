	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <script
			src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM">
			</script>
			<script>
			var myCenter=new google.maps.LatLng(18.930582, -99.226669);
			var marker;
			function initialize()
			{
			var mapProp = {
			  center:myCenter,
			  zoom:15,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			marker=new google.maps.Marker({
			  position:myCenter,
			 // icon:'themes/assets/images/nepali-momo.png',
			  animation:google.maps.Animation.BOUNCE
			  });

			marker.setMap(map);

			// Info open
			var infowindow = new google.maps.InfoWindow({
			  content:"Hello World!"
			  });

			google.maps.event.addListener(marker, 'click', function() {
			  infowindow.open(map,marker);
			  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
			<div id="googleMap" style="height:450px;"></div>
			  
			</div>
		  </div>
		</div><!-- /.carousel -->
	</div>
	
	
	
	<div class="mainTitle">
	<div class="container">
	<h1>Todo Cerca de Ti.</h1>
	<p>
	El &uacute;nico directorio de comercios en Cuernavaca que te permite tener una p&aacute;gina de presentaci&oacute;n para tu negocio. 
	</p>
	</div>
	</div>
	
	
	
	<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
    <h2 class="itemsTitle">Comercios Participantes</h2>
	<div id="myCarousel1" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
        <div class="col-lg-4">
		  <img src="<?php echo img_path('logo-bbva.jpg')?>" alt="Generic placeholder image">
          <h4>Bancomer</h4>
          <p><a class="btn btn-default" href="#" role="button">Detalle &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
		  <img src="<?php echo img_path('wix_logo.png')?>" alt="Generic placeholder image">
          <h4>Wix</h4>
          <p><a class="btn btn-default" href="#" role="button">Detalle &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
		  <img src="<?php echo img_path('marti-logo-14528162413.jpg')?>" alt="Generic placeholder image">
          <h4>Marti</h4>
          <p><a class="btn btn-default" href="#" role="button">Detalle &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
         <div class="row">
        <div class="col-lg-4">
          <img src="<?php echo img_path('logo-bbva.jpg')?>" alt="Generic placeholder image">
          <h4>Bancomer</h4>
          <p><a class="btn btn-default" href="#" role="button">Detalle &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="<?php echo img_path('wix_logo.png')?>" alt="Generic placeholder image">
          <h4>Wix</h4>
          <p><a class="btn btn-default" href="#" role="button">Detalle &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="<?php echo img_path('marti-logo-14528162413.jpg')?>" alt="Generic placeholder image">
          <h4>Marti</h4>
          <p><a class="btn btn-default" href="#" role="button">Detalle &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
          <div class="row">
        <div class="col-lg-4">
          <img src="<?php echo img_path('logo-bbva.jpg')?>" alt="Generic placeholder image">
          <h4>Bancomer</h4>
          <p><a class="btn btn-default" href="#" role="button">Detalle &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="<?php echo img_path('wix_logo.png')?>" alt="Generic placeholder image">
          <h4>Wix</h4>
          <p><a class="btn btn-default" href="#" role="button">Detalle &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="<?php echo img_path('marti-logo-14528162413.jpg')?>" alt="Generic placeholder image">
          <h4>Marti</h4>
          <p><a class="btn btn-default" href="#" role="button">Detalle &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	</div>
	
	<div class="highlightSection">
	<div class="container">
	<h3>Consulta por categorias</h3>
	<div class="row">
		<div class="col-lg-4">
		<div class="media">
			<a href="menu/"><img src="<?php echo img_path('www.png')?>" alt="Dise&ntilde;o" /> </a>
			<h3 class="media-heading">DISE&Ntilde;O</h3>
			<p>Lista de comercios dedicados al dise&ntilde;o y la publicidad.</p>
		</div>
		</div>
		<div class="col-lg-4">
		<div class="media"><a href="menu/"><img src="<?php echo img_path('money.png')?>" alt="Finanzas" /> </a>						
		<h3 class="media-heading">FINANZAS</h3>
		<p>Lista de comercios dedicados a sistemas y servicios financieros. </p>
		
		</div>
		</div>
		<div class="col-lg-4">
		<div class="media">
		<a href="menu/"><img src="<?php echo img_path('sport.png')?>" alt="Deportes" /> </a>
		<h3 class="media-heading">DEPORTES</h3>
		<p>Lista de comercios dedicados a ropa y accesorios deportivos. </p>
		</div>
		</div>
	</div>
	</div>
	</div>
	      

	
	<div class="introSection">
		<div class="container">
		<div class="row">
		<div class="col-lg-12">
		<h3>B&uacute;squeda alfab&eacute;tica</h3>
		<p>
		&nbsp;A&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;B&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;E&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;F&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;G&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;H&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;I&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;J&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;K&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;L&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;N&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;P&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Q&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;R&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;U&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;V&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;W&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Y&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Z&nbsp;
		</p>
		</div>
		</div>
		</div>
	</div>
	
	
	

