    // Fecha al que el contador debe estar en 0
    let countDownDate = new Date("sep 30, 2018 12:00:00").getTime();

    // Update the count down every 1 second
    let x = setInterval(function() {
        // fecha de hoy
        let now = new Date().getTime();
        
        // Distancia de tiempo dentre el contador y hoy
        let distance = countDownDate - now;
        
        // Calculando diias, meses, minutos y segundos
        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Escribiendo en el id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        
        // Si el contador esta en 0
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Estamos creciendo para ti!";
            document.getElementById("contactanos")
            
            disableAllButtons(form);
        }
    }, 1000);
    var form = event.target;
    function disableAllButtons(form) {
        var buttons = form.querySelectorAll("button");
        for (var i = 0; i < buttons.length; i++) {
          buttons[i].disabled = true;
        }
      }