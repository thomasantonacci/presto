function crea_intervallo(ElementoHTML, numeromax, tempo) {
    let counter = 0;
    let id_interval = setInterval( () => {
        if (counter < numeromax) {
            counter ++;
            ElementoHTML.innerHTML = counter;

        } else {
            clearInterval(id_interval);
        }
    }, tempo );

}

let controllo_ripetizione = 'true';
let osserva = new IntersectionObserver ( entries => {
 entries.forEach(entrie => {
    if (entrie.isIntersecting && controllo_ripetizione == 'true' ) {
        crea_intervallo(number1, 6,0);
        crea_intervallo(number2, 200, 100);
        crea_intervallo(number3, 150, 100);
        controllo_ripetizione = 'false';
    }
 });
}

);
osserva.observe(number3);


