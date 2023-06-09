<?php
require_once("template/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {

        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum adipisci, eum consequatur iure eaque laborum est modi, ullam reiciendis nobis itaque, fuga quidem. Possimus explicabo adipisci reprehenderit! Maxime, laboriosam similique.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum adipisci, eum consequatur iure eaque laborum est modi, ullam reiciendis nobis itaque, fuga quidem. Possimus explicabo adipisci reprehenderit! Maxime, laboriosam similique.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum adipisci, eum consequatur iure eaque laborum est modi, ullam reiciendis nobis itaque, fuga quidem. Possimus explicabo adipisci reprehenderit! Maxime, laboriosam similique.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum adipisci, eum consequatur iure eaque laborum est modi, ullam reiciendis nobis itaque, fuga quidem. Possimus explicabo adipisci reprehenderit! Maxime, laboriosam similique.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum adipisci, eum consequatur iure eaque laborum est modi, ullam reiciendis nobis itaque, fuga quidem. Possimus explicabo adipisci reprehenderit! Maxime, laboriosam similique.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum adipisci, eum consequatur iure eaque laborum est modi, ullam reiciendis nobis itaque, fuga quidem. Possimus explicabo adipisci reprehenderit! Maxime, laboriosam similique.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum adipisci, eum consequatur iure eaque laborum est modi, ullam reiciendis nobis itaque, fuga quidem. Possimus explicabo adipisci reprehenderit! Maxime, laboriosam similique.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum adipisci, eum consequatur iure eaque laborum est modi, ullam reiciendis nobis itaque, fuga quidem. Possimus explicabo adipisci reprehenderit! Maxime, laboriosam similique.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum adipisci, eum consequatur iure eaque laborum est modi, ullam reiciendis nobis itaque, fuga quidem. Possimus explicabo adipisci reprehenderit! Maxime, laboriosam similique.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum adipisci, eum consequatur iure eaque laborum est modi, ullam reiciendis nobis itaque, fuga quidem. Possimus explicabo adipisci reprehenderit! Maxime, laboriosam similique.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum adipisci, eum consequatur iure eaque laborum est modi, ullam reiciendis nobis itaque, fuga quidem. Possimus explicabo adipisci reprehenderit! Maxime, laboriosam similique.

        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul class="tags-list">

            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"> <?= $tag ?> </a> </li>
            <?php endforeach; ?>

        </ul>
        <h3 id="categories-title">Categorias</h3>
        
        <ul id="categories-list">

            <?php foreach ($categories as $catagory) : ?>
                <li><a href="#"><?= $catagory ?></a></li>
            <?php endforeach; ?>

        </ul>
    </aside>

</main>
<h1><?= $currentPost['title'] ?></h1>

<?php
require_once("template/footer.php");
?>