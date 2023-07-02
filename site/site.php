<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <?php require_once '../menu/menu.php' ?>
	<?php $ttt = '123';?>
	<div class="container">
  <div class="card">
    <div class="card-header">TTT</div>
    <div class="card-body">Hello world <?php echo $ttt?></div>
  </div>
  <table class="table table-dark table-hover">
  	<thead>
  	<tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
    </thead>
  <tbody>
  	<tr>
  		<th>1</th>
  		<th><b><a style="color: RGB(122, 39, 106);" href="#">Siverin</a></b></th>
  		<th>Igor</th>
  		<th>man</th>
  	</tr>
  	<tr>
  		<td>2</td>
  		<td>Enotov</td>
  		<td>ALEXANDER</td>
  		<td>man</td>
  	</tr>
  </tbody>
  </table>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>