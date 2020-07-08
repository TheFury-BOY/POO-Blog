<?php

Namespace App\Manager;

use PDO;
use Exception;

abstract class Database
{

    /**
     * Les variables
     */
    private $connection;

    /**
     * Méthode permettant le test de notre connexion à la bdd
     */
    private function testConnection()
    {
        if ($this->connection === null) {
            return $this->getConnection();
        }

        return $this->connection;
    }

    /**
     * Méthode de connection à la base de données
     */
    private function getConnection()
    {
        //Essai de connection à la bdd
        try {
            $this->connection = new PDO(DB_HOST, DB_USER, DB_PW);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //Renvoi un message avec return
            return $this->connection;
        }

        //Renvoi une erreur si la connexion échoue
        catch(Exception $connectionError) {
            exit('Erreur de Connection : ' . $connectionError->getMessage());
        }
    }

    /**
     * Méthodes qui va gérer nos requêtes
     * @param $request String
     * @param $params
     */
    protected function createQuery( String $request, $params = null)
    {
        if ($params) {
            $result = $this->testConnection()->prepare($request);
            $result->execute($params);

            return $result;
        }

        $result = $this->testConnection()->query($request);
        return $result;
    }
}