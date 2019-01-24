<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Alta de un vehiculo</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
		<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<link rel = "stylesheet" href = "https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link href="view/assets/css/mdb.min.css" rel="stylesheet">
		<link href="view/assets/css/datatables.min.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

		<script type="text/javascript" src="lang/translate.js"></script>

		<script type="text/javascript" src="module/like/model/filter_like.js" ></script>
		<script src="https://jqwidgets.com/public/jqwidgets/jqx-all.js"></script>
        <link rel="stylesheet" href="https://jqwidgets.com/public/jqwidgets/styles/jqx.base.css">
        <link rel="stylesheet" href="view/assets/js/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
        <script type="text/javascript" src="view/assets/js/jqwidgets/scripts/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="view/assets/js/jqwidgets/jqwidgets/jqxcore.js"></script>
        <script type="text/javascript" src="view/assets/js/jqwidgets/jqwidgets/jqxdata.js"></script>
        <script type="text/javascript" src="view/assets/js/jqwidgets/jqwidgets/jqxbuttons.js"></script>
        <script type="text/javascript" src="view/assets/js/jqwidgets/jqwidgets/jqxscrollbar.js"></script>
        <script type="text/javascript" src="view/assets/js/jqwidgets/jqwidgets/jqxlistbox.js"></script>
        <script type="text/javascript" src="view/assets/js/jqwidgets/jqwidgets/jqxdropdownlist.js"></script>
        <script type="text/javascript" src="view/assets/js/jqwidgets/jqwidgets/jqxdatatable.js"></script>

      	<script type="text/javascript">
          	$(function() {
          		$('#fecha').datepicker({
          			dateFormat: 'dd/mm/yy',
          			changeMonth: true,
          			changeYear: true,
          			yearRange: '1900:2016',
          			onSelect: function(selectedDate) {
          			}
          		});
          	});
  	    </script>
	      <link href="view/css/style.css" rel="stylesheet" type="text/css" />
	      <script src="module/vehicle/model/validate_cars.js"></script>
    </head>
    <body>