document.addEventListener("DOMContentLoaded", function() {
    var banners = document.querySelectorAll(".banner");
    var currentBanner = 0;

    banners[currentBanner].style.display = "block";

    setInterval(function() {
        banners[currentBanner].style.display = "none";
        currentBanner = (currentBanner + 1) % banners.length;
        banners[currentBanner].style.display = "block";
    }, 3000);
});
