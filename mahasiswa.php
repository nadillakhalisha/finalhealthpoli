<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM profile_mahasiswa");
while($record = mysqli_fetch_assoc($query)){
    $result[] = $record;
}
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            DAFTAR JADWAL KONSELING
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
                                <th scope="col">Nama</th>
                                <th scope="col">Pertemuan</th>
                                <th scope="col">Pemantauan</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Via</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    $no = 1;
                                    foreach($result as $row){
                                    ?>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo htmlspecialchars($row['Nama']); ?></td>
                                <td><?php echo htmlspecialchars($row['Pertemuan']); ?></td>
                                <td><?php echo htmlspecialchars($row['pemantauan']); ?></td>
                                <td><?php echo htmlspecialchars($row['hari']); ?></td>
                                <td><?php echo htmlspecialchars($row['Tanggal']); ?></td>
                                <td><?php echo htmlspecialchars($row['via_konseling']); ?></td>

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

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()
</script>