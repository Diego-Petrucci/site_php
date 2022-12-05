<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <title>Página Inicial</title>
        <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        section {
            position: relative;
            width: 100%;
            min-height: 100vh;
            padding: 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-image: linear-gradient(315deg, #001247 0%, #00bfff 100%);
        }

        header .logo {
            position: relative;
            max-width: 60px;
        }

        header h1 {
            position: absolute;
            display: flex;
            padding-left:70px;
        }

        header ul {
            position: relative;
            display: flex;
        }

        header ul li {
            list-style: none;
        }

        header ul li a {
            display: inline-block;
            color: white;
            font-weight: 900;
            margin-left: 30px; 
            text-decoration: none;
        }

        .content {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content .textBox {
            position: relative;
            max-width: 600px;
        }

        .content .textBox h2 {
            color: #333;
            font-size: 65px;
            line-height: 1.4em;
            font-weight: 500;
        }

        .content .textBox h2 span {
            color: dodgerblue;
            font-size: 100px;
            font-weight: 900;
        }

        .content .textBox p {
            font-size: 30px;
            color: #333;
        }

        .content .imgBox {
            width: 700px;
            display: flex;
            justify-content: flex-end;
            padding-right: 0px;
            margin-top:200px;
        }

        .circle {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(315deg, #001247 0%, #00bfff 100%);
            clip-path: circle(600px at right 800px);
        }
    </style>
</head>
<body>
<section>
        <div class="circle"></div>
        <header>
            <a><img src="images/nota_musical.png" class="logo"></a>
            <h1>MELHORES MÚSICAS</h1>
            <ul>
                <li><a href="tela_login.php">LOGIN</a></li>
                <li><a href="formulario.php">CADASTRE-SE</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="textBox">
                <h2>Escolha suas melhores músicas!<br>E monte sua melhor <span>PLAYLIST!</span></h2>
                <br><br><br>
                <p>Esse site te ajuda a montar sua melhor playlist. É so escolher suas músicas, nomes dos artistas e pegar o link da música no youtube!</p>
            </div>
            <div class="imgBox">
                <img src="images/dj.png" class="dj">
            </div>
        </div>
    </section>
    
</body>
</html>