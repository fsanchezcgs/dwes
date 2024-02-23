<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

$sql = "SELECT *
          FROM 046_comments";

$result = mysqli_query($conn, $sql);

$comments = mysqli_fetch_all($result, MYSQLI_ASSOC);
if (!(empty($comments))) {
?>
  <h3 class="text-center my-3">Comments</h3>
  <section class="d-flex justify-content-center align-content-center flex-wrap">
    <?php foreach ($comments as $comment) { ?>
      <form action="/student046/dwes/db/reservation/comment/db_comment_update.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-start m-2">
        <div class="form-group">
          <label class="m-1">Comment status</label>
          <select name="comment_status">
            <?php if ($comment['comment_status'] == 'published') { ?>
              <option value="published" selected="selected">Published</option>
              <option value="pending">Pending</option>
              <option value="banned">Banned</option>
            <?php } elseif ($comment['comment_status'] == 'pending') { ?>
              <option value="published">Published</option>
              <option value="pending" selected="selected">Pending</option>
              <option value="banned">Banned</option>
            <?php } elseif ($comment['comment_status'] == 'banned') { ?>
              <option value="published">Published</option>
              <option value="pending">Pending</option>
              <option value="banned" selected="selected">Banned</option>
            <?php } ?>
          </select>
        </div>
        <label class="m-1">Customer ID: <?php echo $comment['customer_id'] ?></label>
        <label class="m-1">Reservation Number: <?php echo $comment['reservation_number'] ?></label>
        <label class="m-1">Inserted on: <?php echo $comment['inserted_on'] ?></label>
        <textarea class="textComments my-3" maxlength="500"><?php echo $comment['content'] ?></textarea>
        <label class="m-1">Score: <?php echo $comment['score'] ?></label>
        <input type="submit" name="submit" value="Update" class="btn btn-primary w-100">
      </form>
    <?php
    }
    ?>
  </section>
<?php
} else { ?>
  <h3 class="text-center my-3">There is no comments</h3>
<?php }
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>