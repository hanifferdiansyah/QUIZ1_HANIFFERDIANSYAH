<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dosen</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
            <div class="card-header">
                <h3>Form Dosen</h3>
            </div>
            <div class="card-body">
                <form action="tabelDosen.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIDN</label>
                        <input type="text" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Rumpun</label>
                        <select name="rumpun" id="" class="form-control">
                            <option value="">-RUMPUN-</option>
                            <option value="KOMPUTER">komputer</option>
                            <option value="AKUNTANSI">akuntansi</option>
                            <option value="MANAJEMEN">manajemen</option>
                            <option value="PERPAJAKAN">perpajakan</option>
                            <option value="BISNIS">bisnis</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggalLahir" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html> 