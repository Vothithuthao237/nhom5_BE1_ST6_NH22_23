<?php
class product extends db{
    public function getAllProducts(){
        $sql = self :: $connection->prepare("SELECT * FROM products ORDER BY `id` DESC");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getProductById($id)
    {
        $sql = self :: $connection->prepare("SELECT * FROM products Where id = ?");
        $sql->bin_param("i", $id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getNewProducts(){
        $sql = self :: $connection->prepare("SELECT * FROM products ORDER BY `id` DESC LIMIT 0,10");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function search($keyword)
    {
        $sql = self :: $connection->prepare("SELECT * FROM products where id = ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s",$keyword)
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}