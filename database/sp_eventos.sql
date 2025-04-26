USE arenalimanorte;

DROP PROCEDURE IF EXISTS sp_actualizar_presentado;
DELIMITER $$
CREATE PROCEDURE sp_actualizar_presentado
(
	IN _idevento INT,
	IN _presentado tinyint
)
BEGIN
	UPDATE eventos SET
    presentado = _presentado
    where idevento = _idevento;
END $$

-- CALL sp_actualizar_presentado (1, 0	); 
-- 0: si. 1: no
select * from eventos WHERE presentado = 0
DELETE FROM eventos where idevento = 2;
DROP PROCEDURE IF EXISTS sp_actualizar_evento;
DELIMITER $$
CREATE PROCEDURE sp_actualizar_evento
(
	IN _idevento INT,
	IN _imagen varchar(100),
    IN _link varchar(120),
    IN _presentado tinyint
)
BEGIN
	UPDATE eventos SET
    imagen = _imagen,
    link = _link,
    presentado = _presentado
    where idevento = _idevento;
END $$



