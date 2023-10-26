<?php
include 'DB_Config';
class student{

    public function Insert_student($First_Name, $Last_Name, $Email)
    $insertQuery = "INSERT INTO student (First_Name, Last_Name, Email) VALUES (?, ?, ?)";
    $stmt = $this->conn->prepare($insertQuery);

    if (!$stmt) {
        return false; 
    }

    
    $stmt->bind_param("sss", $First_Name, $Last_Name, $Email);

    if ($stmt->execute()) {
        return true; 
    } else {
        return false; 
}

}


?>
