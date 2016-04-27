@extends('layouts.master')
@section('css')
    <title>Resume</title>
@stop
@section('content')

        <div class="mainHolder">
            <div class="container blogHolder text-center">
                <div class='container main-container'>


			<div id="resume">
		<div class="page-header">
			<h1>
				<img src="/img/tomas.jpg" alt="Head Shot" class="img-circle resume-profile">
				Tomas Leffew <small>Web Developer</small>
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
						<a href="mailto:tleffew1994@gmail.com"><i class="fa fa-envelope"></i></a>
					</div>
				</div>
				<div class='col-md-4 text-center'>
					<div class="contact-icons">
						<a href="https://github.com/penthious"><i class="fa fa-github"></i></a>
					</div>
				</div>
				<div class='col-md-4 text-center'>
					<div class="contact-icons">
						<a href="http://www.linkedin.com/in/tomas-leffew-431512b7/"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<div id="work-experience">
			<div class='row'>
				<div class='col-md-12'>
					<h2>PROGRAMMING PROJECTS</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h3 class"text-center">Simple Simon </h3>
				</div>
				<div class='col-md-10 col-md-offset-1'>
					<p>Mobile-responsive browser game built with HTML5, CSS3, Flexbox for consistent layout, JavaScript for game logic, DOM manipulation,  jQuery animations.
                    </p>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h3>Skatelister</h3>
				</div>
				<div class='col-md-10 col-md-offset-1'>
					<p>Object oriented (OOP) content management system for advertisements with user management, front and back-end validation, protection from SQL injection.</p>
				</div>
			</div>
			<br>
			<div class='row'>
				<div class="col-md-10 col-md-offset-1">
					<h3>Blog/Portfolio</h3>
				</div>
				<div class='col-md-10 col-md-offset-1'>
					<p>Developed database driven blog application using Laravel, a PHP MVC framework, implementing management, security features, and external APIs.
                    </p>
				</div>
			</div>
			<br>
        </div>
        <hr>
            <div>
                <div class='row'>
    				<div class='col-md-12'>
    					<h2>WORK EXPERINCE</h2>
    				</div>
    			</div>
			<div class='row'>
				<div class="col-md-11 col-md-offset-1">
					<h3><span>Satellite Technician</span> <small>San Antonio, TX</small></h3>
				</div>
				<div class='col-md-8 col-md-offset-1'>
					<ul>
					    <li>Installed DirectTV units and tutored customers on basic usage protocols.</li>
                        <li>Self-managed time and workload on a daily basis.</li>
					</ul>
				</div>
				<div class='col-md-3'>
					<p class="start-end-date">2015 - 2016</p>
				</div>
			</div>

            <div class='row'>
				<div class="col-md-11 col-md-offset-1">
					<h3><span>Chat Support Specialist</span> <small>San Antonio, TX</small></h3>
				</div>
				<div class='col-md-8 col-md-offset-1'>
					<ul>
					    <li>Facilitated phone sales to Verizon customer through inbound chats.</li>
                        <li>Deescalated irate customers by moderating client disputes and complaints.</li>
					</ul>
				</div>
				<div class='col-md-3'>
					<p class="start-end-date">2015 - 2015</p>
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
						<li>Working on capstone, Sweet yams a restraunt ordering site.</li>
						<li>Learned how to work well with a team and assign tasks</li>
					</ul>
				</div>
				<div class='col-md-3'>
					<p class="start-end-date">January 2016 - May 2016</p>
				</div>
			</div>
			<br>
			<div class='row'>
				<div class='col-md-8 col-md-offset-1'>
					<h3><span>Northwest Vista Community College</span> <small>San Antonio, TX</small></h3>
					<p><a href="https://www.alamo.edu/nvc/">NWVCC</a></p>
				</div>
				<div class='col-md-3'>
					<p class="start-end-date">January 2013 – May 2014</p>
				</div>
			</div>
			<br>
			<div class="row text-center">
				<a href="/downloads/resume.pdf" class="btn btn-custom pdf-btn"><i class="fa fa-file-pdf-o"></i> Download PDF</a>
			</div>
		</div>
	</div>



	</div>

        </div>
    </div>
@stop
