<? 
//You are required to work as a team and complete the following task during the online session
// we will check your implementation on 16.02.2022 and the team repo must contain the following task
// Each one of you will first do it in your own repo (or branch) and then the final version in the team repo. 
// This task is not graded however will have some impact on the final grade
// It also will help you to practice utlizing GitHub in project work

# 1. Create/read a text file by using approprite php functions 
    # Step 1: check if file exists or not
    $filename = 'grouptask.txt';
    if(file_exists($filename))
    {
        echo"This file $filename exists  ";
        
    }else
    {
        echo "this file $filename doesnt exist";
        
    }
    # Step 2: Open the file using appropriate mode. (each member opens the file in different mode)

    $filename = fopen("grouptask.txt", "r+") or die("Unable to open file!");
    $pointer = fgets($filename);
    echo $pointer;
    fclose($filename);

    # Step 3: Use fwrite/fread function to write/read on the file your team name and members name. 
    $filename=fopen("grouptask.txt","w") or die ("Failed to create a file");
    $txt="Team 12:<br> nazanin ron, orges <br>";
    fwrite($filename,$txt);
    fclose($filename);

    # Step 4: Close the file 
      
    $filename=fopen("grouptask.txt","w") or die ("Failed to create a file");
    $txt="Team 12:<br> nazanin ron, orges <br>";
    fwrite($filename,$txt);
    fclose($filename);

#2. Uploaing files 
     # Step 1: Create a simple html form to upload a file. 
     # Step 2: You are required to limit the upload file size to 2 MB. 
     # Step 3: Make sure that users can submit only images. 
     # Step 4: Upon successful upload, you print a message "File uploaded successfully" and also 
     # provide the link to the directory where files are uploaded.

?>
