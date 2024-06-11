<?php


namespace ManasahTech\Contracts\Data;

interface DatabaseDriver
{
    public function connect(DatabaseConnection $connection);
    public function disconnect();
    public function query(string $sql);
    public function select(string $table, $args = array());
    public function insert(string $table, $data);
    public function update(string $table, $data, $args = array());
    public function delete(string $table, $args = array());
}