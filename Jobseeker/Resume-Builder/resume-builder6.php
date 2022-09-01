<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/resume-builder6.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,700;1,400;1,600&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-1" id="nav0">
    	<?php include_once 'include/navbar.php'; ?>
    </nav>
    <div class="main-cont" style="width: 100%; height: auto; display: flex; flex-direction:row;background-color: lightgrey;" >
        <div class="cont" style="background-color: #182531; width: 420px; height: 100%; padding: 10px;">
          	<?php include_once 'include/sidebar.php'; ?>
        </div>
        <div class="main">
          	<div class="cont2">
            	<div class="mg">
              		<img src="/Resume-Builder/image/profile1.png" alt="" width="100%">
            	</div><br>
              	<div class="bio">
                  	<ul class="contact">
						<h3>CONTACT</h3>
						<li class="info"><img class="ic" src="/Resume-Builder/image/Vectorlocation.png" alt="">Naga City, Camarines Sur</li>
						<li class="info"><img class="ic" src="/Resume-Builder/image/Vectormobilep.png" alt="">09123456789</li>
						<li class="info"><img class="ic" src="/Resume-Builder/image/email.png" alt="">user@examplemail.com</li>
						<li class="info"><img class="ic" src="/Resume-Builder/image/Vectorfb.png" alt="">facebook.com/username</li>
                  </ul>
              	</div>
              	<div class="bio">
					<h3>EDUCATION</h3>
					<dt>Bachelor's in Computer Science</dt>
					<dd>University of New York - USA</dd>
					<dd>AUG 2019 - JUNE 2024 </dd>
					<br>
					<dt>Master's in Computer Science</dt>
					<dd>University of New York - USA</dd>
					<dd>AUG 2019 - JUNE 2024 </dd>
              	</div>
              	<div class="bio">
					<h3>HOBBIES</h3>
					<ul class="lu">
						<li class="info1">Playing Chess</li>
						<li class="info1">Reading Books</li>
						<li class="info1">Writing</li>
						<li class="info1">Cooking</li>
					</ul>
              	</div><br>
				<div class="bio">
					<h3>REFERENCES</h3>
					<dt>Mr. John Manlangit</dt>
					<dd>IT Instructor, University of New York</dd>
					<li class="tact"><b class="v" style="font-size: 9px;">Email:</b>jognmanlangit@gmail.com</li class="tact">
					<li class="tact"><b class="v" style="font-size: 9px;">Mobile:</b>0935486256</li class="tact">
					<br>
					<dt>Mrs. Erica Han</dt>
					<dd>IT Instructor, University of New York</dd>
					<li class="tact"><b class="v" style="font-size: 9px;">Email:</b>ericahan@gmail.com</li class="tact">
					<li class="tact"><b class="v" style="font-size: 9px;">Mobile:</b>0935486256</li class="tact">
				</div>
          	</div>
          	<div class="cont3">
				<div class="name">
					<h1>JUAN DELA CRUZ</h1>
					<h2>UI DESIGNER</h2>
				</div>
          	</div>
			<div class="cont4">
				<ul class="about1">
					<h4>ABOUT ME</h4>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus justo vitae metus 
						facilisis dictum. Suspendisse vel nunc in magna pulvinar maximus blandit a velit. Aliquam erat 
						volutpat. Morbi nec cursus lectus.
					</p>
				</ul>
              	<div class="div"></div>
				<ul class="about1">
					<h4>WORK EXPERIENCE</h4>
					<div class="date">
						<span><b>UI Designer</b></span><span><b>Jan 2010 - Dec 2015</b></span>
					</div>
              		<span>Design Elite - Paris France</span>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus justo vitae metus 
						facilisis dictum. Suspendisse vel nunc in magna pulvinar maximus blandit a velit. Aliquam erat 
						volutpat. Morbi nec cursus lectus. 
					</p><br>
					<div class="date">
						<span><b>UI Designer</b></span><span><b>Jan 2010 - Dec 2015</b></span>
					</div>
					<span>Design Elite - Paris France</span>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus justo vitae metus 
						facilisis dictum. Suspendisse vel nunc in magna pulvinar maximus blandit a velit. Aliquam erat 
						volutpat. Morbi nec cursus lectus. 
					</p>
				</ul>
            	<div class="div"></div>
				<ul class="about1">
					<h4>SKILLS</h4>
					<div class="skills d-flex">
						<div class="col1">
							<li class="ski">Attention to detail</li>
							<li class="ski">Problem Solving Skills</li>
							<li class="ski">Planning Skills</li>
							<li class="ski">Collaboration</li>
						</div>
						<div class="col2">
							<li class="ski">Attention to detail</li>
							<li class="ski">Problem Solving Skills</li>
							<li class="ski">Planning Skills</li>
							<li class="ski">Collaboration</li>
						</div>
					</div>
				</ul>
              	<div class="div"></div>
          	</div>
        </div>
    </div>
	<script src="../js/resume-builder.js"></script>
</body>
</html>