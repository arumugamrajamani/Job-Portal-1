<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Resume Builder 3</title>
    <link rel="stylesheet" href="css/resume-builder3.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3" id="nav0">
        <?php include_once 'include/navbar.php'; ?>
    </nav>
    <div class="main-cont" style="width: 100%; height: auto; display: flex; flex-direction:row; column; background-color: lightgrey;" >
        <div class="cont" style="background-color: #182531; width: 420px; height: 100%; padding: 10px;">
			<?php include_once 'include/sidebar.php'; ?>
        </div>
        <div class="cont2" style="width: 595px; height: 842px; display: flex; flex-direction: column; background-color:#00d7e2;">
			<div class="cont2-1">
				<div class="cont2-2" style="margin-right: 10px;">
					<img class="pic" src="image/profile1.png" alt="">
				</div>
				<div class="juan" style="margin-top: 40px;">
					<h1>Juan Dela Cruz</h1>
					<h2>Bussiness Analyst</h2>
					<div class="contact" style="display: flex; height: 21px; background-color: white;">
						<h3>Phone: 09167341489</h3>
						<h3>-Email: hamztrayco0808@gmail.com</h3>
					</div>
				</div>
			</div>
        	<div class="marg" style="margin-top: 63px;">
				<div class="cont3">
					<img class="pee" src="image/user 1.png" alt="" style="margin-top: 5px;">
					<span>PROFILE</span>
				</div>
				<div>
					<h4>
						No, I don't say it often And I probably should've told you I hurt this bad, I know And I probably 
						shouldn't want this so bad It's weighing, weighing on me Don't wanna wake up in the morning Cannot 
						undo what we did in this bed And I can't get you out  So I gotta go No, I'm not ready for You want 
						me all alone. But I'm undecided, excited, ignited And I don't wanna feel the way I do. No, I don't 
						say it often And I probably should've told you I hurt this bad, I know And I probably. No, I don't 
						say it often And I probably should've told you I hurt this bad, I know And I probably . No, I don't 
						say it often And I probably should've told you I hurt this bad, I know.
					</h4>
        		</div>
        		<div class="cont3">
					<img class="pee" src="image/portfolio 3.png" alt="">
					<span>EDUCATION</span>
        		</div>
				<table style="font-size: 11px;">
					<tr>
						<td>1999 - 2004</td>
						<td>School 1: University of Rizal Sytem Cainta</td>
					</tr>
					<tr>
						<td>2004 - 2010</td>
						<td>School 2: Sumulong Memorial High School</td>
					</tr>
				</table>
          		<div class="cont3" style="margin-bottom: 25px; margin-top: 15px;"id="exp">
            		<img class="pee" src="image/star 1.png" alt="">
            		<span>EXPERIENCE</span>
          		</div>
          		<div style="display: flex; font-size: 11px;list-style: none;">
          			<div class="comp" style="width: 100px;">
            			<li>Company 1</li>
            			<li>2006 - 2009</li>
          			</div>
            		<li style="align-self: center;">
						And I don't wanna feel the way I do But I like it Look at all these sparks flying 
						But I'm still indecisive And she want me to wife it.
					</li>
        		</div><br>
        		<div style="display: flex; font-size: 11px;list-style: none;">
          			<div class="comp" style="width: 100px;">
						<li>Company 2</li>
						<li>2006 - 2009</li>
          			</div>
            		<li style="align-self: center;">
						And I don't wanna feel the way I do But I like it Look at all these sparks flying 
						But I'm still indecisive And she want me to wife it.
					</li>
        		</div>
      		</div>
    	</div>
    </div>
    <script src="../js/resume-builder.js"></script>
</body>
</html>