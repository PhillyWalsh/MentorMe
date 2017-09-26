<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    if (!isset($_GET['param'])) {
        //header('Location: https://www.aibdatahack.com');
    }else{
        include "Datacalls/getMentorDetails.php";
        if ($_SERVER['AIB'] == 'NO'){
            $staffidtoshow = $_GET['param'];
        }else{

            if ( substr(base64_decode($_GET['param']),0,3)  == 'PRD' ) {
                $staffidtoshow = substr(base64_decode($_GET['param']), 4);
            }else{
                $staffidtoshow = substr(base64_decode($_GET['param']), 3);
            }
        }
    }
    ?>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MentorMe | Mentors</title>
    <meta name="description" content="">

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200)
                    ;
                    $('#blah')
                        .css("visibility", "visible");
                };

                reader.readAsDataURL(input.files[0]);
            }
        }


    </script>

</head>
<!--/head-->

<body>
<header id="header">
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php"><img src="images/bcslogo.png" class="fa fa-bolt"> MentorMe</a> </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="http://digitalinnovation.aib.pri/mentorme/public_html/mentee.php">Mentees</a></li>
                    <li class="active" ><a href="#">Mentors</a></li>
                    <li><a href="faq.html">FAQ & NSFAQ</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->

</header>
<!--/header-->
<div class="color-border"> </div>
<section id="inner-page">
    <div class="container">
        <div class="center" >
            <h2>Mentors</h2>
            <p class="lead" >Welcome to the Mentors page. Here you can tell us about your key leadership competencies and skills,<br> get tips
                to be a brilliant mentor, and see the Mentees that have been assigned to you.

            </p>

        </div>

        <div class="about-us">
            <div class="row">


                <div class="col-md-6 col-sm-6"><img src="images/stageone.png" class="img-responsive" alt=""/> </div>


                <div class="col-md-6 col-sm-6">
                    <h2>How it All Works</h2>

                    <p class="justify"><strong>Stage One - About You</strong><br>
                        Fill in the short questionnaire below. Your information will be processed by our recommendation engine, built using data science techniques.</p>
                    <p class="justify"><strong>Stage Two - Notified When You Are Matched</strong><br>
                        BCS staff seeking a mentor will be inputting similar information; our engine will match up to three Mentees for you to mentor. You will get an email with a link back to this site each time you have a new Mentee.</p>
                    <p class="justify"><strong>Stage Three - Tracking Meetings</strong><br>
                        You should meet your Mentees at least 3 times over the next 6 months. You can view your Mentees on this site.</p>
                    <p class="justify"><strong>Tips and Guides</strong><br>
                        This site also provides tips and guides to be an excellent mentor. You can return to this site at any time to access these.
                    </p>
                </div>
                <!--/.col-md-4-->
            </div>
            <!--/.row-->
        </div>
    </div>
    <!--/.container-->
</section>
<!--/inner-page-->

<div class="color-border"> </div>
<section id="blurb" class="service-item">
    <div class="container blurb">
        <div class="center blurb">
            <h2 class="whitetext">All About You</h2>
            <p class="lead whitetext">Please fill in and save this short questionaire, we'll use the answers to <br>
                automatically match you with Mentees, who will answer the same questions.</p>
            <h3 class="whitetext centerBlock">(items with an * are mandatory)</h3>
        </div>
    </div>
</section>

