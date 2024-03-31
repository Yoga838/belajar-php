<?php
$url = 'https://api.publicapis.org/entries';
$data = file_get_contents($url);
$data = json_decode($data, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center fw-bold mt-3">FREE API LIST</h1>
    <div class="container-fluid mt-3 row d-flex justify-content-center gap-3">
        <?php
            if(!empty($data)){
                foreach($data["entries"] as $item){

                
        ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $item['API']?> </h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $item['Category']?></h6>
                <p class="card-text"><?php echo $item['Description']?></p>
                <p class="card-link">Link : <?php echo $item['Link']?></p>
            </div>
        </div>
        <?php
                }
            }
        ?>
    </div>
</body>
</html>