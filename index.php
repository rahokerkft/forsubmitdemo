<body>
<form action="" method="POST">
        <label for="">Kötelező mező</label><br />
        <div>
            <label>Fogadó email címe</label>
            <input type="text" name="receiver_email" value="" />
        </div>

        <label for="">Opcionális mezők</label><br />
        <div>
            <label>Levél tárgya</label>
            <input type="text" name="subject" value="" />
        </div>

        <div>
            <label>Levél tartalma</label>
            <textarea name="message" ></textarea>
        </div>

        <div>
            <label>Küldő neve</label>
            <input type="text" name="sender_name" value="" />
        </div>

        <div>
            <label>Küldő email címe</label>
            <input type="text" name="sender_email" value="" />
        </div>

        <div class="buttons">
            <input type="submit" name="submit" value="Küldés" />
        </div>
        <?php
    // Ha elküldtük a formba beírt adatokat, így nem üres a $_POST
    if( ! empty( $_POST ) )
    {
        // Mivel csak egy mező kötelező csak azt kell ellenőrizni
        if( empty( $_POST["receiver_email"] ) )
        {
            echo "<p>Kérjük adja meg a fogadó email címét!</p>";
        }
    }
    ?>
</form>
<body>