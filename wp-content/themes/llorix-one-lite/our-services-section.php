<!-- =========================
 SECTION: SERVICES
============================== -->
<?php

$llorix_one_lite_our_services_show     = get_theme_mod( 'llorix_one_lite_our_services_show' );
$llorix_one_lite_our_services_title    = get_theme_mod( 'llorix_one_lite_our_services_title', esc_html__( 'Our Services', 'llorix-one-companion' ) );
$llorix_one_lite_our_services_subtitle = get_theme_mod( 'llorix_one_lite_our_services_subtitle', esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'llorix-one-companion' ) );
$default = '';
if( function_exists('llorix_one_companion_sevices_get_default_content')){
    $default = llorix_one_companion_sevices_get_default_content();
}
$llorix_one_lite_services              = get_theme_mod( 'llorix_one_lite_services_content', $default );
if ( function_exists( 'llorix_one_lite_general_repeater_is_empty' ) ){
    $content_is_empty = llorix_one_lite_general_repeater_is_empty( $llorix_one_lite_services );
} else {
    $content_is_empty = empty( $llorix_one_lite_services );
}
$section_is_empty                      = ! isset( $llorix_one_lite_our_services_show ) || $llorix_one_lite_our_services_show == 1 || ( empty( $llorix_one_lite_our_services_title ) && empty( $llorix_one_lite_our_services_subtitle ) && $content_is_empty );
if(!$section_is_empty) { ?>

    <section class="services <?php if ($section_is_empty) {
        echo 'llorix_one_lite_only_customizer';
    } ?>" id="services" role="region" aria-label="<?php esc_html_e('Services', 'llorix-one-companion') ?>">
        <div class="section-overlay-layer">
            <div class="container">

                <!-- SECTION HEADER -->
                <!-- Vidéo YT
                <br>
                <div class="row">
                    <div class="col-md-12" style="height:70vh;">
                        <iframe style="width:100%;height:100%;" src="https://youtu.be/TX21EEVJ6N8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>-->
                <div class="section-header">
                    <h2 class="dark-text" style="margin-bottom:2.5vh;margin-top:2vh !important;">La brosse à dents écologique</h2>
                    <div class="colored-line"></div>
                    <div class="row">
                        <div class="col-md-5" >
                            <img style="width:100%" src="https://eco-quotidien.com/wp-content/uploads/2018/11/BADPubVerre.jpg" alt="Brosse à dent en bambou">
                        </div>
                        <div class="col-md-6 col-md-offset-1" >
                            <h3 class="dark-text">La brosse à dents qui réconcilie votre portefeuille et la planète</h3>
                            
                            <p class='description-produit '> <b class="prix"><strike>19€99</strike> 15,99</b>, le lot de 4</p>
                            <h1 class='titlePromotion'>Fin de la promotion dans :</h1>
                            <div id="clockdiv">
                              <div>
                                <span class="days">00</span>
                                <div class="smalltext">Jours</div>
                              </div>
                              <div>
                                <span class="hours"></span>
                                <div class="smalltext">Heures</div>
                              </div>
                              <div>
                                <span class="minutes"></span>
                                <div class="smalltext">Minutes</div>
                              </div>
                              <div>
                                <span class="seconds"></span>
                                <div class="smalltext">Secondes</div>
                              </div>
                            </div>

                           <br>
                           <p class='description-produit'><b>Soit <strike>4€99</strike> 3€99 la brosse à dents</b>, combien avez-vous payez la vôtre qui polluera notre planète les 400 prochaines années ?</p>
                            <p class='description-produit'> Les experts préconisent de changer de brosse à dents tous les 3 à 4 mois, <b>avec notre pack vous êtes paré pour plus d'un an !</b></p>
                            <p class='description-produit'> <b>Livraison gratuite</b> chez vous en 14 à 17 jours.</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 " >
                            <h3 class="dark-text" >Description </h3>
                            
                            <p class='description-produit'> Avec un <b>manche en bambou et des poils en nylon </b>elle ne changera pas vos habitudes en matière de lavage de dents,
                                simplement votre impact sur l'environnement.</p>
                            <p class='description-produit'> Les brosses à dents sont livrées dans un <b>paquet minimaliste avec un emballage en carton recyclé</b>, il comprend :   </p>
                            <ul class="description-produit" style='list-style: none ;text-align: left;'>
                                <li><b>&sdot;  1 brosse à poils noirs</b></li>
                                <li><b>&sdot;  1 brosse à poils marron</b></li>
                                <li><b>&sdot;  2 brosses à poils beiges</b> dont une taille enfant (mais tout à fait utilisables par un adulte)</li>
                            </ul>
                            <p class='description-produit'><b>Devenez une inspiration pour les autres</b>, motivez vos proches à utiliser ces <b>brosses à dents organiques et naturelles</b> 
                                et sensibilisez les enfants à l'environnement dès l'enfance.</p>
                        </div>
                        <div class="col-md-5 col-md-offset-1" >
                            <img style="width:100%;" src="https://eco-quotidien.com/wp-content/uploads/2018/11/EmballageBDSombre.png" alt="Brosse à dents en bambou">
                        </div>
                    </div>
                    <br>
                    <button  class="btn btn-primary standard-button inpage-scroll" onclick="parent.location='https://eco-quotidien.com/panier/?add-to-cart=79'"> <span class="screen-reader-text">Libellé du bouton d'en-têteJ'en veux</span>J'en veux</button>
                </div>
                <div class="section-header">
                    <?php
                    if (!empty($llorix_one_lite_our_services_title)) { ?>
                        <h2 class="dark-text"><?php echo wp_kses_post($llorix_one_lite_our_services_title); ?></h2>
                        <div class="colored-line"></div>
                        <?php
                    } elseif (is_customize_preview()) { ?>
                        <h2 class="dark-text llorix_one_lite_only_customizer"></h2>
                        <div class="colored-line llorix_one_lite_only_customizer"></div>
                        <?php
                    }

                    if (!empty($llorix_one_lite_our_services_subtitle)) { ?>
                        <div class="sub-heading"><?php echo wp_kses_post($llorix_one_lite_our_services_subtitle); ?></div>
                        <?php
                    } elseif (is_customize_preview()) { ?>
                        <div class="sub-heading llorix_one_lite_only_customizer"></div>
                        <?php
                    } ?>
                </div>


                
                <?php
                if (!$content_is_empty) {
                    $llorix_one_lite_services_decoded = json_decode($llorix_one_lite_services); ?>
                    <div id="our_services_wrap" class="services-wrap">
                        <?php
                        foreach ($llorix_one_lite_services_decoded as $llorix_one_lite_service_box) {

                            $choice = !empty($llorix_one_lite_service_box->choice) ? $llorix_one_lite_service_box->choice : '';
                            $icon = !empty($llorix_one_lite_service_box->icon_value) ? apply_filters('llorix_one_lite_translate_single_string', $llorix_one_lite_service_box->icon_value, 'Services section') : '';
                            $image = !empty($llorix_one_lite_service_box->image_url) ? apply_filters('llorix_one_lite_translate_single_string', $llorix_one_lite_service_box->image_url, 'Services section') : '';
                            $title = !empty($llorix_one_lite_service_box->title) ? apply_filters('llorix_one_lite_translate_single_string', $llorix_one_lite_service_box->title, 'Services section') : '';
                            $text = !empty($llorix_one_lite_service_box->text) ? apply_filters('llorix_one_lite_translate_single_string', $llorix_one_lite_service_box->text, 'Services section') : '';
                            $link = !empty($llorix_one_lite_service_box->link) ? apply_filters('llorix_one_lite_translate_single_string', $llorix_one_lite_service_box->link, 'Services section') : '';
                            $section_is_empty = (empty($icon) || $icon === 'No Icon' && $choice === 'llorix_one_lite_icon') && (empty($image) && $choice === 'llorix_one_lite_image') && empty($title) && empty($text);

                            if (!$section_is_empty) { ?>
                                <div class="service-box">
                                    <div class="single-service border-bottom-hover">
                                        <?php
                                        if (!empty($choice) && $choice !== 'llorix_one_lite_none') {

                                            if ($choice === 'llorix_one_lite_icon') {
                                                if (!empty($icon)) {
                                                    if (!empty($link)) { ?>
                                                        <div class="service-icon colored-text">
                                                            <a href="<?php echo esc_url($link); ?>">
                                                                <i class="fa <?php echo esc_attr($icon); ?>"></i>
                                                            </a>
                                                        </div>
                                                        <?php
                                                    } else { ?>
                                                        <div class="service-icon colored-text">
                                                            <i class="fa <?php echo esc_attr($icon); ?>"></i>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                            }

                                            if ($choice === 'llorix_one_lite_image') {
                                                if (!empty($image)) {
                                                    if (!empty($link)) { ?>
                                                        <a href="<?php echo esc_url($link); ?>">
                                                            <img src="<?php echo esc_url($image); ?>" <?php echo(!empty($title) ? 'alt="' . esc_attr($title) . '"' : ''); ?> />
                                                        </a>
                                                        <?php
                                                    } else { ?>
                                                        <img src="<?php echo esc_url($image); ?>" <?php echo(!empty($title) ? 'alt="' . esc_attr($title) . '"' : ''); ?> />
                                                        <?php
                                                    }
                                                }
                                            }
                                        }

                                        if (!empty($title)) {
                                            if (!empty($link)) { ?>
                                                <h3 class="colored-text">
                                                    <a href="<?php echo esc_url($link); ?>"><?php echo wp_kses_post($title); ?></a>
                                                </h3>
                                                <?php
                                            } else { ?>
                                                <h3 class="colored-text"><?php echo wp_kses_post($title); ?></h3>
                                                <?php
                                            }
                                        }

                                        if (!empty($text)) { ?>
                                            <p><?php echo wp_kses_post($text); ?></p>
                                            <?php
                                        } ?>
                                    </div>
                                </div>
                                <?php
                            }
                        } ?>
                    </div>
                    <?php
                } ?>
            </div>
        </div>
    </section>
<script> 
    function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  //var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    //daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}
//Modification de la durée restante (secondes avant date voulue * 1000)
var deadline = new Date(Date.parse(new Date()) +  47192 * 1000);
console.log(new Date());
initializeClock('clockdiv', deadline);
</script>
    <?php
}