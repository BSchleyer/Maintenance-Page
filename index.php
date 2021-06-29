<?php
include 'app/config.php';

$currPageName = $indexName;
include 'includes/head.php';

?>

<div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-55 p-b-35 respon1 col-md-14">
    <h4 style="color: #fff;"><?= $siteName; ?></h4>
    <div class="flex-col-c p-t-50 p-b-50">
        <h3 class="l1-txt1 txt-center p-b-10">
            <?= $title_page ?>
        </h3>
        <p class="txt-center l1-txt2 p-b-60">
            <?= $text_page ?>
        </p>
        <div class="flex-w flex-c cd100 p-b-82">
            <div class="flex-col-c-m size2 how-countdown">
                <span class="l1-txt3 p-b-9 days">35</span>
                <span class="s1-txt1"><?= $day ?></span>
            </div>
            <div class="flex-col-c-m size2 how-countdown">
                <span class="l1-txt3 p-b-9 hours">17</span>
                <span class="s1-txt1"><?= $hours ?></span>
            </div>
            <div class="flex-col-c-m size2 how-countdown">
                <span class="l1-txt3 p-b-9 minutes">50</span>
                <span class="s1-txt1"><?= $minutes ?></span>
            </div>
            <div class="flex-col-c-m size2 how-countdown">
                <span class="l1-txt3 p-b-9 seconds">39</span>
                <span class="s1-txt1"><?= $seconds ?></span>
            </div>
        </div>
    </div>

<?php

include 'includes/footer.php';

?>

<script>
    $('.cd100').countdown100({
        /*Set Endtime here*/
        /*Endtime must be > current time*/
        endtimeYear: <?= $c_year; ?>,
        endtimeMonth: <?= $c_month; ?>,
        endtimeDate: <?= $c_day; ?>,
        endtimeHours: <?= $c_hour; ?>,
        endtimeMinutes: <?= $c_minute; ?>,
        endtimeSeconds: <?= $c_second; ?>,
        timeZone: "<?= $c_timezone; ?>"
        // ex:  timeZone: "America/New_York"
        //go to " http://momentjs.com/timezone/ " to get timezone
    });
</script>
