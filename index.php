<!DOCTYPE html>
<html lang="en">
<head>
  <title>Musicearth</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
	.carousel-inner .carousel-item img{
    margin: auto;
  }
  .right{
    width: 85%;
    float: right;
  }
  .left{
    width: 15%;
    float: left;
  }
  .category ul li{
		list-style: none;
	}
	.category ul li a{
		color: #66c0f4;
		text-decoration: none;
		margin-top: 10px;
		font-family: sans-serif;
		font-size: 13px;
		font-family: arial;
	}
	.product{
		color: white;
		float: left;
		font-family: arial;
		text-align: center;
		display: block;
		margin-left: 20px;
		margin-top: 5px;
	}
  </style>
</head>
<body style="background-image: url('https://wallpaper.dog/large/20487011.jpg'); background-attachment: fixed;">
<nav class="navbar navbar-expand-sm navbar-dark bg-transparent">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
      	<li class="nav-item">
          <a class="nav-link" href="musicearth.php" style="font-size: 22px;"><span class="fa fa-music"></span> Musicearth</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="musicearth.php" style="font-size: 22px;"><span class="fa fa-home"></span> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php" style="font-size: 22px;"><span class="fa fa-user"></span> Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signin.php" style="font-size: 22px;"><span class="fa fa-share"></span> Sign in</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Artists, songs or genres" style="width: 350px; background-color: transparent; border: none; font-size: 22px">
        <button class="btn btn-primary" type="button" style="font-size: 22px; background-color: transparent; border: none; color: gray;" text>Search</button>
      </form>
      <ul>
    </div>
  </div>
</nav>
<br>
<div class="right">
	<div id="demo" class="carousel slide w-100" data-bs-ride="carousel" style="background-color: transparent;">
	  <div class="carousel-indicators">
	    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
	    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
	    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
	    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
	  </div>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="https://i.imgur.com/NQpQYZa.jpg" height="350px" class="d-block">
	    </div>
	    <div class="carousel-item">
	      <img src="https://64.media.tumblr.com/94b7155d49a48f4e1838ef4505c16397/09fc99b5cfaeafac-73/s2048x3072_c0,3692,100000,97231/9a3b6d2a593b0fb13e12a97ab8d8bb8aa4925cd1.gif" class="d-block" height="350px">
	    </div>
	    <div class="carousel-item">
	      <img src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F176132799%2F545075770341%2F1%2Foriginal.20210924-012902?w=1000&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C60%2C1920%2C960&s=0b1766ecb41dc172ad6c6a9da4d90a06" height="350px" class="d-block" width="700px">
	    </div>
	    <div class="carousel-item">
	      <img src="http://ocdn.eu/images/pulscms/NjU7MDA_/8060ddc532906d7692e21121cc652f3d.jpg" height="350px" class="d-block" width="700px">
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </button>
	</div>
	<div class="content">
		<div class="song">
		<p style="text-align: left; font-family: arial; color: white; font-size: 30px; margin-left: 26px;">All Songs</p>
			<div>
				<?php
				$connect = mysqli_connect('3.132.234.157','tiendd13','123@123a','tiendddatabase');
				if($connect){
					echo "";
				}
				else{
					echo"Connection failed";
				}
				$sql="SELECT * FROM song";
				$result=mysqli_query($connect,$sql);
					while($row=mysqli_fetch_array($result)){
				?>
				<div class="product">
					<a href="detail.php?id=<?php echo $row['song_id']; ?>" target="_blank"><img src="img/<?php echo $row['song_image'];?>" width="270px" height="270px"></a>
					<p><?php echo $row['song_name'];?></p>
					<p style="font-size: 13px"><?php echo $row['song_singername'];?></p>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
<div class="left">
	<div class="category">	
		<ul><p style="color: #c6d4df; font-size: 13px;">GENRES</p>
			<li><a href="">Pop</a></li>
			<li><a href="">Country</a></li>
			<li><a href="">Dance / Electronic</a></li>
			<li><a href="">Folk</a></li>
			<li><a href="">Rock</a></li>
			<li><a href="">Hip-Hop</a></li>
			<li><a href="">R&B</a></li>
			<li><a href="">Jazz</a></li>
			<li><a href="">Latin</a></li>
			<li><a href="">Indie</a></li>
			<li><a href="">Acoustic</a></li>
			<li><a href="">Punk</a></li>
		</ul>
		<ul><p style="color: #c6d4df; font-size: 13px;">PLAYLISTS</p>
			<li><a href="">This Is Taylor Swift</a></li>
			<li><a href="">This Is Olivia Rodrigo</a></li>
			<li><a href="">Fresh & Chill</a></li>
			<li><a href="">RapCaviar</a></li>
			<li><a href="">This Is Drake</a></li>
			<li><a href="">This Is Selena Gomez</a></li>
			<li><a href="">This Is The Weeknd</a></li>
			<li><a href="">All Out 2010s</a></li>
			<li><a href="">Taylor Swift Complete Collection</a></li>
			<li><a href="">Acoustic Chill</a></li>
			<li><a href="">Pop Right Now</a></li>
		</ul>
		</div>
	</div>
</div>
</body>
</html>