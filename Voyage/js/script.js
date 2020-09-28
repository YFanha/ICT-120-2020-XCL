document.addEventListener('DOMContentLoaded', function() {
    const btnParticipants = document.getElementById('btnParticipants');
    const btnTransports = document.getElementById('btnTransports');
    const btnHebergement = document.getElementById('btnHebergement');
    const btnActivites = document.getElementById('btnActivites');

    const divParticipants = document.getElementById('divParticipants');
    const divTransports = document.getElementById('divTransports');
    const divHebergement =  document.getElementById('divHebergement');
    const divActivites = document.getElementById('divActivites');

    //afficher le menu des participants au chargement de la page
    divParticipants.classList.remove('hidden');

    btnParticipants.addEventListener('click', function (){
        divParticipants.classList.remove('hidden');
        removeHidden(divTransports, divHebergement, divActivites);
    });

    btnTransports.addEventListener('click', function (){
        divTransports.classList.remove('hidden');
        removeHidden(divParticipants, divHebergement, divActivites);
    });

    btnHebergement.addEventListener('click', function (){
        divHebergement.classList.remove('hidden');
        removeHidden(divParticipants, divTransports, divActivites);
    });

    btnActivites.addEventListener('click', function (){
        divActivites.classList.remove('hidden');
        removeHidden(divParticipants, divTransports, divHebergement);
    });

    //add the class to hide the element
    function removeHidden(divOne, divTwo, divThree){
        divOne.classList.add('hidden');
        divTwo.classList.add('hidden');
        divThree.classList.add('hidden');
    }
});