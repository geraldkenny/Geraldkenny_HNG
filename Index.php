<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
            font-family: Verdana, Geneva, sans-serif;
        }

        .h2 {
            font-family: Lucida Console, Monaco, monospace;
        }

        /*body, html {
    height: 100%;
}*/ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

        /* Set padding to keep content from hitting the edges */

        .body-content {
            padding-left: 15px;
            padding-right: 15px;
        }
    </style>
   

</head>
<title>

</title>

<body>
        <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header" style="font-family: Lucida Console, Monaco, monospace; ">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                      <div class="navbar-brand">
                            CONTACT
                      </div> 
        
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right" style="font-family: Courier New, Courier, monospace;">
                            <li>Home</li>
                            <li>About</li>
                            <li>
                               CONTACT
                            </li>
                            <li>
                                PORTFOLIO
                            </li>
                        </ul>
        
                    </div>
                </div>
            </div>
    <div>
        <h1 style="font-family: Lucida Console, Monaco, monospace; ">
            <strong>Gerald</strong> Kenny</h1>
            <center>        <img src="file:///c:/Users/Gerald/Documents/VS Code/HNG/Images/GeraldkennyImg.jpg" width=850px height="350px">
            </center>
        <br />
        <br />

        <div class="row">
            <div class="col-md-4">
                <h2 style="font-family: Georgia, serif; ">Consulting</h2>
                <p>It doesn’t stop with design. I can develop your product from visual concept to fully functional website.</p>
                <p> I’ll fit seamlessly into your workflow. Whether that’s taking client feedback directly, or attending client
                    meetings as ‘one of your agency team’, we never disclose who I am or what I do for your business.</p>
                <p>
                    <a class="btn btn-default" href="#Portf">Check it out &raquo;</a>
                </p>
            </div>
            <div class="col-md-4">
                <h2 style="font-family: Georgia, serif;">Simplicity is
                    <strong>key</strong>
                </h2>
                <p>Simple, minimal &amp; effective. This is my mantra &amp; method. Clean code, fuss­free interfaces &amp; expert
                    execution, design as it should be.</p>
                <p>
                    <a class="btn btn-default" href="#Portf">Check it out &raquo;</a>
                </p>
            </div>
            <div class="col-md-4">
                <h2 style="font-family: Georgia, serif; ">Ready To get Started?</h2>
                <p>There’s no style over substance here. I bring together form &amp; the function to create something that looks
                    good &amp; performs brilliantly. Simple.</p>
                <p>
                    <a class="btn btn-default">Check it out &raquo;</a>
                </p>
            </div>
           
        </div>
        <center>
        <div>
            <?php
            echo "The time is " . date("h:i:sa");
            $date = date('m/d/Y h:i:s a', time());
            ?>
        </div>
    </center>
        
</body>

</html>