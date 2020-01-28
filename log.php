<?php
    include('functions.php');
    //Get the data from data.json
    $json = file_get_contents('data.json');
    //Turn into an array
    $data = json_decode($json, true);
    
    switch($_GET['mode']){

        case "new":
            $time = time();
            $data[$time]['id'] = $time;
            $data[$time]['name'] = $_GET['task'];
            $data[$time]['date-start'] = $time;
            $data[$time]['date-end'] = "";
            $data[$time]['status'] = 1;
            save($data);
        break;

        case "tally":
            $count = 0;
            foreach($data as $t){
                $count = $count + ($t["date-end"] - $t["date-start"]);
            }
            echo time_change($count);
        break;

        case "build":
            foreach($data as $t){ ?>
                <tr>
                    <td><?php echo $t['name']; ?></td>
                    <td><?php echo date_change($t['date-start']); ?></td>
                    <td>
                        <?php 

                            if($t["date-end"] != ""){
                                echo date_change($t["date-end"]);
                            } 
                        
                        ?>
                    
                    </td>
                    <td>
                        <?php
        
                            if($t["date-end"] == ""){
                                echo time_change(time() - $t["date-start"]);
                            }
                            else{
                                echo time_change($t["date-end"] - $t["date-start"]);
                            } 
        
                        ?>
                    </td>
                    <td><button class="btn btn-primary"><?php echo icon('stop'); ?></button></td>
                    <td><button class="btn btn-danger"><?php echo icon('times'); ?></button></td>
                </tr>
            <?php
            }

        break;
    }
  
?>
