<footer class="footer">
    <div class="footer-content">
        <p>&copy; <?php echo date("Y"); ?> Iyan's Gadget Store. All rights reserved.</p>
        <p>Created with ❤️ by Iyan Lucky Aliman - WD 202</p>
    </div>
</footer>

<script>
    // Mobile menu toggle
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    });

    // Close menu when clicking on a link
    document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    }));
</script>
</body>
</html>