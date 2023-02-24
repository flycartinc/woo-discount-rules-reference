<?php
// For change price on run time
add_action('woocommerce_before_calculate_totals', function ($cart_object){
    if (isset($cart_object->cart_contents) && !empty($cart_object->cart_contents)) {
        foreach ($cart_object->cart_contents as $key => $cart_item) {
            $price = $cart_item['data']->get_price();
            $cart_item['data']->set_price($price+10);
        }
    }
}, 10);

// Change price while get price
add_filter('woocommerce_product_get_price', function ($price, $product){
    $price+10;
    return $price;
}, 10, 2);

// Change discount price
add_filter('advanced_woo_discount_rules_discount_prices_of_product', function ($discount_prices, $product, $quantity, $cart_item){
    //FOR CHANGING DISCOUNTED_PRICE you can change it in $discount_prices['discounted_price']
    if(isset($discount_prices['discounted_price'])){
        $discount_prices['discounted_price'] = $discount_prices['discounted_price']-2;
    }
    if(isset($discount_prices['discount_lines'])){
        foreach ($discount_prices['discount_lines'] as $key => $value){
            if($key !== 'non_applied'){
                $line_discount = $discount_prices['discount_lines'][$key]['discounted_price'];
                $discount_prices['discount_lines'][$key]['discounted_price'] = $line_discount-2;
            }
        }
    }
    return $discount_prices;
}, 10, 4);

// Change dicount price not strikeout
add_filter('advanced_woo_discount_rules_discount_prices_of_product', function ($discount_prices, $product, $quantity, $cart_item){
    //FOR CHANGING DISCOUNTED_PRICE you can change it in $discount_prices['discounted_price']
    if(isset($discount_prices['discounted_price'])){
        $discount_prices['discounted_price'] = $discount_prices['discounted_price']-2;
    }
    return $discount_prices;
}, 10, 4);

// Don't apply discount
add_filter('advanced_woo_discount_rules_run_discount_rules', function ($val){
    return false;
}, 10);
