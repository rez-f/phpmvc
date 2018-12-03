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
               <p class="lead">Halo, welcome to my website. <br> <?= $data['nama']; ?></p>
               <hr class="my-4">
               <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
               <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
         </div>
      </div>
   </div>