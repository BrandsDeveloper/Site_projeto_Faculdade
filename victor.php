<!DOCTYPE html>

<htm>
  <head>
  
<meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="utf-8">
    <title>MENU</title>
    <link rel="stylesheet" href="assets/css/victor.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="btn">
      <span class="fas fa-bars"></span>
    </div>
      <nav class="sidebar">
        <div class="text">
            <br>
            Líder Financeira
          </div>
              <ul>
                  <li><a href="lider1.php"> Home</a></li>
                <li>
                   <a href="#" class="feat-btn">Contatos
                      <span class="fas fa-caret-down first"></span>
                   </a>
                    <ul class="feat-show">
                          <li><a href="contatolider.php">Endereço</a></li>
                          <li><a href="contatolider.php">Telefones</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="serv-btn">Nossos Produtos
                      <span class="fas fa-caret-down second"></span>
                    </a>
                  <ul class="serv-show">
                     <li><a href="lider4.php">Cartão de crédito</a></li>
                     <li><a href="lider4.php">Novo Empréstimo</a></li>
                     <li><a href="lider4.php">Refinanciamento de contrato</a></li>
                  </ul>
                </li>
              </ul>
      </nav>
           <div class="content">
              <div class="header">
          </div>
        </div>
          <script>
              $('.btn').click(function(){
                $(this).toggleClass("click");
                $('.sidebar').toggleClass("show");
              });
                $('.feat-btn').click(function(){
                  $('nav ul .feat-show').toggleClass("show");
                  $('nav ul .first').toggleClass("rotate");
                });
                $('.serv-btn').click(function(){
                  $('nav ul .serv-show').toggleClass("show1");
                  $('nav ul .second').toggleClass("rotate");
                });
                $('nav ul li').click(function(){
                  $(this).addClass("active").siblings().removeClass("active");
                });
              </script>

  </body>
</html>
