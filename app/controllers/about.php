<?php

$db = \myfrm\App::get(\myfrm\Db::class);

$title = 'blog :: home';

$post = '
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus error sed ut vero voluptates asperiores quis praesentium sunt porro sequi. Illo veniam a, impedit tenetur distinctio commodi amet dolores numquam.</p>
  <p>Sit corrupti cum accusamus culpa ea laboriosam inventore quae dolor voluptate cupiditate dolores facilis harum, tempore molestiae, atque consequatur? Ab ea id corporis quasi maiores dicta repellat voluptatum necessitatibus obcaecati!</p>
  <p>Ad distinctio ex autem quis in dicta eum! Sapiente cum ratione provident dolor eius magni unde tenetur enim voluptatem nisi? Eum quisquam exercitationem quos quibusdam soluta consequatur molestiae quas! Architecto!</p>
';

$recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();


require_once VIEWS . '/about.tpl.php';