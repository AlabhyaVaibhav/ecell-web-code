<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('php/intialize.php');
try {

    $sql2 = "SELECT * FROM applicants WHERE Email= :Email";
    $stmt = $con->prepare($sql2);
    $stmt->bindParam(':Email', $_POST['email'], PDO::PARAM_STR);
    $stmt->execute();

    if($stmt->rowCount() == 0){

        $sql = "INSERT applicants SET Name = :Name,
            CallingNo = :CallingNo, 
            WhatsappNo = :WhatsappNo,
            Email = :Email,
            Rollno = :Rollno,
            Branch = :Branch,
            Year = :Year,
            JoinEcell = :JoinEcell,
            Resume = :Resume,
            Domain = :Domain";     

$stmt = $con->prepare($sql);

$stmt->bindParam(':Name', $_POST['stuname'], PDO::PARAM_STR);
$stmt->bindParam(':CallingNo', $_POST['calling'], PDO::PARAM_STR);
$stmt->bindParam(':WhatsappNo', $_POST['whatsapp'], PDO::PARAM_STR);
$stmt->bindParam(':Email', $_POST['email'], PDO::PARAM_STR);
$stmt->bindParam(':Rollno', $_POST['rollno'], PDO::PARAM_STR);
$stmt->bindParam(':Branch', $_POST['branch'], PDO::PARAM_STR);
$stmt->bindParam(':Year', $_POST['year'], PDO::PARAM_STR);
$stmt->bindParam(':Domain', $_POST['domain'], PDO::PARAM_STR);
$stmt->bindParam(':JoinEcell', $_POST['joinecell'], PDO::PARAM_STR); 

if (!empty($_FILES['resume_upload']['name'])){


$temp = explode(".", $_FILES['resume_upload']['name']);
$ext = end($temp); //uploaded file extension
if($ext=="pdf" || $ext=="PDF"){

    $uploaddir = 'applicants/2017/';
$uploadname = 'Resume-';
$uploadname .=  $_POST['stuname'];  
$uploadname .=  '.';
$uploadname .=  $ext;           //this will be used for moving image to server
$uploadfile = $uploaddir . basename($uploadname);
move_uploaded_file($_FILES['resume_upload']['tmp_name'], $uploadfile); 

$uploadLocation = $uploaddir;
$uploadLocation .= $uploadname;
                               
$stmt->bindParam(':Resume', $uploadLocation, PDO::PARAM_STR); 
$stmt->execute();
echo "Application Submitted Succesfully";
}    

else
    echo "Error: Only pdf files allowed!";
 

}

else {
    $tnp = "Nothing";
    $stmt->bindParam(':Resume', $tnp, PDO::PARAM_STR); 
   $stmt->execute();
echo "Application Submitted Succesfully"; 
}

    }

    else{
        echo "User already exists!";
    }





    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>