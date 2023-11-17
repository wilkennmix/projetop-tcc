<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nome do site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="template-areas">
        <div class="header"> 
            <div class="texto"><p>ELEGANTES CAVALEIROS</p></div>
            <div class="texto1"><P>A SUA ELEGÃNCIA É O NOSSO ORGULHO!</P></div>
        </div>
        <div class="sidebar">
            <nav>           
                <ul>
                    <P class="od" > ALUGUEL</P>
                    <br>
                    <li><a href=card_produto.php>COMPRA</a></li>
                    <br>
                    <li><a href=agenda.php>AGENDAR</a></li>
                    <br>
                    <li><a href=agenda_cliente.php>SEUS AGENDAMENTOS</a></li>
                    <br>
                       
                </ul>       
            </nav>
        
        </div>
        <div class="contest">
            <p></p>
        </div>
        <div class="footer">
                <div class="flex1">
                    <h4>BEM-VINDO! A TERNO DO NOIVO. </h4> 

                </div> 
              <div class="colfooter">                                          
                    <ul>
                    
                        <li><a href="home.php" title="Página Inícial">HOME</a></li>
                         <br>
                         <a href="adm.php">
                         <img class="adm" id="logo" src="2206368.png" alt="" sizes="" srcset="">
                        
                    
                    </ul>
                </div>  
             <div class="odio" >
                <div class="flex">   
                                             
                    <div class="navebar">
                        <div class="box">
                            <div class="icon">
                            <img class="icon" src="tui.jpg" alt="Instagram logo">
                            </div>
                            <p>X</p>
                        </div>
                        
                        <div class="box">
                            <div class="icon">
                            <img class="icon" src="you.png" alt="Facebook logo">
                            </div>
                            <p>YOUTUBE</p>
                        </div>
                        
                        <div class="box">
                            <div class="icon">
                            <img class="icon" src="wat.png" alt="WhatsApp logo">
                            </div>
                            <p>WHATSAPP</p>
                        </div>
                    
                    <div>
                       
                </div> 
                <div class="info" >
                    <h3> INFORMAÇÃO PARA CONTATO </h3>
                    <h2> (45)9992-4964</h2>
                    <h2> horario comercial </h2>
                    <h2> segunda as sexta 8:00 as 17:30 </h2>
                </div>           
             </div>
               
            </div>
        </div>    
            
    
    </div>
</body>
</html>
<style>
* { 
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
   /* General styles */
body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}
.adm{
  width: 50px;
}
.info{
    font-size: 12px;
}
.od{
    color: #B8860B;
    font-size: 20px; 
}
/* Container */
#template-areas {
  display: flex;
  flex-direction: column;
  width: 100%;
  min-height: 100vh;
}

/* Header */
.header {
  background-color: #222;
  color: #fff;
  padding: 20px;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.texto {
  font-size: 2em;
  font-weight: bold;
}

.texto1 {
  font-size: .9em;
}

/* Sidebar */
.sidebar {
  background-image: url(usar.jpg);
  padding: 30px;
  height: 400px;
  background-size: cover;
  object-position: right top;
  
}

nav {
  list-style: none;
  padding: 0;
  margin-left: 1000px;
  
  
}

nav ul {
  margin: 0;
  padding: 0;
  

}

nav li {
  border-bottom: 1px solid #ccc;
  padding-bottom: 5px;
  list-style-type: none;
  width: 300px;
}

nav a {
  text-decoration: none;
  color: #00FF00;
  
}

/* Contest */


/* Footer */
.footer {
  background-color: #222;
  color: #fff;
  padding: 10px;
  text-align: center;
  display: flex;
  flex-direction: column;
  gap: 10px;
}
.flex{
    display: flex;
    flex-direction: column;
    
}
.flex1{
    font-size: 20px;
    color: #B8860B;
}
.colfooter {

  align-items: center;
}

.colfooter ul {
  list-style: none;
  display: flex;
  gap: 10px;
  justify-content: space-evenly;
  font-size: 20px;
  
  
}

.colfooter ul li {
  margin-bottom: 10px;
  
  
}

.colfooter a {
  color: #fff;
  text-decoration: none;
  color: #00FF00;
}

/* Navebar */
.navebar {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
}

.box {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 0 10px;
}

.icon img {
  width: 20px;
  height: 20px;
}


    </style>
   