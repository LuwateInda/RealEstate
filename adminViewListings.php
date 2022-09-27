<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "./Assets/CSS/style.css">
    <!--BoxIcons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>View Listings</title>
</head>
<body>
<header>
    <div class = "nav container">
        <!--Logo-->
        <a href = "adminHome.php" class = "logo"><i class='bx bx-home'></i>Real Estate</a>
        
        <!--Menu icon-->
        <input type = "chckbox" name = "" id ="menu">
        <label for = "menu"> <i class='bx bx-menu' id = "menu-icon"></i></label>
        
        <!--Nav ist-->
        <ul class = "navbar">
            <li><a href = "adminHome.php">Home</a></li>
            <li><a href = "createUser.php">Create User</a></li>
            <li><a href = "adminViewListings.php">View Listings</a></li>
            <li><a href = "#footer">Contacts</a></li>
        </ul>      
    </div>
</header>


<main>
<div class="container">
</br></br></br><h1>Listings</h1>

    <div class = "">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Time</th>
                <th>Agent</th>
            </tr>

            <?php
                $user = 'Luwate';
                $pass = '$Password$';
                $db = 'myproperty';
                
                $dbConnection = new mysqli('localhost', $user, $pass, $db);

                $query = "SELECT `name`, viewingrequest.`email`, `tel`, `date`, `time`, `full_name`, viewingrequest.`agent_id`  FROM `viewingrequest` LEFT JOIN `agent` ON viewingrequest.`agent_id` = agent.`agent_id`";
                $query_run = mysqli_query($dbConnection, $query) or die( mysqli_error($dbConnection));

                while($row = mysqli_fetch_array($query_run)){
                    ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        <?php if ($row['agent_id']==NULL){
                            ?>
                        <td><?php echo '<button '; ?></td>
                        <?php
                        }else{
                            ?>
                            <td><?php echo $row['full_name']; ?></td>
                            <?php
                        } 
                        ?>
                    </tr>
                    <?php
                }
            ?>

        </table>


    </div>
</div>
</body>
</html>