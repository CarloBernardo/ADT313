<h1>Condition</h1>

<?php
    $age = 21;
    if($age >= 18){
        echo "Legal age: ";
    } else if($age >= 0 && $age <= 10){
        echo "something";
    } else{
        echo "Minor";
    }

    //short-hand if condition
    //(condition) ? true condition else : condition

    echo ($age >=18)? '18+' : '17';


    $role = "instructor";
    switch ($role) {
        case 'value':
           echo "":
            break;
        
       case 'value':
            # code...
            break;

        case 'value':
            # code...
            break;

        default:
            # code...
            break;


    }

?>