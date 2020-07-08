<?php

abstract class Database
{

    /**
     * Les Constantes
     */
    const DB_HOST = 'mysql:host=db;port=3306;dbname=myDb;charset=utf8';
    const DB_USER = 'user';
    const DB_PW = 'test';

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
            $connection = new PDO(Database::DB_HOST, Database::DB_USER, Database::DB_PW);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //Renvoi un message avec return
            return $connection;
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
            $result->setFetchMode(PDO::FETCH_CLASS, Articles::class);
            $result->execute($params);

            return $result;
        }

        $result = $this->testConnection()->query($request);
        $result->setFetchMode(PDO::FETCH_CLASS, Articles::class);
        return $result;
    }
}