<meta charset="utf-8">
<?php
$email = $_GET["email"];
$tabla1 = $_GET["tabla1"];
$tabla2 = $_GET["tabla2"];
$tabla3 = $_GET["tabla3"];

if (isset($email)) {
  if ($email == "javier") {
    $para = "javier.escudero@emerson.com";
    //$para = "daniel.hernandez@emerson.com";
  } elseif ($email == "omar") {
    $para = "omar.guerrero@emerson.com";
    //$para = "luis.aguilar@emerson.com";
  } elseif ($email == 'sergio') {
    $para = "sergio.morales@emerson.com";
    //$para = "nerit.paz@emerson.com";
  }

  $titulo = "PRUEBAS EMAIL - REPORTE DE EMBARQUES";

  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset="utf-8"' . "\r\n";
  $cabeceras .= 'From: '. $para . "\r\n";

  $mensaje = '
    <html>
      <head>
        <title>REPORTE DE EMBARQUES</title>
      </head>
      <body>
      <table style="border: 1px solid black;">
        <thead style="background-color: #00cc99; border: 1px solid black;">
          <tr style="border: 1px solid black;">
            <th style="border: 1px solid black;">WO</th>
            <th style="border: 1px solid black;">Piezas</th>
          </tr>
        </thead>
        <tbody style="border: 1px solid black;">';
            $mensaje .= $tabla1;
          $mensaje .= '
        </tbody>
      </table><br><br>
      <table style="border: 1px solid black;">
        <thead style="background-color: #00cc99; border: 1px solid black;">
          <tr style="border: 1px solid black;">
            <th style="border: 1px solid black;">Pallets</th>
            <th style="border: 1px solid black;">Cajas</th>
            <th style="border: 1px solid black;">Piezas</th>
          </tr>
        </thead>
        <tbody style="border: 1px solid black;">';
            $mensaje .= $tabla2;
          $mensaje .= '
        </tbody>
      </table><br><br>

      <table style="border: 1px solid black;">
        <thead style="background-color: #00cc99; border: 1px solid black;">
          <tr style="border: 1px solid black;">
            <th style="border: 1px solid black;">Pallet</th>
            <th style="border: 1px solid black;">No. Parte</th>
            <th style="border: 1px solid black;">Cajas</th>
            <th style="border: 1px solid black;">Cantidad por Caja</th>
            <th style="border: 1px solid black;">Cantidad Total</th>
          </tr>
        </thead>
        <tbody style="border: 1px solid black;">';
            $mensaje .= $tabla3;
          $mensaje .= '
        </tbody>
      </table>
      </body>
    </html>';

  if(mail($para, $titulo, $mensaje, $cabeceras)) {
    echo "<script>alert('Correo Enviado');</script>";
    echo "<script>window.location.href='index.php'</script>";
  } else {
    echo "<script>alert('ERROR: No se envio el correo');</script>";
  }
}

// Varios destinatarios
/*$para  = 'javier.escudero@emerson.com' . ', '; // atención a la coma
$para .= 'j.escudero.g@hotmail.com';

// título
$título = 'REPORTE DE EMBARQUES';

// mensaje
$mensaje = '
<html>
<head>
  <title>REPORTE DE EMBARQUES</title>
</head>
<body>

  <table style="border: 1px solid black;">
    <thead style="background-color: #00cc99; border: 1px solid black;">
      <tr style="border: 1px solid black;">
        <th style="border: 1px solid black;">WO</th>
        <th style="border: 1px solid black;">Piezas</th>
      </tr>
    </thead>
    <tbody style="border: 1px solid black;">
      <tr style="border: 1px solid black;">
        <td>Algo</td>
      </tr>
    </tbody>
  </table><br><br>

  <table style="border: 1px solid black;">
    <thead style="background-color: #00cc99; border: 1px solid black;">
      <tr style="border: 1px solid black;">
        <th style="border: 1px solid black;">Pallets</th>
        <th style="border: 1px solid black;">Cajas</th>
        <th style="border: 1px solid black;">Piezas</th>
      </tr>
    </thead>
    <tbody style="border: 1px solid black;">
      <tr style="border: 1px solid black;">
        <td>Algo</td>
      </tr>
    </tbody>
  </table><br><br>

  <table style="border: 1px solid black;">
    <thead style="background-color: #00cc99; border: 1px solid black;">
      <tr style="border: 1px solid black;">
        <th style="border: 1px solid black;">Pallet</th>
        <th style="border: 1px solid black;">No. Parte</th>
        <th style="border: 1px solid black;">Cajas</th>
        <th style="border: 1px solid black;">Cantidad por Caja</th>
        <th style="border: 1px solid black;">Cantidad Total</th>
      </tr>
    </thead>
    <tbody style="border: 1px solid black;">
      <tr style="border: 1px solid black;">
        <td>Algo</td>
      </tr>
    </tbody>
  </table>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset="utf-8"' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: javier.escudero@emerson.com, j.escudero.g@hotmail.com' . "\r\n";
$cabeceras .= 'From: javier.escudero@emerson.com' . "\r\n";
$cabeceras .= 'Cc: javier.escudero@emerson.com' . "\r\n";
$cabeceras .= 'Bcc: j.escudero.g@hotmail.com' . "\r\n";

// Enviarlo
if(mail($para, $título, $mensaje, $cabeceras)) {
  echo "<script>alert('Correo Enviado');</script>";
  echo "<script>window.location.href='index.php'</script>";
} else {
  echo "<script>alert('ERROR: No se envio el correo');</script>";
}*/

?>
