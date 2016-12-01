<?php include("header.html"); ?>

<link rel="icon" href="./IMG/dino-logo-glasses.png">

</head>
<body>
<section id="top">
    <header id="header">
        <div class="container">
            <div class="row">
                <div id="card">
                    <div class="front">
                        <img id="front-logo" src="IMG/logo.png" alt="logo" />
                    </div>
                    <div class="back">
                        <img id="back-logo" src="IMG/dino-logo-glasses.png" alt="logo" />
                    </div>
                </div>
                <div class="menu">
                    <nav id="top-nav">
                        <ul>
                            <li><a href="index.php"><p>About</p></a></li>
                            <li><a href="work.php"><p>Work</p></a></li>
                            <li><a href="Resume(JongyeonKim).pdf"><p>Resume</p></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div id="main" style="height: 730px;">
        <div id="top-container">
            <div id="work-dino"></div>
        </div>
    </div>
</section>

<section id="hello" style="height: 450px;">
    <img id="logo-hello" src="IMG/dino-logo-glasses.png" alt="logo"/>
    <p>
        <span>Hi.</span><br><br>
        I am still learning many things and really happy to improve myself.<br>
        Here's a section of my recent projects.<br>
        I always try to connect my overall skills and knowledge in a project.<br>
    </p>

</section>

<br><br><br>
<hr>
<section class="project" id="sql-generator">


    <div class="project-img">
        <img class="mySlides sql-generator" style="visibility: visible;" src="IMG/sql-generator/img-1.png"/>
        <img class="mySlides sql-generator" style="visibility: hidden;" src="IMG/sql-generator/img-2.png"/>
        <img class="mySlides sql-generator" style="visibility: hidden;" src="IMG/sql-generator/img-3.png"/>
        <img class="mySlides sql-generator" style="visibility: hidden;" src="IMG/sql-generator/img-4.png"/>
    </div>
    <div class="project-btn">
        <img src="IMG/left.png" style="left:0;margin-right: 700px;"
             onclick="plusDivs(-1, 'sql-generator')"/>
        <img src="IMG/right.png" style="right:0;"
             onclick="plusDivs(1, 'sql-generator')"/>
    </div>

    <p>
        <span>SQL Generator</span><br>

        Online based MySQL tool to generate create table query quickly.<br>
        Implemented a website which can generate CREATE TABLE statement automatically<br>
        from database schema which user created.<br>
        Implemented DB visualizer for database schema diagram using AngularJS and JsPlumb.<br>
    </p>

    <div style="display: inline-flex">
        <div>
            <a href="https://github.com/mattina401/sql-generator"><img height="50px" src="IMG/github-logo.png"></a>
        </div>

    </div>

</section>
<section class="project" id="link2list">


    <div class="project-img">
        <img class="mySlides link2list" style="visibility: visible;" src="IMG/link2list/img-1.png"/>
        <img class="mySlides link2list" style="visibility: hidden;" src="IMG/link2list/img-2.png"/>
        <img class="mySlides link2list" style="visibility: hidden;" src="IMG/link2list/img-3.png"/>
        <img class="mySlides link2list" style="visibility: hidden;" src="IMG/link2list/img-4.png"/>
    </div>
    <div class="project-btn">
        <img src="IMG/left.png" style="left:0;margin-right: 700px;"
             onclick="plusDivs(-1, 'link2list')"/>
        <img src="IMG/right.png" style="right:0;"
             onclick="plusDivs(1, 'link2list')"/>
    </div>

    <p>
        <span>Link2List</span><br>

        Online task management website which can share<br>
        task list with others and manage them in real time.<br>
        Implemented frontend using HTML, CSS and communicated with MySQL by PHP<br>
        and Ajax to spread data without reloading the whole page.
    </p>

    <div style="display: inline-flex">
        <div>
            <a href="https://github.com/mattina401/Link2List"><img height="50px" src="IMG/github-logo.png"></a>
        </div>
        <div style="padding-left: 50px;">
            <a href="https://link2list.net"><img height="50px" src="IMG/house-icon.png"></a>
        </div>
    </div>

