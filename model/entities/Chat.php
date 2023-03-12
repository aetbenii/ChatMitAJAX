<?php

class Chat{
    use ActiveRecordable, Deletable, Findable, Persistable;

    private int $id = 0;
    private string $name;
    private string $text;
    private string $datum;

    public static function findeAlle(){
        $sql = 'SELECT * FROM chat';
        $abfrage = DB::getDB()->query($sql);
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Chat');
        return $abfrage->fetchAll();
    }

    public static function findeLetztenZehn(){
        $sql = 'SELECT * FROM chat ORDER BY id DESC LIMIT 11';
        $abfrage = DB::getDB()->query($sql);
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Chat');
        return $abfrage->fetchAll();
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
 
    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    public function getDatum()
    {
        return $this->datum;
    }

    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }
}