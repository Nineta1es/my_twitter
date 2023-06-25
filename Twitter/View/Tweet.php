<?php
include "../View/Header.php"

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tweet</title>
    <link rel='stylesheet' href="../css/tweet.css">
    <link rel='stylesheet' href="../css/style.css">

</head>
<body>

<form method="POST" action="../Controller/tweetController.php" name="Tweet">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="tweet-area">
                    <textarea class="tweets" id="tweets" rows="3" name="message" placeholder="Quoi de neuf ?"></textarea>
                </div>
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                <input type="hidden" name="origin" value="0">
                <input type="submit" name="submit_tweet" class="btn" value="Tweet">
            </div>
            <div class="col-md-12  w-100 bg-light border border-top-0 border-left-0 border-right-0 border-dark theme-change">
            </div>
        </div>
    </div>
</form>
</body>
</html>