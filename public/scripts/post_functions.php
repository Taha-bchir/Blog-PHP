<?php
function addPost($title, $content, $author_id, $category_id) {
    global $pdo;

    $stmt = $pdo->prepare("INSERT INTO posts (title, content, author_id, category_id) VALUES (:title, :content, :author_id, :category_id)");
    $stmt->execute([
        'title' => $title,
        'content' => $content,
        'author_id' => $author_id,
        'category_id' => $category_id
    ]);
    return $pdo->lastInsertId();
}
?>