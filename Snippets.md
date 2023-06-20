# Woo Discount Rules v2
## General
### Get discount info
* Get discounted price or details of the product  
  General Snippet: https://gist.github.com/AshlinRejo/c37a155a42c0e30beafbbad183f0c4e8  
* Get discounted price of the product (in product/shop/category page)  
  Example: https://gist.github.com/AnanthFlycart/1676bcba8801fe3c97c371c864648947  
* Get discount percentage of the product (in product/shop/category page)  
  Example: https://gist.github.com/AnanthFlycart/6becf99a52ee41f4fa65c362df7d301b
* Get discount info of cart item product (in cart/checkout page)  
  Example: https://gist.github.com/AshlinRejo/6d17dfecbddbedd2387546fea39f1996  
* Get discounted price of the product (in order-received/order page)  
  Example: https://gist.github.com/AnanthFlycart/1ace6247c0041fc0366ffaaa2f8eaa54   
* Get matched rule info based on product in product page  
  Example1: https://gist.github.com/AshlinRejo/d7ea18d55e2c9d06697adb53cb4462a6  
  Example2: https://gist.github.com/AshlinRejo/5464ab06d35ec57a70b52cc1f246f87a  
* Check if the product has discount (in product/shop/category page)  
  Example: https://gist.github.com/AnanthFlycart/842e102e5cc19205232ec08ae0d30ce4  
* To load discount rule title while get discount info of a product   
  Snippet: https://gist.github.com/AshlinRejo/62396a0ace38ac4f689baa468cb0c5a1  

### Round discount
* Round discounts (recommended, to site price decimals)  
  Snippet: https://gist.github.com/AnanthFlycart/74ae7fc1f78150452f3955e3737712fc  
* Round discounts (round half up, to site price decimals)  
  Snippet: https://gist.github.com/AnanthFlycart/7e110b0030c114d5f7ac7e3bfc78a1b6  
* Round discounts (may round half down, to zero decimals)  
  Snippet: https://gist.github.com/AshlinRejo/88bcbb3db5ac74fadf5a2636360b8026  
* Round sale badge discount percentage (to zero decimals)  
  Snippet: https://gist.github.com/AnanthFlycart/8df983b1b1611ed0c67549a6b7e75b10  

## Compatibility
### Strikeout
#### WooCommerce Tax [by James Hunt]
* Display strikeout price with tax text  
  Snippet: https://gist.github.com/AnanthFlycart/19f0ab421170760cb569b9edbdb02550
#### WooCommerce Unit Of Measure [by Bradley Davis]
* Unit (in suffix) is not shown  
  Snippet: https://gist.github.com/AnanthFlycart/efd462a19ac1c862df9d16bc314ac303  

### Sale badge
#### Woodmart [Theme]
* Fix -100% is shown on sale badge when our discount apply  
  Snippet (for v6.3 or higher): https://gist.github.com/AnanthFlycart/8bf331e0b1c77820a129439987c148bb   
  Snippet (for v6.2 or lower): https://gist.github.com/AnanthFlycart/7bedb36ede0c03a7012dfffeaf278491  
  Note: Disable force override for sale badge in order to work (with theme styling)  
#### Shoptimizer [Theme]
* Fix -100% is shown on sale badge when our discount apply  
  Snippet: https://gist.github.com/AnanthFlycart/a6214e2191abbaf85ff4af47aa2c355a  
  Note: May need to update the snippet (because, some version has different hook priority)  
#### Martfury [Theme]
* Fix -100% is shown on sale badge when our discount apply  
  Snippet: https://gist.github.com/AnanthFlycart/f9ca355eb996685262450d07be7c0f6d  
#### Satine [Theme]
* Fix -100% is shown on sale badge when our discount apply  
  Snippet: https://gist.github.com/AnanthFlycart/2f71197dbfc4cb7eb7fd2bc06e94c0ff  
#### TopDeal [Theme]  
* Fix sale badge not shown issue (both customizations are work)  
  Snippet: https://gist.github.com/AnanthFlycart/7ef25fd5c99af5fb2723913b0bdd230b  
