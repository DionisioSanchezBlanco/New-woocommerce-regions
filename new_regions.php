<?php

add_filter('woocommerce_states', 'add_custom_states_to_country');
add_filter('woocommerce_countries_allowed_country_states', 'add_custom_states_to_country');
function add_custom_states_to_country( $states ) {
	
    $states['FR'] = array(
        'AR' => __('Auvergne-Rhône-Alpes', 'woocommerce'),
        'BF' => __('Bourgogne-Franche-Comté', 'woocommerce'),
        'BR' => __('Bretagne', 'woocommerce'),
        'CV' => __('Centre-Val-de-Loire', 'woocommerce'),
        'CO' => __('Corse', 'woocommerce'),
        'IF' => __('Île-de-France', 'woocommerce'),
        'GE' => __('Grand Est', 'woocommerce'),
        'HF' => __('Hauts-de-France', 'woocommerce'),
        'NO' => __('Normandie', 'woocommerce'),
        'NA' => __('Nouvelle-Aquitaine', 'woocommerce'),
        'OC' => __('Occitanie', 'woocommerce'),
        'PL' => __('Pays de la Loire', 'woocommerce'),
        'PA' => __('Provence-Alpes-Côte d’Azur', 'woocommerce'),
    );
	
	$states['SE'] = array(
	'BD' => __( 'Norrbotten', 'woocommerce' ),
	'AC' => __( 'V&auml;sterbotten', 'woocommerce' ),
	'Z' => __( 'J&auml;mtland', 'woocommerce' ),
	'Y' => __( 'V&auml;sternorrland', 'woocommerce' ),
	'X' => __( 'G&auml;vleborg', 'woocommerce' ),
	'W' => __( 'Dalarna', 'woocommerce' ),
	'S' => __( 'V&auml;rmland', 'woocommerce' ),
	'T' => __( '&Ouml;rebro', 'woocommerce' ),
	'U' => __( 'V&auml;stmanland', 'woocommerce' ),
	'C' => __( 'Upsala', 'woocommerce' ),
	'AB' => __( 'Stockholm', 'woocommerce' ),
	'D' => __( 'S&ouml;dermanland', 'woocommerce' ),
	'O' => __( 'V&auml;stra G&ouml;taland', 'woocommerce' ),
	'E' => __( '&Ouml;sterg&ouml;tland', 'woocommerce' ),
	'F' => __( 'J&ouml;nk&ouml;ping', 'woocommerce' ),
	'H' => __( 'Kalmar', 'woocommerce' ),
	'N' => __( 'Halland', 'woocommerce' ),
	'G' => __( 'Kronoberg', 'woocommerce' ),
	'K' => __( 'Blekinge', 'woocommerce' ),
	'M' => __( 'Escania', 'woocommerce' ),
	'I' => __( 'Gotland', 'woocommerce' ),
);
	
	$states['DK'] = array(
	'H' => __( 'Hovedstaden', 'woocommerce' ),
	'M' => __( 'Midtjylland', 'woocommerce' ),
	'S' => __( 'Syddanmark', 'woocommerce' ),
	'R' => __( 'Region Sj&aelig;lland', 'woocommerce' ),
	'N' => __( 'Nordjylland', 'woocommerce' ),
);	
	
	$states['FI'] = array(
	'L' => __( 'Lappi / Lappland', 'woocommerce' ),
	'PP' => __( 'Pohjois-Pohjanmaa / Norra Österbotten', 'woocommerce' ),
	'K' => __( 'Kainuu / Kajanaland', 'woocommerce' ),
	'PK' => __( 'Pohjois-Karjala / Norra Karelen', 'woocommerce' ),
	'PS' => __( 'Pohjois-Savo / Norra Savolax', 'woocommerce' ),
	'ES' => __( 'Etelä-Savo / Södra Savolax', 'woocommerce' ),
	'EP' => __( 'Etelä-Pohjanmaa / Södra Österbotten', 'woocommerce' ),
	'P' => __( 'Pohjanmaa / Österbotten', 'woocommerce' ),
	'PI' => __( 'Pirkanmaa / Birkaland', 'woocommerce' ),
	'S' => __( 'Satakunta / Satakunda', 'woocommerce' ),
	'KP' => __( 'Keski-Pohjanmaa / Mellersta Österbotten', 'woocommerce' ),
	'KE' => __( 'Keski-Suomi / Mellersta Finland', 'woocommerce' ),
	'V' => __( 'Varsinais-Suomi / Egentliga Finland', 'woocommerce' ),
	'EK' => __( 'Etelä-Karjala / Södra Karelen', 'woocommerce' ),
	'PH' => __( 'Päijät-Häme / Päijänne Tavastland', 'woocommerce' ),
	'KH' => __( 'Kanta-Häme / Egentliga Tavastland', 'woocommerce' ),
	'U' => __( 'Uusimaa / Nyland', 'woocommerce' ),
	'KY' => __( 'Kymenlaakso / Kymmenedalen', 'woocommerce' ),
	'A' => __( 'Ahvenanmaa / Åland', 'woocommerce' ),

);
	
	$states['NO'] = array(
	'A' => __( 'Agder', 'woocommerce' ),
	'I' => __( 'Innlandet', 'woocommerce' ),
	'M' => __( 'Møre og Romsdal', 'woocommerce' ),
	'N' => __( 'Nordland', 'woocommerce' ),
	'O' => __( 'Oslo', 'woocommerce' ),
	'R' => __( 'Rogaland', 'woocommerce' ),
	'TF' => __( 'Troms og Finnmark', 'woocommerce' ),
	'T' => __( 'Trøndelag', 'woocommerce' ),
	'VT' => __( 'Vestfold og Telemark', 'woocommerce' ),
	'VE' => __( 'Vestland', 'woocommerce' ),
	'VI' => __( 'Viken', 'woocommerce' ),
);	
	
    return $states;
}
