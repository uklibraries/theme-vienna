<?php        
    set_loop_records('items', get_recent_items($homepageRecentItems));
    if (has_loop_records('items')): 
    ?>
    <ul class="items-list">
    <?php foreach (loop('items') as $item): ?>
    <li class="item">
        <h3><?php echo link_to_item(); ?></h3>
        <?php if($itemDescription = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>150))): ?>
            <p class="item-description"><?php echo $itemDescription; ?></p>
        <?php endif; ?>						
    </li>
    <?php endforeach; ?>
    </ul>
    <?php else: ?>
    <p><?php echo __('No recent items available.'); ?></p>
    <?php endif; ?>
    <p class="view-items-link"><?php echo link_to_items_browse(__('View All Items')); ?></p>
