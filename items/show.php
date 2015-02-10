<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>
<?php if(metadata('item', array('Dublin Core', 'Format'))): ?>
        <div class="element-text"><img src="http://kdnp.uky.edu/spokedb/tab_<?php echo metadata ('item', array('Dublin Core', 'Format')); ?>.png"/><br/><br/></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Restriction'))): ?>
        <div class="element-text"><img src="http://kdnp.uky.edu/spokedb/tab_<?php echo metadata ('item', array('Item Type Metadata', 'Interview Restriction')); ?>.png"/><br/><br/></div>
<?php endif; ?>
<div id="primary">
    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>
<div class="element-text" style="strong"><p><a href="https://oralhistory.uky.edu/admin/search?query=<?php echo metadata('item', array ('Dublin Core', 'Identifier')); ?>&query_type=keyword%5B%5D=Item"><img src="http://kdnp.uky.edu/spokedb/edit_button.png"/></a></p></div>
    <h1><?php echo metadata('item', array('Dublin Core','Title')); ?></h1>
   
    <!-- Items metadata -->
    <div id="item-metadata">

<?php if(metadata('item', array('Dublin Core', 'Relation'))): ?>
        <div class="element-text"><a href="<?php echo metadata('item', array('Dublin Core', 'Relation')); ?>" target="_blank"><img src="/images/icon_play2.png"/></a><br/><br/></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Cache File'))): ?>
        <div class="element-text"><a href="https://oralhistory.uky.edu/oh/render.php?cachefile=<?php echo metadata('item', array('Item Type Metadata', 'Interview Cache File')); ?>" target="_blank"><img src="/images/icon_play2.png"/></a><br/><br/></div>
<?php endif; ?>

        <?php echo all_element_texts('item'); ?>
    </div>

    <!--<h3><?php echo __('Files'); ?></h3>-->
    <!--<div id="item-images">
         <?php echo files_for_item(); ?>
    </div>-->

   <?php if(metadata('item','Collection Name')): ?>
      <div id="collection" class="element">
        <h3><?php echo __('Collection'); ?></h3>
        <div class="element-text"><?php echo link_to_collection_for_item(); ?></div>
      </div>
   <?php endif; ?>

     <!-- The following prints a list of all tags associated with the item -->
    <?php if (metadata('item','has tags')): ?>
    <div id="item-tags" class="element">
        <h3><?php echo __('Tags'); ?></h3>
        <div class="element-text"><?php echo tag_string('item'); ?></div>
    </div>
    <?php endif;?>

    <!-- The following prints a citation for this item. -->
    <!--<div id="item-citation" class="element">
        <h3><?php echo __('Citation'); ?></h3>
        <div class="element-text"><?php echo metadata('item','citation',array('no_escape'=>true)); ?></div>
    </div>-->
       <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>


    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>

</div> <!-- End of Primary. -->

 <?php echo foot(); ?>
