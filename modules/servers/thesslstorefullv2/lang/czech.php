<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}
$_LANG['certificate_details'] = "Detaily certifikátu";
$_LANG['sslstatus'] = "Stav objednávky";
$_LANG['ssl_store_orderid'] = "ID objednávky v obchodě";
$_LANG['ssl_provisioning_date'] = "Datum zprovoznění SSL";
$_LANG['ssl_expiry_date'] = "Datum expirace SSL";
$_LANG['order_expiry_date'] = "Datum expirace objednávky";
$_LANG['ssl_vendor_status'] = "Stav u dodavatele";
$_LANG['ssl_product_name'] = "Název produktu";
$_LANG['ssl_vendor_orderid'] = "ID objednávky u dodavatele";
$_LANG['ssl_verification_email'] = "Verifikační e-mail";
$_LANG['ssl_poll_status'] = "Stav ověření souboru";
$_LANG['ssl_poll_date'] = "Datum poslední kontroly souboru";
$_LANG['AuthenticationStatuses'] = "Stavy ověření";
$_LANG['AuthenticationStep'] = "Krok ověření";
$_LANG['AuthenticationStatus'] = "Stav ověření";
$_LANG['LastUpdated'] = "Naposledy aktualizováno";
$_LANG['AuthenticationComments'] = "Komentáře k ověření";
$_LANG['cname_details'] = "Detaily DNS";
$_LANG['certificate_delivery_method'] = "Metoda doručení certifikátu";
$_LANG['cname_dns'] = "Hostitel";
$_LANG['cname_point_to'] = "Cíl";
$_LANG['dns_txt_info'] = "Následující kroky vytvoří záznam TXT.<br/>

    1. Jako typ záznamu zvolte TXT.<br/>
    2. Do pole Jméno/Hostitel/Alias zadejte @ nebo nechte prázdné. Vaše ostatní DNS záznamy mohou určit, kterou možnost byste měli použít.<br/>
    3. Do pole Čas na živobytí (TTL) zadejte 3600 nebo nechte výchozí hodnotu.<br/>
    4. Do pole Hodnota/Odpověď/Destinace vložte tuto hodnotu: %txtrecord%.<br/>
    5. Uložte záznam.
";


