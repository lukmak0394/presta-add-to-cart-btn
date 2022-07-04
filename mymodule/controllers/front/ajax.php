<?php

class MyModuleAjaxModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        
        $context = Context::getContext();
        $cart = $context->cart;
        $product_id = $_POST['product_id'];
        $contains_product = $cart->containsProduct($product_id);

        // Passed product id and info if cart contains product with specific id to array
        $response = array('status' => true, 'product_id' => $_POST['product_id'], 'containsproduct' => $contains_product);

        // 
        $json = json_encode($response);
        echo $json;
        die;

    }
}

?>