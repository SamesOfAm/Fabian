<script>
    document.getElementById('header-navigation-list').children[2].outerHTML = '<a class="header-logo" href="{{link_url::2}}"><img src="files/assets/layout/logo.svg"></a>';

    function stickNavigation() {
        let navigation = document.querySelector('.header-navigation');
        let endOfHeader = document.querySelector('#container');
        let navigationOffset = endOfHeader.offsetTop - 50;
        let scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
        if(scrollTop >= navigationOffset && !stuck) {
            navigation.classList.add('sticky');
            stuck = true;
            document.getElementById('header-navigation-list').children[2].outerHTML = '<a class="header-logo-sticky" href="{{link_url::2}}"><img src="files/assets/layout/schriftzug.svg"></a>';
        } else if(scrollTop < navigationOffset && stuck) {
            navigation.classList.remove('sticky');
            stuck = false;
            document.getElementById('header-navigation-list').children[2].outerHTML = '<a class="header-logo" href="{{link_url::2}}"><img src="files/assets/layout/logo-fabian-dachsanierung.svg"></a>';
        }
    }
    let stuck = false;
    window.addEventListener("scroll", stickNavigation);
</script>