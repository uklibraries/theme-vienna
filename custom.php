<?php

add_filter('front_page_blocks', 'front_page_blocks');

function front_page_blocks($blocks)
{
    $blocks['FeaturedItem'] = array('name'             => 'FeaturedItem',
                                    'heading'          => __('Featured Item'),
                                    'callback'         => 'front_random_featured_items',
                                    'options'          => 1
                                    );

    $blocks['FeaturedCollection'] = array('name'       => 'FeaturedCollection',
                                          'heading'    => __('Featured Collection'),
                                          'callback'   => 'random_featured_collection',
                                          );    
    
    $blocks['RecentItems'] = array('name'             => 'RecentItems',
                                   'heading'          => __('Recently Added Items'),
                                   'callback'         => 'recent_items',
                                   'options'          => (int)get_theme_option('Homepage Recent Items') ? get_theme_option('Homepage Recent Items') : '3',
                                   'wrap_attributes'  => array('id' => 'recent-items')
                                   );
    
    $blocks['HomePageText'] = array('name'     => "HomePageText",
                                    'heading'  => __('Home Page'),
                                    'callback' => 'home_page'
                                    );
    
    $blocks['SearchForm'] = array('name'            => "SearchForm",
                                  'heading'         => __("Search"),
                                  'callback'        => 'search_form',
                                  'options'         => array('show_advanced' => true),
                                  'wrap_attributes' => array('id' => 'search-container') //this differs across themes?
                                 );
    $blocks['Carousel'] = array('name'     => "Carousel",
                                'heading'  => __("Carousal"),
                                'callback' => 'front_carousel'
                                );
    
    $blocks['Orbit'] = array('name' => 'Orbit',
                             'heading' => __('Orbit Slider'),
                             'callback' => 'front_orbit'
                             );    
    
    return $blocks;
}

function front_orbit($block, $view)
{
    $items = get_random_featured_items(5, true);
    return $view->partial('items/orbit.php', array('items' => $items));
}

function front_random_featured_items($block, $view)
{
    return random_featured_items($block['options']);
}

function front_carousel($block, $view)
{
    $items = get_random_featured_items(5, true);
    return $view->partial('items/carousel.php', array('items' => $items));
}

function recent_items($block, $view)
{
    return $view->partial('items/recent-items.php', array('homepageRecentItems' => $block['options']));
}

function home_page($block)
{
    if ($homepageText = get_theme_option('Homepage Text')) {
        return "<p>$homepageText</p>";
    }
}
