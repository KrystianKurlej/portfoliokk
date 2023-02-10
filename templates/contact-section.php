<section class="contact-section" id="contact">
    <div class="wrapper">
        <div class="content">

            <div class="title">
                <img
                src="<?php echo get_template_directory_uri() . ("/img/profile.png"); ?>"
                alt="profile"
                class="profile-pic"
                />
                <div class="message-text">
                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 17.0641C6.34532 13.1101 6.7482 8.19427 6.7482 0.5L14 12.362C12.3549 14.6774 7.2518 18.8594 0 17.0641Z" fill="#228FCC"/>
                    </svg>
                    Let's talk!
                    <img
                    src="<?= get_template_directory_uri() . ("/img/emoji.png"); ?>"
                    alt="emoji"
                    class="emoji-pic"
                    />
                </div>
            </div>
            
            <p class="description">
                Looking for a new challenge in the graphic design field? Let's connect. I'm passionate about design and eager to bring your ideas to life. Reach out and let's see how we can work together.
            </p>

            <div class="cta">
                <a href="mailto:kurlejk@gmail.com" class="link">
                    <button class="btn-primary btn-light">
                        Send me an email
                        <?php include get_template_directory() . ("/icons/send.svg"); ?>
                    </button>
                </a>
                <a href="/" class="link">
                    <button class="btn-secondary btn-light">
                        My resumé
                        <?php include get_template_directory() . ("/icons/download.svg"); ?>
                    </button>
                </a>
            </div>

            <div class="social-media">
                <h3 class="title">My social media</h3>
                <div class="links">
                    <a href="https://www.behance.net/krystiankurlej" class="link" title="Behance" target="_blank">
                        <?php include get_template_directory() . ("/icons/behance.svg"); ?>
                    </a>
                    <a href="https://www.linkedin.com/in/krystian-kurlej-0ba001232/" class="link" title="LinkedIn" target="_blank">
                        <?php include get_template_directory() . ("/icons/linkedin.svg"); ?>
                    </a>
                    <a href="https://github.com/KrystianKurlej" class="link" title="GitHub" target="_blank">
                        <?php include get_template_directory() . ("/icons/github.svg"); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>