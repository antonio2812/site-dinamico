<?php

    // Validação de páginas - Menu de Navegação
    $paginas = ['home'=>'Minha página home aqui!','sobre'=>'Estou na página sobre','contato'=>'<form><input type="text" placeholder="Seu nome..." /></form>','FAQ'=>'Perguntas frequentes','Loja'=>'Conteúdo loja'];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Dinâmico</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header{
           background-color: rgb(29, 29, 29);
           padding: 8px 10px;
           text-align: center;
        }

        a{
          display: inline-block;
          margin: 0 10px;
          color: white;
          font-size: 17px;
          font-family: Arial;
          text-decoration: none;
        }

        a:hover{
            color: rgba(255, 255, 255, 0.6);
            transition: 600ms;
        }

        section{
            max-width: 960px;
            margin: 20px auto;
            padding: 10px 2%;
            font-family: Arial;
            background-color: #069;
            text-align: center;
        }

        h2{
            color: white;
            font-family: Arial;
            padding: 8px 10px;
        }

        p{
            color: white;
            margin-top: 10px;
            font-size: 16px;
        }

        p:hover{
            color: rgba(255, 255, 255, 0.6);
            transition: 600ms;
        }
    </style>
</head>
<body>
    
    <header>
        <?php
            foreach ($paginas as $key => $value) {
                echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
            }
        ?>
    </header>

    <section>
        <h2><?php

            $pagina = (isset($_GET['page']) ? $_GET['page'] : 'home');

            if(!array_key_exists($pagina, $paginas)){
                $pagina = 'home';
            }

            echo ucfirst($pagina);

        ?></h2>

        <p><?php echo $paginas[$pagina]; ?></p>
    </section>

</body>
</html>