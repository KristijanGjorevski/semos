<table>
  <thead>
    <tr>
      <th>Title</th>
      <th>Content</th>
      <th>Publish Date</th>
      <th>Select</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($posts_return as $post) { ?>
        <tr>
          <td><?= $post["title"] ?></td>
          <td><?= $post["content"] ?></td>
          <td><?= $post["publish_date"] ?></td>
          <td><a href="?params=posts/getPost/<?=$post["id"]?>">Post</a></td>
        </tr>
    <?php } ?>
  </tbody>
</table>
<a href="?params=posts/getAllPosts">Show Posts</a>