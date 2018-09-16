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
<div id="wow-slider-<?php echo $args['widget_id']; ?>" class="py-3 wow-slider carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <?php $count = 0; ?>
    <?php foreach ( $instance['pisol-slide']  as $i => $slide ) : ?>
    <div class="carousel-item <?php echo (($count==0)? 'active' : ''); ?>" style="color:<?php echo $slide['color']; ?>;">
        <div class="row align-items-center">
            <div class="col-12 col-sm-7 col-md-7">
                <?php if($slide['line1']): ?>
                <?php 
                    $array = str_split($slide['line1']);
                    foreach ($array as $char) {
                ?>
                    <div class="pisol-cell">
                <h1 class="display-3 animated slideInLeft slower"><?php echo $char; ?></h1>
                    </div>
                <?php } ?>
                <?php endif; ?>
                <?php if($slide['line2']): ?>
                <br>
                <?php 
                    $array = str_split($slide['line1']);
                    foreach ($array as $char) {
                ?>
                    <div class="pisol-cell">
                <h1 class="display-4 animated slideInRight slower"><?php echo $char; ?></h1>
                    </div>
                <?php } ?>
                <?php endif; ?>
                <?php if($slide['desc']): ?>
                <p class="animated slideInUp slower"><?php echo $slide['desc']; ?></p>
                <?php endif; ?>
                <?php if($slide['line1']): ?>
                <a class="wow-read" href="<?php echo sow_esc_url($slide['link']); ?>">&rightarrow;</a>
                <?php endif; ?>
            </div>
            <div class="col-12 col-sm-5 col-md-5">
                <div class="wow-background" style="background-color:<?php echo $slide['color']; ?>;">
                    <?php echo wp_get_attachment_image($slide['image'],'full', false, array('class'=>'img-fluid animated fadeInLeft slower')); ?>
                </div>
            </div>
        </div>
    </div>
    <?php $count++; ?>
  <?php endforeach; ?>
  </div>
  <ol class="carousel-indicators">
  <?php $count = 0; ?>
    <?php foreach ( $instance['pisol-slide']  as $i => $slide ) : ?>
        <li data-target="#wow-slider-<?php echo $args['widget_id']; ?>" data-slide-to="<?php echo $count; ?>" class=" <?php echo (($count==0)? 'active' : ''); ?>"  style="color:<?php echo $slide['color']; ?>;">
            <?php echo $slide['name']; ?>            
        </li>
        <?php $count++; ?>
    <?php endforeach; ?>
  </ol>
</div>
