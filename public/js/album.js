let next = document.querySelector(".next");
let prev = document.querySelector(".prev");

next.addEventListener("click", function () {
    let items = document.querySelectorAll(".album");
    document.querySelector(".slide").appendChild(items[0]);
});

prev.addEventListener("click", function () {
    let items = document.querySelectorAll(".album");
    document.querySelector(".slide").prepend(items[items.length - 1]);
});