* Override sale badge (our sale badge customization only work)  
  Snippet: https://gist.github.com/AnanthFlycart/6eb895ffc9a2cf393f019b22c206f559  
#### WooCommerce Wholesale Prices [by Rymera Web Co]
* Sale badge percentage based on wholesale price  
  Snippet: https://gist.github.com/AnanthFlycart/4b57448ecee33137be3dc178b2967c99
#### Facebook for woocommerce (withtax)
* Fix Show the discounted price without tax issue
* Snippet: https://gist.github.com/sarancartrabbit/b888414d7c198799b8037a58ae7763d3
### Product Options / Addons
#### WooCommerce TM Extra Product Options [by ThemeComplete]
* Exclude option products from apply discounts (not takes its quantities)  
  Snippet: https://gist.github.com/AnanthFlycart/6ddd9a592d7bf64ed9abfe0250d37685 
  #### WooCommerce Extra Product Options Pro [by ThemeHigh]
* Display product price in product page when exclude add-on price from apply discount  
  Snippet: https://gist.github.com/kirubaFlycart/c320052d859bf9f950ff5d6b022de172
* Exclude add-on price from apply discount
  Snippet: https://gist.github.com/kirubaFlycart/e1876d6d59d2aa45c355ff9b86e3a77d
#### Extra Product Options Builder for WooCommerce [by RedNao]
* Apply discount only the product (base) price  
  Snippet: https://gist.github.com/AnanthFlycart/77849ec083ea7e4c83347933a8a6fa4f
#### Advanced Product Fields Pro for WooCommerce [by StudioWombat]
* Fix cart price and strikeout not shown correctly  
  Snippet: https://gist.github.com/AnanthFlycart/2235a65c86d6d272f5caf7ab3b29ebf8  
* Apply discount for both base and options price  
  Snippet: https://gist.github.com/AshlinRejo/4527eacafa61f9f37d3b34c1b9aa5af2  
#### Product Addons & Fields for WooCommerce (PPOM) [by Themeisle]
* Apply discount for only base price of product in cart  
  Snippet: https://gist.github.com/AnanthFlycart/e58cb377976ab289626302d7591f461e
#### Custom Product Addons [by Acowebs]
* Apply discount only for base price not for addons in cart  
  Snippet: https://gist.github.com/AshlinRejo/6255f85994082ad1992509f78d725ca5  
#### WooCommerce Food [by Ex-Themes]
* Apply discount only for base price not for addons in cart  
  Snippet: https://gist.github.com/AshlinRejo/a9e19fc1eff3998519de52c92b6a1035  

### Product Bundles
#### WooCommerce Product Bundles [by WooCommerce]
* Exclude child items from apply discounts (not takes its quantities)  
  Snippet: https://gist.github.com/AnanthFlycart/4cfedcf64c8a518c405ff66321f89266  
* Exclude child items from apply discounts (takes its quantities)  
  Snippet: https://gist.github.com/AnanthFlycart/82a16df898d2b9174d6f04441fd53879  
* Takes child items quantities instead of parent quantity  
  Snippet: https://gist.github.com/AnanthFlycart/5dac23a75793780b24bfa35a661e3ca6
* Include individually priced amount for apply discount  
  Snippet: https://gist.github.com/AnanthFlycart/5e420c1a43eff87132a30092b67e8977  
* To auto add (free) bundle product (to set child items price as 0)  
  Snippet: https://gist.github.com/AshlinRejo/14b676df35af41f4a6451297d79e825b  
#### WooCommerce Product Bundles [by SomewhereWarm]
* Exclude child items from apply discounts (not takes its quantities)  
  Snippet: https://gist.github.com/AnanthFlycart/4cfedcf64c8a518c405ff66321f89266
#### WPC Product Bundles for WooCommerce [by WPClever]
* Exclude child items from apply discounts (takes its quantities)  
  Snippet: https://gist.github.com/AnanthFlycart/19a10dc4556fa8771d3b6730f385fa96  
