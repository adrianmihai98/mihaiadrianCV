<?php
$firstname = 'Adrian';
$lastname = 'MIHAI';
$mail = 'm.adrian_98@yahoo.ro';
$address = 'str. lebedei 27, 500461, brașov, românia';
$tel = '0736360488';
$romanianlevel = '5';
$englishlevel = '4';
$background1 = '#015b7f';
$background2 = '#028fb3';
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<page size="A4">

<div class="wrapper">
  <article class="main">
    <div class="categories">
        <div class="profile" id="divstyle">
            <h1>Profile</h1>
            <p>Eager and ambitious to learn, recently graduated from `Universitatea Transilvania` with a degree in economics and information technology. I consider myself a dedicated, trustworthy individual who thrives both independently and as part of a team. I am looking forward to working in a dynamic environment that will provide me with the opportunity to grow and thrive while also making me a valuable asset to my team. I am very adaptable, goal-oriented, and agile.</p>
        </div>
        <div class="studies" id="divstyle">
            <h1>Studies & education</h1>
            <p>Bachelor of Science: Economical Informatics, Universitatea
                Transilvania<br>
                Brasov | October 2019 - July 2022<br>
                Undergraduate Dissertation: created a website using PHP, MySQL, HTML,
                CSS and JS about restaurants reviews.<br>
                Skills acquired: Java for Frontend, PHP for backend, SQL Technologies to
                make it dynamic which communicated with a database.
<br>
                Relevant Modules:
<br>
                Algorithms and Data Structures <br>
                Cloud Computing<br>
                Database<br>
                Object Oriented Programming<br>
                Programming in SGBD Oracle Data Analysis<br>
                Software Packages (Microsoft Office Package)<br>
                Web Design<br>
                Web Technologies<br>
</br>
                High School, “Colegiul Economic” Buzau | September 2014 - June 2018
                Economic Profile
                </p>
        </div>
        <div class="workexperience" id="divstyle">
            <h1>work experience</h1>
                <p>Waiter, Belvedere Magura Restaurant, Brasov | March 2018 - September 2022 <br></br>
            Waiter with excellent customer service skills. Extremely efficient, reliable, and dependable. Experience of keeping guests happy and showing up on time. Able to remember orders from memory and work night or day shifts.<br>
    Serving and interacting with the clients in a friendly and polite manner in order
    to maintain a smooth and dynamic conversation, with the purpose of ensuring
    customer satisfaction and hence adding value to the company.
    <br></br>
    Courier, Sameday
    Brasov | September 2022 - March 2023<br></br>
    Loading, transporting, and delivering items to clients or businesses in a safe, timely manner. Reviewing orders before and after delivery to ensure that orders are complete, the charges are correct, and the customer is satisfied.
    Checking on inventory and the state/quality of the products, ensuring the
    orders for the customers will be fulfilled at an adequate quality and hence
    making sure the right quantity will be delivered to the clients at asatisfactory
    quality and in order to maintain and improve customer satisfaction.</p>
        </div>
    </div>
  </article>
  <aside class="aside aside-1">
  <div class="profile-picture">
        <img src="images/profile.jpg" alt="profilepic">
    </div>
    <div class="components">
        <div id="name">
            <h1 >first name & last name</h1>
            <h2><?php echo "$firstname"; ?> <?php echo "$lastname"; ?></h2>
        </div>
        <div id="address">
        <h1 class="header">address</h1>
            <p></p><a href="http://maps.google.com/?q=<?php echo "$address"; ?>"><?php echo "$address"; ?></a>
        </div>
        <div id="contact">
            <h1>contact</h1>
            <p><a href="mailto: <?php echo "$mail"; ?>"><?php echo "$mail"; ?></a></p>
            <p><a href="tel:<?php echo "$tel"; ?>"><?php echo "$tel"; ?></a></p>
        </div>
        <div id="dateOfBirth">
            <h1>date of birth</h1>
            <p>02/09/1998</p>
        </div>
        <div id="Languages">
            <h1>Language Skills</h1>
            <h2>Romanian</h2>
            <p>native</p>
            <h2>English</h2>
            <p>medium</p>
        </div>
        <div id="Skills">
            
            <h1>skills acquired from degree</h1>
            <h2>SQL / MySQL</h2>
            <div class="skilllevelwrapper">
            <?php 
                $level = 2;
                for($x = 1; $x<=$level; $x++){
                    echo '<div class="levelbar"></div>';
                }
            ?>
            </div>
            <p></p>
            <h2>HTML</h2>
            <div class="skilllevelwrapper">
            <?php 
                $level = 3;
                for($x = 1; $x<=$level; $x++){
                    echo '<div class="levelbar"></div>';
                }
            ?>
            </div>
            <p></p>
            <h2>CSS</h2>
            <div class="skilllevelwrapper">
            <?php 
                $level = 2;
                for($x = 1; $x<=$level; $x++){
                    echo '<div class="levelbar"></div>';
                }
            ?>
            </div>
            <p></p>
            <h2>PHP</h2>
            <div class="skilllevelwrapper">
            <?php 
                $level = 2;
                for($x = 1; $x<=$level; $x++){
                    echo '<div class="levelbar"></div>';
                }
            ?>
            </div>
            <p></p>
            <h2>JAVA</h2>
            <div class="skilllevelwrapper">
            <?php 
                $level = 1;
                for($x = 1; $x<=$level; $x++){
                    echo '<div class="levelbar"></div>';
                }
            ?>
            </div>
            <p></p>
            <h2>Microsoft Office Suite</h2>
            <div class="skilllevelwrapper">
            <?php 
                $level = 3;
                for($x = 1; $x<=$level; $x++){
                    echo '<div class="levelbar"></div>';
                }
            ?>
            </div>
            <p></p>
            
        </div>
        <div id="Others">
            <h1>other abilities</h1>
            <h2>driving license</h2>
        </div>
    </div>
  </aside>
</div>
</page>

</body>
</html>