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
  <section class="d-flex flex-column align-content-center flex-wrap">
    <?php foreach ($comments as $comment) { ?>
      <form action="/student046/dwes/db/reservation/comment/db_comment_update.php" method="post" class="my-1 p-3 d-flex align-items-center bg-white">
        <label class="me-1">Comment status</label>
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
        <span class="mx-1">Customer ID</span>
        <input type="text" value="<?php echo $comment['customer_id'] ?>" name="customer_id" readonly>
        <span class="mx-1">Reservation</span>
        <input type="text" value="<?php echo $comment['reservation_number'] ?>" name="reservation_number" width="20px" readonly>
        <span class="mx-1">Inserted on</span>
        <input type="text" value="<?php echo $comment['inserted_on'] ?>" width="20px" readonly>
        <textarea class="noReSize mx-1" readonly maxlength="500"><?php echo $comment['content'] ?></textarea>
        <span class="mx-1"><?php echo 'Score ' . $comment['score'] ?></span>
        <input type="submit" name="submit" value="Update" class="ms-2 mb-2 btn btn-primary">
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