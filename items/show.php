<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>
<table><tr><td>
<?php if(metadata('item', array('Dublin Core', 'Format'))): ?>
        <div class="element-text"><img src="http://kdnp.uky.edu/spokedb/tab_<?php echo metadata ('item', array('Dublin Core', 'Format')); ?>.png"/><br/><br/></div>
<?php endif; ?>
</td>
<td>
<?php if(metadata('item', array('Dublin Core', 'Rights'))): ?>
        <div class="element-text"><img src="http://kdnp.uky.edu/spokedb/<?php echo metadata ('item', array('Dublin Core', 'Rights')); ?>.png"/><br/><br/></div>
<?php endif; ?>
</td>
<td><?php echo metadata('item', array('Item Type Metadata','Interview Accession Number')); ?><?php echo metadata('item', array('Item Type Metadata','Collection Accession')); ?><?php echo metadata('item', array('Item Type Metadata','Series Accession')); ?><br/>

</td>
</tr>
</table>
<div id="primary">
    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>
        <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><a href="https://oralhistory.uky.edu/spokedb/admin/search?query=<?php echo metadata('item', array ('Dublin Core', 'Identifier')); ?>&query_type=keyword%5B%5D=Item"><img src="http://kdnp.uky.edu/spokedb/edit_button.png"/></a>&nbsp;&nbsp;&nbsp;

</li>
        <li id="next-item" class="next"><?php if(metadata('item', array('Dublin Core', 'Type'))): ?>
        <img src="http://kdnp.uky.edu/spokedb/<?php echo metadata ('item', array('Dublin Core', 'Type')); ?>.png"/>
<?php endif; ?></li>
    </ul>
    
<h1><?php echo metadata('item', array('Dublin Core','Title')); ?> <?php if(metadata('item', array('Item Type Metadata', 'Series Number of Interviews'))): ?>- <?php echo metadata('item', array('Item Type Metadata','Series Number of Interviews')); ?> interviews<?php endif; ?></h1>


<br/>

    <!-- Items metadata -->
    <div id="item-metadata">

<?php if(metadata('item', array('Dublin Core', 'Relation'))): ?>
        <div class="element-text"><a href="<?php echo metadata('item', array('Dublin Core', 'Relation')); ?>" target="_blank"><img src="/images/icon_play2.png"/></a><br/><br/></div>
<?php endif; ?>





        <?php echo all_element_texts('item'); ?>
        
<?php if(metadata('item', array('Item Type Metadata', 'Interview Summary'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Summary: </h4></td></tr></table><table style="width:100%;text-align:left;"><tr><td style="width:60px;text-align:left;"></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Summary')); ?></td></tr></table></div>
<?php endif; ?>          
        
<?php if ($insubjects = metadata('item', array('Item Type Metadata', 'Interview LC Subject'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>LC Subjects:</h4></td><td style="width:300px;text-align:left;">
<?php echo $insubjects; ?></td></tr></table>
</div>
<?php endif; ?>

<?php if ($inkeywords = metadata('item', array('Item Type Metadata', 'Interview Keywords'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width: 100%;"><tr><td style="width:100px;text-align:left;"><h4>Keywords:</h4></td><td style="width:300px;text-align:left;">
<?php echo $inkeywords; ?></td></tr></table>
</div>
<?php endif; ?>



<?php if ($serieskeywords = metadata('item', array('Item Type Metadata', 'Series Keyword'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<h3>Series Keywords:</h3>
<?php echo $serieskeywords; ?>
<br/><br/></div>
<?php endif; ?>

<?php if ($seriessubjects = metadata('item', array('Item Type Metadata', 'Series LC Subject'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<h3>Series LC Subjects:</h3>
<?php echo $seriessubjects; ?>
<br/><br/></div>
<?php endif; ?>

<?php if ($seriesthemes = metadata('item', array('Item Type Metadata', 'Series Theme'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<h3>Series Themes:</h3>
<?php echo $seriesthemes; ?>
<br/><br/></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Collection'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Collection')); ?></td></tr></table></div>
<?php endif; ?>   
<?php if(metadata('item', array('Item Type Metadata', 'Interview Series'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Series')); ?></td></tr></table></div>
<?php endif; ?>  
<?php if(metadata('item', array('Item Type Metadata', 'Collection Title'))): ?>
        <div class="element-text">Collection: <?php echo metadata('item', array('Item Type Metadata', 'Collection Title')); ?></div>
<?php endif; ?> 
<?php if(metadata('item', array('Item Type Metadata', 'Collection Series'))): ?>
        <div class="element-text">Series: <a href="/spokedb/items/browse?search=&advanced%5B0%5D%5Belement_id%5D=50&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=<?php echo metadata('item', array('Item Type Metadata', 'Collection Series')); ?>"><?php echo metadata('item', array('Item Type Metadata', 'Collection Series')); ?></a></div>
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
