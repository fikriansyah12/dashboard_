<?php
$con = mysqli_connect("localhost", "root", "", "filters");
if(isset($_post['request'])){

    $request = $_POST['request'];

    $query = "SELECT * FROM post WHERE Key = '$request'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
    ?>

    <table class="table">
        <?php

        if($count){
            ?>
            <thead>
                <tr>
                    <th>Issue Type</th>
                    <th>Key</th>
                    <th>Summary</th>
                    <th>Asignee</th>
                    <th>Reporter</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Squad</th>
                </tr>

                <?php
        }else{
            echo "Sorry! No record found";
        }
        ?>
            </thead>
            <tbody>
            <?php
            while($row=mysqli_fetch_assoc($r)){

                        
                ?>
                <tr>
                    <td><?php echo $row['issueType']?></td>
                    <td><?php echo $row['Key']?></td>
                    <td><?php echo $row['Summary']?></td>
                    <td><?php echo $row['Assignee']?></td>
                    <td><?php echo $row['Reporter']?></td>
                    <td><?php echo $row['Priority']?></td>
                    <td><?php echo $row['Status']?></td>
                    <td><?php echo $row['Squad']?></td>
                </tr>
                <?php
            }
                ?>
                        
            </tbody>
        </table>
    <?php    
}?>