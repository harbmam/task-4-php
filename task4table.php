<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<table class="table table-dark table-bordered " style="text-align: center;">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Gender</th>
      <th scope="col">Pendidikan</th>
      <th scope="col">Hobi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="text-align: left;"><?php $nama = $_POST['nama']; echo $nama; ?></th>
      <td><?php $umur = $_POST['umur']; echo $umur; ?></td>
      <td><?php $gender = $_POST['gender']; echo $gender; ?></td>
      <td><?php $pend = $_POST['pendidikan']; echo $pend; ?></td>
      <td style="text-align: left;"><?php $hobi = $_POST['checkboxes']; foreach ($hobi as $check){echo $check." | ";} ?></td>
    </tr>
    <tr>
      <td><a href="task4.php">back</a></td>
      <td colspan="4"></td>
    </tr>
  </tbody>
</table>
<br>
<br>