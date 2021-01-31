<?php
class Brands extends model {

    public function getNameById($id) {

        $sql = "SELECT name FROM brands WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $data = $sql->fetch();

            return $data['name'];
        } else {
            return '';
        }
    }
}