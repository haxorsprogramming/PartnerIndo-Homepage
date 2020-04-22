// window.alert("Test");
var divHome = new Vue({
    el : '#divHome',
    data : {
        menuHeader : [
            {teks : 'Home', link : '/'},
            {teks : 'Our Profile', link : '/profile'},
            {teks : 'Service', link : '/service'},
            {teks : 'Product', link : '/product'},
            {teks : 'News & Insight ', link : '/news-insight'},
            {teks : 'Career  ', link : '/career'},
            {teks : 'Contact us ', link : '/contact-us'},
        ]
    }
});

var divFooter = new Vue({
    el : '#divFooter',
    data : {
        menuFooter : [
            {teks : 'Home', link : '/'},
            {teks : 'Our Profile', link : '/profile'},
            {teks : 'Service', link : '/service'},
            {teks : 'Product', link : '/product'},
            {teks : 'News & Insight ', link : '/news-insight'},
            {teks : 'Career  ', link : '/career'},
            {teks : 'Contact us ', link : '/contact-us'},
        ]
    }
});