<?php

$id = $_GET['id'];
$book = new Book();
$object = $book->single_books($id);

?>


 
  <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Sửa chi tiết sách</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">

        <form class="form-horizontal well span4" action="controller.php?action=edit&id=<?php echo $id;?>" method="POST"> 

          <div class="col-md-12"> 
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="AccessionNo">IBSN</label><input class="form-control " id="IBSN" name="IBSN" type="text" placeholder="Enter IBSN" readonly="off" value="<?php echo $object->IBSN;?>" /></div>
        </div> 
    </div>
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="BookTitle">Tiêu đề</label><input class="form-control " id="BookTitle" name="BookTitle" type="text" placeholder="Enter Title" value="<?php echo $object->BookTitle;?>"/></div>
        </div>
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="BookDesc">Chủ đề</label><input class="form-control " id="BookDesc" name="BookDesc" type="text" placeholder="Enter Description" value="<?php echo $object->BookDesc;?>"/></div>
        </div>
    </div>  
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="Author">Tác giả</label><input class="form-control " id="Author" name="Author" type="text" placeholder="Enter Author" value="<?php echo $object->Author;?>"/></div>
        </div>
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="PublishDate">Ngày XB</label><input class="form-control " id="datepicker" name="PublishDate" type="text" placeholder="Select Date" value="<?php echo $object->PublishDate;?>" readonly /></div>
        </div>
    </div>  
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="BookPublisher">Nhà XB</label><input class="form-control " id="BookPublisher" name="BookPublisher" type="text" placeholder="Enter Publisher" value="<?php echo $object->BookPublisher;?>"/></div>
        </div>
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="Category">Thể loại</label>
                 <select class="form-control " name="Category" id="Category">
                      <?php
                      $categ = new Category();
                      $cur = $categ->listofcategory(); 
                      foreach ($cur as $category) {
                        if ($category->Category == $object->Category) {
                          # code...
                          echo '<option SELECTED>'.$category->Category.' </option>';
                        }else{
                          echo '<option>'.$category->Category.' </option>';
                        }
                      }

                   ?>
              
            </select> 
          </div>
        </div>
    </div> 
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="DDecimal">Dewey Decimal</label><input class="form-control " id="DDecimal" name="DDecimal" type="text" placeholder="Enter Dewey Decimal" readonly="true" value="<?php echo $object->DDecimal;?>"/></div>
        </div>
        
    </div>   
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="BookPrice">Giá</label><input class="form-control " id="BookPrice" name="BookPrice" type="text" placeholder="Enter Price" value="<?php echo $object->BookPrice;?>"/></div>
        </div>
           
    </div>   
</div>



       <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "idno"></label>

                <div class="col-md-8">
                  <button class="btn btn-primary" name="savecourse" type="submit" ><span class="fa fa-save"></span> Lưu</button>
                  
                </div>
              </div>
            </div>
</form> 

</div>
</div>
</div>