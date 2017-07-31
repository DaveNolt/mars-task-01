<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<head lang="en">
</head>
<body>
	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
						 aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          	<span class="icon-bar"></span>
	          </button>
					<a class="navbar-brand center-block" href="../icrowdme.php"><img class="img-responsive" src="../images/logo.jpg" alt=""></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="../icrowdme.php">HOME</a></li>
							<li><a href="#about">HOW IT WORKS</a></li>
							<li><a href="#contact">DISCOVER A PROJECT</a></li>
							<li><a href="#contact">BLOG</a></li>
							<li><a href="#contact">FIND OUT MORE</a></li>
							<li><a href="admin">ADMIN</a></li>
						</ul>
						<button type="button" class="btn navbar-btn btn-login" data-toggle="modal" data-target="#myModal">LOGIN</button>
					</div>
					
				</div>
				
			</nav>
		</div>
	</div>

  <div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <td>ID</td>
        <td>Block name</td>
        <td>Text</td>
        <td colspan="2"><a href="index.php?action=add">New</td>
      </tr>
    </thead>
    <tbody>
      <? foreach ($results as $res): ?>
      <tr>
        <td><?=$res['id']?></td>
        <td><?=$res['content_block']?></td>
        <td><?=$res['content_text']?></td>
        <td><a href="index.php?action=edit&id=<?=$res['id']?>">Edit</a></td>
        <td><a href="index.php?action=delete&id=<?=$res['id']?>">Delete</a></td>
      </tr>
    </tbody>
    <? endforeach ?>
  </table>
  </div>
	
	<footer class="footer">
		<div class="container">
			<div>
				<img src="../images/footer-sponsors.jpg" alt="" class="img-responsive">
				<hr/>
				<p class="text-center" style="margin-bottom: 20px;">Copyright &copy; 2001 - 2014  Cssauthor.com</p>
			</div>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="../js/admin.js"></script>
	<!-- Modals -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="editModalLabel">Edit block</h4>
				</div>
        <div class="modal-body">
          <form method="post" id="editForm"></form>
          <textarea class="form-control" rows="5" form="editForm" name="textedit"></textarea>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" data-dismiss="modal" form="editForm" value="Save changes">
        </div>
			</div>
		</div>
	</div>
</body>

</html>