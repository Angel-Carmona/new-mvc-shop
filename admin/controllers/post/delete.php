<?php

permission_user();
permission_moderator();

require_once('admin/models/posts.php');

$postId = intval($_GET['post_id']);
postDelete($postId);

header('location:admin.php?controller=post');