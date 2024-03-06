<!DOCTYPE html>
<html>

<head>
  <title>Enviar Email</title>
</head>

<body>

  <?php
  // Inicialize as variáveis
  $to = "";
  $para_nome = "";
  $para_email = "";
  $from_nome = "";
  $from_email = "";
  $copia_nome = "";
  $copia_email = "";
  $txt = "";
  $subject = "";

  // Verifique se o formulário foi enviado
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    // Obtenha os valores dos campos do formulário
    $para_nome = $_POST["para_nome"];
    $para_email = $_POST["para_email"];
    $from_nome = $_POST["from_nome"];
    $from_email = $_POST["from_email"];
    $copia_nome = $_POST["copia_nome"];
    $copia_email = $_POST["copia_email"];
    $txt = $_POST["txt"];
    $subject = $_POST["subject"];

    $to = $para_nome . " <" . $para_email . ">";

    // Crie os cabeçalhos do email (Remetente e Cópia)
    $headers = "From: " . $from_nome . " <" . $from_email . ">" . "\r\n" .
      "CC: " . $copia_nome . "<" . $copia_email . ">\n";

    // Envie o email
    mail($to, $subject, $txt, $headers);

    // Exiba uma mensagem de sucesso
    echo "<p>Email enviado com sucesso para: $to</p>";
  }
  ?>

  <h2>Enviar Email</h2>
  <section>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <label for="para_nome">Nome do Destinatário: </label>
      <input type="text" name="para_nome" value="<?php echo $para_nome; ?>">
      <br>
      <br>
      <label for="para_nome">Email do Destinatário: </label>
      <input type="text" name="para_email" value="<?php echo $para_email; ?>">
      <br>
      <br>
      <label for="para_nome">Nome do Remetente: </label>
      <input type="text" name="from_nome" value="<?php echo $from_nome; ?>">
      <br>
      <br>
      <label for="para_nome">Email do Remetente: </label>
      <input type="text" name="from_email" value="<?php echo $from_email; ?>">
      <br>
      <br>
      <label for="para_nome">Nome da Cópia: </label>
      <input type="text" name="copia_nome" value="<?php echo $copia_nome; ?>">
      <br>
      <br>
      <label for="para_nome">Email da Cópia: </label>
      <input type="text" name="copia_email" value="<?php echo $copia_email; ?>">
      <br>
      <br>
      <label for="para_nome">Assunto: </label>
      <input type="text" name="subject" value="<?php echo $subject; ?>">
      <br>
      <br>
      <label for="para_nome">Mensagem: </label>
      <textarea name="txt" rows="5" cols="40"><?php echo $txt; ?></textarea>
      <br>
      <br>
      <input type="submit" name="submit" value="Enviar Email">
    </form>
  </section>
</body>

</html>