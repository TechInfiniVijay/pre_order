<?php
$page = "display";
include 'header.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Display</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<?php 
$sql = "SELECT * FROM `pre_order`";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
?>
<style>
#demoBtn{
    background-color: <?php echo $data['btn_bg_color']; ?>;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="dashboard.php?oauth_token=<?php echo $oauth_token; ?>">Pre Order</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php?oauth_token=<?php echo $oauth_token; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="display.php?oauth_token=<?php echo $oauth_token; ?>">Display</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container w-25">
        <div class="card mt-5 mb-5">
            <div class="card-header">
                <h6 class="text-left">Preview</h6>
            </div>
            <div class="card-body">
                <div class="text-center mt-5 mb-5">
                    <button type="button" id="demoBtn" class="btn btn-warning">
                        <?php echo $data['btn_value']; ?></button><br />
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>