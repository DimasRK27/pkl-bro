<!DOCTYPE html>
<html>
<head></head>
<body>

  <h1>Halaman Upload File</h1>
  <h3>Silahkan Isi Data Yang Tertera di Bawah Ini</h3>
                <form action="" method="POST" enctype="multipart/form-data" align="left">
                  <div class="form-group">

                    <p>Nama File : 
                    <input type="text" class="form-control" id="">
                    </p>
                  </div>
                  <div class="form-group">
                      <p>Jenis : 
                        <select name='JenisFile'>
              <option value="SOP">SOP</option>
              <option value='PDF'>PDF</option>
              <option value='Standar'>Standar</option>
                    </select>
                    </p>
                  </div>

                  <div>
                    <p>Tanggal Penerbitan</p>
                    <input type="date" id="datepicker">
                    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <link rel="stylesheet" href="/resources/demos/style.css">
                  </div>

                  <div class="form-group">
                    <p>Pilih File : 
                    <input type="file" accept="application/pdf"  class="" id="">
                    </p>
                  </div>

                  <div class="form-group">
                    <br>
                    <button class="" type="submit" name="submit">Upload</button>
                  </div>
                </form>
                
</body>
</html>