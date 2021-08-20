<?php
// process uploaded file
// first, you need to check if user has clicked the
// submit button
if (!empty($_POST['submit'])) {
  if ($_FILES['upload']['error']==0) {
    // var_dump($_FILES);

    // check security type
    switch ($_FILES['upload']['type']) {
      case 'image/jpeg':
        echo 'file type accepted <br/>';
        break;
      case 'image/jpg':
        echo 'file type accepted <br/>';
        break;
      case 'image/png':
        echo 'file type accepted <br/>';
        break;
      default:
        // illegal file type, shutdown
        exit("illegal file type");    
    }

    // new file name 
    // get file name extension first
    $array=explode(".",$_FILES['upload']['name']);
    $file_name_extension=array_pop($array);
    $new_file_name=time().rand(1000,9999).".".$file_name_extension;
    
    // new directories
    //./2020/19/8
    $new_final_destination="images/".date('Y');
    if (!is_dir($new_final_destination)) {
      mkdir($new_final_destination,0777,true);
      $destination=$new_final_destination."./".$new_file_name;
    } else {
      //destination already exist
      $destination=$new_final_destination."./".$new_file_name;
    }

    // // target dir
    // $destination="images/".$_FILES['upload']['name'];
    
    if(move_uploaded_file($_FILES['upload']['tmp_name'],$destination)) {
      echo "success";
    }else {
      echo "failure";
    }
  }  
  
  else {
    if ($_FILES['upload']['error']==2 || $_FILES['upload']['error']==2) {
      echo " file to big please select a smaller one <br/>";
    }else {
      echo "the file is only partly upload <br/>";
    }
  }
}
?>