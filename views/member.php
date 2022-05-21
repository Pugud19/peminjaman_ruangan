<?php 
if ($role == 'admin') {
?>
<table class="container table table-striped-columns table-hover mt-50">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody class="table-success ">
                  <!-- Data Member -->
                <?php 
                // ciptakan object dari class gedung
                $obj = new Member();
                // panggil fungsi menampilkan data gedung
                $mr = $obj->getMember();
                // looping data gedung 
                foreach($mr as $mb){
                ?>
    <tr>
      <th scope="row"><?php $mb['id'] ?></th>
      <td><?php $mb['fullname'] ?></td>
      <td><?php $mb['email'] ?></td>
      <td><?php $mb['role'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php 
}
else{
    include_once 'accessUser.php';
}
 ?>