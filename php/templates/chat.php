<?php
$query_c="select * from usuarios where nombre != '$nombre_mp'";
$res_c = mysqli_query($connection,$query_c);?>
                    
                    
                <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                    
<?php          
while($row_c=mysqli_fetch_array($res_c)){  
    
    $online = $row_c['online'];
    $name = "'$row_c[nombre]'";
                                     echo  '<li class="list-group-item">
                            <a href="javascript:void(0)" onclick="javascript:chatWith('.$name.')">
                                <div class="avatar">
                                    <img src="images/users/'.$row_c['pics'].'" alt="">
                                </div>
                                <span class="name">'.$row_c['nombre'].'</span>';
    
                             if($online == 1){
                               echo '<i class="fa fa-circle online"></i>';
                        } else {
                                 echo '<i class="fa fa-circle offline"></i>';
                             }
                        echo  '</a>
                            <span class="clearfix"></span>
                        </li>';
    
}                    
?> 
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->