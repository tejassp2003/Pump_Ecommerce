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
                <strong>Domestic Sump / Open Well Pump Selection  
                    <br> ಗೃಹ ಮತ್ತು ವಸತಿ ನಿಲಯಕ್ಕೆ ತೊಟ್ಟಿ / ತೆರೆದ ಭಾವಿ ಪಂಪಿನ ಆಯ್ಕೆ  </strong>
            </h5>
        </div>

        <dic class="container">
            <form action="/soborewell.php">
                <div class="forminput">
                    <h5>ನೀರಿನ ಅವಶ್ಯಕತೆ ದಿನಕ್ಕೆ ಲೀಟರ್ಗಳಲ್ಲಿ <br>Water Required per day (in litres) </h5> &emsp;
                    <input type="number" placeholder="Litres" class="" >
                </div>
                
                <div class="forminput">
                    <h5>ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ <br>Total Height to be pumped(in metres) </h5> &emsp;
                    <input type="number" placeholder="Metres" class="">
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