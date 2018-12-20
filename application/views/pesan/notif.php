<?php

if (isset($_POST['view'])) 
{

    if($_POST["view"] != '')
    {
        $query1 = $this->db->query("UPDATE notifikasi SET notif_status = 1 WHERE notif_status=0");
    }

    $id_user    = $_SESSION['id_user'];
    $query2     = $this->db->query("SELECT * FROM notifikasi AS n1
                                    INNER JOIN data_pesanan AS n2 ON n1.id_pesanan = n2.id_pesanan 
                                    WHERE n1.id_user=$id_user ORDER BY notif_id DESC LIMIT 5");
    
    $output= '';

    
        if ($query2->num_rows() > 0) 
        {
            foreach ($query2->result() as $row)
            {
                $output .= "
                <li >
                    <a href='#'>
                        <b><i>From : Admin </i></b> <br>
                        <small> pesanan anda dengan nomor pesanan <br><b>".$row->no_pesanan."</b>
                        ".$row->notif_text."</small>
                    </a>            
                </li>
                ";
            }
        }
        else
        {
            $output .= "<li>
                    <a href='#'>
                     <span class='mdi mdi-information-outline mdi-18px'></span> tidak ada notifikasi
                    </a>
                    </li>";
        }
    

   
    $query3  = $this->db->query("SELECT * FROM notifikasi WHERE notif_status=0 AND id_user=$id_user");
    $result3 = $query3->result(); 
    $count   = $query3->num_rows($result3);
    $data    = array(
        'notification'          => $output,
        'unseen_notification'   => $count
    );

    echo json_encode($data);  
    /*
        {
            'notification':'untuk pesanan pada tanggal 2018-11-09 14:02:13 telah diproses ',
            'unseen_notification' : '1'
        }

    */ 
}

?>