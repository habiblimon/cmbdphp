<?php 
    //include('');
    //include_once(''); // only one time showing 
    //require_once(''); // only one time showing 

    if(isset($_POST['submit'])){
       $fileName =  $_FILES['file']['name'];
       $fileTmpName = $_FILES['file']['tmp_name'];


       //validation
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $fileExt =  explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));



      if(empty($fileName)){
        $errFile = "<span style='color:red'> Please select a file to upload </span>";
      }elseif(!in_array($fileActualExt, $allowed)){
        $errFile = "<span style='color:red'> Please select a valid file formate </span>";
      }else{
        //check directory upload file
        if(!is_dir('uploads')){
            mkdir('uploads');
  
      }

      //create new file name
      $fileNewName = str_shuffle(date('HisAFdYDyl')).uniqid('', true).'.'.$fileActualExt;

       //move uploaded file
      $fileUpload =  move_uploaded_file($fileTmpName, 'uploads/'.$fileNewName);
      if($fileUpload){
        echo "<span style='color:green'> File Uploaded Successfully </span>";
      }else{
        echo "<span style='color:red'> File Upload Failed </span>";
      }




    }

    }
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload" name="submit">
</form>

<?= $errFile??null; ?>