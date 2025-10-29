<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUSSY - Insulated Work Jacket Raw Denim</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="CSS/detail.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<!--font-->
<link href='https://fonts.googleapis.com/css?family=Irish Grover' rel='stylesheet'>

</head>
<body>
   
    <!--navbar-start-->
<nav class="navbar navbar-expand-lg " style="font-family: 'Irish Grover';">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img  src="_stussy_wordmark-removebg-preview.png" alt="#" class="logo-nav">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.html">Home</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Shop
          </a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="shop-all.php">All</a></li>
            <li><a class="dropdown-item" href="t-shirt.html">T-Shirt</a></li>
            <li><a class="dropdown-item" href="sweat.html">Sweat</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"></a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index2.html">Features</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--navbar-end-->

    <main class="container">
        <section class="product-section">
            <div class="product-image">
                <img src="foto/WhatsApp Image 2025-07-23 at 10.00.09.jpeg" alt="Insulated Work Jacket Raw Denim">
            </div>
            


            
            <div class="product-info">
                <h1 class="product-title">INSULATED WORK JACKET RAW DENIM</h1>
                <p class="product-price">Rp 1.500.000</p>
                
                <div class="size-selection">
                    <p class="size-title">SELECT SIZE</p>
                    <div class="sizes">
                        <div class="size-option">S</div>
                        <div class="size-option selected">M</div>
                        <div class="size-option">L</div>
                        <div class="size-option">XL</div>
                    </div>
                </div>
                
                <button class="add-to-cart">ADD TO CART</button>
                
                <div class="product-details">
                    <div class="detail-tabs">
                        <div class="tab active" data-tab="description">DESCRIPTION</div>
                        <div class="tab" data-tab="details">PRODUCT DETAILS</div>
                        <div class="tab" data-tab="size-guide">SIZE GUIDE</div>
                    </div>
                    
                    <div class="tab-content active" id="description">
                        <p>Premium insulated work jacket made from raw denim. Designed for durability and style, this jacket features a classic fit with modern details. Perfect for everyday wear in cooler weather.</p>
                    </div>
                    
                    <div class="tab-content" id="details">
                        <p><strong>Material:</strong> 100% Cotton Raw Denim</p>
                        <p><strong>Insulation:</strong> Recycled polyester insulation</p>
                        <p><strong>Closure:</strong> Button front</p>
                        <p><strong>Pockets:</strong> Two chest pockets, two side pockets</p>
                        <p><strong>Care:</strong> Machine wash cold, tumble dry low</p>
                    </div>
                    
                    <div class="tab-content" id="size-guide">
                        <p><strong>S:</strong> Chest 38-40", Length 26"</p>
                        <p><strong>M:</strong> Chest 40-42", Length 27"</p>
                        <p><strong>L:</strong> Chest 42-44", Length 28"</p>
                        <p><strong>XL:</strong> Chest 44-46", Length 29"</p>
                        <p>All measurements are body measurements, not garment measurements.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
<!--footer-->
  <footer class="footer">
  <div class="footer-container">
    <div class="footer-column">
      <h3 style=" font-family: 'Irish Grover';">Stussy</h3>
      <p>Explore our exclusive products and policies.</p>
    </div>
    <div class="footer-column">
      <h4 style=" font-family: 'Irish Grover';">Navigation</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h4 style=" font-family: 'Irish Grover';">Policies</h4>
      <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Refund Policy</a></li>
        <li><a href="#">Shipping Policy</a></li>
        <li><a href="#">Menu Policy</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2025 Stussy. All rights reserved.</p>
  </div>
</footer>

    <script>
        // Tab functionality
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.tab-content');
        
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const tabId = tab.getAttribute('data-tab');
                
                // Remove active class from all tabs and contents
                tabs.forEach(t => t.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked tab and corresponding content
                tab.classList.add('active');
                document.getElementById(tabId).classList.add('active');
            });
        });
        
        // Size selection functionality
        const sizeOptions = document.querySelectorAll('.size-option');
        
        sizeOptions.forEach(option => {
            option.addEventListener('click', () => {
                sizeOptions.forEach(o => o.classList.remove('selected'));
                option.classList.add('selected');
            });
        });
    </script>
</body>
</html>