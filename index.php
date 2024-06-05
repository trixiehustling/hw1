<?php 
    require_once 'ControlloLogin.php';
    if ($username = checkAuth()) {
        header("Location: index_con_login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEA</title>
    <link rel="stylesheet" href="hw1.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
   
    <!--
    <?php
    /*
        require_once('config.php');

        session_start();

        // Simulazione del controllo di login
        $is_logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
    */
    ?>
    -->

    <div class="top">
        <div id="extrastuff1">
        </div>
        <div class = "topdentro">
            
            <img src="img/us_flag_small.png">
            <span>An official website of the United States government</span>
            <button id="p1">Here’s how you know</button>
        </div>    
        <div id="extrastuff2"></div>  
    </div>

<div class="bloccocheappare">
    <div class="contenuto">
        <div class="apparizione">

            <div class="icone"><img src="img/icona1.png"></div>
            <div class="resto">
                <div class="titolo">
                    <strong>Official websites use .gov</strong>
                </div>
                <div class="scritte">
                    A .gov website belongs to an official government organization in the United States.
                </div>
            </div>
            </div>

        <div class="apparizione">
            <div class="icone"><img src="img/icona2.png"></div>
            <div class="resto">
            <div class="titolo">
                <strong>Secure .gov websites use HTTPS</strong>
            </div>
            <div class="scritte">
                A lock ( ) or https:// means you’ve safely connected to the .gov website. Share sensitive information only on official, secure websites.
            </div>
        </div>
    </div>
        
    </div>
    
</div>

    <div class="center">
        <div class ="centro">
            <div class="image">
            <img src="img/logo-alt.svg">
        </div>
            <p><strong>DEA</strong></p>
            <p1>United States Drug Enforcement Administration</p1>
         </div>

         <div class="barra">
         <div class="topnav">
            <div class="element">
            <a class="active" href="#home">Get Updates</a>
            <a href="#about">Scam Alert</a>
            <a href="#contact">English</a>
            <b href="">Espanol</b>
        </div>
        <div class="search">
                
            <input type="text" placeholder="Search DEA.gov">
            <button type="submit"><i class="fa fa-search"></i></button>
            <div class="lente">
                
            </div>
            
        </div>
          </div> 
          
        </div>
        
    </div>
    <div class="bottom">
        <div class="extra"></div>
        <div class="visibili">
            <div class="sinistra">
                <div class="b1">
                    <button class="but1" onclick="window.location.href='https://www.dea.gov/who-we-are'">Who We Are</button>

                    <div class="WhoWeAre">
                        <a href="#" onclick="window.location.href='about.php'">About</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/about/mission'" >Mission</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/about/history'">History</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/divisions'">Divisions</a>
                        <a href="#" onclick="window.location.href='https://museum.dea.gov/'">DEA Museum</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/foreign-offices'">Foreign Divisions</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/who-we-are/operational-divisions'">Operational Divisions</a>
                        <a href="#" onclick="window.location.href='https://museum.dea.gov/wall-honor'">Wall of Honor</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/who-we-are/contact-us'">Contact Us</a>
                    </div>
                </div>
                
                <div class="b2">
                    <button class="but2" onclick="window.location.href='https://www.dea.gov/what-we-do'">What We Do</button>

                    <div class="WhatWeDo">
                        <a href="#" onclick="window.location.href='https://www.dea.gov/law-enforcement'">Law Enforcement</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/what-we-do/education-and-prevention'">Education and Prevention</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/drug-information'">Drug Information</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/news'">News</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/what-we-do/campaigns'">Campaigns</a>
                    </div>
                </div>

                <div class="b3">
                    <button class="but3" onclick="window.location.href='https://www.dea.gov/careers'">Careers</button>

                    <div class="Careers">
                        <a href="#" onclick="window.location.href='https://www.dea.gov/careers/special-agent'">Special Agent</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/careers/diversion-investigator'">Diversion Investigator</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/careers/intelligence-research-specialist'">Intelligence Research Specialist</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/careers/forensic-sciences'">Forensic Science Careers</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/careers/professional-administrative-careers'">Profession & Administrative Careers</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/careers/student-entry-level-careers'">Student & Entry Level Careers</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/careers/how-apply'">How To Apply</a>
                    </div>
                </div>

                <div class="b4">
                    <button class="but4" onclick="window.location.href='https://www.dea.gov/resources'">Resources</button>

                    <div class="Resources">
                        <a href="#" onclick="window.location.href='https://www.dea.gov/resources/fentanyl-supply-chain'">Pill Press Resources</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/resources/pill-press-resources'">Recovery Resources</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/recovery-resources'">Data and Statistics</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/foia'">FOIA</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/resources/documents?field_document_document_type_value=Publication'">Publications</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/resources/media-galleries'">Media Galleries</a>
                        <a href="#" onclick="window.location.href='https://www.dea.gov/resources/vwap'">Victim Witness Assistance Program</a>
                    </div>
                </div>

                <div class="login">
                <a id="login" href="login.php" onclick="toggleDropdownLogin()">Login</a>
                <a id="shop" href="shop.php" onclick="toggleDropdownLogin()">Shop</a> 
            </div>

            </div>
            
                <div class="destra">
                <button class="submit" id="submitTipBtn" onclick="window.location.href='donate.php'">Submit A Tip</button>
                </div>
        </div>
       
            <div class="extra"></div>
        
    </div>

   <div class="section1">
        
        <div class="sinistratutto">
            <div class="box1">
                <div class="overtext">     
                    <strong>DEA announces National Drug Take Back Day</strong>
                    
                    <button class="botton3" id="downloadBtn">Download Resources</button>
        <div id="downloadBox" class="modal">
            <div class="modal-content">
                <div class = "chiudere">
                    <span id="closeBtn" class="close">&times;</span>
                </div>
                <?php if ($is_logged_in): ?>
                    <p>Puoi scaricare le risorse <a href="resources.zip" download>qui</a>.</p>
                <?php else: ?>
                    <div id="loginMessage" class="hidden3">
                        <p>Per scaricare le risorse devi essere un agente della DEA.</p>
                        <div class = subhidden>
                            <div class = "accesso" id="accessoid" onclick="window.location.href='login.php'">Accedi</div>
                            <a>o</a>
                            <div class = "registro" id= "registroid" onclick="window.location.href='registrazione.php'">registrati</div>
                        </div>
                    </div>
                <?php endif; ?>
        </div>
    </div>
                    </div>
                <div class="sinistra1">
                </div>
            </div>
            

            <div class="destraimg">
                <img id="PRINCIPALE" src="img/TBD_April2024.jpg" alt="Home" onmouseover="changeImage()" onmouseout="resetImage()">
            </div>
            
                     
        </div>
        
        

        <div class ="sfondo">
            <img src = "img/dea-hero-overlay-bg.jpg">
             <img src = "img/dea-hero-overlay-bg.jpg">
             
        </div>
        
        
    </div>

    <div class="section2">
        <div class="sinistras2">
            <div class="altos2">
                <strong>DEA Fentanyl Seizures in 2024</strong>
                <a></a>
            </div>
            <a>In 2023, DEA seized more than 79.5 million fentanyl-laced fake pills and nearly 12,000 pounds of fentanyl powder. The 2023 seizures are equivalent to more than 376.7 million lethal doses of fentanyl.</a>
            <a>The 2024 fentanyl seizures represent over 82.6 million deadly doses. * </a>
        </div>

        <div class="restos2">
            <a><strong>Millions of Fentanyl Pills Seized</strong></a>
        <a><strong>Pounds of Fentanyl Powder Seized</strong></a>
        </div>
        
        <img src="img/dea-fentanyl-block-image-mobile.png">

    </div>

    <div class="section3">
        <div class="sinstra3">
            <div class=" im3">
                <img src="img/dea-gold-logo.png">
            </div>
            <div class="bloccos3">
                <div class="titles3">
                    <strong>About the DEA</strong>
                    <a></a>
                </div>
                <a>The mission of the Drug Enforcement Administration (DEA) is to ensure the safety and health of American communities by combating criminal drug networks bringing harm, violence, overdoses, and poisonings to the United States. To accomplish this mission, the DEA employs approximately 10,000 personnel throughout the world – Special Agents, Diversion Investigators, Intelligence Analysts, Chemists, and professional staff – across 241 domestic offices in 23 Divisions and 93 foreign offices across the globe.</a>
                <div class="buttons3">
                    <button class="bs31" onclick="window.location.href='about.php'">Learn More About Us</button>
                    <button class="bs32">DEA Leadership</button>
                </div>
            </div>

            <div class="destras3">
                <img src="img/DEA_Recruitment_Large-800x800.jpg">
                <div class="robad3">
                    <a onclick="window.location.href='becomeDEA.php'"><strong>Become a DEA Agent</strong></a>
                    <div class="backgrounds3"></div>
                </div>
                
            </div>
        </div>
        <div class="destra3">

        </div>
    </div>

    <div class="sbarra">
        <a></a>
    </div>

    <div class="section4">
        <div class="title4">
            <strong>Featured Resources</strong>
            <a></a>
        </div>
        <div class="testo4">
            <a>DEA is committed to tackling the nationwide drug overdose and poisoning crisis that is driven by criminal drug networks. This work includes a critical focus on outreach, prevention, engagement, and education with law enforcement partners and communities across the nation.</a>
        </div>
        
        <div class="fotos4">
            <div class="f14">
                <img src="img/dea-resource-fentanyl-awareness.png">
                <div class="tit14">
                    <a><strong>One Pill Can Kill</strong></a>
                    <div class="backgrounds4"></div>
                </div>
            </div>
            <div class="f24">
                <img src="img/DEA_EveryDayisTBD_Organic_Social -2-.jpg">
                <div class="tit24">
                    <a><strong>Rx Disposal</strong></a>
                    <div class="backgrounds4"></div>
                </div>
                
            </div>
            <div class="f34">
                <img src="img/DEAgov OWF.png">
                <div class="tit34">
                    <a><strong>Operation Warfighter</strong></a>
                <div class="backgrounds4"></div>
                </div>
                
            </div>
            <div class="f44">
                <img src="img/Pill Press 5x.jpg">
                <div class="tit44">
                    <a><strong>Pill Press Resources</strong></a>
                    <div class="backgrounds4"></div>
                </div>
               
            </div>
        </div>
    </div>

    <div class="section5">

        <div class="title4">
            <strong>Recent News Releases</strong>
            <a></a>
        </div>
        
        <div class="fotos5">

            <div class="f15">
                <div class="title5"><strong>PRESS RELEASE</strong></div>
                <div class="space5"></div>
                <div class="link5"><strong>Arkansas Felon Who Possessed Ammunition Sentenced to 30 Years in Federal Prison</strong></div>
                <div class="barra5"></div>
                <div class="space5"></div>
                <div class="data5">March 21, 2024</div>
            </div>

            <div class="f15">
                <div class="title5"><strong>PRESS RELEASE</strong></div>
                <div class="space5"></div>
                <div class="link5"><strong>Three Rutland Drug Traffickers Sentenced</strong></div>
                <div class="barra5"></div>
                <div class="space5"></div>
                <div class="data5">March 21, 2024</div>
            </div>

            <div class="f15">
                <div class="title5"><strong>PRESS RELEASE</strong></div>
                <div class="space5"></div>
                <div class="link5"><strong>New Britain Man Involved in Cocaine Trafficking Sentenced to 30 Months in Federal Prison</strong></div>
                <div class="barra5"></div>
                <div class="space5"></div>
                <div class="data5">March 21, 2024</div>
            </div>

            <div class="f15">
                <div class="title5"><strong>PRESS RELEASE</strong></div>
                <div class="space5"></div>
                <div class="link5"><strong>Pawtucket Man to Serve Six Years in Federal Prison for Selling Fentanyl Pills </strong></div>
                <div class="barra5"></div>
                <div class="space5"></div>
                <div class="data5">March 21, 2024</div>
            </div>



        </div>

        <button class="bs5">View All New Releases</button>
    </div>

    <div class="section4" data-info="DEA's Community Outreach strategy" data-action="develop and disseminate effective drug information" data-placeholder="teens, parents, caregivers, and educators" data-category="awareness" data-link="https://example.com/community-outreach">
        <div class="title4">
            <strong>Community Outreach</strong>
            <a></a>
        </div>
        <div class="testo4">
            <a>DEA’s Community Outreach strategy is to develop and disseminate effective drug information for teens, parents, caregivers, and educators, and to increase the public’s awareness about the dangers associated with using drugs.</a>
        </div>
    
        <div class="fotos4">
            <div class="f14" data-info="Game Over" data-action="drug prevention game" data-category="prevention" data-link="https://example.com/game-over">
                <img src="img/480x480 game over.png">
                <div class="tit14">
                    <a><strong>Game Over</strong></a>
                    <div class="backgrounds4"></div>
                </div>
            </div>
            <div class="f24" data-info="Parents, Educators & Caregivers" data-action="educational resources" data-category="education" data-link="https://example.com/parents-educators-caregivers">
                <img src="img/GSADdeagov.png">
                <div class="tit24">
                    <a><strong>Parents, Educators & Caregivers</strong></a>
                    <div class="backgrounds4"></div>
                </div>
    
            </div>
            <div class="f34" data-info="College Campus Communities" data-action="community programs" data-category="community" data-link="https://example.com/college-campus-communities">
                <img src="img/CDP_deagov.png">
                <div class="tit34">
                    <a><strong>College Campus Communities</strong></a>
                    <div class="backgrounds4"></div>
                </div>
    
            </div>
            <div class="f44" data-info="Teens" data-action="youth outreach programs" data-category="youth" data-link="https://example.com/teens">
                <img src="img/JTT_deagov.png">
                <div class="tit44">
                    <a><strong>Teens</strong></a>
                    <div class="backgrounds4"></div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="section6">
        <div class="title6">
            <strong>Most Wanted Fugitivers</strong>
        </div>

        <div class="barra6"></div>

        <div class="subtitle6">DEA publishes a list of the most wanted fugitives wanted for alleged federal violations of controlled substances laws to help capture and bring them to justice.</div>

        <div class="f6">
            <div class="f16">
                <div class="im16">

                    <img src="img/cervantes-1-.jpg">
                </div>
                <strong>Nemesio Oseguera Cervantes</strong>
            </div>
            <div class="f26">
                <div class="im26">
                  <img src="img/zambada-garcia.jpg">
                </div>
                <strong>Ismael Zambada Garcia</strong>
            </div>

            <div class="f36">
                <div class="im36">
                    <img src="img/Fugitive Jesus Alfredo Guzman Salazar.jpg">
                </div>

                <strong>Jesus Alfredo Guzman-Salazar</strong>
            </div>

        </div>

        <button onclick="window.location.href='wanted.php'">View Most Wanted Fugitives</button>
    </div>

    <div class="footer">
        <div class="sinistraf">
            <img src="img/logo-alt.svg">
            <div class="testof">
                <div class="titlef">
                    <strong>United States Drug Enforcement Administration</strong>
                </div>
                <div class="subtitlef">
                    <a>DEA.gov is an official site of the</a>
                    <a href="">U.S. Department of Justice</a>
                </div>
            </div>
        </div>

        <div class="destraf">

        </div>
    </div>


    
    <h1>Album musicali</h1>
<form id="albumForm">
  Inserisci il nome di un album 
  <input type='text' id='album'>
  <input type='submit' id='submit' value='Cerca'>
</form>

<section id="album-view">
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p id="modalContent">Contenuto della modale qui...</p>
    </div>
  </div>
</section>

    
<h1>Google Translate</h1>
<form id="translationForm">
  <label for="textToTranslate">Rileva lingua:</label><br>
  <textarea id="textToTranslate" name="textToTranslate" rows="4" cols="50"></textarea><br><br>

  <input type="submit" value="Traduci">
</form>

<div id="translationResult"></div>



    <script src="hw1.js"></script>
</body>
</html>