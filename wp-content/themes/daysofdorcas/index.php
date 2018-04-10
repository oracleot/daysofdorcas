<?php
/*
Template Name: Home Days of Dorcas
*/
?>
<?php include('temp-parts/custom-header.php');
    
    // Landing Page
    if ( is_front_page() ) :
        include get_template_directory() . "/temp-parts/page-landing.php";
    
    // Guidelines Page
    elseif ( is_page( 'guidelines' ) ) :
        include get_template_directory() . "/temp-parts/page-guidelines.php";

    // Facilitators Page
    elseif ( is_page( 'facilitators' ) ) :
        include get_template_directory() . "/temp-parts/page-facilitators.php";

    //About Page
    elseif ( is_page( 'about' ) ) :
        include get_template_directory() . "/temp-parts/page-about.php";

    //About Page
    elseif ( is_page( 'enquiries' ) ) :
        include get_template_directory() . "/temp-parts/page-enquiries.php";
    
    //For Unspecified Pages
    else:
        echo '<h1>Hello, unspecified page...</h1>';

    endif;

include('temp-parts/custom-footer.php') ?>