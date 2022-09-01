<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/resume-builder2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,700;1,400;1,600&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-1" id="nav0">
        <?php include_once 'include/navbar.php'; ?>
    </nav>
    <div class="main-cont" style="width: 100%; height: auto; display: flex; flex-direction:row; background-color: lightgrey;" >
    	<div class="cont" style="background-color: #182531; width: 420px; height: 100%; padding: 10px;">
        	<?php include_once 'include/sidebar.php'; ?>
      	</div>
		<div class="cont2" style="width: 627px;height: 842px; display: flex; background-color: #00c2d7;">
			<div class="cont2-1" style="width: 45%; height: 100%; background-color: white; padding: 23px; display: flex; flex-direction: column; padding-right: 15px; padding-top: 18px;">
				<div style="max-width: 180px; max-height: 180px; align-self: center;">
					<img class="im" src="image/profile1.png" alt="" style="width: 100%; height: 100%;">
				</div>
          		<div class="pag" style="list-style: none; padding: 0; margin: 0;margin-top: 30px;">
            		<li class="tab">PERSONAL BACKGROUND</li>
            		<p style="font-size: 11px; font-weight: 400; line-height: 13.41px; margin-bottom: 30px;">hI can produce music using any of the following program. AVID Pro Tools, FL Studio, Photoshop, Adobe Premiere. I can produce music using  any of the following programAVID Pro Tools, FL Studio, Photoshop, Adobe Premiere. I can produce music using  any of the following program: AVID Pro Tools, FL Studio, Photoshop, Adobe Premiere.</p>
            		<li class="tab">ACHIEVEMENTS</li>
              		<ul class="list" style="padding-left: 20px; margin-bottom: 20px;">
            			<li class="a-list">I can produce music using  any of the following program AVID Pro Tools, FL Studio, Photoshop, Adobe Premiere.</li>
            			<li class="a-list">I can produce music using  any of the following program AVID Pro Tools, FL Studio, Photoshop, Adobe Premiere.</li>
            			<li class="a-list">I can produce music using  any of the following program AVID Pro Tools, FL Studio, Photoshop, Adobe Premiere.</li>
              		</ul>
            		<li class="tab">GET IN TOUCH WITH ME</li>
            		<table style="font-size: 11px; line-height: 13.41px;">
              			<tr>
                			<td>Home:</td>
                			<td>123-456-7890</td>
              			</tr>
              			<tr>
							<td>Phone no.::</td>
							<td>123-456-7890</td>
						</tr>
						<tr>
							<td>E-mail:</td>
							<td>juand123@gmail.com</td>
						</tr>
						<tr>
							<td>Website:</td>
							<td>www.hotdogharurut.com</td>
						</tr>
						<tr>
							<td>Facebook:</td>
							<td>@juanD.</td>
						</tr>
						<tr>
							<td>Instagram:</td>
							<td>@supremo_juan</td>
						</tr>
					</table>
          		</div>
        	</div>
        	<div style="width: 55%; display: flex; flex-direction: column;">
        		<div class="cont2-2 shadow" style="width: 100%; height: 206px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
					<h1 style="font-size: 30px; font-weight: 700;">Juan Dela Cruz</h1>
					<h2 style="font-size: 25px; font-weight: 200;">Business Analyst</h2>
				</div>
        		<div class="wps" style="padding-left: 23px; padding-left: 15; padding-top: 5px;">
        			<div class="pag1">
						<li class="tab1">WORK EXPERIENCE</li>
							<h3>Social Media Manager </h3>
							<h4>MLK Media Inc. | Feb  2013 - Dec 2014</h4>
						<li class="ha" style="font-size: 11px; font-weight: 500; line-height: 13.41px; margin-top: 10px; margin-bottom: 15px;">Manage online camapaigns for various clients effectively driving brand awareness and engagement</li>
						<li class="tab1">PREVIOUS EDUCATION</li>
						<h5 style="font-size: 12px; font-weight: 500;">University of Rizal System </h5>
						<h6 style="font-size: 11px; margin-bottom: 15px;">Bachelor of Science in Information in Technology</h6>
						<li class="ach">Class Salutatorian</li>
						<li class="ach">News and Editor of the school paper</li>
						<li class="ach">President of USSG</li>
						<li class="ach">Member of UOL Marketing Team</li>
						<li class="tab1">SKILLS</li>
						<h6 style="font-size: 11px; line-height: 13.41px;">I can produce music using  any of the following program AVID Pro Tools, FL Studio, Photoshop, Adobe Premiere.</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
  	<script src="../js/resume-builder.js"></script>
</body>
</html>