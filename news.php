
   <?php 
include("./partials/head.php");
include("./partials/nav.php");
 ?>
 <link href="./css/news.style.css" rel="stylesheet">
  <!-- Blog Section -->
  <section class="py-5 blog-section">
    <div class="container">
      <div class="row mb-5">
        <!-- Breadcrumb -->
        <div class="breadcrumb py-4 text-center">
          <div class="container">
            <div class="breadcrumb-text">
              <h2 >Blog</h2>
              <div class="bt-option">
                <a href="./index.php" class="fw-medium text-decoration-none text-dark">Home</a>
                <span class="mx-1 text-secondary">></span>
                <span class="text-secondary">Blog</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Flexbox Blog Layout -->
      <div class="d-flex flex-wrap justify-content-center gap-4">
        
        <div class="blog-flex-item">
          <div class="blog-item">
            <img src="img/blog/room-6.jpg" alt="Tremblant In Canada"/>
            <span class="blog-tag">Travel Trip</span>
            <div class="blog-content">
              <h4><a href="./news.php">Tremblant In Canada</a></h4>
              <div class="text-white-50"><i class="far fa-clock"></i> 15th April, 2019</div>
            </div>
          </div>
        </div>

        <div class="blog-flex-item">
          <div class="blog-item">
            <img src="img/blog/room-4.jpg" alt="Choosing A Static Caravan"/>
            <span class="blog-tag">Camping</span>
            <div class="blog-content">
              <h4><a href="./news.php">Choosing A Static Caravan</a></h4>
              <div class="text-white-50"><i class="far fa-clock"></i> 15th April, 2019</div>
            </div>
          </div>
        </div>

        <div class="blog-flex-item">
          <div class="blog-item">
            <img src="img/blog/room-5.jpg" alt="Copper Canyon"/>
            <span class="blog-tag">Event</span>
            <div class="blog-content">
              <h4><a href="./news.php">Copper Canyon</a></h4>
              <div class="text-white-50"><i class="far fa-clock"></i> 21st April, 2019</div>
            </div>
          </div>
        </div>

        <div class="blog-flex-item">
          <div class="blog-item">
            <img src="img/blog/room-b2.jpg" alt="Bryce Canyon A Stunning"/>
            <span class="blog-tag">Travel Trip</span>
            <div class="blog-content">
              <h4><a href="./news.php">Bryce Canyon A Stunning</a></h4>
              <div class="text-white-50"><i class="far fa-clock"></i> 29th April, 2019</div>
            </div>
          </div>
        </div>

        <div class="blog-flex-item">
          <div class="blog-item">
            <img src="img/blog/room-b3.jpg" alt="Motorhome Or Trailer"/>
            <span class="blog-tag">Event & Travel</span>
            <div class="blog-content">
              <h4><a href="./news.php">Motorhome Or Trailer</a></h4>
              <div class="text-white-50"><i class="far fa-clock"></i> 30th April, 2019</div>
            </div>
          </div>
        </div>

        <div class="blog-flex-item">
          <div class="blog-item">
            <img src="img/room/room-b4.jpg" alt="Lost In Lagos Portugal"/>
            <span class="blog-tag">Camping</span>
            <div class="blog-content">
              <h4><a href="./news.php">Lost In Lagos Portugal</a></h4>
              <div class="text-white-50"><i class="far fa-clock"></i> 30th April, 2019</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Load More Button -->
      <div class="text-center mt-5">
        <a href="#" class="load-more-btn pb-1">Load More</a>
      </div>
    </div>
  </section>
  <?php 
include "./partials/footer.php";
?>
</body>
</html>
