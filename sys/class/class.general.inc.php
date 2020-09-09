<?php


class general extends db_connect
{
    public function __construct($dbo = NULL)
    {
        parent::__construct($dbo);
    }


    public function getCountries()
    {
        $result = array(
            "error" => false,
            "error_code" => ERROR_SUCCESS,
            "countries" => array());

        $stmt = $this->db->prepare("SELECT * FROM countries ORDER BY name");

        if ($stmt->execute()) {

            while ($row = $stmt->fetch()) {


                array_push($result['countries'], $row);

            }
        }

        return $result;
    }
}