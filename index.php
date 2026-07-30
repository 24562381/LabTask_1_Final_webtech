<?php
// if(isset($_POST("user_input"))){
//     $user_input = $_POST("user_input")??null;
//         if($user_input !=null){

//         $student_name = $user_input["name"]??"";
//         $student_id = $user_input["id"]??"";

//         $chioces = $user_input["chioces"]??null;
//         if($chioces != null){
    
//             $item = $chioces==null?return:$chioces["id"];
//             $quantity = $chioces==null?return:$chioces["id"];
            
//             $food_items = [
//                 { 
//                     "id"=>1,
//                     "item"=>"Burger",
//                     "price"=>5
//                 },{ 
//                     "id"=>2,
//                     "item"=>"Pizza",
//                     "price"=>8
//                 },{ 
//                     "id"=>3,
//                     "item"=>"Sandwitch",
//                     "price"=>4
//                 },{ 
//                     "id"=>4,
//                     "item"=>"Coffie",
//                     "price"=>3
//                 },
//             ];
//             $id = ()
//             $selected_item = 
//             switch($item){
//                 case 1:
                
//                 default:
//                     echo "Please chose an item!";
//             }
//         }
//     }
//   }
?>


<!DOCTYPE html>
<html>

<head>
    <style>
    
    #form {
        display: flex;
        justify-content: center;
    }
    </style>
</head>

<body>
    <h1>Manu:</h1>
    <table border>
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
            <td>Sandwitch</td>
            <td>$4</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Coffie</td>
            <td>$3</td>
        </tr>
    </table>

    <h1>Customer Info & Order:</h1>
    <div id="form">
        <form method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required placeholder="Please enter your name">

            </div>
            <div>
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" required placeholder="Please enter your id">
            </div>
            <label for="item">Manu:</label>
            <select id="item" name="id" required>
                <option value="0">Please Select an item</option>
                <option value="1">Burger</option>
                <option value="2">Pizza</option>
                <option value="3">Sandwitch</option>
                <option value="4">Coffie</option>
            </select>
            <div>
                <lable for="count">Select Quntity:</lable>
                <input type="number" id="quantity" name="quantity" value=1>
            </div>
        </form>
    </div>
</body>


</html>