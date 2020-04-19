<?php

class Job
{
    private $id;
    private $title;

    public function __construct($id = null, $title = null)
    {
        $this->id = $id;
        $this->title = $title;
    }

    public static function heading()
    {
        echo "<br><center>----------------------List of Jobs---------------------</center><br>";

        echo "<table>";
        echo "<tr><th>Id</th><th>Title</th></tr>";

    }

    public static function footer()
    {
        echo "</table>";
    }

    public function __toString()
    {
        return "<tr><td>$this->id</td><td>$this->title</td></tr>";
    }

}
