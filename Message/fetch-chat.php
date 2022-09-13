<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "./php/db-connection.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incm_id']);
        $output = "";
        // Database presumption connection
        $sql = "SELECT * FROM messages LEFT JOIN Employer ON Employer.unique_id = messages.outgo_msg_id
                WHERE (outgo_msg_id = {$outgoing_id} AND incm_msg_id = {$incoming_id})
                OR (outgo_msg_id = {$incoming_id} AND incm_msg_id = {$outgoing_id}) ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                // Not final, will change depending on the class that the front-end will make.
                if($row['outgo_msg_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                                <img src="php/images/'.$row['img'].'" alt="">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ./login.php");
    }

?>