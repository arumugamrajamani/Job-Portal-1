<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,700;1,400;1,600&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/resume-builder1.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-1" id="nav0">
        <?php include_once 'include/navbar.php'; ?>
    </nav>
    <div class="main-cont" style="width: 100%; height: auto; display: flex; flex-direction:row; background-color: lightgrey;" >
        <div class="cont" style="background-color: #182531; width: 420px; height: 100%; padding: 10px;">
        	<?php include_once 'include/sidebar.php'; ?>
        </div>
    	<div class="cont2" style="width: 595px; height: 842px; display: flex; flex-direction: column;">
            <div class="cont2-1" style="width: 100%; height: 100%; background-color: #00D7E2; align-items: center;">
            	<div class="header" style="width: 50%; margin-top: 35px; margin-left: 22px;">
                	<h1 style="font-size: 30px; font-weight: 700;line-height: 37px; margin: 0;">Juan Dela Cruz</h1>
                	<h2 style="font-size: 25px; font-weight: 200;line-height: 30px; margin: 0;">Business Analyst</h2>
                </div>
            </div>
            <div class="con2-2" style="width: 100%; height: 100%;display: flex; flex-direction: row;">
                <div class="con2-3" style="width: 65%; height: 701px; background-color: white; padding-left: 20px;">
                    <h3 style="font-size: 20px; margin-top: 35px; margin-bottom: 43px;">Background</h3>
                    <div>
                        <h4 style="font-size: 25px; font-weight: 600;">Work History</h4>
                    </div>
                    <div style="border-top: solid; margin-left: -20px;"></div>
                    <div class="hero" style=" width: 100%; padding-right: 10px; padding-top: 20px;">
                        <div>
                            <table>
                                <colgroup>
                                  	<col span="2">
                                  	<col >
                                </colgroup>
                                <tr>
                                  	<th class="th1" style="width: 20%; text-align: left; font-size: 11px; font-weight: 400;">2016 -01 <br>- 2021-08</th>
                                  	<th class="th2" style="font-size: 20px;">Business Analyst</th>
                                </tr>
                                <tr>
                                  	<td></td>
                                  	<td>
										<ul style="padding-left: 0;">
                                    		<li class="lis" style="list-style:none;margin-bottom: 3px;">Dhillion & Kalita Solutions, New Delhi</li>
                                    		<li class="lis">Gathered, cleaned, and analysed multi channel data to produce quarterly reports and identify areas for improvement.</li>
                                    		<li class="lis">Gathered, cleaned, and analysed multi-channel data to produce quarterly reports and identify areas for improvement.</li>
                                    		<li class="lis">Gathered, cleaned, and analysed multi-channel data to produce quarterly reports and identify areas for improvement.</li>
                                    		<li class="lis">Gathered, cleaned, and analysed multi-channel data to produce quarterly reports and identify areas for improvement.</li>
                                    		<div class="lit" style="font-size: 11px; margin-left: -8px;">
                                        		<span id="key" style="font-weight: bold; font-size: 12px;">Key achievement: </span> 
												<span>Conducted a full-scale audit of current procedures and saved 900 employee hours per month and $5,00,00/month in unnecessary expenses with no sacrifice in performance.</span>
                                    		</div>
                                  		</ul>
									</td>
                                </tr>
                                <tr>
                                	<th class="th1" style="width: 20%; text-align: left; font-size: 11px; font-weight: 400;">2016 -01 <br>- 2021-08</th>
                                	<th class="th2" style="font-size: 20px;">Business Analyst</th>
                                </tr>
                                <tr>
                                	<td></td>
                                    <td>
										<ul style="padding-left: 0;">
                                      		<li class="lis1" style="list-style:none;margin-bottom: 3px;">Dhillion & Kalita Solutions, New Delhi</li>
                                      		<li class="lis1">Gathered, cleaned, and analysed multi channel data to produce quarterly reports and identify areas for improvement.</li>
                                      		<li class="lis1">Gathered, cleaned, and analysed multi-channel data to produce quarterly reports and identify areas for improvement.</li>
                                      		<li class="lis1">Gathered, cleaned, and analysed multi-channel data to produce quarterly reports and identify areas for improvement.</li>
                                      		<div class="lit" style="font-size: 11px; margin-left: -8px;">
                                          		<span id="key" style="font-weight: bold; font-size: 12px;">Key achievement: </span> <span>Conducted a full-scale audit of current procedures and saved 900 employee hours per month and $5,00,00/month in unnecessary expenses with no sacrifice in performance.</span>
                                      		</div>
                                    	</ul>
									</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="con2-4" style="width: 36%; height: 701px; background-color: #ECECEC;">
                    <div style="width: 100%; height: auto; align-self: center; padding: 15px;">
                        <img style="justify-self: center; width: 100%;" src="image/profile1.png" alt="">
                    </div>
                    <div class="con2-5" style="padding-left: 15px; padding-top: 25px;">
                        <span id="peri" style="font-size: 25px; font-weight: 700;">Personal Info</span>
                        <div class="bord" style="border-top: solid; margin-left: -15px;"></div>
                    	    <div>
                        	    <ul class="info">Email</ul>
                            	<ul class="info">Phone</ul>
                            	<ul class="info">Facebook</ul>
                            	<ul class="info">Twitter</ul>
                            	<ul class="info">Skills
                                	<li class="skil"></li>
                                	<li class="skil"></li>
                                	<li class="skil"></li>
                            	</ul>
                        	</div>
                    	</div>
                	</div>
            	</div>
        	</div>
		</div>
	</div>
	<script src="../js/resume-builder.js"></script>
</body>
</html>