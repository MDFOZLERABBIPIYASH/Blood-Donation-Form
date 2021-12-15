<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration From</title>
</head>
<h1>Blood Donation Camp</h1>
<body bgcolor="FBB91">
    <div>
        <h2>Registration Form</h2>
        <form action="connect.php" method="POST">
            <label for="user">name</label><br>
            <input type="text" name="name" id="name" required/> <br><br>

            <label for="email">email</label><br>
            <input type="email" name="email" id="email" required/> <br><br>

            <label for="phone">phone</label><br>
            <input type="text" name="phone" id="phone" required/> <br><br>

            <label for="bloodgroup">bloodgroup</label><br>
            <input type="text" name="bloodgroup" id="bloodgroup" required/> <br><br>

            <input type="submit" name="submit" id="submit"/>
        </form>
    </div>
    
</body>
</html>