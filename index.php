<?php

include "header.php";
include "database.php";

$tasks = $db->query("SELECT * FROM taskdata")
?>
<
<div class="card">

  <div class="card-body">
  <form method="post" action="add_task.php">         
                    <label for="exampleInputPassword1" class="form-label"> عنوان خود را وارد کنید</label>
                        <div class="form-floating">
                        <input type="text" name="title" class="form-control " data-bs-toggle="collapse" data-bs-target="#collapseWidthExample">
                        <label for="floatingTextarea">title</label>
                        </div>

                       <label for="exampleInputPassword1" class="form-label"> تسک خود را وارد کنید</label>
                        <div class="form-floating">
                        <input type="text" name="text" class="form-control " data-bs-toggle="collapse" data-bs-target="#collapseWidthExample">
                        <label for="floatingTextarea">task</label>
                        </div>
               
                        <label for="exampleInputPassword1" class="form-label"> رنگ </label>
                        <div class="form-floating">
                            <input type="color" name="color" value="#063d7c" >
                        </div>
                        <label for="exampleInputPassword1" class="form-label"> تاریخ   </label>
                        <div class="col-3">
                            <input type="date" value="" name="date" >
                        </div>
                        <label for="exampleInputPassword1" class="form-label"> زمان   </label>
                        <div class="col-3">
                        <input type="time" value="" name="time" >
                        </div>
                        <br>
                
                    </form>
 </div>
 <button type="submit" class="btn btn-primary">ذخیره</button>
  </div>
</div>               
 <div class="row mt-5" >
            <?php foreach ($tasks as $task): ?>
                <div class=" col-lg-3 col-md-6 col-sm-12 col-12 position-relative">
                    <div class="card text-white mb-3 text-start" style="background:<?php echo $task["color"] ?>; ">
                        <div class="card-header stroke "> <h4 class="d-block"><?php echo $task["title"] ?> </h4>
                        </div>
                        <div class="card-body ">
                            <h5 class="card-text mb-3 stroke " id="text_note"><?php echo $task["text"] ?></h5>
                            <p class="card-text mb-2 stroke fs-6"> <i class="far fa-alarm-clock"></i> <?php echo $task["time"] ?> </p>
                            <p class="card-text  stroke fs-6"><i class="far fa-calendar-alt"></i>  <?php echo $task["date"] ?> </p>
                        </div>
                       
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    
       
<?php

include "footer.php"

?>

