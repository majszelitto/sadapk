function sprawdz(){
    let pole = document.querySelector("#haslo").value;

        const regex = /\d/;
        if (pole.length == 0){
            document.querySelector("#odpowiedz").style.color = "pink"
            document.querySelector("#odpowiedz").innerHTML = "WPISZ HASLO!!"
            
        }
        else if(regex.test(pole) && pole.length > 8){
            document.querySelector("#odpowiedz").innerHTML = "DOBRE";
            document.querySelector("#odpowiedz").style.color = "green"
        }

        else if((regex.test(pole) && pole.length >=4  && pole.length<=8)){
            document.querySelector("#odpowiedz").innerHTML = "SREDNIE";
            document.querySelector("#odpowiedz").style.color = "blue"
        }

        else{
            document.querySelector("#odpowiedz").innerHTML = "SLABE";
            document.querySelector("#odpowiedz").style.color = "red"
        }

        
}           