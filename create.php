<?php
if(isset($_POST['submitSave'])) {
    $products = simplexml_load_file('product.xml');
    $product = $products->addChild('product');
    $z = 0;
    foreach ($products as $product) {
        $z++;
        $product->addAttribute('id', $z);
    }
            $product->addChild('name', $_POST['name']);
            $product->addChild('price', $_POST['price']);
            $product->addChild('description', $_POST['description']);
            file_put_contents('product.xml', $products->asXML());
            header('location:index.php');


}
?>
<form method="post">
    <table cellpadding="2" cellspacing="2">
        <tr>
            <td>Id</td>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Price ($):</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>Description:</td>
            <td><input type="text" name="description"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="Save" name="submitSave"></td>
        </tr>
    </table>
</form>