<meta charset="utf-8">
<?php
$email = $_GET["email"];
$numero = count($_GET);
$tags = array_keys($_GET);
$valores = array_values($_GET);
print_r($_GET);

for($i=0; $i<$numero; $i++){
  $tags[$i] = $valores[$i];
  //echo "Tag= " . $tags[$i] . " Value= " . $valores[$i] . "<br>";
}

echo "\n\n# variables recibidas = ".$numero;
foreach ($_GET as $key => $value) {
  if ($key == 'wo_1') {
    echo "Valor = " . $value;
    /*$mensaje = '
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
  ';*/
  echo $mensaje;
  } else {
    
  }
}

if (isset($email)) {
  if ($email == "javier") {
    echo "\njavier.escudero@emerson.com<br>";
    echo $numero . "<br>";
    //echo $tags[0] + '<br>';
  } elseif ($email == "omar") {
    echo "omar.guerrero@emerson.com";
  } elseif ($email == 'sergio') {
    echo "sergio.morales@emerson.com";
  }

  /*$titulo = 'REPORTE DE EMBARQUES'

  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset="utf-8"' . "\r\n";

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
  ';*/

  /*if(mail($para, $título, $mensaje, $cabeceras)) {
    echo "<script>alert('Correo Enviado');</script>";
    echo "<script>window.location.href='index.php'</script>";
  } else {
    echo "<script>alert('ERROR: No se envio el correo');</script>";
  }*/
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
