<?php
if($_SERVER["REQUEST_URI"] != "/EasyBCD/")
{
	header("HTTP/1.0 301 Resource Moved");
	header("Location: http://neosmart.net/EasyBCD/");
	exit();
}
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6" itemscope itemtype="http://schema.org/"> <![endif]-->
<!--[if IE 7 ]> <html lang="en" class="ie7" itemscope itemtype="http://schema.org/"> <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="ie8" itemscope itemtype="http://schema.org/"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9" itemscope itemtype="http://schema.org/"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" itemscope itemtype="http://schema.org/"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>EasyBCD - Take control of your boot loader | NeoSmart Technologies</title>
	<link rel="canonical" href="http://neosmart.net/EasyBCD/">
	<link rel="stylesheet" media="screen" href="c/style.css">
	<link rel="stylesheet" media="print" href="c/print.css">
	<link rel="icon" href="i/favicon.png">

	<script type="text/javascript">
		var jQl={q:[],dq:[],ready:function(a){typeof a=="function"&&jQl.q.push(a);return jQl},unq:function(){for(var a=0;a<jQl.q.length;a++)jQl.q[a]();jQl.q=[]},bId:null,boot:function(a){if(typeof window.jQuery.fn=="undefined"){if(!jQl.bId)jQl.bId=setInterval(function(){jQl.boot(a)},25)}else{jQl.bId&&clearInterval(jQl.bId);jQl.bId=0;jQl.unqjQdep();$(jQl.unq());typeof a=="function"&&a()}},booted:function(){return jQl.bId===0},loadjQ:function(a,c){setTimeout(function(){var b=document.createElement("script"); b.src=a;document.getElementsByTagName("head")[0].appendChild(b)},1);jQl.boot(c)},loadjQdep:function(a){jQl.loadxhr(a,jQl.qdep)},qdep:function(a){if(a)typeof window.jQuery.fn!=="undefined"&&!jQl.dq.length?jQl.rs(a):jQl.dq.push(a)},unqjQdep:function(){if(typeof window.jQuery.fn=="undefined")setTimeout(jQl.unqjQdep,50);else{for(var a=0;a<jQl.dq.length;a++)jQl.rs(jQl.dq[a]);jQl.dq=[]}},rs:function(a){var c=document.createElement("script");document.getElementsByTagName("head")[0].appendChild(c);c.text= a},loadxhr:function(a,c){var b;b=jQl.getxo();b.onreadystatechange=function(){b.readyState!=4||200!=b.status||c(b.responseText,a)};try{b.open("GET",a,true);b.send("")}catch(d){}},getxo:function(){var a=false;try{a=new XMLHttpRequest}catch(c){for(var b=["MSXML2.XMLHTTP.5.0","MSXML2.XMLHTTP.4.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],d=0;d<b.length;++d){try{a=new ActiveXObject(b[d])}catch(e){continue}break}}finally{return a}}}; if(typeof window.jQuery=="undefined")var $=jQl.ready,jQuery=$;
		jQl.loadjQ("//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js");

		$(document).ready(function(){
			$.getScript("j/modernizr.min.js");
			$.getScript("j/script.js");
			$.getScript("//platform.twitter.com/widgets.js");
		});
	</script>
	<script type="text/javascript">	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-277958-1']);
	  _gaq.push(['_setDomainName', 'neosmart.net']);
	  _gaq.push(['_setAllowLinker', true]);
	  _gaq.push(['_setAllowHash', 'false']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();	
	</script>

</head>

<body itemscope itemtype="http://schema.org/SoftwareApplication">

<link itemprop="image" href="i/EasyBCD.png">
<link itemprop="url" href="http://neosmart.net/EasyBCD/">
<meta itemprop="softwareApplicationCategory" content="UtilitiesApplication">
<div itemprop="author" itemscope itemtype="http://schema.org/Organization">
	<meta itemprop="name" content="NeoSmart Technologies" />
	<link itemprop="url" href="http://neosmart.net/" />
</div>
<div itemprop="screenshots" itemscope itemtype="http://schema.org/ImageObject">
	<meta itemprop="name" content="EasyBCD Screenshot">
	<meta itemprop="description" content="EasyBCD's screen showing installed entries.">
	<link itemprop="image" href="i/window-full.png">
</div>

<div class="header site">
	<div class="nav">
		<ul>
			<li class="branding"><a href="#">NeoSmart Technologies</a>
			<li><a href="http://neosmart.net/blog/">Blog</a>
			<li><a href="http://neosmart.net/wiki/">User Guide</a>
			<li><a href="http://neosmart.net/forums/">Forums</a>
			<li><a href="http://neosmart.net/store/">Buy Now</a>
		</ul>
	</div>
</div>

<div class="subheader">
	<div class="nav">
		<div class="product">
			<a href="#">
				<img class="icon" alt="EasyBCD icon" src="i/favicon.png" width="24" height="24">
				<div class="name" itemprop="name">EasyBCD</div>
			</a>
		</div>
		<ul>
			<li><a href="http://neosmart.net/changelog.php?id=1">Changelog</a>
			<li><a href="http://neosmart.net/gallery/album/view/neosmart/EasyBCD/EasyBCD+2.0/">Screenshots</a>
			<li><a href="http://neosmart.net/wiki/display/EBCD/EasyBCD+Documentation+Home">Documentation</a>
		</ul>
	</div>
</div>

<div id="container">
	<div class="section intro">
		<div class="header"><h1>Take control of your boot loader.</h1></div>
		<div class="content">
			<p class="intro" itemprop="description">EasyBCD supercharges your Windows PC, allowing you to dual-boot to your heart's content.</p>
			<a id="app-preview"><img alt="EasyBCD application" src="i/window.png" width="320" height="320"></a>
		</div>
		<div class="footer">
			<a class="cta-button" href="http://neosmart.net/store/">Buy Now</a>
			<a class="cta-button" href="#comparison" id="goto-comparison">See Plans</a>
		</div>
	</div>

	<div class="section support">
		<div class="header"><h2>Dual-boot with anything you could want.</h2></div>
		<div class="content">
			<ul class="os">
				<li class="win"><img src="i/os/win.png" alt="Windows 7, Windows Vista, Windows XP, Windows 2003" title="Windows 7, Windows Vista, Windows XP, Windows 2003">
				<li class="osx"><img src="i/os/apple.png" alt="Mac OS X" title="Mac OS X">
				<li class="linux"><img src="i/os/linux.png" alt="Linux" title="Linux">
				<li class="bsd"><img src="i/os/bsd.png" alt="BSD" title="BSD">
			</ul>
			<p class="legacy">Also boot into <strong>legacy systems</strong> Microsoft doesn't support: MS-DOS, Windows 9x, Windows ME, and Windows 2000!
		</div>

<ul class="social">
	<li><div class="g-plusone" data-size="medium" data-href="http://neosmart.net/EasyBCD/"></div>
	<li class="tw"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://neosmart.net/EasyBCD/" data-count="horizontal" data-via="neosmart"></a>
	<li class="fb" id="fb1"><div class="fb-like" data-href="http://neosmart.net/EasyBCD/" data-send="false" data-layout="button_count" data-width="96" data-show-faces="false"></div>
	<li class="fb" id="fb2"><div class="fb-like" data-href="https://facebook.com/NeoSmart" data-send="false" data-layout="button_count" data-width="96" data-show-faces="false"></div>
</ul>
</div>

	<div class="section benefits">
		<div class="header"><h2>A breeze to use. Filled with benefits.</h2></div>
		<div class="content">
			<ul itemprop="providedFeatures">
				<li>
					<h3>Boot anything.</h3>
					<p>Boot both from and into USB drives, ISO images, virtual disks, and more.
				<li>
					<h3>Boot anywhere.</h3>
					<p>Create bootable USB sticks with repair utilities that you can take with you anywhere.
				<li>
					<h3>Protect against disaster.</h3>
					<p>Create entries to boot into recovery utilities or safe mode to prepare for a rainy day.
				<li>
					<h3>Painless editing.</h3>
					<p>Add, rename, remove, configure, and reorder entries at whim.
				<li>
					<h3>Solve difficut problems.</h3>
					<p>Use EasyBCD to troubleshoot Windows, back up and repair the bootloader, and more.
				<li>
					<h3>Powerful scripting with NeoGrub</h3>
					<p>You'll have the power to hide partitions, change active flags, and create complex boot scenarios.
			</ul>
		</div>
	</div>

	<div class="section comparison" id="comparison">
		<div class="header"><h2>Select the best solution for your needs.</h2></div>
		<div class="content">
			<ul>
				<li class="free solution">
					<div class="data">
						<h3>Non-commercial <span class="price">Free</span></h3>
						<ul class="features">
							<li><strong>Limited</strong>, community support
							<li><strong>No</strong> early access to new features
							<li>Only for <strong>personal, non-commercial</strong> use
						</ul>
						<a class="cta-button" href="http://neosmart.net/download.php?id=1">Register</a>
					</div>
				<li class="commercial solution">
					<div class="data">
						<h3>Commercial <span class="price" itemprop="price">$24.95</span></h3>
						<meta itemprop="priceCurrency" content="USD">
						<ul class="features">
							<li>Detailed <strong>PDF instruction manual</strong>
							<li><strong>Priority</strong> technical support
							<li>Early access to <strong>new releases</strong>
							<li><strong>Bootable</strong> repair &amp; recovery CD <small><em>(coming soon!)</em></small>
						</ul>
						<a class="cta-button" href="http://neosmart.net/store/">Buy Now</a>
					</div>
				<li class="custom solution">
					<div class="data">
						<h3>Custom Solutions</h3>
						<ul class="features">
							<li><strong>Need more?</strong> Are you seeking a customized boot solution for your company or product? 
							<li><strong>Get in touch</strong>, and we'll help you achieve your goals (consulting or development)
						</ul>
						<a class="cta-button" href="mailto:neosmart@neosmart.net">Contact</a>
					</div>
			</ul>
		</div>
	</div>
	<div class="section awards">
		<div class="header"><h2>Over <strong>25,000,000</strong> downloads to date.</h2></div>
		<div class="content">
			<ul>
				<li class="pcmagazine"><img alt="PC Magazine Editor's Choice" src="i/awards/pcmagazine.png">
				<li class="cnet"><img alt="CNET 5 stars" src="i/awards/cnet.png">
				<li class="pcworld"><img alt="PCWorld Fantastic Freebie" src="i/awards/pcworld.png">
				<li class="ninemsn"><img alt="Nine MSN" src="i/awards/ninemsn.png">
				<li class="softpedia"><img alt="Softpedia 5 star pick" src="i/awards/softpedia.png">
			</ul>
		</div>
	</div>
</div><!--container-->

<div class="footer site">
	<div class="nav">
		<ul>
			<li class="copyright">&copy; 2012 <a href="/">NeoSmart Technlogies </a>
			<li><a href="http://neosmart.net/blog/about">About</a>
			<li><a href="http://neosmart.net/info.php?page=privacy">Privacy</a>
			<li><a href="http://neosmart.net/info.php?page=contact">Contact</a>
			<li><a href="http://neosmart.net/info.php?page=contact">Help</a>
			<li><a href="http://neosmart.net/info.php?page=refund">Refund Policy</a>
			<li><a href="http://neosmart.net/forums/forumdisplay.php?f=9">Report a Bug</a>
			<li><a href="http://neosmart.net/donations.php">Donations</a>
		</ul>
	</div>
</div>

<div class="popup"><img alt="EasyBCD application" src="i/window-full.png"></div>

<script type="text/javascript">
 (function() {
	 var po = document.createElement('script'); po.type =
'text/javascript'; po.async = true;
	 po.src = '//apis.google.com/js/plusone.js';
	 var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(po, s);
 })();
</script>

<div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) {return;}
 js = d.createElement(s); js.id = id;
 js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
