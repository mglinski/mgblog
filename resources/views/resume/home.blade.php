@extends('layouts.resume')

@section('site-content')
	<div class="resume">

		<a name="overview"></a>
		<h2>Matthew Glinski</h2>

		<address id="contact">
			3501 Emerald Pointe Dr.<br />
			APT 306-B<br />
			Hollywood, FL 33021<br /><br />
			<abbr title="Phone">P:</abbr> (954) 816-9590<br />
			<abbr title="Email">E:</abbr> <a href="mailto:matthewglinski@gmail.com">matthewglinski@gmail.com</a>
		</address>

		<h3 id="summary">SUMMARY</h3>
		<p class="resumeLead">
			9 years Webmaster/Web Development/LAMP experience. 6+ years of experience building enterprise level PHP/MySQL
			applications with security and scalability in mind. Ability to solve critical problems with ease and finesse.
			Very personable, very high-level written/verbal communication skills. Excellent team player with the ability
			to think outside the box, create new ideas and innovate at a fast pace. Proven Leadership skills and a strong
			work ethic. Designs with the entire life-cycle of a product in mind.
		</p>

		<h3 id="skills">SKILLS</h3>
		<div class="resumeItem">
			<h4 id="skills-languages">Languages</h4>
            <ul>
                <li>Proficient in: PHP v5.5, Javascript, HTML5, CSS3</li>
                <li>Experience with: Python, Java, C#, ASP.net</li>
            </ul>
		</div>

		<div class="resumeItem">
			<h4 id="skills-software">Software</h4>
			<ul>
				<li>Database: MySQL, MSSQL, Postgres, SQLite</li>
				<li>Operating Systems: Debian, CentOS, Mac OSX Server, MS Server 2008/2012</li>
				<li>Software Platforms: Web, Command Line</li>
			</ul>
		</div>

		<h3 id="experience">EXPERIENCE</h3>
		<div class="resumeItem" id="experience-zumba">
			<h5>
				<div class="pull-right"><strong>2014 - Current</strong></div>
				Zumba Fitness &ndash; Latin Inspired Fitness and Lifestyle Company
			</h5>
			<h6><em>Software Engineer</em> <a href="https://zumba.com">Zumba.com</a></h6>
			<ul>
				<li>Just started working here and I already love it :)</li>
			</ul>
		</div>

		<div class="resumeItem" id="experience-aampp">
			<h5>
				<div class="pull-right"><strong>2011 - 2014</strong></div>
				AAMPP.net &ndash; Music Focused Social Network
			</h5>
			<h6><em>Architect, Lead Developer - Full Stack Software Development, Server Management, Support</em></h6>
			<ul>
				<li>Programmed and deployed multiple releases of a fully featured Social Network, built from scratch, to improve musicians&rsquo; lives sharing their music and creations online.</li>
				<li>Created all systems for the social network and product, including: Single page JS app design using JS History PushState, automated file transcoding and processing, in-house encrypted email server and message delivery, job server for processing updates various aspects of data in the network, streaming media servers, user push notifications system and events tracking.</li>
				<li>Provided general design direction and sketches of all screens to design team, and worked with them to deliver a fresh, consistent design.</li>
				<li>Built product across a private VLAN of virtual servers that are redundant and fault tolerant. Automated scaling is built in for the API and Front-End servers.</li>
				<li>Built project that incorporates various technologies including: Redis, Memcached, Resque, Nginx, Sphinx-Search, ElasticSearch, HAProxy, Server automation, Development and Staging CI with automated software testing and builds.</li>
				<li>Built heavily used Memcached data caching system, reducing page load times from 8 seconds in the worst case to 0.200s. System auto-updates its own caches as data is updated in the database, to ensure consistent page load times.</li>
				<li>Provided strong, user focused decision making process regarding new features and where time should be spent.</li>
			</ul>
		</div>

		<div class="resumeItem" id="experience-puntomio">
			<h5>
				<div class="pull-right"><strong>2010 - 2011</strong></div>
				PuntoMio.com / SkyShopLogistics.com &ndash; Software Engineer
			</h5>
			<h6><em>Software Engineer, Main developer of Amazon.com product automation interface</em></h6>
			<ul>
				<li>Programmed a Web Service to retrieve and normalize Amazon.com product APIs and correctly cache the results.</li>
				<li>Built an automated ordering API based on the product Web Service API. Given a valid &ldquo;cart&rdquo; of items from the Amazon API calls, I automated the process of claiming that cart on Amazon.com, creating a customer for that cart, checking out the cart of items over HTTPS, paying for them with a company credit card, and shipping them to PuntoMio.</li>
				<li>Learned VB.net and ASP.net to assist the other .net programmers in house with their daily tasks of site changes and modifications.</li>
				<li>Took over modification to a whole segment of their e-commerce sites (GLobalshop.net) and managed all changes to 10+ variants of the same site for different country partners, all with their own language translations and specific pricing structure.</li>
			</ul>
		</div>

		<div class="resumeItem" id="experience-worldnet">
			<h5>
				<div class="pull-right"><strong>2008 - 2009</strong></div>
				World NetMedia &ndash; Software Engineer
			</h5>
			<h6><em>Developer of Core Projects at Large Adult Entertainment Company</em></h6>
			<ul>
				<li>Worked with a small and efficient team developing and maintaining the backend of some of the largest sites on the Internet.</li>
				<li>Within 2 weeks of my initial employment, I created a complex high traffic static site (sales tour) builder from scratch, rewriting their old system in 1/10 of the code and moving a project that was 2 months behind schedule to production ready.</li>
				<li>Expanded and updated the company&rsquo;s main advertising methods and systems. I prototyped and built a new system using Javascript powered ads that convert much better than the old ads and wrote the public facing ad builder for referrers. Also built new ad server software that can serve ads on half the machines they previously were using.</li>
				<li>Rewrote Members&rsquo; paid content area to increase customer satisfaction and retention for a top 400 site (according to alexa.com) that gets over 200k hits a day.</li>
				<li>Managed new mobile site project from idea conception to deployment and beyond, and was constantly adding features and content. Site became second highest converting site managed under our team within in a week of final deployment.</li>
			</ul>
		</div>

		<h3 id="projects">PROJECTS</h3>
		<div class="resumeItem" id="projects-brave-diplo">
            <h5>
                <div class="pull-right"><strong>2013 - 2015</strong></div>
                Brave Collective &ndash; Head Diplomat
            </h5>
            <h6><em>MMO Space Empire Simulator</em> &ndash; <a href="https://www.youtube.com/watch?v=FE9lVhLNmcI" target="_blank">Quick Overview</a> </h6>
            <ul>
                <li>Primary responsibilities include cordinating and communication with other in-game entities for the benifit of Brave Collective and it's members and allies.</li>
                <li>Effective Second In Command of Brave Collective Alliance</li>
                <li>Heads up communications and friendly entity coordination</li>
                <li>Helping bootstrap, organize and direct internal intelligence agency</li>
            </ul>
        </div>
        <div class="resumeItem" id="projects-brave-it">
            <h5>
                <div class="pull-right"><strong>2013 - Current</strong></div>
                Brave Collective &ndash; Head of IT
            </h5>
            <h6><em>MMO Space Empire Simulator</em> &ndash; <a href="https://www.youtube.com/watch?v=FE9lVhLNmcI" target="_blank">Quick Overview</a> &ndash; <a href="https://github.com/bravecollective" target="_blank">Github</a> </h6>
            <ul>
                <li>Primary responsibilities include managing and building IT infrastructure for the second largest player organization in Eve Online.</li>
                <li>Managed mumble server for upwards of 900 active players at once</li>
                <li>Created tool to map and track player owned structures and in-game resources.</li>
                <li>Manage and support core authenticateion system that all our tools integrate with for OAUTH data access</li>
                <li>Developing internal intelligence agency portal and dissemination tools for active intel agents and handlers.</li>
                <li>Manage infrastructure and hardware that all IT for Brave Collective runs on.</li>
            </ul>
        </div>
        <div class="resumeItem" id="projects-xtrafile">
            <h5>
                <div class="pull-right"><strong>2006 - 2009</strong></div>
                XtraFile.com &ndash; Owner
            </h5>
            <h6><em>Project Lead, Web Development Consulting</em></h6>
            <ul>
                <li>Primary responsibilities include running the company, developing the main project, serving support requests, and all site programming.</li>
                <li>Consultations include media companies and multi-server file distribution software.</li>
                <li>Created XtraUpload, a turn-key multiple server file sharing and management platform.</li>
                <li>Created software that can deploy across multiple servers and serve upwards of 500mbit of bandwidth per second at very low server load. Currently running on over 500 file hosting sites.</li>
            </ul>
        </div>

		<h3 id="education">EDUCATION</h3>
		<div class="resumeItem" id="education-hs">
			<h5>
		        <div class="pull-right"><strong>2004 - 2008</strong></div>
		        Chaminade-Madonna College Prep
		    </h5>
			<h6><em>Hollywood, Florida</em></h6>
			<ul>
				<li>High School Degree</li>
			</ul>
		</div>
		<div class="resumeItem" id="education-bsa">
			<h5>
	            <div class="pull-right"><strong>2000 - 2009</strong></div>
	            Boy Scouts of America
	        </h5>
	        <ul>
	            <li>Eagle Rank Scout</li>
	            <li> Member of <abbr title="Order of the Arrow">OA</abbr></li>
	        </ul>
		</div>

	</div>
@endsection
