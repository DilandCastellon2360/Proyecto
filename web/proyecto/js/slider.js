(function(){
    const sliders = [...document.querySelectorAll('.testimony__group')];
    const buttonNext = document.querySelectorAll('.testimony__arrow[id^="next"]');
    const buttonBefore = document.querySelectorAll('.testimony__arrow[id^="before"]');
    let value = 0;   

    buttonNext.forEach(button => {
        button.addEventListener('click', () => {
            changePosition(1);
        });
    });

    buttonBefore.forEach(button => {
        button.addEventListener('click', () => {
            changePosition(-1);
        });
    });

    const changePosition = (add) => {
        sliders[value].classList.remove('testimony__group--show');
        value += add;

        // Ajustar la lógica para que vuelva a 0 o al último grupo
        if(value < 0) {
            value = sliders.length - 1;
        } else if(value >= sliders.length) {
            value = 0;
        }

        sliders[value].classList.add('testimony__group--show');
    };

    // Inicializa el primer grupo visible
    sliders[value].classList.add('testimony__group--show');
})();
