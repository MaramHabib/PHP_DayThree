<html>
   <body>    
        <?php
        // define variables and set to empty values
        $name = $email = $gender = $course = $group = $details = $agree = "";
        $nameErr = $emailErr = $genderErr = $agreeErr = "";

        if ( $_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
              } else {
                $name = test_input($_POST["name"]);
              }

            if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            } else {
            $email = test_input($_POST["email"]);
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
              } else {
                $gender = test_input($_POST["gender"]);
              }
              if (empty($_POST["agree"])) {
                $agreeErr = "You Must Agree to Terms";
              } else {
                $agree = test_input($_POST["agree"]);
              }

            $group = test_input($_POST["group"]);
            $details = test_input($_POST["details"]);
            $course = test_input($_POST["course"]);
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        
        ?>
    <h2>Application Name AAST - BIS Class Registeration </h2>
      <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">

        <table>
          <p style="color:red;">* Required Fields</p>
            <tr>
                <th>Name  :</th>
                <td> <input type = "text" name = "name" />  <span style="color:red;">* <?php echo $nameErr;?></span> </td>
            </tr>
            <tr>
                <th>Email  :</th>
                <td> <input type = "text" name = "email" /> <span style="color:red;">* <?php echo $emailErr;?></span> </td>
            </tr>
            <tr>
                <th>Group #  :</th>
                <td> <input type = "text" name = "group" /> </td>
            </tr>
            <tr>
                <th>Class Details  :</th>
                <td>  <textarea  rows="5" cols="40" name="details"></textarea> </td>
            </tr>
            <tr>
                <th>Gender  :</th>
                <td>    <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="male">Male
                        <span style="color:red;">* <?php echo $genderErr;?></span> 
                </td>
            </tr>
            <tr>
                <th>Select Courses  :</th>
                <td>
                    <Select name=course>
                        <option value="php">PHP</option>
                        <option value="js">JavaScript</option>
                        <option value="html">HTML</option>
                        <option value="mysql">Mysql</option>
                    </Select>
                </td>
            </tr>
            <tr> <td>Agree :</td><td><input type="checkbox" name="agree" value="false">
                 <span style="color:red;">* <?php echo $agreeErr;?></span> 
                </td> 
            </tr>  
            <tr> <td><input type = "submit" /> </td></tr>  
        </table>
      </form>

    <?php
        echo "<h2>Your Input:</h2>";
        echo "Name :".$name;
        echo "<br>";
        echo "Email :".$email;
        echo "<br>";
        echo "Group :".$group;
        echo "<br>";
        echo "Class Details :".$details;
        echo "<br>";
        echo "Gender :".$gender;
        echo "<br>";
        echo "Your Courses are :".$course;
    ?>
      
   </body>
</html>