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
                                    <span class="cont"><a href="tel:0902942054">{!! $profiles ? $profiles->phone : '0902942054' !!}</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="profile-social">
                    <ul class="social">
                        <li><a class="ripple-centered" href="https://www.facebook.com/xRuaSieuTocx" target="_blank"><i class="rsicon rsicon-facebook"></i></a></li>
                        <li><a class="ripple-centered" href="https://www.linkedin.com/in/liem-phan-63903611b/" target="_blank"><i class="rsicon rsicon-linkedin"></i></a></li>
                        <li><a class="ripple-centered" href="https://www.instagram.com/" target="_blank"><i class="rsicon rsicon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="section-txt-btn">
                <p><a class="btn btn-lg btn-border ripple" target="_blank" href="http://dev.novembit.com/rs_card/wp-content/uploads/2015/11/test-1.pdf">Download Resume</a></p>
                <div>
                    {!! $profiles->about_me !!}
                </div>
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

    @if(!$categories->isEmpty())
    <section id="portfolio" class="section section-portfolio">
        <div class="animate-up">
            <h2 class="section-title">Portfolio</h2>


            <div class="filter">
                <div class="filter-inner">
                    <div class="filter-btn-group">
                        <button data-filter="*">All</button>
                        @foreach($categories as $category)
                        <button data-filter=".{!! $category->slug !!}">{!! $category->name !!}</button>
                        @endforeach
                    </div>
                    <div class="filter-bar">
                        <span class="filter-bar-line"></span>
                    </div>
                </div>
            </div>

            <div class="grid">
                <div class="grid-sizer"></div>

                @foreach($categories as $k=>$category_grid)
                <div class="grid-item {!! $k==0 ? 'size22' : 'size11' !!} {!! $category_grid->slug !!}">
                    <div class="grid-box">
                        <figure class="portfolio-figure">
                            <img src="{!! asset('public/storage') !!}/{!! $category_grid->img_url !!}" alt=""/>
                            <figcaption class="portfolio-caption">
                                <div class="portfolio-caption-inner">
                                    <h3 class="portfolio-title">{!! $category_grid->name !!}</h3>
                                    {{--<h4 class="portfolio-cat">Photography</h4>--}}

                                    <div class="btn-group">
                                        @for($i = $k;  $i < $category_grid->projects->count() ; $i++)
                                        <a class="portfolioFancybox {!! $i==0 ? 'btn-zoom' : 'hidden' !!}" data-fancybox-group="{!! $category_grid->slug !!}" href="#{!! $category_grid->slug !!}-inline{!! $i+1 !!}"><i class="rsicon rsicon-eye"></i></a>
                                        @endfor
                                        {{--<a class="portfolioFancybox hidden" data-fancybox-group="portfolioFancybox1" href="#portfolio1-inline2"></a>--}}
                                        {{--<a class="portfolioFancybox hidden" data-fancybox-group="portfolioFancybox1" href="#portfolio1-inline3"></a>--}}
                                    </div>
                                </div>
                            </figcaption>
                        </figure>

                        @if(!$category_grid->projects->isEmpty())
                            @foreach($category_grid->projects as $k_project=>$project)
                        <!-- Start: Portfolio Inline Boxes -->
                        <div id="{!! $category_grid->slug !!}-inline{!! $k_project+1 !!}" class="fancybox-inline-box">
                            <div class="inline-embed" data-embed-type="image" data-embed-url="{!! asset('public/storage') !!}/{!! $project->img_url !!}"></div>
                            <div class="inline-cont">
                                <h2 class="inline-title">{!! $project->title !!}</h2>
                                @if($project->description)
                                <div class="inline-text">
                                    {!! $project->description !!}
                                </div>
                                @endif
                                @if($project->link)
                                <div class="inline-link">
                                    <a href="{!! $project->link !!}" target="_blank">{!! $project->link !!}</a>
                                </div>
                                @endif
                            </div>
                        </div>
                            @endforeach
                        @endif
                        <!-- End: Portfolio Inline Boxes -->
                    </div>
                </div><!-- .grid-item -->
                @endforeach
            </div>

        </div>
    </section><!-- #portfolio -->
    @endif

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
            @if(!$educations->isEmpty())
            <div class="timeline">
                <div class="timeline-bar"></div>
                <div class="timeline-inner clearfix">
                    @foreach($educations as $k=>$education)
                    <div class="timeline-box timeline-box-compact {!! $k & 1 ?  'timeline-box-right' : 'timeline-box-left'!!}">
                        <span class="dot"></span>

                        <div class="timeline-box-inner {!! $k & 1 ?  'animate-left' : 'animate-right'!!}">
                            <span class="arrow"></span>
                            <div class="date"><span>{!! $education->time !!}</span></div>
                            <h3>{!! $education->title !!}</h3>
                            <h4>{!! $education->school_name !!}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </section><!-- #education -->

    <section id="clients" class="section section-clients">
        <div class="animate-up">

            <div class="clients-carousel">
                <div class="client-logo">
                    <a href="http://market.envato.com/" target="_blank" title="html5"><span class="devicons devicons-html5"></span></a>
                </div>
                <div class="client-logo">
                    <a href="http://market.envato.com/" target="_blank" title="css3"><span class="devicons devicons-css3_full"></span></a>
                </div>
                <div class="client-logo">
                    <a href="http://market.envato.com/" target="_blank" title="Jquery"><span class="devicons devicons-jquery"></span></a>
                </div>
                {{--<div class="client-logo">--}}
                    {{--<a href="http://market.envato.com/" target="_blank" title="Photoshop"><span class="devicons devicons-photoshop"></span></a>--}}
                {{--</div>--}}
                {{--<div class="client-logo">--}}
                    {{--<a href="http://market.envato.com/" target="_blank" title="Illustrator"><span class="devicons devicons-illustrator"></span></a>--}}
                {{--</div>--}}
                <div class="client-logo">
                    <a href="http://market.envato.com/" target="_blank" title="PHP"><span class="devicons devicons-php"></span></a>
                </div>
                <div class="client-logo">
                    <a href="http://market.envato.com/" target="_blank" title="Laravel"><span class="devicons devicons-laravel"></span></a>
                </div>
                <div class="client-logo">
                    <a href="http://market.envato.com/" target="_blank" title="MySQL"><span class="devicons devicons-mysql"></span></a>
                </div>
                {{--<div class="client-logo">--}}
                    {{--<a href="http://market.envato.com/" target="_blank" title="React JS"><span class="devicons devicons-react"></span></a>--}}
                {{--</div>--}}
            </div>
        </div>
    </section><!-- #clients -->


    <section id="interests" class="section section-interests">
        <div class="animate-up">
            <h2 class="section-title">My Interests</h2>

            <div class="section-box">
                {!! $profiles->interest !!}

                <ul class="interests-list">
                    <li>
                        <i class="map-icon map-icon-museum"></i>
                        <span>Music</span>
                    </li>
                    <li>
                        <i class="map-icon map-icon-movie-theater"></i>
                        <span>Watch Movies</span>
                    </li>
                    <li>
                        <i class="map-icon map-icon-swimming"></i>
                        <span>Swimming</span>
                    </li>
                    <li>
                        <i class="map-icon map-icon-transit-station"></i>
                        <span>Traveling</span>
                    </li>
                    <li>
                        <i class="map-icon map-icon-inline-skating"></i>
                        <span>Football</span>
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
                        @if($errors && $errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach($errors->all() as $er)
                                    <p><i>{!! $er !!}</i></p>
                                @endforeach
                            </div>
                        @endif

                        <form class="contactForm" action="{!! route('web.register') !!}" method="post">
                            {{ csrf_field() }}
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
                            @if(session('success'))
                            <div class="contact-response">
                                <p>Thanks for your contact.</p>
                                <p>Have a nice day!</p>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="section-box contact-info has-map">
                        <ul class="contact-list">
                            <li class="clearfix">
                                <strong>Address</strong>
                                <span>{!! $profiles->address !!}</span>
                            </li>
                            <li class="clearfix">
                                <strong>phone</strong>
                                <span><a href="tel:0902942054">{!! $profiles->phone !!}</a></span>
                            </li>
                            <li class="clearfix">
                                <strong>E-mail</strong>
                                <span><a href="mailto:{!! $profiles->email !!}">{!! $profiles->email !!}</a></span>
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