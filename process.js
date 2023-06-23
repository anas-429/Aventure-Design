// VARIABLES

const slide = document.querySelector(".slide");

const prevButton = document.querySelector(".btn-prev");
const nextButton = document.querySelector(".btn-next");

// EVENT LISTENERS

prevButton.addEventListener("click", (e) => {

    /*slideWidth refers to the width of the container.*/
    const slideWidth = slide.clientWidth;

    /*Subtract the width of the container by the left-position of the container.*/
    var result = container.scrollLeft -= slideWidth;

    console.log(result);

    e.target.classList.add("disabled");

    setInterval(function () {e.target.classList.remove("disabled")}, 1000);
    
});

nextButton.addEventListener("click", (e) => {

    /*slideWidth refers to the width of the container.*/
    const slideWidth = slide.clientWidth;

    /*Subtract the width of the container by the left-position of the container.*/
    var result = container.scrollLeft += slideWidth;

    console.log(result);

    e.target.classList.add("disabled");

    setInterval(function () {e.target.classList.remove("disabled")}, 1000);

});
