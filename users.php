<?php
   require_once "classes/User.php";
   //Create the instance/object
   $users = new User;


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
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
  </head>
  <style>
    body{
      font-family: 'Roboto Mono', monospace;
    }
  </style>
  <body>
      <h2 class="mr-3">User List</h2>
      <table class="table table-striped mx-4">
          <thead class=" bg-dark text-white">
              <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>FirstName</th>
                  <th>LastName</th>
                  <th>Created_at</th>
                  <th>Updated_at</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              <?php
                $get_users = $users->selectALL();

                if($get_users){
                  foreach($get_users as $key => $row){
                    $id = $row['user_id'];
                    echo "<tr>";
                    echo "<td>".$row['user_id']."</td>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['firstname']."</td>";
                    echo "<td>".$row['lastname']."</td>";
                    echo "<td>".$row['created_at']."</td>";
                    echo "<td>".$row['updated_at']."</td>";
                    echo "<td>
                    <a href='edit_user.php?user_id=$id' class='btn btn-info btn-sm'>Edit</a>";
                    ?>
                    <a href='user_action.php?action=delete&user_id=<?php echo $id; ?>'
                    class='btn btn-danger btn-sm' onclick='return confirm("Are you sure you want to delete?");'>Delete</a>
                    </td>
                    </tr>

                    <?php
                  }
                }else{
                  echo "<tr><td colspan='7' class='text-center'>Nothing to show</td></tr>";
                }
                ?>
          </tbody>
      </table>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>