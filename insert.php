<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form with Buttons</title>
    <link rel="stylesheet" href="index.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/css/uikit.min.css" />
    
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit-icons.min.js"></script>

    <!-- <script>
        // JavaScript for button actions
        function addNewEntry() {
            // Clear all input fields to allow adding a new entry
            document.querySelectorAll('.uk-input').forEach(input => input.value = '');
        }

        function deleteEntry() {
            // Clear all input fields (or delete a specific entry)
            document.querySelectorAll('.uk-input').forEach(input => input.value = '');
        }

        // Optional: Handle form submission
        function handleSubmit(event) {
            event.preventDefault(); // Prevent default form submission for demonstration
            alert('Form Submitted');
        }
    </script> -->
</head>

<body>

<form method="post" action="process.php">
  <label for="fname">name:</label><br>
  <input type="text" id="fname" name="name" ><br>

  <label for="lname">modal:</label><br>
  <input type="text" id="lname" name="modal_no."><br><br>

  <label for="lname">mobile:</label><br>
  <input type="text" id="lname" name="mobile_no."><br><br>

  <label for="lname">email:</label><br>
  <input type="text" id="lname" name="email"><br><br>
  
  <input type="submit" name="submit" value="Submit">
</form>
       
</body>

</html>
