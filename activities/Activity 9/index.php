<?php
include_once "dbconfig.php";
include_once "Student.php";
include_once "Group.php";

try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $programming = new Group('1', 'Programmer');
    $science = new Group('2', 'Science');
    $ai = new Group('3', 'AI');
    $sport = new Group('4', 'Sports');

    $student1 = new Student('1', 'Name1', 'Name1', '');
    $student2 = new Student('2', 'Name2', 'Name2', '');
    $student3 = new Student('3', 'Name3', 'Name3', '');
    $student4 = new Student('4', 'Name4', 'Name4', '');

    $programming->setStudent($student1);
    $science->setStudent($student2);
    $ai->setStudent($student3);
    $sport->setStudent($student4);

    $allPrograms = [$programming, $science, $ai, $sport];

    sendData($connection, $allPrograms);

    $listOfStudents = getData($connection);

    $stu = new Student();

    $stu->displayAllStudents($connection, $listOfStudents);

} catch (PDOExecption $error) {
    echo $connection->Error[2];
}

function sendData($connection, $allPrograms)
{
    foreach ($allPrograms as $program) {
        $sql = "";
        foreach ($program->getStudents() as $student) {
            $id = $student->getID();
            $fname = $student->getFname();
            $lname = $student->getLname();
            $photo = $student->getPhoto();
            $sql = "INSERT INTO studentdb VALUES('$id','$fname','$lname','$photo')";
        }
        $connection->exec($sql);
    }
}

function getData($connection)
{
    $sql = "SELECT * FROM studentdb";
    foreach ($connection->query($sql) as $key => $stu) {
        $student = new Student();
        $student->setID($stu['id']);
        $student->setFname($stu['fname']);
        $student->setLname($stu['lname']);
        $student->setPhoto($stu['photo']);
        $listOfStudents[$key] = $student;
    }
    return $listOfStudents;
}

// echo "$programming,$science,$ai,$sport";
