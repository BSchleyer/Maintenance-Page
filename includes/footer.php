<span class="s1-txt3 txt-center">
			Copyright &copy; 2019-
            <script>
                document.write(new Date().getFullYear())
            </script>
            <?= $siteName ?> | All Rights reserved.<br>Made with-&#10084; in Gelsenkirchen, by Björn Schleyer
		</span>

</div>
<!--===============================================================================================-->
<script src="<?= $cdnUrl ?>vendor/jquery/jquery-3.2.1.min.js"></script>
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