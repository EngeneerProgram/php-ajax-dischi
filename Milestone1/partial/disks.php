<div class="row gx-5 row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xxl-5">
<?php foreach($disks as $disk) : ?>
    <div class="col p-3">

    <div class="card text-center p-3">
        <div class="image">
            <img src="<?= $disk['poster'] ?>" alt="<?= $disk['title'] ?>">
        </div>

        <div class="text-card">
            <h3><?= $disk['title'] ?></h3>
            <h3><?= $disk['author'] ?></h3>
            <h3><?= $disk['year'] ?></h3>
        </div>
    </div>
    </div>

<?php  endforeach;  ?>
</div>