$_LANG['ssl_san_details'] = "Celkem SAN";
$_LANG['admin_details'] = "Detaily správce";
$_LANG['admin_firstname'] = "Jméno";
$_LANG['admin_lastname'] = "Příjmení";
$_LANG['admin_email'] = "Email";
$_LANG['admin_title'] = "Titul";
$_LANG['admin_phone'] = "Telefon";
$_LANG['tech_details'] = "Technické detaily";
$_LANG['tech_firstname'] = "Jméno";
$_LANG['tech_lastname'] = "Příjmení";
$_LANG['tech_email'] = "Email";
$_LANG['tech_title'] = "Titul";
$_LANG['tech_phone'] = "Telefon";
$_LANG['domains'] = "Doména(y)";
$_LANG['site_seal'] = "Získejte pečeť webu";
$_LANG['refund_status_id'] = "ID stavu vrácení peněz";
$_LANG['download_cert'] = "Stáhnout&nbsp;certifikát";
$_LANG['auth_file'] = "Stáhnout&nbsp;ověřovací&nbsp;soubor";
$_LANG['refund_req'] = "Zrušit&nbsp;certifikát";
$_LANG['reissue_cert'] = "Znovu vydat&nbsp;certifikát";
$_LANG['buy_more_san_btn'] = "Koupit další SAN";
$_LANG['buy_more_san_tooltip'] = "Po odeslání upgradu bude vygenerována příslušná faktura. <br>Po zaplacení bude služba upravena odpovídajícím způsobem. Pro přidání dalších SAN do certifikátu je třeba spustit akci \"Znovuvydání\" certifikátu.";
$_LANG['save'] = "Uložit";
$_LANG['check_order_status'] = "Zkontrolovat&nbsp;stav&nbsp;objednávky";
$_LANG['generate_cert'] = "Vygenerovat nyní";
$_LANG['resend_approver_email'] = "Znovu odeslat&nbsp;schvalovací&nbsp;email";
$_LANG['change_approver_email'] = "Změnit&nbsp;schvalovací&nbsp;email";
$_LANG['change_approver_method'] = "Změnit&nbsp;metodu&nbsp;schválení";
$_LANG['emailmessage'] = "Děkujeme za objednání našeho bezpečnostního produktu! Váš nákup nyní vyžaduje další konfiguraci, kterou lze provést na následující URL:";
$_LANG['refund_status_id'] = "ID incidentu SSL";
$_LANG['token'] = "Token";
$_LANG['token_code'] = "Kód tokenu";
$_LANG['token_id'] = "ID tokenu";
$_LANG['tokens_tooltip'] = "Toto se používá POUZE pokud vaše hostingová platforma využívá technologii AutoInstall SSL&trade;. Pokud váš kontrolní panel aktuálně disponuje pluginem AutoInstall SSL&trade; pro použití, jednoduše zkopírujte/vložte Token do pluginu, když budete vyzváni k zpracování vaší objednávky.";
$_LANG['additional_san']="Zadejte dodatečné domény:*";
$_LANG['additional_san_label']="Dodatečná doména";
$_LANG['signature_algorithm_note']="Vyberte algoritmus podpisu:<br/><span class='regular'>Prosím, vyberte Algoritmus bezpečného hašování (SHA), který chcete použít. SHA je hašovací algoritmus používaný certifikačními autoritami pro podepisování certifikátů a CRL (Seznam odvolaných certifikátů) pro generování unikátních hašových hodnot ze souborů.</span><br/><br/>";
$_LANG['signature_algorithm_note_comodo']="Můžete generovat všechny Comodo SSL Certifikáty s <b>ECC</b> jako jejich <b>Algoritmus podpisu</b>, ale musíte během tohoto procesu předložit <b>ECC CSR</b>.";
$_LANG['signature_algorithm_label']="Algoritmus podpisu";
$_LANG['sslcertapproveremail'] = "Možnosti ověření domény";
$_LANG['sslstore_custom_phrase_sslcertapproveremaildetails'] = "V tomto kroku musíte prokázat, že máte skutečně kontrolu nad doménou, kterou se snažíte zabezpečit. Jednoduše si vyberte jednu z následujících předem autorizovaných emailových adres spojených s vaší doménou. <b>Email pro schválení certifikátu</b> bude odeslán na tuto adresu, který musí být dokončen, aby mohl dodavatel (CA) certifikát vystavit.";
$_LANG['sslstore_custom_phrase_sslcertapproveremaildetails_with_filebased'] = "V tomto kroku musíte prokázat, že máte skutečně kontrolu nad doménou, kterou se snažíte zabezpečit. Můžete si vybrat ze tří možností uvedených níže: <b>Ověření pomocí souboru</b> nebo <b>Ověření pomocí CNAME</b> nebo <b>Email pro schválení certifikátu.</b><br /><br />Pokud si vyberete metodu <b>Ověření pomocí souboru</b>, dodavatel (CA) vám poskytne soubor, který umístíte na svůj server. Jméno i obsah souboru vám bude poskytnut v posledním kroku tohoto procesu. Jakmile bude soubor umístěn, dodavatel se pokusí soubor pingovat, aby ověřil kontrolu nad doménou. <br /><br />Pokud si vyberete možnost <b>Ověření pomocí CNAME</b>, dodavatel (CA) vám poskytne dva jedinečné hašovací hodnoty, které zadáte jako záznam CNAME v DNS domény. Pokud je to správně provedeno, dodavatel může záznam zobrazit pomocí vyhledávání DNS a vystavit certifikát po potvrzení. Tyto dvě jedinečné hašovací hodnoty vám budou poskytnuty v posledním kroku procesu. <br/><br/>Pokud si vyberete možnost <b>Email pro schválení certifikátu</b>, můžete si vybrat z následujících předem autorizovaných emailových adres spojených s vaší doménou. Na tuto adresu obdržíte email, který musí být dokončen, aby mohl dodavatel (CA) certifikát vystavit.";
$_LANG['sslstore_custom_phrase_certapproveremaildetails_san'] = "<br /><br />Například, pokud je vybrán schvalovací email \"admin@\" a hlavní název je určen jako \"domain.com\" a doplňková (SAN) doména je \"sub.domain1.com\", schvalovací emaily budou odeslány na admin@domain.com a admin@sub.domain1.com.<br/><br/> Schvalovací email můžete později změnit ve svém ovládacím panelu pomocí možnosti \"Změnit schvalovací email\" na stránce detailů objednávky.";
$_LANG['sslstore_authtxt_sslconfigcompletedetails'] = 'Pro ověření pomocí souboru, vytvořte strukturu složek "/.well-known/pki-validation/" v kořenovém adresáři a vytvořte soubor s následujícími detaily, nebo stáhněte ověřovací soubor kliknutím na tlačítko "Stáhnout ověřovací soubor" a umístěte jej do "/.well-known/pki-validation/" na HTTP serveru, jako například: %authfileurl%.<br />Ověření souboru může trvat nějakou dobu a certifikát může být vystaven certifikační autoritou po automatickém ověření.<br /><br /><b>Název souboru : </b>%filename%<br /><b>Obsah souboru : </b>%content%<br /><br />%authfile%<br />';


