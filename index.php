<?php
$products = simplexml_load_file('product.xml');
echo 'Number of products: '.count($products);
echo '<br>List Product Information';
?>

<br>
<a href="list.php">List</a>
<br>
<table cellpadding="2" cellspacing="2" border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price ($)</th>
        <th>Description</th>
        <th>Options</th>
    </tr>
    <?php foreach($products->product as $product) { ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product->name; ?></td>
            <td><?php echo $product->price; ?></td>
            <td><?php echo $product->description;?></td>
            <td><a href="update.php?id=<?php echo $product['id']; ?>">Update</a> |
                <a href="delete.php?delete=delete&id=<?php echo $product['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr>
    <?php } ?>
</table>