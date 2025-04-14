<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discuss Project</title>
    <?php include('./client/commonFiles.php') ?>
</head>

<body>
    <?php
    session_start();

    include('./client/header.php');
    
    
    // If ?signup=true and user is NOT logged in, show signup page $userLoggedIn tu a
    $userLoggedIn = isset($_SESSION['user']['username']) ? true : false;
    if (isset($_GET['signup']) && !$userLoggedIn) {
        include('./client/signup.php');
    } elseif (isset($_GET['login']) && !$userLoggedIn) {

        include('./client/login.php');
    } else if (isset($_GET['ask'])) {

        include('./client/ask.php');
    } else if (isset($_GET['q-id'])) {
        $qid = $_GET['q-id'];

        include('./client/questions-details.php');
    } else if (isset($_GET['c-id'])) {
        $cid = $_GET['c-id'];
        include('./client/questions.php');
    } else if (isset($_GET['u-id'])) {
        $uid = $_GET['u-id'];
        include('./client/questions.php');
    } else if (isset($_GET['latest'])) {
        include('./client/questions.php');
    } else if (isset($_GET['search'])) {
        $search=($_GET['search']);
        include('./client/questions.php');
    } else {
        include('./client/questions.php');
    }





    ?>
</body>

</html>