<?php
$products = simplexml_load_file('product.xml');
echo 'Number of products: '.count($products);
?>
<script>
    <link rel="stylesheet" href="index.css">
</script>
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
            <td><a href="update.php?id=<?php echo $product['id']; ?>">Update</a>
              </td>
        </tr>
    <?php } ?>
    <a href="create.php?id=<?php echo $product['id']; ?>">Create</a><br>
    <a href="index.php?id=<?php echo $product['id']; ?>">Index</a>
</table>