$_LANG['sslconfigcompletedetails'] = "Proces generování vašeho SSL certifikátu byl nyní dokončen a odeslán certifikační autoritě ke kontrole. Pokud by byly jakékoli dotazy nebo problémy, certifikační autorita se obrátí na administrativního kontakt, aby vyjasnila a vyřešila situaci.";
$_LANG['sslstore_san_csr_note'] = 'Musíte výslovně uvést příslušné SAN (Subject Alternative Names), které chcete chránit, v níže uvedených polích. Jakékoli domény uvedené v části SAN vašeho CSR budou ignorovány.  </br></br><i><strong>Poznámka:</strong> Aby se předešlo možným chybám, prosím nezahrnujte společný název z vašeho CSR ani neduplikujte žádné záznamy SAN v dodatečných polích pro domény níže.</i>';
$_LANG['sslstore_wildcard_san_csr_note'] = 'Musíte výslovně uvést příslušné Wildcard SAN, které chcete chránit, v níže uvedených polích. Jakékoli domény uvedené v části SAN vašeho CSR budou ignorovány.  </br></br><i><strong>Poznámka:</strong> Aby se předešlo možným chybám, prosím nezahrnujte společný název z vašeho CSR ani neduplikujte žádné záznamy Wildcard SAN v dodatečných polích pro wildcard domény níže.</i>';
$_LANG['signature_algorithm_description']='<b>SHA-2</b><br /> Vzhledem k nedávným změnám v odvětví je nyní SHA-2 průmyslovým standardem pro všechny certifikáty. Tato možnost vám poskytne SHA-2 Certifikát, SHA-2 Meziprodukt a SHA-1 Kořenový certifikát. .<br /><br /><b>FULL SHA-2</b><br /> Tato možnost překračuje průmyslové standardy a je doporučena pouze pro pokročilé uživatele. Podobně jako možnost SHA-2, FULL SHA-2 možnost poskytne stejný SHA-2 Certifikát a Meziprodukt, ale SHA-2 Kořenový certifikát místo SHA-1.';
$_LANG['signature_algorithm_description_securesitepro_ecc']='<b>SHA-2</b><br /> Vzhledem k nedávným změnám v odvětví je nyní SHA-2 průmyslovým standardem pro všechny SSL certifikáty. Tato možnost vám poskytne SHA-2 Certifikát, SHA-2 Meziprodukt a SHA-1 Kořenový certifikát. .<br /><br /><b>FULL SHA-2</b><br /> Tato možnost překračuje průmyslové standardy a je doporučena pouze pro pokročilé uživatele. Podobně jako možnost SHA-2, FULL SHA-2 možnost poskytne stejný SHA-2 Certifikát a Meziprodukt, ale SHA-2 kořen místo SHA-1.  <br/><br/><b>ECC-FULL</b><br /> Podobně jako možnost “FULL-SHA-2”, Eliptická křivka kryptografie překračuje průmyslové standardy a je doporučena pouze pro pokročilé uživatele. Pro tuto možnost budete muset dodat ECC CSR, který bude použit k vygenerování ECC Certifikátu z ECC Kořene. <br/><br/><b>ECC-HYBRID</b><br /><br/> Podobně jako možnost “ECC-FULL”, Eliptická křivka kryptografie překračuje průmyslové standardy a je doporučena pouze pro pokročilé uživatele. Pro tuto možnost budete muset dodat ECC CSR, který bude použit k vygenerování ECC Certifikátu, ale Kořen bude RSA. To vám poskytne sílu ECC a kompatibilitu prohlížeče RSA kořene.';
$_LANG['signature_algorithm_description_securesitepro_sha1']='<b>PRIVATE-SHA1-PCA3G1</b><br />DOPORUČENO: Soukromý SHA-1 PCA3G1 Kořenový CA Certifikát byl populární důvěryhodný kořenový certifikát vložený do starších aplikací nebo zařízení, které podporovaly nyní zastaralý hašovací algoritmus SHA-1. Poznámka: Tento Kořenový CA Certifikát podporuje pouze RSA Certificate Signing Requests (CSRs); ne DSA nebo ECC.<br /><br /><b>PRIVATE-SHA1-PCA3G2</b><br />Soukromý SHA-1 PCA3G2 Kořenový CA Certifikát byl zahrnut v mnoha starších aplikacích a zařízeních. Tento kořenový certifikát byl typicky používán se staršími aplikacemi pro Windows Phone. Měli byste zkontrolovat vaši důvěryhodnou kořenovou knihovnu, než s touto možností pokračujete. Poznámka: Tento Kořenový CA Certifikát podporuje pouze RSA Certificate Signing Requests (CSRs); ne DSA nebo ECC.';
$_LANG['sslconfsslcertificate'] = "DALŠÍ KROK: Zahajte proces generování";
$_LANG['sslserverinfodetails'] = "Pro generování SSL certifikátu musíte mít platnou „CSR“ (Certificate Signing Request - Žádost o podepsání certifikátu). CSR je šifrovaný text vytvořený na webovém serveru, kde bude SSL certifikát instalován. Pokud ještě nemáte CSR, musíte ho vygenerovat na vašem serveru nebo požádat vašeho poskytovatele webhostingu, aby vám ho vygeneroval. Ujistěte se, že jste zadali správné informace, protože po vydání SSL certifikátu již nemohou být změněny. </br>Při vkládání vašeho CSR se ujistěte, že začíná: -----BEGIN NEW CERTIFICATE REQUEST----- a končí: -----END NEW CERTIFICATE REQUEST-----<br/><br/>";
$_LANG['sslservertype'] = "Vyberte váš webový server";
$_LANG['sslcsr'] = "Vložte vaše CSR:*";
$_LANG['ssladmininfodetails'] = "Kontaktní informace uvedené níže se nezobrazí na vystaveném certifikátu; budou použity pouze pro kontaktování vás ohledně této objednávky a jakýchkoliv požadavků na ověření. Informace o SSL certifikátu a připomínky k obnově budou zaslány na tuto kontaktní adresu. <br/><br/>";
$_LANG['clientareafirstname'] = "Jméno:*";
$_LANG['clientarealastname'] = "Příjmení:*";
$_LANG['organizationname'] = "Název organizace:*";
$_LANG['jobtitle'] = "Pracovní pozice:*";
$_LANG['jobtitlereqforcompany'] = "(Požadováno, pokud uvádíte název vaší organizace)";
$_LANG['clientareaemail'] = "Emailová adresa:*";
$_LANG['clientareaaddress1'] = "Adresa 1:*";
$_LANG['clientareaaddress2'] = "Adresa 2:*";
$_LANG['clientareacity'] = "Město:*";
$_LANG['clientareastate'] = "Stát/Region:*";
$_LANG['clientareapostcode'] = "PSČ:*";
$_LANG['clientareacountry'] = "Země:*";
$_LANG['clientareaphonenumber'] = "Telefonní číslo:*";

