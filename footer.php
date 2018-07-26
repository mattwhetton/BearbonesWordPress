<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bearbones
 */

?>

<footer class="bb-footer tmc-footer">
    <div class="container">
        <div class="bb-grid md">
            <div class="column two-thirds">
				<h5>Take Me Cooking</h5>
				<p>Be part of a meal that means something</p>
				<div class="m-t-3">
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'Bearbones' ), 'Bearbones', '<a href="https://bearbon.es" class="link primary font-weight-bold">Daniel Humenko</a>' );
					?>
				</div>
            </div>
                <div class="column one-third">
                    <div class="tmc-footer-links">
                        <div class="link-header">
                            <p>More Info</p>
                        </div>
                        <ul class="unstyled inline">
                            <li class="inline-item">
                                <a target='_blank' href="https://takemecooking.com/about-us/">About us</a>
                            </li>
                            <li class="inline-item">
                                <a target='_blank' href="mailto:contact@takemecooking.com">Contact us</a>
                            </li>
                            <li class="inline-item">
                                <a target='_blank' href="https://takemecooking.com/faq/">FAQ's</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tmc-footer-links">
                        <div class="link-header">
                            <p>Discover</p>
                        </div>
                        <ul class="unstyled inline">
                            <li class="inline-item">
                                <a target="_blank" title="Take Me Cooking Blog" target='_blank' href="https://medium.com/take-me-cooking" class="link white">Blog</a>
                            </li>
                            <li class="inline-item">
                                <a title="Take Me Cooking Locations" class="link white" target='_blank' href="https://takemecooking.com/locations/">Browse Locations</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tmc-footer-links">
                        <div class="link-header">
                            <p>Other</p>
                        </div>
                        <ul class="unstyled inline">
                            <li class="inline-item">
                                <a target="_blank" title="Take Me Cooking Press Kit" target='_blank' href="https://drive.google.com/drive/folders/1FRU_5mGthJM4dlVF0mwUazBdNkrsAxgm?usp=sharing" class="link white">Press Kit</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
        <div class="bb-divider"></div>
        <div class="bb-grid md">
            <div class="column two-thirds">
                <div class="media vertical-align">
                    <div class="media-left">
                        <figure>
                            <img src="https://cdn.takemecooking.com/web/static/img/takemecooking-icon-filled.png" alt="Placeholder">
                        </figure>
                    </div>
                    <div class="media-container">
                        <div class="media-content">
                            <p class="text-xs">
                                Take Me Cooking Ltd. Registered in England No: 10837019. 6 Lichfield Street, Burton On Trent, United Kingdom, DE14 3RD.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="column one-third">
                    <div class="footer-sitemap">
                        <ul class="inline">
                            <li class="inline-item">
                                <a target='_blank' href="https://takemecooking.com/terms/">Terms</a>
                            </li>
                            <li class="inline-item">
                                <a target='_blank' href="https://takemecooking.com/privacy/">Privacy</a>
                            </li>
                            <li class="inline-item">
                                <a target="_blank" title="Take Me Cooking on Twitter" target='_blank' href="https://www.twitter.com/takemecooking" class="link white">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="inline-item">
                                <a target="_blank" title="Take Me Cooking on Instagram" target='_blank' href="https://www.instagram.com/takemecooking/" class="link white">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="inline-item">
                                <a target="_blank" title="Take Me Cooking on Facebook" target='_blank' href="https://www.facebook.com/takemecooking/" class="link white">
                                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="inline-item">
                                <a target="_blank" title="Take Me Cooking on YouTube" target='_blank' href="https://www.youtube.com/channel/UC0fsFTR2AiHZ3mElYyv-Yzg" class="link white">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
