        </div>
    </div>

    <div id="footer">
        <div class="gov-seal">
        </div>
        <div class="col-header
                ">Republic of the Philippines <br> <br>
        All content is in the public domain unless <br>
        otherwise stated.
        </div>
        <div class="col-header
        ">About SEC-EASE <br> <br>
            Exceptional and Alternative Submissions Environment (EASE)
           <ul>
            <li>
               <a href="https://www.sec.gov.ph" target="_blank"> SEC Website</a>
            </li>
            <li>
                <a href="https://www.gov.ph" target="_blank">GOVPH</a>
            </li>
            <li>
                <a href="https://www.gov.ph/open-data-portal/" target="_blank">Open Data Portal</a>
            </li>
            <li>
                <a href="https://www.gov.ph/official-gazette/" target="_blank">Official Gazette</a>
            </li>
           </ul>
        </div>
        <div class="col-header
        ">SEC Online Services
        <ul>
            <li> <a href="https://www.sec.gov.ph/esecure" target="_blank">eSECURE</a>
        </li>
        <li>
            <a href="https://www.sec.gov.ph/esparc" target="_blank">eSPARC</a>
        </li>
        </li>
        <li> <a href="https://www.sec.gov.ph/efast" target="_blank">eFAST</a> </li>
        <li> <a href="https://www.sec.gov.ph/esearch" target="_blank">eSEARCH</a> </li>
        <li> <a href="https://www.sec.gov.ph/espaysec" target="_blank">eSPAYSEC</a> </li>
        <li> <a href="https://www.sec.gov.ph/mc28" target="_blank">MC28 Submission</a> </li>
        </ul>
     </div>
        <?php /*
         <p style="border: 3px solid blue;"><?php echo __('Copyright &copy;'); ?> <?php echo date('Y'); ?> <?php
        echo Format::htmlchars((string) $ost->company ?: 'osTicket.com'); ?> - <?php echo __('All rights reserved.'); ?></p>
        <a style="border: 3px solid blue;" id="poweredBy" href="https://osticket.com" target="_blank">
        <?php echo __('Helpdesk software - powered by osTicket'); ?></a>
        */ ?>
    </div>
    <div class="copyrights">
     Securities and Exchange Commission @ 2026
    </div>

<!-- <div id="overlay"></div> -->

<div id="loading">
    <h4><?php echo __('Please Wait!');?></h4>
    <p><?php echo __('Please wait... it will take a second!');?></p>
</div>

<?php
if (($lang = Internationalization::getCurrentLanguage()) && $lang != 'en_US') { ?>
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>ajax.php/i18n/<?php
        echo $lang; ?>/js"></script>
<?php } ?>
<script type="text/javascript">
    getConfig().resolve(<?php
        include INCLUDE_DIR . 'ajax.config.php';
        $api = new ConfigAjaxAPI();
        print $api->client(false);
    ?>);
</script>
</body>
</html>
