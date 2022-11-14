<?php
$products = simplexml_load_file('product.xml');
?>
<table cellpadding="2" cellspacing="2" border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price ($)</th>
        <th>Description</th>
    </tr>
    <?php  foreach($products->product as $product) {
    echo $products->attributes()->id;
    $x =isset($_GET['id']) ? intval($_GET['id']) : 0;
    if($product->attributes()->id == $x){
        ?>
    <tr>
        <td><?php echo $product['id']; ?></td>
        <td><?php echo $product->name; ?></td>
        <td><?php echo $product->price; ?></td>
        <td><?php echo $product->description;?></td>
        <td><a href="update.php?id=<?php echo $product['id']; ?>">Update</a><br>
    </tr>
        <a href="list.php?id=<?php echo $product['
id']; ?>">List</a><br>

        <form action="delete.php" method="post" name="delete">
            <a href="delete.php?action=delete&id=<?php echo $product['id']; ?>"onclick="return confirm('Are you sure?')">Delete</a>
        </form>

    <?php }
    ?>

    <?php } ?>
</table>