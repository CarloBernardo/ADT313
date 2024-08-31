<h1>Hands-on Activity</h1>
<?php
    $table =array(
        "header" =>array(
            "StudentID",
            "Firstname",
            "Middlename",
            "Lastname",
            "Section",
            "Course",
            "YearLevel"
        ),
        "body"=>array(
                    array(
                        "firstname"=>"Firstname",
                        "middlename"=>"Middlename",
                        "lastname"=>"Lastname",
                        "section"=>"Section",
                        "course"=>"Course",
                        "yearlevel"=>"YearLevel"

                    ),
                    array(
                        "firstname"=>"Firstname",
                        "middlename"=>"Middlename",
                        "lastname"=>"Lastname",
                        "section"=>"Section",
                        "course"=>"Course",
                        "yearlevel"=>"YearLevel"

                    ),
                    array(
                        "firstname"=>"Firstname",
                        "middlename"=>"Middlename",
                        "lastname"=>"Lastname",
                        "section"=>"Section",
                        "course"=>"Course",
                        "yearlevel"=>"YearLevel"

                    ),
                    array(
                        "firstname"=>"Firstname",
                        "middlename"=>"Middlename",
                        "lastname"=>"Lastname",
                        "section"=>"Section",
                        "course"=>"Course",
                        "yearlevel"=>"YearLevel"

                    ),
                    array(
                        "firstname"=>"Firstname",
                        "middlename"=>"Middlename",
                        "lastname"=>"Lastname",
                        "section"=>"Section",
                        "course"=>"Course",
                        "yearlevel"=>"YearLevel"

                    ),
                    array(
                        "firstname"=>"Firstname",
                        "middlename"=>"Middlename",
                        "lastname"=>"Lastname",
                        "section"=>"Section",
                        "course"=>"Course",
                        "yearlevel"=>"YearLevel"

                    ),
                    array(
                        "firstname"=>"Firstname",
                        "middlename"=>"Middlename",
                        "lastname"=>"Lastname",
                        "section"=>"Section",
                        "course"=>"Course",
                        "yearlevel"=>"YearLevel"

                    ),
                    array(
                        "firstname"=>"Firstname",
                        "middlename"=>"Middlename",
                        "lastname"=>"Lastname",
                        "section"=>"Section",
                        "course"=>"Course",
                        "yearlevel"=>"YearLevel"

                    ),
                    array(
                        "firstname"=>"Firstname",
                        "middlename"=>"Middlename",
                        "lastname"=>"Lastname",
                        "section"=>"Section",
                        "course"=>"Course",
                        "yearlevel"=>"YearLevel"

                    ),
                    array(
                        "firstname"=>"Firstname",
                        "middlename"=>"Middlename",
                        "lastname"=>"Lastname",
                        "section"=>"Section",
                        "course"=>"Course",
                        "yearlevel"=>"YearLevel"

                    ),
                    array(
                        "firstname"=>"Firstname",
                        "middlename"=>"Middlename",
                        "lastname"=>"Lastname",
                        "section"=>"Section",
                        "course"=>"Course",
                        "yearlevel"=>"YearLevel"

                    )
        ),
    );
?>

<table border = "1">
    <thead>
    <?php
    $table = [
        'header' => ['ID', 'First Name', 'Middle Name', 'Last Name', 'Section', 'Course', 'Year-Level'],
        'body' => array_fill(0,count($table["body"]), ['Firstname', 'Middlename', 'Lastname', 'Section', 'Course', 'Yearlevel'])
    ];

    echo "<table border = '1'>";

    echo "<try>";
    foreach ($table['header'] as $col) {
        echo "<th>{$col}</th>";
    }
    echo "</try>";
$id = 0;
foreach ($table ['body'] as $row) {
    echo "<tr>";
    echo "<td>{$id}</td>"; 
    foreach ($row as $key => $value) {
        if ($key != "id"){
            echo "<td>{$value}</td>";
        }
    }
    echo "</tr>";
    $id++;
}
echo "</table";
        
        ?>

  

