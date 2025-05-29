<?php

function create(string $table, array $data)
{
  try {

    if (!isArrayAssociative($data)) {
      throw new Exception('O array tem que ser associativo');
    }

    $connect = connect();

    $sql = "INSERT INTO {$table}(";
    $sql .= implode(',', array_keys($data)) . ") VALUES(";
    $sql .= ':' . implode(',:', array_keys($data)) . ")";


    dd($sql);

    $prepare = $connect->prepare($sql);
    return $prepare->execute($data);

    // var_dump($sql);
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
} //? create()
