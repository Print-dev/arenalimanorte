USE arenalimanorte;

DROP PROCEDURE IF EXISTS sp_actualizar_experiencia;
DELIMITER $$
CREATE PROCEDURE sp_actualizar_experiencia
(
	IN _idexperiencia INT,
	IN _imagen varchar(100),
    IN _presentado TINYINT
)
BEGIN
	UPDATE experiencias SET
    imagen = _imagen,
    presentado = _presentado
    where idexperiencia = _idexperiencia;
END $$

DROP PROCEDURE IF EXISTS sp_actualizar_presentado_experiencia;
DELIMITER $$
CREATE PROCEDURE sp_actualizar_presentado_experiencia
(
	IN _idexperiencia INT,
	IN _presentado tinyint
)
BEGIN
	UPDATE experiencias SET
    presentado = _presentado
    where idexperiencia = _idexperiencia;
END $$