* Takes child items quantities instead of parent quantity:  
  Snippet: https://gist.github.com/AnanthFlycart/bf1a8ee77d85fe80082cda9461b21f43  
#### YITH WooCommerce Product Bundles Premium [by YITH]
* Exclude child items from apply discounts (not takes its quantities)  
  Snippet: https://gist.github.com/AnanthFlycart/6a983aca7ea66f293c7bbe0d51b8ac50  
* Apply discount and exclude child items from apply discounts (not takes its quantities)  
  Snippet: https://gist.github.com/AnanthFlycart/ff37b57e219c04d44549bcbb2808eaa9  

### Subscription
#### WooCommerce All Products For Subscription [by WooCommerce]
* Disable cart item price strikeout of subscription option  
  Snippet: https://gist.github.com/AnanthFlycart/f79cd182e0cab24d0d55ea2b72ae04d8  
* For BXGY coupon based rule  
  Snippet: https://gist.github.com/AshlinRejo/062f8009482f2d3c5dda476e1657f166  

### Page Builder
#### JetWooBuilder For Elementor [by Crocoblock]
* Show discount percentage  
  Snippet: https://gist.github.com/AnanthFlycart/a5b128de61af5ebcbf8f2af95c46fcb7
#### WPGridBuilder [by GridBuilderWP]
* To add Product Price block (custom)  
  Snippet: https://gist.github.com/AnanthFlycart/8052f1e2bbb578311920d5a70635360f  

### Others
#### Free Gifts for WooCommerce [by FantasticPlugins]
* Exclude gift items from apply discounts (not takes its quantities)  
  Snippet: https://gist.github.com/AnanthFlycart/137b2b7d44a9de9322f75763d4880d69
#### WPC Force Sells for WooCommerce [by WPClever]
* Exclude force sell items from apply discounts (not takes its quantities)  
  Snippet: https://gist.github.com/AnanthFlycart/bcd70f955a9ead2740ab90971a36391a
#### WooCommerce Deposits [by WooCommerce]
* Discount to full amount in cart  
  Snippet: https://gist.github.com/AnanthFlycart/761b34c7c2dd0e033895f494014dc466
#### WooCommerce Wholesale Prices [by Rymera Web Co]
* Fix variable product price display issue (Extended Compatibility)  
  Snippet: https://gist.github.com/AnanthFlycart/0e5148664ee92b45a54c3cc72e1a661c  
* Improved compatibility  
  Snippet: https://gist.github.com/AnanthFlycart/8648d9a2eb984b1e2c04a9f57fc152a6  
  Note: Disable inbuilt compatibility of WooCommerce Wholesale Prices in order to work  
#### Woocommerce Side Cart Premium [by XootiX]
* Fix strikeout and discount not shown correctly  
  Snippet: https://gist.github.com/AnanthFlycart/2500583086fe2d32caccecc012d2f8ae  
* Fix strikeout issue in side cart  
  Snippet: https://gist.github.com/AshlinRejo/5d27493a8b9726862904ca33258dd3b8  
#### B2BKing [by WebWizardsDev]
* Exclude discounts of specific rules when b2b customer is logged-in  
  Snippet: https://gist.github.com/AnanthFlycart/4350d26f2c50bf3c265c8dc29c7ba800
#### WooCommerce Shipping Per Product [by WooCommerce]
* To load our free shipping with per product shipping  
  Snippet: https://gist.github.com/AshlinRejo/45578dbb10721c184916fd433d29000a  
#### WPC Composite Products for WooCommerce [by WPClever]
* Exclude child items from apply discounts (not takes its quantities)  
  Snippet: https://gist.github.com/AshlinRejo/24bd342db913580fd06e97109914df72


## Fixes
### Strikeout issues
#### Product/Shop/Category page
* Strikeout or discount price not shown (fix by increase event priority)  
  Snippet: https://gist.github.com/AnanthFlycart/e1044363c132674ae19ea083b8516883  
