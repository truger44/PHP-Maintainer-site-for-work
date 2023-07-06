Shared Dependencies:

1. Exported Variables:
   - `$db_connection`: This variable will be used to establish a connection with the database in all PHP files.

2. Data Schemas:
   - `rooms`: This schema will contain information about the rooms (room number, building name, etc.).
   - `equipment`: This schema will contain information about the equipment (asset tag, location notes, unit type, category, etc.).
   - `repairs`: This schema will contain information about the repairs (repair details, equipment id, room id, etc.).

3. ID Names of DOM Elements:
   - `#room-list`: This ID will be used for the table displaying the top 5 most repaired rooms on the index page.
   - `#equipment-title`: This ID will be used for the title displaying the equipment name on the equipment detail page.
   - `#building-name`: This ID will be used for the subtitle displaying the building name on the equipment detail page.
   - `#equipment-details`: This ID will be used for the table displaying the equipment details on the equipment detail page.
   - `#repair-list`: This ID will be used for the dropdown slider displaying the top 3 repairs on the equipment detail page.
   - `#add-repair`: This ID will be used for the "Add repair" button on the equipment detail page.
   - `#print-qr`: This ID will be used for the "Print QR Code" button on the equipment detail page.

4. Message Names:
   - `roomClicked`: This message will be emitted when a room name is clicked on the index page.
   - `addRepairClicked`: This message will be emitted when the "Add repair" button is clicked on the equipment detail page.
   - `printQRClicked`: This message will be emitted when the "Print QR Code" button is clicked on the equipment detail page.

5. Function Names:
   - `connectToDB()`: This function will be used to establish a connection with the database in all PHP files.
   - `getTopRooms()`: This function will be used to fetch the top 5 most repaired rooms for the index page.
   - `getRoomDetails()`: This function will be used to fetch the room details for the room detail page.
   - `getEquipmentDetails()`: This function will be used to fetch the equipment details for the equipment detail page.
   - `getTopRepairs()`: This function will be used to fetch the top 3 repairs for the equipment detail page.