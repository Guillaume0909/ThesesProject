<?php

class these {

    private $author;
    private $author_id;
    private $title;
    private $these_director;
    private $these_director_in_first_name;
    private $director_id;
    private $location_sustenance;
    private $location_id;
    private $discipline;
    private $status;
    private $date_first_inscription_doc;
    private $date_sustenance;
    private $these_language;
    private $these_id;
    private $online_accessibility;
    private $date_publication;
    private $date_update_these;

    public function __construct()
    {
        $this->author = null;
        $this->author_id = null;
        $this->title = null;
        $this->these_director = null;
        $this->these_director_in_first_name = null;
        $this->director_id = null;
        $this->location_sustenancwe = null;
        $this->location_id = null;
        $this->discipline = null;
        $this->status = null;
        $this->date_first_inscription_doc = null;
        $this->date_sustenance = null;
        $this->these_language = null;
        $this->these_id = null;
        $this->online_accessibility = null;
        $this->date_publication = null;
        $this->date_update_these = null;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->author_id;
    }

    /**
     * @param mixed $author_id
     */
    public function setAuthorId($author_id): void
    {
        $this->author_id = $author_id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTheseDirector()
    {
        return $this->these_director;
    }

    /**
     * @param mixed $these_director
     */
    public function setTheseDirector($these_director): void
    {
        $this->these_director = $these_director;
    }

    /**
     * @return mixed
     */
    public function getTheseDirectorInFirstName()
    {
        return $this->these_director_in_first_name;
    }

    /**
     * @param mixed $these_director_in_first_name
     */
    public function setTheseDirectorInFirstName($these_director_in_first_name): void
    {
        $this->these_director_in_first_name = $these_director_in_first_name;
    }

    /**
     * @return mixed
     */
    public function getDirectorId()
    {
        return $this->director_id;
    }

    /**
     * @param mixed $director_id
     */
    public function setDirectorId($director_id): void
    {
        $this->director_id = $director_id;
    }

    /**
     * @return mixed
     */
    public function getLocationSustenance()
    {
        return $this->location_sustenance;
    }

    /**
     * @param mixed $location_sustenance
     */
    public function setLocationSustenance($location_sustenance): void
    {
        $this->location_sustenance = $location_sustenance;
    }

    /**
     * @return mixed
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * @param mixed $location_id
     */
    public function setLocationId($location_id): void
    {
        $this->location_id = $location_id;
    }

    /**
     * @return mixed
     */
    public function getDiscipline()
    {
        return $this->discipline;
    }

    /**
     * @param mixed $discipline
     */
    public function setDiscipline($discipline): void
    {
        $this->discipline = $discipline;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getDateFirstInscriptionDoc()
    {
        return $this->date_first_inscription_doc;
    }

    /**
     * @param mixed $date_first_inscription_doc
     */
    public function setDateFirstInscriptionDoc($date_first_inscription_doc): void
    {
        $this->date_first_inscription_doc = $date_first_inscription_doc;
    }

    /**
     * @return mixed
     */
    public function getDateSustenance()
    {
        return $this->date_sustenance;
    }

    /**
     * @param mixed $date_sustenance
     */
    public function setDateSustenance($date_sustenance): void
    {
        $this->date_sustenance = $date_sustenance;
    }

    /**
     * @return mixed
     */
    public function getTheseLanguage()
    {
        return $this->these_language;
    }

    /**
     * @param mixed $these_language
     */
    public function setTheseLanguage($these_language): void
    {
        $this->these_language = $these_language;
    }

    /**
     * @return mixed
     */
    public function getTheseId()
    {
        return $this->these_id;
    }

    /**
     * @param mixed $these_id
     */
    public function setTheseId($these_id): void
    {
        $this->these_id = $these_id;
    }

    /**
     * @return mixed
     */
    public function getOnlineAccessibility()
    {
        return $this->online_accessibility;
    }

    /**
     * @param mixed $online_accessibility
     */
    public function setOnlineAccessibility($online_accessibility): void
    {
        $this->online_accessibility = $online_accessibility;
    }

    /**
     * @return mixed
     */
    public function getDatePublication()
    {
        return $this->date_publication;
    }

    /**
     * @param mixed $date_publication
     */
    public function setDatePublication($date_publication): void
    {
        $this->date_publication = $date_publication;
    }

    /**
     * @return mixed
     */
    public function getDateUpdateThese()
    {
        return $this->date_update_these;
    }

    /**
     * @param mixed $date_update_these
     */
    public function setDateUpdateThese($date_update_these): void
    {
        $this->date_update_these = $date_update_these;
    }




}

