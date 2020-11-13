<?php

#Primero de todo tengo que iniciar una sesion para guardar un datos que voy a usar en otros php's
session_start();

#Abro mi conexion donde le doy los datos del servidor, usuario, contraseña y base de datos.
$conn = mysqli_connect(
   'localhost',
   'jymi',
   'jymi',
   'calabazanos'
);

