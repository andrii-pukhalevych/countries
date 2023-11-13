<?php

namespace Nakanakaii\Countries;

use Exception;

class Countries
{

    /**
     * Get a country by name.
     *
     * @return array The country data.
     */
    public static function all(): array
    {
        return [
            [
                "name" => "Afghanistan",
                "flag" => "🇦🇫",
                "code" => "AF",
                "dialCode" => "93",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Åland Islands",
                "flag" => "🇦🇽",
                "code" => "AX",
                "dialCode" => "358",
                "regionCode" => "",
                "minLength" => 15,
                "maxLength" => 15
            ],
            [
                "name" => "Albania",
                "flag" => "🇦🇱",
                "code" => "AL",
                "dialCode" => "355",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Algeria",
                "flag" => "🇩🇿",
                "code" => "DZ",
                "dialCode" => "213",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "American Samoa",
                "flag" => "🇦🇸",
                "code" => "AS",
                "dialCode" => "1684",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Andorra",
                "flag" => "🇦🇩",
                "code" => "AD",
                "dialCode" => "376",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Angola",
                "flag" => "🇦🇴",
                "code" => "AO",
                "dialCode" => "244",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Anguilla",
                "flag" => "🇦🇮",
                "code" => "AI",
                "dialCode" => "1264",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Antarctica",
                "flag" => "🇦🇶",
                "code" => "AQ",
                "dialCode" => "672",
                "regionCode" => "",
                "minLength" => 6,
                "maxLength" => 6
            ],
            [
                "name" => "Antigua and Barbuda",
                "flag" => "🇦🇬",
                "code" => "AG",
                "dialCode" => "1268",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Argentina",
                "flag" => "🇦🇷",
                "code" => "AR",
                "dialCode" => "54",
                "regionCode" => "",
                "minLength" => 12,
                "maxLength" => 12
            ],
            [
                "name" => "Armenia",
                "flag" => "🇦🇲",
                "code" => "AM",
                "dialCode" => "374",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Aruba",
                "flag" => "🇦🇼",
                "code" => "AW",
                "dialCode" => "297",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Australia",
                "flag" => "🇦🇺",
                "code" => "AU",
                "dialCode" => "61",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Austria",
                "flag" => "🇦🇹",
                "code" => "AT",
                "dialCode" => "43",
                "regionCode" => "",
                "minLength" => 13,
                "maxLength" => 13
            ],
            [
                "name" => "Azerbaijan",
                "flag" => "🇦🇿",
                "code" => "AZ",
                "dialCode" => "994",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Bahamas",
                "flag" => "🇧🇸",
                "code" => "BS",
                "dialCode" => "1242",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Bahrain",
                "flag" => "🇧🇭",
                "code" => "BH",
                "dialCode" => "973",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Bangladesh",
                "flag" => "🇧🇩",
                "code" => "BD",
                "dialCode" => "880",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Barbados",
                "flag" => "🇧🇧",
                "code" => "BB",
                "dialCode" => "1246",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Belarus",
                "flag" => "🇧🇾",
                "code" => "BY",
                "dialCode" => "375",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Belgium",
                "flag" => "🇧🇪",
                "code" => "BE",
                "dialCode" => "32",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Belize",
                "flag" => "🇧🇿",
                "code" => "BZ",
                "dialCode" => "501",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Benin",
                "flag" => "🇧🇯",
                "code" => "BJ",
                "dialCode" => "229",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Bermuda",
                "flag" => "🇧🇲",
                "code" => "BM",
                "dialCode" => "1441",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Bhutan",
                "flag" => "🇧🇹",
                "code" => "BT",
                "dialCode" => "975",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Bolivia, Plurinational State of bolivia",
                "flag" => "🇧🇴",
                "code" => "BO",
                "dialCode" => "591",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Bosnia and Herzegovina",
                "flag" => "🇧🇦",
                "code" => "BA",
                "dialCode" => "387",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Botswana",
                "flag" => "🇧🇼",
                "code" => "BW",
                "dialCode" => "267",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Bouvet Island",
                "flag" => "🇧🇻",
                "code" => "BV",
                "dialCode" => "47",
                "regionCode" => "",
                "minLength" => 15,
                "maxLength" => 15
            ],
            [
                "name" => "Brazil",
                "flag" => "🇧🇷",
                "code" => "BR",
                "dialCode" => "55",
                "regionCode" => "",
                "minLength" => 11,
                "maxLength" => 11
            ],
            [
                "name" => "British Indian Ocean Territory",
                "flag" => "🇮🇴",
                "code" => "IO",
                "dialCode" => "246",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Brunei Darussalam",
                "flag" => "🇧🇳",
                "code" => "BN",
                "dialCode" => "673",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Bulgaria",
                "flag" => "🇧🇬",
                "code" => "BG",
                "dialCode" => "359",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Burkina Faso",
                "flag" => "🇧🇫",
                "code" => "BF",
                "dialCode" => "226",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Burundi",
                "flag" => "🇧🇮",
                "code" => "BI",
                "dialCode" => "257",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Cambodia",
                "flag" => "🇰🇭",
                "code" => "KH",
                "dialCode" => "855",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Cameroon",
                "flag" => "🇨🇲",
                "code" => "CM",
                "dialCode" => "237",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Campione d'Italia",
                "flag" => "🇮🇹",
                "code" => "IT",
                "dialCode" => "41",
                "regionCode" => "91",
                "minLength" => 13,
                "maxLength" => 13
            ],
            [
                "name" => "Canada",
                "flag" => "🇨🇦",
                "code" => "CA",
                "dialCode" => "1",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Cape Verde",
                "flag" => "🇨🇻",
                "code" => "CV",
                "dialCode" => "238",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Cayman Islands",
                "flag" => "🇰🇾",
                "code" => "KY",
                "dialCode" => "345",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Central African Republic",
                "flag" => "🇨🇫",
                "code" => "CF",
                "dialCode" => "236",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Chad",
                "flag" => "🇹🇩",
                "code" => "TD",
                "dialCode" => "235",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Chile",
                "flag" => "🇨🇱",
                "code" => "CL",
                "dialCode" => "56",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "China",
                "flag" => "🇨🇳",
                "code" => "CN",
                "dialCode" => "86",
                "regionCode" => "",
                "minLength" => 11,
                "maxLength" => 11
            ],
            [
                "name" => "Christmas Island",
                "flag" => "🇨🇽",
                "code" => "CX",
                "dialCode" => "61",
                "regionCode" => "",
                "minLength" => 15,
                "maxLength" => 15
            ],
            [
                "name" => "Cocos (Keeling) Islands",
                "flag" => "🇨🇨",
                "code" => "CC",
                "dialCode" => "61",
                "regionCode" => "",
                "minLength" => 15,
                "maxLength" => 15
            ],
            [
                "name" => "Colombia",
                "flag" => "🇨🇴",
                "code" => "CO",
                "dialCode" => "57",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Comoros",
                "flag" => "🇰🇲",
                "code" => "KM",
                "dialCode" => "269",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Congo",
                "flag" => "🇨🇬",
                "code" => "CG",
                "dialCode" => "242",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Congo, The Democratic Republic of the Congo",
                "flag" => "🇨🇩",
                "code" => "CD",
                "dialCode" => "243",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Cook Islands",
                "flag" => "🇨🇰",
                "code" => "CK",
                "dialCode" => "682",
                "regionCode" => "",
                "minLength" => 5,
                "maxLength" => 5
            ],
            [
                "name" => "Costa Rica",
                "flag" => "🇨🇷",
                "code" => "CR",
                "dialCode" => "506",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Côte d'Ivoire",
                "flag" => "🇨🇮",
                "code" => "CI",
                "dialCode" => "225",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Croatia",
                "flag" => "🇭🇷",
                "code" => "HR",
                "dialCode" => "385",
                "regionCode" => "",
                "minLength" => 12,
                "maxLength" => 12
            ],
            [
                "name" => "Cuba",
                "flag" => "🇨🇺",
                "code" => "CU",
                "dialCode" => "53",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Cyprus",
                "flag" => "🇨🇾",
                "code" => "CY",
                "dialCode" => "357",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Czech Republic",
                "flag" => "🇨🇿",
                "code" => "CZ",
                "dialCode" => "420",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Denmark",
                "flag" => "🇩🇰",
                "code" => "DK",
                "dialCode" => "45",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Djibouti",
                "flag" => "🇩🇯",
                "code" => "DJ",
                "dialCode" => "253",
                "regionCode" => "",
                "minLength" => 6,
                "maxLength" => 6
            ],
            [
                "name" => "Dominica",
                "flag" => "🇩🇲",
                "code" => "DM",
                "dialCode" => "1767",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Dominican Republic",
                "flag" => "🇩🇴",
                "code" => "DO",
                "dialCode" => "1849",
                "regionCode" => "",
                "minLength" => 12,
                "maxLength" => 12
            ],
            [
                "name" => "Ecuador",
                "flag" => "🇪🇨",
                "code" => "EC",
                "dialCode" => "593",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 9
            ],
            [
                "name" => "Egypt",
                "flag" => "🇪🇬",
                "code" => "EG",
                "dialCode" => "20",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "El Salvador",
                "flag" => "🇸🇻",
                "code" => "SV",
                "dialCode" => "503",
                "regionCode" => "",
                "minLength" => 11,
                "maxLength" => 11
            ],
            [
                "name" => "Equatorial Guinea",
                "flag" => "🇬🇶",
                "code" => "GQ",
                "dialCode" => "240",
                "regionCode" => "",
                "minLength" => 6,
                "maxLength" => 6
            ],
            [
                "name" => "Eritrea",
                "flag" => "🇪🇷",
                "code" => "ER",
                "dialCode" => "291",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Estonia",
                "flag" => "🇪🇪",
                "code" => "EE",
                "dialCode" => "372",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Ethiopia",
                "flag" => "🇪🇹",
                "code" => "ET",
                "dialCode" => "251",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Falkland Islands (Malvinas)",
                "flag" => "🇫🇰",
                "code" => "FK",
                "dialCode" => "500",
                "regionCode" => "",
                "minLength" => 5,
                "maxLength" => 5
            ],
            [
                "name" => "Faroe Islands",
                "flag" => "🇫🇴",
                "code" => "FO",
                "dialCode" => "298",
                "regionCode" => "",
                "minLength" => 6,
                "maxLength" => 6
            ],
            [
                "name" => "Fiji",
                "flag" => "🇫🇯",
                "code" => "FJ",
                "dialCode" => "679",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Finland",
                "flag" => "🇫🇮",
                "code" => "FI",
                "dialCode" => "358",
                "regionCode" => "",
                "minLength" => 12,
                "maxLength" => 12
            ],
            [
                "name" => "France",
                "flag" => "🇫🇷",
                "code" => "FR",
                "dialCode" => "33",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "French Guiana",
                "flag" => "🇬🇫",
                "code" => "GF",
                "dialCode" => "594",
                "regionCode" => "",
                "minLength" => 15,
                "maxLength" => 15
            ],
            [
                "name" => "French Polynesia",
                "flag" => "🇵🇫",
                "code" => "PF",
                "dialCode" => "689",
                "regionCode" => "",
                "minLength" => 6,
                "maxLength" => 6
            ],
            [
                "name" => "French Southern Territories",
                "flag" => "🇹🇫",
                "code" => "TF",
                "dialCode" => "262",
                "regionCode" => "",
                "minLength" => 15,
                "maxLength" => 15
            ],
            [
                "name" => "Gabon",
                "flag" => "🇬🇦",
                "code" => "GA",
                "dialCode" => "241",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Gambia",
                "flag" => "🇬🇲",
                "code" => "GM",
                "dialCode" => "220",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Georgia",
                "flag" => "🇬🇪",
                "code" => "GE",
                "dialCode" => "995",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 9
            ],
            [
                "name" => "Germany",
                "flag" => "🇩🇪",
                "code" => "DE",
                "dialCode" => "49",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 13
            ],
            [
                "name" => "Ghana",
                "flag" => "🇬🇭",
                "code" => "GH",
                "dialCode" => "233",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Gibraltar",
                "flag" => "🇬🇮",
                "code" => "GI",
                "dialCode" => "350",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Greece",
                "flag" => "🇬🇷",
                "code" => "GR",
                "dialCode" => "30",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Greenland",
                "flag" => "🇬🇱",
                "code" => "GL",
                "dialCode" => "299",
                "regionCode" => "",
                "minLength" => 6,
                "maxLength" => 6
            ],
            [
                "name" => "Grenada",
                "flag" => "🇬🇩",
                "code" => "GD",
                "dialCode" => "1473",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Guadeloupe",
                "flag" => "🇬🇵",
                "code" => "GP",
                "dialCode" => "590",
                "regionCode" => "",
                "minLength" => 15,
                "maxLength" => 15
            ],
            [
                "name" => "Guam",
                "flag" => "🇬🇺",
                "code" => "GU",
                "dialCode" => "1671",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Guatemala",
                "flag" => "🇬🇹",
                "code" => "GT",
                "dialCode" => "502",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Guernsey",
                "flag" => "🇬🇬",
                "code" => "GG",
                "dialCode" => "44",
                "regionCode" => "1481",
                "minLength" => 6,
                "maxLength" => 6
            ],
            [
                "name" => "Guinea",
                "flag" => "🇬🇳",
                "code" => "GN",
                "dialCode" => "224",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 9
            ],
            [
                "name" => "Guinea-Bissau",
                "flag" => "🇬🇼",
                "code" => "GW",
                "dialCode" => "245",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Guyana",
                "flag" => "🇬🇾",
                "code" => "GY",
                "dialCode" => "592",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Haiti",
                "flag" => "🇭🇹",
                "code" => "HT",
                "dialCode" => "509",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Heard Island and Mcdonald Islands",
                "flag" => "🇭🇲",
                "code" => "HM",
                "dialCode" => "672",
                "regionCode" => "",
                "minLength" => 15,
                "maxLength" => 15
            ],
            [
                "name" => "Holy See (Vatican City State)",
                "flag" => "🇻🇦",
                "code" => "VA",
                "dialCode" => "379",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Honduras",
                "flag" => "🇭🇳",
                "code" => "HN",
                "dialCode" => "504",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Hong Kong",
                "flag" => "🇭🇰",
                "code" => "HK",
                "dialCode" => "852",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Hungary",
                "flag" => "🇭🇺",
                "code" => "HU",
                "dialCode" => "36",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Iceland",
                "flag" => "🇮🇸",
                "code" => "IS",
                "dialCode" => "354",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 9
            ],
            [
                "name" => "India",
                "flag" => "🇮🇳",
                "code" => "IN",
                "dialCode" => "91",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Indonesia",
                "flag" => "🇮🇩",
                "code" => "ID",
                "dialCode" => "62",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 13
            ],
            [
                "name" => "Iran, Islamic Republic of Persian Gulf",
                "flag" => "🇮🇷",
                "code" => "IR",
                "dialCode" => "98",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Iraq",
                "flag" => "🇮🇶",
                "code" => "IQ",
                "dialCode" => "964",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Ireland",
                "flag" => "🇮🇪",
                "code" => "IE",
                "dialCode" => "353",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 9
            ],
            [
                "name" => "Isle of Man",
                "flag" => "🇮🇲",
                "code" => "IM",
                "dialCode" => "44",
                "regionCode" => "1624",
                "minLength" => 6,
                "maxLength" => 6
            ],
            [
                "name" => "Israel",
                "flag" => "🇮🇱",
                "code" => "IL",
                "dialCode" => "972",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Italy",
                "flag" => "🇮🇹",
                "code" => "IT",
                "dialCode" => "39",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 13
            ],
            [
                "name" => "Jamaica",
                "flag" => "🇯🇲",
                "code" => "JM",
                "dialCode" => "1876",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Japan",
                "flag" => "🇯🇵",
                "code" => "JP",
                "dialCode" => "81",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Jersey",
                "flag" => "🇯🇪",
                "code" => "JE",
                "dialCode" => "44",
                "regionCode" => "1534",
                "minLength" => 6,
                "maxLength" => 6
            ],
            [
                "name" => "Jordan",
                "flag" => "🇯🇴",
                "code" => "JO",
                "dialCode" => "962",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Kazakhstan",
                "flag" => "🇰🇿",
                "code" => "KZ",
                "dialCode" => "7",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Kenya",
                "flag" => "🇰🇪",
                "code" => "KE",
                "dialCode" => "254",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Kiribati",
                "flag" => "🇰🇮",
                "code" => "KI",
                "dialCode" => "686",
                "regionCode" => "",
                "minLength" => 5,
                "maxLength" => 5
            ],
            [
                "name" => "Korea, Democratic People's Republic of Korea",
                "flag" => "🇰🇵",
                "code" => "KP",
                "dialCode" => "850",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Korea, Republic of South Korea",
                "flag" => "🇰🇷",
                "code" => "KR",
                "dialCode" => "82",
                "regionCode" => "",
                "minLength" => 11,
                "maxLength" => 11
            ],
            [
                "name" => "Kosovo",
                "flag" => "🇽🇰",
                "code" => "XK",
                "dialCode" => "383",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Kuwait",
                "flag" => "🇰🇼",
                "code" => "KW",
                "dialCode" => "965",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Kyrgyzstan",
                "flag" => "🇰🇬",
                "code" => "KG",
                "dialCode" => "996",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Laos",
                "flag" => "🇱🇦",
                "code" => "LA",
                "dialCode" => "856",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Latvia",
                "flag" => "🇱🇻",
                "code" => "LV",
                "dialCode" => "371",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Lebanon",
                "flag" => "🇱🇧",
                "code" => "LB",
                "dialCode" => "961",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Lesotho",
                "flag" => "🇱🇸",
                "code" => "LS",
                "dialCode" => "266",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Liberia",
                "flag" => "🇱🇷",
                "code" => "LR",
                "dialCode" => "231",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Libyan Arab Jamahiriya",
                "flag" => "🇱🇾",
                "code" => "LY",
                "dialCode" => "218",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Liechtenstein",
                "flag" => "🇱🇮",
                "code" => "LI",
                "dialCode" => "423",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Lithuania",
                "flag" => "🇱🇹",
                "code" => "LT",
                "dialCode" => "370",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Luxembourg",
                "flag" => "🇱🇺",
                "code" => "LU",
                "dialCode" => "352",
                "regionCode" => "",
                "minLength" => 11,
                "maxLength" => 11
            ],
            [
                "name" => "Macao",
                "flag" => "🇲🇴",
                "code" => "MO",
                "dialCode" => "853",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Macedonia",
                "flag" => "🇲🇰",
                "code" => "MK",
                "dialCode" => "389",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Madagascar",
                "flag" => "🇲🇬",
                "code" => "MG",
                "dialCode" => "261",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Malawi",
                "flag" => "🇲🇼",
                "code" => "MW",
                "dialCode" => "265",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 9
            ],
            [
                "name" => "Malaysia",
                "flag" => "🇲🇾",
                "code" => "MY",
                "dialCode" => "60",
                "regionCode" => "",
                "minLength" => 11,
                "maxLength" => 11
            ],
            [
                "name" => "Maldives",
                "flag" => "🇲🇻",
                "code" => "MV",
                "dialCode" => "960",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Mali",
                "flag" => "🇲🇱",
                "code" => "ML",
                "dialCode" => "223",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Malta",
                "flag" => "🇲🇹",
                "code" => "MT",
                "dialCode" => "356",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Marshall Islands",
                "flag" => "🇲🇭",
                "code" => "MH",
                "dialCode" => "692",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Martinique",
                "flag" => "🇲🇶",
                "code" => "MQ",
                "dialCode" => "596",
                "regionCode" => "",
                "minLength" => 15,
                "maxLength" => 15
            ],
            [
                "name" => "Mauritania",
                "flag" => "🇲🇷",
                "code" => "MR",
                "dialCode" => "222",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Mauritius",
                "flag" => "🇲🇺",
                "code" => "MU",
                "dialCode" => "230",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 8
            ],
            [
                "name" => "Mayotte",
                "flag" => "🇾🇹",
                "code" => "YT",
                "dialCode" => "262",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Mexico",
                "flag" => "🇲🇽",
                "code" => "MX",
                "dialCode" => "52",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Micronesia, Federated States of Micronesia",
                "flag" => "🇫🇲",
                "code" => "FM",
                "dialCode" => "691",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Moldova",
                "flag" => "🇲🇩",
                "code" => "MD",
                "dialCode" => "373",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Monaco",
                "flag" => "🇲🇨",
                "code" => "MC",
                "dialCode" => "377",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Mongolia",
                "flag" => "🇲🇳",
                "code" => "MN",
                "dialCode" => "976",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Montenegro",
                "flag" => "🇲🇪",
                "code" => "ME",
                "dialCode" => "382",
                "regionCode" => "",
                "minLength" => 12,
                "maxLength" => 12
            ],
            [
                "name" => "Montserrat",
                "flag" => "🇲🇸",
                "code" => "MS",
                "dialCode" => "1664",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Morocco",
                "flag" => "🇲🇦",
                "code" => "MA",
                "dialCode" => "212",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Mozambique",
                "flag" => "🇲🇿",
                "code" => "MZ",
                "dialCode" => "258",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Myanmar",
                "flag" => "🇲🇲",
                "code" => "MM",
                "dialCode" => "95",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Namibia",
                "flag" => "🇳🇦",
                "code" => "NA",
                "dialCode" => "264",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Nauru",
                "flag" => "🇳🇷",
                "code" => "NR",
                "dialCode" => "674",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Nepal",
                "flag" => "🇳🇵",
                "code" => "NP",
                "dialCode" => "977",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Netherlands",
                "flag" => "🇳🇱",
                "code" => "NL",
                "dialCode" => "31",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Netherlands Antilles",
                "flag" => "",
                "code" => "AN",
                "dialCode" => "599",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "New Caledonia",
                "flag" => "🇳🇨",
                "code" => "NC",
                "dialCode" => "687",
                "regionCode" => "",
                "minLength" => 6,
                "maxLength" => 6
            ],
            [
                "name" => "New Zealand",
                "flag" => "🇳🇿",
                "code" => "NZ",
                "dialCode" => "64",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Nicaragua",
                "flag" => "🇳🇮",
                "code" => "NI",
                "dialCode" => "505",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Niger",
                "flag" => "🇳🇪",
                "code" => "NE",
                "dialCode" => "227",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Nigeria",
                "flag" => "🇳🇬",
                "code" => "NG",
                "dialCode" => "234",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 11
            ],
            [
                "name" => "Niue",
                "flag" => "🇳🇺",
                "code" => "NU",
                "dialCode" => "683",
                "regionCode" => "",
                "minLength" => 4,
                "maxLength" => 4
            ],
            [
                "name" => "Norfolk Island",
                "flag" => "🇳🇫",
                "code" => "NF",
                "dialCode" => "672",
                "regionCode" => "",
                "minLength" => 15,
                "maxLength" => 15
            ],
            [
                "name" => "Northern Mariana Islands",
                "flag" => "🇲🇵",
                "code" => "MP",
                "dialCode" => "1670",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Norway",
                "flag" => "🇳🇴",
                "code" => "NO",
                "dialCode" => "47",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Oman",
                "flag" => "🇴🇲",
                "code" => "OM",
                "dialCode" => "968",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Pakistan",
                "flag" => "🇵🇰",
                "code" => "PK",
                "dialCode" => "92",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Palau",
                "flag" => "🇵🇼",
                "code" => "PW",
                "dialCode" => "680",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Palestinian Territory, Occupied",
                "flag" => "🇵🇸",
                "code" => "PS",
                "dialCode" => "970",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Panama",
                "flag" => "🇵🇦",
                "code" => "PA",
                "dialCode" => "507",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Papua New Guinea",
                "flag" => "🇵🇬",
                "code" => "PG",
                "dialCode" => "675",
                "regionCode" => "",
                "minLength" => 11,
                "maxLength" => 11
            ],
            [
                "name" => "Paraguay",
                "flag" => "🇵🇾",
                "code" => "PY",
                "dialCode" => "595",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Peru",
                "flag" => "🇵🇪",
                "code" => "PE",
                "dialCode" => "51",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Philippines",
                "flag" => "🇵🇭",
                "code" => "PH",
                "dialCode" => "63",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Pitcairn",
                "flag" => "🇵🇳",
                "code" => "PN",
                "dialCode" => "64",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Poland",
                "flag" => "🇵🇱",
                "code" => "PL",
                "dialCode" => "48",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Portugal",
                "flag" => "🇵🇹",
                "code" => "PT",
                "dialCode" => "351",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Puerto Rico",
                "flag" => "🇵🇷",
                "code" => "PR",
                "dialCode" => "1939",
                "regionCode" => "",
                "minLength" => 15,
                "maxLength" => 15
            ],
            [
                "name" => "Qatar",
                "flag" => "🇶🇦",
                "code" => "QA",
                "dialCode" => "974",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Romania",
                "flag" => "🇷🇴",
                "code" => "RO",
                "dialCode" => "40",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Russia",
                "flag" => "🇷🇺",
                "code" => "RU",
                "dialCode" => "7",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Rwanda",
                "flag" => "🇷🇼",
                "code" => "RW",
                "dialCode" => "250",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Reunion",
                "flag" => "🇷🇪",
                "code" => "RE",
                "dialCode" => "262",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Saint Barthelemy",
                "flag" => "🇧🇱",
                "code" => "BL",
                "dialCode" => "590",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Saint Helena, Ascension and Tristan Da Cunha",
                "flag" => "🇸🇭",
                "code" => "SH",
                "dialCode" => "290",
                "regionCode" => "",
                "minLength" => 4,
                "maxLength" => 4
            ],
            [
                "name" => "Saint Kitts and Nevis",
                "flag" => "🇰🇳",
                "code" => "KN",
                "dialCode" => "1869",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Saint Lucia",
                "flag" => "🇱🇨",
                "code" => "LC",
                "dialCode" => "1758",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Saint Martin",
                "flag" => "🇲🇫",
                "code" => "MF",
                "dialCode" => "590",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Saint Pierre and Miquelon",
                "flag" => "🇵🇲",
                "code" => "PM",
                "dialCode" => "508",
                "regionCode" => "",
                "minLength" => 6,
                "maxLength" => 6
            ],
            [
                "name" => "Saint Vincent and the Grenadines",
                "flag" => "🇻🇨",
                "code" => "VC",
                "dialCode" => "1784",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Samoa",
                "flag" => "🇼🇸",
                "code" => "WS",
                "dialCode" => "685",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "San Marino",
                "flag" => "🇸🇲",
                "code" => "SM",
                "dialCode" => "378",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Sao Tome and Principe",
                "flag" => "🇸🇹",
                "code" => "ST",
                "dialCode" => "239",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Saudi Arabia",
                "flag" => "🇸🇦",
                "code" => "SA",
                "dialCode" => "966",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Senegal",
                "flag" => "🇸🇳",
                "code" => "SN",
                "dialCode" => "221",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Serbia",
                "flag" => "🇷🇸",
                "code" => "RS",
                "dialCode" => "381",
                "regionCode" => "",
                "minLength" => 12,
                "maxLength" => 12
            ],
            [
                "name" => "Seychelles",
                "flag" => "🇸🇨",
                "code" => "SC",
                "dialCode" => "248",
                "regionCode" => "",
                "minLength" => 6,
                "maxLength" => 6
            ],
            [
                "name" => "Sierra Leone",
                "flag" => "🇸🇱",
                "code" => "SL",
                "dialCode" => "232",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Singapore",
                "flag" => "🇸🇬",
                "code" => "SG",
                "dialCode" => "65",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Slovakia",
                "flag" => "🇸🇰",
                "code" => "SK",
                "dialCode" => "421",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Slovenia",
                "flag" => "🇸🇮",
                "code" => "SI",
                "dialCode" => "386",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Solomon Islands",
                "flag" => "🇸🇧",
                "code" => "SB",
                "dialCode" => "677",
                "regionCode" => "",
                "minLength" => 5,
                "maxLength" => 5
            ],
            [
                "name" => "Somalia",
                "flag" => "🇸🇴",
                "code" => "SO",
                "dialCode" => "252",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "South Africa",
                "flag" => "🇿🇦",
                "code" => "ZA",
                "dialCode" => "27",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "South Sudan",
                "flag" => "🇸🇸",
                "code" => "SS",
                "dialCode" => "211",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "South Georgia and the South Sandwich Islands",
                "flag" => "🇬🇸",
                "code" => "GS",
                "dialCode" => "500",
                "regionCode" => "",
                "minLength" => 15,
                "maxLength" => 15
            ],
            [
                "name" => "Spain",
                "flag" => "🇪🇸",
                "code" => "ES",
                "dialCode" => "34",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Sri Lanka",
                "flag" => "🇱🇰",
                "code" => "LK",
                "dialCode" => "94",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Sudan",
                "flag" => "🇸🇩",
                "code" => "SD",
                "dialCode" => "249",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Suriname",
                "flag" => "🇸🇷",
                "code" => "SR",
                "dialCode" => "597",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Svalbard and Jan Mayen",
                "flag" => "🇸🇯",
                "code" => "SJ",
                "dialCode" => "47",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Eswatini",
                "flag" => "🇸🇿",
                "code" => "SZ",
                "dialCode" => "268",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Sweden",
                "flag" => "🇸🇪",
                "code" => "SE",
                "dialCode" => "46",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 13
            ],
            [
                "name" => "Switzerland",
                "flag" => "🇨🇭",
                "code" => "CH",
                "dialCode" => "41",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Syrian Arab Republic",
                "flag" => "🇸🇾",
                "code" => "SY",
                "dialCode" => "963",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Taiwan",
                "flag" => "🇹🇼",
                "code" => "TW",
                "dialCode" => "886",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Tajikistan",
                "flag" => "🇹🇯",
                "code" => "TJ",
                "dialCode" => "992",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Tanzania, United Republic of Tanzania",
                "flag" => "🇹🇿",
                "code" => "TZ",
                "dialCode" => "255",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Thailand",
                "flag" => "🇹🇭",
                "code" => "TH",
                "dialCode" => "66",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Timor-Leste",
                "flag" => "🇹🇱",
                "code" => "TL",
                "dialCode" => "670",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Togo",
                "flag" => "🇹🇬",
                "code" => "TG",
                "dialCode" => "228",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Tokelau",
                "flag" => "🇹🇰",
                "code" => "TK",
                "dialCode" => "690",
                "regionCode" => "",
                "minLength" => 4,
                "maxLength" => 4
            ],
            [
                "name" => "Tonga",
                "flag" => "🇹🇴",
                "code" => "TO",
                "dialCode" => "676",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Trinidad and Tobago",
                "flag" => "🇹🇹",
                "code" => "TT",
                "dialCode" => "1868",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Tunisia",
                "flag" => "🇹🇳",
                "code" => "TN",
                "dialCode" => "216",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Turkey",
                "flag" => "🇹🇷",
                "code" => "TR",
                "dialCode" => "90",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Turkmenistan",
                "flag" => "🇹🇲",
                "code" => "TM",
                "dialCode" => "993",
                "regionCode" => "",
                "minLength" => 8,
                "maxLength" => 8
            ],
            [
                "name" => "Turks and Caicos Islands",
                "flag" => "🇹🇨",
                "code" => "TC",
                "dialCode" => "1649",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Tuvalu",
                "flag" => "🇹🇻",
                "code" => "TV",
                "dialCode" => "688",
                "regionCode" => "",
                "minLength" => 6,
                "maxLength" => 6
            ],
            [
                "name" => "Uganda",
                "flag" => "🇺🇬",
                "code" => "UG",
                "dialCode" => "256",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Ukraine",
                "flag" => "🇺🇦",
                "code" => "UA",
                "dialCode" => "380",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "United Arab Emirates",
                "flag" => "🇦🇪",
                "code" => "AE",
                "dialCode" => "971",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "United Kingdom",
                "flag" => "🇬🇧",
                "code" => "GB",
                "dialCode" => "44",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "United States",
                "flag" => "🇺🇸",
                "code" => "US",
                "dialCode" => "1",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Uruguay",
                "flag" => "🇺🇾",
                "code" => "UY",
                "dialCode" => "598",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Uzbekistan",
                "flag" => "🇺🇿",
                "code" => "UZ",
                "dialCode" => "998",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Vanuatu",
                "flag" => "🇻🇺",
                "code" => "VU",
                "dialCode" => "678",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Venezuela, Bolivarian Republic of Venezuela",
                "flag" => "🇻🇪",
                "code" => "VE",
                "dialCode" => "58",
                "regionCode" => "",
                "minLength" => 10,
                "maxLength" => 10
            ],
            [
                "name" => "Vietnam",
                "flag" => "🇻🇳",
                "code" => "VN",
                "dialCode" => "84",
                "regionCode" => "",
                "minLength" => 11,
                "maxLength" => 11
            ],
            [
                "name" => "Virgin Islands, British",
                "flag" => "🇻🇬",
                "code" => "VG",
                "dialCode" => "1284",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Virgin Islands, U.S.",
                "flag" => "🇻🇮",
                "code" => "VI",
                "dialCode" => "1340",
                "regionCode" => "",
                "minLength" => 7,
                "maxLength" => 7
            ],
            [
                "name" => "Wallis and Futuna",
                "flag" => "🇼🇫",
                "code" => "WF",
                "dialCode" => "681",
                "regionCode" => "",
                "minLength" => 6,
                "maxLength" => 6
            ],
            [
                "name" => "Yemen",
                "flag" => "🇾🇪",
                "code" => "YE",
                "dialCode" => "967",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Zambia",
                "flag" => "🇿🇲",
                "code" => "ZM",
                "dialCode" => "260",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ],
            [
                "name" => "Zimbabwe",
                "flag" => "🇿🇼",
                "code" => "ZW",
                "dialCode" => "263",
                "regionCode" => "",
                "minLength" => 9,
                "maxLength" => 9
            ]
        ];
    }

