<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        #pic {
            height: 200px;
            width: 200px;
            margin-left: 35%;
            background-color: bisque;
            margin-top: 80px;
            float: left;
        }

        #table {
            text-align: center;
            height: 200px;
            width: 500px;
            margin: auto;

        }

        #outer-div {
            height: 700px;
            width: 50%;
            margin: auto;
            box-shadow: 0px 0px 15px 1px black;
        }

/*
        #outer-div:hover {
            

        }
*/

        #table-div {
            margin-top: 15%;
            margin-left: 18%;
            background-color: aqua;
            float: left;
            
        }
        img{
            height: 250px;
            width: 250px;
        }
        #head-div{
            margin: auto;
        }

    </style>
</head>

<body>
    <?php
    $skill="";
    $name=$_POST["name"];
    $rollno=$_POST["rollno"];
    $branch=$_POST["branch"];
//    $skills=$_POST["skills"];
    $values = $_POST['skills'];
//    foreach ($values as $a){
//            echo $a;
//          }
    $orgName=$_FILES["profile"]["name"];
    $tmpName=$_FILES["profile"]["tmp_name"];
    $size=$_FILES["profile"]["size"];
    $type=$_FILES["profile"]["type"];
    move_uploaded_file($tmpName,"uploads/".$orgName);
    
    ?>
    <span id="head-div">Candidate Details</span>
    <div id="outer-div">
        <div id="pic">
            <?php
                   echo  "<img src='uploads/".$orgName."'>";
                ?>
        </div>
        <div id="table-div">
            <table border="1" rules="all" id="table">
                <tr>
                    <td>Name</td>
                    <td>
                        <?php
                echo $name;
                ?>
                    </td>
                </tr>
                <tr>
                    <td>Roll-No</td>
                    <td>
                        <?php
                echo $rollno;
                ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Branch
                    </td>
                    <td>
                        <?php
                echo $branch;
                ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Skills
                    </td>
                    <td>
                        <?php
                foreach ($values as $a){
            $skill= $skill.$a.", ";
          }
                $skill= rtrim($skill," .");
                $skill= rtrim($skill,",");
                echo $skill;
                ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
