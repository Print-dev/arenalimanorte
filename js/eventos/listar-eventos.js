document.addEventListener("DOMContentLoaded", async () => {
    let myTable = null;

    // MODALES
    let modalVerificarSunat

    function $q(object = null) {
        return document.querySelector(object);
    }

    function $all(object = null) {
        return document.querySelectorAll(object);
    }

    async function getDatos(link, params) {
        let data = await fetch(`${link}?${params}`);
        return data.json();
    }

    // **************************************** OBTENER DATA *****************************************************

    /*     async function obtenerDetallesComprobante(idcomprobante) {
            const params = new URLSearchParams();
            params.append("operation", "obtenerDetallesComprobante");
            params.append("idcomprobante", idcomprobante);
            const data = await getDatos(`${host}comprobante.controller.php`, params);
            return data
        }
     */
    // ***************************** REGISTROS DE DATA **************************************************************

    /* async function descargarXML(archivo) {
        const params = new URLSearchParams();
        params.append("operation", "descargarXML");
        params.append("archivo", archivo);
        const data = await getDatos(`${host}comprobante.controller.php`, params);
        return data
    } */

    /*   async function descargarXML(archivo) {
          const comprobante = new FormData();
          comprobante.append("operation", "descargarXML");
          comprobante.append("archivo", archivo)
  
          const fcomprobante = await fetch(`${host}comprobante.controller.php`, {
              method: "POST",
              body: comprobante,
          });
          const rcomprobante = await fcomprobante.json();
          //console.log("rivatico . ", rcomprobante)
          return rcomprobante;
      }
   */

    // ******************************* CONFIGURACION DE TABLA *******************************************************

    function createTable(data) {
        let rows = $("#tb-body-evento").find("tr");
        ////console.log(rows.length);
        if (data.length > 0) {
            if (myTable) {
                if (rows.length > 0) {
                    myTable.clear().rows.add(rows).draw();
                } else if (rows.length === 1) {
                    myTable.clear().draw(); // Limpia la tabla si no hay filas.
                }
            } else {
                // Inicializa DataTable si no ha sido inicializado antes
                myTable = $("#table-eventos").DataTable({
                    paging: true,
                    searching: false,
                    lengthMenu: [5, 10, 15, 20],
                    pageLength: 5,
                    language: {
                        lengthMenu: "Mostrar _MENU_ filas por página",
                        paginate: {
                            previous: "Anterior",
                            next: "Siguiente",
                        },
                        search: "Buscar:",
                        info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                        emptyTable: "No se encontraron registros",
                    },
                });
                // if (rows.length > 0) {
                //   myTable.rows.add(rows).draw(); // Si hay filas, agrégalas.
                // }
            }
        }
    }


    (async () => {
        await dataFilters();
    })();


    /* changeByFilters()

    function changeByFilters() {
        const filters = $all(".filter");
        $q("#table-eventos tbody").innerHTML = "";
        filters.forEach((x) => {
            x.addEventListener("change", async () => {
                await dataFilters();
            });
            if (x.id === "numerocomprobante") {
                x.addEventListener("input", async () => {
                    await dataFilters();
                });
            }
            if (x.id === "fechaemision") {
                x.addEventListener("change", async () => {
                    await dataFilters();
                });
            }
            if (x.id === "horaemision") {
                x.addEventListener("change", async (e) => {
                    console.log(e.target.value);
                    await dataFilters();
                });
            }
        });
    } */

    //chargerEventsButton();

    async function dataFilters() {
        const params = new URLSearchParams();
        params.append("operation", "obtenerEventos");
        //alert("asdasdd")
        const data = await getDatos(`${host}complemento.controller.php`, params);
        //console.log(data);
        console.log("data -> ", data)
        $q("#table-eventos tbody").innerHTML = "";

        if (data.length === 0) {
            $q("#table-eventos tbody").innerHTML = `
              <tr>
                <td colspan="9">Sin resultados</td>
              </tr>
              `;
        }

        data.forEach((x, i) => {
            $q("#table-eventos tbody").innerHTML += `
              <tr>
                <td>${x.idevento}</td>
                <td>${x.link}</td>
                <td>
                    <select name="tipofiltroedicion" id="tipofiltroedicion" class="form-select" required>
                            <option value="1" ${x.presentado == 0 ? "" : "Selected"}>Si</option>
                            <option value="2" ${x.presentado == 0 ? "" : "Selected"}>No</option>
                        </select>
                </td>
                <td>                
                    <i class="bi bi-pen btn-editar border-0 bg-white" style="cursor: pointer;" data-idcomprobante=${x.idcomprobante} title="Descargar PDF Comprobante"></i>
                    <i class="bi bi-trash btn-eliminar border-0 bg-white" style="cursor: pointer;" data-idcomprobante=${x.idcomprobante} title="Descargar PDF Comprobante"></i>                    
                </td>
              </tr>
              `;
        });
        //disabledBtnArea();
        createTable(data);

    }

    function createTable(data) {
        let rows = $("#tb-body-evento").find("tr");
        ////console.log(rows.length);
        if (data.length > 0) {
            if (myTable) {
                if (rows.length > 0) {
                    myTable.clear().rows.add(rows).draw();
                } else if (rows.length === 1) {
                    myTable.clear().draw(); // Limpia la tabla si no hay filas.
                }
            } else {
                // Inicializa DataTable si no ha sido inicializado antes
                myTable = $("#table-eventos").DataTable({
                    paging: true,
                    searching: false,
                    lengthMenu: [5, 10, 15, 20],
                    pageLength: 5,
                    language: {
                        lengthMenu: "Mostrar _MENU_ filas por página",
                        paginate: {
                            previous: "Anterior",
                            next: "Siguiente",
                        },
                        search: "Buscar:",
                        info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                        emptyTable: "No se encontraron registros",
                    },
                });
                // if (rows.length > 0) {
                //   myTable.rows.add(rows).draw(); // Si hay filas, agrégalas.
                // }
            }
        }
    }

    /**
  * Carga los botones que estan en la tabla
  */
    function chargerEventsButton() {
        document.querySelector(".table-responsive").addEventListener("click", async (e) => {
            if (e.target) {
                idactivo = 0;
                if (e.target.classList.contains("btn-editar")) {
                    btnEditar(e);
                }
                if (e.target.classList.contains("btn-eliminar")) {

                    btnEliminar(e);
                }
                /* if (e.target.classList.contains("btn-xml-comprobante")) {
                    buttonXMLComprobante(e);
                }
                if (e.target.classList.contains("btn-cdr-comprobante")) {
                    buttonCDRComprobante(e);
                } */
                /* if (e.target.classList.contains("btn-cuotas-comprobante")) {
                    buttonCuotaComprobante(e);
                }
 */
                /* if (e.target.classList.contains("btn-habilitar")) {
                    buttonHabilitar(e);
                } */
                /* if(e.target.classList.contains("btn-info-baja")){
                  await showReporte(e);
                }
                if(e.target.classList.contains("show-espec")){//abre el sidebar
                  await btnSBUpdateActivo(e);
                }
                if (e.target.classList.contains("change-area")) {
                  buttonCambiarArea(e);
                } */
            }
        });
    }

    async function registrarEvento(imagen, link, presentado) {
        const evento = new FormData();
        evento.append("operation", "registrarEvento");
        evento.append("imagen", imagen); // id usuario recibe la notificacion , ahorita es uno pero luego se cambiara a que sean elegibles
        evento.append("link", link);
        evento.append("presentado", presentado);

        const fevento = await fetch(`${host}complemento.controller.php`, {
            method: "POST",
            body: evento,
        });
        const revento = await fevento.json();
        return revento;
    }

    $q(".btnGuardarEvento").addEventListener("click", async (e) => {
        e.preventDefault()
        const imagenInput = $q("#imagenEvento");
        const link = $q("#altoketicket").value.trim();
        const presentado = $q("#presentado").value;

        const file = imagenInput.files[0];

        if (!file) {
            alert("Por favor selecciona una imagen.");
            return;
        }
        const rpt = await registrarEvento(file, link, presentado)
        console.log("rpt -> ", rpt);

    })
    /* function btnEditar(e) {
        
    } */

    /* async function btnVerificarSunat(e) {
        idcomprobante = e.target.getAttribute("data-idcomprobante");

        const detallesComprobante = await obtenerDetallesComprobante(idcomprobante)
        console.log("detalles comprobante -> ", detallesComprobante);

        showHtmlInfo({
            icon: "success",
            title: "<strong>Detalles de la factura</strong>",
            html: `
            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center">
                    <span>Factura</span>
                    <span class="badge bg-primary p-2">F001</span>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <i class="fa-solid fa-check me-2 text-success"></i>
                    <span>Enviado a SUNAT</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <span>Estado</span>
                    <span class="badge bg-primary p-2">${detallesComprobante[0]?.estado}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <span>Codigo</span>
                    <span class="badge bg-primary p-2">0</span>                    
                </div>
                <div class="row text-center mt-4">
                    <span>${detallesComprobante[0]?.info}</span>
                </div>
            </div>
            `,
            icon: "success",
            footer: "Vega Producciones V.1.0"
        });

    } */

    async function buttonPDFComprobante(e) {
        idcomprobante = e.target.getAttribute("data-idcomprobante");
        window.open(
            `${hostOnly}/generators/generadores_pdf/nota_de_venta/notadeventa.php?idcomprobante=${idcomprobante}&idtipodoc=02`
        );
    }

    /* async function buttonXMLComprobante(e) {
        idcomprobante = e.target.getAttribute("data-idcomprobante");
        serie = e.target.getAttribute("data-serie");
        correlativo = e.target.getAttribute("data-correlativo");
        //const url = `${hostOnly}/descargar_xml.php?archivo=${encodeURIComponent(nombreArchivo)}`;
        console.log("descargarXML -> ");
        console.log(`${rucEmpresa}-01-${serie}-${correlativo}`);
        const nombreArchivo = `${rucEmpresa}-01-${serie}-${correlativo}`;

        // Redirecciona al script PHP que hace la descarga
        window.open(`${hostOnly}/controllers/comprobante.controller.php?operation=descargarXML&archivo=${encodeURIComponent(nombreArchivo)}`, '_blank');
    } */

    /* async function buttonCDRComprobante(e) {
        idcomprobante = e.target.getAttribute("data-idcomprobante");
        serie = e.target.getAttribute("data-serie");
        correlativo = e.target.getAttribute("data-correlativo");
        //const url = `${hostOnly}/descargar_xml.php?archivo=${encodeURIComponent(nombreArchivo)}`;
        console.log("descargarXML -> ");
        console.log(`${rucEmpresa}-01-${serie}-${correlativo}`);
        const nombreArchivo = `R-${rucEmpresa}-01-${serie}-${correlativo}`;

        // Redirecciona al script PHP que hace la descarga
        window.open(`${hostOnly}/controllers/comprobante.controller.php?operation=descargarCDR&archivo=${encodeURIComponent(nombreArchivo)}`, '_blank');
    } */

    /*     async function buttonCuotaComprobante(e) {
            idcomprobante = e.target.getAttribute("data-idcomprobante");
            window.location.clear()
            window.localStorage.setItem("idcomprobante", idcomprobante);
            window.location.href = `${hostOnly}/views/contabilidad/cuotas`;	
        } */
})