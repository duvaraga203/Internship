<?php 
//functions

function writeMsg() {
    echo "Hello world!";
  }
  // call function
  writeMsg(); 


  //send parameter
  function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");

// multiple parameters
function familyName1($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyName1("Hege", "1975");
  familyName1("Stale", "1978");
  familyName1("Kai Jim", "1983");

?>