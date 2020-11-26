<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css" />
    <title>PRAJASEVE</title>
</head>

<body>
    <div class="productmain">
        <div class="mainheading">
            <h5>
                <strong>Agriculture Canal or River Pump Selection  
                    <br> ಗೃಹ ಮತ್ತು ವಸತಿ ನಿಲಯಕ್ಕೆ ತೊಟ್ಟಿ / ತೆರೆದ ಭಾವಿ ಪಂಪಿನ ಆಯ್ಕೆ  </strong>
            </h5>
        </div>

        <div class="container">
            <form action="/acorrp.php">
                <div class="forminput">
                    <h5>ನೀರಿನ ಅವಶ್ಯಕತೆ ದಿನಕ್ಕೆ ಲೀಟರ್ಗಳಲ್ಲಿ <br>Water to be Pumped per Minute</h5> &emsp;
                    <input type="number" placeholder="Litres" class="" >
                    <h6><strong>in litres</strong> </h6>
                </div>
                
                <div class="forminput">
                    <h5>ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ <br>Height to be pumped from Canal or River</h5> &emsp;
                    <input type="number" placeholder="Metres" class="">
                    <h6><strong>in metres</strong> </h6>
                </div>
                <div class="forminput">
                    <h5>ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ <br>Horizontal Distance to be Pumped</h5> &emsp;
                    <input type="number" placeholder="Metres" class="">
                    <h6><strong>in metres</strong> </h6>
                </div>
                
                <div class="formwaterpump">
                    <h5>ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ <br>Which Make Pump Required</h5> &emsp;
                    <select type="number" placeholder="Metres" class="">
                        <h6><strong>in metres</strong> </h6>
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