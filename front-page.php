<?php
$first_section = get_field('first_section');
$hero_background = $first_section['hero_background'];
$hero_title = $first_section['hero_title'];
$hero_description = $first_section['hero_description'];
$social_links = $first_section['social_links'];

$second_section = get_field('second_section');
$about_me_img = $second_section['about_me_img'];
$about_subtitle = $second_section['subtitle'];
$about_title = $second_section['title'];
$about_description = $second_section['description'];

$third_section = get_field('third_section');
$third_section_subtitle = $third_section['subtitle'];
$third_section_title = $third_section['title'];
$third_section_card_1 = $third_section['first_card'];
$third_section_card_2 = $third_section['second_card'];

$fourth_section = get_field('fourth_section');
$fourth_section_subtitle = $fourth_section['subtitle'];
$fourth_section_title = $fourth_section['title'];
$projects_id = $fourth_section['projects'];

$fifth_section = get_field('fifth_section');
$fifth_section_title = $fifth_section['title'];
$contact_button = $fifth_section['button'];

// echo '<pre>';
// print_r($fifth_section);
// echo '</pre>';
get_header();
?>

<main class="home-page">
  <section class="home-section-1">
    <?php if($hero_background): ?>
       <img src="<?php echo $hero_background['url'] ?>" alt="<?php $hero_background['alt']  ?>">
    <?php  endif; ?>
    <div class="hero-content">
       <h1 class="hero-title"><?php echo $hero_title ?></h1>
       <p class="hero-text"><?php echo $hero_description ?></p>
       <div class="hero-socials">
         <a href="<?php echo $social_links['instagram'] ?>">
          <img src="<?php echo get_template_directory_uri() . './assets/images/instagram.png' ?>" alt="Instagram">
         </a>
         <a href="<?php echo $social_links['facebook'] ?>">
          <img src="<?php echo get_template_directory_uri() . './assets/images/facebook.png' ?>" alt="Facebook">
         </a>
         <a href="<?php echo $social_links['github'] ?>">
          <img src="<?php echo get_template_directory_uri() . './assets/images/github.png' ?>" alt="Github">
         </a>
       </div>
    </div>
  </section>

<section class="home-section-2">
  <div class="container">
    <div class="about-me">
      <div class="about-me-img">
      <?php if($about_me_img): ?>
       <img src="<?php echo $about_me_img['url'] ?>" alt="<?php $about_me_img['alt']  ?>">
    <?php  endif; ?>
      </div>
      <div class="about-me-content">
        <h3 class="subtitle">
           <?php echo $about_subtitle ?>
        </h3>
        <h2 class="secondary-title">
           <?php echo $about_title ?>
        </h2>
        <div class="about-me-texts">
        <?php echo $about_description ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home-section-3">
  <div class="container">
    <h3 class="subtitle portfolio-text-center"><?php echo $third_section_subtitle ?></h3>
    <h2 class="secondary-title portfolio-text-center"><?php echo $third_section_title ?></h2>
    <div class="specializing">
      <div class="specializing-card">
         <div class="specializing-card-header">
             <div class="specializing-card-img">
               <?php if($third_section_card_1['icon']): ?>
                  <img src="<?php echo $third_section_card_1['icon']['url'] ?>" alt="<?php echo $third_section_card_1['icon']['alt']?>">
                    <?php  endif; ?>
              </div>
            <h3 class="specializing-card-title">
                 <?php echo $third_section_card_1['card_title'] ?>
             </h3>
         </div>
         <p class="specializing-card-description">
         <?php echo $third_section_card_1['card_description'] ?>
         </p>
       </div>
       <div class="specializing-card">
         <div class="specializing-card-header">
             <div class="specializing-card-img">
               <?php if($third_section_card_2['icon']): ?>
                  <img src="<?php echo $third_section_card_2['icon']['url'] ?>" alt="<?php echo $third_section_card_2['icon']['alt']?>">
                    <?php  endif; ?>
              </div>
            <h3 class="specializing-card-title">
                 <?php echo $third_section_card_2['card_title'] ?>
             </h3>
         </div>
         <p class="specializing-card-description">
         <?php echo $third_section_card_2['card_description'] ?>
         </p>
          </div>
       </div>
   </div>
</section>
 <!-- FOURTH SECTION -->

 <section class="home-section-4">
        <div class="container">
          <h3 class="subtitle portfolio-text-center"><?php echo $fourth_section_subtitle ?></h3>
           <h2 class="secondary-title portfolio-text-center"><?php echo $fourth_section_title ?></h2>
             <div class="projects">
              <?php  foreach($projects_id as $item): ?>
             <div class="projects-card">
                <img src="<?php echo get_the_post_thumbnail_url($item); ?>" alt="IMG ALT">
             <div class="projects-card-content">
          <h3 class="projects-card-title">
               <?php echo get_the_title($item);  ?>
          </h3>
           <a href="<?php echo get_the_permalink($item); ?>" class="portfolio-button">
               View Demo
           </a>
         </div>
       </div> 
       <?php  endforeach; ?> 
     </div>
   </div>
  </section>
     <!-- FIFTH SECTION -->
      <section class="home-section-5">
        <div class="container">
          <div class="contact-us">
            <h2 class="contact-us-title secondary-title"><?php echo $fifth_section_title ?></h2>
            <?php  if($contact_button['url']):  ?>
            <a href="<?php echo $contact_button['url'] ?>" target="<?php echo $contact_button['target'] ?>" class="portfolio-button"><?php echo $contact_button['title'] ? $contact_button['title']: "Contact Me" ?></a>
            <?php endif; ?>
          </div>
        </div>
      </section>
   

</main>



<?php

get_footer();