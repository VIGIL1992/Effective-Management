<script>
    window.addEventListener("scroll", function () {
        let breadcrumbWrapper = document.querySelector(".breadcumb-wrapper");
        let breadcrumbMenu = document.querySelector(".breadcumb-menu");
        let breadcrumbTitle = document.querySelector(".breadcumb-title");

        if (window.scrollY > 150) {
            breadcrumbWrapper.classList.add("sticky-breadcrumb");
            breadcrumbTitle.style.display = "none";
            breadcrumbWrapper.style.background = "var(--title-color)";
            breadcrumbWrapper.style.backgroundImage = "none";
            breadcrumbMenu.style.display = "block";
        } else {
            breadcrumbWrapper.classList.remove("sticky-breadcrumb");
            breadcrumbTitle.style.display = "block";
            breadcrumbWrapper.style.background = "";
            breadcrumbWrapper.style.backgroundImage = "url('assets/img/banner/banner2.jpg')";
        }
    });
</script>

<style>
.sticky-breadcrumb {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: var(--title-color);
    padding: 80px 0 30px;
    z-index: 10;
    transition: all 0.3s ease-in-out;
}

.breadcumb-menu {
    display: none;
}
</style>