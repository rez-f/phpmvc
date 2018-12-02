</body>
<script>
   var select = document.getElementsByTagName('a')[1];
   select.classList.add('active');
</script>
<body>
   <div class="container">
      <div class="row mt-4">
         <div class="col">
            <div class="jumbotron">
               <h1 class="display-4">Welcome to my website</h1>
               <p class="lead">Halo, nama saya <?= $data['nama']; ?></p>
               <hr class="my-4">
               <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
               <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
         </div>
      </div>
   </div>