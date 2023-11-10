document.querySelector('.share-page').addEventListener('click', function(e) {
    e.preventDefault();
    const title  = encodeURIComponent(document.title);

    sharePaGE  = encodeURIComponent(this.getAttribute('data-url'));
     const message =  "https://wa.me/?text=" + title + " " + sharePaGE ;

     var top = window.screenTop || window.screenY
     var left =window.screenLeft ||  window.screenX ;

    var width  = window.innerWidth || document.documentElement.clientWidth;
    var hauteur  = window.innerHeight || document.documentElement.clientHeight;

    var widthPage = 640 ;
    var heightPage  =  320;
    var popupLeft   = left + width /2 -widthPage / 2;
    var popupTop  = top +  hauteur /2 - heightPage / 2

    window.open(message, "partage", 'scrollbars=yes width='+widthPage + ', height=' + heightPage +', top=' + popupTop+ ' , left='+ popupLeft );
});



document.querySelector('.share-facebook').addEventListener('click', function(e) {
    e.preventDefault();
    const title  = encodeURIComponent(document.title);

    sharePaGE  = encodeURIComponent(this.getAttribute('data-url'));
     const message = "https://www.facebook.com/sharer/sharer.php?u="+sharePaGE;

     var top = window.screenTop || window.screenY
     var left =window.screenLeft ||  window.screenX ;

    var width  = window.innerWidth || document.documentElement.clientWidth;
    var hauteur  = window.innerHeight || document.documentElement.clientHeight;

    var widthPage = 640 ;
    var heightPage  =  320;
    var popupLeft   = left + width /2 -widthPage / 2;
    var popupTop  = top +  hauteur /2 - heightPage / 2

    window.open(message, "partage", 'scrollbars=yes width='+widthPage + ', height=' + heightPage +', top=' + popupTop+ ' , left='+ popupLeft );
});


document.querySelector('.share-telegram').addEventListener('click', function(e) {
    e.preventDefault();
    const title  = encodeURIComponent(document.title);

    sharePaGE  = encodeURIComponent(this.getAttribute('data-url'));
     const message ="https://telegram.me/share/url?url=" +sharePaGE;

     var top = window.screenTop || window.screenY
     var left =window.screenLeft ||  window.screenX ;

    var width  = window.innerWidth || document.documentElement.clientWidth;
    var hauteur  = window.innerHeight || document.documentElement.clientHeight;

    var widthPage = 640 ;
    var heightPage  =  320;
    var popupLeft   = left + width /2 -widthPage / 2;
    var popupTop  = top +  hauteur /2 - heightPage / 2

    window.open(message, "partage", 'scrollbars=yes width='+widthPage + ', height=' + heightPage +', top=' + popupTop+ ' , left='+ popupLeft );
});



document.querySelector('.share-linkdln').addEventListener('click', function(e) {
    e.preventDefault();
    const title  = encodeURIComponent(document.title);

    sharePaGE  = encodeURIComponent(this.getAttribute('data-url'));
    //  const message =  "https://wa.me/?text=" + title + " " + sharePaGE ;

    // const message = "https://www.linkedin.com/shareArticle?url={https://vtp-market.com/boutique-annonceurs}&title={Partage}&summary={moncode}&source={Carriereproplus}";

     var top = window.screenTop || window.screenY
     var left =window.screenLeft ||  window.screenX ;

    var width  = window.innerWidth || document.documentElement.clientWidth;
    var hauteur  = window.innerHeight || document.documentElement.clientHeight;

    var widthPage = 640 ;
    var heightPage  =  320;
    var popupLeft   = left + width /2 -widthPage / 2;
    var popupTop  = top +  hauteur /2 - heightPage / 2

    window.open(message, "partage", 'scrollbars=yes width='+widthPage + ', height=' + heightPage +', top=' + popupTop+ ' , left='+ popupLeft );
});


