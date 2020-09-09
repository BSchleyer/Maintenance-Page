<?php
$privacyName;
include 'includes/head.php';
?>

    <div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-25 p-b-10 respon1">
    <img src="<?= $imgUrl ?>logo.png" width="250">
    <div class="flex-col-c col-md-12 p-b-5">
        <p class="l1-txt2 txt-center p-b-10">
            <button class="btn btn-primary">
                <a href="/home">
                    <p style="color: #b9b9b9;">
                        <i class="fas fa-hourglass-half"></i>
                        <?= $button_backhome ?>
                    </p>

                </a>
            </button>
        </p>

        <h3 class="l1-txt1 txt-center p-b-10">
            <?= $header_text_p ?>
        </h3>

        <p class="l1-text2" align="left">
            <!--

            Enter your privacy policy here

            -->
        <p>Last Update:  28.08.2020 - 12:00 Uhr
        </p>
    </div>

<?php
include 'includes/footer.php';
?>