<section id="middle">
    <div class="container">

        <form name="form1" id="signup" action="./" method="post" onsubmit="" enctype="multipart/form-data">

            <div class="row">
                <!--
                <div class="centerQ">
                    <h2>Questionaire</h2>
                </div>
                -->

 <h2 class="headingQ">I'm experienced in*</h2>
                        <h3 class="headingQ">(pick all that apply - at least one)</h3>

                <div class="col-sm-6">
                    <div class="centerBlock">


                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="operations" name="1" class="btn btn-primaryQ unselbtn"  <?php  if  ( in_array('1',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?>  onclick="setColor('operations');">Active Operations Management</button>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="business" name="2" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('2',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('business');">Business Relationship Management</button>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="customer" name="3" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('3',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('customer');">Customer Relationship Management</button>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="data" name="4" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('4',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('data');">Data / Analytics</button>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="development" name="5" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('5',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('development');">Development</button>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="digital" name="6" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('6',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('digital');">Digital</button>
                            </div>
                        </div>

<div class="media">
                            <div class="media-body">
                                <button type="button" id="equity" name="23" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('23',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('equity');">Equity/Advisory/Mezz Finance</button>
                            </div>
                        </div>


                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="finance" name="7" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('7',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('finance');">Finance</button>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="forming" name="8" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('8',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('forming');">Forming new teams</button>
                            </div>
                        </div>

<div class="media">
 <div class="media-body">
                                <button type="button" id="fraudsecurity" name="16" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('16',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('fraudsecurity');">Fraud & Security</button>
                            </div>
                        </div>


<div class="media">
                            <div class="media-body">
                                <button type="button" id="hr" name="20" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('20',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('hr');">HR</button>
                            </div>
                        </div>



                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="leading" name="9" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('9',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('leading');">Leading teams through change</button>
                            </div>
                        </div>


</div></div>

 <div class="col-sm-6">

                    <div class="centerBlock">



<div class="media">
<div class="media-body">
                                <button type="button" id="legal" name="17" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('17',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('legal');">Legal Contracts</button>
                            </div>
                        </div>


<div class="media">
                            <div class="media-body">
                                <button type="button" id="leverage" name="25" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('25',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('leverage');">Leveraged Finance</button>
                            </div>
                        </div>


<div class="media">
                            <div class="media-body">
                                <button type="button" id="managingpeople" name="22" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('22',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('managingpeople');">Managing and Developing People</button>
                            </div>
                        </div>



<div class="media">
                            <div class="media-body">
                                <button type="button" id="marketing" name="19" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('19',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('marketing');">Marketing</button>
                            </div>
                        </div>



                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="project" name="10" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('10',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('project');">Project & Change Management</button>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="property" name="11" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('11',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('property');">Property</button>
                            </div>
                        </div>

 <div class="media">
                            <div class="media-body">
                                <button type="button" id="proplend" name="24" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('24',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('proplend');">Property Lending</button>
                            </div>
                        </div>


                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="service" name="12" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('12',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('service');">Service Management</button>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="strategy" name="14" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('14',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('strategy');">Strategy Development</button>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="supplier" name="13" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('13',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('supplier');">Supplier Relationship Management</button>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-body">
                                <button type="button" id="riskcontrol" name="15" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('15',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('riskcontrol');">Risk / Control</button>
                            </div>
                        </div>

<div class="media">
 <div class="media-body">
                                <button type="button" id="compliance" name="18" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('18',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('compliance');">Regulation, Compliance & Conduct</button>
                            </div>
                        </div>


<div class="media">
                            <div class="media-body">
                                <button type="button" id="treasury" name="21" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('21',$myArray)){echo 'value ="1" style="background-color: #66b83a;"';  }else{ echo 'value ="0";';} ?> onclick="setColor('treasury');">Treasury</button>
                            </div>
                        </div>


                    </div>

</div>



                </div>
<br><br> <h2 class="headingQ">I love to lead by*</h2>
                            <h3 class="headingQ">(pick your top three)</h3>

                <div class="col-sm-6" id="centercenter">
                    <div>
                        <div class="centerBlock">


                            <div class="media"> <!--<i class="fa fa-check-square-o pull-left fa-3x iconcolor"></i>-->
                                <div class="media-body">
                                    <button type="button" id="advocate" name="1" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('1',$myArrayC)){echo 'value ="3" style="background-color: #66b83a;"';  }else{ echo 'value ="2";';} ?> onclick="setColor('advocate');">Advocate for Customers</button>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <button type="button" id="brave" name="2" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('2',$myArrayC)){echo 'value ="3" style="background-color: #66b83a;"';  }else{ echo 'value ="2";';} ?> onclick="setColor('brave');">Be Brave</button>

                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <button type="button" id="authentic" name="3" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('3',$myArrayC)){echo 'value ="3" style="background-color: #66b83a;"';  }else{ echo 'value ="2";';} ?> onclick="setColor('authentic');">Be Authentic & Build Trust</button>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <button type="button" id="vision" name="4" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('4',$myArrayC)){echo 'value ="3" style="background-color: #66b83a;"';  }else{ echo 'value ="2";';} ?> onclick="setColor('vision');">Communicate Vision and Purpose</button>
                                </div>
                            </div>

                            <div class="media">
                                <div class="media-body">
                                    <button type="button" id="empower" name="5" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('5',$myArrayC)){echo 'value ="3" style="background-color: #66b83a;"';  }else{ echo 'value ="2";';} ?> onclick="setColor('empower');">Empower & Create Ownership</button>
                                </div>
                            </div>

                            <div class="media">
                                <div class="media-body">

                                    <button type="button" id="talent" name="6" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('6',$myArrayC)){echo 'value ="3" style="background-color: #66b83a;"';  }else{ echo 'value ="2";';} ?> onclick="setColor('talent');">Develop Talent & Teams</button>
                                </div>
                            </div>

</div></div></div>
 <div class="col-sm-6" id="centercenter">
                        <div class="centerBlock">



                            <div class="media">
                                <div class="media-body">

                                    <button type="button" id="provide" name="7" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('7',$myArrayC)){echo 'value ="3" style="background-color: #66b83a;"';  }else{ echo 'value ="2";';} ?> onclick="setColor('provide');">Provide Strategic Perspective</button>
                                </div>
                            </div>

                            <div class="media">
                                <div class="media-body">

                                    <button type="button" id="innovate" name="8" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('8',$myArrayC)){echo 'value ="3" style="background-color: #66b83a;"';  }else{ echo 'value ="2";';} ?> onclick="setColor('innovate');">Innovate & Create</button>
                                </div>
                            </div>

                            <div class="media">
                                <div class="media-body">

                                    <button type="button" id="drive" name="9" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('9',$myArrayC)){echo 'value ="3" style="background-color: #66b83a;"';  }else{ echo 'value ="2";';} ?> onclick="setColor('drive');">Drive Commercial Acumen</button>
                                </div>
                            </div>

                            <div class="media">
                                <div class="media-body">

                                    <button type="button" id="streamline" name="10" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('10',$myArrayC)){echo 'value ="3" style="background-color: #66b83a;"';  }else{ echo 'value ="2";';} ?> onclick="setColor('streamline');">Streamline & Simplify</button>
                                </div>
                            </div>

                            <div class="media">
                                <div class="media-body">

                                    <button type="button" id="build" name="11" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('11',$myArrayC)){echo 'value ="3" style="background-color: #66b83a;"';  }else{ echo 'value ="2";';} ?> onclick="setColor('build');">Build Collaboration</button>
                                </div>
                            </div>

                            <div class="media">
                                <div class="media-body">

                                    <button type="button" id="navigate" name="12" class="btn btn-primaryQ unselbtn" <?php  if  ( in_array('12',$myArrayC)){echo 'value ="3" style="background-color: #66b83a;"';  }else{ echo 'value ="2";';} ?> onclick="setColor('navigate');">Navigate Ambiguity</button>
                                </div>
                            </div>


                            <br>


                        </div>



                    </div>
                </div>
            </div>

            <br><br>


<div class = "row">
<div class="col-sm-12">
<div class="centerBlock" style="margin-left:10%;margin-right:10%;" >



            <div class="col-md-6" id="centercenter1">

                <div class="centerBlock">
                    <h2 class="headingQ">Area of BCS*</h2>
                    <p class="centerBlock">(that you work in)</p>
                    <br>
                    <div class="form-group">
                        <select class="form-control drops" id="sel1">
                            <option value="0" >Please select</option>
                            <?php  if ($resbusiness == '1') {echo '<option value="1" selected="selected" >COO – Governance, Reporting & Control</option>';}  else { echo '<option value="1">COO – Governance, Reporting & Control</option>';}?>
<!--
                            <?php  if ($resbusiness == '2') {echo '<option value="2" selected="selected" >BPS – Head of BPS</option>';}  else { echo '<option value="2" >BPS – Head of BPS</option>';}?>
-->    
                        <?php  if ($resbusiness == '3') {echo '<option value="3" selected="selected" >Group Security Services</option>';}  else { echo '<option value="3">Group Security Services</option>';}?>
                            <?php  if ($resbusiness == '4') {echo '<option value="4" selected="selected" >Property & Facilities</option>';}  else { echo '<option value="4">Property & Facilities</option>';}?>
                            <?php  if ($resbusiness == '5') {echo '<option value="5" selected="selected" >Strategic Sourcing</option>';}  else { echo '<option value="5">Strategic Sourcing</option>';}?>
                            <?php  if ($resbusiness == '6') {echo '<option value="6" selected="selected" >COO – Office of the COO</option>';}  else { echo '<option value="6">COO – Office of the COO</option>';}?>

                            <?php  if ($resbusiness == '8') {echo '<option value="8" selected="selected" >CS – Head of Customer Services</option>';}  else { echo '<option value="8">CS – Head of Customer Services</option>';}?>
                            <?php  if ($resbusiness == '9') {echo '<option value="9" selected="selected" >CS – CS Performance Management</option>';}  else { echo '<option value="9">CS – CS Performance Management</option>';}?>
                            <?php  if ($resbusiness == '10') {echo '<option value="10" selected="selected" >CS – Customer Accounts & Cash Operations</option>';}  else { echo '<option value="10">CS – Customer Accounts & Cash Operations</option>';}?>
                            <?php  if ($resbusiness == '11') {echo '<option value="11" selected="selected" >CS – Ops Transformation & Change</option>';}  else { echo '<option value="11">CS – Ops Transformation & Change</option>';}?>
                            <?php  if ($resbusiness == '12') {echo '<option value="12" selected="selected" >CS – Payments, Cards & Treasury Services</option>';}  else { echo '<option value="12">CS – Payments, Cards & Treasury Services</option>';}?>
                            <?php  if ($resbusiness == '13') {echo '<option value="13" selected="selected" >CS – Personal Lending Operations</option>';}  else { echo '<option value="13">CS – Personal Lending Operations</option>';}?>

                            <?php  if ($resbusiness == '14') {echo '<option value="14" selected="selected" >Direct Service</option>';}  else { echo '<option value="14">Direct Service</option>';}?>


                            <?php  if ($resbusiness == '15') {echo '<option value="15" selected="selected" >Digital – Office of the CDO</option>';}  else { echo '<option value="15">Digital – Office of the CDO</option>';}?>
                            <?php  if ($resbusiness == '16') {echo '<option value="16" selected="selected" >Digital – Customer and Channels Technology</option>';}  else { echo '<option value="16">Digital – Customer and Channels Technology</option>';}?>
                            <?php  if ($resbusiness == '17') {echo '<option value="17" selected="selected" >Digital – Data</option>';}  else { echo '<option value="17">Digital – Data</option>';}?>
                            <?php  if ($resbusiness == '18') {echo '<option value="18" selected="selected" >Digital – Digital Architecture & BPM</option>';}  else { echo '<option value="18">Digital – Digital Architecture & BPM</option>';}?>
                            <?php  if ($resbusiness == '19') {echo '<option value="19" selected="selected" >Digital – Digitalisation Programme</option>';}  else { echo '<option value="19">Digital – Digitalisation Programme</option>';}?>
                            <?php  if ($resbusiness == '20') {echo '<option value="20" selected="selected" >Digital – IT Payments & IT Architecture</option>';}  else { echo '<option value="20">Digital – IT Payments & IT Architecture</option>';}?>
                            <?php  if ($resbusiness == '21') {echo ' <option value="21" selected="selected" >Digital – Payments & Cards</option>';}  else { echo '<option value="21">Digital – Payments & Cards</option>';}?>
                            <?php  if ($resbusiness == '22') {echo ' <option value="22" selected="selected" >Digital – Programmes</option>';}  else { echo '<option value="22">Digital – Programmes</option>';}?>

                             <?php  if ($resbusiness == '35') {echo ' <option value="35" selected="selected" >FSG - Business Services</option>';}  else { echo '<option value="35">FSG - Business Services</option>';}?>
							 <?php  if ($resbusiness == '55') {echo ' <option value="55" selected="selected" >FSG - Strategic Implementation Unit</option>';}  else { echo '<option value="55">FSG - Strategic Implementation Unit</option>';}?>
							 <?php  if ($resbusiness == '56') {echo ' <option value="56" selected="selected" >FSG - Customer Management</option>';}  else { echo '<option value="56">FSG - Customer Management</option>';}?>
							 <?php  if ($resbusiness == '57') {echo ' <option value="57" selected="selected" >FSG - FSG - Loan Recovery</option>';}  else { echo '<option value="57">FSG - Loan Recovery</option>';}?>
							 <?php  if ($resbusiness == '58') {echo ' <option value="58" selected="selected" >FSG - Portfolio Management</option>';}  else { echo '<option value="58">FSG - Portfolio Management</option>';}?>

                            <?php  if ($resbusiness == '24') {echo ' <option value="24" selected="selected" >GTS – Office of the CIO</option>';}  else { echo '<option value="24">GTS – Office of the CIO</option>';}?>
                            <?php  if ($resbusiness == '25') {echo ' <option value="25" selected="selected" >GTS – Edge Rollout & Test</option>';}  else { echo '<option value="25">GTS – Edge Rollout & Test</option>';}?>
                            <?php  if ($resbusiness == '26') {echo ' <option value="26" selected="selected" >GTS – Information Security</option>';}  else { echo '<option value="26">GTS – Information Security</option>';}?>
                            <?php  if ($resbusiness == '27') {echo '<option value="27" selected="selected" >GTS – IT Performance Management</option>';}  else { echo '<option value="27">GTS – IT Performance Management</option>';}?>
                            <?php  if ($resbusiness == '28') {echo ' <option value="28" selected="selected" >GTS – IT Solution Delivery</option>';}  else { echo '<option value="28">GTS – IT Solution Delivery</option>';}?>
                            <?php  if ($resbusiness == '29') {echo ' <option value="29" selected="selected" >GTS – IT Transformation</option>';}  else { echo '<option value="29">GTS – IT Transformation</option>';} ?>
                            <?php  if ($resbusiness == '30') {echo ' <option value="30" selected="selected" >GTS – ITO</option>';}  else { echo '<option value="30">GTS – ITO</option>';}?>

<!--
                            <?php  if ($resbusiness == '31') {echo ' <option value="31" selected="selected" >Property</option>';}  else { echo '<option value="31">Property</option>';}?> -->

<!--
                            <?php  if ($resbusiness == '32') {echo ' <option value="32" selected="selected" >Security Services</option>';}  else { echo '<option value="32">Security Services</option>';}?>
-->    
<!--
                        <?php  if ($resbusiness == '33') {echo ' <option value="33" selected="selected" >Strategic Sourcing</option>';}  else { echo '<option value="33">Strategic Sourcing</option>';}?>
-->    
                        <?php  if ($resbusiness == '34') {echo ' <option value="34" selected="selected" >Non BCS Area</option>';}  else { echo '<option value="34">Non BCS Area</option>';}?>

<?php  if ($resbusiness == '45') {echo ' <option value="45" selected="selected" >RACC - Collections</option>';}  else { echo '<option value="45">RACC - Collections</option>';}?>
<?php  if ($resbusiness == '46') {echo ' <option value="46" selected="selected" >RACC - Recoveries & Pre-Litigation</option>';}  else { echo '<option value="46">RACC - Recoveries & Pre-Litigation</option>';}?>
<?php  if ($resbusiness == '47') {echo ' <option value="47" selected="selected" >RACC - RCMU & Staff Business</option>';}  else { echo '<option value="47">RACC - RCMU & Staff Business</option>';}?>
<?php  if ($resbusiness == '48') {echo ' <option value="48" selected="selected" >RACC - Case management Resolutions</option>';}  else { echo '<option value="48">RACC - Case management Resolutions</option>';}?>
<?php  if ($resbusiness == '49') {echo ' <option value="49" selected="selected" >RACC - Retail Resolutions</option>';}  else { echo '<option value="49">RACC - Retail Resolutions</option>';}?>
<?php  if ($resbusiness == '50') {echo ' <option value="50" selected="selected" >RACC - Strategy & Assurance</option>';}  else { echo '<option value="50">RACC - Strategy & Assurance</option>';}?>

<?php  if ($resbusiness == '59') {echo ' <option value="59" selected="selected" >RCB - Business Transformation & Governance</option>';}  else { echo '<option value="59">RCB - Business Transformation & Governance</option>';}?>
<?php  if ($resbusiness == '60') {echo ' <option value="60" selected="selected" >RCB – Private Banking</option>';}  else { echo '<option value="60">RCB – Private Banking</option>';}?>
<?php  if ($resbusiness == '61') {echo ' <option value="61" selected="selected" >RCB - Local Market: Kerry</option>';}  else { echo '<option value="61">RCB - Local Market: Kerry</option>';}?>


 <?php  if ($resbusiness == '36') {echo ' <option value="36" selected="selected" >Risk - Financial Risk</option>';}  else { echo '<option value="36">Risk - Financial Risk</option>';}?>
<?php  if ($resbusiness == '37') {echo ' <option value="37" selected="selected" >Risk - Risk Analytics</option>';}  else { echo '<option value="37">Risk - Risk Analytics</option>';}?>
<?php  if ($resbusiness == '38') {echo ' <option value="38" selected="selected" >Risk - Operational Risk</option>';}  else { echo '<option value="38">Risk - Operational Risk</option>';}?>
<?php  if ($resbusiness == '39') {echo ' <option value="39" selected="selected" >Risk - Credit Risk</option>';}  else { echo '<option value="39">Risk - Credit Risk</option>';}?>
<?php  if ($resbusiness == '40') {echo ' <option value="40" selected="selected" >Risk - Risk Change & Control</option>';}  else { echo '<option value="40">Risk - Risk Change & Control</option>';}?>
<?php  if ($resbusiness == '41') {echo ' <option value="41" selected="selected" >Risk - Enterprise Risk Management</option>';}  else { echo '<option value="41">Risk - Enterprise Risk Management</option>';}?>
<?php  if ($resbusiness == '42') {echo ' <option value="42" selected="selected" >Risk - Credit Review</option>';}  else { echo '<option value="42">Risk - Credit Review</option>';}?>
<?php  if ($resbusiness == '43') {echo ' <option value="43" selected="selected" >Legal</option>';}  else { echo '<option value="43">Legal</option>';}?>
<?php  if ($resbusiness == '44') {echo ' <option value="44" selected="selected" >Compliance</option>';}  else { echo '<option value="44">Compliance</option>';}?>

<?php  if ($resbusiness == '51') {echo ' <option value="51" selected="selected" >WIB - Real Estate Finance</option>';}  else { echo '<option value="51">WIB - Real Estate Finance</option>';}?>
<?php  if ($resbusiness == '52') {echo ' <option value="52" selected="selected" >WIB - Advisory/Specialised Finance</option>';}  else { echo '<option value="52">WIB - Advisory/Specialised Finance</option>';}?>
<?php  if ($resbusiness == '53') {echo ' <option value="53" selected="selected" >WIB - Leverage Finance (Europe)</option>';}  else { echo '<option value="53">WIB - Leverage Finance (Europe)</option>';}?>
<?php  if ($resbusiness == '54') {echo ' <option value="54" selected="selected" >WIB - Leverage Finance (N America)</option>';}  else { echo '<option value="54">WIB - Leverage Finance (N America)</option>';}?>



                        </select>
                    </div>
                </div>
            </div>




            <div class="col-md-6" id="centercenter2">
                <div class="centerBlock">
                    <h2 class="headingQ">Your Level*</h2>
                    <p class="centerBlock">(or equivalent)</p>
                    <br>
                    <div class="form-group">
                        <select class="form-control drops" id="sel2">

                            <option value="0" >Please select</option>
                            <?php  if ($rescareer == '1') {echo '<option value="1" selected="selected" >Senior Business Leader</option>';}  else { echo '<option value="1" >Senior Business Leader</option>';} ?>
                            <?php  if ($rescareer == '2') {echo '<option value="2" selected="selected" >Business Leader</option>';}  else { echo '<option value="2" >Business Leader</option>';} ?>
                            <?php  if ($rescareer == '3') {echo '<option value="3" selected="selected" >Senior Manager M01</option>';}  else { echo '<option value="3" >Senior Manager M01</option>';} ?>
                            <?php  if ($rescareer == '4') {echo '<option value="4" selected="selected" >Manager</option>';}  else { echo '<option value="4" >Manager</option>';} ?>
                            <?php  if ($rescareer == '5') {echo '<option value="5" selected="selected" >Assistant Manager</option>';}  else { echo '<option value="5" >Assistant Manager</option>';} ?>
                            <?php  if ($rescareer == '6') {echo '<option value="6" selected="selected" >Officer</option>';}  else { echo '<option value="6" >Officer</option>';} ?>
                             <?php  if ($rescareer == '7') {echo '<option value="7" selected="selected" >Official</option>';}  else { echo '<option value="7" >Official</option>';} ?>

                        </select>
                    </div>
                </div>
            </div>

            <div class="col-md-12" id="centercenter3">

                <div class="col-md-6 centerBlock">
                    <h2 class="headingQ">Staff Number</h2>
                    <p class="centerBlock">(if this isn't correct, STOP! and please email BCS.MentorMe@aib.ie)</p>
                    <br>
                    <?php echo '<h2 class="inputreg centerBlock" id="staffnumber" >'.$staffidtoshow.'</h2>'; ?>
                    <input type="text" id = "staffnumberhidden" value="<?php echo $staffidtoshow?>">

                </div>
                <div class="col-md-6">
                    <div class="centerBlock">
                        <h2 class="headingQ">Main Office Location*</h2>
                        <p class="centerBlock">(so we can match you with mentees in similar locations)</p>
                        <br>
                        <div class="form-group">
                            <select class="form-control drops1 centerBlock" id="sel3">
                                 <option value="0">Please select</option>
                                <?php  if ($resbusloc == '1') {echo '<option value="1" selected="selected" >Airside</option>'; } else { echo '<option value="1">Airside</option>';};?>
                                <?php  if ($resbusloc == '2') {echo '<option value="2" selected="selected" >Belfast</option>'; } else { echo '<option value="2">Belfast</option>'; };?>
                                <?php  if ($resbusloc == '3') {echo '<option value="3" selected="selected" >Cork</option>'; } else { echo '<option value="3">Cork</option>';  };?>
                                <?php  if ($resbusloc == '9') {echo '<option value="9" selected="selected" >Galway</option>'; } else { echo '<option value="9">Galway</option>';  };?>
                                <?php  if ($resbusloc == '4') {echo '<option value="4" selected="selected" >Any Dublin 2 or 4 Office</option>'; } else { echo '<option value="4">Any Dublin 2 or 4 Office</option>'; };?>
                                <?php  if ($resbusloc == '10') {echo '<option value="10" selected="selected" >Letterkenny</option>'; } else { echo '<option value="10">Letterkenny</option>';  };?>
                                <?php  if ($resbusloc == '11') {echo '<option value="11" selected="selected" >Limerick</option>'; } else { echo '<option value="11">Limerick</option>';  };?>
                                <?php  if ($resbusloc == '5') {echo '<option value="5" selected="selected" >London</option>'; } else { echo '<option value="5">London</option>';};?>
                                <?php  if ($resbusloc == '6') {echo '<option value="6" selected="selected" >Naas</option>'; } else { echo '<option value="6">Naas</option>'; };?>
                                <?php  if ($resbusloc == '7') {echo '<option value="7" selected="selected" >New York</option>'; } else { echo '<option value="7">New York</option>';};?>
                                <?php  if ($resbusloc == '8') {echo '<option value="8" selected="selected" >Sandyford</option>'; } else { echo '<option value="8">Sandyford</option>'; };?>
                                <?php  if ($resbusloc == '12') {echo '<option value="12" selected="selected" >Kerry</option>'; } else { echo '<option value="12">Kerry</option>';  };?>
                                <?php  if ($resbusloc == '13') {echo '<option value="13" selected="selected" >Waterford</option>'; } else { echo '<option value="13">Waterford</option>';  };?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-6" id="centercenter4">

                <h2 class="headingQ">Write one line about yourself*</h2>
                <p class="centerBlock">(e.g. In AIB for 9 years, I'm an expert in app development)</p>
                <br>
                <?php echo '<input type="text" class="centerBlock" name="oneliner"  id="oneliner" value="'.$resoneliner.'" >'; ?>

                <br>

            </div>

            <div class="col-xs-12 col-md-6" id="centercenter5">

                <h2 class="headingQ">Your linkedIn profile link</h2>
                <p class="centerBlock">(e.g. https://ie.linkedin.com/in/andy-o-sullivan-9673019)</p>
                <br>
                <?php echo '<input type="text" class="centerBlock" name="linkedin"  id="linkedin" value="'.$reslinkedin.'" >'; ?>

                <br>

            </div>
</div></div></div>
        </form>


    </div>







    <!--/.row-->
    <row>
        <br>
        </br>
        <br>
        <br>
        <div class="centerBlock">
            <button id="Submit" name="Submit" class="btn btn-primary" onclick="getButtonValues()">      Save      </button>
            <br><br>
            <br>
        </div>
        <div class="centerBlock">
               <div class="h3" id="add_err"></div>
            </div>

    </row>

    </div>
    <!--/.container-->
</section>


<section>
    <div class="container">
        <div class="row">

            <div class="col-xs-12" id="centercenter6">
                <div class="centerBlock">
                    <h2 class="headingQ">One last thing - please upload a profile picture</h2>
                    <!--   <input class="centerBlock" type='file' name="theFile" id="imgInp" onchange="readURL(this);"/>-->
                    <br>

                    <!--
                    <span class="btn btn-default btn-file centerBlock">
                            Browse for photo <input type="file" name="theFileold" id="imgInp" onchange="readURL(this);">
                    </span>

                    <br>
                    <img class="centerBlock img-circle" id="blah" src="#" alt="your image" />
                    <br>
                    -->
                    <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                        <div id="image_preview">
                            <img class="centerBlock img-circle" id="previewing" <?php if (!empty($resfilename)){echo 'src="upload/'.$resfilename.'"';} else { echo 'src="images/QuestionMark.png"'; } ?> style="width:200px; height:200px;"/>
                            <br>
                        </div>

                        <div id="selectImage">
                        <span class="btn btn-default btn-file centerBlock" style="width: 300px;">
                           Browse for photo  <input class="centerBlock" type="file" name="file" id="file" required />
                        </span>
                            <br>
                            <input id="uploadButton"  class="btn btn-default btn-file centerBlock" style="width: 300px;" type="submit" value="Upload" class="submit" />
                        </div>
                    </form>
                </div>
                <br>
                <h4 class="centerBlock" id='loading' ></h4>
                <div id="message"></div>
            </div>


        </div>
    </div>




</section>




<div class="color-border"> </div>
<!--/#middle-->

<section id="testimonials" class="service-item">
    <div class="container">
        <div class="center">
            <h2>Your Mentees</h2>
            <p class="lead">Any Mentees that have selected you will appear here.<br>(You will also receive an email)</p>
        </div>

        <div class="row">


            <div class="col-xs-12 col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <?php echo $myMenteeNameArray[0]?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="the-price">
                            <img class="img-circle img-thumbnail profilepics" src="<?php 
                                        if ( $myMenteePhotoArray[0] == '') {
                                            echo 'upload/QuestionMark.png';
                                        } else {echo 'upload/'.$myMenteePhotoArray[0];}  ?>">
                        </div>
                        <table class="table">
                            <tr>
                                <td><div style="word-wrap: break-word; width:280px;"> <?php echo $myMenteeOnelinerArray[0]?> <div></td>
                            </tr>
                            <tr class="active">
                                 <td><div style="word-wrap: break-word; width:280px;">

<?php if(substr($myMenteeLinkedInArray[0],0,4) == 'http'){
                                      echo '<a href='.$myMenteeLinkedInArray[0].'>'.$myMenteeLinkedInArray[0].'</a>';
                                  }else{echo 'No LinkedIn URL entered';} ?>
 <div> </td>
                            </tr>
                            
                        </table>
                    </div>
                    <!--
                    <div class="panel-footer">
                        <a href="#" class="btn btn-primaryQ meeting1btn">Had Meeting One</a>
                        <a href="#" class="btn btn-primaryQ meeting1btn">Had Meeting Two</a>
                        <a href="#" class="btn btn-primaryQ meeting1btn">Had Meeting Three</a>
                        <a href="#" class="btn btn-success questionairebtn" role="button">See Questionaire Answers</a>
                    </div>
                -->
                </div>
            </div>



             <div class="col-xs-12 col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <?php echo $myMenteeNameArray[1]?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="the-price">
                            <img class="img-circle img-thumbnail profilepics" src="<?php 
                                        if ( $myMenteePhotoArray[1] == '') {
                                            echo 'upload/QuestionMark.png';
                                        } else {echo 'upload/'.$myMenteePhotoArray[1];}  ?>">
                        </div>
                        <table class="table">
                            <tr>
                                <td><div style="word-wrap: break-word; width:280px;"> <?php echo $myMenteeOnelinerArray[1]?> <div></td>
                            </tr>
                            <tr class="active">
                                 <td><div style="word-wrap: break-word; width:280px;">

<?php if(substr($myMenteeLinkedInArray[1],0,4) == 'http'){
                                      echo '<a href='.$myMenteeLinkedInArray[1].'>'.$myMenteeLinkedInArray[1].'</a>';
                                  }else{echo 'No LinkedIn URL entered';} ?>
 <div> </td>
                            </tr>
                            
                        </table>
                    </div>
                    <!--
                    <div class="panel-footer">
                        <a href="#" class="btn btn-primaryQ meeting1btn">Had Meeting One</a>
                        <a href="#" class="btn btn-primaryQ meeting1btn">Had Meeting Two</a>
                        <a href="#" class="btn btn-primaryQ meeting1btn">Had Meeting Three</a>
                        <a href="#" class="btn btn-success questionairebtn" role="button">See Questionaire Answers</a>
                    </div>
                -->
                </div>
            </div>





              <div class="col-xs-12 col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <?php echo $myMenteeNameArray[2]?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="the-price">
                            <img class="img-circle img-thumbnail profilepics" src="<?php 
                                        if ( $myMenteePhotoArray[2] == '') {
                                            echo 'upload/QuestionMark.png';
                                        } else {echo 'upload/'.$myMenteePhotoArray[2];}  ?>">
                        </div>
                        <table class="table">
                            <tr>
                                <td><div style="word-wrap: break-word; width:280px;"> <?php echo $myMenteeOnelinerArray[2]?> <div></td>
                            </tr>
                            <tr class="active">
                                 <td><div style="word-wrap: break-word; width:280px;">

<?php if(substr($myMenteeLinkedInArray[2],0,4) == 'http'){
                                      echo '<a href='.$myMenteeLinkedInArray[2].'>'.$myMenteeLinkedInArray[2].'</a>';
                                  }else{echo 'No LinkedIn URL entered';} ?>
 <div> </td>
                            </tr>
                            
                        </table>
                    </div>
                    <!--
                    <div class="panel-footer">
                        <a href="#" class="btn btn-primaryQ meeting1btn">Had Meeting One</a>
                        <a href="#" class="btn btn-primaryQ meeting1btn">Had Meeting Two</a>
                        <a href="#" class="btn btn-primaryQ meeting1btn">Had Meeting Three</a>
                        <a href="#" class="btn btn-success questionairebtn" role="button">See Questionaire Answers</a>
                    </div>
                -->
                </div>
            </div>



            <!--
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="row testimonials">
                <div class="col-sm-4">
                  <blockquote>
                    <p class="clients-words">Morbi eget enim nisi. In venenatis porta est ut molestie nulla facilisi. Aliquam vehicula efficitur lorem eget eleifend.</p>
                    <span class="clients-name">- John Doe, Company</span> <img class="img-circle img-thumbnail" src="images/testimonials/man1.jpg"> </blockquote>
                </div>
                <div class="col-sm-4">
                  <blockquote>
                    <p class="clients-words">Maecenas tincidunt venenatis tempus. Nulla tristique euismod urna at ullamcorper.</p>
                    <span class="clients-name">- Jane Doe, Company</span> <img class="img-circle img-thumbnail" src="images/testimonials/woman1.jpg"> </blockquote>
                </div>
                <div class="col-sm-4">
                  <blockquote>
                    <p  class="clients-words">Aliquam euismod nunc id eros sollicitudin interdum. Integer eget sem nec nulla dictum dictum.</p>
                    <span class="clients-name">- Brian Smith, Company</span> <img class="img-circle img-thumbnail" src="images/testimonials/man1.jpg"> </blockquote>
                </div>
              </div>-->
            <!--/.row-->
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#testimonials-->

<div class="color-border"> </div>
<section id="get-started">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="infomentors">Tips for Excellent Mentoring</h1>

                <br>
                <br>
                <div class="col-md-6 col-sm-6">

                    <img src="images/businesswomen.jpg" class="img-responsive" alt="businesswomen">
                </div>

                <div class="col-md-6 col-sm-6">
                    <h2 >So you’ve decided to become a mentor</h2><br>
                    <p class="justify"> Good for you! So where do you start?
                        No need to worry – help is at hand. Here we have some guides for you, so you can hit the ground running as a mentor, and a whole lot more.
                    </p>
                    <br>

                    <p class="justify">  <br>
                        Just as important, these tips will help you to think about what you want to get out of the mentoring experience – and how it can help you to be at your best.
                        Being a Mentor is a great opportunity for you to help someone’s development and also to hone your own skills as a people leader.
                    </p>
                </div>
            </div>



            <div class="col-md-12 col-sm-12">
                <br>
                <h2>Do's and Do Not's</h2><br>
                <div class="col-md-6 col-sm-6">
                    <img src="images/menteesDo.png" class="img-responsive  centerBlock" alt="advice">
                </div>

                <div class="col-md-6 col-sm-6">
                    <img src="images/menteesDONT.png" class="img-responsive  centerBlock" alt="advice">
                </div>


            </div>




            <div class="col-md-6 col-sm-6">
                <br>
                <h2>Your role as a mentor is to</h2><br>

                <div class="centerBlock">
                    <p ><strong>Build</strong> an open and honest relationship and create an atmosphere where your mentee feels safe to seek out your advice.</p>
                    <p ><strong>Support</strong> and encourage your mentee’s personal learning and development by giving confidential feedback</p>
                    <p ><strong>Help</strong> the mentee to take increasing initiative for his/her own learning and development.</p>
                    <p ><strong>Help</strong> the mentee identify career obstacles and take appropriate action to overcome them.</p>
                    <p ><strong>Tutor</strong> specific skills, effective behaviour and help the mentee to function more effectively in the organisation.</p>
                    <p ><strong>Act</strong> as a sounding board for ideas and concerns and to expand the mentee’s network of professional contacts.</p>
                    <p ><strong>Help </strong> link the mentee with the appropriate learning opportunities.</p>
                    <p ><strong>Maintain confidentiality.</strong> </p>



                </div>

            </div>

            <div class="col-md-6 col-sm-6">
                <br>
                <h2>Download Full Mentor Guide (pdf)</h2><br>
                <a href="getguide.php?file=Mentor_Guide"><img src="images/mentorGuideThumbnail.png" class="centerBlock"></a>

                <br>
                <br>

            </div>

            <div class="color-border"> </div>

            <div class="col-md-12 col-sm-12">
                <h2><br>iLearn Mentoring Course</h2><br>
                <p class="centerBlock">Another great resource is the “Essential Mentoring Techniques: Mentoring Fundamentals” <br>iLearn course, that is available to all staff.

                    It has lots of video examples that you can watch whenever suits you.
                    <br><br></p>
                <img src="images/iLearn.png">


                <p class="justify centerBlock">  <br>How to register and view:<p>

                <p class="centerBlock">
                    1. Login to iLearn (here)<br>
                    2. Search for ‘mentoring’<br>
                    3. Click to start the course<br>
                </p>

                </p>
            </div>






        </div>

    </div>
    </div>

    <!--/.container-->
</section>
<!--/#get-started-->


<div class="color-border"> </div>
<section id="contactsection" class="service-item">
    <div class="container">
        <div class="center">
            <h1 style="color:#4e4e4e">Further Information</h1>
            <br>
            <p>Check out the FAQ (frequently asked questions) and NSFAQ (not so frequently asked questions) page<br> for answers to many questions.
                <br>
                <br>
                Or check out the Contact Us page to get in touch with the team.
            </p>

        </div>
    </div>
</section>

<div class="color-border"> </div>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">Copyright &copy; 2015 AIB. Design by <span style="color:white;">AIB Innovation</span></div>

        </div>
    </div>
</footer>
<!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/buttons.js"></script>
<script src="script.js"></script>
</body>
</html>
