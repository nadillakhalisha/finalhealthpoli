<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM fisik");
$result = [];
while($record = mysqli_fetch_assoc($query)){
    $result[] = $record;
}
?>

<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            ADMIN
        </div>
        <div class="card-body">
            <div class="col-lg-9 mt-2">
                <div class="card">
                    <div class="card-header">
                        DAFTAR KONSELING
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#DaftarPertemuan">Daftar Pertemuan</button>
                            </div>
                        </div>
                        <!-- Modal Tambah Pertemuan Baru -->
                        <div class="modal fade" id="DaftarPertemuan" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Pemantauan Fisik</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate action="proses/proses_input_fisik.php"
                                            method="POST">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingKalori"
                                                            placeholder="Jumlah Kalori" name="jumlah_kalori" required>
                                                        <label for="floatingKalori">Jumlah Kalori</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Jumlah Kalori
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingOlahraga"
                                                            placeholder="Olahraga" name="olahraga" required>
                                                        <label for="floatingOlahraga">Olahraga</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Olahraga
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingHari"
                                                            placeholder="Hari" name="jumlah" required>
                                                        <label for="floatingHari">Hari</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Hari
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    name="input_fisik_validate" value="12345">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- AKhir Modal Tambah Pertemuan Baru -->

                        <!-- Modal Edit -->
                        <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pertemuan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate action="proses/proses_edit_admin.php"
                                            method="POST">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingEditKalori"
                                                            placeholder="Jumlah Kalori" name="jumlah_kalori" required
                                                            value="<?php echo htmlspecialchars($row['jumlah_kalori']); ?>">
                                                        <label for="floatingEditKalori">Jumlah Kalori</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Jumlah Kalori
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control"
                                                            id="floatingEditOlahraga" placeholder="Olahraga"
                                                            name="olahraga" required
                                                            value="<?php echo htmlspecialchars($row['olahraga']); ?>">
                                                        <label for="floatingEditOlahraga">Olahraga</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Olahraga
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingEditHari"
                                                            placeholder="Hari" name="jumlah" required
                                                            value="<?php echo htmlspecialchars($row['jumlah']); ?>">
                                                        <label for="floatingEditHari">Hari</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Hari
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    name="input_fisik_validate" value="12345">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal View -->
                        <div class="modal fade" id="ModalView" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal View -->

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
                                        <th scope="col">Jumlah Kalori</th>
                                        <th scope="col">Olahraga</th>
                                        <th scope="col">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($result as $row){
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++ ?></th>
                                        <td><?php echo htmlspecialchars($row['jumlah_kalori']); ?></td>
                                        <td><?php echo htmlspecialchars($row['olahraga']); ?></td>
                                        <td><?php echo htmlspecialchars($row['jumlah']); ?></td>
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