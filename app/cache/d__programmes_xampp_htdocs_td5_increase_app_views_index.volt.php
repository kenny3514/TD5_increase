<!DOCTYPE html>
<html>
	<head>
		<title>Increase</title>
		<?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
		<?php echo $this->tag->stylesheetLink('css/styles.css'); ?>
		<?php echo $this->tag->javascriptInclude('js/jquery.min.js'); ?>
		<?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>
	</head>
	<meta charset="UTF-8">
	<body>
	<div class="second-header"></div>
	<div class="bs-docs-header">
		<div class="container">
			<div class="header">
				<h1>Increase</h1>
				<p>Manage the progress of your projects, improve communication with customers.</p>
			</div>
		</div>
	</div>
	<div class="container">
		<ol class="breadcrumb">
				<li><a href="/TD5_increase/index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a></li>
				<li><a href="/TD5_increase/index/usecases">&nbsp;useCases</a></li>
				<li><a href="/TD5_increase/index/autre">&nbsp;autre</a></li>
				<li><a href="/TD5_increase/auth/">&nbsp;Auth</a></li>
		</ol>
		<div class="content">
			<?php echo $this->getContent(); ?>
		</div>
	</div>
	<div id="footer">
		<div class="container">
			<div class="col-md-4">
			<p>Mentions légales</p>
			<p><span>Created with Phalcon</span></p>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<input id="ig-5" name="ig-5" class="form-control" role="input" value="" type="text" aria-describedby="right-ig-5" placeholder="Rechercher...">
					<div id="right-ig-5" class="input-group-btn"><button id="ig-4-radio" class="btn btn-default" role="button">Go</button></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>