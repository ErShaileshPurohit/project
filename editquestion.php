<?php
include('db.php');
if (isset($_POST['create'])){
     $id=$_GET['id'];
    $question=$_POST['question'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $option4=$_POST['option4'];
    $answer=$_POST['answer'];
    $subject=$_POST['subject'];


$sql="update add_question set id = $id, question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',answer='$answer',subject='$subject' where id='$id'";

$query=mysqli_query($conn,$sql);
if($query){
    header("location:questionlist.php");
}     
}

?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="fileinput.min.css">
      

        
        <link rel="stylesheet" href="style.css">
        <title>update question</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
        * {
        box-sizing: border-box;
        }
        body {
        font-family: Arial, Helvetica, sans-serif;
        }
        /* Header Style */
        header {
        background-color: darkgray;
        padding: 10px;
        text-align: center;
        font-size: 15px;
        color: white;
        }
        </style>
          <script>
  function validateform() {
    let question = document.forms["regiform"]["question"].value;
    if(question == ""){
      alert("question not filled");
      return false;  
    }
     let option1 = document.forms["regiform"]["option1"].value;
    if(option1 == ""){
      alert("option1 not filled");
      return false;
      
    }
    let option2 = document.forms["regiform"]["option2"].value;
    if(option2 == ""){
      alert("option2 not filled");
      return false;
      
    }
    let option3 = document.forms["regiform"]["option3"].value;
    if(option3 == ""){
      alert("option3 not filled");
      return false;
      
    }
    let option4 = document.forms["regiform"]["option4"].value;
    if(option4 == ""){
      alert("option4 not filled");
      return false;
      
    }
    let answer = document.forms["regiform"]["answer"].value;
    if(answer == ""){
      alert("answer not filled");
      return false;
      
    }
    let subject = document.forms["regiform"]["subject"].value;
    if(subject == ""){
      alert("subject not filled");
      return false;
      
    }
     
}
</script> 
        
    </head>
    
    <body>
        <?php 
                $id=intval($_GET['update']);
                   $sql="select * from add_question where id='$id'" ;
                   $query=mysqli_query($conn , "select * from add_question where id='$id'");
                   if(mysqli_num_rows($query))
                   {
                        while ($v=mysqli_fetch_assoc($query)) {
                          
                ?>
        <?php }}?>


        <header>
            <center><h1>update question</h1></center>
           
            <h2 style="text-align:right;">
    
    </header>
    <section>
        
   <form align="center" name="regiform" method="POST" enctype="multipart/form-data" onsubmit="return validateform()">
            <table align="center" cellspacing="20" border: px solid black; border-collapse: collapse;>
                <h1 align="center"> Registration</h1><br>
                <label for="question"><b>question: </b></label>
                <input type="textbox" value="<?php echo $v['question'];?>" name="question"  placeholder="Enter Your question"  /><br><br>

                <label for="option1"><b>option1: </b></label>
                <input type="textbox" name="option1" value="<?php echo $v['option1'];?>" placeholder="Enter Your option1" /><br><br>

                <label for="option2"><b>option2: </b></label>
                <input type="textbox" name="option2" value="<?php echo $v['option2'];?>" placeholder="Enter Your option2" /><br><br>

                <label for="option3"><b>option3: </b></label>
                <input type="textbox" name="option3" value="<?php echo $v['option3'];?>" placeholder="Enter Your option3" /><br><br>

                <label for="option4"><b>option4: </b></label>
                <input type="textbox" name="option4" value="<?php echo $v['option4'];?>" placeholder="Enter Your option4" /><br><br>

                <label for="answer"><b>answer: </b></label>
                <input type="textbox" name="answer" value="<?php echo $v['answer'];?>" placeholder="Enter Your answer" /><br><br>
    
    <label for="subject">Choose a subject:</label>
                  <select name="subject" id="subject">
                    <option value="php">php</option>
                    <option value="java">java</option>
                    <option value="C++">C++</option>
                   
                  </select>
               <br><br>

            
                </br>
                <input type="submit"  name="create" value="submit" />
            </table>

        </form>
          

    </section>
      
</body>
</html> 