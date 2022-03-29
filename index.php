
<?php

# Create a PHP Program or Function that will validate if a menu name already exists in an array.

$menu = array("Home", "Login", "Sign Up", "About");

$menu_name = "home";

#Check value if it exist in the array regardless of case
function checkMenu($menu_name,$menuList){

    # convert values to upper case
    $menu_upper = array_map('strtoupper',$menuList); 

    # check if menu name exist in array
    if(in_array(strtoupper($menu_name), $menu_upper)){ 
        echo "<h3>True</h3>";
    }else{
        echo "<h3>False</h3>";
    }
}

# call function checkMenu
checkMenu($menu_name,$menu);


# Create a PHP Program or Function that will insert a new menu name in an array and return the new array set.

$add_menu = "Blogs";

function addMenu($menuName, $menuList){

    $menu_upper = array_map('strtoupper',$menuList); 

    # check if menu name exist in array
    if(in_array(strtoupper($menuName), $menu_upper)){ 
        # Do nothing!
        echo "<h3> Menu Already Exist </h3>";

    }else{
        # add menu name to the array
        array_push($menuList, $menuName);
        echo "<h3> Menu Successfully added </h3>";

        #display updated array
        var_dump($menuList);
        
    }

}

#call function addMenu
addMenu($add_menu,$menu);



# Create a PHP Program or Function that will delete a menu name in an array and return the new array set.

$removeMenu = "Login";

function removeMenu($menuName, $menuList){
    
    $menu_upper = array_map('strtoupper',$menuList); 

    # check if menu name exist in array
    if(in_array(strtoupper($menuName), $menu_upper)){ 

        echo "<h3> Menu Successfully removed! </h3>";

        # find key of the given value
        $key = array_search($menuName, $menu_upper);

        # remove the value in the array using key
        unset($menuList[$key]);

        # display updated array
        var_dump($menuList);

    }else{
        echo "<h3> Menu Does Not Exist! </h3>";
    }
}


#call Remove Menu
removeMenu($removeMenu,$menu);


?>