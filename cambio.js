function cambiarTabla() {
    var selector = document.getElementById("tablaSelector");
    var tablaSeleccionada = selector.value;

    var numTablas = 5;
    
    for (var i = 1; i <= numTablas; i++) {
        var tabla = document.getElementById("tabla" + i);
        if (tablaSeleccionada === "tabla" + i) {
            tabla.style.display = "table";
        } else {
            tabla.style.display = "none";
        }
    }
    document.getElementById("tablaSeleccionada").value = tablaSeleccionada;
}

function cambiarTabla2() {
    var selector2 = document.getElementById("tablaSelector2");
    var tablaSeleccionada2 = selector2.value;

    var numTablas2 = 10;

    for (var j = 1; j <= numTablas2; j++) {
        var tabla2 = document.getElementById("tablaa" + j);
        if (tablaSeleccionada2 === "tablaa" + j) {
            tabla2.style.display = "table";
        } else {
            tabla2.style.display = "none";
        }
    }
}

function cambiarFormulario() {
    const tablaSelector = document.getElementById('tablaSelector');
    const forms = document.querySelectorAll('.formulario');

    forms.forEach(form => {
      if (form.id === tablaSelector.value) {
        form.classList.remove('hidden');
      } else {
        form.classList.add('hidden');
      }
    });
}

function cambiarTodo() {
    var selector = document.getElementById("tablaSelector");
    var tablaSeleccionada = selector.value;

    var numTablas = 5;
    var forms = document.querySelectorAll('.formulario');

    for (var i = 1; i <= numTablas; i++) {
        var tabla = document.getElementById("tabla" + i);
        var form = document.getElementById("formTabla" + i);

        if (tablaSeleccionada === "tabla" + i) {
            tabla.style.display = "table";

            forms.forEach(form => {
                if (form.id === "formTabla" + i) {
                    form.classList.remove('hidden');
                } else {
                    form.classList.add('hidden');
                }
            });
        } else {
            tabla.style.display = "none";

            if (form) {
                form.classList.add('hidden');
            }
        }
    }
    document.getElementById("tablaSeleccionada").value = tablaSeleccionada;
}