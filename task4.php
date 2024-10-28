<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<form class="form-horizontal" action="task4table.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend class="text-center mb-4">Form menggunakan bootstrap v3</legend>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prependedtext">Nama Lengkap</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
      <input id="prependedtext" name="nama" class="form-control" placeholder="" type="text">
    </div>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Umur</label>  
  <div class="col-md-4">
  <input id="textinput" name="umur" type="text" placeholder="" class="form-control">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="gender" id="1" value="Laki - laki" checked="checked">
      Laki - laki
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="gender" id="2" value="Perempuan">
      Perempuan
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Pendidikan</label>
  <div class="col-md-4">
    <select id="pend" name="pendidikan" class="form-control">
      <option value="S1">S1</option>
      <option value="SMA/SMK">SMA/SMK</option>
    </select>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes[]">Hobi</label>
  <div class="col-md-4">
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
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Daftar</button>
  </div>
</div>
</div>
</fieldset>
</form>
