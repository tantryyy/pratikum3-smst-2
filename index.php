<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   
<form method="GET" action="index2.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control" require>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" require>
      <option value="ddp">Pilih mata kuliah</option>
        <option value="ddp">DDP</option>
        <option value="basis data">Basis Data</option>
        <option value="pw">pw</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="UTS" name="UTS" type="text" class="form-control" require>
    </div>
  </div>
  <div class="form-group row">
    <label for="UAS" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="UAS" name="UAS"  type="text" class="form-control" require>
    </div>
  </div>
  <div class="form-group row">
    <label for="Tugas" class="col-4 col-form-label">Nilai tugas/Pratikum</label> 
    <div class="col-8">
      <input id="Tugas" name="Tugas" type="text" class="form-control" require>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
</html>