<!DOCTYPE html>
<html>
    <head>
        <title>Tugas 2 - Modul 10 - Minggu 5</title>
    </head>
    <body>
        <input class="form_control" name="form_input" type="text" value=""><br>
        <input class="form_control" name="form_input" type="text" value=""><br>
        <p id="form_value">Form Value: -</p>
        <input type="submit" onclick="gebn('form_input')" value="Get Value (ByName)">

        <br><br>
        <input id="form_class" value="form_control">
        <input id="hex" value="#FFFFFF"><br>
        <input type="submit" onclick="gebcn(document.getElementById('form_class').value)" value="Set Backcolor (ByClassName)">
        
        <br><br>
        <input id="form_tagnamens" value="input">
        <input id="outputns" value=""><br>
        <input type="submit" onclick="gebtnns(document.getElementById('form_tagnamens').value)" value="Get (ByTagNameNS)">
        
        <br><br>
        <input id="form_query" value=".form_control">
        <input id="hexx" value="#FFFFFF"><br>
        <input type="submit" onclick="qs(document.getElementById('form_query').value)" value="Set Backcolor (QuerySelector)">
        <input type="submit" onclick="qsa(document.getElementById('form_query').value)" value="Set Backcolor (QuerySelectorAll)">

        
        <script>
            function gebn(name) {
                elmts = document.getElementsByName(name);

                document.getElementById('form_value').innerHTML = 'Form Value: '
                for(var i=0; i<elmts.length; i++) {
                    document.getElementById('form_value').innerHTML += elmts[i].value + '; ';
                }
            }

            function gebcn(classname) {
                elmts = document.getElementsByClassName(classname);
                color_hex = document.getElementById('hex').value;
                
                for(var i=0; i<elmts.length; i++) {
                    elmts[i].style = "background-color: " + color_hex + ";";
                }
            }

            function gebtnns(tagnamens) {
                elmts = document.getElementsByTagNameNS('http://example.com/xmlns/smpte', tagnamens);
                document.getElementById('outputns').value = elmts;
            }

            function qs(query) {
                document.querySelector(query).style.backgroundColor = document.getElementById('hexx').value;
            }

            function qsa(query) {
                elmts = document.querySelectorAll(query);

                for(var i=0; i<elmts.length; i++) {
                    elmts[i].style.backgroundColor = document.getElementById('hexx').value;
                }
            }
        </script>

    </body>
</html>