<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="index.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>PRAJASEVE</title>
</head>

<body>
    <div class="productmain">
        <div class="mainheading">
            <h5>
                <strong>Domestic Or Community  Bore Well Selection
                    <br> ಗೃಹ ಮತ್ತು ವಸತಿ ನಿಲಯಕ್ಕೆ ತೊಟ್ಟಿ / ತೆರೆದ ಭಾವಿ ಪಂಪಿನ ಆಯ್ಕೆ  </strong>
            </h5>
        </div>

        <div class="container">
            <form action="/dcborewell.php">

                <div class="formradio">
                    <h4>ನೀರಿನ ಅವಶ್ಯಕತೆ ದಿನಕ್ಕೆ ಲೀಟರ್ಗಳಲ್ಲಿ <br>Diameter of borewell</h4> &emsp;
                    <div class="radioinput">
                        <span>ಒಂದು ಫೇಸ್ ೨೩೦ ವೋಲ್ಟ್ <br> 80mm</span>
                        <input type="radio" name="power" id="rdbtn1" checked="checked" />
                    </div>
                    <div class="radioinput">
                        <span>ಮೂರು ಫೇಸ್ ೪೧೫ ವೋಲ್ಟ್  <br>100mm</span>
                        <input type="radio" name="power" />
                    </div>
                    <div class="radioinput">
                        <span>ಮೂರು ಫೇಸ್ ೪೧೫ ವೋಲ್ಟ್  <br>150mm</span>
                        <input type="radio" name="power" />
                    </div>
                    
                </div>
                
                <div class="forminput">
                    <h5>ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ <br>Total Bore Depth </h5> &emsp;
                    <input type="number" placeholder="Metres" class="">
                    <h6><strong>in metres</strong> </h6>
                </div>
                <div class="forminput">
                    <h5>ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ <br>Static Water Level </h5> &emsp;
                    <input type="number" placeholder="Metres" class="">
                    <h6><strong>in metres</strong> </h6>
                </div>
                <div class="forminput">
                    <h5>ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ <br>Final Water Source Depth </h5> &emsp;
                    <input type="number" placeholder="Metres" class="">
                    <h6><strong>in metres</strong> </h6>
                </div>
                <div class="forminput">
                    <h5>ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ <br>Height to be pumped from Ground Level </h5> &emsp;
                    <input type="number" placeholder="Metres" class="">
                    <h6><strong>in metres</strong> </h6>
                </div>
                <div class="forminput">
                    <h5>ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ <br>Total Yield Available </h5> &emsp;
                    <input type="number" placeholder="LPM" class="">
                    <h6><strong>in LPM</strong> </h6>
                </div>
                
                <div class="formradio">
                    <h4>ನೀರಿನ ಅವಶ್ಯಕತೆ ದಿನಕ್ಕೆ ಲೀಟರ್ಗಳಲ್ಲಿ <br>Power Supply available </h4> &emsp;
                    <div class="radioinput">
                     <span>ಒಂದು ಫೇಸ್ ೨೩೦ ವೋಲ್ಟ್ <br> Single Phase 230V</span>
                     <input type="radio" name="power" id="rdbtn1" checked="checked" />

                    </div>
                    <div class="radioinput">
                     <span>ಮೂರು ಫೇಸ್ ೪೧೫ ವೋಲ್ಟ್  <br>Three Phase 415V</span>
                     <input type="radio" name="power" />

                </div>
                
                <div class="formwaterpump">
                    <h5>ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ <br>Which Make Pump Required</h5> &emsp;
                    <select type="number" placeholder="Metres" class="">
                        <option value="">
                            Select
                        </option>
                        <option value="">
                            UNEEL
                        </option>
                        </select>
                </div>
                <div class="buttons">
                   <button type="button" class="btn btn-light" id="clearbtn">CLEAR</button> 
                   <button type="submit" class="btn btn-light" id="searchbtn">SEARCH</button> 
                </div>
                

            </form>
        </div>  
    </div>
</body>

</html>