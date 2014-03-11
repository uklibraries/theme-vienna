<?php 

queue_css_file('jcarousel.responsive');
queue_js_file('vendor/jquery.jcarousel.min');
queue_js_file('vendor/jcarousel.responsive');

queue_css_file('foundation.min');

queue_js_file('vendor/foundationorbit/js/foundation/foundation');
queue_js_file('vendor/foundationorbit/js/foundation/foundation.orbit');


echo head(array('bodyid'=>'home', 'bodyclass' =>'two-col')); 

?>
<div id="primary">
    <?php echo front_page_region('primary'); ?>
</div><!-- end primary -->

<div id="secondary">
    <?php echo front_page_region('secondary'); ?>
</div><!-- end secondary -->
<script> jQuery(document).foundation(); </script>
<?php echo foot(); ?>