$_LANG['mass_selection_label'] = "Hromadný výběr";
$_LANG['applyselection'] = "Použít";
$_LANG['clearselection'] = "Vyčistit výběr";

$_LANG['sslstore_techform_title'] = "<h2>Informace o technickém kontaktu</h2>";
$_LANG['sslstore_techform_desc'] = "<span class='regular'>Tato osoba obdrží certifikát a obvykle je to jedinec, který bude certifikát instalovat na webový server. Také obdrží upozornění na obnovu, když se blíží vypršení platnosti certifikátu, aby nedošlo k bezpečnostním mezerám.</span><br/><br/>";
$_LANG['sslstore_TechFirstName'] = "Jméno:*";
$_LANG['sslstore_TechLastName'] = "Příjmení:*";
$_LANG['sslstore_TechEmail'] = 'Emailová adresa:*';
$_LANG['sslstore_TechTitle'] = "Titul:*";
$_LANG['sslstore_TechPhone'] = "Telefonní číslo:*";
$_LANG['sslstore_cpanel_account_tooltip'] = "Preferovaný hostingový profil pro použití s tokenem AutoInstall SSL";


//Certificate generation
$_LANG['sslgenerationtitle'] = "Generování certifikátu";
$_LANG['sslreissuetitle'] = "Nové vydání certifikátu";
$_LANG['sslServerInfoTitle'] = "Informace o serveru";
$_LANG['sslServerInfoDesc'] = "Pro generování SSL certifikátu musíte mít platnou \"CSR\" (Certificate Signing Request - žádost o podepsání certifikátu). CSR je šifrovaný text, který je generován webovým serverem, na kterém bude SSL certifikát instalován. Pokud již nemáte CSR, musíte jej vygenerovat na svém serveru nebo požádat svého poskytovatele webhostingu, aby jej pro vás vygeneroval. Ujistěte se, že jste zadali správné informace, protože po vydání SSL certifikátu je nelze změnit. Při vkládání vaší CSR se ujistěte, že začíná: -----BEGIN NEW CERTIFICATE REQUEST----- a končí: -----END NEW CERTIFICATE REQUEST-----";
$_LANG['sslCSR'] = "Vložte CSR";
$_LANG['sslAdditionalSan'] = "Zadejte další SAN";
$_LANG['sslAdditionalWildCardSan'] = "Zadejte další Wildcard SAN";
$_LANG['sslAdminTitle'] = "Informace o kontaktní osobě správce webu";
$_LANG['sslAdminDesc'] = "Níže uvedené kontaktní informace se nezobrazí na vydáném certifikátu; budou použity pouze pro komunikaci s vámi ohledně této objednávky a jakýchkoli požadavků na ověření. Informace o SSL certifikátu a připomenutí obnovy budou zaslány tomuto kontaktu.";
$_LANG['sslSameAsAdmin'] = "Stejné jako kontaktní osoba správce?";
$_LANG['sslTechTitle'] = "Technické kontaktní informace";
$_LANG['sslTechDesc'] = "Tato osoba obdrží certifikát a obvykle je to jedinec, který bude certifikát instalovat na webový server. Také obdrží upozornění na obnovu, když se blíží vypršení platnosti certifikátu, aby nedošlo k bezpečnostním mezerám.";
$_LANG['sslTitle'] = "Titul";
$_LANG['sslFirstName'] = "Jméno";
$_LANG['sslLastName'] = "Příjmení";
$_LANG['sslEmail'] = 'Emailová adresa';
$_LANG['sslPhone'] = "Telefonní číslo";
$_LANG['sslOrgTitle'] = "Informace o organizaci";
$_LANG['sslOrgDesc'] = "Váš produkt má ověření na úrovni podniku, známé také jako ověření organizace (OV) nebo rozšířené ověření (EV). Informace zadané níže se objeví ve vašem certifikátu. Ujistěte se, že tyto informace přesně odpovídají informacím ve vaší CSR a ve vaší dokumentaci o právní registraci podniku. Nejčastějším důvodem zpoždění schválení/vydání je nesrovnalost informací s údaji uvedenými v článcích o založení vaší společnosti, jak jsou uvedeny v oficiálních databázích třetích stran ve vašem regionu. Ačkoli zápis v D&B/D-U-N-S/Dun & Bradstreet není vyžadován, může pomoci urychlit vaši žádost. Pokud je vaše organizace ve Velké Británii, uveďte prosím vaše registrační číslo v poli D-U-N-S níže.";
$_LANG['sslOrgName'] = "Právní název";
$_LANG['sslOrgDuns'] = "Číslo D-U-N-S®";
$_LANG['sslOrgDivision'] = "Oddělení/Divize";
$_LANG['sslOrgAddress1'] = "Adresa 1";
$_LANG['sslOrgAddress2'] = "Adresa 2";
$_LANG['sslOrgCity'] = "Město";
$_LANG['sslOrgState'] = "Stát/Region";
$_LANG['sslOrgCountry'] = "Země";
$_LANG['sslOrgZipCode'] = "Poštovní nebo PSČ";
$_LANG['sslDCVAuthTitle'] = "Možnosti ověření domény";
$_LANG['sslDCVAuthMethod'] = "Vyberte metodu ověření domény";
$_LANG['sslConfigCompleteMessage'] = "Gratulujeme! Úspěšně jste dokončili konfiguraci";
$_LANG['csrChoiceExisting'] = "Stávající CSR";
$_LANG['csrChoiceAutoInstall'] = "AutoInstalace";
$_LANG['csrOrg'] = "Organizace";
$_LANG['csrOrgDivision'] = "Jednotka organizace";
$_LANG['csrKeySize'] = "Velikost klíče";
$_LANG['csrGeneratebtn'] = "Generovat CSR";
$_LANG['domainValidationTitle'] = "Vyberte úroveň ověření domény";
$_LANG['domainValidationDesc'] = "Domény lze ověřit přesně na úrovni, na které jsou předloženy (sub.domain.com), nebo můžeme automaticky ověřit na první úrovni: domain.com. Doporučujeme základní doménu, pokud si nejste jisti.";
$_LANG['baseDomainDetails'] = "Odeslat základní doménu k ověření (doporučeno)";
$_LANG['fqdnDetails'] = "Odeslat název domény přesně tak, jak byl zadán";


