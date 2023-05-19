<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="main.css">
    <meta http-equiv="content-Type" content="text/html" charset="utf-8" />
    <title>Tecnologias para captura de audio</title>

    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script> //Script Menu
        posicionarMenu();

        $(window).scroll(function () {
            posicionarMenu();
        });
        function posicionarMenu() {
            var altura_del_header = $('.header').outerHeight(true);
            var altura_del_menu = $('.menu').outerHeight(true);

            if ($(window).scrollTop() >= altura_del_header) {
                $('.menu').addClass('fixed');
                $('.wrapper').css('margin-top', (altura_del_menu) + 'px');
            } else {
                $('.menu').removeClass('fixed');
                $('.wrapper').css('margin-top', '0');
            }
        }
    </script>
</head>
<body>
    <div class="header">
        <h1>Bitacora Parcial 1</h1>
    </div>
 <div id="container">
           <div id="animacion"></div>
        </div>
        

        <div class="menu"><!--Menu-->
            <a href="https://213195baltazar.000webhostapp.com/final%20cuarto%20semestre/main.html">Introducci&oacute;n</a>
            <a href="https://213195baltazar.000webhostapp.com/final%20cuarto%20semestre/analogico.html">Analogico</a>
            <a href="https://213195baltazar.000webhostapp.com/final%20cuarto%20semestre/digital.html">Digital</a>
            
        </div>
    <div class="wrapper">
        <article id="cuadro"><!--Texto-->
            <main>
                <h2>Encuesta de tecnología</h2>
                <h3>La siguiente Encuesta tiene como finalidad saber si la pagina le a sido <br>
                    de utilidad y descubrir el interes por parte de la comunidad
                </h3>
                <h4>En esta encuesta no se pedira su nombre para mantener el anonimato de los participantes.</h4>
                <br>
                <br>
        
                <form class="encuesta" action="guardar.php" method="POST" id="contact_form" runat="server" enctype="multipart/form-data">
                        
                    <label for="sexo">Favor de identificar su sexo:</label><br>
                    <div><input type="radio" name="sexo" value="Femenino"/>Femenino
                        <input type="radio" name="sexo" value="Masculino"/>Masculino</div>
                        <br>
        
                  
                    <label for="edad">Edad:</label> <input type="number" id="edad" name="edad"  min="5" max="150"required ><br><br> 
        
        
        
                    <label for="pais">Pais:</label><br>
                    <input type="text" id="pais" name="pais"  maxlength="40"required ><br><br>
                    
            
        
        
                  <label for="idioma">Hasta cuantos idiomas maneja:</label><br>
                  <select name="idioma"required>
                    <option value="" >--------</option>
                      <option value="Espa&ntilde;ol">Solo espa&ntilde;ol</option>
                      <option value="English">English</option>
                      <option value="Espa&ntilde;ol e ingles">espa&ntilde;ol e ingles</option>
                      <option value="2 idiomas">Espa&ntilde;ol y otro</option>
                      <option value="Triada de lenguas">3 idiomas (Espa&ntilde;ol, ingles y japones)</option>
                      <option value="3 idiomas">3 idiomas</option>
                      <option value="4 idiomas o mas">4 idiomas o mas (wow!)</option>   
                         </select><br><br>
                
                    
                           <label for="apartado">Cual de los apártados a sido de su mayor agrado?</label><br>
                           <div><input type="radio" name="apartado" value="Introduccion"required/>Introduccion
                           <input type="radio" name="apartado" value="Analogo"/>Analogo
                           <input type="radio" name="apartado" value="Digital"/>Digital</div>
                    
                           <br>
        
                           <label for="experiencia">Que tan buena considera que fue experiencia al navegar por la pagina?</label><br>
                           <select name="experiencia">
                          <option value="" >--------</option>
                      <option value="No le intereso">No me fije/No le tome importancia</option>
                      <option value="Mala">Mala</option>
                      <option value="Regular">Regular</option>
                      <option value="Buena">Buena</option>
                      <option value="Muy buena">Muy buena</option>
                      <option value="Excelente">Excelente</option>
                         </select><br><br>
        
                         
        
                         <label for="aporte">Si tiene conocimiento de algun link que pueda aportar contenido a nuestra pagina para la comunidad te invitamos a que lo compartas:</label><br>
                         <input type="text" id="aporte" name="aporte"><br><br>
        
        
                    
                        <button class="submit" types="submit">Enviar Registro</button>
                    
                     </form>
                     </main>
            </article>
    </div>
</body>
</html>