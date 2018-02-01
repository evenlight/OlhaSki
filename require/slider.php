<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <?php
            $sql = "select img, sortorder from slider where sortOrder=1 limit 1";
            $result = mysqli_query($conn, $sql); 
            while($row = mysqli_fetch_assoc($result)) 
            {
                $imgActive = $row['img'];
                $imgSort = $row['sortorder'];
            }
            ?>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php
            echo '<div class="item active"><img src="../content/img/'.$imgActive.'" alt="slide-'.$imgSort.'"></div>';

            $sql = "select img, sortorder from slider where sortOrder!=1 order by sortOrder";
            $result = mysqli_query($conn, $sql); 
            while($row = mysqli_fetch_assoc($result)) 
            {
                echo '
                <div class="item">
                    <img src="../content/img/'.$row['img'].'" alt="slide-'.$row['sortorder'].'">
                </div>';
            }     
        ?>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Пред</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">След</span>
      </a>
</div>