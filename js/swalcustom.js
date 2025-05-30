/**
 * Muestra una pregunta basado en la librería SweetAlert
 * @param {string} pregunta Describa la pregunta que quiere mostrar
 * @param {string} modulo Módulo de la aplicación desde donde se genera (créditos, clientes, ventas, etc.)
 * @returns {boolean} Retorna un valor lógico basado en una promesa
 */
async function ask(pregunta = ``, modulo = ``) {
  const respuesta = await Swal.fire({
    title: pregunta,
    text: modulo,
    imageUrl: `${hostOnlyJs}/images/vega-p-logo.png`,
    imageWidth: 100,
    showCancelButton: true,
    confirmButtonText: 'Aceptar',
    cancelButtonText: 'Cancelar',
    confirmButtonColor: '#3498db',
    footer: 'Vega Producciones Beta Version 1.0',
  });

  return respuesta.isConfirmed;
}

function showHtmlInfo({
  title = "<strong>Información</strong>",
  html = "",
  icon = "info",
  footer = "",
  timer = null,
  showCloseButton = true
} = {}) {
  Swal.fire({
    title,
    icon,
    html,
    footer,
    showCloseButton,
    showConfirmButton: false,
    timer
  });
}


//Implementarlo así:
/*
document.querySelector("#btn1").addEventListener("click", async () => {
  if (await ask("¿Por qué siempre pierde la selección?")){
    console.log("Porque no hay inversión")
  }
})
*/

//Puede ser de 4 tipos: INFO, WARNING, ERROR, SUCCESS
function showToast(message = ``, type = `INFO`, duration = 2500, url = null) {
  const bgColor = {
    'INFO': '#22a6b3',
    'WARNING': '#f9ca24',
    'SUCCESS': '#6ab04c',
    'ERROR': '#eb4d4b'
  };

  Swal.fire({
    toast: true,
    icon: type.toLowerCase(),
    iconColor: 'white',
    color: 'white',
    text: message,
    timer: duration,
    timerProgressBar: true,
    position: 'top-end',
    showConfirmButton: false,
    background: bgColor[type]
  }).then(() => {
    if (url != null) {
      window.location.href = url;
    }
  });
}