* Strikeout or discount price not shown (fix by suppress event, may other plugins and customizations are not works)  
  Snippet: https://gist.github.com/AnanthFlycart/333f7756bc0588aca32d0e4ade3f1f11  
* Variable product price (range) discount or strikeout is not shown (fix by increase event priority)  
  Snippet: https://gist.github.com/AshlinRejo/eea1b206cf55f48e6f94b4d489ea7932   
* Variable product price (range) discount or strikeout is not shown (use price html event, instead of default)  
  Snippet: https://gist.github.com/AnanthFlycart/b1bff4290c586d8e076f650417398d74  
* Fix same price strikeout issues  
  Snippet: https://gist.github.com/AshlinRejo/c3331e061e48e2fa09e08f3654d15fb4  
* Consider out of stock variants for strikeout of variable price (range)  
  Snippet: https://gist.github.com/AnanthFlycart/7720b84aed32927671e9bedeb3ed3b47  
#### Cart/Checkout page
* Strikeout not shown (fix by force recalculate totals on cart)  
  Snippet: https://gist.github.com/AnanthFlycart/a580693e9d12ef3a70fd424cc9e22cc5
* Strikeout not shown (when Avada Builder to build cart page)  
  Snippet: https://gist.github.com/AnanthFlycart/ac3e4960e71898df36d277cf45d00f81
* Fix item price strikeout not shown correctly (fix by suppress event)  
  Snippet: https://gist.github.com/AnanthFlycart/cf9a4d4f4e13bee554bbce763c438100
* Fix subtotal is not shown correctly (fix by recalculate totals)  
  Snippet: https://gist.github.com/AshlinRejo/d93f5124dbeafc3b0e31343920edea0e  
* Fix subtotal is not shown correctly (fix by calculates subtotal based on each item subtotal)  
  Snippet: https://gist.github.com/AnanthFlycart/d5c6723ed723dd381f0e72c177181f00  
* Fix item price and subtotal are shown incorrectly (fix by recalculate totals at all)  
  Snippet: https://gist.github.com/AnanthFlycart/bca922237bf890485b9ac0bf19b55e31  
* Fix item price and subtotal are shown incorrectly (fix by increase hook priority)  
  Snippet: https://gist.github.com/AnanthFlycart/6710adfa38dec9585990643b58352fe6  
* Fix item price and subtotal are shown incorrectly (fix by suppress events)  
  Snippet: https://gist.github.com/AnanthFlycart/4d283a18b474c5fb3191c8198b27351f
* Fix rule applied messages shown incorrectly (even discount is not applied)  
  Snippet: https://gist.github.com/AnanthFlycart/95371d1cd12e9c61968a6c7476c8e72d  
* Fix cart item price quantity x symbol shown at beginning in RTL page  
  Snippet: https://gist.github.com/AnanthFlycart/e388360579a15519837843229072bae0  
* Fix displaying other language message while switch the language though WPML  
  Snippet: https://gist.github.com/AshlinRejo/14b52f1e4488cac8654a6a0d71d513bf  
* Refresh the cart summary in some case the discount applies before add an item to cart  
  Snippet: https://gist.github.com/AshlinRejo/4dceef71f0d406326513357036bafb9e  
#### Mini cart
* Strikeout not shown (fix by force recalculate totals on mini cart)  
  Snippet: https://gist.github.com/AnanthFlycart/40c9219772996dd3fc158f2bf611ef4c  
* Mini cart is not update correctly when item added to or removed from cart  
  Snippet: https://gist.github.com/AnanthFlycart/58253b58a76eac84b2f5fd6ddcc5a3ac  
* Fix for Mini cart doesn't refresh in Woodmart [Theme] side cart  
  Snippet: https://gist.github.com/AshlinRejo/ecdaa6aeb227a03ce0d8dc4daa49f325  
#### Dynamic price (strikeout) 
* Product (variable) page build by Divi Builder  
  Snippet: https://gist.github.com/AnanthFlycart/0773ca8a087622c0e75b3d31a54f5bcd  
