

















<li class="dropdown">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger"><?php echo $counter_n; ?></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notificaciones</li>
                                        <li class="list-group">
<?php
                                            
if($count_n >=1 ) {                                    
while($row=mysqli_fetch_array($res_n)){  
    
        if ($row['type'] == "1"){
        $class = "text-primary";
        $ico = "md md-turned-in md-2x text-primary";
    } elseif($row['type'] == "2"){
        $class = "text-danger";
        $ico = "md  md-question-answer md-2x text-danger";
    } elseif($row['type'] == "0"){
        $class = "text-purple";
        $ico = "fa fa-user-plus fa-2x text-purple";
    }
    $text = $row['text'];
                                     echo  '<div class="media">
                                                 <div class="pull-left">
                                                    <a href="'.$row['link'].'" class="list-group-item">
                                                    <em class="'.$ico.'"></em>
                                                    </a>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">'.$row['title'].'</div>
                                                    <p class="m-0">
                                                       <small style="text-decoration: none;">'.$text.'</small>
                                                    </p>
                                                 </div>
                                              </div>';
                                            
}
} else {
    echo  '<a class="list-group-item" style="color: #6f6f6f; text-decoration: none; background-color: #f5f5f5;">
                                              <div class="media">
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading text-center">No hay Notificaciones para mostrar</div>
                                                 </div>
                                              </div>
                                           </a>';
}

?>
                                           <!-- last list item -->
                                            <a href="./notificaciones.php" class="list-group-item text-center">
                                              <small><i class="fa  fa-bars"></i> Ver todas las notificaciones</small>
                                            </a>
                                            
                                        </li>
                                    </ul>
</li>
    
    
    
    
    
    
    
    
    
    











    