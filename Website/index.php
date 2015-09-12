<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>DemonBucket | Public DemonSaw Network</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Demon Bucket" content="A Public Demonsaw Server backbone for Anonymous File Transfer. ">
    <meta name="author" content="Seth Wahle">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/one.style.css">

    <!-- CSS Footer -->
    <link rel="stylesheet" href="assets/css/footers/footer-v7.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">    
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">    
    <link rel="stylesheet" href="assets/plugins/pace/pace-flash.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css">    
    <link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">    
    <link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">    
    <link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings.css" type="text/css" media="screen">
    <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/theme-skins/one.dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <script src='https://www.google.com/recaptcha/api.js'></script>
	
<!-- 		
/* Usage: 
$status =  GetServerStatus('http://domain.com',80)
or
$status =  GetServerStatus('IPAddress',80)
*/ -->

<?php
function GetServerStatus($site, $port = 80)
{
$status = array("<span class=\"color-red\">DOWN</span>", "<span class=\"color-green\">UP</span>");
$fp = @fsockopen($site, $port, $errno, $errstr, 2);
if (!$fp) {
    return $status[0];
} else 
  { return $status[1];}
}
?> 

</head>

<!-- 
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery dark">
    <!--=== Header ===-->    
    <nav class="one-page-header navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="menu-container page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="#intro">
                    <img width="250" height ="50"src="assets/img/logo1.png" alt="Logo"> 
                </a>
            </div>
