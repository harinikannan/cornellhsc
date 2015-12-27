<!DOCTYPE html>
<?php

$name = "";
$email = "";
$nameerror = "";
$emailerror = "";
$error = "";

if (isset($_REQUEST['submit'])){


    if ((isset($_POST['name']))&& !(empty($_POST['name']))){
         $name = ($_POST['name']);

        if (strlen($name) < $CHAR_MIN ) {
            $nameerror = 'All fields must contain at least '.$CHAR_MIN. 'characters!';
        }

    }
    else{
        $nameerror = "Please fill in your name";
    }

    if ((isset($_POST['email']))&& !(empty($_POST['email']))){
        $email = ($_POST['email']);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL) || preg_match("@cornell.edu", $email)){ 
                $emailerror = "Please provide a valid cmail e-mail address";
            }
            else{
                
                if(mail("hindu-l-request@cornell.edu", "join", $email)) {
                    $error = 'Message sent!';
                    $name = "";
                    $email = "";

                } else {
                    $error = 'Mail error: Email failed to send. Please try again';
                }

            }
    }

    else{
        $emailerror = "Please provide a valid cmail e-mail address";
    }
  
            
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hindu Student Council</title>
    <!--Bootstrap Core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery.js"></script>
    <!--Bootstrap Core JS-->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    
    <div class="homenav" id="navbar" class="navchange">
      
        <!--a href= "#home" class="smoothscroll"> </a-->
        
        <div class="logo">
          <a href="#home" class="smoothscroll"> <img src="images/hscnewlogo.png" class="ll"> </a>
          <a href="#home" class="smoothscroll" class="ll"> Cornell Hindu Student Council </a>
        </div>
        <div class="mainlist">
          <ul class="mainlist">
                
                <li>
                    <a href= "#aboutHSC" class="smoothscroll"> HSC </a>
                </li>
                <li>
                    <a href= "#aboutHindu" class="smoothscroll"> About Hinduism</a>
                </li>
                <li>
                    <a href= "#board" class="smoothscroll"> Meet Board</a>
                </li>
                <li>
                    <a href= "#bhajs" class="smoothscroll"> Bhajans</a>
                </li>
                <li>
                    <a href= "#contact" class="smoothscroll"> Contact</a>
                </li>
          </ul>
        </div>
    </div>
    
     <div class="homeone" id="home">
    </div>
    
     <div class="hometwo" id="aboutHSC">
        <h1 class="reg"> Welcome to Cornell HSC! </h1>
        <p class="reg"> We come from various cultures and backgrounds to form a community that fosters Hindu culture and religious awareness within
        the Cornell and Ithaca community. <b>We hold Bhajans (devotional prayers and songs) every Saturday at 4:00 p.m. in the Edwards Room of Anabel
        Taylor Hall.</b> We also have special Pujas (ceremony of gratitude) to celebrate the holidays of various gods and goddesses, including
        Diwali, Ramnavami, Navratri, Ganesh Chaturthi, Shivaratri, and an end of the semester Saraswati puja. Additionally, through events such as
        <b>Diwali Mela</b> and <b> Holi </b>, we spread knowledge and awareness of Hinduism to the greater Cornell and Ithaca communities.
        <br>
        <br>
        We strive to to bring together the Hindu community at Cornell and in the Ithaca area through discussion, prayer, and various events
        both on campus as well as off campus. We hope to provide opportunities to learn about Hindu heritage and culture, foster awareness about issues
        affecting Hindus, and provide service (seva) to the community.
        <br>
        <br>
        Whether you are a devout Hindu or curious about the religion, you are encouraged to stop by!</p>
        
        <img class="home" src="images/HSC.jpg">
    </div>
    
    <div class="about-hinduism" id= "aboutHindu">
        <div class="about-hinduism-text">
            <h1 class="about"> Learn about Hinduism </h1>
            <p class="about"> Hinduism is the world&#39;s third largest and oldest religion and embodies spiritual and cultural significance beyond
            its traditional rituals. It is founded on the notion of Santana Dharma, or &#39;the eternal way&#39;, which governs existance beyond man-kind.
            Hinduism, as we know it today, is a composite of various beliefs and traditions throughout South Asia and the greater world.
            Practices vary even village to village! Regardless of the celebration, the importance of community is stressed. </p>
            <p class="about">
              There is no "one Hinduism." Hinduism is formed of diverse traditions and has no single founder. Among its direct roots is the
              historical Vedic religion of Iron Age India and, as such, Hinduism is often called the "oldest living religion" or the "oldest living
              major religion" in the world. Hinduism is a conglomerate of diverse beliefs and traditions, in which the prominent themes include <b> Dharma </b>
              (ethics and duties), <b> Samsara </b> (rebirth), <b> Karma </b> (right action), <b> Moksha </b> (liberation from the cycle of Samsara).
            </p>
        </div>
        
    </div>
    
    <!--Meet the Board-->
    <!--All code based off of http://www.sitepoint.com/understanding-bootstrap-modals/ Bootstrap Modal Demo Code-->
    <!--All rights to them, I do not claim ownership over this particular writing of the modal-->
    
    <div class="board" id="board">
        <h1 class="reg"> Meet the Board </h1>
        <div class="board-container">
            <!--Ankur-->
            <div class="image-container">
              <a href="#" data-toggle="modal" data-target="#ankur">
              <img class="board-image" src="images/board/ankur.jpg">
              <div class="image-overlay-text"> Ankur Srivastava<br>President<br>Class of 2016</div>
              </a>
            </div>
            <!--Vaishnavi-->
            <div class="image-container">
            <a href="#" data-toggle="modal" data-target="#vaishnavi">
              <img class="board-image" src="images/board/vaishnavi.jpg">
              <div class="image-overlay-text"> Vaishnavi Ganesan <br> Active Board Member <br> Class of 2017</div>
            </a>
            </div>
            <!--Neha-->
            <div class="image-container">
            <a href="#" data-toggle="modal" data-target="#neha">
              <img class="board-image" src="images/board/neha.jpg">
              <div class="image-overlay-text"> Neha Ratna<br> Ex-Oficio <br> Class of 2016</div>
            </a>
            </div>
            <!--Veena-->
            <div class="image-container">
            <a href="#" data-toggle="modal" data-target="#veena">
              <img class="board-image" src="images/board/veena.jpg">
              <div class="image-overlay-text"> Veena Calambur <br> Vice President <br> Class of 2016</div>
            </a>
            </div>
            <!--Samir-->
            <div class="image-container">
            <a href="#" data-toggle="modal" data-target="#samir">
              <img class="board-image" src="images/board/smir.jpg">
              <div class="image-overlay-text"> Samir Durvasala <br> Treasurer <br> Class of 2017 </div>
            </a>
            </div>
            <!--Anay-->
            <div class="image-container">
            <a href="#" data-toggle="modal" data-target="#anay">
              <img class="board-image" src="images/board/anay.jpg">
              <div class="image-overlay-text">Anay Hindupur <br> Active Board Member <br> Class of 2017 </div>
            </a>
            </div>
            <!--Brinda-->
            <div class="image-container">
            <a href="#" data-toggle="modal" data-target="#brinda">
              <img class="board-image" src="images/board/brinda.jpg">
              <div class="image-overlay-text">Brinda Gurumoorthy <br> Secretary <br> Class of 2018 </div>
            </a>
            </div>
            <!--Harini-->
            <div class="image-container">
            <a href="#" data-toggle="modal" data-target="#harini">
              <img class="board-image" src="images/board/me.jpg">
              <div class="image-overlay-text"> Harini Kannan <br> Technical Coordinator <br> Class of 2018 </div>
            </a>
            </div>
            <!--Rahul-->
            <div class="image-container">
            <a href="#" data-toggle="modal" data-target="#rahul">
              <img class="board-image" src="images/board/rahul.jpg">
              <div class="image-overlay-text"> Rahul Rajagopalan <br> Active Board Member <br> Class of 2018 </div>
            </a>
            </div>
            <!--Saie-->
            <div class="image-container">
            <a href="#" data-toggle="modal" data-target="#saie">
              <img class="board-image" src="images/board/saie.jpg">
              <div class="image-overlay-text"> Saie Ganoo <br> Social Chair <br> Class of 2018 </div>
            </a>
            </div>
            <!--Siddesh-->
            <div class="image-container">
            <a href="#" data-toggle="modal" data-target="#siddesh">
              <img class="board-image" src="images/board/siddesh.jpg">
              <div class="image-overlay-text"> Siddesh Ramesh <br> Active Board Member <br> Class of 2018 </div>
            </a>
            </div>
            
        </div>
    </div>
    <!--End of Board-->
    
    
    <div class="bhajans" id="bhajs">
        <h1 class="bhaj"> Sample Bhajans </h1>
        <p class="bhajs"> Peruse through and download all the bhajans that we sing during our weekly bhajans, from 4:00-5:00PM in Annabel Taylor
        Hall. Also, if you wish, take time to listen to the recorded bhajans! This is the <a id = "bhajanBookLink" href="bhajans/Bhajan Book 11-14-11.pdf" target = "_blank">full version</a> of our bhajan book.
        Copies are distributed to everyone at our weekly bhajans so don't feel a need to murder trees to print it out.</p>
        <div class="colbhaj1">
            <p class="bhaj"> Bhagyada Lakshmi Baarama <br>Sung by: Vaidehi Pidaparti </p>
            <audio controls>
                <source src="bhajans/Bhagyada.mp3" type="audio/mpeg">
                <embed height="50" width="100" src="bhajans/Bhagyada.mp3">
            </audio>
            <br>
            <p class="bhaj"> Bhajomana Govinda Gopala <br>Sung by: Shweta Bharadwaj </p>
            <audio controls>
                <source src="bhajans/Bhajomana.mp3" type="audio/mpeg">
                <embed height="50" width="100" src="bhajans/Bhajomana.mp3">
            </audio>
            <br>
            <p class="bhaj"> Ganesha Sharanam <br>Sung by: Preeta Ragavan </p>
            <audio controls>
                <source src="bhajans/GaneshaSharanam.mp3" type="audio/mpeg">
                <embed height="50" width="100" src="bhajans/GaneshaSharanam.mp3">
            </audio>
        </div>
        
        <div class="colbhaj1">
            <p class="bhaj"> Lingaashtakam  <br> <br> </p>
            <audio controls>
                <source src="bhajans/Lingaashtakam.mp3" type="audio/mpeg">
                <embed height="50" width="100" src="bhajans/Lingaashtakam.mp3">
            </audio>
            
            <p class="bhaj"> Payoji Meine <br>Sung by: Preeta Ragavan </p>
            <audio controls>
                <source src="bhajans/PayojiMeine.mp3" type="audio/mpeg">
                <embed height="50" width="100" src="bhajans/PayojiMeine.mp3">
            </audio>
            
            <p class="bhaj"> Shiva Shambo <br>Sung by: Shweta Bharadwaj </p>
            <audio controls>
                <source src="bhajans/ShivaShambo.mp3" type="audio/mpeg">
                <embed height="50" width="100" src="bhajans/ShivaShambo.mp3">
            </audio>
        </div>
        
        <div class="colbhaj1">
            <p class="bhaj"> Varuvai Amma  <br> Sung by: Vaidehi Pidaparti </p>
            <audio controls>
                <source src="bhajans/Varuvai.mp3" type="audio/mpeg">
                <embed height="50" width="100" src="bhajans/Varuvai.mp3">
            </audio>
            
            <p class="bhaj"> Hanuman Chalisa <br>  <br></p>
            <audio controls>
                <source src="bhajans/HanumanChalisa.mp3" type="audio/mpeg">
                <embed height="50" width="100" src="bhajans/HanumanChalisa.mp3">
            </audio>
            
            <p class="bhaj"> Om Jai Jagdish (Aarti) <br> <br></p>
            <audio controls>
                <source src="bhajans/OmJaiJagdish.mp3" type="audio/mpeg">
                <embed height="50" width="100" src="bhajans/OmJaiJagdish.mp3">
            </audio>
        </div>
    </div>
    
    <!--Contact form-->
    <div class="form" id="contact">
      <h1 class="reg"> Contact </h1>
      <div class = "fstyle">
        <br><br>
        <p class="reg"> 
        If you need to reach out to us, feel free to e-mail our president Ankur Srivastava: <u><i><a href="mailto:as2545@cornell.edu" target="_top">as2545@cornell.edu</a></i></u><br />
        <br>
        Otherwise, you can follow our <a href="https://www.facebook.com/CUHSC/?fref=ts"> Facebook page </a> and <a href="https://instagram.com/cornell_hsc/">Instagram account! </a> 
        </p>
        <br>

        If you have not already joined our listserv, submit this form to keep up to date with HSC events and announcements! 
        <br><br>
        <?php echo "$error";?>
         <form action="index.php/#contact" method= "POST" id="contact_form">
            *Name: <input class="nameinput" type="text" name="name" value="<?php echo $name;?>" required><?php echo "  $nameerror";?><br />
            *Email (Cornell Cmail): <input class="nameinput" type="email" name="email" value="<?php echo $email;?>" required> <?php echo "  $emailerror";?><br />
            <input class="submit" type="submit" value="Join Listserv" name="submit">
        </form>

      </div>
    </div>
    <!--Modals-->
    <!--All code based off of http://www.sitepoint.com/understanding-bootstrap-modals/ Bootstrap Modal Demo Code-->
    <!--All rights to them, I do not claim ownership over this particular writing of the modal-->
    <!--Modal ankur-->
    <div class="modal fade" id="ankur" tabindex="-1" role="dialog" aria-labelledby="ankur" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1 class="mod" id="myModalLabel">Ankur Srivastava: President</h1>
          </div>
          <div class="modal-body">
              <p class="mod"> I am a senior in the College of Arts and Sciences. I love reading Hindi and Urdu literature in my spare time. And, I like to travel.  </p>
              <br>
              <h1 class="mod"> Hometown: </h1>
              <p class="mod"> Essex Junction (Best place to live), VT!</p>
              <br>
              <h1 class="mod"> Major/Minor: </h1>
              <p class="mod"> Biology and Society; Minor: Global Health and South Asian Studies </p>
              <br>
              <h1 class="mod"> Grad Year:</h1>
              <p class="mod"> 2016</p>
              <br>
              <h1 class="mod"> Favorite thing about HSC </h1>
              <p class="mod"> My favorite part about HSC is getting to share my faith with a wonderful and diverse community on Cornell's campus. HSC's weekly events (pujas or bhajans) help center me when life on the Hill becomes hectic.  </p>
              <br>
              <h1 class="mod"> Why is HSC important to you? </h1>
              <p class="mod"> HSC is important to me because it provides a space for me to practice my faith and explore my beliefs with other like minded friends. </p>
              <br>
              <h1 class="mod"> Why did you join HSC? </h1>
              <p class="mod">  I joined HSC because I wanted to be part of a larger Hindu community on campus because I did not have one growing up. Being a part of HSC has truly exposed me to the diversity of practices and beliefs in the Hindu tradition. </p>
              <br>
              <h1 class="mod"> Favorite Bhajan: </h1>
              <p class="mod"> Bhaagyada!! </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--Modal Vaishnavi-->
    <div class="modal fade" id="vaishnavi" tabindex="-1" role="dialog" aria-labelledby="vaishnavi" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1 class="mod" id="myModalLabel">Vaishnavi Ganesan: Active Board Member</h1>
          </div>
          <div class="modal-body">
            <h1 class="mod"> Hometown: </h1>
              <p class="mod"> Omaha, NE </p>
              <br>
              <h1 class="mod"> Major/Minor: </h1>
              <p class="mod"> Biology and Society</p>
              <br>
              <h1 class="mod"> Grad Year:</h1>
              <p class="mod"> 2017</p>
              <br>
              <h1 class="mod"> Favorite Bhajan: </h1>
              <p class="mod"> Ganesh Pancharatnam</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--Modal Neha-->
    <div class="modal fade" id="neha" tabindex="-1" role="dialog" aria-labelledby="neha" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1 class="mod" id="myModalLabel">Neha Ratna: Ex-Oficio</h1>
          </div>
          <div class="modal-body">
              <p class="mod">Hi everyone! I am currently a Senior Pre-Med studying Human Development concentrating in Human Behavioral Neuroscience and minoring in Nutritional Sciences. When I am not studying for my exams or the MCAT, I love to paint, read, cook, and watch a ton of Bollywood movies! So if you're in for an exotic recipe, pre-med advice, or want to talk about Bollywood - come up and say "hi"! </p>
              <br>
             <h1 class="mod"> Hometown: </h1>
              <p class="mod"> Dallas, TX </p>
              <br>
              <h1 class="mod"> Major/Minor: </h1>
              <p class="mod"> Major: Human Development; Minor: Nutritional Sciences</p>
              <br>
              <h1 class="mod"> Grad Year:</h1>
              <p class="mod"> 2016</p>
              <br>
              <h1 class="mod"> Favorite thing about HSC </h1>
              <p class="mod"> My favorite thing about HSC has to Holi! Since freshman year, I have planned Holi along with the executive board and just the whole process of planning it and getting it together has been enriching and so much fun! Seeing the event as a growing success each and every year has been fantastic and I've met so many great people along the way. </p>
              <br>
              <h1 class="mod"> Why did you join HSC? </h1>
              <p class="mod"> I joined HSC since it quickly became a home away from home. Freshman year I became so close to everyone that Saturdays used to be the most exciting part of my week! </p>
              <br>
              <h1 class="mod"> Why is HSC important to you? </h1>
              <p class="mod"> HSC is important to me because it not only gives me a sense of community, but also allows me to meet new people.  I have always felt like I was at home when I am in HSC and it never lets me feel disconnected from my heritage. Over the years I've served on board, HSC has grown to be an even more amazing organization and I'm just so proud of where we've reached in the last four years! </p>
              <br>
              <h1 class="mod"> Favorite Bhajan: </h1>
              <p class="mod"> Shiva Kailaso ke Vasi</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--Modal Veena-->
    <div class="modal fade" id="veena" tabindex="-1" role="dialog" aria-labelledby="veena" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1 class="mod" id="myModalLabel">Veena Calambur: Vice President</h1>
          </div>
          <div class="modal-body">
              <p class="mod"> As I said, I'm a double major in Information Science and Statistics, and am really interested in Machine Learning and Data Science. My other passions are making Spongebob references, watching YouTube, reading a good murder mystery novel, and staring at imgur all day long. </p>
              <br>
              <h1 class="mod"> Hometown: </h1>
              <p class="mod">Princeton, NJ (yes like actually next door neighbors with Princeton University)</p>
              <br>
              <h1 class="mod"> Major/Minor: </h1>
              <p class="mod"> Double major in Information Science & Statistics </p>
              <br>
              <h1 class="mod"> Grad Year:</h1>
              <p class="mod"> 2016</p>
              <br>
              <h1 class="mod"> Favorite thing about HSC </h1>
              <p class="mod"> My favorite part of HSC is jamming out to Bhajans every week. I genuinely think with our abundant musical talent, we have the potential to become a live touring Bhajan group, just as soon as we figure out those line repeats. </p>
              <br>
              <h1 class="mod"> Why did you join HSC? </h1>
              <p class="mod"> One of my friends in my hall knocked on my door and told me that HSC was having a social and bhajans, the first week of my freshman year, and after that we all went and got Thai food from Asian Noodle House. After that I was hooked. Who doesn't love Bhajans and Pad Thai on a Saturday?  </p>
              <br>
              <h1 class="mod"> Why is HSC important to you? </h1>
              <p class="mod">  In all seriousness, HSC has fostered a wonderful community with people from various parts of India and the world. Because we all hail from diverse backgrounds, every member of HSC has brought some tradition or custom along with them that has enriched my own knowledge and experiences of Hinduism. But most of all, HSC has always been a home away from home, especially during holidays and puja days, when I missed my mom's prasad making the most!  </p>
              <br>
              <h1 class="mod"> Favorite Bhajan: </h1>
              <p class="mod">  Bolo Bolo Sab Mil Bolo</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--Modal Samir-->
    <div class="modal fade" id="samir" tabindex="-1" role="dialog" aria-labelledby="samir" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1 class="mod" id="myModalLabel">Samir Durvasala: Treasurer</h1>
          </div>
          <div class="modal-body">
            <h1 class="mod"> Hometown: </h1>
              <p class="mod"> Rockville, MD</p>
              <br>
              <h1 class="mod"> Major/Minor: </h1>
              <p class="mod"> Major: ECE; Minor: Biomedical Engineering </p>
              <br>
              <h1 class="mod"> Grad Year:</h1>
              <p class="mod"> 2017</p>
              <br>
              <h1 class="mod"> Favorite Bhajan: </h1>
              <p class="mod">  Raghupati Raghava Raajaa Ram </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--Modal Anay-->
    <div class="modal fade" id="anay" tabindex="-1" role="dialog" aria-labelledby="anay" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1 class="mod" id="myModalLabel">Anay Hindupur: Active Board Member</h1>
          </div>
          <div class="modal-body">
            <h1 class="mod"> Hometown: </h1>
              <p class="mod"> Mason, OH</p>
              <br>
              <h1 class="mod"> Major/Minor: </h1>
              <p class="mod"> Biological Sciences </p>
              <br>
              <h1 class="mod"> Grad Year:</h1>
              <p class="mod"> 2017</p>
              <br>
              <h1 class="mod"> Favorite Bhajan: </h1>
              <p class="mod">  Bhagyada Lakshmi Baramma  </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--Modal Brinda-->
    <div class="modal fade" id="brinda" tabindex="-1" role="dialog" aria-labelledby="brinda" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1 class="mod" id="myModalLabel">Brinda Gurumoorty: Secretary</h1>
          </div>
          <div class="modal-body">
          <p class="mod"> I'm a sophomore majoring in CS (I think?). I like late night conversations with friends and I'm a Desperate Housewives fan. Please play cards with me.</p>
            <h1 class="mod"> Hometown: </h1>
              <p class="mod"> Baskingridge, NJ</p>
              <br>
              <h1 class="mod"> Major/Minor: </h1>
              <p class="mod"> Computer Science </p>
              <br>
              <h1 class="mod"> Grad Year:</h1>
              <p class="mod"> 2018</p>
              <br>
              <h1 class="mod"> Favorite thing about HSC </h1>
              <p class="mod"> I enjoy the pujas because in a stressful atmosphere like Cornell it's nice to take pause and celebrate life with friends and prasad. </p>
              <br>
              <h1 class="mod"> Why is HSC important to you? </h1>
              <p class="mod">I really like the community feeling because I feel I can talk to any member about anything both religious or not. The inherent intimate spiritual atmopshere fosters a lot of close friendships which I'm happy for! </p>
              <br>
              <h1 class="mod"> Why did you join HSC? </h1>
              <p class="mod"> First semester freshmen year I was not very involved with the Hindu Community, and I wanted to become more integrated with people with similar beliefs. Also, I really wanted help plan for Holi!  </p>
              <br>
              <h1 class="mod"> Favorite Bhajan: </h1>
              <p class="mod">  Om Jai Jagdish (Aarti)  </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--Modal Harini-->
    <div class="modal fade" id="harini" tabindex="-1" role="dialog" aria-labelledby="harini" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <h1 class="mod" id="myModalLabel">Harini Kannan: Technical Coordinator</h1>
          </div>
          <div class="modal-body">
              <p class="mod"> I'm a sophomore Info Sci student who is an avid tv junkie and fanatic sports aficionado. I have a waxing interest in web development, and a waning interest in politics. You'll either find me reading Kurt Vonnegut or scrolling through Facebook for hours. Most of all, I'm a professional snapchat artist.  </p>
              <br>
            <h1 class="mod"> Hometown: </h1>
              <p class="mod"> Doylestown, PA</p>
              <br>
              <h1 class="mod"> Major/Minor: </h1>
              <p class="mod"> Major: Information Science; Minor: Computer Science </p>
              <br>
              <h1 class="mod"> Grad Year:</h1>
              <p class="mod"> 2018</p>
              <br>
              <h1 class="mod"> Favorite thing about HSC </h1>
              <p class="mod"> My favorite thing about HSC is that it is able to welcome people on all ends of the religious spectrum. HSC welcomes those from atheists (like myself) to devout theists, like many other members in our organization.
                              I simply love the fact that I can enjoy the company of my friends in a spiritual setting of mutual interest and beliefs.</p>
              <br>
              <h1 class="mod"> Why is HSC important to you? </h1>
              <p class="mod"> Growing up, I never had a Hindu community outside my immediate family. I have lived in very non-diverse places, and felt very isolated even brining up concepts in Hinduism because it was so foreign to everyone else.
                              HSC has given me the opportunity to feel comfortable with myself and my level of spirituality in ways I'm speechlessly grateful for. </p>
              <br>
              <h1 class="mod"> Why did you join HSC? </h1>
              <p class="mod">  I joined HSC because I wanted to be part of a community of people who share a background similar to mine, despite differences in spiritual intensity.
                              </p>
              <br>
              <h1 class="mod"> Favorite Bhajan: </h1>
              <p class="mod"> Vel Vel Muruga Vel and Ganesha Pancharatnam</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!--Modal Rahul-->
    <div class="modal fade" id="rahul" tabindex="-1" role="dialog" aria-labelledby="harini" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <h1 class="mod" id="myModalLabel">Rahul Rajagopalan: Active Board Member</h1>
          </div>
          <div class="modal-body">
              <p class="mod"> I am a sophomore ChemE with a particular interest in Biology. Outside of studies, I love video games (mostly Nintendo), reading, running, playing the violin, and hanging out with friends. I am super nerdy and am obsessed with cute baby animals, mostly puppies. </p>
              <br>
              <h1 class="mod"> Hometown: </h1>
              <p class="mod"> Whitehouse Station, NJ</p>
              <br>
              <h1 class="mod"> Major/Minor: </h1>
              <p class="mod"> Chemical Engineering with a potential minor in Biomedical Engineering </p>
              <br>
              <h1 class="mod"> Grad Year:</h1>
              <p class="mod"> 2018</p>
              <br>
              <h1 class="mod"> Favorite thing about HSC </h1>
              <p class="mod"> I really enjoy the special poojas. I was never able to find the time before joining HSC to celebrate the different Hindu holidays but now I can enjoy every one. </p>
              <br>
              <h1 class="mod"> Why is HSC important to you? </h1>
              <p class="mod"> HSC gives me an important break from the stress of Cornell. The poojas and bhajans are excellent stress relievers and let me refocus for the next week. </p>
              <br>
              <h1 class="mod"> Why did you join HSC? </h1>
              <p class="mod"> I joined because being away from home I had no one telling me or bringing me to temple or helping me celebrate Pongal or Deepavali. Now I have a whole group of interested Indians to celebrate with. </p>
              <br>
              <h1 class="mod"> Favorite Bhajan: </h1>
              <p class="mod"> Om Jai Jagdish (Aarti)  </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--Modal Saie-->
    <div class="modal fade" id="saie" tabindex="-1" role="dialog" aria-labelledby="harini" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <h1 class="mod" id="myModalLabel">Saie Ganoo: Social Chair</h1>
          </div>
          <div class="modal-body">
              <p class="mod"> I am a sophomore in Biological Engineering, and I love to dance and listen to Bollywood music. I love painting and theatre. I am interested in biomedical and materials science research, and hope to build my career in this field.  </p>
              <br>
              <h1 class="mod"> Hometown: </h1>
              <p class="mod">Collierville, TN</p>
              <br>
              <h1 class="mod"> Major/Minor: </h1>
              <p class="mod"> Biological Engineering w/ Undecided Minor </p>
              <br>
              <h1 class="mod"> Grad Year:</h1>
              <p class="mod"> 2018</p>
              <br>
              <h1 class="mod"> Favorite thing about HSC </h1>
              <p class="mod"> I love that there is a place where I can pray and embrace my culture around people who want to do the same! </p>
              <br>
              <h1 class="mod"> Why is HSC important to you? </h1>
              <p class="mod"> Growing up, I have always loved going to Sunday School and singing bhajans. I love being able to have that environment here at college where I can take time out of my week to remember what's really important. </p>
              <br>
              <h1 class="mod"> Why did you join HSC? </h1>
              <p class="mod"> I wanted to support an organization I think is very beneficial in bringing together students in this community who believe in Hinduism. I think it is great how HSC has been able to bring the Hindu culture to the Cornell community and show Cornell how rich Indian culture is.  </p>
              <br>
              <h1 class="mod"> Favorite Bhajan: </h1>
              <p class="mod"> Raghupati Ram  </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--Modal Siddesh-->
    <div class="modal fade" id="siddesh" tabindex="-1" role="dialog" aria-labelledby="harini" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <h1 class="mod" id="myModalLabel">Siddesh Ramesh: Active Board Member</h1>
          </div>
          <div class="modal-body">
              <p class="mod"> I am a Sophomore Biological Sciences major. I love to read books/manga, play video games (League of Legends, Battlefield), watch anime, and hang out with my friends. I am also a huge Manchester United fan! </p>
              <br>
              <h1 class="mod"> Hometown: </h1>
              <p class="mod">Long Island</p>
              <br>
              <h1 class="mod"> Major/Minor: </h1>
              <p class="mod"> Biological Sciences </p>
              <br>
              <h1 class="mod"> Grad Year:</h1>
              <p class="mod"> 2018</p>
              <br>
              <h1 class="mod"> Favorite thing about HSC </h1>
              <p class="mod"> I love the emphasis on immersing oneself in the Hindu culture and partaking in various, fun activities. </p>
              <br>
              <h1 class="mod"> Why is HSC important to you? </h1>
              <p class="mod"> It is an excellent way for me to stay connected with the religious aspect of my life amidst the various responsibilities and tasks I juggle at Cornell. </p>
              <br>
              <h1 class="mod"> Why did you join HSC? </h1>
              <p class="mod"> I wanted to be among fellow students who were interested in performing bhajans and poojas and celebrating holidays such as Diwali. It would ensure such events are more enjoyable and fulfilling. </p>
              <br>
              <h1 class="mod"> Favorite Bhajan: </h1>
              <p class="mod"> Bhaagyaadaa </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
      
    <script>
      $(document).ready(function(){
        
        $(document).scroll(function(event){
          if ($(document).scrollTop() >= 1){
          $('#navbar').css('background-color', '#000000');
          } else{
          $('#navbar').css('background-color', 'transparent');
          }
        })
        $(".smoothscroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},700);
        });
        
        $('.image-container').hover(function(){
          $(this).find(".image-overlay-text").fadeIn(300);
        }, function(){
          $(this).find(".image-overlay-text").fadeOut(300);
        });
      });
    </script>


  </body>
</html>