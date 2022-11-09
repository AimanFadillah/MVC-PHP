<div class="container mt-5">
    <h1>Data</h1>
    <div class="row">
        <div class="col-6">
            <?php foreach($data["mhs"] as $mhs) : ?>
            <ul>
                <li><?= $mhs["nama"] ?></li>
                <li><?= $mhs["nis"] ?></li>
                <li><?= $mhs["gmail"] ?></li>
                <li><?= $mhs["jurusan"] ?></li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
   
