document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("button").addEventListener("mouseover", function () {
        this.style.backgroundColor = "red";
    });
    document.querySelector("button").addEventListener("mouseout", function () {
        this.style.backgroundColor = "blue";
    });
});
