<?php

namespace Jmrashed\Geolocation\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Jmrashed\Geolocation\Models\Geo\GeoCurrency;

class GeoCurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $currencies = [
            [ "AWG", "Arubin florin", "florin", "ƒ", "cent", "ƒ", 0],
            [ "AUD", "Australian dollar", "dollar", "$", "cent", "$", 0],
            [ "BBD", "Barbadian dollar", "dollar", "$", "cent", "$", 0],
            [ "BZD", "Belize dollar", "dollar", "$", "cent", "$", 0],
            [ "BMD", "Bermudian dollar", "dollar", "$", "cent", "$", 0],
            [ "BND", "Brunei dollar", "dollar", "$", "cent", "$", 0],
            [ "BGN", "Bulgarian lev", "lev", "лв", "stotinka", "лв", 0],
            [ "BRL", "Brazilian real", "real", "R$", "centavo", "R$", 0],
            [ "CAD", "Canadian dollar", "dollar", "$", "cent", "$", 0],
            [ "CNY", "Chinese yuan", "yuan", "¥", "fen", "¥", 0],
            [ "COP", "Colombian peso", "peso", "$", "centavo", "$", 0],
            [ "CRC", "Costa Rican colón", "colón", "₡", "centavo", "₡", 0],
            [ "HRK", "Croatian kuna", "kuna", "kn", "lipa", "kn", 0],
            [ "CZK", "Czech koruna", "koruna", "Kč", "haler", "Kč", 0],
            [ "DKK", "Danish krone", "krone", "kr", "ore", "kr", 0],
            [ "DOP", "Dominican peso", "peso", "$", "centavo", "$", 0],
            [ "EGP", "Egyptian pound", "pound", "£", "piastre", "£", 0],
            [ "EEK", "Estonian kroon", "kroon", "kr", "sent", "kr", 0],
            [ "EUR", "Euro", "euro", "€", "cent", "€", 0],
            [ "FJD", "Fijian dollar", "dollar", "$", "cent", "$", 0],
            [ "GBP", "British pound", "pound", "£", "penny", "£", 0],
            [ "GIP", "Gibraltar pound", "pound", "£", "penny", "£", 0],
            [ "GTQ", "Guatemalan quetzal", "quetzal", "Q", "centavo", "Q", 0],
            [ "HKD", "Hong Kong dollar", "dollar", "$", "cent", "$", 0],
            [ "HNL", "Honduran lempira", "lempira", "L", "centavo", "L", 0],
            [ "HUF", "Hungarian forint", "forint", "Ft", "fillér", "Ft", 0],
            [ "ISK", "Icelandic króna", "króna", "kr", "aurar", "kr", 0],
            [ "IDR", "Indonesian rupiah", "rupiah", "Rp", "sen", "Rp", 0],
            [ "INR", "Indian rupee", "rupee", "₹", "paisa", "₹", 0],
            [ "ILS", "Israeli new shekel", "new shekel", "₪", "agora", "₪", 0],
            [ "JMD", "Jamaican dollar", "dollar", "$", "cent", "$", 0],
            [ "JPY", "Japanese yen", "yen", "¥", "sen", "¥", 0],
            [ "KES", "Kenyan shilling", "shilling", "S", "cent", "S", 0],
            [ "KWD", "Kuwaiti dinar", "dinar", "د.ك", "fils", "د.ك", 0],
            [ "LAK", "Lao kip", "kip", "₭", "att", "₭", 0],
            [ "LBP", "Lebanese pound", "pound", "ل.ل", "piastre", "ل.ل", 0],
            [ "LKR", "Sri Lankan rupee", "rupee", "Rs", "cent", "Rs", 0],
            [ "MOP", "Macanese pataca", "pataca", "MOP$", "cent", "MOP$", 0],
            [ "MYR", "Malaysian ringgit", "ringgit", "RM", "sen", "RM", 0],
            [ "MVR", "Maldivian rufiyaa", "rufiyaa", "Rf", "sen", "Rf", 0],
            [ "MRO", "Mauritanian ouguiya", "ouguiya", "UM", "centime", "UM", 0],
            [ "MUR", "Mauritian rupee", "rupee", "Rs", "cent", "Rs", 0],
            [ "MXN", "Mexican peso", "peso", "$", "centavo", "$", 0],
            [ "MNT", "Mongolian tugrik", "tugrik", "₮", "möngö", "₮", 0],
            [ "MZN", "Mozambican metical", "metical", "MT", "centavo", "MT", 0],
            [ "NAD", "Namibian dollar", "dollar", "$", "cent", "$", 0],
            [ "NPR", "Nepalese rupee", "rupee", "Rs", "paisa", "Rs", 0],
            [ "ANG", "Netherlands Antillean guilder", "guilder", "ƒ", "cent", "ƒ", 0],
            [ "NZD", "New Zealand dollar", "dollar", "$", "cent", "$", 0],
            [ "NIO", "Nicaraguan córdoba", "córdoba", "C$", "centavo", "C$", 0],
            [ "NGN", "Nigerian naira", "naira", "₦", "kobo", "₦", 0],
            [ "NOK", "Norwegian krone", "krone", "kr", "ore", "kr", 0],
            [ "OMR", "Omani rial", "rial", "ر.ع.", "baisa", "ر.ع.", 0],
            [ "PKR", "Pakistani rupee", "rupee", "Rs", "paisa", "Rs", 0],
            [ "PAB", "Panamanian balboa", "balboa", "B/.", "centésimo", "B/.", 0],
            [ "PYG", "Paraguayan guaraní", "guaraní", "Gs", "centésimo", "Gs", 0],
            [ "PEN", "Peruvian nuevo sol", "nuevo sol", "S/.", "céntimo", "S/.", 0],
            [ "PHP", "Philippine peso", "peso", "₱", "sentavo", "₱", 0],
            [ "PLN", "Polish złoty", "złoty", "zł", "grosz", "zł", 0],
            [ "QAR", "Qatari riyal", "riyal", "ق.ر ", "dirham", "ق.ر ", 0],
            [ "RON", "Romanian leu", "leu", "L", "bani", "L", 0],
            [ "RUB", "Russian ruble", "ruble", "руб", "kopek", "руб", 0],
            [ "SAR", "Saudi riyal", "riyal", "ر.س", "halala", "ر.س", 0],
            [ "RSD", "Serbian dinar", "dinar", "Дин.", "para", "Дин.", 0],
            [ "SCR", "Seychellois rupee", "rupee", "Rs", "cent", "Rs", 0],
            [ "SGD", "Singapore dollar", "dollar", "$", "cent", "$", 0],
            [ "SBD", "Solomon Islands dollar", "dollar", "$", "cent", "$", 0],
            [ "SOS", "Somali shilling", "shilling", "S", "cent", "S", 0],
            [ "ZAR", "South African rand", "rand", "R", "cent", "R", 0],
            [ "KRW", "South Korean won", "won", "₩", "jeon", "₩", 0],
            [ "LKR", "Sri Lankan rupee", "rupee", "Rs", "cent", "Rs", 0],
            [ "SEK", "Swedish krona", "krona", "kr", "öre", "kr", 0],
            [ "CHF", "Swiss franc", "franc", "CHF", "rappen", "CHF", 0],
            [ "SRD", "Surinamese dollar", "dollar", "$", "cent", "$", 0],
            [ "SYP", "Syrian pound", "pound", "£", "piastre", "£", 0],
            [ "TWD", "Taiwanese dollar", "dollar", "$", "cent", "$", 0],
            [ "THB", "Thai baht", "baht", "฿", "satang", "฿", 0],
            [ "TTD", "Trinidad and Tobago dollar", "dollar", "$", "cent", "$", 0],
            [ "TRY", "Turkish lira", "lira", "₺", "kurus", "₺", 0],
            [ "TMT", "Turkmenistan manat", "manat", "m", "qəpik", "m", 0],
            [ "AED", "UAE dirham", "dirham", "د.إ", "fils", "د.إ", 0],
            [ "UGX", "Ugandan shilling", "shilling", "USh", "cent", "USh", 0],
            [ "UAH", "Ukrainian hryvnia", "hryvnia", "₴", "kopiyka", "₴", 0],
            [ "USD", "United States dollar", "dollar", "$", "cent", "$", 0],
            [ "UYU", "Uruguayan peso", "peso", "$", "cent", "$", 0],
            [ "UZS", "Uzbekistani som", "som", "UZS", "tiyin", "UZS", 0],
            [ "VEF", "Venezuelan bolívar", "bolívar", "Bs", "centavo", "Bs", 0],
            [ "VND", "Vietnamese đồng", "dong", "₫", "hào", "₫", 0],
            [ "YER", "Yemeni rial", "rial", "﷼", "fils", "﷼", 0],
            [ "ZMW", "Zambian kwacha", "kwacha", "ZK", "cent", "ZK", 0],
            [ "ZWL", "Zimbabwean dollar", "dollar", "$", "cent", "$", 0],
            [ "XOF", "West African CFA franc", "CFA franc", "CFA", "centime", "CFA", 0],
            [ "XPF", "CFP franc", "CFP franc", "CFP", "centime", "CFP", 0],
            [ "TJS", "Tajikistani somoni", "somoni", "TJS", "diram", "TJS", 0],
            [ "BDT", "Bangladeshi taka", "taka", "৳", "paisa", "৳", 0],
            [ "MAD", "Moroccan dirham", "dirham", "د.م.", "centime", "د.م.", 0],
            [ "CVE", "Cape Verdean escudo", "escudo", "Esc", "centavo", "Esc", 0],
            [ "DJF", "Djiboutian franc", "franc", "Fdj", "centime", "Fdj", 0],
            [ "GNF", "Guinean franc", "franc", "FG", "centime", "FG", 0],
            [ "KMF", "Comorian franc", "franc", "CF", "centime", "CF", 0],
            [ "XAF", "Central African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XOF", "West African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XAF", "Central African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XOF", "West African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XAF", "Central African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XOF", "West African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XAF", "Central African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XOF", "West African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XAF", "Central African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XOF", "West African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XAF", "Central African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XOF", "West African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XAF", "Central African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XOF", "West African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XAF", "Central African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0],
            [ "XOF", "West African CFA franc", "CFA franc", "FCFA", "centime", "FCFA", 0]
        ];

        foreach ($currencies as $currency) {
            $geo = new GeoCurrency();
            $geo->code = $currency[0];
            $geo->name = $currency[1];
            $geo->major_name = $currency[2];
            $geo->major_symbol = $currency[3];
            $geo->minor_name = $currency[4];
            $geo->minor_symbol = $currency[5];
            $geo->minor_value = $currency[6];
            $geo->save();
        }
    }
}
