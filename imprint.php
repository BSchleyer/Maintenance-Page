<?php
$imprintName;
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
            <?= $header_text_i ?>
        </h3>
        <p class="txt-center l1-txt2 p-b-20">
            <?= $header_secondtext_i ?>
        </p>

        <p class="l1-text2" align="left">
            <strong>Operator:</strong><br>
            <?= $i_projectname ?><br>
            <?= $i_street ?><br>
            <?= $i_postcode_and_city ?><br>
            <?= $i_state ?><br>
            <br>
            <strong>Responsible for content according to § 55 II RStV:</strong><br>
            <?= $i_responsible ?>, <?= $i_responsible_address ?><br>
            <br>
            <strong>Contact:</strong><br>
            Telefon: <a href="tel:<?= $i_phone_areaCode?><?= $i_phone_number ?>">+<?= $i_phone_areaCode ?><?= $i_phone_number ?></a><br>
            Fax: <?= $i_fax ?><br>
            E-Mail: <a href="mailto:<?= $i_email ?>"><?= $i_email ?></a><br>
            <br>
            <br>
            <strong>Disclaimer</strong>
            <br />
            <strong>§ 1 Warning about content</strong>
            <br/>
            The free and freely accessible content of this website was created with the greatest possible care. However, the provider of this website does not guarantee the correctness and topicality of the free and freely accessible journalistic advice and news provided. Contributions identified by name reflect the opinion of the respective author and not always the opinion of the provider. Simply by calling up the free and freely accessible content, no contractual relationship is established between the user and the provider, insofar as the provider lacks the will to be legally bound.
            <br/><br/>
            <strong>§ 2 External Links</strong>
            <br/>
            This website contains links to websites of third parties ("external links"). These websites are the responsibility of the respective operators. When the external links were first linked, the provider checked the third-party content for any legal violations. At that time, no legal violations were apparent. The provider has no influence on the current and future design and content of the linked pages. The setting of external links does not mean that the provider adopts the content behind the reference or link as his own. Constant monitoring of the external links is not reasonable for the provider without concrete evidence of legal violations. With knowledge of legal violations, such external links will be deleted immediately.
            <br/><br/>
            <strong>§ 3 Copyright and ancillary copyrights</strong>
            <br/>
            The content published on this website is subject to German copyright and ancillary copyright law. Any use not permitted by German copyright and ancillary copyright law requires the prior written consent of the provider or the respective rights holder. This applies in particular to the duplication, editing, translation, storage, processing or reproduction of content in databases or other electronic media and systems. Contents and rights of third parties are marked as such. The unauthorized duplication or distribution of individual content or complete pages is not permitted and is punishable. Only the production of copies and downloads for personal, private and non-commercial use is permitted.
            <br><br>
            The presentation of this website in external frames is only permitted with written permission.
            <br/><br/>
            <strong>§ 4 Special Terms of Use</strong>
            <br/>
            Insofar as special conditions for individual uses of this website deviate from the aforementioned paragraphs, this is expressly pointed out at the appropriate point. In this case, the special terms of use apply in each individual case.
            <br/><br/>
            The European Commission provides a platform for out-of-court online dispute resolution (OS platform), available at <a href="http://ec.europa.eu/odr">http://ec.europa.eu/odr</a>.
            <br><br>
        <p>Last Update:  28.08.2020 - 12:15 Uhr
        </p>
    </div>

<?php
include 'includes/footer.php';
?>