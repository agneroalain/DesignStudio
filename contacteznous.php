<?php include('include/header.php'); ?>
<?php include('include/asside.php'); ?>
    <div class="back1">
        <div class="form-contact">
        <h1>Contactez le Studio maintenant !<span>Identifiez vous et dites nous ce que vous pensez de notre site internet !</span></h1>
        <form>
            <div class="section"><span>1</span>Nom  &amp; Adresse</div>
            <div class="inner-wrap">
                <label>Votre Nom Complet <input type="text" name="field1" /></label>
                <label>Adresse <textarea name="field2"></textarea></label>
            </div>

            <div class="section"><span>2</span>Email &amp; Téléphone</div>
            <div class="inner-wrap">
                <label>Adresse Email<input type="email" name="field3" /></label>
                <label>Numero De Téléphone <input type="text" name="field4" /></label>
            </div>
            <div class="section"><span>2</span>Message</div>
            <div class="inner-wrap">
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="button-section">
            <input type="submit" name="Sign Up" value="Envoyer" />
            <span class="privacy-policy">
            <input type="checkbox" name="field7">You agree to our Terms and Policy. 
            </span>
            </div>
        </form>
        </div>
    </div>
<?php include('include/footer.php'); ?>