</section>
<hr>
<section class="project" id="gt-book">
    <div class="project-img">
        <img class="mySlides book" style="visibility: visible;" src="IMG/book-swap/img-1.png"/>
        <img class="mySlides book" style="visibility: hidden;" src="IMG/book-swap/img-2.png"/>
        <img class="mySlides book" style="visibility: hidden;" src="IMG/book-swap/img-3.png"/>
        <img class="mySlides book" style="visibility: hidden;" src="IMG/book-swap/img-4.png"/>
        <img class="mySlides book" style="visibility: hidden;" src="IMG/book-swap/img-5.png"/>

    </div>
    <div class="project-btn">
        <img src="IMG/left.png" style="left:0;margin-right: 700px"
             onclick="plusDivs(-1, 'book')"/>
        <img src="IMG/right.png" style="right:0;"
             onclick="plusDivs(1, 'book')"/>
    </div>

    <p>
        <span>GT Book Swap</span><br>

        A Website application that allows users to exchange their<br>
        used textbooks among Georgia tech student.<br>
        Learned HTML, CSS, and JavaScript with .NET Framework<br>
        Acquire role of member in a group as a full stack web dev<br>
    </p>
    <div>
        <a href="https://github.com/mattina401/BookSwap"><img height="50px" src="IMG/github-logo.png"></a>
    </div>

</section>
<hr>
<section class="project" id="self-driving">


    <div class="project-img">
        <img class="mySlides driving" style="visibility: visible;" src="IMG/self-driving/img-1.png"/>
        <img class="mySlides driving" style="visibility: hidden;" src="IMG/self-driving/img-2.png"/>
        <img class="mySlides driving" style="visibility: hidden;" src="IMG/self-driving/img-3.png"/>
        <img class="mySlides driving" style="visibility: hidden;" src="IMG/self-driving/img-4.png"/>
        <img class="mySlides driving" style="visibility: hidden;" src="IMG/self-driving/img-5.png"/>
        <img class="mySlides driving" style="visibility: hidden;" src="IMG/self-driving/img-6.png"/>
    </div>
    <div class="project-btn">
        <img src="IMG/left.png" style="left:0;margin-right: 700px;"
             onclick="plusDivs(-1, 'driving')"/>
        <img src="IMG/right.png" style="right:0;"
             onclick="plusDivs(1, 'driving')"/>
    </div>

    <p>
        <span>Self-Driving Simulator</span><br>

        Java application to simulate an environment to observe<br>
        driving patterns of self-driven cars.<br>
        Integrate OpenStreetMap to the project to depict real roads<br>
        in the location of the user’s choice.
    </p>

    <div>
        <a href="https://github.com/mattina401/self_driving"><img height="50px" src="IMG/github-logo.png"></a>
    </div>
</section>
<hr>
<section class="project" id="yelp-scraper">
    <div class="project-img">
        <img class="mySlides yelp" style="visibility: visible;" src="IMG/yelp-scraper/img-1.png"/>
        <img class="mySlides yelp" style="visibility: hidden;" src="IMG/yelp-scraper/img-2.png"/>
        <img class="mySlides yelp" style="visibility: hidden;" src="IMG/yelp-scraper/img-3.png"/>
        <img class="mySlides yelp" style="visibility: hidden;" src="IMG/yelp-scraper/img-4.png"/>

    </div>
    <div class="project-btn">
        <img src="IMG/left.png" style="left:0;margin-right: 700px"
             onclick="plusDivs(-1, 'yelp')"/>
        <img src="IMG/right.png" style="right:0;"
             onclick="plusDivs(1, 'yelp')"/>
    </div>

    <p>
        <span>Yelp-Scraper</span><br>

        Java application to collect HTML raw data which is<br>
        unstructured data and convert it into a structured data form.<br>
        Implemented a Java based web scraper tool, using Jsoup library,<br>
        which can collect information, such as business information and rating,<br>
        from raw HTML data of Yelp.com webpage and categorize them<br>
        to find previously unknown patterns and relationships.
    </p>
    <div>
        <a href="https://github.com/mattina401/YelpScraper"><img height="50px" src="IMG/github-logo.png"></a>
    </div>
