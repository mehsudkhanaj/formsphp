<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>HTML FORMS</h1>
    <div class="container">


        <form action="connect.php" method="POST">
            <div>

                <label for="">Name</label>
                <input type="text" name="name" placeholder="Enter your name">
            </div>
            <div>

                <label for="">Email</label>
                <input type="email" name="email" placeholder="Enter your Email">
            </div>

            <div class="genderContainer">

                <label for="">Gender</label>
                <input class='gender1' type="radio" name="gender" value='m'>Male
                <input class='gender1' type="radio" name="gender" value='f'>Female
                <input class='gender1' type="radio" name="gender" value='o'>Others
                <div>

                    <label for="">Mobile</label>
                    <input type="text" name="mobile" placeholder="Enter your Phone">
                </div>
                <div>

                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Enter your password">
                </div>
            </div>
            <div class="btn">
                <button type="submit">Submit</button>
            </div>


        </form>

    </div>
</body>

</html>