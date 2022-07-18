<?php include('inc/header.php') ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 justify-content-center align-self-center">
      <div class="embed-responsive embed-responsive-1by1">
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2698.071298152101!2d19.04171131544624!3d47.449549606807345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dd9d2d56c245%3A0x1a9b56076cb2a754!2sPorsche+Centrum!5e0!3m2!1shu!2shu!4v1555334783546!5m2!1shu!2shu"></iframe>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="col-md-12 order-md-1">
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">Keresztnév</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Adja meg a keresztnevét.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Vezetéknév</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Adja meg a vezetéknevét.
              </div>
            </div>
          </div>

          <div class="col--12 mb-3">
            <label for="username">Telefonszám</label>
            <span class="bfh-phone" data-format="+36 (ddd) ddd-dddd" data-number="15555555555"></span>
            <input type="text" class="form-control" id="bfh-phone" placeholder="Telefonszám" required>
            <div class="invalid-feedback" style="width: 100%;">
              Adja meg a telefonszámát.
            </div>

          </div>

          <div class="col--12 mb-3">
            <label for="email">E-mail cím</label>
            <input type="email" class="form-control" id="email" placeholder="te@pelda.com">
            <div class="invalid-feedback">
              Adja meg az e-mail címét.
            </div>
          </div>

          <div class="col--12 mb-3">
            <label for="s-product">Kiválasztott termék</label>
            <select class="form-control">
              <option>Porsche 911 Carrera S (2019)</option>
              <option>Porsche 911 Targa 4</option>
              <option>Porsche 911 Turbo Cabriolet</option>
              <option>Porsche 911 GT2 RS</option>
              <option>Porsche 718 Cayman S</option>
              <option>Porsche 718 Boxster</option>
              <option>Porsche 718 T Cayman</option>
              <option>Porsche 718 Boxster GTS</option>
              <option>Porsche Panamera 4</option>
              <option>Panamera GTS Sport Turismo</option>
              <option>Porsche Panamera Turbo Executive</option>
              <option>Porsche Panamera 4 E-Hybrid</option>
              <option>Porsche Macan (2019)</option>
              <option>Porsche Macan S (2019)</option>
              <option>Porsche Cayanne (2019)</option>
              <option>Porsche Cayanne E-Hybrid (2019)</option>
            </select>
          </div>
          <hr class="mb-4">

          <h4 class="mb-3">Fizetési mód</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="credit">Bankkártya</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="keszpenz" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="keszpenz">Készpénz</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Kártyán lévő név</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Teljes név a kártyán</small>
              <div class="invalid-feedback">
                Írja be a kártyán lévő nevet.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Kártyaszám</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Írja be a kártyaszámot.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-expiration">Lejárati dátum</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Írja be a lejárati dátumot.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-expiration">Biztonsági kód</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Írja be a biztonsági kódot.
              </div>
            </div>
          </div>
          <hr class="mb-3">
          <button class="btn btn-primary btn-lg btn-block" type="submit" onclick="show_alert();">Vásárlás</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

</div>

<?php include('inc/footer.php') ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields

  (function() {
    'use strict';

    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');

      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>
<script type="text/javascript">
  function show_alert() {
    alert("Köszönjük a rendelését! Hamarosan tájékoztatjuk a termék átvételéről.")
  };
</script>


</body>

</html>