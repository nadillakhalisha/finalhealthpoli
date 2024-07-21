<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="width:250px">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'home') || !isset($_GET['x']) ? 'active link-light' : 'link-dark'; ?>"
                                aria-current="page" href="home">
                                <i class="bi bi-house-fill"></i> Dashboard
                            </a>
                        </li>

                        <?php if ($hasil['id_level'] == 1 || $hasil['id_level'] == 3) { // Admin and level 3 ?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'admin') ? 'active link-light' : 'link-dark'; ?>"
                                href="admin">
                                <i class="bi bi-person-video3"></i> Daftar Konselor
                            </a>
                        </li>
                        <?php } ?>

                        <?php if ($hasil['id_level'] != 2 && $hasil['id_level'] != 3) { // All except level 2 and level 3 ?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'mahasiswa') ? 'active link-light' : 'link-dark'; ?>"
                                href="mahasiswa">
                                <i class="bi bi-search-heart-fill"></i> Profil Mahasiswa
                            </a>
                        </li>
                        <?php } ?>

                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'konseling') ? 'active link-light' : 'link-dark'; ?>"
                                href="konseling">
                                <i class="bi bi-backpack4-fill"></i> Konseling dan Dukungan Psikologis
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'mental') ? 'active link-light' : 'link-dark'; ?>"
                                href="mental">
                                <i class="bi bi-search-heart-fill"></i> Pemantauan Kesehatan Mental
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'fisik') ? 'active link-light' : 'link-dark'; ?>"
                                href="fisik">
                                <i class="bi bi-search-heart-fill"></i> Pemantauan Kesehatan Fisik
                            </a>
                        </li>

                        <?php if ($hasil['id_level'] == 1) { // Admin only ?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'makanan') ? 'active link-light' : 'link-dark'; ?>"
                                href="makanan">
                                <i class="bi bi-search-heart-fill"></i> Pemantauan Makanan Mahasiswa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'edukasi') ? 'active link-light' : 'link-dark'; ?>"
                                href="edukasi">
                                <i class="bi bi-backpack4-fill"></i> Edukasi dan Sumber Daya
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>