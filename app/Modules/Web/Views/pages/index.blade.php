@extends("Web::layouts.default")

@section('content')
    <!-- START: PAGE CONTENT -->
    <section id="about" class="section section-about">
        <div class="animate-up">
            <div class="section-box">
                <div class="profile">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="profile-photo"><img src="{!! asset('public/assets/web') !!}/img/uploads/rs-photo-v1.jpg" alt="Robert Smith"/></div>
                        </div>
                        <div class="col-xs-7">
                            <div class="profile-info">
                            <div class="profile-preword"><span>Hello</span></div>
                            <h1 class="profile-title"><span>I'm</span> {!! $profiles ? $profiles->name : 'Liem Phan' !!}</h1>
                            <h2 class="profile-position">{!! $profiles ? $profiles->job_title : 'Web Developer' !!}</h2></div>
                            <ul class="profile-list">
                                <li class="clearfix">
                                    <strong class="title">Address</strong>
                                    <span class="cont">{!! $profiles ? $profiles->address : '128 Le Quang Dinh St' !!}</span>
                                </li>
                                <li class="clearfix">
                                    <strong class="title">E-mail</strong>
                                    <span class="cont"><a href="mailto:{!! $profiles ? $profiles->email : 'minhliemphp@gmail.com' !!}">{!! $profiles ? $profiles->email : 'minhliemphp@gmail.com' !!}</a></span>
                                </li>
                                <li class="clearfix">
                                    <strong class="title">Phone</strong>
                                    <span class="cont"><a href="tel:{!! $profiles ? $profiles->phone : '0902942054' !!}">{!! $profiles ? $profiles->phone : '0902942054' !!}</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="profile-social">
                    <ul class="social">
                        <li><a class="ripple-centered" href="https://www.facebook.com/" target="_blank"><i class="rsicon rsicon-facebook"></i></a></li>
                        <li><a class="ripple-centered" href="https://twitter.com/" target="_blank"><i class="rsicon rsicon-twitter"></i></a></li>
                        <li><a class="ripple-centered" href="https://www.linkedin.com/" target="_blank"><i class="rsicon rsicon-linkedin"></i></a></li>
                        <li><a class="ripple-centered" href="https://plus.google.com/" target="_blank"><i class="rsicon rsicon-google-plus"></i></a></li>
                        <li><a class="ripple-centered" href="https://dribbble.com/" target="_blank"><i class="rsicon rsicon-dribbble"></i></a></li>
                        <li><a class="ripple-centered" href="https://www.instagram.com/" target="_blank"><i class="rsicon rsicon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="section-txt-btn">
                <p><a class="btn btn-lg btn-border ripple" target="_blank" href="http://dev.novembit.com/rs_card/wp-content/uploads/2015/11/test-1.pdf">Download Resume</a></p>
                <p>Hello! I’m Robert Smith. Senior Web Developer specializing in front end development. Experienced with all stages of the development cycle for dynamic web projects. Well-versed in numerous programming languages including JavaScript, SQL, and C. Stng background in project management and customer relations.</p>
            </div>
        </div>
    </section><!-- #about -->

    <section id="skills" class="section section-skills">
        <div class="animate-up">
            <h2 class="section-title">Professional  Skills</h2>
            @if(!$skills->isEmpty())
            <div class="section-box">
                @foreach($skills->chunk(2) as $skill_chunk)
                <div class="row">
                    @foreach($skill_chunk as $skill)
                    <div class="col-sm-6">
                        <div class="progress-bar">
                            <div class="bar-data">
                                <span class="bar-title">{!! $skill->title !!}</span>
                                <span class="bar-value">{!! $skill->number !!}%</span>
                            </div>
                            <div class="bar-line">
                                <span class="bar-fill" data-width="{!! $skill->number !!}%"></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section><!-- #skills -->

    <section id="portfolio" class="section section-portfolio">
        <div class="animate-up">
            <h2 class="section-title">Portfolio</h2>

            <div class="filter">
                <div class="filter-inner">
                    <div class="filter-btn-group">
                        <button data-filter="*">All</button>
                        <button data-filter=".photography">Photography</button>
                        <button data-filter=".bridge">Bridge</button>
                        <button data-filter=".nature">Nature</button>
                    </div>
                    <div class="filter-bar">
                        <span class="filter-bar-line"></span>
                    </div>
                </div>
            </div>

            <div class="grid">
                <div class="grid-sizer"></div>

                <div class="grid-item size22 photography">
                    <div class="grid-box">
                        <figure class="portfolio-figure">
                            <img src="{!! asset('public/assets/web') !!}/img/uploads/portfolio/portfolio-thumb-05-610x600.jpg" alt=""/>
                            <figcaption class="portfolio-caption">
                                <div class="portfolio-caption-inner">
                                    <h3 class="portfolio-title">Street Photography</h3>
                                    <h4 class="portfolio-cat">Photography</h4>

                                    <div class="btn-group">
                                        <a class="btn-link" href="http://bit.ly/1YtB8he" target="_blank"><i class="rsicon rsicon-link"></i></a>
                                        <a class="portfolioFancybox btn-zoom" data-fancybox-group="portfolioFancybox1" href="#portfolio1-inline1"><i class="rsicon rsicon-eye"></i></a>
                                        <a class="portfolioFancybox hidden" data-fancybox-group="portfolioFancybox1" href="#portfolio1-inline2"></a>
                                        <a class="portfolioFancybox hidden" data-fancybox-group="portfolioFancybox1" href="#portfolio1-inline3"></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>

                        <!-- Start: Portfolio Inline Boxes -->
                        <div id="portfolio1-inline1" class="fancybox-inline-box">
                            <div class="inline-embed" data-embed-type="image" data-embed-url="{!! asset('public/assets/web') !!}/img/uploads/portfolio/portfolio-thumb-05-large.jpg"></div>
                            <div class="inline-cont">
                                <h2 class="inline-title">Street photography is photography that features the chance encounters and random accidents within public places.</h2>
                                <div class="inline-text">
                                    <p>Street photography does not necessitate the presence of a street or even the urban environment. Though people usually feature directly, street photography might be absent of people and can be an object or environment where the image projects a decidedly human character in facsimile or aesthetic.</p>
                                </div>
                            </div>
                        </div>

                        <div id="portfolio1-inline2" class="fancybox-inline-box">
                            <div class="inline-embed" data-embed-type="image" data-embed-url="{!! asset('public/assets/web') !!}/img/uploads/portfolio/portfolio-thumb-01-large.jpg"></div>
                            <div class="inline-cont">
                                <div class="inline-text">
                                    <h2 class="inline-title">Framing and timing</h2>
                                    <p>Framing and timing can be key aspects of the craft with the aim of some street photography being to create images at a decisive or poignant moment. Street photography can focus on emotions displayed, thereby also recording people's history from an emotional point of view.</p>
                                </div>
                            </div>
                        </div>

                        <div id="portfolio1-inline3" class="fancybox-inline-box">
                            <div class="inline-embed" data-embed-type="iframe" data-embed-url="https://player.vimeo.com/video/118244244"></div>
                            <div class="inline-cont">
                                <div class="inline-text">
                                    <h2 class="inline-title">A Look Into Documenting Street Fashion Photography</h2>
                                    <p>HB Nam is an internationally known street fashion photographer. In this Leica Camera Portrait, Nam explains how he started in photography and what photography means to him. For Nam, it's about documenting what's around him and the concentration required to achieve a good shot.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End: Portfolio Inline Boxes -->
                    </div>
                </div><!-- .grid-item -->

                <div class="grid-item size11 bridge">
                    <div class="grid-box">
                        <figure class="portfolio-figure">
                            <img src="{!! asset('public/assets/web') !!}/img/uploads/portfolio/portfolio-thumb-11-289x281.jpg" alt=""/>
                            <figcaption class="portfolio-caption">
                                <div class="portfolio-caption-inner">
                                    <h3 class="portfolio-title">Suspension Bridge</h3>
                                    <h4 class="portfolio-cat">Bridge</h4>

                                    <div class="btn-group">
                                        <a class="btn-link" href="http://bit.ly/1YtB8he" target="_blank"><i class="rsicon rsicon-link"></i></a>
                                        <a class="portfolioFancybox btn-zoom" data-fancybox-group="portfolioFancybox2" href="#portfolio2-inline1"><i class="rsicon rsicon-eye"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>

                        <!-- Start: Portfolio Inline Boxes -->
                        <div id="portfolio2-inline1" class="fancybox-inline-box">
                            <div class="inline-cont">
                                <h2 class="inline-title">Suspension Bridges - Design Technology</h2>
                                <div class="inline-text">
                                    <p>Suspension bridges in their simplest form were originally made from rope and wood.
                                        Modern suspension bridges use a box section roadway supported by high tensile strength cables.
                                        In the early nineteenth century, suspension bridges used iron chains for cables. The high tensile cables used in most modern suspension
                                        bridges were introduced in the late nineteenth century.<br/>
                                        Today, the cables are made of thousands of individual steel wires bound tightly together. Steel, which is very strong under tension, is
                                        an ideal material for cables; a single steel wire, only 0.1 inch thick, can support over half a ton without breaking.</p>
                                    <p>Light, and strong, suspension bridges can span distances from 2,000 to 7,000 feet far longer than any other kind of bridge. They are
                                        ideal for covering busy waterways.</p>
                                    <p>With any bridge project the choice of materials and form usually comes down to cost.
                                        Suspension bridges tend to be the most expensive to build. A suspension bridge suspends the roadway from huge main cables, which extend
                                        from one end of the bridge to the other. These cables rest on top of high towers and have to be securely anchored into the bank at either
                                        end of the bridge. The towers enable the main cables to be draped over long distances. Most of the weight or load of the bridge is
                                        transferred by the cables to the anchorage systems. These are imbedded in either solid rock or huge concrete blocks. Inside the anchorages,
                                        the cables are spread over a large area to evenly distribute the load and to prevent the cables from breaking free.</p>
                                    <p>The Arthashastra of Kautilya mentions the construction of dams and bridges.A Mauryan bridge near Girnar was surveyed by James Princep.
                                        The bridge was swept away during a flood, and later repaired by Puspagupta, the chief architect of emperor Chandragupta I. The bridge
                                        also fell under the care of the Yavana Tushaspa, and the Satrap Rudra Daman. The use of stronger bridges using plaited bamboo and iron
                                        chain was visible in India by about the 4th century. A number of bridges, both for military and commercial purposes, were constructed by
                                        the Mughal administration in India.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End: Portfolio Inline Boxes -->
                    </div>
                </div><!-- .grid-item -->

                <div class="grid-item size11 nature photography">
                    <div class="grid-box">
                        <figure class="portfolio-figure">
                            <img src="{!! asset('public/assets/web') !!}/img/uploads/portfolio/portfolio-thumb-08-289x281.jpg" alt=""/>
                            <figcaption class="portfolio-caption">
                                <div class="portfolio-caption-inner">
                                    <h3 class="portfolio-title">Rocky Mountains</h3>
                                    <h4 class="portfolio-cat">Nature, Photography</h4>

                                    <div class="btn-group">
                                        <a class="btn-link" href="http://bit.ly/1YtB8he" target="_blank"><i class="rsicon rsicon-link"></i></a>
                                        <a class="portfolioFancybox btn-zoom" data-fancybox-group="portfolioFancybox3" href="#portfolio3-inline1"><i class="rsicon rsicon-eye"></i></a>
                                        <a class="portfolioFancybox hidden" data-fancybox-group="portfolioFancybox3" href="#portfolio3-inline2"></a>
                                        <a class="portfolioFancybox hidden" data-fancybox-group="portfolioFancybox3" href="#portfolio3-inline3"></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>

                        <!-- Start: Portfolio Inline Boxes -->
                        <div id="portfolio3-inline1" class="fancybox-inline-box">
                            <div class="inline-embed" data-embed-type="image" data-embed-url="{!! asset('public/assets/web') !!}/img/uploads/portfolio/portfolio-thumb-08-large.jpg"></div>
                        </div>

                        <div id="portfolio3-inline2" class="fancybox-inline-box">
                            <div class="inline-embed" data-embed-type="image" data-embed-url="{!! asset('public/assets/web') !!}/img/uploads/portfolio/portfolio-thumb-04-large.jpg"></div>
                        </div>

                        <div id="portfolio3-inline3" class="fancybox-inline-box">
                            <div class="inline-embed" data-embed-type="image" data-embed-url="{!! asset('public/assets/web') !!}/img/uploads/portfolio/portfolio-thumb-02-large.jpg"></div>
                        </div>
                        <!-- End: Portfolio Inline Boxes -->
                    </div>
                </div><!-- .grid-item -->
            </div>

            <div class="grid-more">
                <span class="ajax-loader"></span>
                <button class="btn btn-border ripple"><i class="rsicon rsicon-add"></i></button>
            </div>
        </div>
    </section><!-- #portfolio -->

    <section id="experience" class="section section-experience">
        <div class="animate-up">
            <h2 class="section-title">Work Experience</h2>
            @if(!$expers->isEmpty())
            <div class="timeline">
                <div class="timeline-bar"></div>
                <div class="timeline-inner clearfix">
                    @foreach($expers as $k=>$exper)
                    <div class="timeline-box {!! $k & 1 ?  'timeline-box-right' : 'timeline-box-left'!!}">
                        <span class="dot"></span>
                        <div class="timeline-box-inner {!! $k & 1 ?  'animate-left' : 'animate-right'!!}">
                            <span class="arrow"></span>
                            <div class="date">{!! $exper->time !!}</div>
                            <h3>{!! $exper->company_name !!}</h3>
                            <h4>{!! $exper->position !!}</h4>
                            <p>{!! $exper->content !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </section><!-- #experience -->

    <section id="education" class="section section-education">
        <div class="animate-up">
            <h2 class="section-title">Education</h2>
            <div class="timeline">
                <div class="timeline-bar"></div>
                <div class="timeline-inner clearfix">

                    <div class="timeline-box timeline-box-compact timeline-box-left">
                        <span class="dot"></span>

                        <div class="timeline-box-inner animate-right">
                            <span class="arrow"></span>
                            <div class="date"><span>2012 - 2014</span></div>
                            <h3>Master of Information Technology</h3>
                            <h4>MIT&T</h4>
                        </div>
                    </div>

                    <div class="timeline-box timeline-box-compact timeline-box-right">
                        <span class="dot"></span>

                        <div class="timeline-box-inner animate-left">
                            <span class="arrow"></span>
                            <div class="date"><span>2008 - 2012</span></div>
                            <h3>Bachelor Computer Engineering</h3>
                            <h4>Harwarg Universitey</h4>
                        </div>
                    </div>

                    <div class="timeline-box timeline-box-compact timeline-box-left">
                        <span class="dot"></span>

                        <div class="timeline-box-inner animate-right">
                            <span class="arrow"></span>
                            <div class="date"><span>2007 - 2008</span></div>
                            <h3>Certificate for courses of Computer Science</h3>
                            <h4>Stanfoorb Universitey</h4>
                        </div>
                    </div>

                    <div class="timeline-box timeline-box-compact timeline-box-right">
                        <span class="dot"></span>

                        <div class="timeline-box-inner animate-left">
                            <span class="arrow"></span>
                            <div class="date"><span>2007 - 2008</span></div>
                            <h3>1 week Courses of Information Systems</h3>
                            <h4>Oxforz Universitey</h4>
                        </div>
                    </div>

                    <div class="timeline-box timeline-box-compact timeline-box-left">
                        <span class="dot"></span>

                        <div class="timeline-box-inner animate-right">
                            <span class="arrow"></span>
                            <div class="date"><span>2006 - 2007</span></div>
                            <h3>Software Engineering</h3>
                            <h4>Sordonne University</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #education -->

    <section id="clients" class="section section-clients">
        <div class="animate-up">

            <div class="clients-carousel">
                <div class="client-logo">
                    <a href="http://market.envato.com/" target="_blank"><img src="{!! asset('public/assets/web') !!}/img/uploads/logos/logo-envato.png" title="envato" alt="envato"/></a>
                </div>

                <div class="client-logo">
                    <img src="{!! asset('public/assets/web') !!}/img/uploads/logos/logo-angularjs.png" title="angular js" alt="angular js"/>
                </div>

                <div class="client-logo">
                    <a href="https://www.omniref.com/ruby/gems/teaspoon/0.7.9" target="_blank"><img src="{!! asset('public/assets/web') !!}/img/uploads/logos/logo-teaspoon.png" title="teaspoon" alt="teaspoon"/></a>
                </div>

                <div class="client-logo">
                    <a href="https://wordpress.com/" target="_blank"><img src="{!! asset('public/assets/web') !!}/img/uploads/logos/logo-wordpress.png" title="wordpress" alt="wordpress"/></a>
                </div>

                <div class="client-logo">
                    <a href="https://evernote.com/" target="_blank"><img src="{!! asset('public/assets/web') !!}/img/uploads/logos/logo-evernote.png" title="evernote" alt="evernote"/></a>
                </div>

                <div class="client-logo">
                    <a href="http://compass-style.org/" target="_blank"><img src="{!! asset('public/assets/web') !!}/img/uploads/logos/logo-compass.png" title="compass" alt="compass"/></a>
                </div>

                <div class="client-logo">
                    <a href="http://getbootstrap.com/" target="_blank"><img src="{!! asset('public/assets/web') !!}/img/uploads/logos/logo-bootstrap.png" title="bootstrap" alt="bootstrap"/></a>
                </div>

                <div class="client-logo">
                    <a href="http://jasmine.github.io/" target="_blank"><img src="{!! asset('public/assets/web') !!}/img/uploads/logos/logo-jasmine.png" title="jasmine" alt="jasmine"/></a>
                </div>

                <div class="client-logo">
                    <a href="https://jquery.com/" target="_blank"><img src="{!! asset('public/assets/web') !!}/img/uploads/logos/logo-jquery.png" title="jquery" alt="jquery"/></a>
                </div>
            </div>
        </div>
    </section><!-- #clients -->


    <section id="interests" class="section section-interests">
        <div class="animate-up">
            <h2 class="section-title">My Interests</h2>

            <div class="section-box">
                <p>I have a keen interest in photography. I was vice-president of the photography club during my time at university,
                    and during this period I organised a number of very successful exhibitions and events both on and off campus.
                    <br/>I also play the piano to grade 8 standard.</p>

                <ul class="interests-list">
                    <li>
                        <i class="map-icon map-icon-bicycling"></i>
                        <span>Bicycling</span>
                    </li>
                    <li>
                        <i class="map-icon map-icon-movie-theater"></i>
                        <span>Watch Movies</span>
                    </li>
                    <li>
                        <i class="map-icon map-icon-ice-skating"></i>
                        <span>Skating</span>
                    </li>
                    <li>
                        <i class="map-icon map-icon-shopping-mall"></i>
                        <span>Shopping</span>
                    </li>
                    <li>
                        <i class="map-icon map-icon-tennis"></i>
                        <span>Playing Tennis</span>
                    </li>
                    <li>
                        <i class="map-icon map-icon-bowling-alley"></i>
                        <span>Playing Bowling</span>
                    </li>
                    <li>
                        <i class="map-icon map-icon-swimming"></i>
                        <span>Swimming</span>
                    </li>
                </ul>
            </div>
        </div>
    </section><!-- #interests -->


    <section id="contact" class="section section-contact">
        <div class="animate-up">
            <h2 class="section-title">Contact Me</h2>

            <div class="row">
                <div class="col-sm-6">
                    <div class="section-box contact-form">
                        <h3>Feel free to contact me</h3>

                        <form class="contactForm" action="https://rscard.px-lab.com/html/php/contact_form.php" method="post">
                            <div class="input-field">
                                <input class="contact-name" type="text" name="name"/>
                                <span class="line"></span>
                                <label>Name</label>
                            </div>

                            <div class="input-field">
                                <input class="contact-email" type="email" name="email"/>
                                <span class="line"></span>
                                <label>Email</label>
                            </div>

                            <div class="input-field">
                                <input class="contact-subject" type="text" name="subject"/>
                                <span class="line"></span>
                                <label>Subject</label>
                            </div>

                            <div class="input-field">
                                <textarea class="contact-message" rows="4" name="message"></textarea>
                                <span class="line"></span>
                                <label>Message</label>
                            </div>

                            <span class="btn-outer btn-primary-outer ripple">
											<input class="contact-submit btn btn-lg btn-primary" type="submit" value="Send"/>
										</span>

                            <div class="contact-response"></div>
                        </form>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="section-box contact-info has-map">
                        <ul class="contact-list">
                            <li class="clearfix">
                                <strong>Address</strong>
                                <span>Belgium, Brussels, Liutte 27, BE</span>
                            </li>
                            <li class="clearfix">
                                <strong>phone</strong>
                                <span><a href="tel:+12562548456">+1 256 254 84 56</a></span>
                            </li>
                            <li class="clearfix">
                                <strong>E-mail</strong>
                                <span><a href="mailto:robertsmith@company.com">robertsmith@company.com</a></span>
                            </li>
                        </ul>

                        {{--<div id="map" data-latitude="50.84592" data-longitude="4.366859999999974"></div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #contact -->
    <!-- END: PAGE CONTENT -->
@stop