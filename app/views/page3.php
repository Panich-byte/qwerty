<?php
$title = "Главная страница";
require_once __DIR__ . "/parts/header.php";?>

<h2>Посты</h2>
<a class="btn btn-primary mt-3 mb-3 p-2"
   href="../db/posts/insertPost.php">
   Добавить новую запись</a>
<!--<div class="row">-->
<!--    <a class="btn btn-primary m-3 p-2"-->
<!--       href="../../insertPost.php">-->
<!--        Добавить новую запись-->
<!--    </a>-->
<!--</div>-->
<!--<table class="table table-striped table-bordered table-hover col-12">-->
<!--    <tr class="d-flex">-->
<!--        <td class="col-1 text-center" >#</td>-->
<!--        <td class="col-2 text-center">Название</td>-->
<!--        <td class="col-3 text-center">Описание</td>-->
<!--        <td class="col-2 text-center">Дата публикации</td>-->
<!--        <td class="col-4 text-center"></td>-->
<!--    </tr>-->
<!---->
<!--    --><?php
//    $i=1;
//    foreach($posts as $post):?>
<!--        <tr class="d-flex">-->
<!--            <td class="col-1 text-center">--><?//=$i++?><!--</td>-->
<!--            <td class="col-2">--><?//=$post->title?><!--</td>-->
<!--            <td class="col-3">--><?//= nl2br($post->description)?><!--</td>-->
<!--            <td class="col-2 text-center">-->
<!--                --><?//= date_format(new DateTime($post->datePublication),'d.m.Y')?>
<!--            </td>-->
<!--            <td class="col-4 p-2 text-center">-->
<!--                <a class="btn btn-danger"-->
<!--                   href='../../deletePost.php?id=--><?//=$post->id;?><!--'>-->
<!--                    Удалить-->
<!--                </a>-->
<!--                <a class="bnt bnt-info"-->
<!--                   href='../../updatePost.php?id=--><?//=$post->id;?><!--'>-->
<!--                    Изменить-->
<!--                </a>-->
<!--            </td>-->
<!--        </tr>-->
<!--    --><?php //endforeach;?>
<!--</table>-->
<div class="row" >
<!--    --><?php
//    $i=1;
//    foreach($posts as $post):?>
<!--    <div class="card mt-3 p-2 col-md-4 col-sm-6">-->
<!--        <img src="--><?//=$post->photo ? 'uploads/' . $post->photo : ''?><!--"-->
<!--             class="card-img-top img-small" alt="Фото">-->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title">--><?//=$post->title?><!--</h5>-->
<!--            <p class="card-text">-->
<!--                --><?//= date_format(new DateTime($post->datePublication),'d.m.Y')?>
<!--            </p>-->
<!--            <a class="btn btn-danger"-->
<!--               href='../../deletePost.php?id=--><?//=$post->id;?><!--'>-->
<!--                Удалить-->
<!--            </a>-->
<!--            <a class="btn btn-info"-->
<!--               href='../../updatePost.php?id=--><?//=$post->id;?><!--'>-->
<!--                Изменить-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<?php
$i = 1;
foreach ($posts as $post): ?>
<div class="card mt-3 p-2 col-md-4 col-sm-6">
    <img src="<?=$post->photo ? '../uploads/'.$post->photo : ''?>"
         class="card-img-top img-small" alt="Фото">
    <div class="card-body">
        <h5 class="card-title"><?= $post->title?></h5>
        <p class="card-text">
            <?= date_format(new DateTime($post->datePublication),'d.m.Y')?>
        </p>
        <a class="btn btn-info p-2" style="width:100%;"
           href='/app/db/posts/showPost.php?id=<?=$post->id;?>'>
            Подробно
        </a>
</div>
</div>
        <?php endforeach;?>

<?php require_once __DIR__ . "/parts/footer.php" ?>