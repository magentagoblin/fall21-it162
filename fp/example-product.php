<?php include "includes/header.php";?>

<div class="product-detail-grid">
    <div class="product-slides">
        <img class="product-image" src="images/tp-sqr.png" alt="Placeholder rectangle image, product image will go here.">
        <img class="product-image" src="images/tp-sqr3.png" alt="Placeholder rectangle image, product image will go here.">
        <img class="product-image" src="images/tp-sqr2.png" alt="Placeholder rectangle image, product image will go here.">

        <button class="product-button display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="product-button display-right" onclick="plusDivs(+1)">&#10095;</button>
    </div>
    <div>
        <div class="product-detail-container">
          <p id="product-name">Product Name</p>
          <p id="product-price">$00.00</p>
          <p id="product-detail">Product details. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("product-image");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>
 
    </section>


<?php include "includes/footer.php";?>