* Strikeout is not update after Add to Cart (Ajax) in product page  
  Snippet: https://gist.github.com/AnanthFlycart/83273b78200e416ec0a0f081f351c724  
* Fix for quantity increment or decrement button doesn't trigger dynamic strikeout price  
  Snippet: https://gist.github.com/AshlinRejo/faae96963587fa7e371e18e329f463df  
### Sale page
* Fix products not listed correctly (fix by exclude out of stock product from indexing)    
  Snippet: https://gist.github.com/AshlinRejo/5888c35516b0d27382bc0734fb48ba0f  
  Note: After add snippet, should be run rebuild index in order to work  
* Fix Quick View [by Barn2] doesn't loads  
  Snippet: https://gist.github.com/AnanthFlycart/0da5575c2d873553b87cef6ada3048b2  

### Coupon & Fee
#### Coupon
#### Fee
* Remove subtract tax from fee (when entered price including tax)  
  Snippet: https://gist.github.com/AnanthFlycart/62f73bb294c6ddb0f437b308fc5794dd  
* Disable tax in cart discount amount (fee)  
  Snippet: https://gist.github.com/AshlinRejo/a7557684e10ec04127971b8891159e1d  

### Free Shipping
* Not working with Payment method condition (Free shipping is always shows)  
  Snippet: https://gist.github.com/AnanthFlycart/3aed079dc8ca2cbcc06766915e9d63ad  

### BOGO
#### Free
* Avoid third-party plugin's product details added in free product (auto added)  
  Snippet: https://gist.github.com/AnanthFlycart/86516fed7a22b690861bc7d08c730326
* Avoid conflicts while auto add (by remove all woocommerce_add_to_cart event)  
  https://gist.github.com/AshlinRejo/0f18026063fa78baeb70ae885c9c03b5  
* Disable auto add after update a cart item manually for limited discount  
  Snippet: https://gist.github.com/AshlinRejo/b94e15a41221487c0d11ea34308d9e98  
* Free product not auto add when WPML plugin is active  
  Snippet: https://gist.github.com/AnanthFlycart/33fbab7382b8f8d769d7003a3628d9ff  
#### BXGY
* Load Attributes in Categories  
  Example: https://gist.github.com/AnanthFlycart/5c1d29ea318550bc35a90747db9f6d30  
* Load Tags or Custom taxonomy like brands in Categories  
  Example: https://gist.github.com/AshlinRejo/acab6a7d6ac44802192891a7a977f641  
* Pick the cheapest (or highest) product based on the cart item product regular price  
  Snippet: https://gist.github.com/AnanthFlycart/9f13bf8787174601a2bfcb9c6a7d7e9d  
* Change variant list is shown only parent product name (without variants details)  
  Snippet: https://gist.github.com/AnanthFlycart/f51fe7047e2b7ca2713a2d915afa6400  
* Exclude product from apply cheapest discount rule  
  Snippet: https://gist.github.com/AshlinRejo/48146b30c743e8e2a6a98772e56e8ae7

### Rule
#### Common
* Increase search results limit (to 50)  
  Snippet: https://gist.github.com/AshlinRejo/4700227e045532af2ca45f69f30c119f  
#### Filter
* Bands are listed in Custom Taxonomy filter  
  Snippet: https://gist.github.com/AnanthFlycart/218d9424a9e5579a94a465828fc149e7  
* Product brand (YITH) is not listed in Custom Taxonomy filter  
  Snippet: https://gist.github.com/AnanthFlycart/b55c805663a397802d64cd607cd74582  
* On Sale filter is not working for variable product  
  Snippet: https://gist.github.com/AnanthFlycart/59c7d7823fd0d4818388768845b7dfda  
* Rule page is not loading (when ARForms plugin is active)  
  Snippet: https://gist.github.com/AnanthFlycart/c0e0873083037cc08e46a792b7ad1839  
#### Condition
* Check purchase history conditions based on both email and user ID  
  Snippet: https://gist.github.com/AshlinRejo/6d073e7cf341da981cf2e650f9d859a5  

