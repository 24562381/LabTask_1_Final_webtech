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
</head>
<body>
       <table>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <form method="post" >
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required placeholder="Please enter your name"></input>

            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required placeholder="Please enter your id"></input>

            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required placeholder="Please enter your id"></input>

            <label for="item">Manu:</label>
            <select id="item" name="id" required >
                <option value="0">Please Select an item</option>
                <option value="1">Burger</option>
                <option value="2">Pizza</option>
                <option value="3">Sandwitch</option>
                <option value="4">Coffie</option>
            </select>
        </form>
</body>


</html>
