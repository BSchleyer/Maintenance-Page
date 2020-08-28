<span class="s1-txt3 txt-center">
			Copyright &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            <?= $siteName ?> | All Rights reserved.<br>Made with-&#10084; in Gelsenkirchen, by Björn Schleyer
		</span>

        <br>

        <div class="col-md-4" align="center">

            <button class="btn btn-primary">
                <a href="privacy">
                    <p style="color: #b9b9b9;">
                        <?= $button_left ?>
                    </p>
                </a>
            </button>


            <button class="btn btn-primary">
                <a href="imprint">
                    <p style="font-size: 100%; color: #b9b9b9;">
                        <?= $button_right ?>
                    </p>
                </a>
            </button>
        </div>

</div>
<!--===============================================================================================-->
<script src="<?= $cdnUrl ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?= $cdnUrl ?>vendor/bootstrap/js/popper.js"></script>
<script src="<?= $cdnUrl ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= $cdnUrl ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?= $cdnUrl ?>vendor/countdowntime/moment.min.js"></script>
<script src="<?= $cdnUrl ?>vendor/countdowntime/moment-timezone.min.js"></script>
<script src="<?= $cdnUrl ?>vendor/countdowntime/moment-timezone-with-data.min.js"></script>
<script src="<?= $cdnUrl ?>vendor/countdowntime/countdowntime.js"></script>
<script>
    $('.cd100').countdown100({
        endtimeYear: <?= $c_year ?>,
        endtimeMonth: <?= $c_month ?>,
        endtimeDate: <?= $c_day ?>,
        endtimeHours: <?= $c_hour ?>,
        endtimeMinutes: <?= $c_minute ?>,
        endtimeSeconds: <?= $c_second ?>,
        timeZone: "<?= $c_timezone ?>"
    });
</script>
<!--===============================================================================================-->
<script src="<?= $cdnUrl ?>vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="<?= $cdnUrl ?>js/main.js"></script>

</body>
</html>