<style>
     

    .sticky-breadcumb ul {
        margin: 0;
        padding: 0;
        list-style: none;
        display: inline-block;
    }

    .sticky-breadcumb ul li {
        display: inline;
        color: white;
        margin: 0 5px;
    }


   

    .sticky-breadcumb {
        position: fixed;
        top: 80px; /* Push below the navbar */
        left: 0;
        width: 100%;
        background: var(--title-color, #000);
        padding: 15px 0;
        z-index: 10;
        text-align: center;
        opacity: 0;
        transform: translateY(-10px);
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .sticky-breadcumb.show {
        opacity: 1;
        transform: translateY(0);
        visibility: visible;
    }




    </style>

<script>
    window.addEventListener("scroll", function () {
        let stickyBreadcrumb = document.querySelector(".sticky-breadcumb");

        if (window.scrollY > 500) {
            stickyBreadcrumb.classList.add("show");
        } else {
            stickyBreadcrumb.classList.remove("show");
        }
    });
</script>
