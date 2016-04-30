<?php
echo "1)";
$link = mysqli_connect('localhost', 'root', '', 'shop') or die ('Соединения нет' . mysqli_error($link));
echo "Соединения установленно!";
function select($connection, $table, $id = null){
    $query = "SELECT *FROM products";
    $result = mysqli_query($connection, $query);
    return $result;
}

echo "2)";
$data = ['id' => '1',
    'name' => 'Player',
    'surname' => 'pol'];
function insert($connection, $table, $data)
{
    $keys = [];
    $val = [];
    foreach($data as $key => $item){
        $keys[] = $key;
        $val[] = $item;
    }
    $id1 = implode("," ,$keys);
    $value = implode("," ,$val);
    $query = "INSERT INTO $table ($id1)
              VALUES ($value)";
    $result = mysqli_query($connection, $query) or die('Query failed: ' . mysqli_error($connection));
    return $result;
}
echo "3)";
$data = ['id' => '1',
    'name' => 'sam',
    'surname' => 'pol'];
function update($connection, $table, $data, $id)
{
    $keys = [];
    $val = [];
    foreach($data as $key => $item){
        $keys[] = $key;
        $val[] = $item;
    }
    $id1 = implode("," ,$keys);
    $value = implode("," ,$val);
    $query = "UPDATE $table SET $id1 WHERE id = $id";
    mysqli_query($connection, $query);
    $result = mysqli_query($connection, $query) or die('Query failed: ' . mysqli_error($connection));
    return $result;
}

echo "4)";
function delete($connection, $table, $id){
    $query = "DELETE FROM $table WHERE id=$id";
    mysqli_query($connection, $query);
}