<?php
    include_once 'inc/dbh.php';
    include_once 'inc/header.php';
 ?>
<main>
      <div class="container d-flex flex-column align-items-center">
        <h2>Past Feedbacks</h2>
          <?php
        $sql = "SELECT * FROM feedback ORDER BY Date DESC;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0 ) {
            while($row = mysqli_fetch_assoc($result)){ 
                echo '  <div class="card my-3 w-75">';
                echo '<div class="card-body text-center">';
                echo $row['Body'] . '<br><br>' ;
                echo '<p class="text-black-50">';
                echo 'By: ' .$row['Name'] . ' on ' . $row['Date'] . '<br><br>';
                echo '</p>';
                echo '</div>';
                echo ' </div>';
            }
        } else {
          echo '<p class="text-black-50"><br><br> There is no feedback</p>' ;
        }  
    ?>
        </div>
      </div>
    </main>


<?php
    include_once 'inc/footer.php';
    ?>
 