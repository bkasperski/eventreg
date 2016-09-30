<? function head() { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Panel Administracyjny</title>
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
	<link href="files/lib/assets/css/custom.css" rel="stylesheet">
    <link href="files/lib/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="files/lib/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="files/lib/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="files/lib/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="files/lib/dist/css/sb-admin-2.css" rel="stylesheet">
	
    <link href="files/lib/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="files/lib/bower_components/datetimepicker/css/bootstrap-datetimepicker.min.css" />
	<link rel="stylesheet" href="files/lib/bower_components/bootstrap-toggle/css/bootstrap-toggle.min.css" />
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<!--<script  src="https://code.jquery.com/jquery-1.12.3.js" />
	<script  src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" /> -->
	
	<script>tinymce.init({
		  mode : "exact",
		  elements :"content_text",
		  height: 500,
		  plugins: [
			'advlist autolink lists link image media  imagetools charmap print preview anchor',
			'searchreplace visualblocks code',
			'insertdatetime media table contextmenu paste code'
		  ],
		  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media',
		  image_caption: true,
			media_live_embeds: true,
			imagetools_cors_hosts: ['tinymce.com', 'codepen.io'],
		  content_css: [
			'//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
			'//www.tinymce.com/css/codepen.min.css'
		  ]
		});
	</script>
	<script>tinymce.init({
		  mode : "exact",
		  elements :"description_text",
		  height: 150,
		  plugins: [
			'advlist autolink lists link image media  imagetools charmap print preview anchor',
			'searchreplace visualblocks code',
			'insertdatetime media table contextmenu paste code'
		  ],
		  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media',
		  image_caption: true,
			media_live_embeds: true,
			imagetools_cors_hosts: ['tinymce.com', 'codepen.io'],
		  content_css: [
			'//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
			'//www.tinymce.com/css/codepen.min.css'
		  ]
		});
	</script>

	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	

</head> 
<body>
<div id="wrapper">
<? } ?>