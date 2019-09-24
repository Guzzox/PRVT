<?php
$title = "PRVT - ".$topic['title'];
ob_start(); ?>
<body>
  <a href="topic.php" class="btn btn-lg btn-outline-primary float-right text-right m-5">Back to topics list</a>
  <section class="container">
      <div class="jumbotron jumbotron-fluid mt-5">
          <div class="container">
              <h1 class="display-4"><?php echo htmlspecialchars($topic['title']); ?></h1>
              <p class="lead"><?php echo htmlspecialchars($topic['text']); ?>
              </p>
              <hr class="my-4">

              <p><?php echo date_format($topicDate, 'd F Y'); ?> at <?php echo date_format($topicDate, 'H:i'); ?> by
                  <strong><?php echo $topic['author_name']?></strong>
              </p>
          </div>
      </div>
  </section>
  <section class="container">
        <?php
        while ($comment = $reqComments->fetch()) {
            $commentDate = date_create($comment['last_edit']);
            ?>
            <div id="<?= htmlspecialchars($comment['id_public']);?>" class="card W-100 mb-3">
              <div class="card-header">
                <?= date_format($topicDate, 'd F Y'); ?> at <?= date_format($topicDate, 'H:i'); ?>
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>
                    <?= htmlspecialchars($comment['text']);?>
                  </p>
                  <footer class="blockquote-footer">
                    by
                    <cite>
                      <?= $comment['author_name'];?>
                    </cite>
                  </footer>
                </blockquote>
              </div>
            </div>
            <?php
        }
        ?>
    </section>
    <ul class="pagination justify-content-center mt-3">
        <?php
        $prevPage = intval($page)-1;
        $thisPage = intval($page);
        $nextPage = intval($page)+1;
        if($prevPage!=0)
        {
          echo '<li class="page-item"><a class="page-link" href="topic.php?topic='.$_GET['topic'].'&page='.$prevPage.'">'.$prevPage.'</a></li>';
        }
        ?>
        <li class="page-item"><a class="page-link" href="topic.php?topic=<?=$_GET['topic']?>&page=<?= $thisPage?>"><?= $thisPage?></a></li>
        <li class="page-item"><a class="page-link" href="topic.php?topic=<?=$_GET['topic']?>&page=<?= $nextPage?>"><?= $nextPage?></a></li>
    </ul>
  </nav>
    <?php
      require_once('view/formComment.php');
    ?>
  <?php $content = ob_get_clean();
  require('view/templateForum.php');
  ?>
