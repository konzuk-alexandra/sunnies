<?php
// chek if there is something in $_GET array under the key: prod-id
// if not, loop through $products and parse the datat into desired markup
$markUp = "";

// if-statement runs in case that user didn't select anything from the dropdown
if(!isset($_GET['prod-id'])){
    foreach($items as $value){
        $markUp .= "<div class='product'>
                    <figure>
                        <img src='{$value['image']}' alt='{$value['name']}' >
                        <figcaption>
                            <p>{$value['name']} - 
                               <span>{$value['price']}</span></p>
                        </figcaption>
                    </figure>
                    </div>";
    }
    
} else {
    
    $selectedItems = [];
    
    foreach ($items as $value) {
        if ($_GET["prod-id"] === $value["id"]) {
            array_push($selectedItems, $value);
        }
    }
    
    foreach($selectedItems as $value){
        $markUp .= "<div class='product'>
                      <figure>
                        <img src='{$value['image']}' alt='{$value['name']}' >
                        <figcaption>
                            <p>{$value['name']} - 
                               <span>{$value['price']}</span></p>
                        </figcaption>
                      </figure>
                    </div>";
    }
}
?>