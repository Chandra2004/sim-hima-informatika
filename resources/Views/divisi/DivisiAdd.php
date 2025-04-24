<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMIF - Tambah Divisi</title>
    <link rel="icon" type="image/png" href="./public/image/HMIF_1.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include './resources/views/include/navbarSistem.php'; ?>
        <?php include './resources/views/include/sidebar.php'; ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tambah Divisi Baru</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <?php if (isset($error)) : ?>
                                <div class="alert alert-danger"> <?= $error; ?> </div>
                            <?php endif; ?>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="divisi_name">Nama Divisi</label>
                                    <input type="text" class="form-control" name="divisi_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="divisi_description">Deskripsi</label>
                                    <textarea class="form-control" name="divisi_description" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="divisi_status">Status</label>
                                    <select class="form-control" name="divisi_status">
                                        <option value="1">Aktif</option>
                                        <option value="0">Nonaktif</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                <a href="index.php?modul=divisi&fitur=list" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include './resources/views/include/footerSistem.php'; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('[data-widget="treeview"]').Treeview('init');
        });
    </script>
</body>
</html>
