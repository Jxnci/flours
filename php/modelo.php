<?php

function bd() {
  try {
    $con = mysqli_connect('localhost', 'root', '', 'recetas');
  } catch (Throwable $e) {
    echo $e . mysqli_error($con);
  }
  return $con;
}

function productos() {
  $sql = 'SELECT * FROM producto';
  $resultado = mysqli_query(bd(), $sql);

  while ($fila = $resultado->fetch_assoc()) {
    $productos[] = $fila;
  }
  $salida = '';
  foreach ($productos as $dt) {
    $salida .= "<tr>";
    $salida .= "<td><span class='form-control' id='" . $dt['idproducto'] . "'>" . $dt['idproducto'] . "</span></td>";
    $salida .= "<td><input type='text' class='form-control' id='" . $dt['idproducto'] . "' value='" . $dt['nombre'] . "'></td>";
    $salida .= "<td><input type='text' class='form-control' id='" . $dt['idproducto'] . "' value='" . $dt['precio'] . "'></td>";
    $salida .= "<td><input type='text' class='form-control' id='" . $dt['idproducto'] . "' value='" . $dt['fk_idcategoria'] . "'></td>";
    $salida .= "<td class='btn-group'><button class='form-control btn btn-primary' id='" . $dt['idproducto'] . "' value='" . $dt['fk_idcategoria'] . "'><i class='bi bi-pencil-square'></i></button>
                <button class='form-control btn btn-danger' id='" . $dt['idproducto'] . "' value='" . $dt['fk_idcategoria'] . "'><i class='bi bi-trash3'></i></button></td>";
    $salida .= "</tr>";
  }
  echo $salida;
}
if (isset($_POST['tb'])) {
  productos();
}
