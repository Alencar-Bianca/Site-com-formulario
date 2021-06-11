  <?php
  	//include('../config.php');
    use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;
		
		require 'PHPMailer/src/Exception.php';
		require 'PHPMailer/src/PHPMailer.php';
		require 'PHPMailer/src/SMTP.php';
    $Email = new PHPMailer(true);

if($_POST){
    if(empty($_POST['nome'] ) || empty( $_POST['email']) || empty($_POST['tel'] ) || empty( $_POST['men'] )){
        echo '<script>
                     $(document).ready(function(){
	                  swal("Ops...","Preencha todos os campos obrigatorios!","warning");
                  });
        </script>';
    }else{
           $nome = utf8_decode($_POST['nome']);
          $email = utf8_decode($_POST['email']);
          $telefone = utf8_decode($_POST['tel']);
          $mensagem = utf8_decode($_POST['men']);
          $assunto = 'Enviado Pelo site';

          $Email->SetLanguage("br");
          $Email->IsSMTP(); // Habilita o SMTP 
          $Email->SMTPAuth = true; //Ativa e-mail autenticado
          $Email->Host = 'smtp.gmail.com'; //Servidor de envio # verificar qual o host correto com a hospedagem as vezes fica como smtp.
          $Email->Port = '587'; // Porta de envio
          $Email->SMTPSecure = 'tls';
          $Email->Username = 'seuemail@gmail.com'; //e-mail que será autenticado
          $Email->Password = 'suasenha'; // senha do email
          // ativa o envio de e-mails em HTML, se false, desativa.
          $Email->IsHTML(true); 
          // email do remetente da mensagem
          $Email->From = $email;
          //$Email->SMTPDebug = 2; //mostra erros mais detalhados caso houver
          // nome do remetente do email
          $Email->FromName = ($nome);
          // Endereço de destino do emaail, ou seja, pra onde você quer que a mensagem do formulário vá?
          $Email->AddReplyTo($email, $nome);
          $Email->AddAddress("emailparaenviar@gmail.com"); 
          $Email-> addAddress('emailparaenviar@gmail.com');//  para quem será enviada a mensagem
          //$Email->AddCC('email@hotmail.com', 'Nome da pessoa'); // Copia
          //$Email->AddBCC('email@hotmail.com.br', 'Nome da pessoa'); // Cópia Oculta
          // informando no email, o assunto da mensagem
          $Email->Subject = utf8_decode($assunto);
          // Define o texto da mensagem (aceita HTML)
          $Email->Body .= "<br />
                   <strong>Nome:</strong> $nome<br />									
                   <strong>E-mail:</strong> $email<br />
                   <strong>Telefone:</strong> $telefone<br />
                   <strong>Mensagem:</strong> $mensagem									
                   ";	
          // verifica se está tudo ok com oa parametros acima, se nao, avisa do erro. Se sim, envia.
          if(!$Email->Send()){				
             echo'
            <script>
              $(document).ready(function(){
                swal("Ops '.utf8_encode($nome).'...","Houve um erro ao enviar a mensagem, tente novamente!", "error");
              });
            </script>';
      
          }else{
             echo'
          <script>
            $(document).ready(function(){
              swal("Sucesso '.utf8_encode($nome).'...", "Sua mensagem foi enviada. \n Obrigado pelo contato!", "success")
            });
          </script>';
      
          }		
    }


}
?>

