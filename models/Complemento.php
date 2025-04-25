<?php

require_once 'ExecQuery.php';

class Complemento extends ExecQuery
{

  public function obtenerEventos(): array
  {
    try {
      $sp = parent::execQ("SELECT * FROM eventos DESC");
      $sp->execute();
      return $sp->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function registrarEvento($params = []): bool
  {
    try {
      $pdo = parent::getConexion();
      $cmd = $pdo->prepare('INSERT INTO eventos (imagen, link, presentado) values (?,?,?)');
      $rpt = $cmd->execute(
        array(
          $params['imagen'],
          $params['link'],
          $params['presentado'],
        )
      );
      return $rpt;
      
    } catch (Exception $e) {
      error_log("Error: " . $e->getMessage());
      return -1;
    }
  }

}
