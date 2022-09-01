<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,700;1,400;1,600&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/resume-builder4.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-1" id="nav0">
        <?php include_once 'include/navbar.php'; ?>
    </nav>
    <div class="main-cont" style="width: 100%; height: auto; display: flex; flex-direction:row; background-color: lightgrey;" >
        <div class="cont" style="background-color: #182531; width: 420px; height: 100%; padding: 10px;">
            <?php include_once 'include/sidebar.php'; ?>
        </div>
        <div class="main">
            <div class="cont2">
                <div class="head">
                    <h1>Morgan Mooreon</h1>
                    <h2>IT Specialist</h2>
                </div>
                <div>
                    <div class="pic"><h3>Insert 2x2 Picture</h3></div>
                </div>
            </div>
            <div class="cont3">
                <div class="bio">
                    <ul class="t">About Me
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </ul>
                    <ul class="t">Experience
                        <li class="compa">Company Name 2017 - 2020</li>
                        <span>Job Position</span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </ul>
                    <ul class="t">Education
                        <div style="display: flex;">
                            <div class="date">
                                <li class="d">2015</li>
                                <span>University Name</span>
                                <li class="d">2015</li>
                                <span>University Name</span>
                                <li class="d">2015</li>
                                <span>University Name</span>
                            </div>
                            <div class="des">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="co">
                    <ul class="t1">Contact
                        <li class="ph">Phone</li>
                        <li class="ph">*123-456-7890</li>
                    </ul>
                    <ul class="t1">Email
                        <li class="ph">himyemail@yahoo.com</li>
                    </ul>
                    <ul class="t1">Address
                        <li class="ph">123 Anywhere St., Any City</li >
                    </ul>
                    <ul class="t1">Expertise
                        <li class="ph1">UI/ UX</li>
                        <li class="ph1">User Flow</li>
                        <li class="ph1">Process Flow</li>
                        <li class="ph1">Visual Design</li>
                        <li class="ph1">Leadership</li>
                    </ul>
                    <ul class="t1">Language</ul>
                    <div style="display: flex;">
                        <div>
                            <li class="lang">Filipino (Tagalog)</li>
                            <li class="lang">English</li>
                        </div>
                        <div class="lin">
                            <div class="sta"><div class="blue"></div></div>
                            <div class="sta"><div class="blue1"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <script src="../js/resume-builder.js"></script>
</body>
</html>