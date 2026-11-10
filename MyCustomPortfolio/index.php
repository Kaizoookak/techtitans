<?php
/**
 * Tech Titans - front page
 * Team data lives in this one array, so updating a name, role,
 * phone number or link only needs to be done here.
 */

$images = get_template_directory_uri() . '/assets/images/';

// Group photo: uses group.jpg if it exists, otherwise falls back to team.jpg
$group_photo = file_exists(get_template_directory() . '/assets/images/group.jpg')
    ? $images . 'group.jpg'
    : $images . 'team.jpg';

$team_email = 'occ.techtitans@gmail.com';
$team_phone = '09932460830';

$members = array(
    array(
        'name'     => 'Jessa Mae Villanueva',
        'role'     => 'Project Manager',
        'photo'    => 'jess.jpg',
        'desc'     => 'Leads the team, coordinates tasks, and guides the project toward its goals.',
        'email'    => 'occ.villanueva.jessamae@gmail.com',
        'phone'    => '09050772103',
        'facebook' => 'https://www.facebook.com/jessamae.villanueva.507',
    ),
    array(
        'name'     => 'Luis Karl Consolacion',
        'role'     => 'Programmer',
        'photo'    => 'kak.jpg',
        'desc'     => "Develops and maintains the website and brings the team's ideas to life.",
        'email'    => 'occ.consolacion.luiskarl@gmail.com',
        'phone'    => '09678770550',
        'facebook' => 'https://www.facebook.com/luis.karl.748920',
    ),
    array(
        'name'     => 'Johnpaul Balabasa',
        'role'     => 'Analyst',
        'photo'    => 'pop.jpg',
        'desc'     => 'Studies project needs, organizes information, and helps define system requirements.',
        'email'    => 'occ.balasba.johnpaul.@gmail.com',
        'phone'    => '09276682066',
        'facebook' => 'https://www.facebook.com/share/18zzfbXgKr/',
    ),
    array(
        'name'     => 'Juliane Detchos',
        'role'     => 'Technical Writer',
        'photo'    => 'dec.jpg',
        'desc'     => 'Prepares project documentation and communicates technical information.',
        'email'    => 'occ.detchos.juliane@gmail.com',
        'phone'    => '09916708188',
        'facebook' => 'https://www.facebook.com/share/1Em6dQaeRy/',
    ),
);

// 09XXXXXXXXX -> +639XXXXXXXXX (so the call button works from anywhere)
function techtitans_tel( $phone ) {
    return 'tel:+63' . substr( $phone, 1 );
}

// 09XXXXXXXXX -> 0912 345 6789 (easier to read)
function techtitans_phone_pretty( $phone ) {
    return substr( $phone, 0, 4 ) . ' ' . substr( $phone, 4, 3 ) . ' ' . substr( $phone, 7 );
}

get_header();
?>

