<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Webiste</title>
</head>
<body>
    <div class="navbar">
            <img class="logo" src="EB logo.png" alt="logo">
            <ul>
                <li> <a href="index.php">Home</a></li>
                <li> <a href="transfermoney.php">Customers</a></li>
                <li> <a href="transactionhistory.php">History</a></li>
                </ul>
                <a class="cta" href="#" target="__blank"><button>Contact us</button> </a>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        .banner{
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(Backgroundbanner.jpg);
            background-size: cover;
            background-position: center;
        }

        .navbar{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 10%;
            box-shadow: 0px 5px 10px 0px #aaa;
            opacity: 0.85;
            z-index: 999;
            color: #000;
        }

        img{
            max-width: 20%;
            max-height: 20%;
        }

        .logo{
            cursor: pointer;
        }

        .navbar{
            list-style: none;
        }

        .navbar ul li{
            display: inline-block;
            padding: 0px 20px;
        }

        .navbar li a{
            transition: all 0.3s ease 0s;
        }
        .navbar li a :hover{
            color: aqua;
        }

        li, a, button{
            font-family: Montserrat, sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: #000;
            text-decoration: none;
        }

        button{
            padding: 9px 25px;
            background-color: rgba(0, 136, 169,1);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
        }

        button:hover{
            background-color: rgba(0, 136, 169,0.5);
        }

        .cta button:hover{
            background-color: rgba(0, 0, 0, 0.5);
        }
        </style>
</body>
</html>