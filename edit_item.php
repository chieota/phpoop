<?php
    require_once "classes/Item.php";
    $item = new Item;
    $id = $_GET['item_id'];
    $get_item = $item->selectOne($id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h4 class="bg-primary py-3">Edit Item</h4>
    <div class="container">
        <form action="item_action.php?action=update" method="post">
            <input  type="hidden" name="item_id" value="<?php echo $_GET['item_id']?>">
            <div class="form-group">
                <label for="">ItemName</label>
                <input type="text" name="item_name" class="form-control" value="<?php echo $get_item['item_name']?>">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" id="" class="form-control">
                    <?php
                        require_once "classes/Category.php";

                        $category = new Category;
                        $get_categories = $category->selectAll();
                        foreach($get_categories as $key => $row){
                            $category_id = $row['category_id'];
                            $category_name = $row['category_name'];
                    ?>
                        <option value="<?php echo $category_id; ?>"
                        <?php if($get_item['category_id'] == $category_id) echo "selected"; ?>>
                        <?php echo $category_name; ?>
                        </option>
                        <?php
                        }
                        ?>
                </select>
            </div>

            <div class="form-group">
                <label for="">Item Description</label>
                 <input type="text" name="item_description" class="form-control" value="<?php echo $get_item['item_description'] ?>">
            </div>
            <div class="form-group">
                <label for="">Item Price</label>
                 <input type="number" name="item_price" class="form-control" value="<?php echo $get_item['item_price'] ?>">
            </div>

            <input type="submit" value="Edit" name="action" class="btn btn-primary">
        </form>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>