//Certificate Change Approval Method
$_LANG['sslchangeapprovaltitle'] = "Změna metody ověření";
$_LANG['sslupdateapprovalbtn'] = "Aktualizovat";
$_LANG['sslupdateapprovalsuccessmsg'] = "Metoda ověření byla úspěšně aktualizována";


//cWatch Products
$_LANG['cWatchGenerateLicense'] = "Generate License Key";
$_LANG['sslGetLicenseTitle'] = "Get License";
$_LANG['sslUpdateSiteTitle'] = "Update Site";
$_LANG['sslDomainInfoTitle'] = "Domain Information";
$_LANG['sslDomainName'] = "Domain";
$_LANG['cWatchConfigCompleteDetails'] = "You’ve successfully claimed your cWatch Web license key(<strong>%licensekey%</strong>)! Our system is now working on setting up your website on the cWatch Web platform. Shortly, you should receive an email containing a unique link to set your password to login to the cWatch Web portal and complete setup. Download our guide below for help with your next steps setting up cWatch Web!<br /><br /><a href='https://certificategeneration.com/pdf/cWatch_Onboarding_Guide.pdf' target='_blank' class='btn btn-default'>Download cWatch Guide</a>";
$_LANG['sslLicenseKey'] = "License Key";
$_LANG['cwatchProvisioningDate'] = 'License Provisioning Date';
$_LANG['cwatchExpiryDate'] = 'License Expiry Date';
$_LANG['adminCountry'] = 'Country';
$_LANG['cWatchUpdateSitebtn'] = 'Update Site';
$_LANG['cWatchUpgradeLicensebtn'] = 'Upgrade License';
$_LANG['cWatchUpgradeLicenseTitle'] = "Upgrade License";
$_LANG['cWatchAdminLicenseDetails'] = 'License Details';
$_LANG['cwatchUpdateSiteSuccessmsg'] = "Site Updated Successfully";
$_LANG['cWatchLogin'] = "Login to cWatch";

