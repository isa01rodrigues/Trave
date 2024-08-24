

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contato travelers</title>
        <link rel="stylesheet" href="css/reset.css">

        <link rel="stylesheet" href="css/home.css">

        <link rel="stylesheet" href="css/responsive.css">
    </head>

    <body>
        <header>
            <section>
                <div>
                    <a href="mailto:travelers00@gmail.com.br">travelers00@gmail.com.br</a>

                    <a href="index.php">HOME</a>

                    <a href="tel:+5511988626604">(11) 988 626 604</a>
                </div>
            </section>

        </header>
        <main>
            <section class="formulario">
                
                <div class="conte">

                    
                        <h1>Formulario de Contato</h1>

                        <form action="#" method="POST">
                            <div>
                                <div>
                                    <label for="nome">Nome:</label>
                                    <input type="text" name="nome" id="nome" placeholder=" *Informe seu nome:" required>
                                </div>
                                <div>
                                    <label for="email">E-mail:</label>
                                    <input type="email" name="email" id="email" placeholder="*Informe o seu E-mail:"
                                        required>
                                </div>
                                <div>
                                    <label for="telefone">Telefone:</label>
                                    <input type="tel" name="telefone" id="telefone" placeholder="*Infome seu Telefone:">
                                </div>


                            </div>

                            <div>

                                <div>
                                    <label for="mens"></label>
                                    <textarea name="mens" id="mens" cols="30" rows="10"
                                        placeholder="*Envie sua Mensagem:"></textarea></textarea>

                                        

                                </div>

                                <div class="btnContato">
                                    
                                    <input type="button" ondblclick= "EnviarWhats()" value="Enviar po WhatsApp" >
                                </div>

                                
                            </div>

                        </form>

                



                </div>


                </div>
            </section>
        </main>

        

        <script src="javaS/contato.js"></script>


    </body>

</html>