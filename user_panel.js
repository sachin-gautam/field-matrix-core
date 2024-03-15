
// //change theme
// themeToggler.addEventListener('click', ()=>{
//     document.body.classList.toggle('dark-theme-variables');
//     themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
//     themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
// })



// function toggleDeviceForm() {
//     var deviceFormContainer = document.querySelector('.device-form-container');
//     deviceFormContainer.style.display = (deviceFormContainer.style.display === 'none') ? 'block' : 'none';
// }

// // Function to add a new device
// function addDevice(event) {
//     event.preventDefault();
//     var deviceNameInput = document.getElementById('device-name');
//     var deviceName = deviceNameInput.value.trim();
//     if (deviceName) {
//         // Add the new device to the list
//         var deviceList = document.querySelector('.devices-list ul');
//         var newDevice = document.createElement('li');
//         newDevice.textContent = deviceName + " - Connected";
//         // Add click event listener to show device status and options
//         newDevice.addEventListener('click', showDeviceStatusOptions);
//         deviceList.appendChild(newDevice);
//         // Clear the input field
//         deviceNameInput.value = '';
//         // Hide the device form
//         toggleDeviceForm();
//     }
// }

// // Function to remove a device
// function removeDevice(event) {
//     event.preventDefault();
//     var deviceList = document.querySelector('.devices-list ul');
//     var devices = deviceList.querySelectorAll('li');
//     if (devices.length === 0) {
//         alert("There are no devices to remove.");
//         return;
//     }
//     var deviceIndex = prompt("Enter the index of the device to remove (1-" + devices.length + "):");
//     if (deviceIndex) {
//         deviceIndex = parseInt(deviceIndex);
//         if (deviceIndex >= 1 && deviceIndex <= devices.length) {
//             // Remove the selected device
//             deviceList.removeChild(devices[deviceIndex - 1]);
//         } else {
//             alert("Invalid device index.");
//         }
//     }
// }

// // Function to show device status and options
// function showDeviceStatusOptions(event) {
//     event.preventDefault();
//     var deviceItem = event.currentTarget;
//     var deviceName = deviceItem.textContent.split(' - ')[0];
//     var deviceStatus = prompt("Enter the status of " + deviceName + ":");
//     if (deviceStatus) {
//         // Update the device status
//         deviceItem.textContent = deviceName + " - " + deviceStatus;
//     }
// }

// // Add event listeners to the add and remove device buttons
// document.getElementById('add-device-btn').addEventListener('click', toggleDeviceForm);
// document.getElementById('remove-device-btn').addEventListener('click', removeDevice);

// // Add event listener to the device form submission
// document.getElementById('device-form').addEventListener('submit', addDevice);

// // Add click event listener to existing device list items
// var devicesListItems = document.querySelectorAll('.devices-list ul li');
// devicesListItems.forEach(function(item) {
//     item.addEventListener('click', showDeviceStatusOptions);
// });


var dateDiv = document.querySelector(".date");
var insightsDiv = document.querySelector(".insights");

        function toggleDevice() {
            if (dateDiv.style.display == "none") {
                dateDiv.style.display == "block";
            } else {
                devicesContent.style.display = "none";
            }
        }