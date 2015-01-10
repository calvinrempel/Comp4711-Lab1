<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Comp4711 Lab1</title>
    </head>
    <body>
        <?php
        include 'Student.php';
        
        // Create a List of Students to be printed.
        $students = array();
        
        // Add a Test Student to the Student List
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        // Add a Second Test Student to the Student List
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        // Add Myself to the Student List
        $me = new Student();
        $me->surname = "Rempel";
        $me->first_name = "Calvin";
        $me->add_email( "school", "not.my.real.account@gmail.com" );
        $me->add_grade( 100 );
        $me->add_grade( 95 );
        $me->add_grade( 90 );
        $students[ 'c789' ] = $me;
        
        // Sort the Student List by Array Key
        ksort( $students );
        
        // Print all Students in the Student List
        foreach ( $students as $student ) {
            echo $student->toString();
        }
        ?>
    </body>
</html>