### Other
#### Assets
* Increase priority of front-end assets load (enqueue)  
  Snippet: https://gist.github.com/AnanthFlycart/1bdaa832a42ba2de08624792fa1477c7  


## Customization
### Cart & Mini cart
* Refresh the cart page after update cart  
  Snippet: https://gist.github.com/AnanthFlycart/20c592f84f38fbf22405dd0ff15833b1  
* To add discounted price to cart item data (product object)  
  Snippet: https://gist.github.com/AnanthFlycart/fc0b8e08c01c553be68a3d7aa794d0eb  
* Disable discount rule based on coupon start with  
  Snippet: https://gist.github.com/AshlinRejo/e30d2419e6349c897703726a92b2f0c0  
* To load Change Variant option in Mini cart  
  Snippet: https://gist.github.com/AnanthFlycart/3c73607cce67644ed3aa267828dc5f87  

### Sale badge
* Display sale badge using alternative events  
  Snippet: https://gist.github.com/AnanthFlycart/b4cd44ea6538a23b1d347569317cb61f  
* Disable sale badge for Shipping rule  
  Snippet: https://gist.github.com/AnanthFlycart/78e00ebf221eb40a4bcc23417f578206  
* To show rule tile in sale badge  
  Snippet: https://gist.github.com/AnanthFlycart/e2a19cc746c8dfa42631bf9c290f48e5  
  Shortcode: {{title}}  

### Strikeout
* Show strikeout one by one  
  Snippet: https://gist.github.com/AnanthFlycart/10005f62d1f3133d10d1802ab0d8d7ee  
* Show only discounted price (without strikeout or original price)  
  Snippet: https://gist.github.com/AnanthFlycart/e815d897b5a5d8e96598eec65fc414f7  
* Display only minimum price of variable price range (ie, From: minimum price)  
  Snippet: https://gist.github.com/AshlinRejo/80460890f322adf5ee88f1a9dcc84a20  
* Display only minimum price of variable price range (ie, Fr: minimum price)  
  Snippet: https://gist.github.com/AshlinRejo/c8863a8a302cec68abc2118f3a2ef0f0  
* Swap or Reverse Strikeout (ie, discounted price ~~original price~~)  
  Snippet: https://gist.github.com/AnanthFlycart/7bcd3ce99e9674bc10ee40f37026d1f0  
* Hide discount prices in shop, category and product page when user is not logged-in  
  Snippet: https://gist.github.com/AnanthFlycart/a85372a1669e7ae472659c89a7f310ca  
* Disable strikeout for variable price (range)  
  Snippet: https://gist.github.com/AshlinRejo/5a8e4b9dfa058a673d56c82452262abe  
* To load product price via shortcode  
  Snippet: https://gist.github.com/AnanthFlycart/22476c6201cd72e228e29188ff503064  
  Shortcode: [awdr_product_price]  

### Dynamic Price
* Change the dynamic strikeout class target for variant (variable product page)  
  Snippet: https://gist.github.com/AshlinRejo/db1c2fcf3ace0d18fd1a659d66bdd6f7  
* Trigger quantity update on changing variant and update the variant price in variable price  
  Snippet: https://gist.github.com/AshlinRejo/99770c4dc5464f347d56e5f65df967a7  

### Discount Bar
* Allow to add links and images  
  Snippet: https://gist.github.com/AnanthFlycart/69a2320d83262419f7fb06398fd67789  
* Show in shop and category page (before Add to Cart button)  
  Snippet: https://gist.github.com/AnanthFlycart/72ca47fbdddefbe5057105c99d4649bc
* Shown only both rule filters and conditions matched (it may make some additional load)  
  Snippet: https://gist.github.com/AnanthFlycart/022900681ea7a9e4d2a82b54a03dae58
* Merge all the discount bars into single bar  
  Snippet: https://gist.github.com/AnanthFlycart/2e72653a9705ddeaff28f26f6149e062  
* Display discount bar in different or custom position (by hook name)  
  Example: https://gist.github.com/AshlinRejo/a2d5a2981357cd8a046b30e93fd0c910  
