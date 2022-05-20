<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Techployment</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
        <!-- JQuery CDN below -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <!-- Toast CDN for functionality of toastr -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Toast CDN for design of toastr -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="css/index.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example">
    <div class="color-overlay">
        <div class="container-fluid">
            <nav id="navbar-example2" class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow " >
                    <a href="index.php" class="navbar-brand ms-3">
                    <img src="image/flogo.png" alt="Job Portal Logo" width="120" height="95"></a>

                <div class="collapse navbar-collapse" id="toggleMobileMenu">
                    <ul class="navbar-nav ms-auto text-center nav-tabs">
                            <nav class="navbar navbar-light">     
                                <li><a class="nav-link me-5 fs-5 btn1" href="#home">Home</a></li>
                                <li><a class="nav-link me-5 fs-5 btn1" href="#aboutus">About Us</a></li>
                                <li><a class="nav-link me-5 fs-5" href="#contactus">Contact Us</a></li>
                                <li><a class="nav-link me-5 fs-5" href="#faq">FAQ</a></li>
                                
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-5 mx-3" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Signup</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item me-4 fs-5" href="companyregister.php">Employer</a></li>
 								<li><a class="dropdown-item me-4 fs-5"href="jobseekersignup.php">JobSeeker</a></li>
                            </ul>
                                <li><a class="nav-link fs-5 me-4" href="login.php">Login</a></li>
                            	<li><a class="nav-link fs-5" href="#"></a></li>
                        </nav>
                    </ul>
                </div>
            </nav>         
    	</div>
    </div>
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <section class="masthead" id="home">
        
                    <br><br><br>
                    <h1 class="mt-5 ms-4 pt-5 text-center tag1">Employment powered by Technology. </h1><br>
                <div class="container d-flex">
                
                    <div>
                            <p class="mt-0 tag2 " style="text-align: justify;text-justify: inter-word;font-size: 29px;">Are you sick of standing in endless lines? Today, technology gives you an advantage in the job market by allowing you to apply with a single click and from the comfort of your home.  Now is the time to apply! Use <strong> Tech-Ployment  </strong>and get your first online job!</p>
                            <br>
                            <div class="row height d-flex justify-content-center align-items-center">
                                <div class="col-md-12">
                                <div class="search">
                                    <i class="bi bi-search"></i>
                                    <input type="text" class="form-control" placeholder="Search a job" style="border-radius: 14px;">
                                    <button class="btn" style="background-color: #00C2D6;border-radius: 14px;">Search</button>
                                </div>  
                                </div>
                            </div><br>
                        <div class="text-center">
                            <button type="button" onclick="location.href='searchjob-home.php'" class="btn btn-sm fs-6 text-dark fw-bold" style="background-color: #ffff; border-radius: 10px;">Browse All Job Post </button>
        
                        </div>
                    </div>
                        <img src="image/bg2-homepage.png" alt="background-2" class="ms-5" >
                </div>
                <br><br><br><br><br><br>
        </section>  
        <section id="aboutus"  style="background:#FDF6EC;">
                <br><br><br>
            
                <h4 class="text-center pt-4 mt-5 aboutus">About Us</h4><br>
                <br>

            <div class="para ms-5 shadow-sm pb-2 mt-0" style="width: 95%;">
                        
                <h3 class="text-center p-2" style="height:50px;color: #372732;background-color: #00C2D6;">Meet Our Team</h3><br>
                <p class="text-center fs-5" style="color: #372732;font-family: 'Inter';font-style: normal;"> We are Melham Construction Corporation interns who want to create a
                                            website for available jobs online. The traditional method of applying for jobs <br> has been
                                            innovated, and on this page we offer a minimalist, clean, and simple to use website for both
                                            job seekers and employers. Tech-Ployment is a <br> combination of technology and employment in
                                            which employability is now empowered by our modern technology.</p>
                        
            </div><br><br>
            <div class="para ms-5 shadow-sm " style="width: 95%;">
                
                <h3 class="text-center pt-2" style="height:50px; color: #372732;background-color: #00C2D6;">Vision</h3><br>
                <p class="text-center fs-5" style="color: #372732;font-family: 'Inter';font-style: normal;"> To establish a career portal that can help both job seekers and employees in a healthy community.</p>
                <br><br>     
            </div><br><br>
            <div class="para ms-5 shadow-sm " style="width: 95%;">
                
                <h3 class="text-center p-2" style="height:50px;color: #372732;background-color: #00C2D6;">Mission</h3><br>
                <p class="text-center fs-5" style="color: #372732;font-family: 'Inter';font-style: normal;"> To assist seekers and employers achieve their employment objectives. With creativity and skill, the ageny collaborates with community partners to adapt to changing needs and posibilities.</p>
                <br><br>          
            </div><br><br>
            <div class="para ms-5 shadow-sm " style="width: 95%;">
                
                <h3 class="text-center p-2" style="height:50px;color: #372732;background-color: #00C2D6;">Goal</h3><br>
                <p class="text-center fs-5" style="color: #372732;font-family: 'Inter';font-style: normal;"> This initiative aims to provide job seekers with a simple and effective job site. This aim to create an environment in which finding a job online is more time efficient and convenient than looking for one in person.</p>
                <br><br>       
            </div>
                <br><br>
            <div class="para2 ms-5 shadow-sm" style="width: 95%;">
                    
                <div class="fs-5 ms-6 text-center" >
                    <h4 class="p-2" style="height:50px;color: #372732;background-color: #00C2D6;">Our Services</h4>
                    <p>We serve individuals by connecting employers with workers who are looking for jobs. We want to instill confidence in everyone's outsourcing experience.</p><br>
                    <h4 class="" style="color: #372732;">Why we do it</h4>
                    <p>Because it has an impact on people's lives.</p><br>
                
                </div>
            </div>
            <br><br><br><br><br><br><br>
        </section>
        <section class="con0" id="contactus" style="background-color: #00C2D6;"><br><br><br><br>
            <div class="d-flex">
                <form class="container con1 needs-validation shadow" novalidate style="margin-left: 400px;">
                    <br>
                    <div class="col-sm-12 text-start row mb-3">
                        <h1 class="text-center">CONTACT US</h1>
                        <P class="text-center">Got a question? We'd love to hear from you. Send us <br> message and we'll  respond as soon as possible</P>
                    </div>      
                    <div class="row mb-3 mt-3 ms-4">              
                        <div class="col-sm-11">                   
                            <input type="text" class="form-control" id="fullname" placeholder="FULL NAME" style="background:#ECECEC;">               
                            <div class="text-danger" id="fullname-errorMsg"></div>
                        </div>
                    </div>
                    <div class="row mb-3 ms-4">      
                        <div class="col-sm-11">
                            <input type="email" class="form-control" id="email" placeholder="EMAIL ADDRESS" style="background:#ECECEC;">
                            <div class="text-danger" id="email-errorMsg"></div>
                        </div>
                    </div>
                    <div class="row mb-3 ms-4">
                        <div class="col-sm-11">
                            <textarea id="concern" name="concern" rows="7" cols="59" placeholder="CONCERN" style="background:#ECECEC; border: 0;"></textarea>
                            <div class="text-danger" id="concern-errorMsg"></div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn-info text-dark" style="width:300px;" id="submit">SEND MESSAGE</button>
                    </div>
                </form>
                <div class="d-block ms-5">
                    <img src="image/bg-contactus.png" class="mt-5" alt="" style="margin-right: 300px;">
                    <h5 style="margin-left: 70px;"> <img src="image/gmail2.png" alt=""> concerns.techploymentph@gmail.com</h5>
                </div>
            </div>
            <br><br>
        </section>
        <section class="masthead mh1" id="faq">
            <br>
            <br><br><br><br><br>
            <div class="container" style="width: 1200px;">
                <div class="accordion" id="accordion">
                    <h1 class="text-center">FREQUENTLY ASKED QUESTIONS</h1><br>
                        <div class="row height d-flex justify-content-center align-items-center">
                        <div class="col-md-8">
                            <div class="search">
                            <i class="bi bi-search"></i>
                            <input type="text" class="form-control" placeholder="Search a question" style="border-radius: 14px;">
                            <button class="btn" style="background-color: #00C2D6;border-radius: 14px;">Search</button>
                            </div>  
                        </div>
                        </div><br>
                    <h3 class="text-center">How can we help?</h3>
                    <h4 class="fw-bold" >SYSTEMS</h4>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What is Tech-Ployment?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                Tech-ployment is a Job Adveretising platform that
                                offers job vacancies around the country. This platform
                                encourages people/job seekers to find job in an easy
                                and affordable environment and strives to empower
                                employers by making them connect to their future
                                employees easily.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What does Tech-Ployment do?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                Tech-Ployment helps businesses and employers
                                around the country to locate the people who seeks job
                                find the right one that they think they are best suitable
                                for. With the help of industry digital technology and
                                data-driven approach, this made the platform
                                achievable and possible.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Is searching for a job online the best job search method? 
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                Because the world has progressed and anybody you
                                could need to interact with is available online, the
                                internet has become a key tool in today's employment
                                market. Yes, looking for a job online is an effective job
                                search approach when used in conjunction with other
                                methods.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Does company/employers offers remote jobs?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                Yes, company/employers offers hundreds of remote
                                jobs across the country. You can find jobs suitable for
                                you here in the Philippines.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                How do I search jobs in TechPloyment?
                            </button>
                        </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                <p>
                                Here is a simple way to find and search jobs in TechPloyement:
                                -In search bar/engine - type a job title and company
                                you want to work with
                                -You can also type the location on which you would
                                like to get a job in.
                                -Click on the search button to see job offering that
                                matches what you searched.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Is Tech-Ployment free to use?
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                Yes, it is 100% free to users such as employers and jobseekers.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Can I search Job from outside of my
                                country?
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                Unfortunately, no. But, we are open to suggestion and
                                very eager to upgrade the system based on the review
                                of our users.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                How can I improve my Job search
                                results?
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                Here’s some way to improve your job search results:
                                -Writing precise and accurate job you want to find
                                -Ensuring that your spelling is correct and there are no
                                typographical error
                                -Avoid using abbreviations (e.g. Curriculum Vitae
                                instead of CV)
                                -Apply jobs only in your area of expertise
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                Do I need to pay in able to apply
                                for jobs in Tech-Ployment?
                            </button>
                        </h2>
                        <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                No, as we have mentioned in previous FAQ, applying
                                job here in Tech-Ployment is 100% free.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading10">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                Is it possible to apply jobs without
                                getting registered in TechPloyment?
                                
                            </button>
                        </h2>
                        <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                Unfortunately we need you to register in able to keep
                                tracks on your documents and for employers to
                                process it easily
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading11">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                Can I apply for multiple jobs at the
                                same time here in Tech-Ployment?
                            </button>
                        </h2>
                        <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                Yes, Tech-Ployment offers hundreds of jobs across the
                                country and there is no problem applying multiple jobs
                                at the same time.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading12">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                Is there a limit on how many jobs I can apply for in a day or month?
                            </button>
                        </h2>
                        <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                No, there is no limit on how many jobs you can apply
                                to but it is in the best of interest of the employers to
                                know what you are capable of and so applying of the
                                job suited to your skills is the best way to go.
                                
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading13">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                Does Tech-Ployment have job
                                alerts?
                                
                            </button>
                        </h2>
                        <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                Yes, one of the main feature that Tech-Ployment
                                offers is that it has job alerts.
                                
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading14">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                What is job alerts?
                            </button>
                        </h2>
                        <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                Job alerts notify the users about job vacancies or openings depending on your field of interest
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading15">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                What are the benefits of job alerts? How can I receive it? 
                            </button>
                        </h2>
                        <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                The biggest advantage of job alerts is that most
                                relevant jobs based on your said expertise that are
                                vacant or opened will be delivered right into your
                                inbox. Which basically informs you about the job
                                openings as soon as they are posted. You can receive
                                it by registering and by the time you have your own
                                account, you can choose to whether receive job alerts
                                or not
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading16">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                When is the best time to look for a job?

                            </button>
                        </h2>
                        <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                -Based on our recruitment knowledge and experience
                                hosting a job board, we can tell you that the greatest
                                time to look for work is when there aren't many people
                                looking. Because many businesses are restructuring,
                                growing, and so on, there are more job openings in
                                January. At this time of year, there is usually a lot of
                                competition for open positions.
                                -During the holidays, the greatest time to look for work
                                is. Holidays, such as Christmas, are ideal times to look
                                for work because many individuals are relaxed and
                                eager to start looking when the new year begins.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading17">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                Can I access the Tech-Ployment
                                website in tablet or phone? (not
                                quite sure yet)
                                
                            </button>
                        </h2>
                        <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                Yes, Tech-Ployment is a responsive website and can be
                                accessed with other devices as long as it has internet
                                connection
                                
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading18">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                I have more questions that are not
                                in FAQ, how can I contact you?
                            </button>
                        </h2>
                        <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                You may contact us in ‘contact us page’ and we will
                                answer your questions as soon as possible (Link of
                                contact us page here!)
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <h4 class="fw-bold" >APPLICATION PROCESS</h4>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading19">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                Do I need a good CV to land a job?
                            </button>
                        </h2>
                        <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Yes, having a CV is the only method for employers to
                                    notice you. How can companies know you have the
                                    skills and abilities to accomplish the job if you don't
                                    have a CV? Of all, without a CV, you can't go about
                                    telling employers that you're a good fit.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading20">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                Can I get a job with no work
                                experience?
                                
                            </button>
                        </h2>
                        <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Employers frequently seek applicants with work
                                    experience because they can do tasks quickly and
                                    efficiently. Even if you have no prior work experience,
                                    you can still find work.
                                    
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading21">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                Should I apply for a job if I don’t
                                have the experience?
                            </button>
                        </h2>
                        <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="heading21" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Yes, you can apply for a job even if you lack the required
                                    number of years of experience, but do so with caution.
                                    It means that if the job requires a candidate with four
                                    years of experience and you have two years of
                                    experience with the required skills, you are eligible to
                                    apply.
                                    
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading22">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                Can I get a job without having
                                connections?
                            </button>
                        </h2>
                        <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Yes, you certainly can. Even if having the correct
                                    connections can help you find a job, you can get a
                                    decent job without knowing anyone or having
                                    connections.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading24">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                Can I get a job even if I don’t know
                                the kind of job I want?
                            </button>
                        </h2>
                        <div id="collapse24" class="accordion-collapse collapse" aria-labelledby="heading24" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Yes, you can find work even if you have no idea what
                                    type of employment you want. We've met numerous
                                    job searchers who don't know what kind of job they
                                    want to do based on our recruitment expertise over the
                                    years. If you haven't yet figured out what kind of work
                                    you want to pursue and you need to find one, the
                                    greatest thing you can do is volunteer or intern. To get
                                    an internship, you don't need require employment
                                    experience. An internship will help you to learn on the
                                    job while also allowing you to identify the type of work
                                    that you want to undertake (long term).
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading25">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                Can I apply for a job in person?
                            </button>
                        </h2>
                        <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="heading25" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Yes, you can apply for a job in person, although this
                                    method does not work for all types of jobs. Companies
                                    now publish their positions online or hire a recruitment
                                    agency. Gone are the days when you could apply for a
                                    job in person. Many businesses conduct their hiring
                                    processes online since it allows them to streamline the
                                    process and reduce paperwork.
                                    
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading26">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                I have more questions that are not
                                in FAQ, how can I contact you?
                            </button>
                        </h2>
                        <div id="collapse26" class="accordion-collapse collapse" aria-labelledby="heading26" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                You may contact us in ‘contact us page’ and we will
                                answer your questions as soon as possible (Link of
                                contact us page here!)
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading27">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                                How can I build a robust CV
                                without working for a long time?
                            </button>
                        </h2>
                        <div id="collapse27" class="accordion-collapse collapse" aria-labelledby="heading27" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    To have a strong CV, you don't have to work for years.
                                    Even if you haven't worked in a long time, you can still
                                    put up a strong CV that highlights why you are the best
                                    candidate for the job.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading28">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                How can I make employers search
                                for me?
                            </button>
                        </h2>
                        <div id="collapse28" class="accordion-collapse collapse" aria-labelledby="heading28" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Instead of searching for employers, you can make
                                    employers search for you. To get employers to look for
                                    you, you must make yourself visible so that you can be
                                    found readily when they are looking
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading29">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                                How can I get only
                                freelance/remote jobs?
                            </button>
                        </h2>
                        <div id="collapse29" class="accordion-collapse collapse" aria-labelledby="heading29" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    How can I get only
                                    freelance/remote jobs?
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading30">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                What recruitment agency can I
                                work with to get a job?
                            </button>
                        </h2>
                        <div id="collapse30" class="accordion-collapse collapse" aria-labelledby="heading30" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Working with a recruitment agency might also be an
                                    option when it comes to finding jobs. Using a recruiting
                                    agency can sometimes make your job hunt easier, but
                                    you must be careful which recruitment firm you select.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading31">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                                When should I stop searching for a
                                job after many disappointments? 
                            </button>
                        </h2>
                        <div id="collapse31" class="accordion-collapse collapse" aria-labelledby="heading31" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    We understand how frustrating it can be when you try
                                    your hardest to obtain a job but nothing seems to work
                                    out. Taking a break and returning refreshed is the best
                                    thing to do at this point, given the aggravation you may
                                    be feeling. Taking a break does not imply that you must
                                    stop looking. It's giving yourself some space to consider
                                    your options and adjust your strategy.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading32">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
                                I have more questions that are not
                                in FAQ, how can I contact you?
                            </button>
                        </h2>
                        <div id="collapse32" class="accordion-collapse collapse" aria-labelledby="heading32" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                You may contact us in ‘contact us page’ and we will
                                answer your questions as soon as possible (Link of
                                contact us page here!)
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading33">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
                                How often should I update my CV?
                            </button>
                        </h2>
                        <div id="collapse33" class="accordion-collapse collapse" aria-labelledby="heading33" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    -If you are actively looking for work, you may need to
                                    modify your CV to the position you are applying for.
                                    This may necessitate making some minor changes to
                                    your CV. Customizing your CV for a specific job boosts
                                    your chances of landing the position.
                                    -Many people feel that if you are employed, you must
                                    update your CV at least twice a year. This will enable
                                    you to add any new talents or certificates you have
                                    obtained.
                                    -If you are unemployed and actively looking for work,
                                    you should update your CV as regularly as possible to
                                    improve your chances of being hired.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading34">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
                                I have more questions that are not
                                in FAQ, how can I contact you?
                            </button>
                        </h2>
                        <div id="collapse34" class="accordion-collapse collapse" aria-labelledby="heading34" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                You may contact us in ‘contact us page’ and we will
                                answer your questions as soon as possible (Link of
                                contact us page here!)
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading35">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse35" aria-expanded="false" aria-controls="collapse35">
                                Must I follow the company I want
                                to work for on social media? 
                            </button>
                        </h2>
                        <div id="collapse35" class="accordion-collapse collapse" aria-labelledby="heading35" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    No, you do not need to follow the firm you want to
                                    work for on social media; instead, you can apply for the
                                    position you want with a solid CV and cover letter.
                                    Following them on social media, on the other hand,
                                    allows you to discover more about them while also
                                    keeping you informed about career chances.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading36">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse36" aria-expanded="false" aria-controls="collapse36">
                                Should I use a different CV for each
                                job application?
                                
                            </button>
                        </h2>
                        <div id="collapse36" class="accordion-collapse collapse" aria-labelledby="heading36" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    You don't have to use a fresh CV for each job
                                    application, especially if your CV is good. By updating
                                    what you currently have, you may easily adapt your CV
                                    to meet the job description for the position you're
                                    hoping to fill. If your CV isn't up to par, you may need
                                    to start from scratch to apply for the job you desire.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading37">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse37" aria-expanded="false" aria-controls="collapse37">
                                I have more questions that are not
                                in FAQ, how can I contact you?
                            </button>
                        </h2>
                        <div id="collapse37" class="accordion-collapse collapse" aria-labelledby="heading37" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                You may contact us in ‘contact us page’ and we will
                                answer your questions as soon as possible (Link of
                                contact us page here!)
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading38">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse38" aria-expanded="false" aria-controls="collapse38">
                                How long should my CV be?
                            </button>
                        </h2>
                        <div id="collapse38" class="accordion-collapse collapse" aria-labelledby="heading38" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    -The length of your CV should usually be between two
                                    and three pages. Even if there is no formal limit on the
                                    length of a CV, you don't want to bore your potential
                                    employer with a lengthy CV.
                                    -Making your CV two to three pages long gives you
                                    adequate room to tell your prospective employer about
                                    your work experience.
                                    -If you're a recent graduate with little work experience,
                                    you can condense your CV into one page. Always review
                                    the job description to build a list of the skills and
                                    experiences that are most relevant to the position.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading39">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse39" aria-expanded="false" aria-controls="collapse39">
                                How can I stay motivated when
                                searching for a job?
                            </button>
                        </h2>
                        <div id="collapse39" class="accordion-collapse collapse" aria-labelledby="heading39" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    We understand that looking for work may be difficult,
                                    especially when your job search results don't match
                                    your efforts. Even after doing everything you've learnt,
                                    you still haven't gotten a job interview, let alone a job.
                                    A string of disappointments can make you want to give
                                    up, but you must stay motivated in order to land the job
                                    you want.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading40">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse40" aria-expanded="false" aria-controls="collapse40">
                                I have more questions that are not
                                in FAQ, how can I contact you?
                            </button>
                        </h2>
                        <div id="collapse40" class="accordion-collapse collapse" aria-labelledby="heading40" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                You may contact us in ‘contact us page’ and we will
                                answer your questions as soon as possible (Link of
                                contact us page here!)
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading41">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
                                How can I track my Job
                                applications?
                                
                            </button>
                        </h2>
                        <div id="collapse41" class="accordion-collapse collapse" aria-labelledby="heading41" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Many job searchers continue to apply for jobs without
                                    tracking their progress. You can maintain track of your
                                    job search activity by tracking your applications.
                                    Keeping track of your job search activity will help you
                                    avoid being a victim of employment fraud.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading42">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse42" aria-expanded="false" aria-controls="collapse42">
                                Can I contact an employer to follow
                                up my job application? (Interview)
                            </button>
                        </h2>
                        <div id="collapse42" class="accordion-collapse collapse" aria-labelledby="heading42" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    You can only contact the employer if they have
                                    provider contact information details. If they have none
                                    or they have not provided one, you would not be able
                                    to contact them.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading43">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse43" aria-expanded="false" aria-controls="collapse43">
                                How soon can I expect a response
                                once I applied for a job? (interview)
                            </button>
                        </h2>
                        <div id="collapse43" class="accordion-collapse collapse" aria-labelledby="heading43" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    That depends on the employer, we are only a platform
                                    that helps job seekers find different job offerings. But,
                                    rest assured that employers will respond as soon as
                                    possible.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading44">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse44" aria-expanded="false" aria-controls="collapse44">
                                What are job scams? And how can I
                                identify one?
                            </button>
                        </h2>
                        <div id="collapse44" class="accordion-collapse collapse" aria-labelledby="heading44" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Job scams are mostly:
                                    -On the spot hiring
                                    -You are asked to provide personal information
                                    -When they required you to pay in able to get the job
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading45">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse45" aria-expanded="false" aria-controls="collapse45">
                                How can I protect myself from job scams?

                            </button>
                        </h2>
                        <div id="collapse45" class="accordion-collapse collapse" aria-labelledby="heading45" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    You can protect yourself from job scams by:
                                    -Doing a research about the company
                                    -Avoid giving personal information especially you
                                    credit/debit card
                                    -Look for the reviews by other applicant about the
                                    company (Depends if we have a review feature)
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading46">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse46" aria-expanded="false" aria-controls="collapse46">
                                How can I deal with job search frustrations?
                            </button>
                        </h2>
                        <div id="collapse46" class="accordion-collapse collapse" aria-labelledby="heading46" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Job scams are mostly:
                                    -On the spot hiring
                                    -You are asked to provide personal information
                                    -When they required you to pay in able to get the job
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading47">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse47" aria-expanded="false" aria-controls="collapse47">
                                Why do I get rejected for a job offer?
                            </button>
                        </h2>
                        <div id="collapse47" class="accordion-collapse collapse" aria-labelledby="heading47" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    When it comes to job hunting, rejection is almost
                                    always a given. The truth is that for every job interview
                                    invitation you receive, you will most likely be rejected
                                    for several more. If you've been looking for a job for a
                                    long time, you might be wondering why you were
                                    turned down. Many times, you will apply for a job and
                                    not hear back. You may apply for 100 jobs and not
                                    receive a response from any of them.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading48">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse48" aria-expanded="false" aria-controls="collapse48">
                                How can I cope when I get
                                rejected?
                            </button>
                        </h2>
                        <div id="collapse48" class="accordion-collapse collapse" aria-labelledby="heading48" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    When it comes to job hunting, one of the baggage that
                                    comes with it is rejection. Employers may reject you
                                    even if you believe you are the ideal applicant for the
                                    job. Don't get discouraged or assume you're not good
                                    enough if you're rejected by an employment. It could
                                    simply mean that you need to adjust your job search
                                    strategy to appeal to the recruiter or employer with
                                    whom you want to work.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <h4 class="fw-bold" >INTERVIEW</h4>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading49">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse49" aria-expanded="false" aria-controls="collapse49">
                                How do I respond to questions
                                about salary expectations?
                            </button>
                        </h2>
                        <div id="collapse49" class="accordion-collapse collapse" aria-labelledby="heading49" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    The question regarding your wage expectations will
                                    almost certainly come up during your interview, so you
                                    must be careful how you respond. Employers do not ask
                                    this question just because they want to. They ask this
                                    question to see if your salary expectations are in line
                                    with the amount they plan to pay for the role.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading50">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse50" aria-expanded="false" aria-controls="collapse50">
                                Should I follow up after an
                                interview?
                                
                            </button>
                        </h2>
                        <div id="collapse50" class="accordion-collapse collapse" aria-labelledby="heading50" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Yes, you can contact the recruiter after your interview,
                                    but be careful not to go overboard. Recruiters and
                                    employers are frequently busy, so they will not
                                    appreciate being hemmed in. Following up after the
                                    interview demonstrates your interest in the position,
                                    but don't bombard your potential employer with mails
                                    and phone calls. Sending daily texts and calling the
                                    recruiter can irritate the recruiter.
                                    
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading51">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse51" aria-expanded="false" aria-controls="collapse51">
                                How can I be more confident
                                during the interview
                            </button>
                        </h2>
                        <div id="collapse51" class="accordion-collapse collapse" aria-labelledby="heading51" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    It's reassuring to know that you're not the only one that
                                    gets scared during an interview. When you are outside
                                    of your comfort zone, almost everyone feels uneasy. No
                                    one is at ease during an interview. Preparing for the
                                    interview by practicing interview questions and
                                    responses is one guaranteed way to feel more at ease
                                    during the interview. You will gain confidence by
                                    practicing with your friends/family or simply in front of
                                    the mirror.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading52">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse52" aria-expanded="false" aria-controls="collapse52">
                                Can I take note during the
                                interview?
                            </button>
                        </h2>
                        <div id="collapse52" class="accordion-collapse collapse" aria-labelledby="heading52" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    -Yes, you are permitted to take notes throughout your
                                    interview. Taking notes during the interview
                                    demonstrates that you are fascinated by some aspects
                                    of the work. Taking notes during the interview,
                                    particularly when the interviewer discusses the
                                    organization, can help you stand out.
                                    -Before you bring out your notepad or IPad to take
                                    notes during the interview, make sure you ask the
                                    interviewer if it is okay with him or her.
                                    -You are cautious if you ask for their permission before
                                    taking notes. In the sake of taking notes, you should
                                    also avoid writing down replies to interview questions.
                                    You are attempting to cheat your way through the
                                    procedure if you do so.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading53">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse53" aria-expanded="false" aria-controls="collapse53">
                                Can I take note during the
                                interview?
                            </button>
                        </h2>
                        <div id="collapse53" class="accordion-collapse collapse" aria-labelledby="heading53" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    -Yes, you are permitted to take notes throughout your
                                    interview. Taking notes during the interview
                                    demonstrates that you are fascinated by some aspects
                                    of the work. Taking notes during the interview,
                                    particularly when the interviewer discusses the
                                    organization, can help you stand out.
                                    -Before you bring out your notepad or IPad to take
                                    notes during the interview, make sure you ask the
                                    interviewer if it is okay with him or her.
                                    -You are cautious if you ask for their permission before
                                    taking notes. In the sake of taking notes, you should
                                    also avoid writing down replies to interview questions.
                                    You are attempting to cheat your way through the
                                    procedure if you do so.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading54">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse54" aria-expanded="false" aria-controls="collapse54">
                                Does HR make the hiring decision?
                            </button>
                        </h2>
                        <div id="collapse54" class="accordion-collapse collapse" aria-labelledby="heading54" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Because firms approach recruitment in different ways,
                                    it can be difficult to tell who makes the final decision in
                                    the hiring process. Although, in most cases, recruiting
                                    choices are not made by HR managers and recruiters.
                                    They assist in the selection of the top candidates to
                                    meet with the CEO, MD, or board of directors,
                                    depending on the situation. Even if the HR manager or
                                    recruiter does not make the hiring choice, they might
                                    have an impact on the process because the CEO or MD
                                    will most likely follow their advice. This means they
                                    have the power to help or impede you gaining the job.
                                    If the CEO or Board of Directors trusts the HR manager
                                    to do a good job based on previous success, the HR
                                    manager may be able to make recruiting decisions.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading55">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse55" aria-expanded="false" aria-controls="collapse55">
                                How long does it take to get a job
                                offer after the interview?
                            </button>
                        </h2>
                        <div id="collapse55" class="accordion-collapse collapse" aria-labelledby="heading55" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    -In terms of the time it takes to fill a vacant position,
                                    each company's hiring process may differ. While a small
                                    company may make an offer following an interview in a
                                    matter of hours, a larger corporation may take several
                                    days or even weeks to recruit you, depending on the
                                    number of job hopefuls that qualified for the position.
                                    -According to several company studies, it is estimated
                                    that a job offer will be made 2 to 4 weeks after the
                                    interview.
                                    -Knowing how long it will take for the employer to make
                                    you an offer will help you make better career choices.
                                    You might just ask the interviewer how soon they are
                                    willing to fill the post during your interview.
                                    -When you ask this question, you'll have an idea of
                                    when you'll hear back from the interviewer.
                                    
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading56">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse56" aria-expanded="false" aria-controls="collapse56">
                                How can I make a great impression during the interview?
                            </button>
                        </h2>
                        <div id="collapse56" class="accordion-collapse collapse" aria-labelledby="heading56" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    You must prepare ahead of time for the interview in
                                    order to make a fantastic first impression. Start
                                    preparing as soon as you receive an invitation to
                                    impress your prospective employer, rather than waiting
                                    until the day of the interview.
                                    
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <h4 class="fw-bold" >GENERAL QUESTIONS</h4>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading57">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse57" aria-expanded="false" aria-controls="collapse57">
                                How long will it take me to land a job after graduation?

                            </button>
                        </h2>
                        <div id="collapse57" class="accordion-collapse collapse" aria-labelledby="heading57" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    The time it will take you to find work after graduation
                                    is uncertain because several factors influence how
                                    quickly you will find work. The earlier you receive the
                                    correct information and tools (CV, cover letter) to land
                                    a job, the better
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading58">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse58" aria-expanded="false" aria-controls="collapse58">
                                How much will I likely earn in my
                                first job?
                            </button>
                        </h2>
                        <div id="collapse58" class="accordion-collapse collapse" aria-labelledby="heading58" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Gone are the days when firms published their
                                    compensation structures and when a university
                                    diploma guaranteed a high salary. The employment
                                    market nowadays is more skill-based, which implies
                                    that the more in-demand abilities you have, the more
                                    money you can make.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading59">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse59" aria-expanded="false" aria-controls="collapse59">
                                How can I earn a good salary in my
                                first job?
                                
                            </button>
                        </h2>
                        <div id="collapse59" class="accordion-collapse collapse" aria-labelledby="heading59" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Obtaining in-demand talents that businesses seek in job
                                    prospects is one approach to earn a good wage in your
                                    first job. When it comes to negotiating a job's wage,
                                    learning in-demand talents like programming or video
                                    editing will give you a leg up. Targeting multi-national
                                    corporations is another way to get a decent income in
                                    your first job. If you want to work for one of these
                                    companies, you may follow them on social media to be
                                    notified when a position becomes available.
                                    
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading60">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse60" aria-expanded="false" aria-controls="collapse60">
                                What skills do I need to get a 6-
                                figure job?
                            </button>
                        </h2>
                        <div id="collapse60" class="accordion-collapse collapse" aria-labelledby="heading60" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Your ability is a key determining element in obtaining a
                                    high-paying job. There are numerous in-demand
                                    abilities that might help you earn well. Acquiring a skill
                                    does not always imply good compensation; your value
                                    in a given function is determined by your proficiency.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading61">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse61" aria-expanded="false" aria-controls="collapse61">
                                What skill are employers looking
                                for in job seekers?
                            </button>
                        </h2>
                        <div id="collapse61" class="accordion-collapse collapse" aria-labelledby="heading61" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Many people think of hard talents when we discuss
                                    abilities. Employers like to hire people with specific
                                    hard talents, which is why they post job openings. Many
                                    eligible people apply for a job after it is advertised.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading62">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse62" aria-expanded="false" aria-controls="collapse62">
                                What do employers want from job
                                seekers?
                                
                            </button>
                        </h2>
                        <div id="collapse62" class="accordion-collapse collapse" aria-labelledby="heading62" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    What an employer looks for in job candidates differs
                                    depending on the type of work the job seeker seeks and
                                    who the employer deems an ideal prospect. Aside from
                                    the work requirements, there are a few characteristics
                                    that employers look for in job applicants.
                                </p>
                            </div>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading63">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse63" aria-expanded="false" aria-controls="collapse63">
                                Can I get a job by sending a cold email to employers?
                            </button>
                        </h2>
                        <div id="collapse63" class="accordion-collapse collapse" aria-labelledby="heading63" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Yes, you can acquire a job by sending employers cold
                                    emails. Even though many people believe that sending
                                    cold emails to the wrong person is a dangerous job
                                    search approach, you can still obtain good employment
                                    prospects by doing so (HR manager, CEO, etc.). While
                                    some businesses frown upon job seekers sending cold
                                    emails, others view it as a sign of interest and readiness
                                    to work.
                                </p>
                            </div>
                        </div>
                    </div><br><br><br>
                </div>
            </div>
        </section>   
    </div>        

    <footer class="page-footer shadow-sm"><br>
        <div class="container-fluid text-start text-md-left mt-5">
            <div class="row">
				<div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">JOB SEEKER</h6>
                  
                    <ul class="list-unstyled">
                        <li class="my-0"><a href="#" class="text-dark">Register</a></li>
                        <li class="my-0"><a href="#" class="text-dark">Job Search</a></li>
                        <li class="my-0"><a href="#" class="text-dark">How it works</a></li>
                    </ul>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">EMPLOYER</h6>
                    

                    <ul class="list-unstyled">
                        <li class="my-0"><a href="#" class="text-dark">Register</a></li>
                        <li class="my-0"><a href="#" class="text-dark">Post a job</a></li>
                        <li class="my-0"><a href="#" class="text-dark">How it works</a></li>

                    </ul>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">OTHER INFORMATIONS</h6>
                    
                    <ul class="list-unstyled">
                        <li class="my-0"></i> <a href="#aboutus" class="text-dark">About us</a></li>
                        <li class="my-0"></i> <a href="#faq" class="text-dark">FAQ</a></li>
                        <li class="my-0"></i> <a href="termsandcondition.php" class="text-dark">Terms and conditions</a></li>
                        <li class="my-0"></i><a href="privacypolicy.php" class="text-dark">Privacy Policy</a></li>
                        <li class="my-0"></i> <a href="termsofuse.php" class="text-dark">Terms of use</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mx-auto mb-4 text-center">
                    <h6 class="text-uppercase font-weight-bold">CONTACT US</h6>
                    
                    <ul class="list-unstyled d-flex">
                        <img class="my-0" src="image/gmail.png" alt="logo" href="#" style="width: 50px; height: 25px">
                        concerns.techploymentph@gmail.com
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="container-fluid bg-white text-center">
        <h5 class="mt-5 ms-2"> Copyrignt © TechPloyment 2022. All Rights Reserved. Developed by MCC Interns 2022, Job Portal</h5>
        <br>
    </div>

    <script src="js/contactus.js"></script>
</body>
</html>
