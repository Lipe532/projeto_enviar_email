<html>
    <head>
        <meta charset="utf-8" >
        <title>Contato</title>
    </head>

<body>
        <?php 
        if(isset($_GET['status'])):
        if($_GET['status'] == "enviado"):

        echo "<script>Materialize.toast('Enviado com sucesso', 4000); </script>";
        else:
            echo "<script>Materialize.toast('Erro ao enviar', 4000); </script>";
        endif;
            endif;
        ?>    
         
    <form method="POST" action="enviar-email.php">

        Nome:</br>
        <input type="text" name="nome"   /></br></br>

        Email:</br>
        <input type="email" name="email"   /></br></br>

        Mensagem:</br>
        <textarea name="mensagem" rows="4" cols="50"></textarea></br></br>

        <input type="submit"  value="Enviar"   />

    </form>
       
</body>

</html>