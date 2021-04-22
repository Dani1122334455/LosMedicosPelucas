var modal = document.querySelector('.modal');
var eleminarBtns = document.querySelectorAll(".delete");

eleminarBtns.forEach(boto => {
    boto.addEventListener('click', function () {
<<<<<<< Updated upstream
        document.querySelector(".modal-body").innerHTML = "Estas segur que vols esborrar l'alertant " + boto.dataset.sigles + "?";
=======
        document.querySelector(".modal-body").innerHTML = "Estas segur que vols esborrar l'afectat " + boto.dataset.sigles + "?";
>>>>>>> Stashed changes
        document.querySelector(".delete-form").action = boto.dataset.action;
    });
});
