 <script type="text/javascript">
        var arrLang = new Array();
        arrLang['en'] = new Array();
        arrLang['hi'] = new Array();

        arrLang['en']['n1'] = 'Home';
        arrLang['en']['n2'] = 'Shop';
        arrLang['en']['n3'] = 'Services';
        arrLang['en']['n4'] = 'Subscriptions';
        arrLang['en']['n5'] = 'Contact';
        arrLang['en']['n6'] = 'About';
        arrLang['en']['n7'] = 'Blog';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';




        
        arrLang['hi']['n1'] = 'होम'
        arrLang['hi']['n2'] = 'दुकान';
        arrLang['hi']['n3'] = 'सेवाएं';
        arrLang['hi']['n4'] = 'अंशदान';
        arrLang['hi']['n5'] = 'संपर्क';
        arrLang['hi']['n6'] = 'हमारे बारे में';
        arrLang['hi']['n7'] = 'ब्लॉग';
        arrLang['hi'][''] = '';
        arrLang['hi'][''] = '';
        arrLang['hi'][''] = '';
        arrLang['hi'][''] = '';
        arrLang['hi'][''] = '';
        arrLang['hi'][''] = '';
        arrLang['hi'][''] = '';
        arrLang['hi'][''] = '';
        arrLang['hi'][''] = '';












      
        $(document).ready(function (e) {
            $('.translate').click(function () {
                var lang = $(this).attr('id');

                $('.lang').each(function (index,element) {
                    $(this).text(arrLang[lang][$(this).attr('key')]);
                });
            });
        });
</script>