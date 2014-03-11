
<ul class="example-orbit" data-orbit>
    <?php foreach($items as $item): ?>
        <li>
        <?php echo link_to_item(
                                item_image('fullsize', array(), 0, $item), 
                                array('class' => 'image'), 'show', $item
                                );
        ?>
      
        </li>
    <?php endforeach; ?>    
</ul>