<?php
function all($table, $fields = '*')
{
  $connect = connect();

  $query = $connect->query("SELECT {$fields} FROM {$table}");
  return $query->fetchAll();
  try {
  } catch (PDOException $e) {
    var_dump($e->getMessage());
  }
} // all

function findBy($table, $field, $value, $fields = '*')
{
  try {
    $connect = connect();

    $prepare = $connect->prepare("SELECT {$fields} FROM {$table} WHERE {$field} = :{$field}");
    $prepare->execute([
      $field => $value
    ]);

    return $prepare->fetch();
  } catch (PDOException $e) {
    var_dump($e->getMessage());
  }
}
