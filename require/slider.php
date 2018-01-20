<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
            $sql = "select img, sortorder from slider where sortOrder=1 limit 1";
            $result = mysqli_query($conn, $sql); 
            while($row = mysqli_fetch_assoc($result)) 
            {
                $imgActive = $row['img'];
                $imgSort = $row['sortorder'];
                
                echo '<li data-target="#carousel-example-generic" data-slide-to="'.$row['sortorder'].'" class="active"></li>';  
            }
            $sql = "select sortorder from slider where sortOrder!=1 order by sortOrder";
            $result = mysqli_query($conn, $sql); 
            while($row = mysqli_fetch_assoc($result)) 
            {
                echo '<li data-target="#carousel-example-generic" data-slide-to="'.$row['sortorder'].'"></li>';
            }
            ?>
    </ol>
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
</div>