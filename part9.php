<html>
<?php
ini_set('display_errors', 1); //show errors for debugging
?>
<?php
$firstName = "Jane";  // String type variable
$lastName = "Doe";  // String type variable
$age = "35";  // Integer type variable
$married = true;  // Boolean type variable
$childrenNames = array("Alice", "Bob"); // Array type variable

$fullName = $firstName . " " . $lastName;   //Concatenation operator
$dogYears = $age/7;                         //Arithmetic operator
$isAdult = $dogYears > 4;                   //Comparison operator
$isSettled = $isAdult and $married;         //Integer type variable

function getFullName($firstName, $lastName) { //Function name
    return $firstName. " " . $lastName;       //Returned value
}
$fullName = getFullName($firstName, $lastName) //Using variables
$fullName = getFullName("Alice", "Doe");       //Using values
function getISSettled($age, $married) {        //Function Name
    $dogYears = $age/7;
    $isadult = $dogYears > 4;
    return $isSettled;                        //Returned value
}
$isSettled = getIsSettled($age, $married);    //Using variables
$isSettled = getIsSettled(5, false);          //Using values
echo $fullName;
echo "<h1>Hello World</h1>"
if ($isSettled) {
    echo $fullName . " is settled.";
} else {
    echo $fullName . " is not settled.";
}
foreach($childrenNames as $childName) {
    echo "<li?" . $childName . "</li>";
}
<?>
</html>