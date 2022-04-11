<?php
// 1. Create an array named $salaries that contains the salaries values for 5 employees. Print out the values of the array. 
$salaries = [70000, 80000, 90000, 100000, 116000];
foreach($salaries as $value) {
    echo "value is $value" ."<br>";
}

//2. An array named $courses that contains the names of 5 courses. Print out the values of the array. 
// Check if the array contains MAC272 and print out found or not found message.   
$courses = ["MAC101, MAC232, MAC250, MAC172, MAC272"];
foreach ($courses as $value) {
    echo "Value is $value" ."<br><br>";
}
foreach ($courses as $value) {
    if ($value == "MAC272") {
        $found = true;
        echo "found";
    }
}
if ($found=true)
echo "found";
else
echo "Not found";
echo "<br><br>";

//3. An associative array to store the grades of different subject of a student.  
//Add up to 5 subjects and their grades. Print out the values of the array. 
$student = array (
    "Math" => 95,
    "English" => 92, 
    "Object Oriented" => 90,
    "Web Dev" => 96,
    "IOS Dev" => 94,
);
foreach ($student as $subject => $grade) {
	echo " subject is $subject, and grade is $grade" . "<br>";	
}
echo "<br><br>";

/* 4. A Two-dimensional array named $books that represents books. The array contains 5 rows and 3 columns. An example of first row could be: 
("MAC101","introdcution to C++",90)
Print out the values of the array. 
 */
$books = array
  (
  array("MAC101","introdcution to C++",85),
  array("MAC232","UNIX Network OS",90),
  array("MAC250","Database",85),
  array("MAC172","Web Dev",95),
  array("MAC272","Advance Web Dev",90)
  );
  for ($row = 0; $row < 5; $row++) {
    echo $row;
    
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$books[$row][$col]."</li>";
    }
   
  }
  


?>