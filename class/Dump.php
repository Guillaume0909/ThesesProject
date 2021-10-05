<?php

class Dump
{

    public static function startLoadAt(int $line)
    {
        $array = explode(";", file_get_contents("../files/extraction.csv"));
        $counter = 0;
        $ligne = $line;
        foreach ($array as $data) {
            $counter++;
            echo $data."\n";
            //RESET Compteur
            if ($counter == 17) {
                $counter = 0;
                $ligne++;
            }
        }
        return $array;
    }

    public static function createTheseWithList($array): These
    {
        $these = new These();
        $new_array = get_class_vars("These.php");
        $index = 0;
        foreach ($new_array as $values){
            $values = $array[$index];
            $index++;
        }
        /*$index = -1;
        $these->setAuthor($array[$index++]);
        $these->setAuthorId($array[$index++]);
        $these->setTheseDirector($array[$index++]);
        $these->setTheseDirectorInFirstName($array[$index++]);
        $these->setDirectorId($array[$index++]);
        $these->setLocationSustenance($array[$index++]);
        $these->setLocationId($array[$index++]);
        $these->setDiscipline($array[$index++]);
        $these->setStatus($array[$index++]);
        $these->setDateFirstInscriptionDoc($array[$index++]);
        $these->setDateSustenance($array[$index++]);
        $these->setTheseLanguage($array[$index++]);
        $these->setTheseId($array[$index++]);
        $these->setOnlineAccessibility($array[$index++]);
        $these->setDatePublication($array[$index++]);
        $these->setDateUpdateThese($array[$index++]);*/
        return $these;
    }

    public static function loadSpecificDataAtLine(int $index, int $line){
        $array = self::loadSpecificLine($line);
        $counter = 0;
        foreach ($array as $data){
            if($counter == $index){
                echo "Donnée chargé : ".$data;
                return $data;
            }
            $counter++;
        }
    }

    public static function loadSpecificLine(int $line)
    {
        $array = explode(";", file_get_contents("../files/extraction.csv"));

        $counter = 0;
        $ligne = 0;
        $new_array = []; //Création de la liste.
        foreach ($array as $data) {
            $counter++;
            if ($ligne == $line) {
                $new_array[$counter] = $data; //Ajout des valeurs.
            }
            //RESET Compteur
            if ($counter == 17) {
                if ($ligne == $line) {
                    return $new_array; //Renvoie la liste pleine.
                }
                $counter = 0;
                $ligne++;
            }
        }
        return null;
    }

}
