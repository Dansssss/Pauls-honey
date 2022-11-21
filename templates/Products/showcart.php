<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
//session_start();
if(isset($_POST["add_to cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("iten already added")</script>';
            echo '<script>window.location="productLayout.php"</script>';
        }
    }
    else
    {
        $item_array = array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;

    }
}
?>

<h3>Cart detail</h3>
<table class="table table-bordered">
    <tr>
        <th width="40%">Item name</th>
        <th width="10%">quantity</th>
        <th width="20%">price</th>
        <th width="15%">total</th>
        <th width="5%">action</th>

    </tr>
    <?php
    if(!empty($_SESSION["shopping_cart"]))
    {
        $total = 0;
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            
    ?>
        <tr>
            <td><?php echo $values["item_name"]?></td>
            <td>$ <?php echo $values["item_price"]?></td>
            <td><?php echo $values["item_quantity"]?></td>
            <td><?php echo number_format($values["item_quantity"]*$values["item_price"],2); ?></td>
            <td><a href ="showcart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">remove</span></a></td>
                
                
        </tr>
    <?php
        }
        
    }
    ?>
    
    
    
    
    

</table>