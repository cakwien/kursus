<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
   <title>OsingCourse Daftar Member</title>
</head>

<body>

   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#2C2E43;">
      <div class="container">
         <a class="navbar-brand" href="#">OsingCourse</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
      </div>
   </nav>

   <div class="container mb-4">
      <div class="row">
         <div class="col-md-8 mt-3">
            <form action="" method="post">
               <div class="card">
                  <div class="card-header">
                     Daftar Member Baru
                  </div>
                  <div class="card-body">
                     <div class="form-group mb-2">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="">
                     </div>
                     <div class="form-group mb-2">
                        <label for="nama">Email</label>
                        <input type="email" name="email" class="form-control" id="">
                     </div>
                     <div class="form-group mb-2">
                        <label for="nama">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="">
                     </div>
                     <div class="form-group mb-2">
                        <label for="nama">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir" class="form-control" id="">
                     </div>
                     <div class="form-group mb-2">
                        <label for="nama">No HP</label>
                        <input type="text" name="no_hp" class="form-control" id="">
                     </div>
                     <div class="form-group mb-2">
                        <label for="nama">Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" class="form-control" id="">
                     </div>
                     <div class="row mt-3">
                        <div class="col-md-12">
                           <div class="card border-secondary">
                              <div class="card-body">
                                 <div class="form-group mb-2">
                                    <label for="">Password</label>
                                    <input type="password" name="password1" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label for="">Ulangi Password</label>
                                    <input type="password" name="password2" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row mt-3">
                        <div class="col-md-1 mt-2">
                           <input type="checkbox" class="form-check-input float-end" name="setuju">
                        </div>
                        <div class="col-md-10 mt-2">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita delectus nam facere ut accusamus eaque iusto blanditiis dolorem. Non, illum?
                        </div>
                     </div>
                  </div>
                  <div class="card-footer">
                     <input type="submit" name="daftar" class="btn btn-primary float-end" value="DAFTAR">
                  </div>

               </div>
            </form>
         </div>
      </div>
   </div>







   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>