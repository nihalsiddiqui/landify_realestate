<!-- jquery latest version -->
<script src="{{ asset("npls/js/vendor/jquery-1.12.0.min.js") }}"></script>
<!-- bootstrap js -->
<script src="{{ asset("npls/js/bootstrap.min.js") }}"></script>
<!-- owl.carousel js -->
<script src="{{ asset("npls/js/owl.carousel.min.js") }}"></script>
<!-- meanmenu js -->
<script src="{{ asset("npls/js/jquery.meanmenu.js") }}"></script>
<!-- jquery-ui js -->
<script src="{{ asset("npls/js/jquery-ui.min.js") }}"></script>
<!-- wow js -->
<script src="{{ asset("npls/js/wow.min.js") }}"></script>
<!-- plugins js -->
<script src="{{ asset("npls/js/plugins.js") }}"></script>
<!-- Nivo slider js-->
<script src="{{ asset("npls/inc/custom-slider/js/jquery.nivo.slider.js") }}" type="text/javascript"></script>
<script src="{{ asset("npls/inc/custom-slider/home.js") }}" type="text/javascript"></script>
<!-- jquery.fancybox.pack js -->
<script src="{{ asset("npls/inc/fancybox/jquery.fancybox.pack.js") }}"></script>
<!-- bxslider JS -->
<script src="{{ asset("npls/js/jquery.bxslider.min.js") }}"></script>
<!--  Nice Select js -->
<script src="{{ asset("npls/js/jquery.nice-select.min.js") }}" type="text/javascript"></script>
<!-- slick JS -->
<script src="{{ asset("npls/js/slick.min.js") }}"></script>
<!--  jquery isotope -->
<script src="{{ asset("npls/js/isotope.pkgd.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("npls/js/imagesloaded.pkgd.min.js") }}" type="text/javascript"></script>
<!-- jquery.counterup js -->
<script src="{{ asset("npls/js/jquery.counterup.min.js") }}"></script>
<script src="{{ asset("npls/js/waypoints.min.js") }}"></script>
<!-- Google Map -->


<!-- main js -->
<script src="{{ asset("npls/js/main.js") }}"></script>

