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
<section class="pisol-video-module">
    <div class="pisol-video">
        <a href="<?php echo $instance['pisol-link']; ?>" class="pisol-mp4">
            <?php echo wp_get_attachment_image($instance['pisol-image'],'full', false, array('class'=>'img-fluid')); ?>
        </a>
    </div>
    <div class="pisol-module-content">
        <h3><?php echo $instance['pisol-widget-title']; ?></h3>
        <p><?php echo $instance['pisol-widget-subtitle']; ?></p>
    </div>
</section>