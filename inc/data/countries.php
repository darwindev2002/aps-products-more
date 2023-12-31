<?php if (!defined('APS_VER')) exit('restricted access');
/*
 * @package WordPress
 * @subpackage APS Products
 * @ World Countries List
*/
$countries = array(
	'AF' => __('Afghanistan', 'aps-text'),
	'AL' => __('Albania', 'aps-text'),
	'DZ' => __('Algeria', 'aps-text'),
	'AS' => __('American Samoa', 'aps-text'),
	'AD' => __('Andorra', 'aps-text'),
	'AO' => __('Angola', 'aps-text'),
	'AI' => __('Anguilla', 'aps-text'),
	'AQ' => __('Antarctica', 'aps-text'),
	'AG' => __('Antigua And Barbuda', 'aps-text'),
	'AR' => __('Argentina', 'aps-text'),
	'AM' => __('Armenia', 'aps-text'),
	'AW' => __('Aruba', 'aps-text'),
	'AU' => __('Australia', 'aps-text'),
	'AT' => __('Austria', 'aps-text'),
	'AZ' => __('Azerbaijan', 'aps-text'),
	'BS' => __('Bahamas The', 'aps-text'),
	'BH' => __('Bahrain', 'aps-text'),
	'BD' => __('Bangladesh', 'aps-text'),
	'BB' => __('Barbados', 'aps-text'),
	'BY' => __('Belarus', 'aps-text'),
	'BE' => __('Belgium', 'aps-text'),
	'BZ' => __('Belize', 'aps-text'),
	'BJ' => __('Benin', 'aps-text'),
	'BM' => __('Bermuda', 'aps-text'),
	'BT' => __('Bhutan', 'aps-text'),
	'BO' => __('Bolivia', 'aps-text'),
	'BA' => __('Bosnia and Herzegovina', 'aps-text'),
	'BW' => __('Botswana', 'aps-text'),
	'BV' => __('Bouvet Island', 'aps-text'),
	'BR' => __('Brazil', 'aps-text'),
	'IO' => __('British Indian Ocean Territory', 'aps-text'),
	'BN' => __('Brunei', 'aps-text'),
	'BG' => __('Bulgaria', 'aps-text'),
	'BF' => __('Burkina Faso', 'aps-text'),
	'BI' => __('Burundi', 'aps-text'),
	'KH' => __('Cambodia', 'aps-text'),
	'CM' => __('Cameroon', 'aps-text'),
	'CA' => __('Canada', 'aps-text'),
	'CV' => __('Cape Verde', 'aps-text'),
	'KY' => __('Cayman Islands', 'aps-text'),
	'CF' => __('Central African Republic', 'aps-text'),
	'TD' => __('Chad', 'aps-text'),
	'CL' => __('Chile', 'aps-text'),
	'CN' => __('China', 'aps-text'),
	'CX' => __('Christmas Island', 'aps-text'),
	'CC' => __('Cocos (Keeling) Islands', 'aps-text'),
	'CO' => __('Colombia', 'aps-text'),
	'KM' => __('Comoros', 'aps-text'),
	'CG' => __('Congo', 'aps-text'),
	'CD' => __('Congo The Democratic Republic Of The', 'aps-text'),
	'CK' => __('Cook Islands', 'aps-text'),
	'CR' => __('Costa Rica', 'aps-text'),
	'CI' => __('Cote D Ivoire (Ivory Coast)', 'aps-text'),
	'HR' => __('Croatia (Hrvatska)', 'aps-text'),
	'CU' => __('Cuba', 'aps-text'),
	'CY' => __('Cyprus', 'aps-text'),
	'CZ' => __('Czech Republic', 'aps-text'),
	'DK' => __('Denmark', 'aps-text'),
	'DJ' => __('Djibouti', 'aps-text'),
	'DM' => __('Dominica', 'aps-text'),
	'DO' => __('Dominican Republic', 'aps-text'),
	'TP' => __('East Timor', 'aps-text'),
	'EC' => __('Ecuador', 'aps-text'),
	'EG' => __('Egypt', 'aps-text'),
	'SV' => __('El Salvador', 'aps-text'),
	'GQ' => __('Equatorial Guinea', 'aps-text'),
	'ER' => __('Eritrea', 'aps-text'),
	'EE' => __('Estonia', 'aps-text'),
	'ET' => __('Ethiopia', 'aps-text'),
	'XA' => __('External Territories of Australia', 'aps-text'),
	'FK' => __('Falkland Islands', 'aps-text'),
	'FO' => __('Faroe Islands', 'aps-text'),
	'FJ' => __('Fiji Islands', 'aps-text'),
	'FI' => __('Finland', 'aps-text'),
	'FR' => __('France', 'aps-text'),
	'GF' => __('French Guiana', 'aps-text'),
	'PF' => __('French Polynesia', 'aps-text'),
	'TF' => __('French Southern Territories', 'aps-text'),
	'GA' => __('Gabon', 'aps-text'),
	'GM' => __('Gambia The', 'aps-text'),
	'GE' => __('Georgia', 'aps-text'),
	'DE' => __('Germany', 'aps-text'),
	'GH' => __('Ghana', 'aps-text'),
	'GI' => __('Gibraltar', 'aps-text'),
	'GR' => __('Greece', 'aps-text'),
	'GL' => __('Greenland', 'aps-text'),
	'GD' => __('Grenada', 'aps-text'),
	'GP' => __('Guadeloupe', 'aps-text'),
	'GU' => __('Guam', 'aps-text'),
	'GT' => __('Guatemala', 'aps-text'),
	'XU' => __('Guernsey and Alderney', 'aps-text'),
	'GN' => __('Guinea', 'aps-text'),
	'GW' => __('Guinea-Bissau', 'aps-text'),
	'GY' => __('Guyana', 'aps-text'),
	'HT' => __('Haiti', 'aps-text'),
	'HM' => __('Heard and McDonald Islands', 'aps-text'),
	'HN' => __('Honduras', 'aps-text'),
	'HK' => __('Hong Kong S.A.R.', 'aps-text'),
	'HU' => __('Hungary', 'aps-text'),
	'IS' => __('Iceland', 'aps-text'),
	'IN' => __('India', 'aps-text'),
	'ID' => __('Indonesia', 'aps-text'),
	'IR' => __('Iran', 'aps-text'),
	'IQ' => __('Iraq', 'aps-text'),
	'IE' => __('Ireland', 'aps-text'),
	'IL' => __('Israel', 'aps-text'),
	'IT' => __('Italy', 'aps-text'),
	'JM' => __('Jamaica', 'aps-text'),
	'JP' => __('Japan', 'aps-text'),
	'XJ' => __('Jersey', 'aps-text'),
	'JO' => __('Jordan', 'aps-text'),
	'KZ' => __('Kazakhstan', 'aps-text'),
	'KE' => __('Kenya', 'aps-text'),
	'KI' => __('Kiribati', 'aps-text'),
	'KP' => __('Korea North', 'aps-text'),
	'KR' => __('Korea South', 'aps-text'),
	'KW' => __('Kuwait', 'aps-text'),
	'KG' => __('Kyrgyzstan', 'aps-text'),
	'LA' => __('Laos', 'aps-text'),
	'LV' => __('Latvia', 'aps-text'),
	'LB' => __('Lebanon', 'aps-text'),
	'LS' => __('Lesotho', 'aps-text'),
	'LR' => __('Liberia', 'aps-text'),
	'LY' => __('Libya', 'aps-text'),
	'LI' => __('Liechtenstein', 'aps-text'),
	'LT' => __('Lithuania', 'aps-text'),
	'LU' => __('Luxembourg', 'aps-text'),
	'MO' => __('Macau S.A.R.', 'aps-text'),
	'MK' => __('Macedonia', 'aps-text'),
	'MG' => __('Madagascar', 'aps-text'),
	'MW' => __('Malawi', 'aps-text'),
	'MY' => __('Malaysia', 'aps-text'),
	'MV' => __('Maldives', 'aps-text'),
	'ML' => __('Mali', 'aps-text'),
	'MT' => __('Malta', 'aps-text'),
	'XM' => __('Man (Isle of)', 'aps-text'),
	'MH' => __('Marshall Islands', 'aps-text'),
	'MQ' => __('Martinique', 'aps-text'),
	'MR' => __('Mauritania', 'aps-text'),
	'MU' => __('Mauritius', 'aps-text'),
	'YT' => __('Mayotte', 'aps-text'),
	'MX' => __('Mexico', 'aps-text'),
	'FM' => __('Micronesia', 'aps-text'),
	'MD' => __('Moldova', 'aps-text'),
	'MC' => __('Monaco', 'aps-text'),
	'MN' => __('Mongolia', 'aps-text'),
	'MS' => __('Montserrat', 'aps-text'),
	'MA' => __('Morocco', 'aps-text'),
	'MZ' => __('Mozambique', 'aps-text'),
	'MM' => __('Myanmar', 'aps-text'),
	'NA' => __('Namibia', 'aps-text'),
	'NR' => __('Nauru', 'aps-text'),
	'NP' => __('Nepal', 'aps-text'),
	'AN' => __('Netherlands Antilles', 'aps-text'),
	'NL' => __('Netherlands The', 'aps-text'),
	'NC' => __('New Caledonia', 'aps-text'),
	'NZ' => __('New Zealand', 'aps-text'),
	'NI' => __('Nicaragua', 'aps-text'),
	'NE' => __('Niger', 'aps-text'),
	'NG' => __('Nigeria', 'aps-text'),
	'NU' => __('Niue', 'aps-text'),
	'NF' => __('Norfolk Island', 'aps-text'),
	'MP' => __('Northern Mariana Islands', 'aps-text'),
	'NO' => __('Norway', 'aps-text'),
	'OM' => __('Oman', 'aps-text'),
	'PK' => __('Pakistan', 'aps-text'),
	'PW' => __('Palau', 'aps-text'),
	'PS' => __('Palestinian Territory Occupied', 'aps-text'),
	'PA' => __('Panama', 'aps-text'),
	'PG' => __('Papua new Guinea', 'aps-text'),
	'PY' => __('Paraguay', 'aps-text'),
	'PE' => __('Peru', 'aps-text'),
	'PH' => __('Philippines', 'aps-text'),
	'PN' => __('Pitcairn Island', 'aps-text'),
	'PL' => __('Poland', 'aps-text'),
	'PT' => __('Portugal', 'aps-text'),
	'PR' => __('Puerto Rico', 'aps-text'),
	'QA' => __('Qatar', 'aps-text'),
	'RE' => __('Reunion', 'aps-text'),
	'RO' => __('Romania', 'aps-text'),
	'RU' => __('Russia', 'aps-text'),
	'RW' => __('Rwanda', 'aps-text'),
	'SH' => __('Saint Helena', 'aps-text'),
	'KN' => __('Saint Kitts And Nevis', 'aps-text'),
	'LC' => __('Saint Lucia', 'aps-text'),
	'PM' => __('Saint Pierre and Miquelon', 'aps-text'),
	'VC' => __('Saint Vincent And The Grenadines', 'aps-text'),
	'WS' => __('Samoa', 'aps-text'),
	'SM' => __('San Marino', 'aps-text'),
	'ST' => __('Sao Tome and Principe', 'aps-text'),
	'SA' => __('Saudi Arabia', 'aps-text'),
	'SN' => __('Senegal', 'aps-text'),
	'RS' => __('Serbia', 'aps-text'),
	'SC' => __('Seychelles', 'aps-text'),
	'SL' => __('Sierra Leone', 'aps-text'),
	'SG' => __('Singapore', 'aps-text'),
	'SK' => __('Slovakia', 'aps-text'),
	'SI' => __('Slovenia', 'aps-text'),
	'XG' => __('Smaller Territories of the UK', 'aps-text'),
	'SB' => __('Solomon Islands', 'aps-text'),
	'SO' => __('Somalia', 'aps-text'),
	'ZA' => __('South Africa', 'aps-text'),
	'GS' => __('South Georgia', 'aps-text'),
	'SS' => __('South Sudan', 'aps-text'),
	'ES' => __('Spain', 'aps-text'),
	'LK' => __('Sri Lanka', 'aps-text'),
	'SD' => __('Sudan', 'aps-text'),
	'SR' => __('Suriname', 'aps-text'),
	'SJ' => __('Svalbard And Jan Mayen Islands', 'aps-text'),
	'SZ' => __('Swaziland', 'aps-text'),
	'SE' => __('Sweden', 'aps-text'),
	'CH' => __('Switzerland', 'aps-text'),
	'SY' => __('Syria', 'aps-text'),
	'TW' => __('Taiwan', 'aps-text'),
	'TJ' => __('Tajikistan', 'aps-text'),
	'TZ' => __('Tanzania', 'aps-text'),
	'TH' => __('Thailand', 'aps-text'),
	'TG' => __('Togo', 'aps-text'),
	'TK' => __('Tokelau', 'aps-text'),
	'TO' => __('Tonga', 'aps-text'),
	'TT' => __('Trinidad And Tobago', 'aps-text'),
	'TN' => __('Tunisia', 'aps-text'),
	'TR' => __('Turkey', 'aps-text'),
	'TM' => __('Turkmenistan', 'aps-text'),
	'TC' => __('Turks And Caicos Islands', 'aps-text'),
	'TV' => __('Tuvalu', 'aps-text'),
	'UG' => __('Uganda', 'aps-text'),
	'UA' => __('Ukraine', 'aps-text'),
	'AE' => __('United Arab Emirates', 'aps-text'),
	'GB' => __('United Kingdom', 'aps-text'),
	'US' => __('United States', 'aps-text'),
	'UM' => __('United States Minor Outlying Islands', 'aps-text'),
	'UY' => __('Uruguay', 'aps-text'),
	'UZ' => __('Uzbekistan', 'aps-text'),
	'VU' => __('Vanuatu', 'aps-text'),
	'VA' => __('Vatican City State (Holy See)', 'aps-text'),
	'VE' => __('Venezuela', 'aps-text'),
	'VN' => __('Vietnam', 'aps-text'),
	'VG' => __('Virgin Islands (British)', 'aps-text'),
	'VI' => __('Virgin Islands (US)', 'aps-text'),
	'WF' => __('Wallis And Futuna Islands', 'aps-text'),
	'EH' => __('Western Sahara', 'aps-text'),
	'YE' => __('Yemen', 'aps-text'),
	'YU' => __('Yugoslavia', 'aps-text'),
	'ZM' => __('Zambia', 'aps-text'),
	'ZW' => __('Zimbabwe', 'aps-text')
);