<script>
    // set cookies for listings on heart click
    $('body').on('click', '.favourite-heart', function (e) {

        var favListings = getCookie('favourite_listings');
        var heartImage = 'blank-heart.png';

        if ((favListings == undefined) || (favListings == '')) {
            favListings = [];
            favListings.push($(this).data('id'));
            document.cookie = 'favourite_listings' + "=" + JSON.stringify(favListings);

            heartImage = 'heart.png';
            $(this).find('img').attr('src', '/npls/images/' + heartImage)
        } else {
            favListings = JSON.parse(favListings);
            if (!favListings.includes($(this).data('id'))) {
                favListings.push($(this).data('id'));
                document.cookie = 'favourite_listings' + "=" + JSON.stringify(favListings);

                heartImage = 'heart.png';

                $(this).find('img').attr('src', '/npls/images/' + heartImage)
            } else {
                favListings.pop($(this).data('id'));
                document.cookie = 'favourite_listings' + "=" + JSON.stringify(favListings);

                heartImage = 'blank-heart.png';
                $(this).find('img').attr('src', '/npls/images/' + heartImage)
            }
        }
    })

    // get cookies by name
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    const arr = x => Array.from(x);
    const num = x => Number(x) || 0;
    const str = x => String(x);
    const isEmpty = xs => xs.length === 0;
    const take = n => xs => xs.slice(0,n);
    const drop = n => xs => xs.slice(n);
    const reverse = xs => xs.slice(0).reverse();
    const comp = f => g => x => f (g (x));
    const not = x => !x;
    const chunk = n => xs =>
        isEmpty(xs) ? [] : [take(n)(xs), ...chunk (n) (drop (n) (xs))];

    // numToWords :: (Number a, String a) => a -> String
    let numToWords = n => {

        let a = [
            '', '1', '2', '3', '4',
            '5', '6', '7', '8', '9',
            '10', '11', '12', '13', '14',
            '15', '16', '17', '18', '19'
        ];

        let b = [
            '', '', '20', '30', '40',
            '50', '60', '70', '80', '90'
        ];
        let g = [
            '', 'thousand', 'million', 'billion', 'trillion', 'quadrillion',
            'quintillion', 'sextillion', 'septillion', 'octillion', 'nonillion'
        ];

        // this part is really nasty still
        // it might edit this again later to show how Monoids could fix this up
        let makeGroup = ([ones,tens,huns]) => {
            return [
                num(huns) === 0 ? '' : a[huns] + ' hundred ',
                num(ones) === 0 ? b[tens] : b[tens] && b[tens] + '-' || '',
                a[tens+ones] || a[ones]
            ].join('');
        };

        let thousand = (group,i) => group === '' ? group : `${group} ${g[i]}`;

        if (typeof n === 'number')
            return numToWords(String(n));
        else if (n === '0')
            return 'zero';
        else
            return comp (chunk(3)) (reverse) (arr(n))
                .map(makeGroup)
                .map(thousand)
                .filter(comp(not)(isEmpty))
                .reverse()
                .join(' ');
    };

    function ucwords(str,force){
        str=force ? str.toLowerCase() : str;
        return str.replace(/(\b)([a-zA-Z])/g,
            function(firstLetter){
                return   firstLetter.toUpperCase();
            });
    }

    $(document).ready(function () {
        var el = $('.convertNumToWords');
        el.text(ucwords(numToWords(parseInt(el.text()))), true);
    })

    function convertArea(type, area) {
        var convertion = [];
        if (type === 'marla') {
            convertion.push({ 'type': 'kanal', 'area': area / 20 })
            convertion.push({ 'type': 'acre', 'area': area / 160 })
            convertion.push({ 'type': 'square guz', 'area': area * 30.543 })
            convertion.push({ 'type': 'murabba', 'area': area * 0.0002499999999 })
            convertion.push({ 'type': 'square foot', 'area': area *  272})

            return convertion;
        } else if (type === 'kanal') {
            convertion.push({ 'type': 'marla', 'area': area * 20 })
            convertion.push({ 'type': 'acre', 'area': area / 8 })
            convertion.push({ 'type': 'square guz', 'area': area * 611 })
            convertion.push({ 'type': 'murabba', 'area': area * 0.004999999998 })
            convertion.push({ 'type': 'square foot', 'area': area * 5445})


            return convertion;
        } else if (type === 'acre') {
            convertion.push({ 'type': 'marla', 'area': area * 160 })
            convertion.push({ 'type': 'kanal', 'area': area * 8 })
            convertion.push({ 'type': 'square guz', 'area': area * 4887 })
            convertion.push({ 'type': 'murabba', 'area': area * 0.04 })
            convertion.push({ 'type': 'square foot', 'area': area * 43560})


            return convertion;
        } else if (type === 'square_guz') {
            convertion.push({ 'type': 'marla', 'area': area / 30.543 })
            convertion.push({ 'type': 'kanal', 'area': area / 8 })
            convertion.push({ 'type': 'acre', 'area': area * 0.0002066098507 })
            convertion.push({ 'type': 'murabba', 'area': area / 121001.007 })
            convertion.push({ 'type': 'square foot', 'area': area * 8.914})

            return convertion;
        } else if (type === 'murabba') {
            convertion.push({ 'type': 'marla', 'area': area * 4000.000001 })
            convertion.push({ 'type': 'kanal', 'area': area * 200.0000001 })
            convertion.push({ 'type': 'square guz', 'area': area * 121001.007 })
            convertion.push({ 'type': 'acre', 'area': area * 25 })
            convertion.push({ 'type': 'square foot', 'area': area * 1089000.96})


            return convertion;
        }

        return 'invalid input';
    }


</script>

