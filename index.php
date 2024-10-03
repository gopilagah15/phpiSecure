<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body>
  <?php
    include 'partials/_header.php';
    include 'partials/_dbConnect.php';


    ?>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src=" https://th.bing.com/th/id/OIP.-AMDCJLhKhWQBBwhOxNESwHaEK?w=320&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" style="width:400px;height:342px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://th.bing.com/th/id/OIP.4Y2r_WEnMq5ikKGXzW_exQHaE8?w=235&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" style="width:400px;height:342px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://media.istockphoto.com/id/1323037471/photo/teenage-girl-with-bluetooth-headphones-studying-late-at-home.webp?a=1&b=1&s=612x612&w=0&k=20&c=L858KShtI2La__NZVves1uMbcou5GfZh0Jd4W61COhQ=" style="width:400px;height:342px" alt="Third slide">
    </div>
  </div>
</div>
<div class="container">
        <h2>Welcome to iDiscuss - Coding Forums</h2>
        
        <div class="row">
          <!-- fetch all the categories -->
           <?php
           $sql = "SELECT * FROM `categoriess`";
           $result = mysqli_query($conn,$sql);
           while($row = mysqli_fetch_assoc($result)){
        //    $id =  $row['category_id'];
           $name =  $row['category_name'];
           $desc =  $row['category_description'];
           echo'<div class="col-md-4">
           <div class="card" style="width: 18rem;">
<img class=
"card-img-top" src="https://media.istockphoto.com/id/1323037471/photo/teenage-girl-with-bluetooth-headphones-studying-late-at-home.webp?a=1&b=1&s=612x612&w=0&k=20&c=L858KShtI2La__NZVves1uMbcou5GfZh0Jd4W61COhQ=" alt="Card image cap">
<div class="card-body">
<h5 class="card-title"><a href="/forum/phpiSecure/threadlist.php">'.$name.'</a></h5>
<p class="card-text">'.substr($desc,0,50).'....</p>
<a href="/forum/phpiSecure/threadlist.php" class="btn btn-primary">View Threads</a>

</div>
</div>
       </div>';
           }
           ?>
    <?php include 'partials/_footer.php';  ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

