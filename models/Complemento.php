<?php

require_once 'ExecQuery.php';

class Complemento extends ExecQuery
{

  public function obtenerEventos(): array
  {
    try {
      $sp = parent::execQ("SELECT * FROM eventos");
      $sp->execute();
      return $sp->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function registrarComprobante($params = []): bool
  {
    try {
      $pdo = parent::getConexion();
      $cmd = $pdo->prepare('INSERT INTO eventos (imagen, link) values (?,?)');
      $rpt = $cmd->execute(
        array(
          $params['imagen'],
          $params['link'],
        )
      );
      return $rpt;
      
    } catch (Exception $e) {
      error_log("Error: " . $e->getMessage());
      return -1;
    }
  }

}
