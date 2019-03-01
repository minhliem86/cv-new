<div class="mobile-nav">
    <button class="btn-mobile mobile-nav-close"><i class="rsicon rsicon-close"></i></button>

    <div class="mobile-nav-inner">
        <nav id="mobile-nav" class="nav">
            <ul class="clearfix">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#portfolio">Portfolio</a> </li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#contact">Contact <span></span></a></li>
            </ul>
        </nav>
    </div>
</div><!-- .mobile-nav -->

<div class="sidebar sidebar-fixed">
    <button class="btn-sidebar btn-sidebar-close"> <i class="rsicon rsicon-close"></i></button>

    <div class="widget-area">
        <aside class="widget widget-profile">
            <div class="profile-photo">
                <img src="{!! asset('public/assets/web') !!}/img/uploads/rs-photo-v2.jpg" alt="Robert Smith"/>
            </div>
            <div class="profile-info">
                <h2 class="profile-title">Robert Smith</h2>
                <h3 class="profile-position">Developer and Startup entrepreneur</h3>
            </div>
        </aside><!-- .widget-profile -->

        <aside class="widget widget_contact">
            <h2 class="widget-title">Contact Me</h2>
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
        </aside><!-- .widget_contact -->

    </div><!-- .widget-area -->
</div><!-- .sidebar -->