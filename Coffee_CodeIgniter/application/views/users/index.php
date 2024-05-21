
<?php
if (!$this->session->userdata('username')) {
    // Display an alert box and redirect to the login page after a delay
    echo '<script>alert("Please log in to view this page"); 
    window.setTimeout(function()
    {
        window.location.href = "'.base_url('login/login').'"; 
    }, 1000);</script>';
    // Stop execution to prevent further rendering of the page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
   <style>
    body{
    }
    .rainbow {
    text-align: center;
    /* text-decoration: underline; */
    /* font-size: 32px; */
    /* font-family: monospace; */
    letter-spacing: 5px;
    }
    .rainbow_text_animated {
        background: linear-gradient(to right, #71797E, #71797E, #ffffff, #ffffff, #71797E, #71797E, #ffffff, #ffffff);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        animation: rainbow_animation 10s ease-in-out infinite;
        background-size: 400% 100%;
    }
    
    @keyframes rainbow_animation {
        0%,100% {
            background-position: 0 0;
        }
      
        50% {
            background-position: 100% 0;
        }
    }

    
 </style>
</head>
<body>

<br>
    <div class="container mt-5">
        <div class="shadow-lg p-4 border border-white">
            <div class="container">
                <a class="btn btn-success mb-2" href="<?= base_url('users/add') ?>">Add A New User</a>
                <div class="">
                    <table id="userTable" class="table table-bordered table-striped" >
                        <thead class="bg-dark text-white">
                            <tr>
                                <th> Images</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php foreach($users as $user): ?>
                            <tr>
                                <td>

                                <img style="height: 50px" src="<?= base_url('image/'. $user->img)?>" alt=""></td>

                                </td>
                                <td><?= $user->username; ?></td>
                                <td><?= $user->status; ?></td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="<?= base_url('users/display/' . $user->id); ?>">Edit</a>
                                    <a class="btn btn-warning btn-sm" href="<?= base_url('users/delete/' . $user->id); ?>">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<table id="userTables">

</table>
<script>
$(document).ready(function() {
    $('#userTable').DataTable();
    $('#userTables').DataTable();
});
</script>


<script src="<?= base_url('assets/js/jquery.js')?>"> </script>
   <script src="<?= base_url('assets/js/popper.js')?>"> </script>   
   <script src="<?= base_url('assets/js/bootstrap.jsx`  ')?>"> </script>  
   <script src="<?= base_url('assets\css\bootstrap.min.css`  ')?>"> </script>   

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>

 </body>
</html>
