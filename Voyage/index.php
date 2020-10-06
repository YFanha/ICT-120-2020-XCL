<!--Yann Fanha-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Voyage</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <img src="pictures/logoCPNV.png" id="imgCPNV">
    <div id="header">
        <h1 id="h1Titre">Voyage d'étude</h1>
    </div>

    <nav id="navMain">
        <button id="btnParticipants" class="button">Participants</button>
        <button id="btnTransports" class="button">Transports</button>
        <button id="btnHebergement" class="button">Hébérgement</button>
        <button id="btnActivites" class="button">Activités</button>
    </nav>

    <?php require_once "includes/store.php"; ?>
    <!--Cette page rassemble toutes les informations nécessaires pour l'organisation de notre voyage d'étude en troisième année. -->
    <form method="post">

        <div id="divParticipants" class="hidden">
            <div class="divLabels">
                <label>Adresse</label>
                <label>Code postal</label>
                <label>Ville</label>
                <label>Prénom</label>
                <label>Nom</label>
                <label>Numéro de portable</label>
                <label class="radio">Prof</label>
            </div>
            <div class="divInputs">
                <input type="text" id="txtAddress00" name="txtAddress[00]">
                <input type="text" id="txtNPA00" name="txtNPA[00]">
                <input type="text" name="txtCity[00]" id="txtCity00">
                <input type="text" name="txtFirstName[00]" id="txtFirstName00">
                <input type="text" name="txtLastName[00]" id="txtLastName00">
                <input type="text" name="txtPhone[00]" id="txtPhone00">
                <input type="checkbox" name="txtprof[00]" id="txtprof00">
            </div>
        </div>
        <button type="button" class="btnAdd" id="addParticipants"><i class="fa fa-plus"></i></button>


        <div id="divTransports" class="hidden">
            Les transports:<br>
            Rendez-vous:<input type="text" name="txtMeeting[00]" id="txtMeeting00">Départ:<input type="text" name="txtStart[00]" id="txtStart00">Arrivée:<input type="text" name="txtEnd[00]" id="txtEnd00">Numéro de vol:<input type="text" name="txtFlight[00]" id="txtFlight00">Numéro de train:<input type="text" name="txtTrain[00]" id="txtTrain00">Numéro de bus:<input type="text" name="txtBus[00]" id="txtBus00">Prix:<input type="text" name="txtPrice[00]" id="txtPrice00"><br>
            Rendez-vous:<input type="text" name="txtMeeting[01]" id="txtMeeting01">Départ:<input type="text" name="txtStart[01]" id="txtStart01">Arrivée:<input type="text" name="txtEnd[01]" id="txtEnd01">Numéro de vol:<input type="text" name="txtFlight[01]" id="txtFlight01">Numéro de train:<input type="text" name="txtTrain[01]" id="txtTrain01">Numéro de bus:<input type="text" name="txtBus[01]" id="txtBus01">Prix:<input type="text" name="txtPrice[01]" id="txtPrice01"><br>
            Rendez-vous:<input type="text" name="txtMeeting[02]" id="txtMeeting02">Départ:<input type="text" name="txtStart[02]" id="txtStart02">Arrivée:<input type="text" name="txtEnd[02]" id="txtEnd02">Numéro de vol:<input type="text" name="txtFlight[02]" id="txtFlight02">Numéro de train:<input type="text" name="txtTrain[02]" id="txtTrain02">Numéro de bus:<input type="text" name="txtBus[02]" id="txtBus02">Prix:<input type="text" name="txtPrice[02]" id="txtPrice02"><br>
            Rendez-vous:<input type="text" name="txtMeeting[03]" id="txtMeeting03">Départ:<input type="text" name="txtStart[03]" id="txtStart03">Arrivée:<input type="text" name="txtEnd[03]" id="txtEnd03">Numéro de vol:<input type="text" name="txtFlight[03]" id="txtFlight03">Numéro de train:<input type="text" name="txtTrain[03]" id="txtTrain03">Numéro de bus:<input type="text" name="txtBus[03]" id="txtBus03">Prix:<input type="text" name="txtPrice[03]" id="txtPrice03"><br>
            Rendez-vous:<input type="text" name="txtMeeting[04]" id="txtMeeting04">Départ:<input type="text" name="txtStart[04]" id="txtStart04">Arrivée:<input type="text" name="txtEnd[04]" id="txtEnd04">Numéro de vol:<input type="text" name="txtFlight[04]" id="txtFlight04">Numéro de train:<input type="text" name="txtTrain[04]" id="txtTrain04">Numéro de bus:<input type="text" name="txtBus[04]" id="txtBus04">Prix:<input type="text" name="txtPrice[04]" id="txtPrice04"><br>
            Rendez-vous:<input type="text" name="txtMeeting[05]" id="txtMeeting05">Départ:<input type="text" name="txtStart[05]" id="txtStart05">Arrivée:<input type="text" name="txtEnd[05]" id="txtEnd05">Numéro de vol:<input type="text" name="txtFlight[05]" id="txtFlight05">Numéro de train:<input type="text" name="txtTrain[05]" id="txtTrain05">Numéro de bus:<input type="text" name="txtBus[05]" id="txtBus05">Prix:<input type="text" name="txtPrice[05]" id="txtPrice05"><br>
            Rendez-vous:<input type="text" name="txtMeeting[06]" id="txtMeeting06">Départ:<input type="text" name="txtStart[06]" id="txtStart06">Arrivée:<input type="text" name="txtEnd[06]" id="txtEnd06">Numéro de vol:<input type="text" name="txtFlight[06]" id="txtFlight06">Numéro de train:<input type="text" name="txtTrain[06]" id="txtTrain06">Numéro de bus:<input type="text" name="txtBus[06]" id="txtBus06">Prix:<input type="text" name="txtPrice[06]" id="txtPrice06"><br>
            Rendez-vous:<input type="text" name="txtMeeting[07]" id="txtMeeting07">Départ:<input type="text" name="txtStart[07]" id="txtStart07">Arrivée:<input type="text" name="txtEnd[07]" id="txtEnd07">Numéro de vol:<input type="text" name="txtFlight[07]" id="txtFlight07">Numéro de train:<input type="text" name="txtTrain[07]" id="txtTrain07">Numéro de bus:<input type="text" name="txtBus[07]" id="txtBus07">Prix:<input type="text" name="txtPrice[07]" id="txtPrice07"><br>
            Rendez-vous:<input type="text" name="txtMeeting[08]" id="txtMeeting08">Départ:<input type="text" name="txtStart[08]" id="txtStart08">Arrivée:<input type="text" name="txtEnd[08]" id="txtEnd08">Numéro de vol:<input type="text" name="txtFlight[08]" id="txtFlight08">Numéro de train:<input type="text" name="txtTrain[08]" id="txtTrain08">Numéro de bus:<input type="text" name="txtBus[08]" id="txtBus08">Prix:<input type="text" name="txtPrice[08]" id="txtPrice08"><br>
            Rendez-vous:<input type="text" name="txtMeeting[09]" id="txtMeeting09">Départ:<input type="text" name="txtStart[09]" id="txtStart09">Arrivée:<input type="text" name="txtEnd[09]" id="txtEnd09">Numéro de vol:<input type="text" name="txtFlight[09]" id="txtFlight09">Numéro de train:<input type="text" name="txtTrain[09]" id="txtTrain09">Numéro de bus:<input type="text" name="txtBus[09]" id="txtBus09">Prix:<input type="text" name="txtPrice[09]" id="txtPrice09"><br>
            Rendez-vous:<input type="text" name="txtMeeting[10]" id="txtMeeting10">Départ:<input type="text" name="txtStart[10]" id="txtStart10">Arrivée:<input type="text" name="txtEnd[10]" id="txtEnd10">Numéro de vol:<input type="text" name="txtFlight[10]" id="txtFlight10">Numéro de train:<input type="text" name="txtTrain[10]" id="txtTrain10">Numéro de bus:<input type="text" name="txtBus[10]" id="txtBus10">Prix:<input type="text" name="txtPrice[10]" id="txtPrice10"><br>
            Rendez-vous:<input type="text" name="txtMeeting[11]" id="txtMeeting11">Départ:<input type="text" name="txtStart[11]" id="txtStart11">Arrivée:<input type="text" name="txtEnd[11]" id="txtEnd11">Numéro de vol:<input type="text" name="txtFlight[11]" id="txtFlight11">Numéro de train:<input type="text" name="txtTrain[11]" id="txtTrain11">Numéro de bus:<input type="text" name="txtBus[11]" id="txtBus11">Prix:<input type="text" name="txtPrice[11]" id="txtPrice11"><br>
            Rendez-vous:<input type="text" name="txtMeeting[12]" id="txtMeeting12">Départ:<input type="text" name="txtStart[12]" id="txtStart12">Arrivée:<input type="text" name="txtEnd[12]" id="txtEnd12">Numéro de vol:<input type="text" name="txtFlight[12]" id="txtFlight12">Numéro de train:<input type="text" name="txtTrain[12]" id="txtTrain12">Numéro de bus:<input type="text" name="txtBus[12]" id="txtBus12">Prix:<input type="text" name="txtPrice[12]" id="txtPrice12"><br>
            Rendez-vous:<input type="text" name="txtMeeting[13]" id="txtMeeting13">Départ:<input type="text" name="txtStart[13]" id="txtStart13">Arrivée:<input type="text" name="txtEnd[13]" id="txtEnd13">Numéro de vol:<input type="text" name="txtFlight[13]" id="txtFlight13">Numéro de train:<input type="text" name="txtTrain[13]" id="txtTrain13">Numéro de bus:<input type="text" name="txtBus[13]" id="txtBus13">Prix:<input type="text" name="txtPrice[13]" id="txtPrice13"><br>
            Rendez-vous:<input type="text" name="txtMeeting[14]" id="txtMeeting14">Départ:<input type="text" name="txtStart[14]" id="txtStart14">Arrivée:<input type="text" name="txtEnd[14]" id="txtEnd14">Numéro de vol:<input type="text" name="txtFlight[14]" id="txtFlight14">Numéro de train:<input type="text" name="txtTrain[14]" id="txtTrain14">Numéro de bus:<input type="text" name="txtBus[14]" id="txtBus14">Prix:<input type="text" name="txtPrice[14]" id="txtPrice14"><br>
            Rendez-vous:<input type="text" name="txtMeeting[15]" id="txtMeeting15">Départ:<input type="text" name="txtStart[15]" id="txtStart15">Arrivée:<input type="text" name="txtEnd[15]" id="txtEnd15">Numéro de vol:<input type="text" name="txtFlight[15]" id="txtFlight15">Numéro de train:<input type="text" name="txtTrain[15]" id="txtTrain15">Numéro de bus:<input type="text" name="txtBus[15]" id="txtBus15">Prix:<input type="text" name="txtPrice[15]" id="txtPrice15"><br>
            Rendez-vous:<input type="text" name="txtMeeting[16]" id="txtMeeting16">Départ:<input type="text" name="txtStart[16]" id="txtStart16">Arrivée:<input type="text" name="txtEnd[16]" id="txtEnd16">Numéro de vol:<input type="text" name="txtFlight[16]" id="txtFlight16">Numéro de train:<input type="text" name="txtTrain[16]" id="txtTrain16">Numéro de bus:<input type="text" name="txtBus[16]" id="txtBus16">Prix:<input type="text" name="txtPrice[16]" id="txtPrice16"><br>
            Rendez-vous:<input type="text" name="txtMeeting[17]" id="txtMeeting17">Départ:<input type="text" name="txtStart[17]" id="txtStart17">Arrivée:<input type="text" name="txtEnd[17]" id="txtEnd17">Numéro de vol:<input type="text" name="txtFlight[17]" id="txtFlight17">Numéro de train:<input type="text" name="txtTrain[17]" id="txtTrain17">Numéro de bus:<input type="text" name="txtBus[17]" id="txtBus17">Prix:<input type="text" name="txtPrice[17]" id="txtPrice17"><br>
            Rendez-vous:<input type="text" name="txtMeeting[18]" id="txtMeeting18">Départ:<input type="text" name="txtStart[18]" id="txtStart18">Arrivée:<input type="text" name="txtEnd[18]" id="txtEnd18">Numéro de vol:<input type="text" name="txtFlight[18]" id="txtFlight18">Numéro de train:<input type="text" name="txtTrain[18]" id="txtTrain18">Numéro de bus:<input type="text" name="txtBus[18]" id="txtBus18">Prix:<input type="text" name="txtPrice[18]" id="txtPrice18"><br>
            Rendez-vous:<input type="text" name="txtMeeting[19]" id="txtMeeting19">Départ:<input type="text" name="txtStart[19]" id="txtStart19">Arrivée:<input type="text" name="txtEnd[19]" id="txtEnd19">Numéro de vol:<input type="text" name="txtFlight[19]" id="txtFlight19">Numéro de train:<input type="text" name="txtTrain[19]" id="txtTrain19">Numéro de bus:<input type="text" name="txtBus[19]" id="txtBus19">Prix:<input type="text" name="txtPrice[19]" id="txtPrice19"><br>
            Rendez-vous:<input type="text" name="txtMeeting[20]" id="txtMeeting20">Départ:<input type="text" name="txtStart[20]" id="txtStart20">Arrivée:<input type="text" name="txtEnd[20]" id="txtEnd20">Numéro de vol:<input type="text" name="txtFlight[20]" id="txtFlight20">Numéro de train:<input type="text" name="txtTrain[20]" id="txtTrain20">Numéro de bus:<input type="text" name="txtBus[20]" id="txtBus20">Prix:<input type="text" name="txtPrice[20]" id="txtPrice20"><br>
            Rendez-vous:<input type="text" name="txtMeeting[21]" id="txtMeeting21">Départ:<input type="text" name="txtStart[21]" id="txtStart21">Arrivée:<input type="text" name="txtEnd[21]" id="txtEnd21">Numéro de vol:<input type="text" name="txtFlight[21]" id="txtFlight21">Numéro de train:<input type="text" name="txtTrain[21]" id="txtTrain21">Numéro de bus:<input type="text" name="txtBus[21]" id="txtBus21">Prix:<input type="text" name="txtPrice[21]" id="txtPrice21"><br>
            Rendez-vous:<input type="text" name="txtMeeting[22]" id="txtMeeting22">Départ:<input type="text" name="txtStart[22]" id="txtStart22">Arrivée:<input type="text" name="txtEnd[22]" id="txtEnd22">Numéro de vol:<input type="text" name="txtFlight[22]" id="txtFlight22">Numéro de train:<input type="text" name="txtTrain[22]" id="txtTrain22">Numéro de bus:<input type="text" name="txtBus[22]" id="txtBus22">Prix:<input type="text" name="txtPrice[22]" id="txtPrice22"><br>
            Rendez-vous:<input type="text" name="txtMeeting[23]" id="txtMeeting23">Départ:<input type="text" name="txtStart[23]" id="txtStart23">Arrivée:<input type="text" name="txtEnd[23]" id="txtEnd23">Numéro de vol:<input type="text" name="txtFlight[23]" id="txtFlight23">Numéro de train:<input type="text" name="txtTrain[23]" id="txtTrain23">Numéro de bus:<input type="text" name="txtBus[23]" id="txtBus23">Prix:<input type="text" name="txtPrice[23]" id="txtPrice23"><br>
            Rendez-vous:<input type="text" name="txtMeeting[24]" id="txtMeeting24">Départ:<input type="text" name="txtStart[24]" id="txtStart24">Arrivée:<input type="text" name="txtEnd[24]" id="txtEnd24">Numéro de vol:<input type="text" name="txtFlight[24]" id="txtFlight24">Numéro de train:<input type="text" name="txtTrain[24]" id="txtTrain24">Numéro de bus:<input type="text" name="txtBus[24]" id="txtBus24">Prix:<input type="text" name="txtPrice[24]" id="txtPrice24"><br>
            Rendez-vous:<input type="text" name="txtMeeting[25]" id="txtMeeting25">Départ:<input type="text" name="txtStart[25]" id="txtStart25">Arrivée:<input type="text" name="txtEnd[25]" id="txtEnd25">Numéro de vol:<input type="text" name="txtFlight[25]" id="txtFlight25">Numéro de train:<input type="text" name="txtTrain[25]" id="txtTrain25">Numéro de bus:<input type="text" name="txtBus[25]" id="txtBus25">Prix:<input type="text" name="txtPrice[25]" id="txtPrice25"><br>
            Rendez-vous:<input type="text" name="txtMeeting[26]" id="txtMeeting26">Départ:<input type="text" name="txtStart[26]" id="txtStart26">Arrivée:<input type="text" name="txtEnd[26]" id="txtEnd26">Numéro de vol:<input type="text" name="txtFlight[26]" id="txtFlight26">Numéro de train:<input type="text" name="txtTrain[26]" id="txtTrain26">Numéro de bus:<input type="text" name="txtBus[26]" id="txtBus26">Prix:<input type="text" name="txtPrice[26]" id="txtPrice26"><br>
            Rendez-vous:<input type="text" name="txtMeeting[27]" id="txtMeeting27">Départ:<input type="text" name="txtStart[27]" id="txtStart27">Arrivée:<input type="text" name="txtEnd[27]" id="txtEnd27">Numéro de vol:<input type="text" name="txtFlight[27]" id="txtFlight27">Numéro de train:<input type="text" name="txtTrain[27]" id="txtTrain27">Numéro de bus:<input type="text" name="txtBus[27]" id="txtBus27">Prix:<input type="text" name="txtPrice[27]" id="txtPrice27"><br>
            Rendez-vous:<input type="text" name="txtMeeting[28]" id="txtMeeting28">Départ:<input type="text" name="txtStart[28]" id="txtStart28">Arrivée:<input type="text" name="txtEnd[28]" id="txtEnd28">Numéro de vol:<input type="text" name="txtFlight[28]" id="txtFlight28">Numéro de train:<input type="text" name="txtTrain[28]" id="txtTrain28">Numéro de bus:<input type="text" name="txtBus[28]" id="txtBus28">Prix:<input type="text" name="txtPrice[28]" id="txtPrice28"><br>
            Rendez-vous:<input type="text" name="txtMeeting[29]" id="txtMeeting29">Départ:<input type="text" name="txtStart[29]" id="txtStart29">Arrivée:<input type="text" name="txtEnd[29]" id="txtEnd29">Numéro de vol:<input type="text" name="txtFlight[29]" id="txtFlight29">Numéro de train:<input type="text" name="txtTrain[29]" id="txtTrain29">Numéro de bus:<input type="text" name="txtBus[29]" id="txtBus29">Prix:<input type="text" name="txtPrice[29]" id="txtPrice29"><br>

        </div>
        <button type="button" class="btnAdd" id="addTransports"><i class="fa fa-plus"></i></button>

        <div id="divHebergement" class="hidden">
            Le logement:<br>
            Hotel: <input type="text" name="txtHotelData[00]" id="txtHotelData00"><br>
            Adresse: <input type="text" name="txtHotelData[01]" id="txtHotelData01"><br>
            NPA: <input type="text" name="txtHotelData[02]" id="txtHotelData02"><br>
            City: <input type="text" name="txtHotelData[03]" id="txtHotelData03"><br>
            Téléphone: <input type="text" name="txtHotelData[04]" id="txtHotelData04"><br>
            Email: <input type="text" name="txtHotelData[05]" id="txtHotelData05"><br>
            Chambre:<input type="text" name="txtRoom[00]" id="txtRoom00">Etage:<input type="text" name="txtFloor[00]" id="txtFloor00">Max personnes:<input type="text" name="txtCapacity[00]" id="txtCapacity00">Occupant1:<input type="text" name="txtOcc1[00]" id="txtOcc100">Occupant2:<input type="text" name="txtOcc2[00]" id="txtOcc200">Occupant3:<input type="text" name="txtOcc3[00]" id="txtOcc300">Occupant4:<input type="text" name="txtOcc4[00]" id="txtOcc400"><br>
            Chambre:<input type="text" name="txtRoom[01]" id="txtRoom01">Etage:<input type="text" name="txtFloor[01]" id="txtFloor01">Max personnes:<input type="text" name="txtCapacity[01]" id="txtCapacity01">Occupant1:<input type="text" name="txtOcc1[01]" id="txtOcc101">Occupant2:<input type="text" name="txtOcc2[01]" id="txtOcc201">Occupant3:<input type="text" name="txtOcc3[01]" id="txtOcc301">Occupant4:<input type="text" name="txtOcc4[01]" id="txtOcc401"><br>
            Chambre:<input type="text" name="txtRoom[02]" id="txtRoom02">Etage:<input type="text" name="txtFloor[02]" id="txtFloor02">Max personnes:<input type="text" name="txtCapacity[02]" id="txtCapacity02">Occupant1:<input type="text" name="txtOcc1[02]" id="txtOcc102">Occupant2:<input type="text" name="txtOcc2[02]" id="txtOcc202">Occupant3:<input type="text" name="txtOcc3[02]" id="txtOcc302">Occupant4:<input type="text" name="txtOcc4[02]" id="txtOcc402"><br>
            Chambre:<input type="text" name="txtRoom[03]" id="txtRoom03">Etage:<input type="text" name="txtFloor[03]" id="txtFloor03">Max personnes:<input type="text" name="txtCapacity[03]" id="txtCapacity03">Occupant1:<input type="text" name="txtOcc1[03]" id="txtOcc103">Occupant2:<input type="text" name="txtOcc2[03]" id="txtOcc203">Occupant3:<input type="text" name="txtOcc3[03]" id="txtOcc303">Occupant4:<input type="text" name="txtOcc4[03]" id="txtOcc403"><br>
            Chambre:<input type="text" name="txtRoom[04]" id="txtRoom04">Etage:<input type="text" name="txtFloor[04]" id="txtFloor04">Max personnes:<input type="text" name="txtCapacity[04]" id="txtCapacity04">Occupant1:<input type="text" name="txtOcc1[04]" id="txtOcc104">Occupant2:<input type="text" name="txtOcc2[04]" id="txtOcc204">Occupant3:<input type="text" name="txtOcc3[04]" id="txtOcc304">Occupant4:<input type="text" name="txtOcc4[04]" id="txtOcc404"><br>
            Chambre:<input type="text" name="txtRoom[05]" id="txtRoom05">Etage:<input type="text" name="txtFloor[05]" id="txtFloor05">Max personnes:<input type="text" name="txtCapacity[05]" id="txtCapacity05">Occupant1:<input type="text" name="txtOcc1[05]" id="txtOcc105">Occupant2:<input type="text" name="txtOcc2[05]" id="txtOcc205">Occupant3:<input type="text" name="txtOcc3[05]" id="txtOcc305">Occupant4:<input type="text" name="txtOcc4[05]" id="txtOcc405"><br>
            Chambre:<input type="text" name="txtRoom[06]" id="txtRoom06">Etage:<input type="text" name="txtFloor[06]" id="txtFloor06">Max personnes:<input type="text" name="txtCapacity[06]" id="txtCapacity06">Occupant1:<input type="text" name="txtOcc1[06]" id="txtOcc106">Occupant2:<input type="text" name="txtOcc2[06]" id="txtOcc206">Occupant3:<input type="text" name="txtOcc3[06]" id="txtOcc306">Occupant4:<input type="text" name="txtOcc4[06]" id="txtOcc406"><br>
            Chambre:<input type="text" name="txtRoom[07]" id="txtRoom07">Etage:<input type="text" name="txtFloor[07]" id="txtFloor07">Max personnes:<input type="text" name="txtCapacity[07]" id="txtCapacity07">Occupant1:<input type="text" name="txtOcc1[07]" id="txtOcc107">Occupant2:<input type="text" name="txtOcc2[07]" id="txtOcc207">Occupant3:<input type="text" name="txtOcc3[07]" id="txtOcc307">Occupant4:<input type="text" name="txtOcc4[07]" id="txtOcc407"><br>
            Chambre:<input type="text" name="txtRoom[08]" id="txtRoom08">Etage:<input type="text" name="txtFloor[08]" id="txtFloor08">Max personnes:<input type="text" name="txtCapacity[08]" id="txtCapacity08">Occupant1:<input type="text" name="txtOcc1[08]" id="txtOcc108">Occupant2:<input type="text" name="txtOcc2[08]" id="txtOcc208">Occupant3:<input type="text" name="txtOcc3[08]" id="txtOcc308">Occupant4:<input type="text" name="txtOcc4[08]" id="txtOcc408"><br>
            Chambre:<input type="text" name="txtRoom[09]" id="txtRoom09">Etage:<input type="text" name="txtFloor[09]" id="txtFloor09">Max personnes:<input type="text" name="txtCapacity[09]" id="txtCapacity09">Occupant1:<input type="text" name="txtOcc1[09]" id="txtOcc109">Occupant2:<input type="text" name="txtOcc2[09]" id="txtOcc209">Occupant3:<input type="text" name="txtOcc3[09]" id="txtOcc309">Occupant4:<input type="text" name="txtOcc4[09]" id="txtOcc409"><br>
            Chambre:<input type="text" name="txtRoom[10]" id="txtRoom10">Etage:<input type="text" name="txtFloor[10]" id="txtFloor10">Max personnes:<input type="text" name="txtCapacity[10]" id="txtCapacity10">Occupant1:<input type="text" name="txtOcc1[10]" id="txtOcc110">Occupant2:<input type="text" name="txtOcc2[10]" id="txtOcc210">Occupant3:<input type="text" name="txtOcc3[10]" id="txtOcc310">Occupant4:<input type="text" name="txtOcc4[10]" id="txtOcc410"><br>
            Chambre:<input type="text" name="txtRoom[11]" id="txtRoom11">Etage:<input type="text" name="txtFloor[11]" id="txtFloor11">Max personnes:<input type="text" name="txtCapacity[11]" id="txtCapacity11">Occupant1:<input type="text" name="txtOcc1[11]" id="txtOcc111">Occupant2:<input type="text" name="txtOcc2[11]" id="txtOcc211">Occupant3:<input type="text" name="txtOcc3[11]" id="txtOcc311">Occupant4:<input type="text" name="txtOcc4[11]" id="txtOcc411"><br>
            Chambre:<input type="text" name="txtRoom[12]" id="txtRoom12">Etage:<input type="text" name="txtFloor[12]" id="txtFloor12">Max personnes:<input type="text" name="txtCapacity[12]" id="txtCapacity12">Occupant1:<input type="text" name="txtOcc1[12]" id="txtOcc112">Occupant2:<input type="text" name="txtOcc2[12]" id="txtOcc212">Occupant3:<input type="text" name="txtOcc3[12]" id="txtOcc312">Occupant4:<input type="text" name="txtOcc4[12]" id="txtOcc412"><br>
            Chambre:<input type="text" name="txtRoom[13]" id="txtRoom13">Etage:<input type="text" name="txtFloor[13]" id="txtFloor13">Max personnes:<input type="text" name="txtCapacity[13]" id="txtCapacity13">Occupant1:<input type="text" name="txtOcc1[13]" id="txtOcc113">Occupant2:<input type="text" name="txtOcc2[13]" id="txtOcc213">Occupant3:<input type="text" name="txtOcc3[13]" id="txtOcc313">Occupant4:<input type="text" name="txtOcc4[13]" id="txtOcc413"><br>
            Chambre:<input type="text" name="txtRoom[14]" id="txtRoom14">Etage:<input type="text" name="txtFloor[14]" id="txtFloor14">Max personnes:<input type="text" name="txtCapacity[14]" id="txtCapacity14">Occupant1:<input type="text" name="txtOcc1[14]" id="txtOcc114">Occupant2:<input type="text" name="txtOcc2[14]" id="txtOcc214">Occupant3:<input type="text" name="txtOcc3[14]" id="txtOcc314">Occupant4:<input type="text" name="txtOcc4[14]" id="txtOcc414"><br>
        </div>
        <button type="button" class="btnAdd" id="addHebergement"><i class="fa fa-plus"></i></button>


        <div id="divActivites" class="hidden">
            Les activités sur place<br>
            Titre:<input type="text" name="txtTitle[00]" id="txtTitle00">Description:<textarea name="txtDesc[00]" id="txtDesc00"></textarea>Date:<input type="text" name="txtActDate[00]" id="txtActDate00">Heure:<input type="text" name="txtActTime[00]" id="txtActTime00">Prix:<input type="text" name="txtActPrice[00]" id="txtActPrice00">Transport:<input type="text" name="txtActTrsp[00]" id="txtActTrsp00">Rendez-vous:<input type="text" name="txtRDV[00]" id="txtRDV00">Image:<input type="text" name="txtActImg[00]" id="txtActImg00"><img id="imgActImg00" class="actimg" /><br>
            Titre:<input type="text" name="txtTitle[01]" id="txtTitle01">Description:<textarea name="txtDesc[01]" id="txtDesc01"></textarea>Date:<input type="text" name="txtActDate[01]" id="txtActDate01">Heure:<input type="text" name="txtActTime[01]" id="txtActTime01">Prix:<input type="text" name="txtActPrice[01]" id="txtActPrice01">Transport:<input type="text" name="txtActTrsp[01]" id="txtActTrsp01">Rendez-vous:<input type="text" name="txtRDV[01]" id="txtRDV01">Image:<input type="text" name="txtActImg[01]" id="txtActImg01"><img id="imgActImg01" class="actimg" /><br>
            Titre:<input type="text" name="txtTitle[02]" id="txtTitle02">Description:<textarea name="txtDesc[02]" id="txtDesc02"></textarea>Date:<input type="text" name="txtActDate[02]" id="txtActDate02">Heure:<input type="text" name="txtActTime[02]" id="txtActTime02">Prix:<input type="text" name="txtActPrice[02]" id="txtActPrice02">Transport:<input type="text" name="txtActTrsp[02]" id="txtActTrsp02">Rendez-vous:<input type="text" name="txtRDV[02]" id="txtRDV02">Image:<input type="text" name="txtActImg[02]" id="txtActImg02"><img id="imgActImg02" class="actimg" /><br>
            Titre:<input type="text" name="txtTitle[03]" id="txtTitle03">Description:<textarea name="txtDesc[03]" id="txtDesc03"></textarea>Date:<input type="text" name="txtActDate[03]" id="txtActDate03">Heure:<input type="text" name="txtActTime[03]" id="txtActTime03">Prix:<input type="text" name="txtActPrice[03]" id="txtActPrice03">Transport:<input type="text" name="txtActTrsp[03]" id="txtActTrsp03">Rendez-vous:<input type="text" name="txtRDV[03]" id="txtRDV03">Image:<input type="text" name="txtActImg[03]" id="txtActImg03"><img id="imgActImg03" class="actimg" /><br>
            Titre:<input type="text" name="txtTitle[04]" id="txtTitle04">Description:<textarea name="txtDesc[04]" id="txtDesc04"></textarea>Date:<input type="text" name="txtActDate[04]" id="txtActDate04">Heure:<input type="text" name="txtActTime[04]" id="txtActTime04">Prix:<input type="text" name="txtActPrice[04]" id="txtActPrice04">Transport:<input type="text" name="txtActTrsp[04]" id="txtActTrsp04">Rendez-vous:<input type="text" name="txtRDV[04]" id="txtRDV04">Image:<input type="text" name="txtActImg[04]" id="txtActImg04"><img id="imgActImg04" class="actimg" /><br>
            Titre:<input type="text" name="txtTitle[05]" id="txtTitle05">Description:<textarea name="txtDesc[05]" id="txtDesc05"></textarea>Date:<input type="text" name="txtActDate[05]" id="txtActDate05">Heure:<input type="text" name="txtActTime[05]" id="txtActTime05">Prix:<input type="text" name="txtActPrice[05]" id="txtActPrice05">Transport:<input type="text" name="txtActTrsp[05]" id="txtActTrsp05">Rendez-vous:<input type="text" name="txtRDV[05]" id="txtRDV05">Image:<input type="text" name="txtActImg[05]" id="txtActImg05"><img id="imgActImg05" class="actimg" /><br>
            Titre:<input type="text" name="txtTitle[06]" id="txtTitle06">Description:<textarea name="txtDesc[06]" id="txtDesc06"></textarea>Date:<input type="text" name="txtActDate[06]" id="txtActDate06">Heure:<input type="text" name="txtActTime[06]" id="txtActTime06">Prix:<input type="text" name="txtActPrice[06]" id="txtActPrice06">Transport:<input type="text" name="txtActTrsp[06]" id="txtActTrsp06">Rendez-vous:<input type="text" name="txtRDV[06]" id="txtRDV06">Image:<input type="text" name="txtActImg[06]" id="txtActImg06"><img id="imgActImg06" class="actimg" /><br>
            Titre:<input type="text" name="txtTitle[07]" id="txtTitle07">Description:<textarea name="txtDesc[07]" id="txtDesc07"></textarea>Date:<input type="text" name="txtActDate[07]" id="txtActDate07">Heure:<input type="text" name="txtActTime[07]" id="txtActTime07">Prix:<input type="text" name="txtActPrice[07]" id="txtActPrice07">Transport:<input type="text" name="txtActTrsp[07]" id="txtActTrsp07">Rendez-vous:<input type="text" name="txtRDV[07]" id="txtRDV07">Image:<input type="text" name="txtActImg[07]" id="txtActImg07"><img id="imgActImg07" class="actimg" /><br>
            Titre:<input type="text" name="txtTitle[08]" id="txtTitle08">Description:<textarea name="txtDesc[08]" id="txtDesc08"></textarea>Date:<input type="text" name="txtActDate[08]" id="txtActDate08">Heure:<input type="text" name="txtActTime[08]" id="txtActTime08">Prix:<input type="text" name="txtActPrice[08]" id="txtActPrice08">Transport:<input type="text" name="txtActTrsp[08]" id="txtActTrsp08">Rendez-vous:<input type="text" name="txtRDV[08]" id="txtRDV08">Image:<input type="text" name="txtActImg[08]" id="txtActImg08"><img id="imgActImg08" class="actimg" /><br>
            Titre:<input type="text" name="txtTitle[09]" id="txtTitle09">Description:<textarea name="txtDesc[09]" id="txtDesc09"></textarea>Date:<input type="text" name="txtActDate[09]" id="txtActDate09">Heure:<input type="text" name="txtActTime[09]" id="txtActTime09">Prix:<input type="text" name="txtActPrice[09]" id="txtActPrice09">Transport:<input type="text" name="txtActTrsp[09]" id="txtActTrsp09">Rendez-vous:<input type="text" name="txtRDV[09]" id="txtRDV09">Image:<input type="text" name="txtActImg[09]" id="txtActImg09"><img id="imgActImg09" class="actimg" /><br>

        </div>
        <button type="button" class="btnAdd" id="addActivites"><i class="fa fa-plus"></i></button>

        <input type="submit" value="Ok" name="cmdSave"><input type="checkbox" name="showdata" title="Remise à zéro de tous les champs qui ne sont pas formatés correctement">Reset
    </form>
<script src="js/reload.js"></script>


</body>
</html>
