<?php include("header.html"); ?>

<link rel="icon" href="./IMG/logo.png">

</head>
<body>
<section id="top">
    <header id="header">
        <div class="container">
            <div class="row">
                <div id="card">
                    <div class="front">
                        <img id="front-logo" src="IMG/dino-logo-without-crown.png" alt="logo"/>
                    </div>
                    <div class="back">
                        <img id="back-logo" src="IMG/logo.png" alt="logo"/>
                    </div>
                </div>
                <div class="menu">
                    <nav id="top-nav">
                        <ul>
                            <li><a href="index.php"><p>About</p></a></li>
                            <li><a href="work.php"><p>Work</p></a></li>
                            <li><a href="Resume(JongyeonKim).pdf"><p>Resume</p>
                                </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="main" class="img-responsive center">
        <div id="top-container">

            <div id="main-background-img"></div>
            <div id="main-dino"></div>
        </div>
    </div>

</section>

<section id="hello">
    <img id="logo-hello" src="IMG/logo.png" alt="logo"/>
    <p>
        <span>Hi.</span><br><br>

        My name is Jongyeon Kim. You can call me Rex.<br>
        I have a Bachelor of Computer Science degree at Georgia Institute of Technology.<br>
        My goal is to obtain a position where I can combine my skills,<br>
        a well-rounded computer science education, and my computing knowledge. </p>
</section>
<hr>
<section id="what_i_can">
    <p><span>What I can do</span></p>
    <p>Skills.</p>
    <div class="what-container">
        <div class="col-md-3 col-sm-3 col-xs-3">
            <div id="dino-programming"></div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <h4>Languages / Framework</h4>
            <li>Java</li>
            <li>HTML / CSS / JavaScript</li>
            <li>AngularJS / Bootstrap</li>
            <li>PHP</li>
            <li>MySQL</li>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <h4>Tools / Systems</h4>
            <li>Git</li>
            <li>Eclipse / IntelliJ IDEA / Vim</li>
            <li>Android Studio / Visual Studio</li>
            <li>Linux / Windows</li>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <h4>Methodology</h4>
            <li>Agile Development</li>
            <li>BDD / TDD</li>
        </div>
    </div>
    <br><br><br>
    <p>Team Work.</p>
    <div class="what-container">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div id="team-work-content">
                I'm a team player.<br>
                I am really happy to clearly communicate with team members,<br>
                and work together toward common goal.
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div id="dino-team"></div>
        </div>
    </div>
</section>
<script src="js/helper-index.js"></script>

<?php include("footer.html"); ?>