//CodeGuard
$_LANG['codeguardAdminSubscriptionDetails'] = "Subscription Details";
$_LANG['codeguard_user_details'] = "User Details";
//codeGuard Products
$_LANG['codeGuardCreateUser'] = "Create Account";
$_LANG['codeGuardConfigCompleteDetails'] = "<strong>Your CodeGuard Subscription is Now Active</strong><br/>We’ve instantly activated your CodeGuard license – you can now protect your website with the most dependable website backup, monitoring, and restoration solution on the web! You can set up CodeGuard in just 5 minutes.";
$_LANG['codeGuardCancelRequest'] = "Cancel";
$_LANG['codeGuardUserInfoTitle'] = "Update User Information";
$_LANG['codeGuardUserName'] = "User Name";
$_LANG['codeGuardUserEmail'] = "User Email";
$_LANG['codeGuardSsoLink'] = "Access CodeGuard Dashboard";
$_LANG['codeGuardOrderStatus'] = "Order Status";
$_LANG['codeGuardSubscriptionStatus'] = "Subscription Status";
$_LANG['codeGuardSubscriptionId'] = "Subscription ID";
$_LANG['codeGuardStartDate'] = "Start Date";
$_LANG['codeGuardEndDate'] = "End Date";
$_LANG['codeGuardWebsiteList'] = "Website List";
$_LANG['codeGuardWebsite'] = "Website";
$_LANG['codeGuardLastBackup'] = "Last Backup";
$_LANG['codeGuardWebsiteSize'] = "Size";
$_LANG['codeGuardWebsiteStatus'] = "Status";
$_LANG['codeGuardEditUser'] = "Edit User";
$_LANG['codeGuardEditUserCompleteDetails'] = "Your CodeGuard User has been updated successfully.";
$_LANG['codeGuardAdditionalUserLabel'] = "Additional Users";
$_LANG['codeGuardAdditionalUserDesc'] = "You can grant access to additional users here. These users will be able to login via <strong>%cgloginurl%</strong>.";
$_LANG['codeGuardAddAdditionalUser'] = "Click here to add a user.";
$_LANG['codeGuardAdditionalUserInfoTitle'] = "Additional User Information";
$_LANG['codeGuardAdditionalUserPassword'] = "Password";
$_LANG['codeGuardAdditionalUserCompleteDetails'] = "Additional User has been added successfully.";

