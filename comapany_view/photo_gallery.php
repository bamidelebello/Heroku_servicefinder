	<?php

     $stmt=$connect->prepare("SELECT * FROM  provider_profile ORDER BY id DESC");
      $stmt->execute();
      if($stmt->rowCount() > 0){

        while ($row =$stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                ?>
    
            <div class="item">
                <img src="/Service-Finder/uploads/<?php echo $row['gallery_image'] ?>">
                <div class="">
                    <a href="#" data-toggle="modal" data-target="#galley-modal"><i class="fa fa-picture-o"></i></a>
                </div>
            </div>
      
   
                <?php
          }

      }  
    
    ?>
   