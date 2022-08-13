function cargar() {
  var tabla = $.ajax({
    url: "../php/modelo.php",
    method:'POST',
    dataType: "text",
    data: { tb },
    async: false,
  }).responseText;
  document.getElementById("miTabla").innerHTML = tabla;
}
