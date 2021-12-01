<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRS Bank</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php include 'php/navbar.php'; ?>
    <section class = "container">
        <div class="content">
            <h1>Welcome to DRS Banking Services</h1>
            <div class = "btn-container">
            <a href="customers.php" ><button class = "btn1">View All Customer</button> </a>
            <a href="transactions.php" ><button class = "btn2">View All Transactions</button> </a>
            </div>    
        </div>
    </section>
    <?php include 'php/footer.php'; ?>
</body>
</html>