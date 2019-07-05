<?php
    require_once "classes/Category.php";

    $category = new Category;

    if($_GET['action'] == 'add'){

        $category_name = $_POST['category_name'];

        $result = $category->save($category_name);
        if($result){
            echo "<script>window.location.replace('categories.php'); </script>";
        }else{
            echo "Error!!";
        }
    }
    
    elseif($_GET['action'] == 'update'){
        $category_id = $_POST['category_id'];
        $category_name = $_POST['category_name'];

        $result = $category->update($category_id,$category_name);

        if($result){
            echo "<script>window.location.replace('categories.php'); </script>";
        }
    }
    elseif($_GET['action'] == 'delete'){
        $category_id = $_GET['category_id'];
        $result = $category->delete($category_id);
        if($result){
            echo "<script>window.location.replace('categories.php');</script>";
        }
    }
?>