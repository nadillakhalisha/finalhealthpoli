<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM makanan");
while($record = mysqli_fetch_assoc($query)){
    $result[] = $record;
}
?>

<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            REKOMENDASI MAKANAN
        </div>
        <div class="card-body">
            <div class="col-lg-9 mt-2">
                <div class="card">
                    <div class="card-header">
                        MENU MAKANAN
                    </div>
                    <div class="card-body">
                        <div class="row">

                        </div>


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

                                        <th scope="col">Nama Makanan</th>
                                        <th scope="col">Foto Makanan</th>
                                        <th scope="col">Kalori</th>
                                        <th scope="col">Resep</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($result as $row){
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++ ?></th>
                                        <td><?php echo ($row['nama_makanan']); ?></td>
                                        <td>
                                            <div style="width:100px">

                                            </div>

                                            <img src="assets/img/<?php echo ($row['foto_makanan']); ?>"
                                                class="img-thumbnail" alt="...">
                                        </td>
                                        <td><?php echo ($row['kalori']); ?></td>
                                        <td>
                                            <a href="<?php echo htmlspecialchars($row['resep']); ?>"
                                                target="_blank">Read
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