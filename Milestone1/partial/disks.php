<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xxl-5">
<?php foreach($data['response'] as $disks) : ?>
    <div class="col">

    <div class="card text-center p-3">
        <div class="image">
            <img src="<?= $disks['poster'] ?>" alt="<?= $disks['title'] ?>">
        </div>

        <div class="text-card">
            <h3><?= $disks['title'] ?></h3>
            <h3><?= $disks['author'] ?></h3>
            <h3><?= $disks['year'] ?></h3>
        </div>
    </div>
    </div>

<?php  endforeach;  ?>
</div>