<?php
    include('config.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo INCLUDE_PATH; ?>image/favicon.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&family=Stint+Ultra+Condensed&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/reset.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/colors.css">

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/main-float.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/main-display.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/main-header.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/main-title.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/main-subtitle.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/main-banners.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/main-input.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/main-about.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/main-p.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/main-skills.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/main-error.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/main-contact.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/main-depo.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/main-footer.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/components/load.css">

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/media.css">
</head>
<body>

<?php
    $url = isset($_GET['url'])?$_GET['url']:'home';


    switch($url){
        case 'about':
            echo '<target target="about"/>';
            break;
        
        case 'skill':
            echo "<target target='skill'/>";
        break;

        case 'depo':
            echo '<target target="depo"/>';
        break;
    }
?>
    <div class="mostrar"></div>
    <div class="loading">
        <img class="imgload" src="<?php echo INCLUDE_PATH; ?>image/load.gif" alt="Load">
    </div>
    <header class="main-header">
        <div class="main-display">
            <div class="logo -left">
                <h1 class="main-title">Alencar</h1>
            </div>
            <nav class="menu-desktop -right">
                <ul class="ul">
                    <li class="li"><a class="a" href="<?php echo INCLUDE_PATH; ?>">Home</a> </li>
                    <li class="li"><a class="a" href="<?php echo INCLUDE_PATH; ?>about">Sobre</a> </li>
                    <li class="li"><a class="a" href="<?php echo INCLUDE_PATH; ?>skill">Skills</a> </li>
                    <li class="li"><a class="a" href="<?php echo INCLUDE_PATH; ?>depo">Depoimentos</a> </li>
                    <li class="li"><a c = "contato" class="a" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>                 
            </nav>

            <nav class="menu-mobile -right">
                <h2 class="logo-menu"><i  class="fas fa-align-justify"></i></h2>
                <ul class="ul">
                    <li class="li"><a class="a" href="<?php echo INCLUDE_PATH; ?>">Home</a> </li>
                    <li class="li"><a class="a" href="<?php echo INCLUDE_PATH; ?>about">Sobre</a> </li>
                    <li class="li"><a class="a" href="<?php echo INCLUDE_PATH; ?>skill">Skills</a> </li>
                    <li class="li"><a class="a" href="<?php echo INCLUDE_PATH; ?>depo">Depoimentos</a> </li>
                    <li class="li"><a realtime = "contato" class="a" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>                 
            </nav>
        </div>
        <div class="clear"></div>
    </header>
   
    <main class="main-container">
       <?php
       
            if(file_exists('pages/'.$url.'.php')){
                include('pages/'.$url.'.php');
            }else{
                if($url !='about' && $url !='skill' && $url != 'depo'){
                    $pagError = true;
                    include('pages/error404.php');
                }else{
                    include('pages/home.php');
                }
                
            }
       ?>
    </main>
  
    <div <?php if($url !='about' && $url !='skill' && $url != 'depo'&& $url != 'home') echo 'class="fixed"'; ?>>
        <footer class="main-footer ">
                <div class="main-display">
                    <p class="main-p">Todos os Direitos reservados</p>
                    <p class="main-p">&copy;Alencar</p>
                </div>
        </footer>
    </div>
    <script src="https://kit.fontawesome.com/c53d477a6e.js" crossorigin="anonymous"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>

    <script src="<?php echo INCLUDE_PATH; ?>js/menu.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/slide.js"></script>

    <script src="<?php echo INCLUDE_PATH; ?>js/scroll.js"></script>

    <script src="<?php echo INCLUDE_PATH; ?>js/skills.js"></script>

    <script src="<?php echo INCLUDE_PATH; ?>js/form.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/sweetalert.js"></script>
 
</body>
</html>