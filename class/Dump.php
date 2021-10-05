<?php

class Dump
{

    public static function load($path)
    {
        $file = fopen($path, 'r');
        fgetcsv($file, 0, ";"); //Lecture des noms des tableaux
        $new_array = new ArrayObject();
        while (!feof($file)) {
            $array = fgetcsv($file, 0, ";");
            if($array != null && $array != ""){
                $these = self::createTheseWithList($array);
                $new_array->append($these);
            }
        }
        fclose($file);
        return $new_array;
    }

    public static function createTheseWithList($array): These
   {
       $these = new These();
       $index = 0;
       $these->setAuthor($array[$index++]);
       $these->setAuthorId($array[$index++]);
       $these->setTitle($array[$index++]);
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
       $these->setDateUpdateThese($array[$index++]);
       return $these;
   }

}
