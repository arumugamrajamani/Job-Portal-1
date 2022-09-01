<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/resume-builder7.css">
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
            <div class="cont2" style="background-color:#bbbdbb;">
                <div class="bio">
                    <h2>CONTACT ME</h2>
                    <li class="coninfo"><img class="ci" src="image/icons8-telephone-50.png" alt="">1234-567-890</li>
                    <li class="coninfo"><img class="ci" src="image/image-removebg-preview 2.png" alt="">juandelacruz@email.com</li>
                    <li class="coninfo"><img class="ci" src="image/image-removebg-preview 3.png" alt="">No.27 Commonwealth Ave. Fairview, Quezon City</li>
                </div>
                <div class="bio">
                    <h2>SKILLS</h2>
                    <li class="skills">Web Design</li>
                    <li class="skills">Design Thinking</li>
                    <li class="skills">Wireframe Creation</li>
                    <li class="skills">Fron End Coding</li>
                    <li class="skills">Problem Solving</li>
                    <li class="skills">Computer Literacy</li>
                    <li class="skills">Project Management Tools</li>
                    <li class="skills">Strong Communication</li>
                </div>
                <div class="bio">
                    <h2>EDUCATION</h2>
                    <li class="ed">Bulacan High School</li>
                    <span>2010-2014</span>
                    <li class="ed">Bulacan University</li>
                    <span>2014-2016</span>
                </div>
            </div>
            <div class="circle shadow">
                <div class="half">
                    <div class="trans"></div>
                </div>
                <img class="pro" style="position: relative; max-width: 180px; align-self: center; justify-self: center;" src="image/profile1.png" alt="">
            </div>
            <div class="cont3">
                <div class="cont3-1">
                    <div class="name">
                        <h1>JUAN</h1>
                        <h3>DELA CRUZ</h3>
                        <h4>WEB DEVELOPER</h4>
                    </div>
                    <div class="prof">
                    <h2>PROFILE</h2>
                    <p>I have five years of database administration and website design experience as a licensed and experienced web developer. Strong analytical and creative abilities. Dedicated to the team and hardworking.</p>
                    </div>
                </div>
                <div class="cont3-2">
                    <h2>EXPERIENCE</h2>
                    <li class="exp">Database administration and website design</li>
                    <li class="exp">Built the logic for a streamlined ad-serving platform that scaled</li>
                    <li class="exp">Educational institution and online classroom management</li>
                    <li class="exp">Database administration and website design</li>
                    <li class="exp">Built the logic for a streamlined ad-serving platform that scaled</li>
                    <li class="exp">Educational institution and online classroom management</li>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/resume-builder.js"></script>
</body>
</html>