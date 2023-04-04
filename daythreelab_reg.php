<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        th {
        background-color: black;
        text-align: left;
        color:white;
        padding: 8px;
        }
    </style>
</head>

<body>
<?Php
include 'students.php';
?>  


    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>

        </tr>

        <?php

        $mystyle="style=\"color:red;\"";

            foreach ($students as $st => $values )	//before $a value as $b
            {
                if($values['status'] === "CMS"){
                    echo "<tr style=\"color:red;\" >";
                }
                    
                
                else{
                     echo "<tr>";
                 }

                foreach ($values as $key => $value)
                {
                    if ($value !== "CMS"){
                        $mystyle="style=\"color:green;\"";
                        echo " <td> $value </td>";
                    }else{
                        $mystyle="";
                        echo " <td> $value </td>";
                    }
                    
                }
            }	echo "</tr>";

        ?>

    </table>


</body>
</html>