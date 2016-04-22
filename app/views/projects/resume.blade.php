@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@stop
@section('content')

        <div class="mainHolder">
            <div class="container blogHolder text-center">
                <div class='container main-container'>


			<div id="resume">
		<div class="page-header">
			<h1>
				<img src="/img/Arches v2-6.jpg" alt="Head Shot" class="img-circle resume-profile">
				Tomas Leffew <small>Software Developer</small>
			</h1>
		</div>

		<div id="contact">
			<div class='row'>
				<div class='col-md-12'>
					<h2>CONTACT</h2>
				</div>
			</div>
			<div class="row">
				<div class='col-md-4 text-center'>
					<div class="contact-icons">
												<a href="mailto:cameron@thenearsky.com"><i class="fa fa-envelope"></i></a>
					</div>
				</div>
				<div class='col-md-4 text-center'>
					<div class="contact-icons">
						<a href="https://github.com/penthious"><i class="fa fa-github"></i></a>
					</div>
				</div>
				<div class='col-md-4 text-center'>
					<div class="contact-icons">
						<a href="http://www.linkedin.com/in/cameronholland90/"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<div id="work-experience">
			<div class='row'>
				<div class='col-md-12'>
					<h2>WORK EXPERIENCE</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-11 col-md-offset-1">
					<h3><span>Codeup</span> <small>San Antonio, TX</small></h3>
				</div>
				<div class='col-md-8 col-md-offset-1'>
					<p>Instructor for the LAMP+J stack bootcamp. Responsibilities included lecturing, one on one help with students, working on curriculum and helping students through their final projects.</p>
				</div>
				<div class='col-md-3'>
					<p class="start-end-date">Setember 2015 - Present</p>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-11 col-md-offset-1">
					<h3><span>The Formula Idea Works</span> <small>San Antonio, TX</small></h3>
				</div>
				<div class='col-md-8 col-md-offset-1'>
					<p>Contracted to work on project for <a href="http://westmoreland.theformu.la">Westmoreland Builders</a>. Developed Westmoreland's Company Website with the LAMP+J stack. The site was made to allow easy addition and displaying of current projects and offices. Also enabled them to modify content on their home page through the admin backend.</p>
				</div>
				<div class='col-md-3'>
					<p class="start-end-date">February 2016 - April 2016</p>
				</div>
			</div>
			<br>
			<div class='row'>
				<div class="col-md-11 col-md-offset-1">
					<h3><span>Freedom Driven LLC</span> <small>San Antonio, TX</small></h3>
				</div>
				<div class='col-md-8 col-md-offset-1'>
					<p>Lead Developer for LeadPropeller.com. Developed new features working on both front and back end using the full LAMP+J stack. Responsible for maintenance of LeadPropeller.com and user websites. Completed user requested customization on user websites. In charge of all customer support and inbound sales calls. Managed user accounts and invoices. Created video tutorials explaining the features included on LeadPropeller.com. Also responsible for customer support and payment accounts for REImobile.com.</p>
				</div>
				<div class='col-md-3'>
					<p class="start-end-date">May 2014 - September 2015</p>
				</div>
			</div>
			<br>
			<div class='row'>
				<div class="col-md-11 col-md-offset-1">
					<h3><span>Great Southern Coins</span> <small>Boerne, TX</small></h3>
				</div>
				<div class='col-md-8 col-md-offset-1'>
					<p>Online auction responsibilities include preparing coins, photographing coins, editing photos and online posting. Direct sales responsibilities include locating coins requested by customers and processing orders.  Additional duties include packaging, shipping and tracking merchandise shipments.</p>
				</div>
				<div class='col-md-3'>
					<p class="start-end-date">February 2013 - February 2014</p>
				</div>
			</div>
		</div>

		<hr>

		<div id="education">
			<div class='row'>
				<div class='col-md-12'>
					<h2>EDUCATION</h2>
				</div>
			</div>
			<div class="row">
				<div class='col-md-8 col-md-offset-1'>
					<h3><span>LAMP+J Software Development Bootcamp</span> <small>San Antonio, TX</small></h3>
					<p><a href="http://www.codeup.com/">Codeup</a></p>
					<ul>
						<li>PHP, Laravel, Javascript, MySQL, HTML, CSS and Bootstrap</li>
						<li>Some experience with PhoneGap</li>
						<li>Created Get It Red web and iOS app with my team as our capstone project</li>
						<li>Learned how to work well with a team and assign tasks</li>
					</ul>
				</div>
				<div class='col-md-3'>
					<p class="start-end-date">February 2014 - April 2014</p>
				</div>
			</div>
			<br>
			<div class='row'>
				<div class='col-md-8 col-md-offset-1'>
					<h3><span>Northwest Vista Community College</span> <small>San Antonio, TX</small></h3>
					<p><a href="https://www.alamo.edu/nvc/">NWVCC</a></p>
				</div>
				<div class='col-md-3'>
					<p class="start-end-date">January 2009 – May 2010</p>
				</div>
			</div>
			<br>
			<div class='row'>
				<div class='col-md-8 col-md-offset-1'>
					<h3><span>Abilene Christian University</span> <small>Abilene, TX</small></h3>
					<p><a href="http://www.acu.edu/">ACU</a></p>
				</div>
				<div class='col-md-3'>
					<p class="start-end-date">August 2008 – December 2008</p>
				</div>
			</div>
			<br>
			<div class='row'>
				<div class='col-md-8 col-md-offset-1'>
					<h3><span>Sandra Day O’Connor High School</span> <small>Helotes, TX</small></h3>
					<p><a href="http://www.nisd.net/oconnor/">OHS</a></p>
				</div>
				<div class='col-md-3'>
					<p class="start-end-date">August 2004 – May 2008</p>
				</div>
			</div>
			<div class="row text-center">
				<a href="/downloads/resume.pdf" class="btn btn-custom pdf-btn"><i class="fa fa-file-pdf-o"></i> Download PDF</a>
			</div>
		</div>
	</div>



	</div>

        </div>
    </div>
@stop
