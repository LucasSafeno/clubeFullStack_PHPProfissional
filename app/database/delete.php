<?php
function delete(string $table, array $where)
{
  $connect = connect();

  if (!isArrayAssociative($where)) {
    throw new Exception("O array não é o associativo no delete");
  }

  $whereData = array_keys($where);

  $sql = "DELETE FROM {$table} WHERE ";
  $sql .= "{$whereData[0]} =  :{$whereData[0]}";

  $prepare = $connect->prepare($sql);
  $prepare->execute($where);
  return $prepare->rowCount();

  dd($sql);
}//?delete