//AutoInstall Related
$_LANG['generate_ssl'] = "Automatické generování";
$_LANG['autogenerate_tooltip'] = "<strong>AutoInstall</strong> možnost je dostupná pouze pro servery WHM/cPanel a automatizuje procesy generování CSR, ověření (když je to možné) a instalaci certifikátu. Možnost <strong>Existing CSR</strong> lze použít ve všech ostatních případech a vyžaduje manuální generování CSR a instalaci certifikátu.";
$_LANG['sslIntstruction'] = "<strong>AutoInstall</strong> možnost je dostupná pouze pro servery WHM/cPanel a automatizuje procesy generování CSR, ověření (když je to možné) a instalaci certifikátu. Možnost <strong>Existing CSR</strong> lze použít ve všech ostatních případech a vyžaduje manuální generování CSR a instalaci certifikátu.";
$_LANG['sslProfileLabel'] = "Vyberte preferovaný hostingový profil pro použití s automatickým procesem";
$_LANG['sslDomainLabel'] = "Vyberte svou doménu/webové místo";
$_LANG['sslProfileDesc'] = "Na základě výběru hostingového profilu bude dostupný seznam domén";
$_LANG['sslDomainDesc'] = "Tato doména bude použita pro generování CSR a instalaci certifikátu";
$_LANG['sslWWWLabel'] = "Chcete při generování CSR použít 'www'?";
$_LANG['sslWWWDesc'] = "Pokud je generováno jako <u>www.nazev-site.com</u>, pokryje to URL adresy s www i bez www.";
$_LANG['retrievesubdomain'] = "Načíst subdoménu";
$_LANG['sslCSRTitle'] = "Detaily CSR";
$_LANG['sslCSRDesc'] = "Tyto informace budou použity při generování CSR.";
$_LANG['sslCSRCommonName'] = "Běžný název";
$_LANG['sslCSRCompany'] = "Společnost";
$_LANG['sslCSRDivision'] = "Oddělení";
$_LANG['sslCSRCity'] = "Město";
$_LANG['sslCSRState'] = "Stát";
$_LANG['sslCSRCountry'] = "Země";
$_LANG['sslCSREmail'] = "Email";
$_LANG['addDomainToolTip'] = "Klikněte pro přidání domény";
$_LANG['addWildCardDomainToolTip'] = "Klikněte pro přidání wildcard domény";
$_LANG['removeDomainToolTip'] = "Klikněte pro odstranění domény";
$_LANG['removeWildCardDomainToolTip'] = "Klikněte pro odstranění wildcard domény";
$_LANG['ReissueSSLDomainLabel'] = "Doména/webové místo";
$_LANG['download_pvtkey'] = "Stáhnout&nbsp;soukromý klíč";
$_LANG['install_certificate'] = "Instalovat&nbsp;certifikát";
$_LANG['auto_reissue_cert'] = "AutoSSL&nbsp;znovuvydání";
$_LANG['autossl_reissue_tooltip'] = "<strong>AutoSSL Re-issue</strong> option is only available for WHM/cPanel servers, and automates the processes of CSR generation, verification when possible, and installation of the certificate. <strong>Re-issue Certificate</strong> option can be used for all other cases, and requires manual generation of the CSR and installation of the certificate.";
$_LANG['autossl_pvtkey_tooltip'] = "Your Certificate Private Key is stored upon your cPanel Server and when clicked will be retrieved from the cPanel Server.";
$_LANG['autossl_process_msg'] = "Please allow two to three minutes as we complete the generation, validation, and installation of your SSL Certificate.";
$_LANG['nonHttpDownloadKeyError'] = "Sorry, you are currently not able to download your certificate’s key because you are not accessing the website using SSL. Please connect using HTTPS:// and try again.";

//Digicert Products
$_LANG['newOrgDetails'] = "Vytvořit novou organizaci";
$_LANG['preAuthOrgDetails'] = "Použít existující údaje organizace";
$_LANG['sslOrgContact'] = "Hlavní kontakt organizace";
$_LANG['sslOrgStatus'] = 'Stav';
$_LANG['sslOrgId'] = 'ID organizace';
$_LANG['sslOrgVendorId'] = 'ID organizace u dodavatele';
$_LANG['invalid_access_error'] = 'Omlouváme se! Neplatný přístup!';
$_LANG['digicert_combined_cert_files'] = 'Kombinované certifikační soubory';
$_LANG['digicert_server_platform'] = 'Serverová platforma';
$_LANG['digicert_file_type'] = 'Typ souboru';
$_LANG['download_cert_with_ca'] = 'Stáhnout certifikát s CA balíčkem';
$_LANG['sslOrgInfo'] = 'Informace o organizaci';
$_LANG['assign_license'] = 'Přiřadit licenci';
$_LANG['assign_license_title'] = 'Přihlásit se k SiteLock';
$_LANG['assign_license_sub_title'] = 'Přihlášení k SiteLock nyní';
$_LANG['upgrade_subscription_text'] = 'UPGRADE';

?>
