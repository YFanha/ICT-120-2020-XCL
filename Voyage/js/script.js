document.addEventListener('DOMContentLoaded', function() {
    const btnParticipants = document.getElementById('btnParticipants');
    const btnTransports = document.getElementById('btnTransports');
    const btnHebergement = document.getElementById('btnHebergement');
    const btnActivites = document.getElementById('btnActivites');

    add('addParticipants');

    const divParticipants = document.getElementById('divParticipants');
    const divTransports = document.getElementById('divTransports');
    const divHebergement =  document.getElementById('divHebergement');
    const divActivites = document.getElementById('divActivites');

    //afficher le menu des participants au chargement de la page
    divParticipants.classList.remove('hidden');

    btnParticipants.addEventListener('click', function (){
        divParticipants.classList.remove('hidden');
        hideElements(divTransports, divHebergement, divActivites);
        add('addParticipants');
    });

    btnTransports.addEventListener('click', function (){
        divTransports.classList.remove('hidden');
        hideElements(divParticipants, divHebergement, divActivites);
        add('addTransports');
    });

    btnHebergement.addEventListener('click', function (){
        divHebergement.classList.remove('hidden');
        hideElements(divParticipants, divTransports, divActivites);
    });

    btnActivites.addEventListener('click', function (){
        divActivites.classList.remove('hidden');
        hideElements(divParticipants, divTransports, divHebergement);
        add('addActivites');
    });

    //add the class to hide the element
    function hideElements(divOne, divTwo, divThree){
        divOne.classList.add('hidden');
        divTwo.classList.add('hidden');
        divThree.classList.add('hidden');
    }

    function add(btn){
        const btnAdd = document.getElementById(btn);
        console.log(btn);
        btnAdd.addEventListener('click', function (){

            if(btn === 'addParticipants')
            {

            }
            else if(btn === 'addTransports')
            {

            }
            else if(btn === 'addActivites')
            {

            }

        })
    }

});