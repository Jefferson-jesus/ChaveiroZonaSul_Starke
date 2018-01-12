<?php
 
// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("class/class.phpmailer.php");
// require('./index');
 // Inicia a classe PHPMailer
$mail = new PHPMailer(true);
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
 
try {
    
    $nome= $_POST['nometxt'];
    $emailEnvi = $_POST['emailtxt'];
    $assunto= $_POST['assuntotxt'];
    $mensagemEnvi= $_POST['txtMsg'];
    
     $mail->Host = 'smtp.starkeSolutions.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
     $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
     $mail->Port       = 587; //  Usar 587 porta SMTP
     $mail->Username = 'jefferson@starkesolutions.com.br'; // Usuário do servidor SMTP (endereço de email)
     $mail->Password = '900611Jeff@Starke'; // Senha do servidor SMTP (senha do email usado)
 
     //Define o remetente
     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->SetFrom('jefferson@starkesolutions.com.br', 'Jefferson de Jesus'); //Seu e-mail
     $mail->AddReplyTo('jefferson@starkesolutions.com.br', 'Jefferson de jesus'); //Seu e-mail
     $mail->Subject = "".$assunto."";//Assunto do e-mail
 
 
     //Define os destinatário(s)
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->AddAddress('jeff_jesusoliveira@hotmail.com', "Starke Solutions");
 
     //Campos abaixo são opcionais 
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
     //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
     //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
     $arquivo = "
     <html>
         <head>
             <style type='text/css'>
                 body {
                     margin:0px;
                     font-family:Verdane;
                     font-size:12px;
                     color: #666666;
                 }                
				 .cortxt {
					color: cornflowerblue;
				 }
				 .h3 {
					text-align:center;
					margin-top:2%;
				 }
             </style>
         </head>
         <body>
             <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor=''>
                <tr>
                  <td colspan='4'>
                    <h3 class='h3'>Assunto </h3>
                  <td>
                </tr>
                 <tr>
                    <td>
                        <tr>
                          <td width='500'>Nome: <label class='cortxt'>".$nome." </label> </td>
                        </tr>
                        <tr>
                          <td width='320'>E-mail: <label class='cortxt'>".$emailEnvi." </label>  </b></td>
                        </tr>   
                        <tr>
                          <td width='320'>Mensagem: <label class='cortxt'>".$mensagemEnvi." </label></td>
                        </tr>
                    </td>
                 </tr>       
             </table>
         </body>
     </html>
     ";
     
 
     //Define o corpo do email
     $mail->MsgHTML("$arquivo"); 
 
     ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
     //$mail->MsgHTML(file_get_contents('arquivo.html'));
 
     $mail->Send();
     echo "<p>Mensagem enviada com sucesso</p>\n";
                 
    //caso apresente algum erro é apresentado abaixo com essa exceção.
    }catch (phpmailerException $e) {
      echo "E-mail enviado com sucesso."//$e->errorMessage()."error"; //Mensagem de erro costumizada do PHPMailer
}
?>