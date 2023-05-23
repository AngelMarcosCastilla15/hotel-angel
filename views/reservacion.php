<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../styles/base.css" />
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/reservacion.css">
</head>

<body>
  <?php include_once "../compents/sidebar.php" ?>
  <main>
    <?php include_once "../compents/haeader.php" ?>
    <h1 class="title">Reservaciones</h1>
    <table class="treservacion">
      <thead class="treservacion__head">
        <tr class="treservacion__head-row">
          <th class="treservacion__head-cell">N° habitacion</th>
          <th class="treservacion__head-cell">tipo Habitacion</th>
          <th class="treservacion__head-cell">Cliente</th>
          <th class="treservacion__head-cell">fecha ingreso</th>
          <th class="treservacion__head-cell">Dias</th>
          <th class="treservacion__head-cell">precios</th>
          <th class="treservacion__head-cell">total</th>
          <th class="treservacion__head-cell">cancelado</th>
        </tr>
      </thead>
      <tbody class="treservacion__body">
        <tr class="treservacion__body-row">
          <td class="treservacion__body-cell">1</td>
          <td class="treservacion__body-cell">Cama individual</td>
          <td class="treservacion__body-cell">Angel Marcos</td>
          <td class="treservacion__body-cell">22/05/2023</td>
          <td class="treservacion__body-cell">5</td>
          <td class="treservacion__body-cell">10.00 </td>
          <td class="treservacion__body-cell">50</td>
          <td class="treservacion__body-cell "><span class="pendiente">pendiente</span></td>
        </tr>
        <tr class="treservacion__body-row">
          <td class="treservacion__body-cell">1</td>
          <td class="treservacion__body-cell">Cama individual</td>
          <td class="treservacion__body-cell">Angel Marcos</td>
          <td class="treservacion__body-cell">22/05/2023</td>
          <td class="treservacion__body-cell">5</td>
          <td class="treservacion__body-cell">10.00 </td>
          <td class="treservacion__body-cell">50</td>
          <td class="treservacion__body-cell"><span class="cancelado">cancelado</span></td>
        </tr>
      </tbody>
    </table>
  </main>
  <script src="../js/main.js" type="module"></script>
</body>
</body>

</html>