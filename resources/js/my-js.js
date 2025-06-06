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
        crea_intervallo(number1, 112,200);
        crea_intervallo(number2, 221, 100);
        crea_intervallo(number3, 174, 100);
        controllo_ripetizione = 'false';
    }
 });
}

);
osserva.observe(number3);