</br>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <div class="menu-container">
                    <ul class="nav navbar-nav">
                        <li class="page-scroll home">
                            <a href="#body">Home</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">About</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#servers">Servers</a>
                        </li>
						<li class="page-scroll">
                            <a href="#donate">Donate</a>
                        </li>
                       <!-- <li class="page-scroll">
                            <a href="#news">News</a>
                        </li>-->
                        <li class="page-scroll">
                            <a href="#contact">Submit a Server</a>
                        </li> 
                        <li class="page-scroll">
                            <a href="https://github.com/osteth/DemonBucket">GitHub</a>
                        </li> 
                        <li class="page-scroll">
                            <a href="https://www.reddit.com/r/demonbucket">Reddit</a>
                        </li>                    
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--=== End Header ===-->    

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="fullscreenbanner-container">
            <div class="fullscreenbanner">
                <ul>
                    <!-- SLIDE 1 -->
                    <li data-transition="curtain-1" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
                        <!-- MAIN IMAGE -->
                        <img src="assets/img/sliders/revolution/bg1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                        <!-- LAYERS -->
                        <div class="tp-caption rs-caption-1 sft start"
                            data-x="center"
                            data-hoffset="0"
                            data-y="100"
                            data-speed="800"
                            data-start="2000"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">
                            DEMON<span class="color-green">BUCKET</span> FILE SHARING NETWORK
                        </div>

                        <!-- LAYER -->
                        <div class="tp-caption rs-caption-2 sft"
                            data-x="center"
                            data-hoffset="0"
                            data-y="200"
                            data-speed="1000"
                            data-start="3000"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 6">
                            A Multi-Server Backbone for DEMON<span class="color-green">SAW</span><br>
                            Share Files Anonymously across our high speed server network.
                        </div>

                        <!-- LAYER -->
                        <div class="tp-caption rs-caption-3 sft"
                            data-x="center"
                            data-hoffset="0"
                            data-y="360"
                            data-speed="800"
                            data-start="3500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 6">
                            <span class="page-scroll"><a href="#about" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a></span>
                            <span class="page-scroll"><a href="#servers" class="btn-u btn-brd btn-brd-hover btn-u-light">Servers</a></span>
                        </div>
                    </li>

                    <!-- SLIDE 2 -->
                    <li data-transition="slideup" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
                        <!-- MAIN IMAGE -->
                        <img src="assets/img/sliders/revolution/bg4.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                        <!-- LAYERS -->
                        <div class="tp-caption rs-caption-1 sft start"
                            data-x="center"
                            data-hoffset="0"
                            data-y="100"
                            data-speed="800"
                            data-start="1500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">
                            Public Sharing Group
                        </div>

                        <!-- LAYER -->
                        <div class="tp-caption rs-caption-2 sft"
                            data-x="center"
                            data-hoffset="0"
                            data-y="200"
                            data-speed="1000"
                            data-start="2500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 6">
                            Join the Demon<span class="color-green">Bucket</span> public sharing network.<br> 
                            Share, Search, and Download flies anonymously in our public sharing group.                            
                        </div>

                        <!-- LAYER -->
                        <div class="tp-caption rs-caption-3 sft"
                            data-x="center"
                            data-hoffset="0"
                            data-y="360"
                            data-speed="800"
                            data-start="3500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 6">
                            <span class="page-scroll"><a href="#about" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a></span>
                            <span class="page-scroll"><a href="#servers" class="btn-u btn-brd btn-brd-hover btn-u-light">Servers</a></span>
                        </div>
                    </li>

                    <!-- SLIDE 3 -->
                    <li data-transition="slideup" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
                        <!-- MAIN IMAGE -->
                        <img src="assets/img/sliders/revolution/bg3.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                        <!-- LAYERS -->
                        <div class="tp-caption rs-caption-1 sft start"
                            data-x="center"
                            data-hoffset="0"
                            data-y="110"
                            data-speed="800"
                            data-start="1500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">
                            Contribute to the Demon<span class="color-green">Bucket</span> Network
                        </div>

                        <!-- LAYER -->
                        <div class="tp-caption rs-caption-2 sfb"
                            data-x="center"
                            data-hoffset="0"
                            data-y="210"
                            data-speed="800"
                            data-start="2500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 6">
                            Add your Demon<span class="color-green">Saw</span> server to the Demon<span class="color-green">Bucket</span> Distributed Network 
							<br> or Donate to help keep the Demon<span class="color-green">Bucket</span> Servers up and running.<br>
                            
                        </div>

                        <!-- LAYER -->
                        <div class="tp-caption rs-caption-3 sfb"
                            data-x="center"
                            data-hoffset="0"
                            data-y="370"
                            data-speed="800"
                            data-start="3500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 6">
                            <span class="page-scroll"><a href="#contact" class="btn-u btn-brd btn-brd-hover btn-u-light">Submit a Server</a></span>
                            <span class="page-scroll"><a href="#donate" class="btn-u btn-brd btn-brd-hover btn-u-light">Donate</a></span>
                        </div>
                    </li>                    
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
                <div class="tp-dottedoverlay twoxtwo"></div>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->

    <!--  About Section -->
    <section id="about" class="about-section section-first">
        <div class="block-v1">
            <div class="container">
			
			                <div class="alert alert-success fade in">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                    <strong>Notice:</strong> This site is still heavily under construction. Please excuse the mess :) more features will become available as development continues. If you notice any problems or have any concerns please send them to Seth@DemonBucket.com
					also, The entire source for this site and additional DemonBucket Resorces are available at <a href="https://github.com/osteth/Demonbucket"> https://github.com/osteth/Demonbucket </a> 
                </div>
			
                <div class="row content-boxes-v3">
                    <div class="col-md-4 md-margin-bottom-30">
                        <i class="icon-custom rounded-x icon-bg-dark fa fa-lightbulb-o"></i>
                        <div class="content-boxes-in-v3">
                            <h2 class="heading-sm">MultiServer Backbone</h2>
                            <p>Use our always on-line server backbone to transmit files, or chat anonymously with people in our public group or your own private group. </p>
                        </div>
                    </div>
                    <div class="col-md-4 md-margin-bottom-30">
                        <i class="icon-custom rounded-x icon-bg-dark fa fa-flask"></i>
                        <div class="content-boxes-in-v3">
                            <h2 class="heading-sm">Web Search (Coming Soon!)</h2>
                            <p> Search for shared files to download from Demon<span class="color-green">Bucket</span> Public network via our site. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <i class="icon-custom rounded-x icon-bg-dark fa fa-bolt"></i>
                        <div class="content-boxes-in-v3">
                            <h2 class="heading-sm">Contribute to the Community</h2>
                            <p>Share your files or Server information with the Demon<span class="color-green">Saw</span> community</p>
                        </div>
                    </div>
                </div>                
            </div>
        </div>

        <div class="about-image bg-grey">
            <div class="container">
                <div class="title-v1">
                    <h1>We are Demon<span class="color-green">Bucket</span></h1>
                    <p>Demon<span class="color-green">Bucket</span> is a public Demon<span class="color-green">Saw</span> file sharing group as well as a network of Demon<span class="color-green">Saw</span> servers.<br>
					Transfering Files across our network  allows your transfer to be broken down in to small chunks, 
					<br>distributed across the network and reassembled at their destination.  
					<br>
					
					</p>                
                </div>
                <div class="img-center">
                    <img class="img-responsive" src="assets/img/transfer.png" alt="">
					 </div>
				<div class="title-v1">
					<p>This process enhances the security and anonymity of transfering files via Demon<span class="color-green">Saw</span>.</p>
                </div>
                
                
                
            	<div class="title-v1">
					<p><h1>Getting <span class="color-green">Started:</h1></p>
                </div>
                <div class="img-center">
                    <iframe width="100%" height="540" src="https://www.youtube.com/embed/vdK92aCS0_c" frameborder="0" allowfullscreen></iframe
				 </div>
            </div>
        </div>            
        

				     <div class="parallax-counter parallaxBg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
						<h2>Get Demonsaw:</h2></br>
						<h4><a href="https://www.demonsaw.com/download.php">Release Builds</a></h4></p>
						<h4><a href="https://github.com/osteth/DemonBucket/tree/master/Demonsaw%20Beta%20Builds">Developmet Builds</a></h4>
                    </div>
                    <div class="col-sm-3 col-xs-6">
						<h2>Set-up Guides:</h2></br>
                        <h4><a href="https://www.youtube.com/watch?v=vdK92aCS0_c">Tutorial: Using Demonsaw on the DemonBucket Network</a></h4></p>
                        <h4><a href="https://youtu.be/oimu2mO1KUg">Tutorial: Setting Up a Demonsaw router (Linux-CLI)</a></h4></p>
						<h4><a href="http://www.stinebaugh.info/a-public-demonsaw-router-by-blackunicorn/">Router Config Documentation</a></h4></p>
						<h4><a href="https://www.youtube.com/watch?v=ibCdYn5N8wk">Debian 8 Install</a></h4></p>
						<h4><a href="http://www.stinebaugh.info/demonsaw-startup-script-linux/">Linux Router Start-up Script</a></h4></p>
		

                    </div>
                    <div class="col-sm-3 col-xs-6">
						<h2>Resources:</h2></br>
						<h4><a href="https://github.com/osteth/DemonBucket/tree/master/Client%20Resources">Client Resources</a></h4></p>
						<h4><a href="https://github.com/osteth/DemonBucket/tree/master/Router%20Resources">Router Reasources</a></h4>   
                    </div>
                    <div class="col-sm-3 col-xs-6">
						<h2>News:</h2></br>
                        <h4><a href="https://github.com/osteth/DemonBucket/tree/master/DemonCoin">DemonCoin Released!</a></h4></p>
						<h4><a href="https://www.reddit.com/r/DemonBucket/">NEW DemonBucket Sub-Reddit</a></h4></p>
						<h4><a href="http://www.forbes.com/sites/thomasbrewster/2015/08/20/eijah-john-mcafee-and-demonsaw/">Forbes on Demonsaw</a></h4></p>
						<h4><a href="http://techcrunch.com/2015/08/19/demonsaw-uses-social-cryptography-to-share-files-and-data-anonymously/#.2cge3r:KXol">TechCrunch on Demonsaw</a></h4>    
                    </div>
                </div>            
            </div>
        </div>  
		
    <!-- Servers Section -->
    <section id="servers">
        <div class="container content-lg">
            <div class="title-v1">
                <h2>Demon<span class="color-green">Bucket</span> Network Servers</h2>
                <p>This is a list of the currently available Demon<span class="color-green">Saw</span> Servers that are currently in the Demon<span class="color-green">Bucket</span>
				File Sharing Network, connecting to these servers without a group image or pass phrase will put you in to the Demon<span class="color-green">Bucket</span> Public file sharing group.</p>                
            </div>            
    
            <div class="row service-box-v1">
                <div class="col-md-4 col-sm-6">
                    <div class="service-block service-block-default">
                        <i class="icon-custom icon-lg icon-bg-u rounded-x fa fa-lightbulb-o"></i>
                        <h2 class="heading-md">Demon<span class="color-green">Bucket</span> Official</h2>
                        <p>The official Demon<span class="color-green">Bucket</span> hosted servers.</p>
                        <ul class="list-unstyled">
                            <li>bucket1.demonbucket.com (Status: <?=GetServerStatus('bucket1.demonbucket.com', 80);?>) <br>Hub Router</li>
                            <li>bucket2.demonbucket.com (Status: <?=GetSErverStatus('bucket2.demonbucket.com', 80);?>) <br>Data Transfer Router</li>
                            <li>bucket3.demonbucket.com (Status: <?=GetServerStatus('bucket3.demonbucket.com', 80);?>) <br>Data Transfer Router</li>
                            <li>bucket4.demonbucket.com (Status: <?=GetServerStatus('bucket4.demonbucket.com', 80);?>) <br>Data Transfer Router</li>
                            <li>bucket5.demonbucket.com (Status: <?=GetServerStatus('bucket5.demonbucket.com', 80);?>) <br>Data Transfer Router</li>
                            <li>dev.demonbucket.com (Status: <?=GetServerStatus('dev.demonbucket.com', 80);?>) <br>Development router</li>
                            <li>ovhsux.demonbucket.com (Status: <?=GetServerStatus('ovhsux.demonbucket.com', 80);?>) <br>Depricated due to terrible hosting hosting company instability.</li>
                        </ul>                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-block service-block-default">
                        <i class="icon-custom icon-lg icon-bg-u rounded-x icon-line icon-present"></i>
                        <h2 class="heading-sm">Community</h2>
                        <p>Community routers submitted to the Demon<span class="color-green">Bucket</span> Router List.</p>
                        <ul class="list-unstyled">
                            <li>134.91.36.110:17080 <br> (Status: <?=GetServerStatus('134.91.36.110', 17080);?>)</li>
                            <li>blackunicorn.xyz:8080 <br>(Status: <?=GetServerStatus('blackunicorn.xyz', 8080);?>)<br>
                            Provided By:<a href="http://blackunicorn.xyz"> blackunicorn.xyz</a></li>
                            <li>bucket1.dave.systems <br> (Status: <?=GetServerStatus('bucket1.dave.systems', 80);?>)</li>
                            <li>ds.shadowflee.club <br> (Status:  <?=GetServerStatus('ds.shadowflee.club', 80);?>)</li>
                            
                            <li><span class="page-scroll"><a href="#contact">Submit a Router</a></span></li>
                  
                        </ul>                         
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="service-block service-block-default">            
                        <i class="icon-custom icon-lg icon-bg-u rounded-x icon-line icon-rocket"></i>
                        <h2 class="heading-sm">Community</h2>
                        <p>Community routers submitted to the Demon<span class="color-green">Bucket</span> Router List.</p>
                        <ul class="list-unstyled">
                            <li>d3crypt.ddns.net <br> (Status:  <?=GetServerStatus('d3crypt.ddns.net', 80);?>)</li>
                            <li>5.9.91.163:27182 <br> (Status: <?=GetServerStatus('5.9.91.163', 27182);?>)</li>
                            <li>y-cwmwl.co.uk:8181 <br> (Status:  <?=GetServerStatus('y-cwmwl.co.uk', 8181);?>)</li>
                            <li><span class="page-scroll"><a href="#contact">Submit a Router</a></span></li>  
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
       
        <div class="call-action-v1">
            <div class="container">
                <div class="call-action-v1-box">
                    <div class="call-action-v1-in">
                        <p>Demon<span class="color-green">Bucket</span> Servers are funded by Community supporters. If you you would like to help keep the servers up and running please show your support by donating. </p>
                    </div>
                    <div class="call-action-v1-in inner-btn page-scroll">
                        <a href="#donate" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-block">Dontate to Demon<span class="color-green">Bucket</span></a>
                    </div>
                </div>
            </div>
        </div>                    
    </section>
    <!-- End Servers Section -->

        <div class="parallax-quote parallaxBg">
            <div class="container">
                <div class="parallax-quote-in">
                    <p> "The Solution to file sharing isn't to stop doing it, but to stop governments and corporations from knowing that we are doing it." <br> "Do you believe in the <span class="color-green">Right to Share?</span></p>
                    <small>- Eijah -</small>
                </div>
            </div>
        </div>        

   

    <section id="donate">
        <div class="container content-lg">
            <div class="title-v1">
                <h2>Dontate to Demon<span class="color-green">Bucket</span></h2>
                <p>DemonBucket Servers are funded by Community supporters. If you you would like to help keep the servers up and running please show your support by donating.</p>
            </div>

            <div class="row">
                <div class="col-md-6 content-boxes-v3 margin-bottom-40">
                    <div class="clearfix margin-bottom-30">
                        <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-trophy"></i>
                        <div class="content-boxes-in-v3">
                            <h2 class="heading-sm">Bitcoin Address:</h2>
                            <p>1Gr3RbiqDJR2iU6aDMYNCqgaWMWQxikwdA</p>
                        </div>
                    </div>
                    <div class="clearfix margin-bottom-30">
                        <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-directions"></i>
                        <div class="content-boxes-in-v3">
                            <h2 class="heading-sm">Litecoin Address:</h2>
                            <p>LdW1EfWNqXkNne1sV6hAngMWkGGvCQupn3</p>
                        </div>
                    </div>
                   
                </div>

                <div class="col-md-6">
                    <img class="img-responsive" src="assets/img/donate.png" alt="">
                </div>
            </div>
        </div>        
		
		</section>
		
   

    <!--  About Section -->
    
    <!-- News Section
    <section id="news" class="news-section">
        <div class="container content-lg">
            <div class="title-v1">
                <h2>Latest News</h2>
                <p>We do <strong>things</strong> differently company providing key digital services. <br> 
                Focused on helping our clients to build a <strong>successful</strong> business on web and mobile.</p>             
            </div>

            <div class="row news-v1">
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="news-v1-in">
                        <img class="img-responsive" src="assets/img/contents/img1.jpg" alt="">
                        <h3><a href="#">Focused on helping our clients to build a successful business</a></h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                        <ul class="list-inline news-v1-info">
                            <li><span>By</span> <a href="#">Kathy Reyes</a></li>
                            <li>|</li>
                            <li><i class="fa fa-clock-o"></i> July 02, 2014</li>
                            <li class="pull-right"><a href="#"><i class="fa fa-comments-o"></i> 14</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="news-v1-in">
                        <img class="img-responsive" src="assets/img/contents/img4.jpg" alt="">
                        <h3><a href="#">We build your website to realise your vision and best product</a></h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                        <ul class="list-inline news-v1-info">
                            <li><span>By</span> <a href="#">John Clarck</a></li>
                            <li>|</li>
                            <li><i class="fa fa-clock-o"></i> July 02, 2014</li>
                            <li class="pull-right"><a href="#"><i class="fa fa-comments-o"></i> 07</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="news-v1-in">
                        <img class="img-responsive" src="assets/img/contents/img3.jpg" alt="">
                        <h3><a href="#">Focused on helping our clients to build a successful business</a></h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                        <ul class="list-inline news-v1-info">
                            <li><span>By</span> <a href="#">Tina Kruiger</a></li>
                            <li>|</li>
                            <li><i class="fa fa-clock-o"></i> July 02, 2014</li>
                            <li class="pull-right"><a href="#"><i class="fa fa-comments-o"></i> 22</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
 End News Section -->
 
    <!-- Contact Section -->
    <section id="contact" class="contacts-section">
	
        <div class="container content-lg">
            <div class="title-v1">
                <h2>Submit a Server</h2>
                <p>Submit your server to the Demon<span class="color-green">Bucket</span> File Sharing Network.</p>
            </div>
			


            <div class="row contacts-in">
                <div class="col-md-6 md-margin-bottom-40">
                    <ul class="list-unstyled">

                        <li><i class="fa fa-globe"></i> <a href="http://demonbucket.com">www.demonbucket.com</a></li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <form action="assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form contact-style">
                        <fieldset>
                            <label>Server Name <span class="color-red">*</span></label>
                            <div class="row">
                                <div class="col-md-7 margin-bottom-20 col-md-offset-0">
                                    <div>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                </div>                
                            </div>
                            
                            <label>Server address (in format address:port) <span class="color-red">*</span></label>
                            <div class="row">
                                <div class="col-md-7 margin-bottom-20 col-md-offset-0">
                                    <div>
                                        <input type="text" name="address" id="address" class="form-control">
                                    </div>
                                </div>                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-7 margin-bottom-20 col-md-offset-0">
                                    <div>
                                        <input type="text" style="height:0;padding:0;border:none" name="recaptcha" id="recaptcha">
                                        <div class="g-recaptcha" data-sitekey="6LetaQwTAAAAAFb2iB-A6BiSvzKO1IhVoZOD-_dI"></div>
                                    </div>
                                </div>                
                            </div>
                            <p><button type="submit" class="btn-u btn-brd btn-brd-hover btn-u-dark">Submit Server</button></p>
                        </fieldset>

                        <div class="message">
                            <i class="rounded-x fa fa-check"></i>
                            <p>Your Server was successfully submitted!</p>
                        </div>
                    </form> 
                </div>
            </div>            
        </div>

        <div class="copyright-section">
            <a href="http://demonbucket.com/privacypolicy.htm">Privacy Policy</a>
            <br>
            <p>2015 &copy; All Rights Reserved. Demon<span class="color-green">Bucket</span></a></p>
        <!--   <ul class="social-icons">
                <li><a href="#" data-original-title="Facebook" class="social_facebook rounded-x"></a></li>
                <li><a href="#" data-original-title="Twitter" class="social_twitter rounded-x"></a></li>
                <li><a href="#" data-original-title="Goole Plus" class="social_googleplus rounded-x"></a></li>
                <li><a href="#" data-original-title="Pinterest" class="social_pintrest rounded-x"></a></li>
                <li><a href="#" data-original-title="Linkedin" class="social_linkedin rounded-x"></a></li>
            </ul>
			-->
            <span class="page-scroll"><a href="#intro"><i class="fa fa-angle-double-up back-to-top"></i></a></span>
        </div>
    </section> 
    <!-- End Contact Section -->

    <!-- JS Global Compulsory -->
    <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery.easing.min.js"></script>
    <script type="text/javascript" src="assets/plugins/pace/pace.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/plugins/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <!-- JS Page Level-->
    <script type="text/javascript" src="assets/js/one.app.js"></script>
    <script type="text/javascript" src="assets/js/forms/login.js"></script>
    <script type="text/javascript" src="assets/js/forms/contact.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pace-loader.js"></script>
    <script type="text/javascript" src="assets/js/plugins/owl-carousel.js"></script>
    <script type="text/javascript" src="assets/js/plugins/revolution-slider.js"></script>
    <script type="text/javascript" src="assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();
            App.initCounter();
            App.initParallaxBg();
            LoginForm.initLoginForm();
            ContactForm.initContactForm();
            OwlCarousel.initOwlCarousel();
            RevolutionSlider.initRSfullScreen();
        });
    </script>
    <!--[if lt IE 9]>
        <script src="assets/plugins/respond.js"></script>
        <script src="assets/plugins/html5shiv.js"></script>
        <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
        <script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
        <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
    <![endif]-->    
	

</body>
</html>
