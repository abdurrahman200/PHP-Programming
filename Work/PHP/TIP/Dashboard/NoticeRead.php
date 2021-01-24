<?php require_once 'require/header.php'; ?>
<?php require_once '../Database/Database.php'; ?>
<div class="row justify-content-center">
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title text-center">Notice Read Table</h3>
      <hr style="padding: .50px; background: #b70000;">
      <?php
      $notice_get_table ="SELECT * FROM noticetable";
      $notice_get_table_result =  mysqli_query($db_connect,$notice_get_table);
      ?>
      <table class="table table-striped bg-primary table-hover">
        <thead >
          <tr>
            <th>ID</th>
            <th>Notice Date</th>
            <th>Notice Title</th>
            <th>Notice Massage</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($notice_get_table_result as $value) {
          ?>
          <tr>
            <td><?=$value['id'] ?></td>
            <td width="10%"><?=$value['Notice_Date'] ?></td>
            <td width="10%"><?=$value['Notice_Title'] ?></td>
            <td ><?=$value['Notice_Massage'] ?></td>
            <td>
              <a href="NoticeEdit.php?id=<?=$value['id'] ?>"  type="submit"class="btn btn-sm btn-outline-info"> <i class="fas fa-edit"></i></a>
            </td>
            <td>
              <a href="NoticeDelete.php?id=<?=$value['id'] ?>" type="submit" class="btn btn-sm btn-outline-danger"> <i class="fa fa-trash" ></i></a>
            </td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php require_once 'require/footer.php'; ?>