<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');
        
        $students = array();
        
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
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

        $meStudent = new Student();
        $meStudent->surname = "De Pauw";
        $meStudent->first_name = "Xavier";
        $meStudent->add_email('work', 'xavier@dgpt.com');
        $meStudent->add_grade(75);
        $students['x789'] = $meStudent;
        
        ksort($students);
        
        foreach($students as $student)
        {
            ?> <p><strong>  
                <?php echo $student->toString(); ?>
            </strong></p>
        <?php } ?>
    </body>
</html>
