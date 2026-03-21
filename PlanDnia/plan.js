function termin() {
    let dataInput = document.querySelector("#data").value;
    let dataWybrana = new Date(dataInput)
    let dni = ["Niedziela", "Poniedzialek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota"];
    let dzienwybrany = dni[dataWybrana.getDay()];

    let sekcjaKiedy = document.querySelector("#kiedy");
    let naglowek = document.createElement("h2");

    naglowek.innerText = dzienwybrany;
    sekcjaKiedy.innerHTML = "";

    sekcjaKiedy.appendChild(naglowek);

}

function wprowadz() {
}

function zapisz(){
    alert("W przygotowaniu");
}

function drukuj(){
    window.print();
}