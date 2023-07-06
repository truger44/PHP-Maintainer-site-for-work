document.addEventListener('DOMContentLoaded', function() {
    const roomList = document.querySelector('#room-list');
    const equipmentTitle = document.querySelector('#equipment-title');
    const buildingName = document.querySelector('#building-name');
    const equipmentDetails = document.querySelector('#equipment-details');
    const repairList = document.querySelector('#repair-list');
    const addRepairButton = document.querySelector('#add-repair');
    const printQRButton = document.querySelector('#print-qr');

    roomList.addEventListener('click', function(event) {
        if (event.target.tagName === 'TD') {
            const roomName = event.target.textContent;
            window.location.href = `room_detail.php?room=${roomName}`;
        }
    });

    buildingName.addEventListener('click', function() {
        const buildingName = this.textContent;
        window.location.href = `building_detail.php?building=${buildingName}`;
    });

    addRepairButton.addEventListener('click', function() {
        window.location.href = 'add_repair.php';
    });

    printQRButton.addEventListener('click', function() {
        window.location.href = 'print_qr_code.php';
    });
});