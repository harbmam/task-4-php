<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<form class="form-horizontal" action="task4table.php" method="POST">
<fieldset class="col-6 m-auto mt-3">

<!-- Form Name -->
<h1 class="text-center">Form Registrasi</h1>
<!-- Prepended text-->
<div class="row mb-3 mt-3">
  <label class="col-4 control-label" for="prependedtext">Nama Lengkap</label>
  <div class="col-8">
  <div class="input-group mb-3">
      <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
</svg></span>
      <input id="prependedtext" name="nama" class="form-control" placeholder="" type="text">
    </div>
    
  </div>
</div>

<!-- Text input-->
<div class="row mb-3 ">
  <label class="col-4 control-label" for="textinput">Umur</label>  
  <div class="col-8">
  <input id="textinput" name="umur" type="text" placeholder="" class="form-control">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="row mb-3 ">
  <label class="col-4 control-label" for="radios">Gender</label>
  <div class="col-8"> 
    <label class="radio-inline me-3" for="radios-0">
      <input class="form-check-input" type="radio" name="gender" id="1" value="Laki - laki" checked="checked">
      Laki - laki
    </label> 
    <label class="radio-inline" for="radios-1">
      <input class="form-check-input" type="radio" name="gender" id="2" value="Perempuan">
      Perempuan
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="row mb-3 ">
  <label class="col-4 control-label" for="selectbasic">Pendidikan</label>
  <div class="col-8">
    <select id="pend" name="pendidikan" class="form-control">
      <option value="S1">S1</option>
      <option value="SMA/SMK">SMA/SMK</option>
    </select>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="row mb-3 ">
  <label class="col-4 control-label" for="checkboxes[]">Hobi</label>
  <div class="col-8">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes[]" id="checkboxes-0" value="Membaca Buku">
      Membaca Buku
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes[]" id="checkboxes-1" value="Traveling">
      Traveling
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-2">
      <input type="checkbox" name="checkboxes[]" id="checkboxes-2" value="Olahraga">
      Olahraga
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-3">
      <input type="checkbox" name="checkboxes[]" id="checkboxes-3" value="Nonton">
      Nonton
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-4">
      <input type="checkbox" name="checkboxes[]" id="checkboxes-4" value="Hiking">
      Hiking
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-5">
      <input type="checkbox" name="checkboxes[]" id="checkboxes-5" value="Mancing">
      Mancing
    </label>
	</div>
  </div>
</div>

<!-- Button -->
<div class="row mb-3 ">
  <label class="col-4 control-label" for="singlebutton"></label>
  <div class="col-8">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Daftar</button>
  </div>
</div>
</div>
</fieldset>
</form> 
