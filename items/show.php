<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>
<table><tr><td>
<?php if(metadata('item', array('Dublin Core', 'Format'))): ?>
        <div class="element-text"><img src="http://kdnp.uky.edu/spokedb/tab_<?php echo metadata ('item', array('Dublin Core', 'Format')); ?>.png"/><br/><br/></div>
<?php endif; ?>
</td>
<td>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Restriction'))): ?>
        <div class="element-text"><img src="http://kdnp.uky.edu/spokedb/<?php echo metadata ('item', array('Item Type Metadata', 'Interview Restriction')); ?>.png"/><br/><br/></div>
<?php endif; ?>
</td>
<td><?php echo metadata('item', array('Item Type Metadata','Interview Accession Number')); ?></td>
</tr>
</table>
<div id="primary">
    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>
<div class="element-text" style="strong"><p><img src="http://kdnp.uky.edu/spokedb/options.png"/>&nbsp;<a href="https://oralhistory.uky.edu/admin/search?query=<?php echo metadata('item', array ('Dublin Core', 'Identifier')); ?>&query_type=keyword%5B%5D=Item"><img src="http://kdnp.uky.edu/spokedb/edit_button.png"/></a>&nbsp;
<?php if(metadata('item', array('Item Type Metadata', 'Interview Cache File'))): ?>
        <a href="https://oralhistory.uky.edu/oh/render.php?cachefile=<?php echo metadata('item', array('Item Type Metadata', 'Interview Cache File')); ?>" target="_blank"><img src="http://kdnp.uky.edu/spokedb/play_button.png"/></a>&nbsp;
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Online Identifier'))): ?>
        <a href="http://exploreuk.uky.edu/catalog/<?php echo metadata('item', array('Item Type Metadata', 'Online Identifier')); ?>" target="_blank"><img src="http://kdnp.uky.edu/spokedb/online_button.png"/></a>&nbsp;
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Archival Identifier'))): ?>
        &nbsp;&nbsp;&nbsp;&nbsp;<img src="http://kdnp.uky.edu/spokedb/edit_archive.png"/> <?php echo metadata ('item', array('Item Type Metadata', 'Archival Repository')); ?>: <?php echo metadata ('item', array('Item Type Metadata', 'Archival Identifier')); ?>
<?php endif; ?>
</p></div>
    <h1><?php echo metadata('item', array('Dublin Core','Title')); ?></h1>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Collection'))): ?>
        <div class="element-text">Collection: <?php echo metadata('item', array('Item Type Metadata', 'Interview Collection')); ?></div>
<?php endif; ?>   
<?php if(metadata('item', array('Item Type Metadata', 'Interview Series'))): ?>
        <div class="element-text">Series: <?php echo metadata('item', array('Item Type Metadata', 'Interview Series')); ?></div>
<?php endif; ?>  
<br/><br/>
    <!-- Items metadata -->
    <div id="item-metadata">

<?php if(metadata('item', array('Dublin Core', 'Relation'))): ?>
        <div class="element-text"><a href="<?php echo metadata('item', array('Dublin Core', 'Relation')); ?>" target="_blank"><img src="/images/icon_play2.png"/></a><br/><br/></div>
<?php endif; ?>





        <?php echo all_element_texts('item'); ?>
        
<?php if ($insubjects = metadata('item', array('Item Type Metadata', 'Interview LC Subjects'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<h3>Interview LC Subjects:</h3>
<?php echo $insubjects; ?>
<br/><br/></div>
<?php endif; ?>

<?php if ($inkeywords = metadata('item', array('Item Type Metadata', 'Interview Keywords'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<h3>Interview Keywords:</h3>
<?php echo $inkeywords; ?>
<br/><br/></div>
<?php endif; ?>

<?php if ($colkeywords = metadata('item', array('Item Type Metadata', 'Collection Keywords'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<h3>Collection Keywords:</h3>
<?php echo $colkeywords; ?>
<br/><br/></div>
<?php endif; ?>

<?php if ($colsubjects = metadata('item', array('Item Type Metadata', 'Collection LC Subjects'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<h3>Collection LC Subjects:</h3>
<?php echo $colsubjects; ?>
<br/><br/></div>
<?php endif; ?>

<?php if ($colthemes = metadata('item', array('Item Type Metadata', 'Collection Themes'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<h3>Collection Themes:</h3>
<?php echo $colthemes; ?>
<br/><br/></div>
<?php endif; ?>

<?php if ($serieskeywords = metadata('item', array('Item Type Metadata', 'Series Keywords'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<h3>Series Keywords:</h3>
<?php echo $serieskeywords; ?>
<br/><br/></div>
<?php endif; ?>

<?php if ($seriessubjects = metadata('item', array('Item Type Metadata', 'Series LC Subjects'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<h3>Series LC Subjects:</h3>
<?php echo $seriessubjects; ?>
<br/><br/></div>
<?php endif; ?>

<?php if ($seriesthemes = metadata('item', array('Item Type Metadata', 'Series Themes'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<h3>Series Themes:</h3>
<?php echo $seriesthemes; ?>
<br/><br/></div>
<?php endif; ?>

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
