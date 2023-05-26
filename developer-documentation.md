## Get discount details of a product in shop, category, loop and product pages by using product object or id

**1) To get discount price**

``` php

global $product; // or use wc_get_product() function to get product object

$sale_price = $product->get_price();

$sale_price = apply_filters('advanced_woo_discount_rules_get_product_discount_price', $sale_price, $product);

```

You can also pass product id instead of product object

**2) To get discount price based on product quantity**

``` php

global $product; // or use wc_get_product() function to get product object

$sale_price = $product->get_price();

$quantity = 2;

$sale_price = apply_filters('advanced_woo_discount_rules_get_product_discount_price', $sale_price, $product, $quantity);

```

You can also pass product id instead of product object

**3) To get discount price based on product quantity and custom price**

``` php

global $product; // or use wc_get_product() function to get product object

$sale_price = $product->get_price();

$quantity = 2;

$custom_price = 100;

$sale_price = apply_filters('advanced_woo_discount_rules_get_product_discount_price', $sale_price, $product, $quantity, $custom_price);

```

You can also pass product id instead of product object

**4) To get discount details**

``` php

$discount_details = apply_filters('advanced_woo_discount_rules_get_product_discount_details', false, $product);

if ($discount_details !== false) {

    print_r($discount_details); // here you can get discount details

}

```

You can also pass product id instead of product object, you can use the additional parameter quantity (optional) and custom price (optional) if required

**5) To get discount percentage**

``` php

$discount_percentage = apply_filters('advanced_woo_discount_rules_get_product_discount_percentage', 0, $product);

if ($discount_percentage > 0) {

    echo $discount_percentage; // here you can get discount percentage

}

```

You can also pass product id instead of product object

**6) To get save amount**

``` php

$save_amount = apply_filters('advanced_woo_discount_rules_get_product_save_amount', 0, $product);

if ($save_amount > 0) {

    echo $save_amount; // here you can get save amount

}

```

You can also pass product id instead of product object

## Get discount details of a product in cart and checkout pages by using cart item array or key

**1) To get discount price**

``` php

$discount_price = apply_filters('advanced_woo_discount_rules_get_cart_item_discount_price', false, $cart_item);

if ($discount_price !== false) {

    echo $discount_price; // here you can get discount price

}

```

You can also pass cart item key instead of cart item array

**2) To get discount details**

``` php

$discount_details = apply_filters('advanced_woo_discount_rules_get_cart_item_discount_details', false, $cart_item);

if ($discount_details !== false) {

    print_r($discount_details); // here you can get discount details

}

```

You can also pass cart item key instead of cart item array

**3) To get save amount**

``` php

$save_amount = apply_filters('advanced_woo_discount_rules_get_cart_item_saved_amount', 0, $cart_item);

if ($save_amount > 0) {

    echo $save_amount; // here you can get save amount

}

```

You can also pass cart item key instead of cart item array

## Get discount details of a product in order, email templates and order-received pages by using order item object or id

**1) To get discount price**

``` php

$discount_price = apply_filters('advanced_woo_discount_rules_get_order_item_discount_price', false, $order_item);

if ($discount_price !== false) {

    echo $discount_price; // here you can get discount price

}

```

You can also pass order item id instead of order item object

**2) To get discount details**

``` php

$discount_details = apply_filters('advanced_woo_discount_rules_get_order_item_discount_details', false, $order_item);

if ($discount_details !== false) {

    print_r($discount_details); // here you can get discount details

}

```

You can also pass order item id instead of order item object

**3) To get save amount**

``` php

$save_amount = apply_filters('advanced_woo_discount_rules_get_order_item_saved_amount', 0, $order_item);

if ($save_amount > 0) {

    echo $save_amount; // here you can get save amount

}

```

You can also pass order item id instead of order item object

## Get total discount details of an order in order, email templates and order-received pages by using order object or id

**1) To get discount details**

``` php

$discount_details = apply_filters('advanced_woo_discount_rules_get_order_discount_details', false, $order);

if ($discount_details !== false) {

    print_r($discount_details); // here you can get discount details

}

```

You can also pass order id instead of order object

**2) To get save amount**

``` php

$save_amount = apply_filters('advanced_woo_discount_rules_get_order_saved_amount', 0, $order);

if ($save_amount > 0) {

    echo $save_amount; // here you can get save amount

}

```

You can also pass order id instead of order object

