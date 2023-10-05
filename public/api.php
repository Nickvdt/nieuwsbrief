<?php
if(empty($_POST['email']) || empty($_POST['name'])){
    echo '400';
    return false;
}else{
    $email = validation("email");
    $name = validation("name");
    echo "gelukt";
}

function validation($value){
    if(isset($_POST[$value]) && !empty($_POST[$value])){
        if($value === "name"){
            $filter = htmlspecialchars($_POST[$value]);
            $filter = trim($filter);
            $filter = preg_replace('/\s+/', ' ', $filter);
        }
        if($value === "email"){
            $filter = filter_var($_POST[$value], FILTER_VALIDATE_EMAIL); 
        }
        return $filter;
    }else{
        return false;
    }
}
?>
