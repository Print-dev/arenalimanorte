<?php

require_once 'ExecQuery.php';

class Usuario extends ExecQuery
{
  public function login($params = []): array
  {
    try {
      $sp = parent::execQ("CALL sp_user_login(?)");
      $sp->execute(array($params['nom_usuario']));
      return $sp->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  /* public function registrarUsuario($params = []): int
  {
    try {
      $pdo = parent::getConexion();
      $cmd = $pdo->prepare('CALL sp_registrar_usuario(@idusuario,?,?,?,?,?,?,?,?,?)');
      $cmd->execute(
        array(
          $params['idsucursal'],
          $params['idpersona'],
          $params['nom_usuario'],
          $params['claveacceso'],
          $params['color'],
          $params['porcentaje'],
          $params['marcaagua'],
          $params['firma'],
          //$params['esRepresentante'],
          $params['idnivelacceso'],
        )
      );

      $respuesta = $pdo->query("SELECT @idusuario AS idusuario")->fetch(PDO::FETCH_ASSOC);
      return $respuesta['idusuario'];
    } catch (Exception $e) {
      error_log("Error: " . $e->getMessage());
      return -1;
    }
  } */

  /* public function obtenerUsuarioPorId($params = []): array
  {
    try {
      $cmd = parent::execQ("CALL sp_obtener_usuario_por_id(?)");
      $cmd->execute(
        array($params['idusuario'])
      );
      return $cmd->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      error_log("Error: " . $e->getMessage());
      return [];
    }
  } */

  

  /* public function obtenerMarcaAguaPorUsuario($params = []): array // mas que todo para obtener ARTISTAS, ULTIMA UPDATE: USARSE PARA FILTRAR SU AGENDA
  {
    try {
      $cmd = parent::execQ("SELECT marcaagua from usuarios where idusuario = ?");
      $cmd->execute(array($params['idusuario']));
      return $cmd->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  } */
}
