<?php
include 'server.php';
?>
<DOCTYPE html>
    <html>
        <head>
            <title> ESTATE MANAGEMENT REGSTRATION</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href ="server.php?logout=1">Logout</a>
</li>
</ul>
</nav>
<div class ="container">
    <h1>WELCOME AT ESTATE MANAGEMENT SYSTEM</h1>
    <h2><?php echo $_SESSION['success'];  ?></h2>
    <h2><?php echo $_SESSION['firstname'];  ?></h2>
</div>
</body>
</html>

