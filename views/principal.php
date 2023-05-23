<?php
session_start();
if (!isset($_SESSION["seguridad"]) || !$_SESSION["seguridad"]["login"]) {
  header("Location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../styles/base.css" />
  <link rel="stylesheet" href="../styles/main.css" />
</head>

<body>
  <aside class="aside">
    <ul class="menu">
      <li class="menu__item">
        <a href="" class="menu_enlace">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-home">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
            <polyline points="9 22 9 12 15 12 15 22"></polyline>
          </svg> reservaciones</a>
      </li>
      <li class="menu__item">
        <a href="" class="menu_enlace">

          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-file">
            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
            <polyline points="13 2 13 9 20 9"></polyline>
          </svg>
          reportes
        </a>
      </li>
      <li class="menu__item">
        <a href="" class="menu_enlace">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-activity">
            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
          </svg>Gráficos</a>
          
      </li>
      <li class="menu__item">
        <a href="" class="menu_enlace">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-file-plus">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
            <polyline points="14 2 14 8 20 8"></polyline>
            <line x1="12" y1="18" x2="12" y2="12"></line>
            <line x1="9" y1="15" x2="15" y2="15"></line>
          </svg>
          Habitaciones
        </a>
      </li>
    </ul>
  </aside>

  <main class="main">
    mainadsadsad Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab et quaerat vel ducimus quo dolores iusto
    aut maiores. Eius corrupti officiis non blanditiis fugiat numquam, commodi nulla dolorum aut quidem.
  </main>
</body>

</html>