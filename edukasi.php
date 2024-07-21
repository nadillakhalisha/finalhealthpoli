<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM edukasi");
while($record = mysqli_fetch_assoc($query)){
    $result[] = $record;
}
?>

<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            VIDEO DAN ARTIKEL KESEHATAN
        </div>
        <div class="card-body">
            <div class="col-lg-9 mt-2">




                <?php
                        if(empty($result)){
                            echo "Data User Tidak Ada";
                        } else {
                        ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">tentang</th>
                                <th scope="col">youtube</th>
                                <th scope="col">artikel</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    $no = 1;
                                    foreach($result as $row){
                                    ?>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo htmlspecialchars($row['tentang']); ?></td>
                                <td>
                                    <a href="<?php echo htmlspecialchars($row['youtube']); ?>" target="_blank">View
                                        Video</a>
                                </td>
                                <td>
                                    <a href="<?php echo htmlspecialchars($row['artikel']); ?>" target="_blank">Read
                                        Article</a>
                                </td>
                            </tr>
                            <?php
                            
                                    }
                                    ?>
                        </tbody>
                    </table>
                </div>
                <?php
                        }
                        ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>