<?php

add_filter('front_page_blocks', 'front_page_blocks');

function front_page_blocks($blocks)
{
    $blocks['FeaturedItem'] = array('name'             => 'FeaturedItem',
                                    'heading'          => __('Featured Item'),
                                    'callback'         => 'random_featured_items',
                                    'options'          => 1
                                    );

    $blocks['FeaturedCollection'] = array('name'             => 'FeaturedCollection',
                                          'heading'          => __('Featured Collection'),
                                          'callback'         => 'random_featured_collection',
                                          );    
    
    $blocks['RecentItems'] = array('name'             => 'RecentItems',
                                   'heading'          => __('Recently Added Items'),
                                   'callback'         => 'recent_items',
                                   'options'          => (int)get_theme_option('Homepage Recent Items') ? get_theme_option('Homepage Recent Items') : '3'
                                   );
    
    $blocks['HomePageText'] = array('name'     => "HomePageText",
                                    'heading'  => __('Home Page'),
                                    'callback' => 'home_page'
                                    );
    
    $blocks['SearchForm'] = array('name'            => "SearchForm",
                                  'heading'         => __("Search"),
                                  'callback'        => 'search_form',
                                  'options'         => array('show_advanced' => true),
                                  'wrap_attributes' => array('id' => 'search-wrap', 'style' => 'display:block;')
                                 );
    return $blocks;
}

function recent_items($block)
{
    $view = get_view();
    return $view->partial('items/recent-items.php', array('homepageRecentItems' => $block['options']));
}

function home_page($block)
{
    if ($homepageText = get_theme_option('Homepage Text')) {
        return "<p>$homepageText</p>";
    }
}
