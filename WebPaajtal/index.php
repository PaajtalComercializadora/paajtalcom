<!DOCTYPE html>
<html>
<head>
	<title>Pa'ajtal Comercializadora</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/Logo-Original.png">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/paajtal.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body id="page-top" class="index">
<div class="example3">
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#page-top"><img src="img/Logo-Original.png" alt="Dispute Bills">
        </a>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Inicio</a></li>
          <li><a href="#">Servicios y Soluciones</a></li>
          <li><a href="#">Nosotros</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>


</body>
<script type="text/javascript">
		$('a').click(function(e){
	e.preventDefault();
	$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top-55}, 1000);


});
	</script>
	<script type="text/javascript">
		$("#frmContacto").submit( function(ev) {
			if($("#nombre").val() == ""){
        alert('El campo nombre no pude estar vacio');
        $("#nombre").focus();

        return false;
    }
if($("#correo").val() == ""){
        alert('El campo correo no pude estar vacio');
        $("#correo").focus();

        return false;
    }
if($("#tel").val() == ""){
        alert('El campo Telefonio no pude estar vacio');
        $("#tel").focus();

        return false;
    }
if($("#comentario").val() == ""){
        alert('El comentario no pude estar vacio');
        $("#comentario").focus();

        return false;
    }
			var form = "#frmContacto";
			var postData = $(form).serializeArray();
			$('#txtMsg').html('<img src="img/loading.gif">');
			$("#btnSend").attr("disabled",true);
			$.ajax({
				url: "enviar/correo.php",
				type: "POST",
				data: postData,
				success: function(data, status) {
					$('#txtMsg').html(data);
					$("#btnSend").attr("disabled",false);
					$('#nombre').val("");
					$('#correo').val("");
					$('#tel').val("");
					$('#comentario').val("");
				},
				error: function(xhr, desc, err) {
					$('#txtMsg').html(xhr.progress().responseText);
					$("#btnSend").attr("disabled",false);
				},
			});
			ev.preventDefault();
		});
	</script>
</html>