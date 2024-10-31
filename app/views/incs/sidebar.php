<div class="col-md-4">
  <h5 class="recent-posts">Recent posts</h5>
  <ul class="list-group">
  <?php foreach($recent_posts as $recent_post): ?>
    <li class="list-group-item"><a href="posts?id=<?= $recent_post['id']; ?>" class="card-link"><?= $recent_post['title']; ?></a></li>
  <?php endforeach; ?>
  </ul>
</div>