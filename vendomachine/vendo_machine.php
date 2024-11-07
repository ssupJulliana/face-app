<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vendo Machine</title>
</head>
<body>
    <h3><b>Vendo Machine</b></h3>

    <form method="POST">
        <fieldset style="width: 420px; height: 120px;">
            <legend>Products:</legend>
            <label>
                <input type="checkbox" name="softDrinks[]" value="Coke" <?php if (isset($_POST['softDrinks']) && in_array('Coke', $_POST['softDrinks'])) echo 'checked'; ?>> Coke - ₱15<br>
                <input type="checkbox" name="softDrinks[]" value="Sprite" <?php if (isset($_POST['softDrinks']) && in_array('Sprite', $_POST['softDrinks'])) echo 'checked'; ?>> Sprite - ₱20<br>
                <input type="checkbox" name="softDrinks[]" value="Royal" <?php if (isset($_POST['softDrinks']) && in_array('Royal', $_POST['softDrinks'])) echo 'checked'; ?>> Royal - ₱20<br>
                <input type="checkbox" name="softDrinks[]" value="Pepsi" <?php if (isset($_POST['softDrinks']) && in_array('Pepsi', $_POST['softDrinks'])) echo 'checked'; ?>> Pepsi - ₱15<br>
                <input type="checkbox" name="softDrinks[]" value="Mountain Dew" <?php if (isset($_POST['softDrinks']) && in_array('Mountain Dew', $_POST['softDrinks'])) echo 'checked'; ?>> Mountain Dew - ₱20<br>
            </label>
        </fieldset>

        <fieldset style="height: 35px;width: 420px;">
            <legend>Options:</legend>
            <label>Size</label>
            <select name="size">
                <option value="regular" <?php if (isset($_POST['size']) && $_POST['size'] == 'regular') echo 'selected'; ?>>Regular</option>
                <option value="up" <?php if (isset($_POST['size']) && $_POST['size'] == 'up') echo 'selected'; ?>>Up-Size (add ₱5)</option>
                <option value="jumbo" <?php if (isset($_POST['size']) && $_POST['size'] == 'jumbo') echo 'selected'; ?>>Jumbo (add ₱10)</option>
            </select>
            <label>Quantity</label>
            <input type="number" name="quantity" id="quantity" min="1" max="100" style="width: 100px;" value="<?php echo isset($_POST['quantity']) ? $_POST['quantity'] : ''; ?>">
            <input type="submit" value="Check out">
        </fieldset>
    </form>

   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedProducts = [];
        $productPrices = [
            "Coke" => 15,
            "Sprite" => 20,
            "Royal" => 20,
            "Pepsi" => 15,
            "Mountain Dew" => 20
        ];

        if (isset($_POST['softDrinks'])) {
            $selectedProducts = $_POST['softDrinks'];
        }

        if (!empty($selectedProducts)) {
            $size = $_POST['size'];  
            $quantity = $_POST['quantity']; 
            $sizePrice = 0; 

            if ($size == "up") {
                $sizePrice = 5;
            } elseif ($size == "jumbo") {
                $sizePrice = 10;
            }

            $totalPrice = 0;
            $totalItems = 0;

            echo "<hr><h4><b> Purchase Summary:</b></h4>";

            foreach ($selectedProducts as $product) {
                $productPrice = $productPrices[$product];
                $itemPrice = ($productPrice + $sizePrice) * $quantity;

                if ($quantity == 1) {
                    $itemText = 'piece';
                } else {
                    $itemText = 'pieces';
                }

                echo '   <span style="font-weight: bold;">·</span> ' . $quantity . ' ' . $itemText . ' of Regular ' . $product . ' amounting to ₱ ' . $itemPrice . '<br>';

                $totalPrice += $itemPrice;
                $totalItems += $quantity;
            }

            echo "<br><br><b>Total number of items : $totalItems</b><br>";
            echo "<b>Total amount: ₱ " . $totalPrice . "</b><br>";
        } else {
            echo "<hr>No product selected.";
        }
    }
    ?>
</body>
</html>
