<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Master page</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 0px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}
	
	#wrap{
		margin: 10px;
		padding: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 5px #D0D0D0;
	}
    p.footer{
        text-align: center;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
    }
	</style>
</head>
<body>
<div id="wrap">
    <div id="header">

    </div>
    <div id="container">
        <?php echo $view_content; ?>
    </div>
    <footer>
        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
    </footer>
</div>


</body>
</html>