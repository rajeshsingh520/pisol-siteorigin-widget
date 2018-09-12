<?php
/**
 * @var array $args
 * @var array $instance
 * @var array $tabs
 * @var array $initial_tab_index
 */
?>
<?php 
    $widget_id = $args['widget_id']; 
?>
<div style="text-align:center;">
        <?php if(isset($instance['pisol-widget-title'])) : ?>
            <h3><?php echo $instance['pisol-widget-title']; ?></h3>
        <?php endif; ?>
        <?php if(isset($instance['pisol-widget-subtitle'])) : ?>
            <p><?php echo $instance['pisol-widget-subtitle']; ?></p>
        <?php endif; ?>
</div>
<div class="pisol-logo-carosel" id="pisol-logo-carosel-<?php echo $widget_id; ?>">
    <?php foreach ( $instance['pisol-logo']  as $i => $logo ) : ?>
    <div class="pisol-logo-container">
        <a href="<?php echo sow_esc_url($logo['link']); ?>">
        <?php echo wp_get_attachment_image($logo['image'],'full', false, array('class'=>'img-fluid')); ?>
        </a>
    </div>
    <?php endforeach; ?>
</div>
<script>
jQuery(document).ready(function($){
    $('#pisol-logo-carosel-<?php echo $widget_id; ?>').slick({
        infinite: <?php echo $instance['infinite']; ?>,
        slidesToShow: <?php echo $instance['to-show']; ?>,
        slidesToScroll: <?php echo $instance['to-scroll']; ?>,
        arrow:<?php echo $instance['arrow']; ?>,
        dots: <?php echo $instance['dot']; ?>,
        autoplay: <?php echo $instance['auto']; ?>,
        responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: <?php echo $instance['arrow-768']; ?>,
                slidesToShow: <?php echo $instance['to-show-768']; ?>,
                slidesToScroll: <?php echo $instance['to-scroll-768']; ?>,
              }
            },
            {
                breakpoint: 540,
                settings: {
                  arrows: <?php echo $instance['arrow-768']; ?>,
                  slidesToShow: 1,
                  slidesToScroll:1,
                }
            }
        ]
      });
});
</script>