* To load discount bar via Shortcode  
  Snippet: https://gist.github.com/AnanthFlycart/a28595cf5085a5d9ea0bc04a6f218682  
  Shortcode: [awdr_discount_bar]  
* To load discount table or bar manually
  Example: https://gist.github.com/AshlinRejo/c5bafb1c44f5aa6662452d3eace5ce90  

### Discount Table
* Disable discount table for specific rules  
  Snippet: https://gist.github.com/AshlinRejo/f99867d818a02247400bce505e9533df  
* Hide discount table when customer is logged-in  
  Snippet: https://gist.github.com/AnanthFlycart/d71d43968907495205622e4fa180e514  
* Show only minimum range with + (by template override)  
  Code: https://gist.github.com/AshlinRejo/1c3cc51d74717fd03fa89d9387e78baf  
  Note: Suggest to copy the above code and paste to the following filepath  
  File path: /wp-content/themes/**current_theme**/advanced_woo_discount_rules/discount_table.php

### Promotional Message
* Display message on product page (before Add to Cart button)  
  Snippet: https://gist.github.com/AnanthFlycart/9f13bf8787174601a2bfcb9c6a7d7e9d
* Display message on mini-cart  
  Snippet: https://gist.github.com/AnanthFlycart/150898563cf632209ffe4e96ab7ff5a9  

### Applied rule message
* Remove messages on Checkout page  
  Snippet: https://gist.github.com/AnanthFlycart/d0b500bb0fd74cc20db854e817be04be  

### You saved message 
* To display You Saved message as Row in Cart Totals and Order Review (includes default discounts)  
  Snippet: https://gist.github.com/AnanthFlycart/f926a0d53921ea0bf5c0d3a19e9c5126  
* To customize message (HTML)  
  Example: https://gist.github.com/AnanthFlycart/262af1703d2423f6bb98892dc7b43b9b
* Display you save message in product page  
  Example: https://gist.github.com/AnanthFlycart/2f2db3d774a26b69924a24ed09f4dba9  

### Cross-sell
* Display Cross-sell on after cart  
  Snippet: https://gist.github.com/AshlinRejo/c87812352f1f694824153d065fba3f05  

### Discount Label
* Hide Discount Free label  
  Snippet: https://gist.github.com/AnanthFlycart/77305aa4f9cb227e4b49688544ae2e0b  

### Filter
* AND Conditional Filter pass for Category and Attributes combination  
  Snippet: https://gist.github.com/AnanthFlycart/78869eac65971ccfd4a6e806224a5874  
* AND Conditional Filter pass for Products and Attributes combination  
  Snippet: https://gist.github.com/AnanthFlycart/01ac9b74a19574e33e52543d18722427  
* AND Conditional Filter pass for Attributes and Onsale combination  
  Snippet: https://gist.github.com/AnanthFlycart/39c9f2e2ad7df6b16c8cb8e387939195  
* AND Conditional Filter Pass for Category and Tags combination  
  Snippet: https://gist.github.com/AnanthFlycart/9b1e28a627d87462357f2362e4dacfed  
* AND Conditional Filter pass for Attributes  
  Snippet: https://gist.github.com/AnanthFlycart/a4cc0d49e61f63a862bb9f2dee962393  
* Don't pass filter when product does not match  
  Snippet: https://gist.github.com/AnanthFlycart/5f80803a1ee5b3db1ad371b72a9df866  

### Condition
* Events to handle additional conditions manually  
  Events: https://gist.github.com/AshlinRejo/2c3185edc9aa2e43db28765158ffbd02  

### Discount
* Exclude out of stock products from apply discounts  
  Snippet: https://gist.github.com/AnanthFlycart/66ffce5668f8172bd692075acde9d654  

### Set Discount
* Handle set discount on having low price for few item
  Snippet: https://gist.github.com/AshlinRejo/6d95675a4dfd8fce6f912da72bb1335a

Last modified at: 22-11-2022 02:58PM
