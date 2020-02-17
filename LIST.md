# Polyfill

## Summary

| Name | Type | Replace |
|------|------|---------|
| [`adhocore/php-polyfills`](#adhocore_php-polyfills) | **polyfill** | php |
| [`appserver-io/pthreads-polyfill`](#appserver-io_pthreads-polyfill) | **polyfill** | ext-pthreads |
| [`ayesh/is_countable-polyfill`](#ayesh_is_countable-polyfill) | **polyfill** | php |
| [`bbrala/php7-ereg-shim`](#bbrala_php7-ereg-shim) | **polyfill** | php |
| [`brunodebarros/polyfill-mysqli`](#brunodebarros_polyfill-mysqli) | **polyfill** | ext-mysqli |
| [`byjg/phpthread`](#byjg_phpthread) | alternative | ext-pthreads, ext-pcntl |
| [`derrabus/ereg-shim`](#derrabus_ereg-shim) | **polyfill** | php |
| [`dshafik/php7-mysql-shim`](#dshafik_php7-mysql-shim) | **polyfill** | ext-mysql |
| [`ducks-project/apache`](#ducks-project_apache) | alternative |  |
| [`fisharebest/ext-calendar`](#fisharebest_ext-calendar) | **polyfill** | ext-calendar |
| [`fisharebest/php-polyfill`](#fisharebest_php-polyfill) | **polyfill** | ext-apcu, php, ext-iconv, ext-intl, ext-mbstring, ext-calendar, pecl-http |
| [`ircmaxell/password-compat`](#ircmaxell_password-compat) | **polyfill** |  |
| [`jakeasmith/http_build_url`](#jakeasmith_http_build_url) | **polyfill** | pecl_http |
| [`jesseschalken/date-time-immutable-polyfill`](#jesseschalken_date-time-immutable-polyfill) | **polyfill** | php |
| [`kirra/polyfill-translit`](#kirra_polyfill-translit) | **polyfill** | pecl-translit |
| [`krakjoe/pthreads-polyfill`](#krakjoe_pthreads-polyfill) | **polyfill** | ext-pthreads |
| [`lavoiesl/apc-polyfill`](#lavoiesl_apc-polyfill) | alternative | ext-apc |
| [`lavoiesl/apc-polyfill`](#lavoiesl_apc-polyfill) | alternative | ext-apc |
| [`mmeyer2k/retro`](#mmeyer2k_retro) | **polyfill** | php |
| [`mollie/polyfill-libsodium`](#mollie_polyfill-libsodium) | **polyfill** | ext-sodium |
| [`mongofill/mongofill`](#mongofill_mongofill) | **polyfill** | ext-mongo |
| [`ovr/newrelic-polyfill`](#ovr_newrelic-polyfill) | _stub_ | ext-newrelic |
| [`paragonie/random_compat`](#paragonie_random_compat) | **polyfill** |  |
| [`paragonie/sodium_compat`](#paragonie_sodium_compat) | **polyfill** | ext-sodium, ext-libsodium |
| [`php-ds/php-ds`](#php-ds_php-ds) | **polyfill** | ext-ds |
| [`phpseclib/mcrypt_compat`](#phpseclib_mcrypt_compat) | **polyfill** | ext-mcrypt |
| [`positibe/polyfill-apc-php70`](#positibe_polyfill-apc-php70) | **polyfill** | ext-apc |
| [`ralouphie/getallheaders`](#ralouphie_getallheaders) | **polyfill** |  |
| [`sarciszewski/php-future`](#sarciszewski_php-future) | **polyfill** | php |
| [`src-run/augustus-polyfill-library`](#src-run_augustus-polyfill-library) | **polyfill** | ext-mbstring, ext-intl, ext-iconv, ext-apcu, ext-ctype, php |
| [`symfony/intl`](#symfony_intl) | **polyfill** | ext-intl |
| [`symfony/polyfill`](#symfony_polyfill) | **polyfill** | ext-mbstring, ext-intl, ext-iconv, php, ext-apcu, ext-ctype |
| [`symfony/polyfill-apcu`](#symfony_polyfill-apcu) | **polyfill** | ext-apcu |
| [`symfony/polyfill-ctype`](#symfony_polyfill-ctype) | **polyfill** | ext-ctype |
| [`symfony/polyfill-iconv`](#symfony_polyfill-iconv) | **polyfill** | ext-iconv |
| [`symfony/polyfill-intl-grapheme`](#symfony_polyfill-intl-grapheme) | **polyfill** | ext-intl |
| [`symfony/polyfill-intl-icu`](#symfony_polyfill-intl-icu) | **polyfill** | ext-intl |
| [`symfony/polyfill-intl-idn`](#symfony_polyfill-intl-idn) | **polyfill** | ext-intl |
| [`symfony/polyfill-intl-messageformatter`](#symfony_polyfill-intl-messageformatter) | **polyfill** | ext-intl |
| [`symfony/polyfill-intl-normalizer`](#symfony_polyfill-intl-normalizer) | **polyfill** | ext-intl |
| [`symfony/polyfill-mbstring`](#symfony_polyfill-mbstring) | **polyfill** | ext-mbstring |
| [`symfony/polyfill-php54`](#symfony_polyfill-php54) | **polyfill** | php |
| [`symfony/polyfill-php55`](#symfony_polyfill-php55) | **polyfill** | php |
| [`symfony/polyfill-php56`](#symfony_polyfill-php56) | **polyfill** | php |
| [`symfony/polyfill-php70`](#symfony_polyfill-php70) | **polyfill** | php |
| [`symfony/polyfill-php71`](#symfony_polyfill-php71) | **polyfill** | php |
| [`symfony/polyfill-php72`](#symfony_polyfill-php72) | **polyfill** | php |
| [`symfony/polyfill-php73`](#symfony_polyfill-php73) | **polyfill** | php |
| [`tea/future`](#tea_future) | **polyfill** | php |
| [`voku/portable-utf8`](#voku_portable-utf8) | **polyfill** | php, ext-iconv, ext-mbstring, ext-intl |
| [`wizacha/new-relic-polyfill`](#wizacha_new-relic-polyfill) | _stub_ | ext-newrelic |
| [`wizaplace/sqreen-polyfill`](#wizaplace_sqreen-polyfill) | _stub_ | ext-sqreen |
| [`wyrihaximus/msgpack`](#wyrihaximus_msgpack) | **polyfill** | ext-msgpack |
| [`yuloh/bccomp-polyfill`](#yuloh_bccomp-polyfill) | **polyfill** | ext-bcmath |

## Different type of Polyfill

There 3 types of polyfill:

 - **`polyfill`**, the true polyfill: You add the dependency and it work out of the box
 - **`stub`**, the faker: Provide empty implementation (ex: xdebug, NewRelic, etc.)
 - **`alternative`**, it's your choice: You have to manually activate the code

## Details

### <a id="adhocore_php-polyfills"></a>Polyfill `adhocore/php-polyfills` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/adhocore/php-polyfills)
**Type:** `polyfill`

**Require:**
_None_

**Replace:**
  - `php`, version __5.4 && 5.5__

**Functions:**
  - `array_column`
  - `hex2bin`
  - `http_response_code`

**Classes:**
_None_

**Constants:**
_None_

### <a id="appserver-io_pthreads-polyfill"></a>Polyfill `appserver-io/pthreads-polyfill` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/appserver-io/pthreads-polyfill)
**Type:** `polyfill`

**Require:**
_None_

**Replace:**
  - `ext-pthreads`, version __*__

**Functions:**
_None_

**Classes:**
  - `Collectable`
  - `Mutex`
  - `Pool`
  - `Stackable`
  - `Thread`
  - `Threaded`
  - `Volatile`
  - `Worker`

**Constants:**
_None_

### <a id="ayesh_is_countable-polyfill"></a>Polyfill `ayesh/is_countable-polyfill` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/ayesh/is_countable-polyfill)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `php`, version __7.3.*__

**Functions:**
  - `is_countable`

**Classes:**
_None_

**Constants:**
_None_

### <a id="bbrala_php7-ereg-shim"></a>Polyfill `bbrala/php7-ereg-shim` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/bbrala/php7-ereg-shim)
**Type:** `polyfill`

**Require:**
_None_

**Replace:**
  - `php`, version __4 && 5__

**Functions:**
  - `ereg`
  - `eregi`
  - `ereg_replace`
  - `eregi_replace`
  - `split`
  - `spliti`

**Classes:**
_None_

**Constants:**
_None_

### <a id="brunodebarros_polyfill-mysqli"></a>Polyfill `brunodebarros/polyfill-mysqli` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/brunodebarros/polyfill-mysqli)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3.3__
  - `ext-mysql`, version __*__

**Replace:**
  - `ext-mysqli`, version __*__

**Functions:**
_None_

**Classes:**
  - `mysqli`
  - `mysqli_result`

**Constants:**
_None_

### <a id="byjg_phpthread"></a>Polyfill `byjg/phpthread` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/byjg/phpthread)
**Type:** `alternative`

**Require:**
  - `php`, version __5.4__

**Replace:**
  - `ext-pthreads`, version __*__
  - `ext-pcntl`, version __*__

**Functions:**
_None_

**Classes:**
_None_

**Constants:**
_None_

### <a id="derrabus_ereg-shim"></a>Polyfill `derrabus/ereg-shim` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/derrabus/ereg-shim)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3 || 7.0__

**Replace:**
  - `php`, version __4 && 5__

**Functions:**
  - `ereg`
  - `eregi`
  - `ereg_replace`
  - `eregi_replace`
  - `split`
  - `spliti`

**Classes:**
_None_

**Constants:**
_None_

### <a id="dshafik_php7-mysql-shim"></a>Polyfill `dshafik/php7-mysql-shim` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/dshafik/php7-mysql-shim)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3.6__
  - `ext-mysqli`, version __*__

**Replace:**
  - `ext-mysql`, version __*__

**Functions:**
  - `mysql_connect`
  - `mysql_pconnect`
  - `mysql_close`
  - `mysql_select_db`
  - `mysql_query`
  - `mysql_unbuffered_query`
  - `mysql_db_query`
  - `mysql_list_dbs`
  - `mysql_list_tables`
  - `mysql_list_fields`
  - `mysql_list_processes`
  - `mysql_error`
  - `mysql_errno`
  - `mysql_affected_rows`
  - `mysql_insert_id`
  - `mysql_result`
  - `mysql_num_rows`
  - `mysql_num_fields`
  - `mysql_fetch_row`
  - `mysql_fetch_array`
  - `mysql_fetch_assoc`
  - `mysql_fetch_object`
  - `mysql_data_seek`
  - `mysql_fetch_lengths`
  - `mysql_fetch_field`
  - `mysql_field_seek`
  - `mysql_free_result`
  - `mysql_field_name`
  - `mysql_field_table`
  - `mysql_field_len`
  - `mysql_field_type`
  - `mysql_field_flags`
  - `mysql_escape_string`
  - `mysql_real_escape_string`
  - `mysql_stat`
  - `mysql_thread_id`
  - `mysql_client_encoding`
  - `mysql_ping`
  - `mysql_get_client_info`
  - `mysql_get_host_info`
  - `mysql_get_proto_info`
  - `mysql_get_server_info`
  - `mysql_info`
  - `mysql_set_charset`
  - `mysql_db_name`
  - `mysql_tablename`
  - `mysql_fieldname`
  - `mysql_fieldtable`
  - `mysql_fieldlen`
  - `mysql_fieldtype`
  - `mysql_fieldflags`
  - `mysql_selectdb`
  - `mysql_freeresult`
  - `mysql_numfields`
  - `mysql_numrows`
  - `mysql_listdbs`
  - `mysql_listtables`
  - `mysql_listfields`
  - `mysql_dbname`
  - `mysql_table_name`

**Classes:**
_None_

**Constants:**
  - `MYSQL_ASSOC`
  - `MYSQL_NUM`
  - `MYSQL_BOTH`
  - `MYSQL_CLIENT_COMPRESS`
  - `MYSQL_CLIENT_SSL`
  - `MYSQL_CLIENT_INTERACTIVE`
  - `MYSQL_CLIENT_IGNORE_SPACE`

### <a id="ducks-project_apache"></a>Polyfill `ducks-project/apache` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/ducks-project/apache)
**Type:** `alternative`

**Require:**
  - `php`, version __5.3.9__

**Replace:**
_None_

**Functions:**
_None_

**Classes:**
_None_

**Constants:**
_None_

### <a id="fisharebest_ext-calendar"></a>Polyfill `fisharebest/ext-calendar` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/fisharebest/ext-calendar)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `ext-calendar`, version __*__

**Functions:**
  - `cal_days_in_month`
  - `cal_from_jd`
  - `cal_info`
  - `cal_to_jd`
  - `easter_date`
  - `easter_days`
  - `FrenchToJD`
  - `GregorianToJD`
  - `JDDayOfWeek`
  - `JDMonthName`
  - `JDToFrench`
  - `JDToGregorian`
  - `jdtojewish`
  - `JDToJulian`
  - `jdtounix`
  - `JewishToJD`
  - `JulianToJD`
  - `unixtojd`

**Classes:**
_None_

**Constants:**
  - `CAL_GREGORIAN`
  - `CAL_JULIAN`
  - `CAL_JEWISH`
  - `CAL_FRENCH`
  - `CAL_NUM_CALS`
  - `CAL_DOW_DAYNO`
  - `CAL_DOW_SHORT`
  - `CAL_DOW_LONG`
  - `CAL_MONTH_GREGORIAN_SHORT`
  - `CAL_MONTH_GREGORIAN_LONG`
  - `CAL_MONTH_JULIAN_SHORT`
  - `CAL_MONTH_JULIAN_LONG`
  - `CAL_MONTH_JEWISH`
  - `CAL_MONTH_FRENCH`
  - `CAL_EASTER_DEFAULT`
  - `CAL_EASTER_ROMAN`
  - `CAL_EASTER_ALWAYS_GREGORIAN`
  - `CAL_EASTER_ALWAYS_JULIAN`
  - `CAL_JEWISH_ADD_ALAFIM_GERESH`
  - `CAL_JEWISH_ADD_ALAFIM`
  - `CAL_JEWISH_ADD_GERESHAYIM`

### <a id="fisharebest_php-polyfill"></a>Polyfill `fisharebest/php-polyfill` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/fisharebest/php-polyfill)
**Type:** `polyfill`

**Require:**
_None_

**Replace:**
  - `ext-apcu`, version __*__
  - `php`, version __5.4.* || 5.5.* || 5.6.* || 7.0.*__
  - `ext-iconv`, version __*__
  - `ext-intl`, version __*__
  - `ext-mbstring`, version __*__
  - `ext-calendar`, version __*__
  - `pecl-http`, version __*__

**Functions:**
  - `apcu_add`
  - `apcu_delete`
  - `apcu_exists`
  - `apcu_fetch`
  - `apcu_store`
  - `apcu_cache_info`
  - `apcu_cas`
  - `apcu_clear_cache`
  - `apcu_dec`
  - `apcu_inc`
  - `apcu_sma_info`
  - `trait_exists`
  - `class_uses`
  - `hex2bin`
  - `session_register_shutdown`
  - `boolval`
  - `json_last_error_msg`
  - `array_column`
  - `hash_pbkdf2`
  - `password_hash`
  - `password_get_info`
  - `password_needs_rehash`
  - `password_verify`
  - `hash_equals`
  - `ldap_escape`
  - `gzopen`
  - `gzseek`
  - `gztell`
  - `intdiv`
  - `preg_replace_callback_array`
  - `error_clear_last`
  - `random_bytes`
  - `random_int`
  - `iconv`
  - `iconv_get_encoding`
  - `iconv_set_encoding`
  - `iconv_mime_encode`
  - `iconv_mime_decode_headers`
  - `iconv_strlen`
  - `iconv_strpos`
  - `iconv_strrpos`
  - `iconv_substr`
  - `iconv_mime_decode`
  - `grapheme_extract`
  - `grapheme_stripos`
  - `grapheme_stristr`
  - `grapheme_strlen`
  - `grapheme_strpos`
  - `grapheme_strripos`
  - `grapheme_strrpos`
  - `grapheme_strstr`
  - `grapheme_substr`
  - `intl_is_failure`
  - `intl_get_error_code`
  - `intl_get_error_message`
  - `intl_error_name`
  - `mb_convert_encoding`
  - `mb_decode_mimeheader`
  - `mb_encode_mimeheader`
  - `mb_decode_numericentity`
  - `mb_encode_numericentity`
  - `mb_convert_case`
  - `mb_internal_encoding`
  - `mb_language`
  - `mb_list_encodings`
  - `mb_encoding_aliases`
  - `mb_check_encoding`
  - `mb_detect_encoding`
  - `mb_detect_order`
  - `mb_parse_str`
  - `mb_strlen`
  - `mb_strpos`
  - `mb_strtolower`
  - `mb_strtoupper`
  - `mb_substitute_character`
  - `mb_substr`
  - `mb_stripos`
  - `mb_stristr`
  - `mb_strrchr`
  - `mb_strrichr`
  - `mb_strripos`
  - `mb_strrpos`
  - `mb_strstr`
  - `mb_get_info`
  - `mb_http_output`
  - `mb_strwidth`
  - `mb_substr_count`
  - `mb_output_handler`
  - `mb_http_input`
  - `mb_convert_variables`
  - `mb_ord`
  - `mb_chr`
  - `mb_scrub`
  - `cal_days_in_month`
  - `cal_from_jd`
  - `cal_info`
  - `cal_to_jd`
  - `easter_date`
  - `easter_days`
  - `FrenchToJD`
  - `GregorianToJD`
  - `JDDayOfWeek`
  - `JDMonthName`
  - `JDToFrench`
  - `JDToGregorian`
  - `jdtojewish`
  - `JDToJulian`
  - `jdtounix`
  - `JewishToJD`
  - `JulianToJD`
  - `unixtojd`
  - `utf8_encode`
  - `utf8_decode`
  - `http_build_url`

**Classes:**
  - `APCUIterator`
  - `SessionUpdateTimestampHandlerInterface`
  - `ArithmeticError`
  - `AssertionError`
  - `DivisionByZeroError`
  - `Error`
  - `ParseError`
  - `TypeError`
  - `Collator`
  - `NumberFormatter`
  - `Locale`
  - `IntlDateFormatter`
  - `Normalizer`

**Constants:**
  - `PASSWORD_BCRYPT`
  - `PASSWORD_DEFAULT`
  - `PASSWORD_BCRYPT_DEFAULT_COST`
  - `PHP_INT_MIN`
  - `ICONV_IMPL`
  - `ICONV_VERSION`
  - `ICONV_MIME_DECODE_STRICT`
  - `ICONV_MIME_DECODE_CONTINUE_ON_ERROR`
  - `CAL_GREGORIAN`
  - `CAL_JULIAN`
  - `CAL_JEWISH`
  - `CAL_FRENCH`
  - `CAL_NUM_CALS`
  - `CAL_DOW_DAYNO`
  - `CAL_DOW_SHORT`
  - `CAL_DOW_LONG`
  - `CAL_MONTH_GREGORIAN_SHORT`
  - `CAL_MONTH_GREGORIAN_LONG`
  - `CAL_MONTH_JULIAN_SHORT`
  - `CAL_MONTH_JULIAN_LONG`
  - `CAL_MONTH_JEWISH`
  - `CAL_MONTH_FRENCH`
  - `CAL_EASTER_DEFAULT`
  - `CAL_EASTER_ROMAN`
  - `CAL_EASTER_ALWAYS_GREGORIAN`
  - `CAL_EASTER_ALWAYS_JULIAN`
  - `CAL_JEWISH_ADD_ALAFIM_GERESH`
  - `CAL_JEWISH_ADD_ALAFIM`
  - `CAL_JEWISH_ADD_GERESHAYIM`
  - `HTTP_URL_REPLACE`
  - `HTTP_URL_JOIN_PATH`
  - `HTTP_URL_JOIN_QUERY`
  - `HTTP_URL_STRIP_USER`
  - `HTTP_URL_STRIP_PASS`
  - `HTTP_URL_STRIP_AUTH`
  - `HTTP_URL_STRIP_PORT`
  - `HTTP_URL_STRIP_PATH`
  - `HTTP_URL_STRIP_QUERY`
  - `HTTP_URL_STRIP_FRAGMENT`
  - `HTTP_URL_STRIP_ALL`

### <a id="ircmaxell_password-compat"></a>Polyfill `ircmaxell/password-compat` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/ircmaxell/password-compat)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3.7__

**Replace:**
_None_

**Functions:**
  - `password_hash`
  - `password_get_info`
  - `password_needs_rehash`
  - `password_verify`

**Classes:**
_None_

**Constants:**
  - `PASSWORD_BCRYPT`
  - `PASSWORD_DEFAULT`
  - `PASSWORD_BCRYPT_DEFAULT_COST`

### <a id="jakeasmith_http_build_url"></a>Polyfill `jakeasmith/http_build_url` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/jakeasmith/http_build_url)
**Type:** `polyfill`

**Require:**
_None_

**Replace:**
  - `pecl_http`, version __*__

**Functions:**
  - `http_build_url`

**Classes:**
_None_

**Constants:**
  - `HTTP_URL_REPLACE`
  - `HTTP_URL_JOIN_PATH`
  - `HTTP_URL_JOIN_QUERY`
  - `HTTP_URL_STRIP_USER`
  - `HTTP_URL_STRIP_PASS`
  - `HTTP_URL_STRIP_AUTH`
  - `HTTP_URL_STRIP_PORT`
  - `HTTP_URL_STRIP_PATH`
  - `HTTP_URL_STRIP_QUERY`
  - `HTTP_URL_STRIP_FRAGMENT`
  - `HTTP_URL_STRIP_ALL`

### <a id="jesseschalken_date-time-immutable-polyfill"></a>Polyfill `jesseschalken/date-time-immutable-polyfill` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/jesseschalken/date-time-immutable-polyfill)
**Type:** `polyfill`

**Require:**
_None_

**Replace:**
  - `php`, version __5.*__

**Functions:**
_None_

**Classes:**
  - `DateTimeInterface`
  - `DateTimeImmutable`

**Constants:**
_None_

### <a id="kirra_polyfill-translit"></a>Polyfill `kirra/polyfill-translit` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/kirra/polyfill-translit)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.5.9__

**Replace:**
  - `pecl-translit`, version __*__

**Functions:**
  - `transliterate_filters_get`
  - `transliterate`

**Classes:**
_None_

**Constants:**
_None_

### <a id="krakjoe_pthreads-polyfill"></a>Polyfill `krakjoe/pthreads-polyfill` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/krakjoe/pthreads-polyfill)
**Type:** `polyfill`

**Require:**
_None_

**Replace:**
  - `ext-pthreads`, version __*__

**Functions:**
_None_

**Classes:**
  - `Thread`
  - `Pool`
  - `Collectable`
  - `Threaded`
  - `Volatile`
  - `Worker`

**Constants:**
_None_

### <a id="lavoiesl_apc-polyfill"></a>Polyfill `lavoiesl/apc-polyfill` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/lavoiesl/apc-polyfill)
**Type:** `alternative`

**Require:**
  - `ext-apcu`, version __*__

**Replace:**
  - `ext-apc`, version __*__

**Functions:**
_None_

**Classes:**
_None_

**Constants:**
_None_

### <a id="lavoiesl_apc-polyfill"></a>Polyfill `lavoiesl/apc-polyfill` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/lavoiesl/apc-polyfill)
**Type:** `alternative`

**Require:**
  - `ext-apcu`, version __*__

**Replace:**
  - `ext-apc`, version __*__

**Functions:**
  - `apc_add`
  - `apc_cache_info`
  - `apc_cas`
  - `apc_clear_cache`
  - `apc_dec`
  - `apc_delete`
  - `apc_exists`
  - `apc_fetch`
  - `apc_inc`
  - `apc_sma_info`
  - `apc_store`

**Classes:**
_None_

**Constants:**
_None_

### <a id="mmeyer2k_retro"></a>Polyfill `mmeyer2k/retro` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/mmeyer2k/retro)
**Type:** `polyfill`

**Require:**
_None_

**Replace:**
  - `php`, version __5.4 && 5.5__

**Functions:**
  - `hex2bin`
  - `array_column`

**Classes:**
_None_

**Constants:**
_None_

### <a id="mollie_polyfill-libsodium"></a>Polyfill `mollie/polyfill-libsodium` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/mollie/polyfill-libsodium)
**Type:** `polyfill`

**Require:**
  - `php`, version __7.0__

**Replace:**
  - `ext-sodium`, version __*__

**Functions:**
  - `Sodium\crypto_aead_aes256gcm_is_available`
  - `Sodium\crypto_aead_aes256gcm_decrypt`
  - `Sodium\crypto_aead_aes256gcm_encrypt`
  - `Sodium\crypto_aead_chacha20poly1305_decrypt`
  - `Sodium\crypto_aead_chacha20poly1305_encrypt`
  - `Sodium\crypto_auth`
  - `Sodium\crypto_auth_verify`
  - `Sodium\crypto_box`
  - `Sodium\crypto_box_keypair`
  - `Sodium\crypto_box_seed_keypair`
  - `Sodium\crypto_box_keypair_from_secretkey_and_publickey`
  - `Sodium\crypto_box_open`
  - `Sodium\crypto_box_publickey`
  - `Sodium\crypto_box_publickey_from_secretkey`
  - `Sodium\crypto_box_seal`
  - `Sodium\crypto_box_seal_open`
  - `Sodium\crypto_box_secretkey`
  - `Sodium\crypto_kx`
  - `Sodium\crypto_generichash`
  - `Sodium\crypto_generichash_init`
  - `Sodium\crypto_generichash_update`
  - `Sodium\crypto_generichash_final`
  - `Sodium\crypto_pwhash`
  - `Sodium\crypto_pwhash_str`
  - `Sodium\crypto_pwhash_str_verify`
  - `Sodium\crypto_pwhash_scryptsalsa208sha256`
  - `Sodium\crypto_pwhash_scryptsalsa208sha256_str`
  - `Sodium\crypto_pwhash_scryptsalsa208sha256_str_verify`
  - `Sodium\crypto_scalarmult`
  - `Sodium\crypto_secretbox`
  - `Sodium\crypto_secretbox_open`
  - `Sodium\crypto_shorthash`
  - `Sodium\crypto_sign`
  - `Sodium\crypto_sign_detached`
  - `Sodium\crypto_sign_ed25519_pk_to_curve25519`
  - `Sodium\crypto_sign_ed25519_sk_to_curve25519`
  - `Sodium\crypto_sign_keypair`
  - `Sodium\crypto_sign_keypair_from_secretkey_and_publickey`
  - `Sodium\crypto_sign_open`
  - `Sodium\crypto_sign_publickey`
  - `Sodium\crypto_sign_secretkey`
  - `Sodium\crypto_sign_publickey_from_secretkey`
  - `Sodium\crypto_sign_seed_keypair`
  - `Sodium\crypto_sign_verify_detached`
  - `Sodium\crypto_stream`
  - `Sodium\crypto_stream_xor`
  - `Sodium\randombytes_buf`
  - `Sodium\randombytes_random16`
  - `Sodium\randombytes_uniform`
  - `Sodium\bin2hex`
  - `Sodium\compare`
  - `Sodium\hex2bin`
  - `Sodium\increment`
  - `Sodium\add`
  - `Sodium\library_version_major`
  - `Sodium\library_version_minor`
  - `Sodium\memcmp`
  - `Sodium\memzero`
  - `Sodium\version_string`
  - `Sodium\crypto_scalarmult_base`

**Classes:**
_None_

**Constants:**
  - `Sodium\CRYPTO_AEAD_AES256GCM_KEYBYTES`
  - `Sodium\CRYPTO_AEAD_AES256GCM_NSECBYTES`
  - `Sodium\CRYPTO_AEAD_AES256GCM_NPUBBYTES`
  - `Sodium\CRYPTO_AEAD_AES256GCM_ABYTES`
  - `Sodium\CRYPTO_AEAD_CHACHA20POLY1305_KEYBYTES`
  - `Sodium\CRYPTO_AEAD_CHACHA20POLY1305_NSECBYTES`
  - `Sodium\CRYPTO_AEAD_CHACHA20POLY1305_NPUBBYTES`
  - `Sodium\CRYPTO_AEAD_CHACHA20POLY1305_ABYTES`
  - `Sodium\CRYPTO_AUTH_BYTES`
  - `Sodium\CRYPTO_AUTH_KEYBYTES`
  - `Sodium\CRYPTO_BOX_SEALBYTES`
  - `Sodium\CRYPTO_BOX_SECRETKEYBYTES`
  - `Sodium\CRYPTO_BOX_PUBLICKEYBYTES`
  - `Sodium\CRYPTO_BOX_KEYPAIRBYTES`
  - `Sodium\CRYPTO_BOX_MACBYTES`
  - `Sodium\CRYPTO_BOX_NONCEBYTES`
  - `Sodium\CRYPTO_BOX_SEEDBYTES`
  - `Sodium\CRYPTO_KX_BYTES`
  - `Sodium\CRYPTO_KX_PUBLICKEYBYTES`
  - `Sodium\CRYPTO_KX_SECRETKEYBYTES`
  - `Sodium\CRYPTO_GENERICHASH_BYTES`
  - `Sodium\CRYPTO_GENERICHASH_BYTES_MIN`
  - `Sodium\CRYPTO_GENERICHASH_BYTES_MAX`
  - `Sodium\CRYPTO_GENERICHASH_KEYBYTES`
  - `Sodium\CRYPTO_GENERICHASH_KEYBYTES_MIN`
  - `Sodium\CRYPTO_GENERICHASH_KEYBYTES_MAX`
  - `Sodium\CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES`
  - `Sodium\CRYPTO_PWHASH_SCRYPTSALSA208SHA256_STRPREFIX`
  - `Sodium\CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_INTERACTIVE`
  - `Sodium\CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_INTERACTIVE`
  - `Sodium\CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_SENSITIVE`
  - `Sodium\CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_SENSITIVE`
  - `Sodium\CRYPTO_SCALARMULT_BYTES`
  - `Sodium\CRYPTO_SCALARMULT_SCALARBYTES`
  - `Sodium\CRYPTO_SHORTHASH_BYTES`
  - `Sodium\CRYPTO_SHORTHASH_KEYBYTES`
  - `Sodium\CRYPTO_SECRETBOX_KEYBYTES`
  - `Sodium\CRYPTO_SECRETBOX_MACBYTES`
  - `Sodium\CRYPTO_SECRETBOX_NONCEBYTES`
  - `Sodium\CRYPTO_SIGN_BYTES`
  - `Sodium\CRYPTO_SIGN_SEEDBYTES`
  - `Sodium\CRYPTO_SIGN_PUBLICKEYBYTES`
  - `Sodium\CRYPTO_SIGN_SECRETKEYBYTES`
  - `Sodium\CRYPTO_SIGN_KEYPAIRBYTES`
  - `Sodium\CRYPTO_STREAM_KEYBYTES`
  - `Sodium\CRYPTO_STREAM_NONCEBYTES`
  - `Sodium\CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE`
  - `Sodium\CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE`
  - `Sodium\CRYPTO_PWHASH_SALTBYTES `
  - `Sodium\CRYPTO_PWHASH_STRPREFIX `
  - `Sodium\CRYPTO_PWHASH_OPSLIMIT_MODERATE`
  - `Sodium\CRYPTO_PWHASH_MEMLIMIT_MODERATE`
  - `Sodium\CRYPTO_PWHASH_OPSLIMIT_SENSITIVE`
  - `Sodium\CRYPTO_PWHASH_MEMLIMIT_SENSITIVE`

### <a id="mongofill_mongofill"></a>Polyfill `mongofill/mongofill` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/mongofill/mongofill)
**Type:** `polyfill`

**Require:**
_None_

**Replace:**
  - `ext-mongo`, version __*__

**Functions:**
  - `bson_encode`
  - `bson_decode`
  - `bson_encode_multiple`
  - `bson_decode_multiple`

**Classes:**
  - `MongoClient`
  - `MongoDB`
  - `MongoCollection`
  - `MongoCursor`
  - `MongoId`
  - `MongoCode`
  - `MongoDate`
  - `MongoRegex`
  - `MongoBinData`
  - `MongoInt32`
  - `MongoInt64`
  - `MongoDBRef`
  - `MongoMinKey`
  - `MongoMaxKey`
  - `MongoTimestamp`
  - `MongoGridFS`
  - `MongoGridFSFile`
  - `MongoGridFSCursor`
  - `MongoLog`
  - `Mongo`
  - `MongoException`
  - `MongoResultException`
  - `MongoCursorException`
  - `MongoCursorTimeoutException`
  - `MongoConnectionException`
  - `MongoGridFSException`

**Constants:**
_None_

### <a id="ovr_newrelic-polyfill"></a>Polyfill `ovr/newrelic-polyfill` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/ovr/newrelic-polyfill)
**Type:** `stub`

**Require:**
_None_

**Replace:**
  - `ext-newrelic`, version __*__

**Functions:**
  - `newrelic_add_custom_parameter`
  - `newrelic_add_custom_tracer`
  - `newrelic_background_job`
  - `newrelic_capture_params`
  - `newrelic_custom_metric`
  - `newrelic_disable_autorum`
  - `newrelic_end_of_transaction`
  - `newrelic_get_browser_timing_footer`
  - `newrelic_get_browser_timing_header`
  - `newrelic_ignore_apdex`
  - `newrelic_ignore_transaction`
  - `newrelic_name_transaction`
  - `newrelic_notice_error`
  - `newrelic_record_custom_event`
  - `newrelic_set_appname`
  - `newrelic_set_user_attributes`
  - `newrelic_start_transaction`

**Classes:**
_None_

**Constants:**
_None_

### <a id="paragonie_random_compat"></a>Polyfill `paragonie/random_compat` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/paragonie/random_compat)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.2__

**Replace:**
_None_

**Functions:**
  - `random_bytes`
  - `random_int`

**Classes:**
  - `Error`
  - `TypeError`

**Constants:**
  - `PHP_VERSION_ID`
  - `RANDOM_COMPAT_READ_BUFFER`

### <a id="paragonie_sodium_compat"></a>Polyfill `paragonie/sodium_compat` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/paragonie/sodium_compat)
**Type:** `polyfill`

**Require:**
_None_

**Replace:**
  - `ext-sodium`, version __*__
  - `ext-libsodium`, version __*__

**Functions:**
  - `sodium_bin2hex`
  - `sodium_compare`
  - `sodium_crypto_aead_aes256gcm_decrypt`
  - `sodium_crypto_aead_aes256gcm_encrypt`
  - `sodium_crypto_aead_aes256gcm_is_available`
  - `sodium_crypto_aead_chacha20poly1305_decrypt`
  - `sodium_crypto_aead_chacha20poly1305_encrypt`
  - `sodium_crypto_aead_chacha20poly1305_keygen`
  - `sodium_crypto_aead_chacha20poly1305_ietf_decrypt`
  - `sodium_crypto_aead_chacha20poly1305_ietf_encrypt`
  - `sodium_crypto_aead_chacha20poly1305_ietf_keygen`
  - `sodium_crypto_aead_xchacha20poly1305_ietf_decrypt`
  - `sodium_crypto_aead_xchacha20poly1305_ietf_encrypt`
  - `sodium_crypto_aead_xchacha20poly1305_ietf_keygen`
  - `sodium_crypto_auth`
  - `sodium_crypto_auth_keygen`
  - `sodium_crypto_auth_verify`
  - `sodium_crypto_box`
  - `sodium_crypto_box_keypair`
  - `sodium_crypto_box_keypair_from_secretkey_and_publickey`
  - `sodium_crypto_box_open`
  - `sodium_crypto_box_publickey`
  - `sodium_crypto_box_publickey_from_secretkey`
  - `sodium_crypto_box_seal`
  - `sodium_crypto_box_seal_open`
  - `sodium_crypto_box_secretkey`
  - `sodium_crypto_box_seed_keypair`
  - `sodium_crypto_generichash`
  - `sodium_crypto_generichash_final`
  - `sodium_crypto_generichash_init`
  - `sodium_crypto_generichash_keygen`
  - `sodium_crypto_generichash_update`
  - `sodium_crypto_kx`
  - `sodium_crypto_pwhash`
  - `sodium_crypto_pwhash_str`
  - `sodium_crypto_pwhash_str_verify`
  - `sodium_crypto_pwhash_scryptsalsa208sha256`
  - `sodium_crypto_pwhash_scryptsalsa208sha256_str`
  - `sodium_crypto_pwhash_scryptsalsa208sha256_str_verify`
  - `sodium_crypto_scalarmult`
  - `sodium_crypto_scalarmult_base`
  - `sodium_crypto_secretbox`
  - `sodium_crypto_secretbox_keygen`
  - `sodium_crypto_secretbox_open`
  - `sodium_crypto_shorthash`
  - `sodium_crypto_shorthash_keygen`
  - `sodium_crypto_sign`
  - `sodium_crypto_sign_detached`
  - `sodium_crypto_sign_keypair`
  - `sodium_crypto_sign_open`
  - `sodium_crypto_sign_publickey`
  - `sodium_crypto_sign_publickey_from_secretkey`
  - `sodium_crypto_sign_secretkey`
  - `sodium_crypto_sign_seed_keypair`
  - `sodium_crypto_sign_verify_detached`
  - `sodium_crypto_sign_ed25519_pk_to_curve25519`
  - `sodium_crypto_sign_ed25519_sk_to_curve25519`
  - `sodium_crypto_stream`
  - `sodium_crypto_stream_keygen`
  - `sodium_crypto_stream_xor`
  - `sodium_hex2bin`
  - `sodium_increment`
  - `sodium_library_version_major`
  - `sodium_library_version_minor`
  - `sodium_version_string`
  - `sodium_memcmp`
  - `sodium_memzero`
  - `sodium_randombytes_buf`
  - `sodium_randombytes_uniform`
  - `sodium_randombytes_random16`
  - `Sodium\bin2hex`
  - `Sodium\compare`
  - `Sodium\crypto_aead_aes256gcm_decrypt`
  - `Sodium\crypto_aead_aes256gcm_encrypt`
  - `Sodium\crypto_aead_aes256gcm_is_available`
  - `Sodium\crypto_aead_chacha20poly1305_decrypt`
  - `Sodium\crypto_aead_chacha20poly1305_encrypt`
  - `Sodium\crypto_aead_chacha20poly1305_ietf_decrypt`
  - `Sodium\crypto_aead_chacha20poly1305_ietf_encrypt`
  - `Sodium\crypto_auth`
  - `Sodium\crypto_auth_verify`
  - `Sodium\crypto_box`
  - `Sodium\crypto_box_keypair`
  - `Sodium\crypto_box_keypair_from_secretkey_and_publickey`
  - `Sodium\crypto_box_open`
  - `Sodium\crypto_box_publickey`
  - `Sodium\crypto_box_publickey_from_secretkey`
  - `Sodium\crypto_box_seal`
  - `Sodium\crypto_box_seal_open`
  - `Sodium\crypto_box_secretkey`
  - `Sodium\crypto_generichash`
  - `Sodium\crypto_generichash_final`
  - `Sodium\crypto_generichash_init`
  - `Sodium\crypto_generichash_update`
  - `Sodium\crypto_kx`
  - `Sodium\crypto_pwhash`
  - `Sodium\crypto_pwhash_str`
  - `Sodium\crypto_pwhash_str_verify`
  - `Sodium\crypto_pwhash_scryptsalsa208sha256`
  - `Sodium\crypto_pwhash_scryptsalsa208sha256_str`
  - `Sodium\crypto_pwhash_scryptsalsa208sha256_str_verify`
  - `Sodium\crypto_scalarmult`
  - `Sodium\crypto_scalarmult_base`
  - `Sodium\crypto_secretbox`
  - `Sodium\crypto_secretbox_open`
  - `Sodium\crypto_shorthash`
  - `Sodium\crypto_sign`
  - `Sodium\crypto_sign_detached`
  - `Sodium\crypto_sign_keypair`
  - `Sodium\crypto_sign_open`
  - `Sodium\crypto_sign_publickey`
  - `Sodium\crypto_sign_publickey_from_secretkey`
  - `Sodium\crypto_sign_secretkey`
  - `Sodium\crypto_sign_seed_keypair`
  - `Sodium\crypto_sign_verify_detached`
  - `Sodium\crypto_sign_ed25519_pk_to_curve25519`
  - `Sodium\crypto_sign_ed25519_sk_to_curve25519`
  - `Sodium\crypto_stream`
  - `Sodium\crypto_stream_xor`
  - `Sodium\hex2bin`
  - `Sodium\memcmp`
  - `Sodium\memzero`
  - `Sodium\randombytes_buf`
  - `Sodium\randombytes_uniform`
  - `Sodium\randombytes_random16`

**Classes:**
  - `SodiumException`

**Constants:**
  - `Sodium\CRYPTO_AEAD_AES256GCM_KEYBYTES`
  - `Sodium\CRYPTO_AEAD_AES256GCM_NSECBYTES`
  - `Sodium\CRYPTO_AEAD_AES256GCM_NPUBBYTES`
  - `Sodium\CRYPTO_AEAD_AES256GCM_ABYTES`
  - `Sodium\CRYPTO_AEAD_CHACHA20POLY1305_KEYBYTES`
  - `Sodium\CRYPTO_AEAD_CHACHA20POLY1305_NSECBYTES`
  - `Sodium\CRYPTO_AEAD_CHACHA20POLY1305_NPUBBYTES`
  - `Sodium\CRYPTO_AEAD_CHACHA20POLY1305_ABYTES`
  - `Sodium\CRYPTO_AEAD_CHACHA20POLY1305_IETF_KEYBYTES`
  - `Sodium\CRYPTO_AEAD_CHACHA20POLY1305_IETF_NSECBYTES`
  - `Sodium\CRYPTO_AEAD_CHACHA20POLY1305_IETF_NPUBBYTES`
  - `Sodium\CRYPTO_AEAD_CHACHA20POLY1305_IETF_ABYTES`
  - `Sodium\CRYPTO_AUTH_BYTES`
  - `Sodium\CRYPTO_AUTH_KEYBYTES`
  - `Sodium\CRYPTO_BOX_SEALBYTES`
  - `Sodium\CRYPTO_BOX_SECRETKEYBYTES`
  - `Sodium\CRYPTO_BOX_PUBLICKEYBYTES`
  - `Sodium\CRYPTO_BOX_KEYPAIRBYTES`
  - `Sodium\CRYPTO_BOX_MACBYTES`
  - `Sodium\CRYPTO_BOX_NONCEBYTES`
  - `Sodium\CRYPTO_BOX_SEEDBYTES`
  - `Sodium\CRYPTO_KX_BYTES`
  - `Sodium\CRYPTO_KX_SEEDBYTES`
  - `Sodium\CRYPTO_KX_PUBLICKEYBYTES`
  - `Sodium\CRYPTO_KX_SECRETKEYBYTES`
  - `Sodium\CRYPTO_GENERICHASH_BYTES`
  - `Sodium\CRYPTO_GENERICHASH_BYTES_MIN`
  - `Sodium\CRYPTO_GENERICHASH_BYTES_MAX`
  - `Sodium\CRYPTO_GENERICHASH_KEYBYTES`
  - `Sodium\CRYPTO_GENERICHASH_KEYBYTES_MIN`
  - `Sodium\CRYPTO_GENERICHASH_KEYBYTES_MAX`
  - `Sodium\CRYPTO_SCALARMULT_BYTES`
  - `Sodium\CRYPTO_SCALARMULT_SCALARBYTES`
  - `Sodium\CRYPTO_SHORTHASH_BYTES`
  - `Sodium\CRYPTO_SHORTHASH_KEYBYTES`
  - `Sodium\CRYPTO_SECRETBOX_KEYBYTES`
  - `Sodium\CRYPTO_SECRETBOX_MACBYTES`
  - `Sodium\CRYPTO_SECRETBOX_NONCEBYTES`
  - `Sodium\CRYPTO_SIGN_BYTES`
  - `Sodium\CRYPTO_SIGN_SEEDBYTES`
  - `Sodium\CRYPTO_SIGN_PUBLICKEYBYTES`
  - `Sodium\CRYPTO_SIGN_SECRETKEYBYTES`
  - `Sodium\CRYPTO_SIGN_KEYPAIRBYTES`
  - `Sodium\CRYPTO_STREAM_KEYBYTES`
  - `Sodium\CRYPTO_STREAM_NONCEBYTES`
  - `SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_KEYBYTES`
  - `SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NSECBYTES`
  - `SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NPUBBYTES`
  - `SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_ABYTES`
  - `SODIUM_CRYPTO_AEAD_AES256GCM_KEYBYTES`
  - `SODIUM_CRYPTO_AEAD_AES256GCM_NSECBYTES`
  - `SODIUM_CRYPTO_AEAD_AES256GCM_NPUBBYTES`
  - `SODIUM_CRYPTO_AEAD_AES256GCM_ABYTES`
  - `SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_KEYBYTES`
  - `SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NSECBYTES`
  - `SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NPUBBYTES`
  - `SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_ABYTES`
  - `SODIUM_CRYPTO_AUTH_BYTES`
  - `SODIUM_CRYPTO_AUTH_KEYBYTES`
  - `SODIUM_CRYPTO_BOX_SEALBYTES`
  - `SODIUM_CRYPTO_BOX_SECRETKEYBYTES`
  - `SODIUM_CRYPTO_BOX_PUBLICKEYBYTES`
  - `SODIUM_CRYPTO_BOX_KEYPAIRBYTES`
  - `SODIUM_CRYPTO_BOX_MACBYTES`
  - `SODIUM_CRYPTO_BOX_NONCEBYTES`
  - `SODIUM_CRYPTO_BOX_SEEDBYTES`
  - `SODIUM_CRYPTO_KX_BYTES`
  - `SODIUM_CRYPTO_KX_SEEDBYTES`
  - `SODIUM_CRYPTO_KX_PUBLICKEYBYTES`
  - `SODIUM_CRYPTO_KX_SECRETKEYBYTES`
  - `SODIUM_CRYPTO_GENERICHASH_BYTES`
  - `SODIUM_CRYPTO_GENERICHASH_BYTES_MIN`
  - `SODIUM_CRYPTO_GENERICHASH_BYTES_MAX`
  - `SODIUM_CRYPTO_GENERICHASH_KEYBYTES`
  - `SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MIN`
  - `SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MAX`
  - `SODIUM_CRYPTO_PWHASH_SALTBYTES`
  - `SODIUM_CRYPTO_PWHASH_STRPREFIX`
  - `SODIUM_CRYPTO_PWHASH_ALG_ARGON2I13`
  - `SODIUM_CRYPTO_PWHASH_ALG_ARGON2ID13`
  - `SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE`
  - `SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE`
  - `SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE`
  - `SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE`
  - `SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE`
  - `SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE`
  - `SODIUM_CRYPTO_SCALARMULT_BYTES`
  - `SODIUM_CRYPTO_SCALARMULT_SCALARBYTES`
  - `SODIUM_CRYPTO_SHORTHASH_BYTES`
  - `SODIUM_CRYPTO_SHORTHASH_KEYBYTES`
  - `SODIUM_CRYPTO_SECRETBOX_KEYBYTES`
  - `SODIUM_CRYPTO_SECRETBOX_MACBYTES`
  - `SODIUM_CRYPTO_SECRETBOX_NONCEBYTES`
  - `SODIUM_CRYPTO_SIGN_BYTES`
  - `SODIUM_CRYPTO_SIGN_SEEDBYTES`
  - `SODIUM_CRYPTO_SIGN_PUBLICKEYBYTES`
  - `SODIUM_CRYPTO_SIGN_SECRETKEYBYTES`
  - `SODIUM_CRYPTO_SIGN_KEYPAIRBYTES`
  - `SODIUM_CRYPTO_STREAM_KEYBYTES`
  - `SODIUM_CRYPTO_STREAM_NONCEBYTES`

### <a id="php-ds_php-ds"></a>Polyfill `php-ds/php-ds` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/php-ds/php-ds)
**Type:** `polyfill`

**Require:**
  - `php`, version __7.0__

**Replace:**
  - `ext-ds`, version __*__

**Functions:**
_None_

**Classes:**
  - `Ds\Collection`
  - `Ds\Hashable`
  - `Ds\Sequence`
  - `Ds\Vector`
  - `Ds\Deque`
  - `Ds\Map`
  - `Ds\Pair`
  - `Ds\Set`
  - `Ds\Stack`
  - `Ds\Queue`
  - `Ds\PriorityQueue`

**Constants:**
_None_

### <a id="phpseclib_mcrypt_compat"></a>Polyfill `phpseclib/mcrypt_compat` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/phpseclib/mcrypt_compat)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `ext-mcrypt`, version __*__

**Functions:**
  - `mcrypt_list_algorithms`
  - `mcrypt_list_modes`
  - `mcrypt_create_iv`
  - `mcrypt_module_open`
  - `mcrypt_enc_get_key_size`
  - `mcrypt_enc_get_iv_size`
  - `mcrypt_enc_get_block_size`
  - `mcrypt_generic_init`
  - `mcrypt_generic`
  - `mcrypt_generic_deinit`
  - `mcrypt_module_close`
  - `mdecrypt_generic`
  - `mcrypt_enc_get_algorithms_name`
  - `mcrypt_enc_get_modes_name`
  - `mcrypt_enc_is_block_algorithm_mode`
  - `mcrypt_enc_is_block_algorithm`
  - `mcrypt_enc_self_test`
  - `mcrypt_module_get_supported_key_sizes`
  - `mcrypt_encrypt`
  - `mcrypt_module_get_algo_block_size`
  - `mcrypt_get_block_size`
  - `mcrypt_get_cipher_name`
  - `mcrypt_get_key_size`
  - `mcrypt_get_iv_size`
  - `mcrypt_module_get_algo_key_size`
  - `mcrypt_enc_get_supported_key_sizes`
  - `mcrypt_module_is_block_algorithm_mode`
  - `mcrypt_module_is_block_algorithm`
  - `mcrypt_module_is_block_mode`
  - `mcrypt_module_self_test`
  - `mcrypt_decrypt`

**Classes:**
_None_

**Constants:**
  - `MCRYPT_MODE_ECB`
  - `MCRYPT_MODE_CBC`
  - `MCRYPT_MODE_CFB`
  - `MCRYPT_MODE_OFB`
  - `MCRYPT_MODE_NOFB`
  - `MCRYPT_MODE_STREAM`
  - `MCRYPT_ENCRYPT`
  - `MCRYPT_DECRYPT`
  - `MCRYPT_DEV_RANDOM`
  - `MCRYPT_DEV_URANDOM`
  - `MCRYPT_RAND`
  - `MCRYPT_3DES`
  - `MCRYPT_ARCFOUR_IV`
  - `MCRYPT_ARCFOUR`
  - `MCRYPT_BLOWFISH`
  - `MCRYPT_CAST_128`
  - `MCRYPT_CAST_256`
  - `MCRYPT_CRYPT`
  - `MCRYPT_DES`
  - `MCRYPT_GOST`
  - `MCRYPT_IDEA`
  - `MCRYPT_LOKI97`
  - `MCRYPT_MARS`
  - `MCRYPT_PANAMA`
  - `MCRYPT_RIJNDAEL_128`
  - `MCRYPT_RIJNDAEL_192`
  - `MCRYPT_RIJNDAEL_256`
  - `MCRYPT_RC2`
  - `MCRYPT_RC6`
  - `MCRYPT_SAFER64`
  - `MCRYPT_SAFER128`
  - `MCRYPT_SAFERPLUS`
  - `MCRYPT_SERPENT`
  - `MCRYPT_SKIPJACK`
  - `MCRYPT_THREEWAY`
  - `MCRYPT_TRIPLEDES`
  - `MCRYPT_TWOFISH`
  - `MCRYPT_WAKE`
  - `MCRYPT_XTEA`

### <a id="positibe_polyfill-apc-php70"></a>Polyfill `positibe/polyfill-apc-php70` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/positibe/polyfill-apc-php70)
**Type:** `polyfill`

**Require:**
  - `php`, version __7.0__
  - `ext-apcu`, version __*__

**Replace:**
  - `ext-apc`, version __*__

**Functions:**
  - `apc_add`
  - `apc_cache_info`
  - `apc_cas`
  - `apc_clear_cache`
  - `apc_dec`
  - `apc_delete`
  - `apc_exists`
  - `apc_fetch`
  - `apc_inc`
  - `apc_sma_info`
  - `apc_store`

**Classes:**
  - `APCIterator`

**Constants:**
_None_

### <a id="ralouphie_getallheaders"></a>Polyfill `ralouphie/getallheaders` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/ralouphie/getallheaders)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
_None_

**Functions:**
  - `getallheaders`

**Classes:**
_None_

**Constants:**
_None_

### <a id="sarciszewski_php-future"></a>Polyfill `sarciszewski/php-future` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/sarciszewski/php-future)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.4__

**Replace:**
  - `php`, version __5.*__

**Functions:**
  - `array_column`
  - `boolval`
  - `hex2bin`
  - `hash_equals`
  - `hash_pbkdf2`
  - `getimagesizefromstring`
  - `openssl_pbkdf2`

**Classes:**
  - `JsonSerializable`
  - `SessionHandlerInterface`

**Constants:**
_None_

### <a id="src-run_augustus-polyfill-library"></a>Polyfill `src-run/augustus-polyfill-library` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/src-run/augustus-polyfill-library)
**Type:** `polyfill`

**Require:**
  - `php`, version __7.0__

**Replace:**
  - `ext-mbstring`, version __*__
  - `ext-intl`, version __*__
  - `ext-iconv`, version __*__
  - `ext-apcu`, version __*__
  - `ext-ctype`, version __*__
  - `php`, version __7.1 && 7.2__

**Functions:**
  - `apcu_add`
  - `apcu_delete`
  - `apcu_exists`
  - `apcu_fetch`
  - `apcu_store`
  - `apcu_cache_info`
  - `apcu_cas`
  - `apcu_clear_cache`
  - `apcu_dec`
  - `apcu_inc`
  - `apcu_sma_info`
  - `trait_exists`
  - `class_uses`
  - `hex2bin`
  - `session_register_shutdown`
  - `boolval`
  - `json_last_error_msg`
  - `array_column`
  - `hash_pbkdf2`
  - `password_hash`
  - `password_get_info`
  - `password_needs_rehash`
  - `password_verify`
  - `hash_equals`
  - `ldap_escape`
  - `gzopen`
  - `gzseek`
  - `gztell`
  - `intdiv`
  - `preg_replace_callback_array`
  - `error_clear_last`
  - `random_bytes`
  - `random_int`
  - `is_iterable`
  - `spl_object_id`
  - `stream_isatty`
  - `sapi_windows_vt100_support`
  - `utf8_encode`
  - `utf8_decode`
  - `iconv`
  - `iconv_get_encoding`
  - `iconv_set_encoding`
  - `iconv_mime_encode`
  - `iconv_mime_decode_headers`
  - `iconv_strlen`
  - `iconv_strpos`
  - `iconv_strrpos`
  - `iconv_substr`
  - `iconv_mime_decode`
  - `grapheme_extract`
  - `grapheme_stripos`
  - `grapheme_stristr`
  - `grapheme_strlen`
  - `grapheme_strpos`
  - `grapheme_strripos`
  - `grapheme_strrpos`
  - `grapheme_strstr`
  - `grapheme_substr`
  - `intl_is_failure`
  - `intl_get_error_code`
  - `intl_get_error_message`
  - `intl_error_name`
  - `mb_convert_encoding`
  - `mb_decode_mimeheader`
  - `mb_encode_mimeheader`
  - `mb_decode_numericentity`
  - `mb_encode_numericentity`
  - `mb_convert_case`
  - `mb_internal_encoding`
  - `mb_language`
  - `mb_list_encodings`
  - `mb_encoding_aliases`
  - `mb_check_encoding`
  - `mb_detect_encoding`
  - `mb_detect_order`
  - `mb_parse_str`
  - `mb_strlen`
  - `mb_strpos`
  - `mb_strtolower`
  - `mb_strtoupper`
  - `mb_substitute_character`
  - `mb_substr`
  - `mb_stripos`
  - `mb_stristr`
  - `mb_strrchr`
  - `mb_strrichr`
  - `mb_strripos`
  - `mb_strrpos`
  - `mb_strstr`
  - `mb_get_info`
  - `mb_http_output`
  - `mb_strwidth`
  - `mb_substr_count`
  - `mb_output_handler`
  - `mb_http_input`
  - `mb_convert_variables`
  - `mb_ord`
  - `mb_chr`
  - `mb_scrub`
  - `ctype_alnum`
  - `ctype_alpha`
  - `ctype_cntrl`
  - `ctype_digit`
  - `ctype_graph`
  - `ctype_lower`
  - `ctype_print`
  - `ctype_punct`
  - `ctype_space`
  - `ctype_upper`
  - `ctype_xdigit`
  - `is_countable`
  - `hrtime`
  - `array_key_first`
  - `array_key_last`
  - `msgfmt_format_message`
  - `idn_to_ascii`
  - `idn_to_utf8`

**Classes:**
  - `APCUIterator`
  - `SessionUpdateTimestampHandlerInterface`
  - `ArithmeticError`
  - `AssertionError`
  - `DivisionByZeroError`
  - `Error`
  - `ParseError`
  - `TypeError`
  - `Collator`
  - `NumberFormatter`
  - `Locale`
  - `IntlDateFormatter`
  - `Normalizer`
  - `Throwable`

**Constants:**
  - `PASSWORD_BCRYPT`
  - `PASSWORD_DEFAULT`
  - `PASSWORD_BCRYPT_DEFAULT_COST`
  - `PHP_INT_MIN`
  - `PHP_OS_FAMILY`
  - `ICONV_IMPL`
  - `ICONV_VERSION`
  - `ICONV_MIME_DECODE_STRICT`
  - `ICONV_MIME_DECODE_CONTINUE_ON_ERROR`
  - `U_IDNA_PROHIBITED_ERROR`
  - `U_IDNA_ERROR_START`
  - `U_IDNA_UNASSIGNED_ERROR`
  - `U_IDNA_CHECK_BIDI_ERROR`
  - `U_IDNA_STD3_ASCII_RULES_ERROR`
  - `U_IDNA_ACE_PREFIX_ERROR`
  - `U_IDNA_VERIFICATION_ERROR`
  - `U_IDNA_LABEL_TOO_LONG_ERROR`
  - `U_IDNA_ZERO_LENGTH_LABEL_ERROR`
  - `U_IDNA_DOMAIN_NAME_TOO_LONG_ERROR`
  - `U_IDNA_ERROR_LIMIT`
  - `U_STRINGPREP_PROHIBITED_ERROR`
  - `U_STRINGPREP_UNASSIGNED_ERROR`
  - `U_STRINGPREP_CHECK_BIDI_ERROR`
  - `IDNA_DEFAULT`
  - `IDNA_ALLOW_UNASSIGNED`
  - `IDNA_USE_STD3_RULES`
  - `IDNA_CHECK_BIDI`
  - `IDNA_CHECK_CONTEXTJ`
  - `IDNA_NONTRANSITIONAL_TO_ASCII`
  - `IDNA_NONTRANSITIONAL_TO_UNICODE`
  - `INTL_IDNA_VARIANT_2003`
  - `INTL_IDNA_VARIANT_UTS46`
  - `IDNA_ERROR_EMPTY_LABEL`
  - `IDNA_ERROR_LABEL_TOO_LONG`
  - `IDNA_ERROR_DOMAIN_NAME_TOO_LONG`
  - `IDNA_ERROR_LEADING_HYPHEN`
  - `IDNA_ERROR_TRAILING_HYPHEN`
  - `IDNA_ERROR_HYPHEN_3_4`
  - `IDNA_ERROR_LEADING_COMBINING_MARK`
  - `IDNA_ERROR_DISALLOWED`
  - `IDNA_ERROR_PUNYCODE`
  - `IDNA_ERROR_LABEL_HAS_DOT`
  - `IDNA_ERROR_INVALID_ACE_LABEL`
  - `IDNA_ERROR_BIDI`
  - `IDNA_ERROR_CONTEXTJ`
  - `PHP_VERSION_ID`
  - `RANDOM_COMPAT_READ_BUFFER`

### <a id="symfony_intl"></a>Polyfill `symfony/intl` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/intl)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `ext-intl`, version __*__

**Functions:**
_None_

**Classes:**
  - `Locale`
  - `NumberFormatter`
  - `IntlDateFormatter`
  - `Collator`

**Constants:**
_None_

### <a id="symfony_polyfill"></a>Polyfill `symfony/polyfill` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `ext-mbstring`, version __*__
  - `ext-intl`, version __*__
  - `ext-iconv`, version __*__
  - `php`, version __5.* && 7.*__
  - `ext-apcu`, version __*__
  - `ext-ctype`, version __*__

**Functions:**
  - `apcu_add`
  - `apcu_delete`
  - `apcu_exists`
  - `apcu_fetch`
  - `apcu_store`
  - `apcu_cache_info`
  - `apcu_cas`
  - `apcu_clear_cache`
  - `apcu_dec`
  - `apcu_inc`
  - `apcu_sma_info`
  - `trait_exists`
  - `class_uses`
  - `hex2bin`
  - `session_register_shutdown`
  - `boolval`
  - `json_last_error_msg`
  - `array_column`
  - `hash_pbkdf2`
  - `password_hash`
  - `password_get_info`
  - `password_needs_rehash`
  - `password_verify`
  - `hash_equals`
  - `ldap_escape`
  - `gzopen`
  - `gzseek`
  - `gztell`
  - `intdiv`
  - `preg_replace_callback_array`
  - `error_clear_last`
  - `random_bytes`
  - `random_int`
  - `is_iterable`
  - `spl_object_id`
  - `stream_isatty`
  - `sapi_windows_vt100_support`
  - `utf8_encode`
  - `utf8_decode`
  - `iconv`
  - `iconv_get_encoding`
  - `iconv_set_encoding`
  - `iconv_mime_encode`
  - `iconv_mime_decode_headers`
  - `iconv_strlen`
  - `iconv_strpos`
  - `iconv_strrpos`
  - `iconv_substr`
  - `iconv_mime_decode`
  - `grapheme_extract`
  - `grapheme_stripos`
  - `grapheme_stristr`
  - `grapheme_strlen`
  - `grapheme_strpos`
  - `grapheme_strripos`
  - `grapheme_strrpos`
  - `grapheme_strstr`
  - `grapheme_substr`
  - `intl_is_failure`
  - `intl_get_error_code`
  - `intl_get_error_message`
  - `intl_error_name`
  - `mb_convert_encoding`
  - `mb_decode_mimeheader`
  - `mb_encode_mimeheader`
  - `mb_decode_numericentity`
  - `mb_encode_numericentity`
  - `mb_convert_case`
  - `mb_internal_encoding`
  - `mb_language`
  - `mb_list_encodings`
  - `mb_encoding_aliases`
  - `mb_check_encoding`
  - `mb_detect_encoding`
  - `mb_detect_order`
  - `mb_parse_str`
  - `mb_strlen`
  - `mb_strpos`
  - `mb_strtolower`
  - `mb_strtoupper`
  - `mb_substitute_character`
  - `mb_substr`
  - `mb_stripos`
  - `mb_stristr`
  - `mb_strrchr`
  - `mb_strrichr`
  - `mb_strripos`
  - `mb_strrpos`
  - `mb_strstr`
  - `mb_get_info`
  - `mb_http_output`
  - `mb_strwidth`
  - `mb_substr_count`
  - `mb_output_handler`
  - `mb_http_input`
  - `mb_convert_variables`
  - `mb_ord`
  - `mb_chr`
  - `mb_scrub`
  - `ctype_alnum`
  - `ctype_alpha`
  - `ctype_cntrl`
  - `ctype_digit`
  - `ctype_graph`
  - `ctype_lower`
  - `ctype_print`
  - `ctype_punct`
  - `ctype_space`
  - `ctype_upper`
  - `ctype_xdigit`
  - `is_countable`
  - `hrtime`
  - `array_key_first`
  - `array_key_last`
  - `msgfmt_format_message`
  - `idn_to_ascii`
  - `idn_to_utf8`

**Classes:**
  - `APCUIterator`
  - `SessionUpdateTimestampHandlerInterface`
  - `ArithmeticError`
  - `AssertionError`
  - `DivisionByZeroError`
  - `Error`
  - `ParseError`
  - `TypeError`
  - `Collator`
  - `NumberFormatter`
  - `Locale`
  - `IntlDateFormatter`
  - `Normalizer`

**Constants:**
  - `PASSWORD_BCRYPT`
  - `PASSWORD_DEFAULT`
  - `PASSWORD_BCRYPT_DEFAULT_COST`
  - `PHP_INT_MIN`
  - `PHP_OS_FAMILY`
  - `ICONV_IMPL`
  - `ICONV_VERSION`
  - `ICONV_MIME_DECODE_STRICT`
  - `ICONV_MIME_DECODE_CONTINUE_ON_ERROR`
  - `U_IDNA_PROHIBITED_ERROR`
  - `U_IDNA_ERROR_START`
  - `U_IDNA_UNASSIGNED_ERROR`
  - `U_IDNA_CHECK_BIDI_ERROR`
  - `U_IDNA_STD3_ASCII_RULES_ERROR`
  - `U_IDNA_ACE_PREFIX_ERROR`
  - `U_IDNA_VERIFICATION_ERROR`
  - `U_IDNA_LABEL_TOO_LONG_ERROR`
  - `U_IDNA_ZERO_LENGTH_LABEL_ERROR`
  - `U_IDNA_DOMAIN_NAME_TOO_LONG_ERROR`
  - `U_IDNA_ERROR_LIMIT`
  - `U_STRINGPREP_PROHIBITED_ERROR`
  - `U_STRINGPREP_UNASSIGNED_ERROR`
  - `U_STRINGPREP_CHECK_BIDI_ERROR`
  - `IDNA_DEFAULT`
  - `IDNA_ALLOW_UNASSIGNED`
  - `IDNA_USE_STD3_RULES`
  - `IDNA_CHECK_BIDI`
  - `IDNA_CHECK_CONTEXTJ`
  - `IDNA_NONTRANSITIONAL_TO_ASCII`
  - `IDNA_NONTRANSITIONAL_TO_UNICODE`
  - `INTL_IDNA_VARIANT_2003`
  - `INTL_IDNA_VARIANT_UTS46`
  - `IDNA_ERROR_EMPTY_LABEL`
  - `IDNA_ERROR_LABEL_TOO_LONG`
  - `IDNA_ERROR_DOMAIN_NAME_TOO_LONG`
  - `IDNA_ERROR_LEADING_HYPHEN`
  - `IDNA_ERROR_TRAILING_HYPHEN`
  - `IDNA_ERROR_HYPHEN_3_4`
  - `IDNA_ERROR_LEADING_COMBINING_MARK`
  - `IDNA_ERROR_DISALLOWED`
  - `IDNA_ERROR_PUNYCODE`
  - `IDNA_ERROR_LABEL_HAS_DOT`
  - `IDNA_ERROR_INVALID_ACE_LABEL`
  - `IDNA_ERROR_BIDI`
  - `IDNA_ERROR_CONTEXTJ`

### <a id="symfony_polyfill-apcu"></a>Polyfill `symfony/polyfill-apcu` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-apcu)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__
  - `ext-apc`, version __*__

**Replace:**
  - `ext-apcu`, version __*__

**Functions:**
  - `apcu_add`
  - `apcu_delete`
  - `apcu_exists`
  - `apcu_fetch`
  - `apcu_store`
  - `apcu_cache_info`
  - `apcu_cas`
  - `apcu_clear_cache`
  - `apcu_dec`
  - `apcu_inc`
  - `apcu_sma_info`

**Classes:**
  - `APCUIterator`

**Constants:**
_None_

### <a id="symfony_polyfill-ctype"></a>Polyfill `symfony/polyfill-ctype` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-ctype)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `ext-ctype`, version __*__

**Functions:**
  - `ctype_alnum`
  - `ctype_alpha`
  - `ctype_cntrl`
  - `ctype_digit`
  - `ctype_graph`
  - `ctype_lower`
  - `ctype_print`
  - `ctype_punct`
  - `ctype_space`
  - `ctype_upper`
  - `ctype_xdigit`

**Classes:**
_None_

**Constants:**
_None_

### <a id="symfony_polyfill-iconv"></a>Polyfill `symfony/polyfill-iconv` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-iconv)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `ext-iconv`, version __*__

**Functions:**
  - `iconv`
  - `iconv_get_encoding`
  - `iconv_set_encoding`
  - `iconv_mime_encode`
  - `iconv_mime_decode_headers`
  - `iconv_strlen`
  - `iconv_strpos`
  - `iconv_strrpos`
  - `iconv_substr`
  - `iconv_mime_decode`

**Classes:**
_None_

**Constants:**
  - `ICONV_IMPL`
  - `ICONV_VERSION`
  - `ICONV_MIME_DECODE_STRICT`
  - `ICONV_MIME_DECODE_CONTINUE_ON_ERROR`

### <a id="symfony_polyfill-intl-grapheme"></a>Polyfill `symfony/polyfill-intl-grapheme` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-intl-grapheme)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `ext-intl`, version __*__

**Functions:**
  - `grapheme_extract`
  - `grapheme_stripos`
  - `grapheme_stristr`
  - `grapheme_strlen`
  - `grapheme_strpos`
  - `grapheme_strripos`
  - `grapheme_strrpos`
  - `grapheme_strstr`
  - `grapheme_substr`

**Classes:**
_None_

**Constants:**
_None_

### <a id="symfony_polyfill-intl-icu"></a>Polyfill `symfony/polyfill-intl-icu` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-intl-icu)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `ext-intl`, version __*__

**Functions:**
  - `intl_is_failure`
  - `intl_get_error_code`
  - `intl_get_error_message`
  - `intl_error_name`

**Classes:**
  - `Collator`
  - `NumberFormatter`
  - `Locale`
  - `IntlDateFormatter`

**Constants:**
_None_

### <a id="symfony_polyfill-intl-idn"></a>Polyfill `symfony/polyfill-intl-idn` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-intl-idn)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `ext-intl`, version __*__

**Functions:**
  - `idn_to_ascii`
  - `idn_to_utf8`

**Classes:**
_None_

**Constants:**
  - `U_IDNA_PROHIBITED_ERROR`
  - `U_IDNA_ERROR_START`
  - `U_IDNA_UNASSIGNED_ERROR`
  - `U_IDNA_CHECK_BIDI_ERROR`
  - `U_IDNA_STD3_ASCII_RULES_ERROR`
  - `U_IDNA_ACE_PREFIX_ERROR`
  - `U_IDNA_VERIFICATION_ERROR`
  - `U_IDNA_LABEL_TOO_LONG_ERROR`
  - `U_IDNA_ZERO_LENGTH_LABEL_ERROR`
  - `U_IDNA_DOMAIN_NAME_TOO_LONG_ERROR`
  - `U_IDNA_ERROR_LIMIT`
  - `U_STRINGPREP_PROHIBITED_ERROR`
  - `U_STRINGPREP_UNASSIGNED_ERROR`
  - `U_STRINGPREP_CHECK_BIDI_ERROR`
  - `IDNA_DEFAULT`
  - `IDNA_ALLOW_UNASSIGNED`
  - `IDNA_USE_STD3_RULES`
  - `IDNA_CHECK_BIDI`
  - `IDNA_CHECK_CONTEXTJ`
  - `IDNA_NONTRANSITIONAL_TO_ASCII`
  - `IDNA_NONTRANSITIONAL_TO_UNICODE`
  - `INTL_IDNA_VARIANT_2003`
  - `INTL_IDNA_VARIANT_UTS46`
  - `IDNA_ERROR_EMPTY_LABEL`
  - `IDNA_ERROR_LABEL_TOO_LONG`
  - `IDNA_ERROR_DOMAIN_NAME_TOO_LONG`
  - `IDNA_ERROR_LEADING_HYPHEN`
  - `IDNA_ERROR_TRAILING_HYPHEN`
  - `IDNA_ERROR_HYPHEN_3_4`
  - `IDNA_ERROR_LEADING_COMBINING_MARK`
  - `IDNA_ERROR_DISALLOWED`
  - `IDNA_ERROR_PUNYCODE`
  - `IDNA_ERROR_LABEL_HAS_DOT`
  - `IDNA_ERROR_INVALID_ACE_LABEL`
  - `IDNA_ERROR_BIDI`
  - `IDNA_ERROR_CONTEXTJ`

### <a id="symfony_polyfill-intl-messageformatter"></a>Polyfill `symfony/polyfill-intl-messageformatter` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-intl-messageformatter)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `ext-intl`, version __*__

**Functions:**
  - `msgfmt_format_message`

**Classes:**
_None_

**Constants:**
_None_

### <a id="symfony_polyfill-intl-normalizer"></a>Polyfill `symfony/polyfill-intl-normalizer` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-intl-normalizer)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `ext-intl`, version __*__

**Functions:**
_None_

**Classes:**
  - `Normalizer`

**Constants:**
_None_

### <a id="symfony_polyfill-mbstring"></a>Polyfill `symfony/polyfill-mbstring` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-mbstring)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `ext-mbstring`, version __*__

**Functions:**
  - `mb_convert_encoding`
  - `mb_decode_mimeheader`
  - `mb_encode_mimeheader`
  - `mb_decode_numericentity`
  - `mb_encode_numericentity`
  - `mb_convert_case`
  - `mb_internal_encoding`
  - `mb_language`
  - `mb_list_encodings`
  - `mb_encoding_aliases`
  - `mb_check_encoding`
  - `mb_detect_encoding`
  - `mb_detect_order`
  - `mb_parse_str`
  - `mb_strlen`
  - `mb_strpos`
  - `mb_strtolower`
  - `mb_strtoupper`
  - `mb_substitute_character`
  - `mb_substr`
  - `mb_stripos`
  - `mb_stristr`
  - `mb_strrchr`
  - `mb_strrichr`
  - `mb_strripos`
  - `mb_strrpos`
  - `mb_strstr`
  - `mb_get_info`
  - `mb_http_output`
  - `mb_strwidth`
  - `mb_substr_count`
  - `mb_output_handler`
  - `mb_http_input`
  - `mb_convert_variables`
  - `mb_ord`
  - `mb_chr`
  - `mb_scrub`

**Classes:**
_None_

**Constants:**
_None_

### <a id="symfony_polyfill-php54"></a>Polyfill `symfony/polyfill-php54` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-php54)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `php`, version __5.4.*__

**Functions:**
  - `trait_exists`
  - `class_uses`
  - `hex2bin`
  - `session_register_shutdown`

**Classes:**
_None_

**Constants:**
_None_

### <a id="symfony_polyfill-php55"></a>Polyfill `symfony/polyfill-php55` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-php55)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `php`, version __5.5.*__

**Functions:**
  - `boolval`
  - `json_last_error_msg`
  - `array_column`
  - `hash_pbkdf2`
  - `password_hash`
  - `password_get_info`
  - `password_needs_rehash`
  - `password_verify`

**Classes:**
_None_

**Constants:**
  - `PASSWORD_BCRYPT`
  - `PASSWORD_DEFAULT`
  - `PASSWORD_BCRYPT_DEFAULT_COST`

### <a id="symfony_polyfill-php56"></a>Polyfill `symfony/polyfill-php56` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-php56)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `php`, version __5.6.*__

**Functions:**
  - `hash_equals`
  - `ldap_escape`
  - `gzopen`
  - `gzseek`
  - `gztell`

**Classes:**
_None_

**Constants:**
_None_

### <a id="symfony_polyfill-php70"></a>Polyfill `symfony/polyfill-php70` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-php70)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `php`, version __7.0.*__

**Functions:**
  - `intdiv`
  - `preg_replace_callback_array`
  - `error_clear_last`
  - `random_bytes`
  - `random_int`

**Classes:**
  - `SessionUpdateTimestampHandlerInterface`
  - `ArithmeticError`
  - `AssertionError`
  - `DivisionByZeroError`
  - `Error`
  - `ParseError`
  - `TypeError`

**Constants:**
  - `PHP_INT_MIN`

### <a id="symfony_polyfill-php71"></a>Polyfill `symfony/polyfill-php71` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-php71)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `php`, version __7.1.*__

**Functions:**
  - `is_iterable`

**Classes:**
_None_

**Constants:**
_None_

### <a id="symfony_polyfill-php72"></a>Polyfill `symfony/polyfill-php72` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-php72)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `php`, version __7.2.*__

**Functions:**
  - `spl_object_id`
  - `stream_isatty`
  - `sapi_windows_vt100_support`
  - `utf8_encode`
  - `utf8_decode`

**Classes:**
_None_

**Constants:**
  - `PHP_OS_FAMILY`

### <a id="symfony_polyfill-php73"></a>Polyfill `symfony/polyfill-php73` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/symfony/polyfill-php73)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3__

**Replace:**
  - `php`, version __7.3.*__

**Functions:**
  - `is_countable`
  - `hrtime`
  - `array_key_first`
  - `array_key_last`

**Classes:**
_None_

**Constants:**
_None_

### <a id="tea_future"></a>Polyfill `tea/future` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/tea/future)
**Type:** `polyfill`

**Require:**
  - `php`, version __5.3.3__

**Replace:**
  - `php`, version __5.4 && 5.5 && 5.6 && 7.0 && 7.1__

**Functions:**
  - `trait_exists`
  - `class_uses`
  - `hex2bin`
  - `session_register_shutdown`
  - `boolval`
  - `json_last_error_msg`
  - `array_column`
  - `hash_pbkdf2`
  - `password_hash`
  - `password_get_info`
  - `password_needs_rehash`
  - `password_verify`
  - `hash_equals`
  - `ldap_escape`
  - `gzopen`
  - `gzseek`
  - `gztell`
  - `intdiv`
  - `preg_replace_callback_array`
  - `error_clear_last`
  - `random_bytes`
  - `random_int`
  - `is_iterable`

**Classes:**
  - `SessionUpdateTimestampHandlerInterface`
  - `ArithmeticError`
  - `AssertionError`
  - `DivisionByZeroError`
  - `Error`
  - `ParseError`
  - `TypeError`

**Constants:**
  - `PASSWORD_BCRYPT`
  - `PASSWORD_DEFAULT`
  - `PASSWORD_BCRYPT_DEFAULT_COST`
  - `PHP_INT_MIN`

### <a id="voku_portable-utf8"></a>Polyfill `voku/portable-utf8` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/voku/portable-utf8)
**Type:** `polyfill`

**Require:**
  - `php`, version __7.0__

**Replace:**
  - `php`, version __7.2.*__
  - `ext-iconv`, version __*__
  - `ext-mbstring`, version __*__
  - `ext-intl`, version __*__

**Functions:**
  - `spl_object_id`
  - `stream_isatty`
  - `sapi_windows_vt100_support`
  - `utf8_encode`
  - `utf8_decode`
  - `iconv`
  - `iconv_get_encoding`
  - `iconv_set_encoding`
  - `iconv_mime_encode`
  - `iconv_mime_decode_headers`
  - `iconv_strlen`
  - `iconv_strpos`
  - `iconv_strrpos`
  - `iconv_substr`
  - `iconv_mime_decode`
  - `mb_convert_encoding`
  - `mb_decode_mimeheader`
  - `mb_encode_mimeheader`
  - `mb_decode_numericentity`
  - `mb_encode_numericentity`
  - `mb_convert_case`
  - `mb_internal_encoding`
  - `mb_language`
  - `mb_list_encodings`
  - `mb_encoding_aliases`
  - `mb_check_encoding`
  - `mb_detect_encoding`
  - `mb_detect_order`
  - `mb_parse_str`
  - `mb_strlen`
  - `mb_strpos`
  - `mb_strtolower`
  - `mb_strtoupper`
  - `mb_substitute_character`
  - `mb_substr`
  - `mb_stripos`
  - `mb_stristr`
  - `mb_strrchr`
  - `mb_strrichr`
  - `mb_strripos`
  - `mb_strrpos`
  - `mb_strstr`
  - `mb_get_info`
  - `mb_http_output`
  - `mb_strwidth`
  - `mb_substr_count`
  - `mb_output_handler`
  - `mb_http_input`
  - `mb_convert_variables`
  - `mb_ord`
  - `mb_chr`
  - `mb_scrub`
  - `grapheme_extract`
  - `grapheme_stripos`
  - `grapheme_stristr`
  - `grapheme_strlen`
  - `grapheme_strpos`
  - `grapheme_strripos`
  - `grapheme_strrpos`
  - `grapheme_strstr`
  - `grapheme_substr`

**Classes:**
  - `Normalizer`

**Constants:**
  - `PHP_OS_FAMILY`
  - `ICONV_IMPL`
  - `ICONV_VERSION`
  - `ICONV_MIME_DECODE_STRICT`
  - `ICONV_MIME_DECODE_CONTINUE_ON_ERROR`

### <a id="wizacha_new-relic-polyfill"></a>Polyfill `wizacha/new-relic-polyfill` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/wizacha/new-relic-polyfill)
**Type:** `stub`

**Require:**
_None_

**Replace:**
  - `ext-newrelic`, version __*__

**Functions:**
  - `newrelic_add_custom_parameter`
  - `newrelic_add_custom_tracer`
  - `newrelic_background_job`
  - `newrelic_capture_params`
  - `newrelic_custom_metric`
  - `newrelic_disable_autorum`
  - `newrelic_end_of_transaction`
  - `newrelic_end_transaction`
  - `newrelic_get_browser_timing_footer`
  - `newrelic_get_browser_timing_header`
  - `newrelic_ignore_apdex`
  - `newrelic_ignore_transaction`
  - `newrelic_name_transaction`
  - `newrelic_notice_error`
  - `newrelic_record_custom_event`
  - `newrelic_record_datastore_segment`
  - `newrelic_set_appname`
  - `newrelic_set_user_attributes`
  - `newrelic_start_transaction`

**Classes:**
_None_

**Constants:**
_None_

### <a id="wizaplace_sqreen-polyfill"></a>Polyfill `wizaplace/sqreen-polyfill` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/wizaplace/sqreen-polyfill)
**Type:** `stub`

**Require:**
_None_

**Replace:**
  - `ext-sqreen`, version __*__

**Functions:**
  - `sqreen\auth_track`
  - `sqreen\signup_track`
  - `sqreen\identify`

**Classes:**
_None_

**Constants:**
_None_

### <a id="wyrihaximus_msgpack"></a>Polyfill `wyrihaximus/msgpack` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/wyrihaximus/msgpack)
**Type:** `polyfill`

**Require:**
  - `php`, version __7.0 || 7.1.1__

**Replace:**
  - `ext-msgpack`, version __*__

**Functions:**
  - `msgpack_pack`
  - `msgpack_unpack`

**Classes:**
_None_

**Constants:**
_None_

### <a id="yuloh_bccomp-polyfill"></a>Polyfill `yuloh/bccomp-polyfill` [<img src="https://packagist.org/apple-touch-icon.png" height="32" width="32"/>](https://packagist.org/packages/yuloh/bccomp-polyfill)
**Type:** `polyfill`

**Require:**
_None_

**Replace:**
  - `ext-bcmath`, version __*__

**Functions:**
  - `bccomp`

**Classes:**
_None_

**Constants:**
_None_
