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

  public function obtenerExperiencias(): array
  {
    try {
      $sp = parent::execQ("SELECT * FROM experiencias");
      $sp->execute();
      return $sp->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function obtenerEventoPorId($params = []): array
  {
    try {
      $sp = parent::execQ("SELECT * FROM eventos where idevento = ?");
      $sp->execute(array(
        $params['idevento']
      ));
      return $sp->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function obtenerExperienciaPorId($params = []): array
  {
    try {
      $sp = parent::execQ("SELECT * FROM experiencias where idexperiencia = ?");
      $sp->execute(array(
        $params['idexperiencia']
      ));
      return $sp->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function obtenerEventosPresentados(): array
  {
    try {
      $sp = parent::execQ("select * from eventos WHERE presentado = 0");
      $sp->execute();
      return $sp->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function obtenerExperienciasPresentados(): array
  {
    try {
      $sp = parent::execQ("select * from experiencias WHERE presentado = 0");
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

  public function registrarExperiencia($params = []): bool
  {
    try {
      $pdo = parent::getConexion();
      $cmd = $pdo->prepare('INSERT INTO experiencias (imagen, presentado) values (?,?)');
      $rpt = $cmd->execute(
        array(
          $params['imagen'],
          $params['presentado'],
        )
      );
      return $rpt;
    } catch (Exception $e) {
      error_log("Error: " . $e->getMessage());
      return -1;
    }
  }

  public function actualizarEvento($params = []): bool
  {
    try {
      $pdo = parent::getConexion();
      $cmd = $pdo->prepare('CALL sp_actualizar_evento(?,?,?,?)');
      $rpt = $cmd->execute(
        array(
          $params['idevento'],
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
  public function actualizarExperiencia($params = []): bool
  {
    try {
      $pdo = parent::getConexion();
      $cmd = $pdo->prepare('CALL sp_actualizar_experiencia(?,?,?)');
      $rpt = $cmd->execute(
        array(
          $params['idexperiencia'],
          $params['imagen'],
          $params['presentado'],
        )
      );
      return $rpt;
    } catch (Exception $e) {
      error_log("Error: " . $e->getMessage());
      return -1;
    }
  }

  public function eliminarEvento($params = []): bool
  {
    try {
      $pdo = parent::getConexion();
      $cmd = $pdo->prepare('DELETE FROM eventos where idevento = ?');
      $rpt = $cmd->execute(
        array(
          $params['idevento']
        )
      );
      return $rpt;
    } catch (Exception $e) {
      error_log("Error: " . $e->getMessage());
      return -1;
    }
  }

  public function eliminarExperiencia($params = []): bool
  {
    try {
      $pdo = parent::getConexion();
      $cmd = $pdo->prepare('DELETE FROM experiencias where idexperiencia = ?');
      $rpt = $cmd->execute(
        array(
          $params['idexperiencia']
        )
      );
      return $rpt;
    } catch (Exception $e) {
      error_log("Error: " . $e->getMessage());
      return -1;
    }
  }

  public function actualizarPresentadoEvento($params = []): bool
  {
    try {
      $pdo = parent::getConexion();
      $cmd = $pdo->prepare('CALL sp_actualizar_presentado (?,?)');
      $rpt = $cmd->execute(
        array(
          $params['idevento'],
          $params['presentado']
        )
      );
      return $rpt;
    } catch (Exception $e) {
      error_log("Error: " . $e->getMessage());
      return -1;
    }
  }

  public function actualizarPresentadoExperiencia($params = []): bool
  {
    try {
      $pdo = parent::getConexion();
      $cmd = $pdo->prepare('CALL sp_actualizar_presentado_experiencia (?,?)');
      $rpt = $cmd->execute(
        array(
          $params['idexperiencia'],
          $params['presentado']
        )
      );
      return $rpt;
    } catch (Exception $e) {
      error_log("Error: " . $e->getMessage());
      return -1;
    }
  }
}