<main>

    <!-- =========================
         HERO SECTION
    ========================== -->
    <section class="hero" id="home">

        <div class="hero-content">

            <span class="section-label">WELCOME TO OUR PORTFOLIO</span>

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

                <a href="mailto:<?php echo esc_attr( $team_email ); ?>">
                    <i class="fas fa-envelope"></i>
                    <?php echo esc_html( $team_email ); ?>
                </a>

                <a href="<?php echo esc_url( techtitans_tel( $team_phone ) ); ?>">
                    <i class="fas fa-phone"></i>
                    <?php echo esc_html( techtitans_phone_pretty( $team_phone ) ); ?>
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
                src="<?php echo esc_url( $images . 'team.jpg' ); ?>"
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

        <p class="section-intro">
            We are a group of four Information Technology students
            who love programming, web development, and innovation.
            Tech Titans is where our ideas, skills, and teamwork
            come together.
        </p>

        <div class="about-layout">

            <figure class="group-photo">
                <img
                    src="<?php echo esc_url( $group_photo ); ?>"
                    alt="The Tech Titans team standing together"
                    loading="lazy"
                >
                <figcaption>
                    <i class="fas fa-camera"></i>
                    The Tech Titans team
                </figcaption>
            </figure>

            <div class="about-highlights">

                <div class="highlight-card">
                    <span class="highlight-icon"><i class="fas fa-code"></i></span>
                    <div>
                        <h3>Web Development</h3>
                        <p>We design and build websites using WordPress, PHP, HTML, CSS and JavaScript.</p>
                    </div>
                </div>

                <div class="highlight-card">
                    <span class="highlight-icon"><i class="fas fa-handshake"></i></span>
                    <div>
                        <h3>Teamwork</h3>
                        <p>Every member has a role, and we share ideas to reach our goals together.</p>
                    </div>
                </div>

                <div class="highlight-card">
                    <span class="highlight-icon"><i class="fas fa-lightbulb"></i></span>
                    <div>
                        <h3>Innovation</h3>
                        <p>We keep learning new technologies to create useful digital solutions.</p>
                    </div>
                </div>

                <div class="highlight-card">
                    <span class="highlight-icon"><i class="fab fa-github"></i></span>
                    <div>
                        <h3>Collaboration</h3>
                        <p>We manage our work with GitHub so everyone can contribute and stay in sync.</p>
                    </div>
                </div>

            </div>

        </div>

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

            <?php foreach ( $members as $member ) : ?>

                <article class="team-card">

                    <div class="team-photo-wrap">
                        <img
                            src="<?php echo esc_url( $images . $member['photo'] ); ?>"
                            alt="<?php echo esc_attr( $member['name'] ); ?>"
                            class="team-photo"
                            loading="lazy"
                        >
                    </div>

                    <h3><?php echo esc_html( $member['name'] ); ?></h3>

                    <span class="team-role">
                        <?php echo esc_html( $member['role'] ); ?>
                    </span>

                    <p><?php echo esc_html( $member['desc'] ); ?></p>

                    <div class="social-links">

                        <a href="mailto:<?php echo esc_attr( $member['email'] ); ?>"
                           aria-label="Email <?php echo esc_attr( $member['name'] ); ?>"
                           title="Email">
                            <i class="fas fa-envelope"></i>
                        </a>

                        <a href="<?php echo esc_url( techtitans_tel( $member['phone'] ) ); ?>"
                           aria-label="Call <?php echo esc_attr( $member['name'] ); ?>"
                           title="Call">
                            <i class="fas fa-phone"></i>
                        </a>

                        <a href="<?php echo esc_url( $member['facebook'] ); ?>"
                           target="_blank" rel="noopener noreferrer"
                           aria-label="<?php echo esc_attr( $member['name'] ); ?> on Facebook"
                           title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </section>


    <!-- =========================
         PROJECTS SECTION
    ========================== -->
    <section class="content-section projects-section" id="projects">

        <span class="section-label">OUR WORK</span>

        <h2>Our Projects</h2>

        <p class="section-intro">
            Discover our creativity and technology projects.
            We aim to develop innovative solutions through
            collaboration and continuous learning.
        </p>

        <div class="project-grid">

            <article class="project-card">
                <span class="project-icon"><i class="fas fa-laptop-code"></i></span>
                <h3>Tech Titans Portfolio Website</h3>
                <p>
                    Our group portfolio, built as a custom WordPress theme,
                    version-controlled on GitHub and hosted on Hostinger.
                </p>
                <div class="tech-tags">
                    <span>WordPress</span>
                    <span>PHP</span>
                    <span>HTML &amp; CSS</span>
                    <span>JavaScript</span>
                    <span>GitHub</span>
                </div>
            </article>

            <article class="project-card project-card-soon">
                <span class="project-icon"><i class="fas fa-rocket"></i></span>
                <h3>More Coming Soon</h3>
                <p>
                    We are always learning and building. New projects
                    from our team will be added here.
                </p>
                <div class="tech-tags">
                    <span>Stay tuned</span>
                </div>
            </article>

        </div>

    </section>


    <!-- =========================
         CONTACT SECTION
    ========================== -->
    <section class="content-section contact-section" id="contact">

        <span class="section-label">GET IN TOUCH</span>

        <h2>Let's Connect</h2>

        <p class="section-intro">
            Want to work with us or just say hello? Message the whole
            team, or reach out to any of us directly.
        </p>

        <!-- TEAM CONTACT -->
        <div class="team-contact">

            <a class="team-contact-item" href="mailto:<?php echo esc_attr( $team_email ); ?>">
                <i class="fas fa-envelope"></i>
                <span>
                    <small>Team email</small>
                    <?php echo esc_html( $team_email ); ?>
                </span>
            </a>

            <a class="team-contact-item" href="<?php echo esc_url( techtitans_tel( $team_phone ) ); ?>">
                <i class="fas fa-phone"></i>
                <span>
                    <small>Team number</small>
                    <?php echo esc_html( techtitans_phone_pretty( $team_phone ) ); ?>
                </span>
            </a>

        </div>

        <!-- INDIVIDUAL CONTACTS -->
        <div class="contact-grid">

            <?php foreach ( $members as $member ) : ?>

                <article class="contact-card">

                    <img
                        src="<?php echo esc_url( $images . $member['photo'] ); ?>"
                        alt="<?php echo esc_attr( $member['name'] ); ?>"
                        class="contact-avatar"
                        loading="lazy"
                    >

                    <h3><?php echo esc_html( $member['name'] ); ?></h3>
                    <span class="team-role"><?php echo esc_html( $member['role'] ); ?></span>

                    <ul class="contact-list">

                        <li>
                            <a href="mailto:<?php echo esc_attr( $member['email'] ); ?>">
                                <i class="fas fa-envelope"></i>
                                <span><?php echo esc_html( $member['email'] ); ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo esc_url( techtitans_tel( $member['phone'] ) ); ?>">
                                <i class="fas fa-phone"></i>
                                <span><?php echo esc_html( techtitans_phone_pretty( $member['phone'] ) ); ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo esc_url( $member['facebook'] ); ?>"
                               target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-f"></i>
                                <span>Facebook Profile</span>
                            </a>
                        </li>

                    </ul>

                </article>

            <?php endforeach; ?>

        </div>

    </section>

</main>

<?php get_footer(); ?>
