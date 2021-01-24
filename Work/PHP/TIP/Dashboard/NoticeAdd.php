<?php require_once 'require/header.php'; ?>
<div class="row justify-content-center">
  <div class="col-md-7">
    <div class="tile">
      <h3 class="tile-title text-center">ADD NOTICE</h3>
      <hr style="padding: .50px; background: #b70000;">
      <div class="tile-body">


        <form class="form-horizontal" action="NoticeAdd_Post.php" method="post">
          <div class="form-group row">
            <label class="control-label col-md-3">Date</label>
            <div class="col-md-8">
              <input class="form-control" name="NoticeDate" type="date" placeholder="Enter Full Date">
            </div>
          </div>


          <div class="form-group row">
            <label class="control-label col-md-3">Notice Title</label>
            <div class="col-md-8">
              <input class="form-control" name="NoticeTitle" type="text" placeholder="Enter Your Notice Title">
            </div>
          </div>


          <div class="form-group row">
            <label class="control-label col-md-3">Massage</label>
            <div class="col-md-8">
              <textarea class="form-control" name="NoticeMassage" rows="5" placeholder="Enter Your Massage"></textarea>
            </div>
          </div>


          <div class="col-md-12">
            <button class="btn btn-outline-info " type="submit">Submit</button>
          </div>



        </form>
      </div>
      
      
 <!--      <div class="tile-footer">

      </div>
    -->


  </div>
</div>
</div>
<?php require_once 'require/footer.php'; ?>