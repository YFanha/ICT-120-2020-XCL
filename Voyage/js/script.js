document.addEventListener('DOMContentLoaded', function() {
    const btnParticipants = document.getElementById('btnParticipants');
    const btnTransports = document.getElementById('btnTransports');
    const btnHebergement = document.getElementById('btnHebergement');
    const btnActivites = document.getElementById('btnActivites');

    btnParticipants.addEventListener('click', function (){
        document.getElementById('divParticipants').classList.remove('hidden');
    });
    btnTransports.addEventListener('click', function (){
        document.getElementById('divTransports').classList.remove('hidden');
    });
    btnHebergement.addEventListener('click', function (){
        document.getElementById('divHebergement').classList.remove('hidden');
    });
    btnActivites.addEventListener('click', function (){
        document.getElementById('divActivites').classList.remove('hidden');
    });
})