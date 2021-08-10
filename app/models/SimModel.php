<?php
require_once "../app/models/Sim.php";
require_once "../app/helpers/Route.php";
class SimModel extends Database
{

    public function getAllSim()
    {
        $sql = "SELECT * FROM `sims`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function creatDataSim($sim)
    {
        $sql = "INSERT INTO sims (`PhoneNumber`, `Network`, `Price`, `Center`, `Type`) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1,$sim->PhoneNumber);
        $statement->bindParam(2,$sim->Network);
        $statement->bindParam(3,$sim->Price);
        $statement->bindParam(4,$sim->Center);
        $statement->bindParam(5,$sim->Type);
        return $statement->execute();
    }
    public function deleteSim($id)
    {
        $sql = "DELETE FROM sims WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }
    public function updateSim($id,$sim)
    {
        $sql = "UPDATE sims SET `PhoneNumber` = ?, `Network` = ? , `Price` = ?,`Center` = ?,`Type` = ? WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1,$sim->PhoneNumber);
        $statement->bindParam(2,$sim->Network);
        $statement->bindParam(3,$sim->Price);
        $statement->bindParam(4,$sim->Center);
        $statement->bindParam(5,$sim->Type);
        $statement->bindParam(6,$id);
        return $statement->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM sims WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function searchSim($option,$value)
    {
        $sql = "SELECT * FROM sims WHERE `$option` like '%$value%' ";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function searchSimTuQuy()
    {
        $sql = "SELECT * FROM sims WHERE `Type` like 'Tứ Quý' ";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $Type);
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function searchSimLocPhat()
    {
        $sql = "SELECT * FROM sims WHERE `Type` like 'Lộc Phát'";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $Type);
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}