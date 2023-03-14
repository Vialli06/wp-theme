<?php get_header();?>

<!-- <h1><?php the_title();?></h1> -->

<?php if(have_posts() ): while( have_posts() ): the_post();?>

<h1><?php the_content();?></h1>

<?php endwhile; else: endif;?>


<div class="button-section text-center" >
                <button class="google-btn" type="button">
                    Sign up with Google
                </button>

                <button class="email-btn" type="button">Sign up with Gmail</button>

            <p>Free seven days trial. Get started</p>
</div>

<hr class="dotted-border">

<div id="part-two">
    <div class="container">
        <div class="row">
            <div class="col-6">abcb</div>

            <div class="col-6">
                <p>Here's how it works</p>
                <ul>
                    <li>Brainstorming ideas</li>
                    <li>Business intelligence</li>
                    <li>Business plans</li>
                    <li>Autopilot</li>
                </ul>
                <p><u>View all features</u></p>
            </div>
        </div>
    </div>

    <hr class="dotted-border">

<div id="part-three">
    <div class="container text-center">
        <img src=<?php echo get_template_directory_uri(); ?>'/images/time.png' class="img-fluid" width="50">
        <h1>Save time on market research and competitive analysis</h1>
        <p id="p-3">Brainstorm startup ideas automatically, reducing time spent on market research and competitive analysis from hours to minutes. Access to a stunning business model canvas database with thousands of examples that will inspire you, create and edit <b>unique business plans</b> using the mash-up method, export your projects easily.</p>
        <div class="button-section">
            <button class="greenbtn" type="button">
                See how vizologi works 
            </button>

            <button class="purplebtn" type="button">View all features ></button>
        </div>
    </div>

</div>

<hr class="dotted-border">

<div id="part-four">
    <div class="container text-center">
    <img src=<?php echo get_template_directory_uri(); ?>'/images/hand.svg' class="img-fluid" width="180" height="67">
        <!-- <img src=<?php echo get_template_directory_uri(); ?>"/images/hand.svg"> -->
        <p id="p-4">Vizologi has helped thousands of people complete</p>
        <h2>over 1.5 million questions in 25+ thousand projects</h2>
        <div class="row">
            <div class="col-2">
                <!-- <img src="designit.webp"> -->
                <img src=<?php echo get_template_directory_uri(); ?>'/images/designit.webp' class="img-fluid" width="130" height="65">
            </div>
            <div class="col-2">
                <!-- <img src="apple.webp"> -->
                <img src=<?php echo get_template_directory_uri(); ?>'/images/apple.webp' class="img-fluid" width="130" height="65">
            </div>
            <div class="col-2">
                <!-- <img src="amazon.webp"> -->
                <img src=<?php echo get_template_directory_uri(); ?>'/images/amazon.webp' class="img-fluid" width="130" height="65">
            </div>
            <div class="col-2">
                <!-- <img src="autodesk.webp"> -->
                <img src=<?php echo get_template_directory_uri(); ?>'/images/autodesk.webp' class="img-fluid" width="130" height="65">
            </div>
            <div class="col-2">
                <!-- <img src="descript.webp"> -->
                <img src=<?php echo get_template_directory_uri(); ?>'/images/descript.webp' class="img-fluid" width="130" height="65">
            </div>
            <div class="col-2">
                <!-- <img src="ey.webp"> -->
                <img src=<?php echo get_template_directory_uri(); ?>'/images/ey.webp' class="img-fluid" width="130" height="65">
            </div>
        </div>
        <div class="people">
        <div class="row">
            <div class="testimonial stratergists">
                <img src=<?php echo get_template_directory_uri(); ?>'/images/testimonial-strategist.webp' class="img-fluid" width="250" height="250">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="testimonial creatives">
            <img src=<?php echo get_template_directory_uri(); ?>'/images/testimonial-creatives.webp' class="img-fluid" width="250" height="250">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="testimonial consultants">
            <img src=<?php echo get_template_directory_uri(); ?>'/images/testimonial-consultants.webp' class="img-fluid" width="250" height="250">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="testimonial entrepreuners">
            <img src=<?php echo get_template_directory_uri(); ?>'/images/testimonial-entrepreneurs.webp' class="img-fluid" width="250" height="250">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="testimonial managers">
            <img src=<?php echo get_template_directory_uri(); ?>'/images/testimonial-managers.webp' class="img-fluid" width="250" height="250">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="testimonial students">
            <img src=<?php echo get_template_directory_uri(); ?>'/images/testimonial-students.png' class="img-fluid" width="250" height="250">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
</div>
            <!-- <div class="row">
                <div class="col-12">
                    <button class="btn">strategist</div>
                    <button class="btn">strategist</div>
                    <button class="btn">strategist</div>
                    <button class="btn">strategist</div>
                    <button class="btn">strategist</div>
                    <button class="btn">strategist</div>
                </div>
            </div> -->
        </div>
    </div>
</div>

<hr class="dotted-border">

<div class="part-five">
    <div class="container">
        <h1>Transform a cost into revenue</h1>
        <p>For every $1 invested in Vizologi you generate over $75 with new ideas.</p>
        <ul class="nav justify-content-center">
            <li>Monthly</li>
            <li>Yearly</li>
        </ul>
        <div></div>
    </div>
</div>

<hr class="dotted-border">

<div class="part-six ">
    <div class="container text-center">
        <h1 class="p-6">Craft a Business Plan FAST using AI</h1>
        <p class="new-abc">It’s FREE and EASY to get started. Two things people love.</p>
        <button class="google-btn">Sign up with google account</button>
        <p>OR</p>
        <input type="text" class="newtext" placeholder="Your email">
        <br>
        <button class="getstarted-btn">Get started</button>
        <p>Free 7 days trial - Get started in seconds</p>
    </div>
</div>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</div>

<?php get_footer();?>