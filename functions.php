<?php
    function checkIfOverdue($dueDate, $returnDate){
        if($dueDate > $returnDate){
            return "Returned on time.";
        } if ($dueDate < $returnDate) {
            return "Returned late.";
        } else {
            return "The due date is today.";
        }
    }
?>