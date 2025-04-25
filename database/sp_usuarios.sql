USE arenalimanorte;

DROP PROCEDURE IF EXISTS sp_user_login;
DELIMITER $$
CREATE PROCEDURE sp_user_login
(
	IN _usuario VARCHAR(30)
)
BEGIN
	SELECT
		US.idusuario,
        US.nom_usuario,
        US.claveacceso,
        US.estado
		FROM usuarios US
        WHERE US.nom_usuario = _usuario;
END $$

CALL sp_user_login('royer');
