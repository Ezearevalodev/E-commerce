<?php

namespace App\Database;

use Exception;
use PDO;

class DB
{
    protected string $host = '127.0.0.1'; // Dirección IP o nombre de host del servidor de la base de datos
    protected string $user = 'root'; // Usuario de la base de datos
    protected string $pass = ''; // Contraseña de la base de datos
    protected string $name = 'dw3_arevalo_ezequiel'; // Nombre de la base de datos

    /**
     * Obtiene una conexión a la base de datos utilizando los detalles de configuración.
     *
     * @return PDO Objeto PDO que representa la conexión a la base de datos.
     */
    public function getConexion(): PDO
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->name . ';charset=utf8mb4';

        try {
            $db = new PDO($dsn, $this->user, $this->pass);
            return $db;
        } catch (Exception $e) {
            echo "Error al conectar con MySQL :(";
            echo "<br>";
            echo "El error ocurrido es: " . $e->getMessage();
            exit;
        }
    }
}