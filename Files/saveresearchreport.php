<?php
require 'connect.php';




    $targetfolder = "./reserachreport/";

    $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

    if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

    {

    echo "The file ". $targetfolder. " is uploaded";

   

   //Inserting data into pgdaemresult table
    $query="insert into researchreport(report) values('$targetfolder')";
   
   

	 if(mysqli_query($link,$query)==1){
        
        echo "<head><script>alert('Report Uploaded ');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=research.php'>";
       
      }

    else{
        echo "<head><script>alert('NOT SUCCESSFUL, Check Again');</script></head></html>";
        echo "error".mysqli_error($link);
      }
    }

else {

echo "Problem uploading file";

}

?>
