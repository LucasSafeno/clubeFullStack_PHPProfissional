<?php
function update(string $table, array $fields, array $where)
{
  $connect = connect();

  if (!isArrayAssociative($fields) || !isArrayAssociative($where)) {
    throw new Exception('O array tem que ser associativo no update');
  }

  $sql = "UPDATE {$table} SET ";
  foreach (array_keys($fields) as $field) {
    $sql .= "{$field} = :{$field}, ";
  }

  $sql = trim($sql, ', ');

  $whereFields = array_keys($where);

  $sql .= " where {$whereFields[0]} = :{$whereFields[0]}";

  $data = array_merge($fields, $where);

  $prepare = $connect->prepare($sql);
  $prepare->execute($data);

  return $prepare->rowCount();

  // dd($sql, $data);
}//?update
