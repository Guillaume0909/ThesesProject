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
       $these->setDateFirstInscriptionDoc($these->correctDate($array[$index++]));
       $these->setDateSustenance($these->correctDate($array[$index++]));
       $these->setTheseLanguage($array[$index++]);
       $these->setTheseId($array[$index++]);
       $these->setOnlineAccessibility($array[$index]++);
       $these->setDatePublication($these->correctDate($array[$index++]));
       $these->setDateUpdateThese($these->correctDate($array[$index++]));
       self::addToBDD($these);
       return $these;
   }

   public function addToBDD(These $these){
        include("../php/connexion.inc.php");
       $sql = $cnx->exec("INSERT INTO theses_db (author, author_id/*, title, these_director, these_director_in_first_name, 
     director_id, location_sustenance, location_id, discipline, status, 
     date_first_inscription_doc, date_sustenance, these_language, these_id, online_accessibility,date_publication*/, date_update_these)
 VALUES
        ('".$these->getAuthor()."'
        ,'".$these->getAuthorId()."'
        /*,'".$these->getTitle()."'
        ,'".$these->getTheseDirector()."'
        ,'".$these->getTheseDirectorInFirstName()."'
        ,'".$these->getDirectorId()."'
        ,'".$these->getLocationSustenance()."'
        ,'".$these->getLocationId()."'
        ,'".$these->getDiscipline()."'
        ,'".$these->getStatus()."'
        ,'".$these->getDateFirstInscriptionDoc()."'
        ,'".$these->getDateSustenance()."'
        ,'".$these->getTheseLanguage()."'
        ,'".$these->getTheseId()."'
        ,'".$these->getOnlineAccessibility()."'
        ,'".$these->getDatePublication()."'*/
        ,'".$these->getDateUpdateThese()."'
        );");
       if ($sql != false) {
           echo "Insertion réussi !<br>";
           echo $these->getDateUpdateThese();
       }
       else {
           echo "Erreur dans l'insertion !<br>";
           echo $these->getDatePublication();
       }
   }

}
