<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calculadora Acheron</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Calculadora de Acheron</h1>

    <form method="post" class="calculadora">
      <input type="number" name="num1" placeholder="Número 1" required>

      <select name="operador">
        <option value="suma">suma</option>
        <option value="resta">resta</option>
        <option value="multiplicacion">multiplicacion</option>
        <option value="division">division</option>
      </select>

      <input type="number" name="num2" placeholder="Número 2" required>

      <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $operador = $_POST["operador"];
      $resultado = "";

      switch ($operador) {
        case "suma":
          $resultado = $num1 + $num2;
          break;
        case "resta":
          $resultado = $num1 - $num2;
          break;
        case "multiplicacion":
          $resultado = $num1 * $num2;
          break;
        case "division":
          $resultado = ($num2 != 0) ? $num1 / $num2 : "Error: División por cero";
          break;
        default:
          $resultado = "Operación no válida";
      }

      echo "<p class='resultado'>Resultado: <strong>$resultado</strong></p>";
    }
    ?>
  </div>
</body>
</html>
