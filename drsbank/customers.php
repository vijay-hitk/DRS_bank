<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRS Bank</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/customer.css">
    <link rel="stylesheet" href="css/table.css">

</head>
<body>
    <?php include 'php/navbar.php'; ?>
    <section class = "container">
        <div class="content">
            <h1 class = "c-heading">All Customers</h1>
            <hr>
            <?php
                include 'config.php';

                $sql = "SELECT * FROM drsbank.customers";

                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

                if(mysqli_num_rows($result) > 0) {   

            ?>
            <table id = "customers-table">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Available Balance</th>
                    <th>Operation</th>
                </thead>
                <tbody>
                    <?php 

                        while($row = mysqli_fetch_assoc($result)) {

                     ?>
                    <tr>
                        <td><?php echo $row['cid']; ?></td>
                        <td><?php echo $row['cname']; ?></td>
                        <td><?php echo $row['cmail']; ?></td>
                        <td><?php echo $row['abalance']; ?></td>
                        <td>
                            <a href="transfer.php?id=<?php echo $row['cid']; ?>" class = "btn-transfer">Transfer</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table> 
            <?php } else {
                    echo "No rows in the table";
                } 
            ?>   
        </div>
    </section>
    <?php include 'php/footer.php'; ?>
</body>
</html>