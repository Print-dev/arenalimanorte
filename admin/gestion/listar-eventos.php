<?php require_once '../header.php' ?>

<div class="container-fluid contenedor-general">
    <div class="card" style="border-color: #f2f4f7; box-shadow: 1px 1px 0px 0px rgba(0,0,0,0.11);
    -webkit-box-shadow: 1px 1px 0px 0px rgba(0,0,0,0.11);
    -moz-box-shadow: 1px 1px 0px 0px rgba(0,0,0,0.11);">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h1>Eventos</h1>
                </div>
                <div class="col-md-6 text-end contenedor-btn-nuevacaja">
                    <button class="btn btn-primary" id="btnNuevoEvento" data-bs-toggle="modal" data-bs-target="#modal-eventos">Añadir evento</button>
                </div>
            </div>
            <div class="row">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row g-0 mb-3">

                            <div class="row g-1">
                                <div class="table-responsive">
                                    <table class="table" id="table-eventos">
                                        <thead class="text-center">
                                            <tr>
                                                <th>#</th>
                                                <th>Imagen</th>
                                                <th>Evento relacionado</th>
                                                <th>Presentado</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tb-body-evento">
                                        </tbody>

                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal-eventos" tabindex="-1" aria-labelledby="modaleventos" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modaleventos">Añadir evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-evento">
                        <div class="mb-3">
                            <label for="imagenEvento" class="form-label">Imagen del evento (800x800)</label>
                            <input class="form-control" type="file" id="imagenEvento" name="imagenEvento" accept="image/*">
                        </div>

                        <div class="mb-3 text-center">
                            <img id="previewImagenEvento" src="https://blog.pdainternational.net/wp-content/uploads/2017/08/800x800-ph.jpg" alt="Previsualización" style="max-width: 100%; height: auto; border: 1px solid #ccc; padding: 5px; border-radius: 8px;">
                        </div>

                        <div class="mb-3">
                            <label for="altoketicket" class="form-label">Link evento altoketicket</label>
                            <input type="text" class="form-control" id="altoketicket" name="altoketicket" placeholder="Ingrese al link del evento de altoketicket">
                        </div>

                        <div class="mb-3">
                            <label for="presentado" class="form-label">¿Presentado?</label>
                            <select class="form-select" id="presentado" name="presentado">
                                <option value="0">Sí</option>
                                <option value="1">No</option>
                            </select>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary btnGuardarEvento">Guardar evento</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-editarevento" tabindex="-1" aria-labelledby="modaleditarevento" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modaleditarevento">Editar evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-evento">
                        <div class="mb-3">
                            <label for="imagenEventoEditar" class="form-label">Imagen del evento (800x800)</label>
                            <input class="form-control" type="file" id="imagenEventoEditar" name="imagenEventoEditar" accept="image/*">
                        </div>

                        <div class="mb-3 text-center">
                            <img id="imagenRender" src="" alt="Previsualización" style="max-width: 100%; height: auto; display: none; border: 1px solid #ccc; padding: 5px; border-radius: 8px;">
                        </div>

                        <div class="mb-3">
                            <label for="altoketicketlink" class="form-label">Link evento altoketicket</label>
                            <input type="text" class="form-control" id="altoketicketlink" name="altoketicketlink" placeholder="Ingrese al link del evento de altoketicket">
                        </div>

                        <div class="mb-3">
                            <label for="presentadoobt" class="form-label">¿Presentado?</label>
                            <select class="form-select" id="presentadoobt" name="presentadoobt">
                                <option value="0">Sí</option>
                                <option value="1">No</option>
                            </select>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary btnEditarEvento">Actualizar evento</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

    <?php require_once '../footer.php' ?>

    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="<?= $hostOnlyHeader ?>/js/eventos/listar-eventos.js"></script>

    </body>

    </html>