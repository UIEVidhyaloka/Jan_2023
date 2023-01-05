<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evidyaloka-donate</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        setInterval(function() {
            $(".alert").fadeOut();
        }, 3000);
    </script>
</head>

<body>
    <?php session_start(); ?>
    <nav class="navbar navbar-expand-lg fixed-top bg-white">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="../index.html">
                <img src="../assets/Image/evidyalogo.jpg" alt="pre-logo" class="img-fluid logo1" width="55px" height="50px">
                <img src="../assets/Image/evidyaban_1000x250.png" alt="logoImg" class="img-fluid logo2" width="275px" height="75px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-end" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-color" href="./Home.html">LOGIN</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-color" href="./Home.html">Home</a>
                    </li>
                    <li class="nav-item line">
                        |
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  nav-link-color" aria-current="page" href="./AboutUs.html">AboutUs</a>
                    </li>
                    <li class="nav-item line">
                        |
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-color" href="./Volunteer.html">Volunteer</a>
                    </li>
                    <li class="nav-item line">
                        |
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./donate.php">Donate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="img-margin">
            <img src="../assets/Image/donate-banner.png" alt="banner-img" class="img-fluid">
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2 class="head-color donate-1st-head mt-3 mt-md-5">"Support 1 child"</h2>
                <h1 class="nav-link-color donate-us-2nd-head"> INR 1,000</h1>
                <div class=" d-flex justify-content-md-end justify-content-center align-items-baseline">
                    <div class="text-right me-3 genral-contribution-css">
                        <p class=" mb-0">Genral</p>
                        <p> Contribution</p>
                    </div>
                    <div class="d-flex  flex-column align-items-end">
                        <div class="">
                            <input type="number" name="1child" id="1child" placeholder="&#8377 1,000" class="shadow px-5 py-3 border-0 donate-input">
                        </div>
                        <div class="btn btn-primary donate-btn-clr donate-btn-clr-1 mt-3 p-3">Donate Now</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <img src="../assets/Image/donate1.png" alt="donate-img" class="img-fluid mx-auto d-block mt-3 mt-md-5">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="responsive-column">
                <div class="col-md-6">
                    <div>
                        <img src="../assets/Image/donate2.png" alt="donate-img" class="img-fluid mx-auto d-block mt-3 mt-md-5">
                    </div>
                </div>
                <div class="col-md-6 ">
                    <h2 class="head-color  donate-1st-head mt-3 mt-md-5">"Support 3 child"</h2>
                    <h1 class="nav-link-color  donate-us-2nd-head"> INR 3,000</h1>
                    <div class=" d-flex mt-3 justify-content-md-end justify-content-center   align-items-baseline">
                        <div class="text-right me-3 genral-contribution-css">
                            <p class=" mb-0">Genral</p>
                            <p> Contribution</p>
                        </div>
                        <div class="d-flex flex-column align-items-end">
                            <div class="">
                                <input type="number" name="1child" id="1child" placeholder="&#8377 3,000" class="shadow px-5 py-3 border-0 donate-input">
                            </div>
                            <div class="btn btn-primary donate-btn-clr donate-btn-clr-1 mt-3 p-3">Donate Now</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2 class="head-color donate-1st-head mt-3 mt-md-5">"Support 5 child"</h2>
                <h1 class="nav-link-color donate-us-2nd-head"> INR 5,000</h1>
                <div class=" d-flex mt-3   justify-content-md-end justify-content-center align-items-baseline">
                    <div class="text-right me-3 genral-contribution-css">
                        <p class=" mb-0">Genral</p>
                        <p> Contribution</p>
                    </div>
                    <div class="d-flex flex-column align-items-end">
                        <div class="">
                            <input type="number" name="1child" id="1child" placeholder="&#8377 5,000" class="shadow px-5 py-3 border-0 donate-input">
                        </div>
                        <div class="btn btn-primary donate-btn-clr donate-btn-clr-1 mt-3 p-3">Donate Now</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <img src="../assets/Image/donate3.png" alt="donate-img" class="img-fluid mx-auto d-block mt-3 mt-md-5">
                </div>
            </div>
        </div>
        <div class="mt-lg-5 mt-3">
            <div class="row bg-color-genral">
                <h3 class="nav-link-color mt-lg-5 mt-3"> Program Impact </h3>
                <div class="d-flex justify-content-around flex-wrap">
                    <div class="d-flex flex-column align-items-center">
                        <div>
                            <img src="../assets/Image/pim-1.png" alt="img" class="img-fluid">
                        </div>
                        <h4 class="head-color">15,000+</h4>
                        <p>Student Learning Online</p>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <div>
                            <img src="../assets/Image/p-im-2.png" alt="img" class="img-fluid">
                        </div>
                        <h4 class="head-color">25,00,000+</h4>
                        <p>Student Learning through television</p>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <div>
                            <img src=" ../assets/Image/p-im-3.png" alt="img" class="img-fluid">
                        </div>
                        <h4 class="head-color">2,500</h4>
                        <p class="mb-0">Volunteers teaching </p>
                        <p>& Creating content</p>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <div>
                            <img src="../assets/Image/p-im-4.png" alt="img" class="img-fluid">
                        </div>
                        <h4 class="head-color">11 states</h4>
                        <p><span class="head-color fs-4">6</span> Languages</p>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <div>
                            <img src="../assets/Image/p-im-5.png" alt="img" class="img-fluid">
                        </div>
                        <h4 class="head-color">245+</h4>
                        <p>Villages</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="nav-link-color mt-lg-5 mt-3"> Together, we can ensure Rural India continues to learn </h3>
                <p class="mt-lg-2 mt-1">
                    The COVID-19 pandemic has shown us how challenging it is for children in rural and semi-urban areas
                    to access quality education, whether online or offline. The effect of the lockdown has brought
                    education to a standstill for millions of rural children. Since 2011, e Vidyaloka has been using
                    technology to empower rural children by connecting passionate volunteers across the globe, online.
                    While students in cities attend online classes from the comfort of their homes, most students across
                    Rural India have limited access to Internet-enabled devices and teachers equipped to teach online.
                    While we can reach students through our existing programs, there are still many children in danger
                    of being pushed out of formal education, and the marginalized populations, as always, remain at a
                    greater risk. In our endeavour to ensure that no child is deprived of learning, eVidyaloka is
                    focusing on a multi-delivery approach to ensure more children are reached outside of the Digital
                    Classroom Program, by piloting Digital School. It is a multi-delivery approach to ensure more
                    children are reached. This is an outside school learning opportunity and intervention for children.
                    This approach enables learning for a child from TV lesson broadcasts, printed workbooks &
                    worksheets, and an online app. Our goal this year is to support these children, and reach out to
                    more, so that no child is left-out of learning.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <section id="form-view" class="mt-lg-5 ">
                    <h2 class="head-color">Inquiry for other kinds of donation</h2>
                </section>
                <p>(support a school/donation in kind/CSR inquiry)</p>

                <?php
                if (isset($_SESSION["s_msg"])) {
                ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> <?php echo  $_SESSION["s_msg"]; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php    } elseif (isset($_SESSION["f_msg"])) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong> <?php echo  $_SESSION["f_msg"]; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php  }

                session_destroy();

                ?>

                <form method="post" name="emailform" action="email.php">
                    <div class="form-group mt-3">
                        <input type="Name" name="fullname" class="form-control pb-5" id="Name" placeholder="Name" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type=" number" name="ph_number" class="form-control pb-5" id="Number" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type=" email" name="email" class="form-control pb-5" id="Email" aria-describedby="emailHelp" placeholder="Email ID" required>
                    </div>
                    <textarea class="form-control text-area mt-3" name="message" id=" Textarea" placeholder="Input Field" rows="3" required></textarea>
                    <button type="submit" class="btn btn-primary mt-3 float-end donate-btn-clr w-25">Register</button>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="mt-lg-5 mt-3">
                    <img src="../assets/Image/charity-img.png" alt="charity-img" class="img-fluid ">
                </div>
                <!-- charity-img -->
            </div>
        </div>

        <div class="row bg-color-genral mt-lg-5 mt-3">
            <h2 class="nav-link-color mt-3">Testimonials</h2>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="d-flex align-items-center d-flex-responsive ">
                                <div class="d-flex flex-column align-items-center p-3">
                                    <div class="test-img">
                                        <img src="../assets/Image/testimonial1.jpg" alt="test-img" class="img-fluid mx-auto d-block br-50">
                                    </div>
                                    <div class="text-center">
                                        <p class="mt-1 mb-0">Madhukar B.K</p>
                                        <p class="mb-0">Individual Donor, Bangalore</p>
                                    </div>
                                </div>
                                <div class="para-testi px-3 pb-5 ">
                                    <p>
                                        Education for kids has always been something which I strongly believe in. Teach them
                                        young
                                        and
                                        watch them grow into fine young adults !! I have been doing a small bit for multiple
                                        years
                                        now
                                        and hope to be able to continue doing it in the coming times.
                                    </p>
                                </div>
                                <div class="d-flex flex-column align-items-center p-3">
                                    <div class="test-img">
                                        <img src="../assets/Image/Testimonial - Sampa.jpg" alt="test-img" class="img-fluid  br-50 mx-auto d-block">
                                    </div>
                                    <div class=" text-center">
                                        <p class="mt-1 mb-0">Sampa Chatterjee</p>
                                        <p class="mb-0">Individual Donor, Kolkata</p>
                                    </div>
                                </div>
                                <div class="para-testi px-3 pb-5 ">
                                    <p>
                                        To educate students deprived of education is not an easy task. My best wishes to the team and their efforts
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="d-flex  align-items-center d-flex-responsive ">
                                <div class="d-flex flex-column align-items-center p-3">
                                    <div class="test-img">
                                        <img src="../assets/Image/person-fill.svg" alt="test-img" class="mx-auto d-block br-50 height-20vh>
                                    </div>
                                    <div class=" text-center">
                                        <p class="mt-1 mb-0">Donor</p>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                                <div class="para-testi px-3 pb-5 ">
                                    <p>I'm very proud to feel that I'm able to do something for uplifting rural children. I would like to continue my support towards this great cause & my dream too to transform rural & remote places into an education & skill development hub. eVidyaloka is one such platform which goes beyond that. Every child must get their basic education with confidence. </p>
                                </div>
                                <div class="d-flex flex-column align-items-center p-3">
                                    <div class="test-img">
                                        <img src="../assets/Image/Testimonial - Haresh.jpg" alt="test-img" class="img-fluid mx-auto d-block br-50">
                                    </div>
                                    <div class="text-center">
                                        <p class="mt-1 mb-0">Haresh Velusamy</p>
                                        <p class="mb-0">Individual Donor, Bangalore</p>
                                    </div>
                                </div>
                                <div class="para-testi px-3 pb-5">
                                    Happy to be a small part of the change makers of today’s India. Great impact being
                                    done
                                    by
                                    eVidyaloka!
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="mt-lg-5">
            <div class="row">
                <div class="col-lg-7">
                    <h3 class="nav-link-color "> Frequently Asked Questions</h3>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Do I get receipts for the Sponsorships made?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">We will be sharing an 80G receipt to the registered email ID
                                    within
                                    14 days.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    What will my donation do?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Digital Classroom Model: Your donation will help us to cover the operating cost
                                        involved
                                        in delivering quality education to children across Rural India. This enables
                                        access to
                                        education using technology, deploying new volunteer teachers, developing
                                        educational
                                        content, logistics and administration management. This is accomplished with the
                                        support
                                        of local partners who work to mobilise the community.
                                    </p>
                                    <p>
                                        Digital School Platform: Your donation will help us to facilitate the education
                                        of 100
                                        children through a multi-modal delivery approach. Enabling a child to learn
                                        through
                                        ready to consume content – through app/television. Along with deploying
                                        volunteer
                                        teachers for doubt clearing sessions, logistics and administration management.
                                        This will
                                        be accomplished with the support of local partners who will be the Community
                                        Connectors
                                        for the Digital School
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    What does the donation towards a Digital School do?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">This donation covers the cost of establishing a Digital
                                    School and
                                    enables 100 children to learn through video sessions, worksheets and television and
                                    facilitated by our on-ground Community Connector. You can know more AboutUS Digital
                                    School
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    What does set-up of a Digital Classroom mean?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">This donation covers the cost towards the infrastructural
                                    set-up –
                                    Computer, LED TV Screen, Camera, UPS and Modem. This infrastructure will help
                                    establish a
                                    Digital Classroom in an identified school in a remote village, through which online
                                    classes
                                    can be conducted.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Can I support eVidyaloka in any other way?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">You can adopt a Digital Classroom for 1 year in an existing
                                    or new
                                    school. We are also accepting the donation of gadgets to support our learning
                                    programs.
                                    Please write to donate@evidyaloka.org to know more. Alternatively, you can volunteer
                                    donate@evidyaloka.org to know more. Alternatively, you can volunteer your time to
                                    teach and
                                    create content or partner with us to run Digital Schools.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    What does set-up of a Digital Classroom mean?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Please visit our General FAQ section or write to
                                    talktosomeone@evidyaloka.org.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    I am an organisation and looking to partner with eVidyaloka to support a school. How
                                    can I
                                    take this forward?
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Please write to donate@evidyaloka.org and we can set-up a
                                    meeting to
                                    understand the requirement</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                    Will I get Tax exemptions on my donations?
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Yes, donations made to eVidyaloka Trust are exempt from tax under Section 80G of
                                        the
                                        Income Tax Act. This tax exemption is applicable only for donations made by
                                        Indian
                                        Citizens and organisations eligible for this exemption. Upon confirmation of
                                        your
                                        donation, we will share the donation receipt with you within 14 days. An NRI or
                                        Foreign
                                        Donor can donate to us through Give India. Donations through the platform, can
                                        receive
                                        the 501(c)(3) and Gift Aid exemptions based on the location and currency
                                        preference.
                                        Follow the donation process on our website, and it will redirect you to Give
                                        India page
                                        for the final transaction.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 ">
                    <div>
                        <img src="../assets/Image/donate-answer.png" alt="donate-img" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
        <div class="row col-md-10">
            <div class="">
                <h3 class="nav-link-color mt-lg-5 mt-3 "> Key info :</h3>
                <ul class="style-type-none p-0">
                    <li class=""> Donations made to eVidyaloka Trust are exempt from tax under Section 80G of
                        the
                        Income Tax Act.</li>
                    <li class="mt-3">For any further assistance, write to donate@evidyaloka.org</li>
                    <li class="mt-3">Whatsapp for real-time inquires - +91 6361517776</li>
                </ul>
            </div>
        </div>
        <div class="row bg-color-genral">
            <div class="col-12 ">
                <h2 class="nav-link-color ms-0 ms-lg-3 mt-3 mt-md-5">Enable the transformation!</h2>
            </div>
            <div class="col-md-5">
                <!-- <div class="d-flex justify-content-end"> -->
                <div class="text-md-end text-center  mt-0 mt-md-5 genral-contribution-css">
                    <p class=" mb-0">Genral</p>
                    <p> Contribution</p>
                </div>
                <!-- </div> -->
            </div>
            <div class="col-md-7">
                <div class="d-flex flex-column align-items-md-start ms-3 ms-md-0">
                    <ul class="nav nav-pills " id="pills-tab" role="tablist">
                        <li class="nav-item border-li" role="presentation">
                            <button class="nav-link active border-btn" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <span>&#8377</span> 1000</button>
                        </li>
                        <li class="nav-item border-li" role="presentation">
                            <button class="nav-link border-btn" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> <span>&#8377</span> 3,000</button>
                        </li>
                        <li class="nav-item border-li" role="presentation">
                            <button class="nav-link border-btn" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><span>&#8377</span> 5,000</button>
                        </li>
                    </ul>
                    <div class="d-flex  justify-content-between align-items-sm-center border-content  border-content-w shadow flex-column flex-sm-row border-content-p ">
                        <div class="tab-content text-center text-sm-start" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <input type="number" name="number" value="1000">
                                <div class=" me-sm-3 me-0 my-3 my-sm-0  genral-contribution-css">
                                    <p class=" mb-0">Support 1 child</p>
                                </div>
                            </div>
                            <div class="tab-pane fade show " id="pills-profile" role="tabpanel" aria-labelledby="pills-home-tab">
                                <input type="number" name="number" value="3000">
                                <div class=" me-sm-3 me-0 my-3  my-sm-0 genral-contribution-css">
                                    <p class=" mb-0">Support 3 child</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <input type="number" name="number" value="5000">
                                <div class=" me-sm-3 me-0 my-3  my-sm-0 genral-contribution-css">
                                    <p class=" mb-0">Support 5 child</p>
                                </div>
                            </div>
                        </div>
                        <div class="btn btn-primary donate-btn-clr">Donate Now</div>
                    </div>
                    <p class="mt-3">Donations made to eVidyaloka Trust are exempt from tax under Section SoG of the
                        Income Tax Act.
                    </p>
                </div>
            </div>
            <div class="footer my-3">
                <p class=" ms-3 my-3 text-center text-md-start ">© eVidyaloka Trust 2016 |Terms of Service Privacy</p>
            </div>
        </div>
        <script src=" https://smtpjs.com/v3/smtp.js"></script>
        <!-- <script>
                function register() {
                    Email.send({
                        Host: "smtp.zoho.in",
                        UserName: "manoj@piquota.com",
                        Password: "Nainika@18N",
                        Port: 25,
                        To: 'manojsundaram6106@gmail.com',
                        From: "manoj@piquota.com",
                        Subject: "The inquery form",
                        Body: "Name" + document.getElementById("Name").value
                            + "Email" + document.getElementById("Email").value
                            + "Phone Number" + document.getElementById("Number").value
                            + "Message" + document.getElementById("Textarea").value
                    }).then(function (message) {

                        alert("Email sent successfully")

                    })
                    .catch (
                        (error) => {
                        console.log(error);
                    }                       
                    );
                }
            </script> -->
</body>

</html>