<?php
add_action('genesis_before_header','msdlab_make_as_button');
function msdlab_make_as_button(){
    if(is_front_page()){
        remove_action('woocommerce_before_subcategory_title','woocommerce_subcategory_thumbnail');
        global $wp_filter;
        //ts_var( $wp_filter['genesis_before_loop'] );       
    }
}