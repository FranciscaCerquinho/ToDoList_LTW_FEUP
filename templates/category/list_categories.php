<?php ?>
<aside id="categories">
    <?php foreach ($categories as $category) { ?>
      <a href="category.php?cat_id=<?=$category['cat_id']?>"><img src="<?php echo $category['cat_photo']?>">&nbsp; &nbsp; &nbsp; &nbsp;<?=$category['cat_name']?></a>
    <?php } ?>
</aside>

<aside id="buttons" >
  <form method="post" action="search.php" >
  <input class="search_bar" type="text" name="search"  id="search" placeholder="Search.." >
  </form>
  <div>
    <a href="sharedLists.php"><img src="images/users.png"></a>
    <a class="shareLists" data-popup-deleteTask-open="popup-1" href="#"><img src="images/share.png"></a>
    <div class="popup-deleteTask" data-popup-deleteTask="popup-1">
      <div class="popup-inner-deleteTask">

        <form id=delete_task action="share.php" method="post">

        <select class="dropdown" id="allLists" name="allLists" >
          <?php foreach ($allLists as $list) { ?>

           <li> <option class="inputField-share" value ="<?=$list['toDoList_id']?>" id="list_id" name="list_id" href="#">
             <?=$list['toDoList_id']?> : <?=$list['toDoList_name']?></option></li>
           <?php } ?>
        </select>

        <select class="dropdown" id="users" name="users" >
          <?php foreach ($allUsers as $user) { ?>
           <li> <option class="inputField-share" <?=$user['usr_name']?> id="user_id" name="user_id" href="#">
             <?=$user['usr_id']?> : <?=$user['usr_name']?></option></li>
           <?php } ?>
        </select>

          <br></br>
          <input id="submit" type="submit" value ="Share">
        </form>

        <a class="popup-close-deleteTask" data-popup-close-deleteTask="popup-1" href="#"></a>
      </div>
    </div>

<!--  <a href="allTasks.php"><img src="images/viewAllTasks.png"></a>-->
  <a href="completedTasks.php"><img src="images/completed.png"></a>
  <a class="edit_profile" data-popup-open="popup-1" href="#"><img src="images/edit.png"></a>

  <div class="popup" data-popup="popup-1">
      <div class="popup-inner">

        <form action="change_name.php" method="post">
          <input class="inputField" type="text" id="name" required="required" name="name" placeholder="New name">
          <input class= "editSubmit" id="submit" type="submit" value ="Change">

        </form>
        <form action="change_email.php" method="post">
          <input class="inputField" type="email" id="email" required="required" name="email" placeholder="New email">
          <input class= "editSubmit" id="submit" type="submit" value ="Change">
        </form>

        <form action="change_password.php" onsubmit="return validate(this);" method="post">
						<input class="inputField" type="password" minlength="8" id="password" name="password" required="required" placeholder="New password">
						<input class="inputField" type="password" id="passwordConfirm" name="passwordConfirm" required="required" placeholder="Confirm password">
						<input id="submit" type="submit" value ="Submit">
				</form>

        <a class="popup-close" data-popup-close="popup-1" href="#"></a>
      </div>
    </div>

  <a href="action_logout.php"><img src="images/logout.jpg"></a>
</div>
</aside>

<section id="user_info">
  <article>
    <?php echo "<img src='images/".$_SESSION['usr_info']['usr_photo']."' alt='Foto de exibição' /><br />";
    ?>
  </article>
  <p> <?=$_SESSION['usr_info']['usr_name']?> </p>
  <p> @<?=$_SESSION['usr_info']['usr_username']?> </p>
  <p> <?=$_SESSION['usr_info']['usr_age']?> years</p>
  <p> <?=$_SESSION['usr_info']['usr_email']?> </p>
</section>
