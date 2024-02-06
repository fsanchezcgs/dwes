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
        <select name="comment_status" class="me-3">
          <?php if ($comment['comment_status'] == 'public') { ?>
            <option value="public" selected="selected">Public</option>
            <option value="hidden">Hidden</option>
            <option value="not_apropiate">Not apropiate</option>
          <?php } elseif ($comment['comment_status'] == 'hidden') { ?>
            <option value="public">Public</option>
            <option value="hidden" selected="selected">Hidden</option>
            <option value="not_apropiate">Not apropiate</option>
          <?php } elseif ($comment['comment_status'] == 'not_apropiate') { ?>
            <option value="public">Public</option>
            <option value="hidden">Hidden</option>
            <option value="not_apropiate" selected="selected">Not apropiate</option>
          <?php } ?>
        </select>
        <span class="me-3"><?php echo 'Customer ID: ' . $comment['customer_id'] ?></span>
        <span class="me-3"><?php echo 'Reservation: ' . $comment['reservation_id'] ?></span>
        <span class="me-3"><?php echo 'Inserted on: ' . $comment['inserted_on'] ?></span>
        <textarea class="noReSize me-3" readonly maxlength="500"><?php echo $comment['content'] ?></textarea>
        <span class="me-3"><?php echo 'Score: ' . $comment['score'] ?></span>
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