<?php require_once('includes/header.php'); ?>

        <h1>Contact</h1>
        <div class="row">
          <div class="col-lg-8 ">
                  <label>Nume complet:</label>
                  <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Numar de telefon:</label>
                  <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Adresa de e-mail:</label>
                  <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Mesaj:</label>
                  <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                </div>
              </div>
              <div id="success "></div>
              <button type="submit" class="btn btn-primary" id="sendMessageButton">Trimite mesaj</button>
            </form>
          
            <?php require_once('includes/footer.php');?>