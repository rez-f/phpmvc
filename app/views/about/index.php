    </body>
    <script>
          var select = document.getElementsByTagName('a')[4];
          select.classList.add('active');
    </script>
    <body>
    <div class="container">
        <div class="row mt-4">
        <img src="<?=BASEURL?>/img/lazismu.png" alt="" width="200" class="rounded-circle">
            <div class="col">
            <h2>Indexnya About</h2>
            <p>Nama : <?= $data['nama']?></p>
            <p>Profesi : <?= $data['profesi']?></p>
            <p>Game : <?= $data['game']?></p>
            </div>
        </div>
    </div>
    
