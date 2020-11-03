txtAddress00.value = 'Av des sports 3'
txtNPA00.value = '1462'
txtCity00.value = 'Yvonand'
txtFirstName00.value = 'Yann'
txtLastName00.value = 'Fanha'
txtPhone00.value = '079 917 38 84'
txtMeeting00.value = 'dd'
txtStart00.value = '15.01.2021 12:30'
txtEnd00.value = '15.01.2021 15:15'
txtFlight00.value = '181818'
txtTrain00.value = '18'
txtPrice00.value = '2200'
txtHotelData02.value = '1009'
txtHotelData03.value = 'Pully'
txtRoom00.value = '18'
txtCapacity00.value = '18'
txtOcc100.value = 'y'
txtOcc200.value = 'f'
txtTitle00.value = 'xx'
txtDesc00.value = 'xxx'
txtActDate00.value = 'xxxx'
txtActTime00.value = 'xxxx'
txtActPrice00.value = 'xxxxx'
txtActTrsp00.value = 'xxxxx'
txtRDV00.value = 'xxxxx'
txtActImg00.value = 'football.jpg'

    // Load image tags with the name in the input field
    document.querySelectorAll(".actimg").forEach(img => {
        img.src = document.getElementById('txt'+img.id.substring(3)).value
    });
    