document.addEventListener('DOMContentLoaded', function() {
    const btnParticipants = document.getElementById('btnParticipants');
    const btnTransports = document.getElementById('btnTransports');
    const btnHebergement = document.getElementById('btnHebergement');
    const btnActivites = document.getElementById('btnActivites');

    const addParticipants = document.getElementById('addParticipants');
    const addTransports = document.getElementById('addTransports');
    const addHebergement = document.getElementById('addHebergement');
    const addActivites = document.getElementById('addActivites');

    /*const addParticipants = 'addParticipants';
    const addTransports = 'addTransports';
    const addHebergement = 'addHebergement';
    const addActivites = 'addActivites';*/
    const HIDDEN = 'hidden';
    let idParticipants = 0;

    const divParticipants = document.getElementById('divParticipants');
    const divTransports = document.getElementById('divTransports');
    const divHebergement =  document.getElementById('divHebergement');
    const divActivites = document.getElementById('divActivites');


    //afficher le menu des participants au chargement de la page
    divParticipants.classList.remove('hidden');
    addParticipants.classList.remove(HIDDEN);

    btnParticipants.addEventListener('click', function (){
        divParticipants.classList.remove('hidden');
        addParticipants.classList.remove(HIDDEN);
        hideElements(divTransports, divHebergement, divActivites);
        hideButtons(addTransports,addHebergement,addActivites);
    });

    btnTransports.addEventListener('click', function (){
        divTransports.classList.remove('hidden');
        addTransports.classList.remove(HIDDEN);
        hideElements(divParticipants, divHebergement, divActivites);
        hideButtons(addParticipants,addHebergement,addActivites);
    });

    btnHebergement.addEventListener('click', function (){
        divHebergement.classList.remove('hidden');
        addHebergement.classList.remove(HIDDEN);
        hideElements(divParticipants, divTransports, divActivites);
        hideButtons(addTransports,addParticipants,addActivites);
    });

    btnActivites.addEventListener('click', function (){
        divActivites.classList.remove('hidden');
        addActivites.classList.remove(HIDDEN);
        hideElements(divParticipants, divTransports, divHebergement);
        hideButtons(addTransports,addHebergement,addParticipants);
    });

    //add the class to hide the element
    function hideElements(divOne, divTwo, divThree){
        divOne.classList.add('hidden');
        divTwo.classList.add('hidden');
        divThree.classList.add('hidden');
    }
    function hideButtons(a,b,c){
        a.classList.add(HIDDEN);
        b.classList.add(HIDDEN);
        c.classList.add(HIDDEN);
    }
    addParticipants.addEventListener("click", function(){

        element = `<div class="divInputs">
                        <input type="text" id="txtAddress${idParticipants}" name="txtAddress[${idParticipants}]">
                        <input type="text" id="txtNPA${idParticipants}" name="txtNPA[${idParticipants}]">
                        <input type="text" name="txtCity[${idParticipants}]" id="txtCity${idParticipants}">
                        <input type="text" name="txtFirstName[${idParticipants}]" id="txtFirstName${idParticipants}">
                        <input type="text" name="txtLastName[${idParticipants}]" id="txtLastName${idParticipants}">
                        <input type="text" name="txtPhone[${idParticipants}]" id="txtPhone${idParticipants}">
                        <input type="checkbox" name="txtprof[${idParticipants}]" id="txtprof${idParticipants}">
                    </div>`

        idParticipants++;

        divParticipants.insertAdjacentHTML("beforeend", element)
    })
    addTransports.addEventListener("click", function(){

    })
    addHebergement.addEventListener("click", function(){

    })
    addActivites.addEventListener("click", function(){

    })


});