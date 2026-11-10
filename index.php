
<?php get_header(); ?>

<main>

    <!-- =========================
         HERO SECTION
    ========================== -->
    <section class="hero" id="home">

        <div class="hero-content">

            <span class="section-label">MEET OUR TEAM</span>

            <h1>Tech <span>Titans</span></h1>

            <h2>
                Information Technology
                <span>Students</span>
            </h2>

            <p>
                Building innovative solutions, learning new
                technologies, and shaping a better digital future.
            </p>

            <!-- CONTACT INFORMATION -->
            <div class="contact-info">

                <a href="mailto:occ.techtitans@gmail.com">
                    <i class="fas fa-envelope"></i>
                    occ.techtitans@gmail.com
                </a>

                <a href="tel:09932460830">
                    <i class="fas fa-phone"></i>
                    993-246-0830
                </a>

            </div>

            <!-- BUTTONS -->
            <div class="hero-buttons">

                <a href="#team" class="btn-primary">
                    <i class="fas fa-users"></i>
                    Meet Our Team
                </a>

                <a href="#projects" class="btn-secondary">
                    <i class="fas fa-laptop"></i>
                    Explore Projects
                </a>

            </div>

        </div>

        <!-- HERO IMAGE -->
        <div class="hero-image">

            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/team.jpg'); ?>"
                alt="Tech Titans Team - Four Members"
                class="hero-logo-image"
                loading="eager"
            >

        </div>

    </section>


    <!-- =========================
         ABOUT SECTION
    ========================== -->
    <section class="content-section about-section" id="about">

        <span class="section-label">WHO WE ARE</span>

        <h2>About Tech Titans</h2>

        <p>
            We are Information Technology students passionate
            about programming, web development, technology,
            and innovation.
        </p>

    </section>


    <!-- =========================
         TEAM SECTION
    ========================== -->
    <section class="content-section team-section" id="team">

        <span class="section-label">
            MEET THE PEOPLE BEHIND THE WORK
        </span>

        <h2>Meet Our Team</h2>

        <p class="team-intro">
            Four Information Technology students working together,
            sharing ideas, and building innovative digital solutions.
        </p>

        <div class="team-grid">

            <!-- MEMBER 1: JESSA -->
            <article class="team-card">

                <div class="team-photo-wrap">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/jess.jpg'); ?>"
                        alt="Jessa Mae Villanueva"
                        class="team-photo"
                        loading="lazy"
                    >
                </div>

                <h3>Jessa Mae Villanueva</h3>

                <span class="team-role">
                    Project Manager
                </span>

                <p>
                    Leads the team, coordinates tasks, and guides
                    the project toward its goals.
                </p>

            </article>


            <!-- MEMBER 2: LUIS -->
            <article class="team-card">

                <div class="team-photo-wrap">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/kak.jpg'); ?>"
                        alt="Luis Karl Consolacion"
                        class="team-photo"
                        loading="lazy"
                    >
                </div>

                <h3>Luis Karl Consolacion</h3>

                <span class="team-role">
                    Programmer
                </span>

                <p>
                    Develops and maintains the website and brings
                    the team's ideas to life.
                </p>

            </article>


            <!-- MEMBER 3: JOHNPAUL -->
            <article class="team-card">

                <div class="team-photo-wrap">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pop.jpg'); ?>"
                        alt="Johnpaul Balabasa"
                        class="team-photo"
                        loading="lazy"
                    >
                </div>

                <h3>Johnpaul Balabasa</h3>

                <span class="team-role">
                    Analyst
                </span>

                <p>
                    Studies project needs, organizes information,
                    and helps define system requirements.
                </p>

            </article>


            <!-- MEMBER 4: JULIANE -->
            <article class="team-card">

                <div class="team-photo-wrap">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dec.jpg'); ?>"
                        alt="Juliane Detchos"
                        class="team-photo"
                        loading="lazy"
                    >
                </div>

                <h3>Juliane Detchos</h3>

                <span class="team-role">
                    Technical Writer
                </span>

                <p>
                    Prepares project documentation and communicates
                    technical information.
                </p>

            </article>

        </div>

    </section>


    <!-- =========================
         PROJECTS SECTION
    ========================== -->
    <section class="content-section projects-section" id="projects">

        <span class="section-label">OUR WORK</span>

        <h2>Our Projects</h2>

        <p>
            Discover our creativity and technology projects.
            We aim to develop innovative solutions through
            collaboration and continuous learning.
        </p>

    </section>


    <!-- =========================
         CONTACT SECTION
    ========================== -->
    <section class="content-section contact-section" id="contact">

        <span class="section-label">GET IN TOUCH</span>

        <h2>Contact Us</h2>

        <p>
            <i class="fas fa-envelope"></i>
            occ.techtitans@gmail.com
        </p>

        <p>
            <i class="fas fa-phone"></i>
            993-246-0830
        </p>

    </section>

</main>

<?php get_footer(); ?>
