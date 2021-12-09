                    
async function addSensor() {
        let sensorname = document.addsensor.sensorname.value;
        let sensorswitch = document.addsensor.sensorswitch.value;
        let sensorid = document.addsensor.sensorid.value;
        let sensortype = document.addsensor.sensortype.value;

        if (sensorswitch) {
            sensorswitch = true;
        }
        else {
            sensorswitch = false;
        }

        console.log(sensorswitch)

        try {
            const response = await fetch('https://api.envlog.mitello.xyz/sensors', {
                method: "POST",
                headers: {
                    Accept: "application/json, text/plain",
                    "Content-Type": "application/x-www-form-urlencoded;charset=UTF-8"
                },
                body: `MCU_ID=${sensorid}&Name=${sensorname}&Type=${sensortype}&Enabled=${sensorswitch}`
            });
            const json = await response.json();
            if (json.errors) {
                // Blocco gestione errori
                console.log("ERROR: "+json.errors);
                document.querySelector('#addSensorModal .modal-body').innerHTML= "<div class='mx-auto text-center text-danger'><i class='fas fa-5x fa-ban'></i><br><p class='h3'>Sensore non aggiunto!</p><br><p>"+json.errors+"</p><br><br><button type='button' class='btn btn-secondary' onclick='location.reload();' aria-label='Close'>Chiudi</button></div>";

            } else {
                // Blocco per HTTP 200 (richiesta andata a buon fine)
                console.log(json);
                document.querySelector('#addSensorModal .modal-body ').innerHTML= "<div class='mx-auto text-center text-primary'><i class='fas fa-5x fa-check-circle'></i><br><p class='h3'>Sensore aggiunto!</p><br><br><button type='button' class='btn btn-secondary' data-mdb-dismiss='modal' onclick='location.reload();' aria-label='Close'>Chiudi</div>";

            }
        } catch (fetchError) {
            console.log(fetchError);

        }
        return false;
}    





                    
//QUesto scrpt intercetta lapertura della modal e si prende il tipo, quindi stampa il tipo nel titolo
const sensorModal = document.getElementById('addSensorModal')
sensorModal.addEventListener('show.mdb.modal', (event) => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-mdb-* attributes
    const sensortype = button.getAttribute('data-sensor-type');
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    const modalTitle = sensorModal.querySelector('.modal-title');
    const modalImage = sensorModal.querySelector('.sensorimage').src = "img/"+sensortype+".png";
    document.querySelector('#sensortype').value = sensortype;

    modalTitle.textContent = `Aggiungi nuovo sensore di ${sensortype}`;

});

