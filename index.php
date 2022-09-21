
<?php 
    include_once  __DIR__ .'\include\header.php';
?>
<body>
    <header>
        <h1>The Code Review</h1>
    </header>
    <div>
        <div class="top">
            <h2>Signup for our newsletter</h2>
            <p>Get a the latest news on how your code is doing right in your inbox</p>
        </div>
    </div>
        
    <div class="wrapper">
        <hr class="thick">
        <hr>

        <form>
            <fieldset class="contact">
                <legend>Contact Information</legend>
                <div class="contact_input">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Required" required><br>
                </div>
                <div class="contact_input">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Required" required><br>
                </div>
                <div class="contact_input">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone"><br>
                </div>
                <div class="contact_input">
                    <label for="address">Street Address</label>
                    <input type="text" id="address" name="address"><br>
                </div>
                <div class="contact_input">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city"><br>
                </div>
                <div class="contact_input">
                    <label for="communities">Autonomous communities</label>
                    <select name="communities" id="communities">
                        <option value="0" selected disabled hidden>Choose your option</option>
                        <option value="Andalucí­a">Andalucí­a</option>
                        <option value="Aragón">Aragón</option>
                        <option value="Principado de Asturias">Principado de Asturias</option>
                        <option value="Islas Baleares">Islas Baleares</option>
                        <option value="País Vasco">Paí­s Vasco</option>
                        <option value="Islas Canarias">Islas Canarias</option>
                        <option value="Cantabria">Cantabria</option>
                        <option value="Castilla-La Mancha">Castilla-La Mancha</option>
                        <option value="Castilla y León">Castilla y León</option>
                        <option value="Cataluña">Cataluña</option>
                        <option value="Extremadura">Extremadura</option>
                        <option value="Galicia">Galicia</option>
                        <option value="Comunidad de Madrid">Comunidad de Madrid</option>
                        <option value="Región de Murcia">Región de Murcia</option>
                        <option value="Comunidad Foral de Navarra">Comunidad Foral de Navarra</option>
                        <option value="La Rioja">La Rioja</option>
                        <option value="Comunidad Valenciana">Comunidad Valenciana</option>
                        <option value="Ceuta">Ceuta</option>
                        <option value="Melilla">Melilla</option>
                    </select><br></div>
                <div class="contact_input">
                    <label id="label_Zcode" for="Zcode">Zip Code</label><br>
                    <input type="text" id="Zcode" name="Zcode"><br>
                </div>
            </fieldset>
            <hr>
            <fieldset class="news radio checkbox">
                <legend>Newsletter</legend>
                <label>Select the newsletters you would like to recive</label><br>
                <br>
                <input id="newshtml" type="checkbox" value="HTML">
                <label for="newshtml">HTML News</label><br>
                <br>
                <input id="newscss" type="checkbox" value="CSS">
                <label for="newscss">CSS News</label><br>
                <br>
                <input id="newsjs" type="checkbox" value="JS">
                <label for="newsjs">Javascript News</label><br>
                <br>
                <label>Newsletter format</label><br>
                <br>
                <input id="fhtml" type="radio" name="format" value="fhtml">
                <label for="fhtml">HTML</label><br>
                <br>                
                <input id="fplaintxt" type="radio" name="format" value="fplaintxt">
                <label for="fplaintxt">Plain text</label><br>
                <br>
                <label for="othert">Other topics you'd like to hear about</label><br>
                <br>
                <textarea id="othert" name="othert" placeholder="Write the topics you would like to read..."></textarea>
            </fieldset>

            <button type="submit">Sign Up</button>
            <button type="reset">Reset</button>
        </form>
    </div>

    <footer>
        <p>Copyright The Code Review</p>
    </footer>
</body>

</html>
