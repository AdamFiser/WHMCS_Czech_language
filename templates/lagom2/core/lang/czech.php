<?php

return [
    'social' => [
        'social_network_acc'            => 'Přihlášení pomocí účtu na sociální síti',
        'use_your_account'              => 'nebo použijte svůj účet',
        'not_member'                    => 'Ještě nejste členem?',
        'fill_form_below'               => 'nebo vyplňte formulář níže',
        'social_network_singnup'        => 'Použít účet na sociální síti (volitelné)',
        "facebook"                      => 'Facebook',
        "twitter"                       => 'Twitter',
        "linkedin"                      => 'LinkedIn'
    ],


    'login' => [
        'already_registered'            => 'Již jste zaregistrováni u nás?',
        'sign_in'                       => 'Přihlásit se',
        'reset_password'                => 'Obnovit heslo',
        'forgot'                        => 'Zapomenuto?',
        'at_least_pass'                 => 'alespoň 5 znaků',
        'security_question'             => 'Bezpečnostní otázka',
    ],
    
    'support' => [
        'available_departments'         => 'Dostupné oddělení',
        'select_file'                   => 'Vybrat soubor',
        'no_file_selected'              => 'Žádný soubor nevybrán',
		'sensitive_data'                => 'Citlivá data',
		'sensitive_data_ticket'         => 'Citlivá data pro tiket',
		'sensitive_data_ticket_desc'    => 'Použijte toto pole pro vložení citlivých údajů, jako jsou přístupy k SFTP/FTP, přihlašovací údaje do administrace WHMCS, atd. <strong>Data vložená do tohoto pole budou bezpečně uložena a zašifrována.</strong> Toto pole budete moci upravit nebo odstranit na stránce tiketu.'															
																   
																																																																								   
    ],
    
    'billing' => [
        'view_quote'                    => 'Zobrazit nabídku',
        'subscribe'                     => 'Předplatit',
        'invoice' => [
            'bank_transfer_details'     => 'Detaily bankovního převodu',
        ],
    ],
    
    'nodata' => [
        'no_recent_tickets'             => 'Nenalezeny žádné nedávné tikety',
        'no_active_services'            => 'Nenalezeny žádné aktivní služby',
        'no_unpaid_invoices'            => 'Nenalezeny žádné nezaplacené faktury',
        'no_recent_news'                => 'Nenalezeny žádné nedávné novinky',
        'upgrade_not_available'         => 'Upgrade/Downgrade není dostupný',
    ],


    'order' =>  [
        'period' => [
            'short' => [
                'monthly'               => 'měsíčně',
                'quarterly'             => 'čtvrtletně',
                'semiannually'          => 'půlročně',
                'annually'              => 'ročně',
                'annually_multi'        => 'roky',
                'biennially'            => 'dvojročně',
                'triennially'           => 'tříročně',
                'period'                => 'období',
            ],
        ],
        'price_save'                    => 'Uložit',
        'taxes'                         => 'Daně',
        'search_domain'                 => 'Vyhledat doménu',
        'additional_services'           => 'Dodatečné služby',
        'start_shopping'                => 'Začít nakupovat',
        'order_placed'                  => 'Objednávka umístěna',
        'featured'                      => 'Doporučené',
        'change_domains_ipstag'         => 'Ujistěte se, že změníte IPSTAG vaší domény po zadání objednávky a ne předtím, tag bude ve vašem potvrzovacím emailu k objednávce.',
        'domain_from_cart'              => 'Doména z košíku',
        'use_own_domain'                => 'Použít vlastní doménu',
        'servername_example'            => 'servername.priklad.com',
        'product_selected'              => 'Vybraný produkt',
    ],
    
    'market_connect' => [
        'order'                         => 'Objednat / Více informací',
    ],
    
    'generals' => [
        'my_dashboard'                  => 'Můj přehled',
        'all_entries'                   => 'Všechny záznamy',
        'contact_details'               => 'Kontaktní údaje',
        'receive_emails'                => 'Přijímat e-maily',
        'menu'                          => 'Menu',
        'enable'                        => 'Povolit',
        'add_new'                       => 'Přidat nový',
        "what_new"                      => "Co je nového",
        "currency"                      => "Měna",
    ],
    
    'affiliates' => [
        'visitors' => [
            'title'                     => 'Sledujeme návštěvníky',
            'desc'                      => "Sledujeme návštěvníky, které nám doporučíte pomocí cookies, takže uživatelé, které doporučíte, nemusí okamžitě něco zakoupit, aby jste obdrželi vaši provizi.",
            'info'                      => 'Cookies platí až 90 dní od první návštěvy.',
        ],
        'pay_commissions' => [
            'title'                     => 'Platíme provize',
            'desc'                      => 'Platíme provize za každou registraci, která přijde přes váš osobní registrační odkaz.',
            'info'                      => 'Pokud byste se chtěli dozvědět více, prosím',
        ], 
    ],
    
    'domains' => [
        'domains_selected'              => 'vybrané domény',
        'domains_hosting' => [
            'title'                     => 'Přiřaďte hostingový balíček, abyste mohli začít stavět vaši webovou stránku několika jednoduchými kroky!',
            'desc'                      => 'Doménové jméno nemá přiřazený <a href="/cart.php">hosting</a>, klikněte na tlačítko níže pro rychlé přiřazení hostingového balíčku.',
            'btn_text'                  => 'Přidat hostingový balíček',
        ],
    ],


    'homepage' => [
        'find_domain'  => [
            'title'                     => 'Najděte své nové doménové jméno',
            'example_domain'            => 'např. priklad.cz',
            'search'                    => 'Hledat',
        ],
        'products'  => [
            'title'                     => 'Produkty pro všechny podniky',
            'product_btn'               => 'Začněte nyní'
        ],
        'latest_news'  => [
            'title'                     => 'Nejnovější zprávy',
            'subtitle'                  => 'Podívejte se na naše nejnovější zprávy a nabídky!',
            'read_more'                 => 'Číst dále',
        ],
        'testimonials'  => [
            'title'                     => 'Co říkají naši zákazníci',
            'subtitle'                  => 'Zjistěte, proč nám důvěřuje více než 35 000 klientů po celém světě',
        ],
        'features' => [
            'title'                     => 'Naše záruky',
            'subtitle'                  => 'Zjistěte, proč nám důvěřuje více než 35 000 klientů po celém světě',
            'feature-1' => [
                'title'                 => 'Podpora od expertů 24/7',
                'desc'                  => 'Proaktivně monitoruje a upozorňuje na jakýkoliv malware, který je na vaší webové stránce zjištěn.'
            ],
            'feature-2' => [
                'title'                 => 'Rychlá a spolehlivá',
                'desc'                  => 'Pokud sken odhalí nějaký problém, SiteLock bezpečně odstraní veškerý známý malware automaticky.'
            ],
            'feature-3' => [
                'title'                 => 'Velmi snadné použití',
                'desc'                  => 'Automaticky kontroluje vaše aplikace, aby zajistil, že jsou aktualizované a zabezpečené proti známým hrozbám.'
            ],
            'feature-4' => [
                'title'                 => 'Zaručená 100% dostupnost',
                'desc'                  => 'Získejte ochranu proti deseti největším bezpečnostním hrozbám webových aplikací, jak je uznává OWASP, Open Web Application Security Project.'
            ],
            'feature-5' => [
                'title'                 => 'Zabezpečené servery',
                'desc'                  => 'Web Application Firewall TrueShield™ chrání vaši webovou stránku před hackery a útoky.'
            ],
            'feature-6' => [
                'title'                 => 'Záruka vrácení peněz',
                'desc'                  => 'Denní skeny pomáhají odhalit malware dříve, než jej najdou vyhledávače a zařadí vaši stránku na černou listinu.'
            ],
            'feature-7' => [
                'title'                 => 'Vysoký výkon',
                'desc'                  => 'Okamžité a plně automatické nastavení poskytuje okamžitou ochranu bez potřeby instalace.'
            ],
            'feature-8' => [
                'title'                 => 'Síť pro doručování obsahu',
                'desc'                  => 'Zrychlete svou webovou stránku distribucí obsahu po celém světě a servírováním vašim návštěvníkům z nejbližšího místa pro rychlejší načítání stránek, kdekoli jsou.'
            ],
        ],
        'get_started' => [
            'title'                     => 'Začněme!',
            'subtitle'                  => 'Mauris blandit arcu nec tellus lobortis, vitae aliquam lectus varius. Nunc sed magna ac nisi ultrices aliquam a ac turpis. Proin sagittis vel ipsum vitae luctus.',
            'btn_contact_text'          => 'Kontaktujte nás'
        ]
    ],

    'sitebuilder' => [
        'banner' => [
            'title'                     => 'Build a professional website. Fast!',
            'desc'                      => 'Simple tools for your big ideas.',
            'desc_1'                    => 'Start your free website trial today.',
            'btn_pricing_text'          => 'View Plans & Pricing'
        ],
        'packages' => [
            "features_subtitle"         => 'Every Package Includes These Amazing Features:',
        ],
        'templates' => [
            "show_more"                 => 'Show More Templates',
        ]
    ],
    'cpanelseo' => [
        'banner' => [
            'desc'                      => 'Let us ensure that people are finding out what makes YOUR company great from their searches online using cPanel SEO.',
        ],
        'seo_features'              => 'cPanel SEO Features',
        'seo_who_can'              => 'Who Can Use cPanel SEO?',
        'easier_way'                => 'Luckily, there is an easier way:',
        'easier_way_2'              => 'let us ensure that people are finding out what makes YOUR company great from their searches online using cPanel SEO.',
        'btn_pricing_text'          => 'View Plans & Pricing'
    ],
    'wptoolkit' => [
        'smart_updates' => [
            "title"                     => 'Smart Updates For WordPress',
        ],
    ],
    'footer_extended' => [
          "products"                      => 'Produkty',
          "privacy_policy"                => 'Zásady ochrany osobních údajů',
          "footer_desc"                   => 'Spojte se s námi!',
          "back_to_top"                   => 'Zpět nahoru',
      ],
      'extensions' => [
          "operating_hours"               => 'Provozní doba:',
      ],
      'hide_inactive_services' => [
          'services' => [
              'hide'                      => 'Skrýt <b>%s</b> neaktivní služby',
              'hidden'                    => '<b>%s</b> neaktivní služby byly skryty',
              'hidden_plural'             => '<b>%s</b> neaktivní služby byly skryty'
          ]
      ],
      'restock_notifier' => [
          'be_notified'                   => 'Budete upozorněni!',
          'on_restock'                    => 'Upozornit při doplnění zásob!'
      ],
      'manage_ssl' => [
          'issued'                        => 'Vystaveno'
      ],
      'threesixty' => [
          'url'                           => 'URL',
          'location'                      => 'Lokalita'
      ],
      'services' => [
          'trial_ends'                    => 'Konec zkušebního období:',
      ],
      'ox' => [
          'per_user'                      => 'na uživatele',
      ],
      'upgrade' => [
          'max_value'                     => 'Maximální hodnota:'
      ]
];