    /**
     * Get a country by name.
     *
     * @param string $name The name of the country.
     * @return array|null The country data if found, or null if not found.
     * @throws Exception If country not found.
     */
    public static function findByName(string $name): ?array
    {
        foreach (self::all() as $country) {
            if ($country['name'] === $name) {
                return $country;
            }
        }
        throw new Exception("Country not found: $name");
    }

    /**
     * Retrieves the country by the given dial code.
     *
     * @param string $dialCode The dial code of the country.
     * @return array|null The country information if found, null otherwise.
     * @throws Exception If country dial code not found or invalid.
     */
    public static function findByDialCode(string $code): array
    {
        // check if the given dial code consists only of digits
        if (!preg_match('/^\d+$/', $code)) {
            throw new Exception("Dial Code must contain only digits: $code");
        }

        foreach (self::all() as $country) {
            if ($country['dialCode'] === $code) {
                return $country;
            }
        }
        throw new Exception("Country dial code not found: $code");
    }

    /**
     * Retrieves the country by the given code.
     *
     * @param string $code The code of the country
     * @return array|null The country information if found, null otherwise.
     * @throws Exception If country code not found or invalid.
     */
    public static function findByCode(string $code): array
    {
        // check if the given code doesn't match ISO 3166-1 alpha-2 format
        if (!preg_match('/^[A-Z]{2}$/', $code)) {
            throw new Exception("Invalid country code: $code");
        }

        foreach (self::all() as $country) {
            if ($country['code'] === $code) {
                return $country;
            }
        }
        throw new Exception("Country dial code not found: $code");
    }

    /**
     * Retrieves the phone validator by code.
     *
     * @param string $code The code to search for.
     * @return string The validator rule for the given country code.
     * @throws Exception If country code not found.
     */
    public static function getPhoneValidatorByCode(string $code): string
    {
        $country = self::findByCode($code);
        $minLength = $country['minLength'];
        $maxLength = $country['maxLength'];
        $dialCode = $country['dialCode'];

        return 'required|string|regex:/^' . $dialCode . '\d{' . $minLength . ',' . $maxLength . '}$/';
    }

    /**
     * Retrieves the phone validator by code.
     *
     * @param string $code The code to search for.
     * @return string The validator rule for the given country dial code.
     * @throws Exception If country dial code not found.
     */
    public static function getPhoneValidatorByDialCode(string $code): string
    {
        $country = self::findByDialCode($code);
        $minLength = $country['minLength'];
        $maxLength = $country['maxLength'];
        $dialCode = $country['dialCode'];

        return 'required|string|regex:/^' . $dialCode . '\d{' . $minLength . ',' . $maxLength . '}$/';
    }
}
