<?php

class ProductsModel extends Model
{

    public function getProducts()
    {
        $sql = "SELECT
        id,
        name,
        price
         FROM products ";
        $result = array();
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
}