</section>
<hr>
<section class="project" id="apt-rent">

    <div class="project-img">
        <img class="mySlides apt" style="visibility: visible;" src="IMG/apt-rent/img-1.png"/>
        <img class="mySlides apt" style="visibility: hidden;" src="IMG/apt-rent/img-2.png"/>
        <img class="mySlides apt" style="visibility: hidden;" src="IMG/apt-rent/img-3.png"/>
        <img class="mySlides apt" style="visibility: hidden;" src="IMG/apt-rent/img-4.png"/>
        <img class="mySlides apt" style="visibility: hidden;" src="IMG/apt-rent/img-5.png"/>

    </div>
    <div class="project-btn">
        <img src="IMG/left.png" style="left:0;margin-right: 700px"
             onclick="plusDivs(-1, 'apt')"/>
        <img src="IMG/right.png" style="right:0;"
             onclick="plusDivs(1, 'apt')"/>
    </div>

    <p>
        <span>Apartment Rental System</span><br>

        Simple web application which can provide necessary<br>
        service for resident and manager.<br>
        Designed and implemented a Database application using a<br>
        relational DBMS that supports standard SQL and PHP.<br>
        Learned actual database design process and use of modern<br>
        database system.<br>

    </p>
    <div>
        <a href="https://github.com/mattina401/APT_Rental_sys"><img height="50px" src="IMG/github-logo.png"></a>
    </div>
</section>
<hr>
<section class="project" id="assembler">
    <div class="project-img">
        <img class="mySlides assembler" style="visibility: visible;" src="IMG/assembler/img-1.png"/>
        <img class="mySlides assembler" style="visibility: hidden;" src="IMG/assembler/img-2.png"/>
        <img class="mySlides assembler" style="visibility: hidden;" src="IMG/assembler/img-3.png"/>


    </div>
    <div class="project-btn">
        <img src="IMG/left.png" style="left:0;margin-right: 700px"
             onclick="plusDivs(-1, 'assembler')"/>
        <img src="IMG/right.png" style="right:0;"
             onclick="plusDivs(1, 'assembler')"/>
    </div>

    <p>
        <span>Assembler</span><br>


        An assembler can read an assembly file containing a program that ISA spec,<br>
        and it output a MIF file with 2048 32-bit words of memory.


    </p>
    <div>
        <a href="https://github.com/mattina401/CS-3220/tree/master/P2_assembler"><img height="50px"
                                                                                      src="IMG/github-logo.png"></a>
    </div>
</section>
<hr>
<section class="project" id="pac-man">
    <div class="project-img">
        <img class="mySlides pac" style="visibility: visible;" src="IMG/pac-man/img-1.png"/>
        <img class="mySlides pac" style="visibility: hidden;" src="IMG/pac-man/img-2.png"/>
        <img class="mySlides pac" style="visibility: hidden;" src="IMG/pac-man/img-3.png"/>


    </div>
    <div class="project-btn">
        <img src="IMG/left.png" style="left:0;margin-right: 700px"
             onclick="plusDivs(-1, 'pac')"/>
        <img src="IMG/right.png" style="right:0;"
             onclick="plusDivs(1, 'pac')"/>
    </div>

    <p>
        <span>Pac-Man</span><br>

        Simple maze solver based on Java to solve a maze automatically.<br>
        To solve maze, use BST, DST, right hand rule and left hand rule.<br>
        Learend how to apply data structure to simple game.<br>
    </p>
    <div>
        <a href="https://github.com/mattina401/PacMaze"><img height="50px" src="IMG/github-logo.png"></a>
    </div>
</section>
<script src="js/helper-work.js"></script>

<?php include("footer.html"); ?>

