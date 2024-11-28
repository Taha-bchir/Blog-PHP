<?php
// Add a new comment
function addComment($post_id, $user_id, $content) {
    global $pdo;

    $stmt = $pdo->prepare("INSERT INTO comments (post_id, user_id, content) VALUES (:post_id, :user_id, :content)");
    $stmt->execute([
        'post_id' => $post_id,
        'user_id' => $user_id,
        'content' => $content
    ]);
}
?>