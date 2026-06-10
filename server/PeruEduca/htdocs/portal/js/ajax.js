function objetoAjax(){
  var xmlhttp=false;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
  }

  if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}

function MostrarRecurso(datos){
  var key = document.getElementById('key').value;
  //donde se mostrara los registros
  document.getElementById('resultado').style.height='100%';
  divResultado = document.getElementById('resultado');
  
  ajax=objetoAjax();
  //uso del método GET
  ajax.open("GET", datos);
  //divResultado.innerHTML = '<img src="../img/ajax-loader.gif" align="center" />';
  ajax.onreadystatechange=function() {
    if (ajax.readyState==1) {
      //divResultado.style.background = "url('../img/ajax-loader.gif') center center no-repeat";
      divResultado.innerHTML = '<p align="center"><img src="../img/ajax-loader.gif" /> </p>'
    }
    else if (ajax.readyState==4) {
      //mostrar resultados en esta capa
      document.getElementById('resultado').style.height='100%';
      divResultado.innerHTML = ajax.responseText;

    }
  }
  //como usamos el metodo GET
  //colocamos null ya que enviamos los datos
  ajax.send(null)
}


function BuscarRecurso(datos){
  var key = document.getElementById('key').value;
  //donde se mostrara los registros
  document.getElementById('resultado').style.height='100%';
  divResultado = document.getElementById('resultado');
  
  ajax=objetoAjax();
  //uso del método GET
  ajax.open("GET", datos+"?key="+key+"&m=buscar");

  //divResultado.innerHTML = '<img src="../img/ajax-loader.gif" align="center" />';
  ajax.onreadystatechange=function() {
    if (ajax.readyState==1) {
      //divResultado.style.background = "url('../img/ajax-loader.gif') center center no-repeat";
      divResultado.innerHTML = '<p align="center"><img src="../img/ajax-loader.gif" /> </p>'
    }
    else if (ajax.readyState==4) {
      //mostrar resultados en esta capa
      document.getElementById('resultado').style.height='100%';
      divResultado.innerHTML = ajax.responseText;

    }
  }

  //como usamos el metodo GET
  //colocamos null ya que enviamos los datos
  ajax.send(null)
}

