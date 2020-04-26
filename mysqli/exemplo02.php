<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn -> connect_error)
{
    echo "Error: " . $conn -> connect_error;
} //else  echo "Sucesso na conexão";

$result = $conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();
while ($row = $result -> fetch_assoc())
{
    array_push($data, $row);
}
echo json_encode($data);

/* while ($row = $result -> fetch_array())
{
    var_dump($row);
} */