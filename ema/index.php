<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REGISTRATION FORM</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form onsubmit="return error () ">
        <h4>Patient Registration Form</h4>

        <div>
            <input type="name-label" placeholder=" Your name " />
            <input type="name-label" placeholder=" last name " />
        </div>

        <div>
            <input type="email" placeholder=" e-mail " />
        </div>

        <div>
            <input type="text" id="number" placeholder="Enter phone number" name="uname" required>
        </div>
        <b><font size="+1.5"> <span id="messages" style="color: rgb(0, 0, 0)"> </span> </b></font>
        </div>

        <div id="recaptcha-container"></div>
        <div> <button type="button" onclick="phoneAuth();">Send Otp</button> </div>


        <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
        <script>
            // Your web app's Firebase configuration
            var firebaseConfig = {
                appId: "1:99446038979:web:6876f093329352b3c71d76",
                apiKey: "AIzaSyDqoyvnqM44fvu4Gvlfc_Dj1Di2VztJxK4",
                authDomain: "phone-auth-76a5e.firebaseapp.com",
                projectId: "phone-auth-76a5e",
                storageBucket: "phone-auth-76a5e.appspot.com",
                messagingSenderId: "99446038979",
                measurementId: "G-CCJ2B0YHR3"
            };
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
            firebase.analytics();
        </script>

        <input type="text" id="verificationCode" placeholder="Enter verification code">

        </div>

        <div> <button type="button" onclick="codeverify();">Verify code</button> </div>


        <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
        <script>
            // Your web app's Firebase configuration
            var firebaseConfig = {
                appId: "1:99446038979:web:6876f093329352b3c71d76",
                apiKey: "AIzaSyDqoyvnqM44fvu4Gvlfc_Dj1Di2VztJxK4",
                authDomain: "phone-auth-76a5e.firebaseapp.com",
                projectId: "phone-auth-76a5e",
                storageBucket: "phone-auth-76a5e.appspot.com",
                messagingSenderId: "99446038979",
                measurementId: "G-CCJ2B0YHR3"
            };
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
            firebase.analytics();
        </script>

        <p><b>Date of Birth</b></p>
        <div><input type="date" /></div>
        <div><select name="" id="slot"><option value="0">Slot</option><option value="9am-10am">9am-10am</option><option value="10am-11am">10am-11am</option><option value="11am-12pm">11am-12pm</option><option value="12pm-1pm">12pm-1pm</option><option value="2pm-3pm">2pm-3pm</option><option value="3pm-4pm">3pm-4pm</option><option value="4pm-5pm">4pm-5pm</option><option value=""></option></select></div>
        <select name="" id="gender">
            <option value="0">Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
            <option value=""></option>
            </select><br><select name="" id="specialist"><option value="0">Specialist</option><option value="Dentist">Dentist</option><option value="Cardiologist">Cardiologist</option><option value="Psychiatrists">Psychiatrists</option><option value="Ophthalmologists">Ophthalmologists</option><option value="Neurologists">Neurologists</option><option value="Orthopedic">Orthopedic</option><option value=""></option></select><br>
        <select name="" id="Doctors">
                <option value="0">Doctors</option>
                <option value="mansi">Dr. Mansi</option>
                <option value="vinit">Dr. Vinit</option>
                <option value="janvi">Dr. Janvi</option>
                <option value="Aditya">MD Dr. Aditya</option>
                <option value="ujay">Dr. Ujay</option>
                <option value="ajay">Dr. Ajay</option>
                <option value=""></option>
                </select>
        <div>
            <p><b>Currently taking any medication?</b></p>
        </div><input type='radio' name='answer' id='radio-btn' value='YES' /><b>YES</b></br><input type='radio' name='answer' id='radio-btn' value='NO' /><b>NO</b></br>
        </div>
        <div><label><b>Ask any Queries</b></label></div><textarea type='text' placeholder='Enter your comment here...'></textarea></div><button class="btn-send flex">BOOK NOW</button>
        <p class="footnote">&copy; Group 17 Major Project</p>
    </form>
    <script src="firebase.js" type="text/javascript"></script>

</body>

</html>