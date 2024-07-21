<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM profile_mahasiswa");
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
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Pertemuan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate action="proses/proses_input_admin.php"
                                            method="POST">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingNama"
                                                            placeholder="Your Name" name="Nama" required>
                                                        <label for="floatingNama">Nama</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Nama
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingPertemuan"
                                                            placeholder="Your Name" name="Pertemuan" required>
                                                        <label for="floatingPertemuan">Pertemuan</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Pertemuan
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="pemantauan">
                                                            <option selected hidden>Jenis Pemantauan</option>
                                                            <option>Mental</option>
                                                            <option>Fisik</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingHari"
                                                            placeholder="Your Name" name="hari" required>
                                                        <label for="floatingHari">Hari</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Hari
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="date" class="form-control" id="floatingTanggal"
                                                            placeholder="Your Name" name="Tanggal">
                                                        <label for="floatingTanggal" required>Tanggal</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Tanggal
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="via_konseling" required>
                                                            <option selected hidden>Via Pertemuan</option>
                                                            <option>Offline</option>
                                                            <option>Online</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Masukkan Pertemuan
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    name="input_admin_validate" value="12345">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- AKhir Modal Tambah Pertemuan Baru -->

                        <!-- Modal View -->
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
                                                        <input type="text" class="form-control" id="floatingNama"
                                                            placeholder="Your Name" name="Nama" required
                                                            value="<?php echo $row['Nama']; ?>">
                                                        <label for="floatingNama">Nama</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Nama
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingPertemuan"
                                                            placeholder="Your Name" name="Pertemuan" required>
                                                        <label for="floatingPertemuan">Pertemuan</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Pertemuan
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="pemantauan">
                                                            <option selected hidden>Jenis Pemantauan</option>
                                                            <option>Mental</option>
                                                            <option>Fisik</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingHari"
                                                            placeholder="Your Name" name="hari" required>
                                                        <label for="floatingHari">Hari</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Hari
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="date" class="form-control" id="floatingTanggal"
                                                            placeholder="Your Name" name="Tanggal">
                                                        <label for="floatingTanggal" required>Tanggal</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Tanggal
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="via_konseling" required>
                                                            <option selected hidden>Via Pertemuan</option>
                                                            <option>Offline</option>
                                                            <option>Online</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Masukkan Pertemuan
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    name="input_admin_validate" value="12345">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="ModalView" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
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
                                        <th scope="col">Nama</th>
                                        <th scope="col">Pertemuan</th>
                                        <th scope="col">Pemantauan</th>
                                        <th scope="col">Hari</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Via</th>
                                        <th scope="col">Aksi</th>
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
                                        <td class="d-flex">

                                            <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalEdit"><i class="bi bi-pen"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash2"></i></button>
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