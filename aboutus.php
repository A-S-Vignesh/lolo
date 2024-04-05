<?php 
include 'header.php'; 
?>
<nav class="navbar navbar-expand-sm sticky-top border-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="Images\Logo\Logo_new.png" width="30px" height="30px"></a>
        <a class="navbar-brand title" href="index.php">LoLo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Men.php">Mens</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Women.php">Womens</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="Kids.php">Kids</a>
        </li>
        </ul>
    </div>
</nav>
	<div class="container">
		<h1>About Us</h1>
		<p>Welcome to Footwear Shop, your one-stop-shop for all things shoes! We are a family-owned business with over 20 years of experience in the footwear industry. Our mission is to provide our customers with high-quality shoes at affordable prices, with exceptional customer service to match.</p>

		<h2>Our Products</h2>
		<p>We offer a wide range of shoes for men, women, and children, from popular brands to lesser-known ones. Our products are carefully selected to ensure they meet our high standards of quality and durability.</p>

		<h2>Our Team</h2>
		<p>Our team of knowledgeable and friendly staff is always ready to assist you with your footwear needs. From helping you find the perfect fit to providing expert advice on shoe care, we are dedicated to ensuring you have a positive shopping experience with us.</p>

		<h2>Our Commitment to Sustainability</h2>
		<p>At Footwear Shop, we are committed to reducing our environmental impact. We source products from eco-friendly and sustainable suppliers, use recycled packaging materials, and offer shoe repair services to extend the life of your shoes.</p>

		<h2>Contact Us</h2>
		<p>If you have any questions or concerns, please don't hesitate to contact us. You can reach us by phone, email, or by visiting one of our store locations. We look forward to hearing from you!</p>

		<p>Phone: 1-800-123-4567</p>
		<p>Email: info@footwearshop.com</p>

	</div>

	<?php include 'footer.php'; ?>
</body>
</html>
