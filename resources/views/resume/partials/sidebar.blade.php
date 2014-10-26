<div class="col-sm-2 blog-sidebar" style="position: relative;" >
	<div class="resume-sidebar hidden-print hidden-xs hidden-sm" style="top: 20px;" role="complementary">
		<ul class="nav sidenav">
			<li>
				<a href="#overview">Overview</a>
				<ul class="nav">
					<li><a href="#contact">Contact</a></li>
				</ul>
			</li>
			<li><a href="#summary">Summary</a></li>
			<li>
                <a href="#skills">Skills</a>
                <ul class="nav">
                    <li><a href="#skills-languages">Languages</a></li>
                    <li><a href="#skills-software">Software</a></li>
                </ul>
            </li>
			<li>
                <a href="#experience">Experience</a>
                <ul class="nav">
                    <li><a href="#experience-zumba">Zumba</a></li>
                    <li><a href="#experience-aampp">AAMPP</a></li>
                    <li><a href="#experience-puntomio">Punto Mio</a></li>
                    <li><a href="#experience-worldnet">World Net Media</a></li>
                </ul>
            </li>
			<li>
                <a href="#projects">Projects</a>
                <ul class="nav">
                    <li><a href="#projects-brave-diplo">Head Diplomat</a></li>
                    <li><a href="#projects-brave-it">Head of IT</a></li>
                    <li><a href="#projects-xtrafile">XtraFile</a></li>
                </ul>
            </li>
			<li>
                <a href="#education">Education</a>
                <ul class="nav">
                    <li><a href="#education-hs">Chaminade-Madonna</a></li>
                    <li><a href="#education-bsa">Boy Scouts</a></li>
                </ul>
            </li>
		</ul>
		<br />
		<a class="back-to-top" href="#top">Back to top</a>
	</div>
</div><!-- /.blog-sidebar -->

@section('partials.foot')
	@parent

	<script type="text/javascript">
	$(document).ready(function()
	{
		$(document.body).scrollspy({
            target: ".resume-sidebar"
        });

        $(window).on("load", function() {
            $(document.body).scrollspy("refresh")
        });

        setTimeout(function() {
            var b = $(".resume-sidebar");
            b.affix({
                offset: {
                    top: function() {
                        var c = b.offset().top,
                            d = parseInt(b.children(0).css("margin-top"), 10),
                            e = $(".bs-docs-nav").height();
                        return this.top = c - e - d
                    },
                    bottom: function() {
                        return this.bottom = $(".bs-docs-footer").outerHeight(!0)
                    }
                }
            })
        }, 100);
	});
	</script>
@endsection