var e = 0;
var digitos = " 0123456789";
var vocales = " AEIOUX";
var letras = " ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var consonantes = " BCDFGHJKLMNPQRSTVWXYZ";
var sexo = " HM";
var lyn = " ABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890";

  $("#curp").on("input", function () {
    var p = "XVXX999999SXXCCC??";
    var l = p.length;
    var v = $(this).val().toUpperCase();
    var m = v.length;
    var oid = 1;
    var h = "CURP";
    var c = "A";
    var exe = 0;

    $(this).val(v);
    e = 0;

    if (v.charAt(0) != "*") {
      for (i = 0; i < m; i++) {
        c = "" + v.charAt(i);
        q = p.charAt(i);
        if (q == "?" && lyn.indexOf(c) < 1) {
          $("#btn-confirma").prop("disabled", true);
          $("#dato" + oid).html(
            "<p class='txt_brown'>La posición " +
              (i + 1) +
              " debe ser una letra o dígito (0-9)</p>"
          );
          i = l + 1;
          if (exe == 0) e = e + 1;
        }
        if (q == "X" && letras.indexOf(c) < 1) {
          $("#btn-confirma").prop("disabled", true);
          $("#dato" + oid).html(
            "<p class='txt_brown'>La posición " +
              (i + 1) +
              " debe ser una letra</p>"
          );
          i = l + 1;
          if (exe == 0) e = e + 1;
        }
        if (q == "V" && vocales.indexOf(c) < 1) {
          $("#btn-confirma").prop("disabled", true);
          $("#dato" + oid).html(
            "<p class='txt_brown'>La posición " +
              (i + 1) +
              " debe ser una vocal</p>"
          );
          i = l + 1;
          if (exe == 0) e = e + 1;
        }
        if (q == "C" && consonantes.indexOf(c) < 1) {
          $("#btn-confirma").prop("disabled", true);
          $("#dato" + oid).html(
            "<p class='txt_brown'>La posición " +
              (i + 1) +
              " debe ser una consonante</p>"
          );
          i = l + 1;
          if (exe == 0) e = e + 1;
        }
        if (q == "9" && digitos.indexOf(c) < 1) {
          $("#btn-confirma").prop("disabled", true);
          $("#dato" + oid).html(
            "<p class='txt_brown'>La posición " +
              (i + 1) +
              " debe ser un número (0-9)</p>"
          );
          i = l + 1;
          if (exe == 0) e = e + 1;
        }
        if (q == "S" && sexo.indexOf(c) < 1) {
          $("#btn-confirma").prop("disabled", true);
          $("#dato" + oid).html(
            "<p class='txt_brown'>La posición " +
              (i + 1) +
              " debe ser H(ombre) o M(ujer)</p>"
          );
          i = l + 1;
          if (exe == 0) e = e + 1;
        }
      }
    } else {
      i = v.length;
    }

    if (m != l && i == m) {
      $("#btn-confirma").prop("disabled", true);
      $("#dato" + oid).html(
        "<p class='txt_brown'>Deben ser " + l + " posiciones</p>"
      );
      if (exe == 0) e = e + 1;
    }
    if (e < 1) {
      $("#dato1").html("");
    }
  });

