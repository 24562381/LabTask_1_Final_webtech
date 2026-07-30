<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = isset($_POST['name']) ? $_POST['name'] : '';
    $user_id  = isset($_POST['id']) ? $_POST['id'] : '';
    $item_id  = isset($_POST['item']) ? (int)$_POST['item'] : 0;
    $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 0;

    $food_items = [
        [
            "id" => 1,
            "title" => "Burger",
            "price" => 5
        ],
        [
            "id" => 2,
            "title" => "Pizza",
            "price" => 8
        ],
        [
            "id" => 3,
            "title" => "Sandwich",
            "price" => 4
        ],
        [
            "id" => 4,
            "title" => "Coffee",
            "price" => 3
        ]
    ];

    $item_name = '';
    $item_price = '';

    switch ($item_id) {
        case 1:
            $item_name = $food_items[0]["title"];
            $item_price = $food_items[0]["price"];
            break;
        case 2:
            $item_name = $food_items[1]["title"];
            $item_price = $food_items[1]["price"];
            break;
        case 3:
            $item_name = $food_items[2]["title"];
            $item_price = $food_items[2]["price"];
            break;
        case 4:
            $item_name = $food_items[3]["title"];
            $item_price = $food_items[3]["price"];
            break;
        default:
            echo "Please chose an item!";
            return;
    }

    $total_price = $item_price * $quantity;
    $discount = 0;
    $discount_amount = 0;
    $final_bill = $total_price;

    if ($total_price >= 30) {
        $discount = 20;
        $discount_amount = $total_price * 0.2;
        $final_bill -= $discount_amount;
    } elseif ($total_price >= 20) {
        $discount = 10;
        $discount_amount = $total_price * 0.1;
        $final_bill -= $discount_amount;
    }
    echo "========================<br>";     
    echo "<h4>UNIVERSITY CAFETERIA</h4>";     
    echo "========================<br><br>";     
    echo "Student Name: " . $name . "<br>";
    echo "Student ID: " . $user_id . "<br><br>";

    echo "Food Item: " . $item_name . "<br>";
    echo "Price: $" . $item_price . "<br>";
    echo "Quantity: " . $quantity . "<br><br>";

    echo "Ordered Items: <br>";
    for ($i = 1; $i <= $quantity; $i++) {
        echo "Item " . $i . ": " . $item_name . "<br>";
    }

    echo "<br>";
    echo "Subtotal: $" . $total_price . "<br>";
    echo "Discount: " . $discount . "%<br>";
    echo "Discount Amount: $" . $discount_amount . "<br>";
    echo "Final Bill: $" . $final_bill;
    echo "<br><br>Thank you for visiting!<br>";
    echo "========================";        
    return;
}
?>


<!DOCTYPE html>
<html>

<head>
    <style>
    body {
        margin: 0;
        min-height: 100vh;
        position: relative;
        font-family: Arial, sans-serif;
        background: #f5f5f5;
    }

    #main {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .container {
        background: white;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    h4 {
        margin-top: 0;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    th,
    td {
        padding: 8px;
        text-align: center;
    }

    form div {
        margin-bottom: 12px;
    }

    label {
        display: inline-block;
        width: 120px;
    }

    input,
    select {
        padding: 6px;
        width: 200px;
    }

    input[type="number"] {
        width: 60px;
    }

    input[type="submit"] {
        position: absolute;
        background: blue;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 4px;
        right: 10px;
    }

    input[type="submit"]:hover {
        opacity: 0.9;
    }

    #button-section {
        position: relative;
        height: 15px;
    }
    </style>
</head>

<body>
    <div id="main">
        <div class="container">
            <h4>UNIVERSITY CAFETERIA</h4>

            <table>
                <tr>
                    <th>Item No</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Burger</td>
                    <td>$5</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Pizza</td>
                    <td>$8</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sandwich</td>
                    <td>$4</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Coffee</td>
                    <td>$3</td>
                </tr>
            </table>
        </div>

        <div class="container">
            <h4>Customer Info & Order:</h4>

            <form method="post" action="/">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Please enter your name">
                </div>

                <div>
                    <label for="id">ID:</label>
                    <input type="text" id="id" name="id" required placeholder="Please enter your ID">
                </div>

                <div>
                    <label for="item">Menu:</label>
                    <select id="item" name="item" required>
                        <option value="">Please select an item</option>
                        <option value="1">Burger</option>
                        <option value="2">Pizza</option>
                        <option value="3">Sandwich</option>
                        <option value="4">Coffee</option>
                    </select>
                </div>

                <div>
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1">
                </div>
                <div id="button-section">
                    <input type="submit" value="Order Now">
                </div>
            </form>
        </div>
    </div>
</body>

</html>