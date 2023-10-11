<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<?php
    $bio['name'] = 'Matt';
    $bio['surname'] ='McDonald';
    $bio['profession'] = 'Developer';
?>
</head>
<body>
    <header>
        <img class="image_head" src="img/Group 1 (4).png"  alt="" width="190px" height="190px">
        <h3 class="text1">
            <?php 
            echo $bio['profession'] 
            ?>
    </h3>
        <h1 class="text2">
            <?php
        echo $bio['name']
        ?> <br>
        <?php
        echo $bio['surname'] 
        ?>
        </h1>
        <button class="button_head">Contact Me</button>
    </header>
    <main>
        <section class="content">
        <h2 class="text_content">About Me</h2>
        <p class="text">Use this area to say something about yourself or <br> describe your goals.  Tum dicere exorsus est cur verear, ne ad id omnia referri oporteat, ipsum per se ipsam voluptatem, quia consequuntur magni dolores eos, qui blanditiis praesentium voluptatum deleniti atque insitam in ea quid est eligendi optio, cumque nihil ut ipsi auctori huius disciplinae placet: constituam, quid.</p>
        <img class="image-text" src="img/Rectangle (1).png" alt="">
        <h2 class="text_content">Experience</h2>
        <?php
        $Experience =[ 
                ['position'=>'Front-End Developer'],
                ['workplace'=>'Dropbox',],
                ['start'=>'Mar. 2020'],
                ['end'=> 'Present'],
                ['description'=> 'Describe your responsibilities.  Tum dicere exorsus est cur verear, ne ad id omnia referri oporteat, ipsum per se ipsam voluptatem, quia consequuntur magni dolores eos, qui blanditiis praesentium voluptatum deleniti atque insitam in ea quid est eligendi optio, cumque nihil ut ipsi auctori huius disciplinae placet: constituam, quid',]]
        ?>
        <h3 >
                <?=
                 $Experience[0] ['position'] . ' — ' . $Experience[1]['workplace']
                ?>
    </h3>
        <p>
            <?=
            $Experience[2] ['start'] . ' - ' . $Experience[3]['end']
            ?>
    </p>
        <p class="text">
            <?=
            $Experience[4] ['description']
        ?>
        </p>
        <h3 >Visual Designer — OutboundEngine</h3>
        <p>Sept. 2017 - Mar. 2020</p>
        <p class="text">Describe your responsibilities.  Tum dicere exorsus est cur verear, ne ad id omnia referri oporteat, ipsum per se ipsam voluptatem, quia consequuntur magni dolores eos, qui blanditiis praesentium voluptatum deleniti atque insitam in ea quid est eligendi optio, cumque nihil ut ipsi auctori huius disciplinae placet: constituam, quid.</p>
        <h3 >Lead Designer — Scrypt, Inc.</h3>
        <p>Jun. 2014 - Sept. 2017</p>
        <p class="text" >Describe your responsibilities.  Tum dicere exorsus est cur verear, ne ad id omnia referri oporteat, ipsum per se ipsam voluptatem, quia consequuntur magni dolores eos, qui blanditiis praesentium voluptatum deleniti atque insitam in ea quid est eligendi optio, cumque nihil ut ipsi auctori huius disciplinae placet: constituam, quid.</p>
        <h3>UI Designer — Pinger Inc.</h3>
        <p>Jun. 2014 - Sept. 2017</p>
        <p class="text" >Describe your responsibilities.  Tum dicere exorsus est cur verear, ne ad id omnia referri oporteat, ipsum per se ipsam voluptatem, quia consequuntur magni dolores eos, qui blanditiis praesentium voluptatum deleniti atque insitam in ea quid est eligendi optio, cumque nihil ut ipsi auctori huius disciplinae placet: constituam, quid.</p>
        <img class="image-text" src="img/Rectangle (1).png" alt="">
        <h2 class="text_content" >Education</h2>
        <h3 >BFA in Graphic Design — James Madison University</h3>
        <p >Graduated 2014</p>
        <img class="image-text" src="img/Rectangle (1).png" alt="">
    </section>

      <section class="pk">
      <?php
        $skillset = ['Visual Design','Illustration','Ux/ Prototyping','Video / Motion Graphics','Marketing','Front-End Develop'];
    ?>
            <h3 >Skillset</h3>
        <ul class="skill">
            <li> <?php echo $skillset[0] ?> </li>
            <li> <?php echo $skillset[1] ?> </li>
            <li> <?php echo $skillset[2] ?> </li>
            <li> <?php echo $skillset[3] ?> </li>
            <li> <?php echo $skillset[4] ?> </li>
            <li> <?php echo $skillset[5] ?> </li>
        </ul>
        <h3 >Awards</h3>
        <?php 
        $awards = [['number'=>'Award 1', 'date'=>'Mar.2019'],
                   ['number2'=>'Award 2', 'date2'=>'Sept.2015'],
                   ['number3'=>'Award 3','date3'=>'Feb.2013'],
                   ['number4'=>'Award 4', 'date4'=>'Dec.2011'],
                   ['number5'=>'Award 5','date5'=>'Jan.2005']]
        ?>
        <ul class="skill">
            <li>
                <?=
                 $awards[0] ['number'] . ' - ' . $awards[0]['date']
                ?>
            </li>
            <li>
                 <?=
                 $awards[1] ['number2'] . ' - ' . $awards[1]['date2']
                ?>
                </li>
            <li> <?=
                 $awards[2] ['number3'] . ' - ' . $awards[2]['date3']
                ?>
                </li>
            <li><?=
                 $awards[3] ['number4'] . ' - ' . $awards[3]['date4']
                ?>
                </li>
            <li>
            <?=
                 $awards[4] ['number5'] . ' - ' . $awards[4]['date5']
                ?>
                </li>
        </ul>
        <h3 >Career Traits</h3>
        <p><b>Holistic Designer</b>- Design should be treated as a living organism, guided by the environment it lives in as a whole. </p>
        <p><b>User-Focused</b>- I pay close attention to the user’s needs and pain points. I design with empathy. Launch, learn & iterate.</p>
        <p><b>Proactive Evolution</b>- Curiosity and a desire to learn constantly broadens my skill set, enabling me to wear many hats at once.</p>
        <p><b>Bold, yet practical</b> I know when to push the boundaries vs. when to embrace simplicity to meet multiple deadlines.</p>
        <h3  >Recent Works</h3>
        <ul class="skill1">
            <li><a href="">thedonut.com</a></li>
            <li><a href="">outboundengine.com</a></li>
            <li><a href="">rswalsh.com</a></li>
            <li><a href="">frondaustin.com</a></li>
            <li><a href="">tipyo.net</a></li>
            <li><a href="">codefresh.io</a></li>
            <li><a href="">carsoncreekranch.com</a></li>
        </ul>
    </section>
    </main>
<section>
    <footer>
        <div class="get">
            <h2>Get in touch!</h2>
            <div class="contacts">
                <?php 
                $mail = 'dimabojko074@gmail.com'
                ?>
            <p>
                <?=
                $mail
            ?>
            <br> 512.273.1838</p>
            </div>
            <div class="image">
                <img src="img/facebook.png" alt="">
                <img src="img/instagram.png" alt="">
                <img src="img/linkedin.png" alt="">
                <img src="img/twitter.png" alt="">
            </div>
        </div>
    </footer>
</section>
</body>
</html>



