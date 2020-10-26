var staticCacheName = "pwa-v3" + new Date().getTime();
var filesToCache = [
    '/image/ilovemycountrylogo.png',
    '/image/cropped-logo.jpg',

    '/image/About/About-img-1.png',
    '/image/About/About-img-2.png',
    '/image/About/about-img-3.png',
    '/image/About/download.png',
    '/image/About/advocacy-team/Maam-Abby.png',
    '/image/About/advocacy-team/Maam-Aiza.png',
    '/image/About/advocacy-team/Maam-Alina.png',
    '/image/About/advocacy-team/Maam-Cecile.png',
    '/image/About/advocacy-team/Maam-Jennifer.png',
    '/image/About/advocacy-team/Sir-Sison.png',
    '/image/About/advocacy-team/Sir-Waw.png',

    '/image/pas/1.png',
    '/image/pas/2.png',
    '/image/pas/3.png',
    '/image/pas/4.png',
    '/image/pas/5.png',
    '/image/pas/6.png',
    '/image/pas/7.png',
    '/image/pas/8.png',
    '/image/pas/9.png',
    '/image/pas/10.png',
    '/image/pas/11.png',
    '/image/pas/12.png',
    '/image/pas/14.png',
    '/image/pas/15.jpg',
    '/image/pas/16.jpg',
    '/image/pas/17.jpg',
    '/image/pas/18.png',
    '/image/pas/19.jpg',
    '/image/pas/20.png',
    '/image/pas/21.jpg',
    '/image/pas/22.png',
    '/image/pas/23.png',
    '/image/pas/24.jpg',
    '/image/pas/25.png',
    '/image/pas/26.jpg',
    '/image/pas/27.png',
    '/image/pas/28.jpg',
    '/image/pas/29.jpg',
    '/image/pas/30.png',
    '/image/pas/31.jpg',
    '/image/pas/32.png',
    '/image/pas/33.png',
    '/image/pas/34.jpg',
    '/image/pas/35.png',
    '/image/pas/36.png',
    '/image/pas/37.jpg',
    '/image/pas/38.png',
    '/image/pas/39.png',
    '/image/pas/40.png',
    '/image/pas/41.png',
    '/image/pas/42.jpg',
    '/image/pas/43.jpg',
    '/image/pas/44.png',
    '/image/pas/45.png',
    '/image/pas/46.png',
    '/image/pas/47.jpg',
    '/image/pas/48.png',
    '/image/pas/49.jpg',
    '/image/pas/50.jpg',
    '/image/pas/51.png',
    '/image/pas/52.png',
    '/image/pas/53.jpg',
    '/image/pas/54.png',
    '/image/pas/55.jpg',
    '/image/pas/56.png',
    '/image/pas/57.jpg',
    '/image/pas/58.jpg',

    '/image/Programs/programs-1.jpg',
    '/image/Programs/programs-2.png',
    '/image/Programs/programs-3.png',
    '/image/Programs/programs-4.jpg',
    '/image/Programs/mca/mca-1.png',
    '/image/Programs/mca/mca-2.png',
    '/image/Programs/mca/mca-3.png',

    '/image/volunteer/vol-1.jpg',
    '/image/volunteer/vol-2.png',
    '/image/volunteer/vol-3.jpg',

    '/image/heroic-run2018/1.png',
    '/image/heroic-run2018/2.png',
    '/image/heroic-run2018/3.png',
    '/image/heroic-run2018/4.png',
    '/image/heroic-run2018/5.png',
    '/image/heroic-run2018/6.png',
    '/image/heroic-run2018/7.png',
    '/image/heroic-run2018/8.png',
    '/image/heroic-run2018/9.png',
    '/image/heroic-run2018/10.png',
    '/image/heroic-run2018/11.png',
    '/image/heroic-run2018/12.png',

    '/image/taal-volcano-relief-operation/1.jpg/',
    '/image/taal-volcano-relief-operation/2.jpg/',
    '/image/taal-volcano-relief-operation/3.jpg/',
    '/image/taal-volcano-relief-operation/4.jpg/',
    '/image/taal-volcano-relief-operation/5.jpg/',
    '/image/taal-volcano-relief-operation/6.jpg/',
    '/image/taal-volcano-relief-operation/7.jpg/',
    '/image/taal-volcano-relief-operation/8.jpg/',

    '/image/rfffp2019/rfffp2019img-1.jpg/',
    '/image/rfffp2019/rfffp2019img-2.jpg/',
    '/image/rfffp2019/rfffp2019img-3.jpg/',
    '/image/rfffp2019/rfffp2019img-4.jpg/',
    '/image/rfffp2019/rfffp2019img-5.jpg/',
    '/image/rfffp2019/rfffp2019img-6.jpg/',
    '/image/rfffp2019/rfffp2019img-7.jpg/',
    '/image/rfffp2019/rfffp2019img-8.jpg/',
    '/image/rfffp2019/rfffp2019img-9.jpg/',
    '/image/rfffp2019/rfffp2019img-10.jpg/',
    '/image/rfffp2019/rfffp2019img-11.jpg/',
    '/image/rfffp2019/rfffp2019img-12.jpg/',
    '/image/rfffp2019/rfffp2019img-13.jpg/',
    '/image/rfffp2019/rfffp2019img-14.jpg/',
    '/image/rfffp2019/rfffp2019img-15.jpg/',

    '/image/souvenir/souvenir-1.png/',
    '/image/souvenir/souvenir-2.png/',
    '/image/souvenir/souvenir-3.png/',
    '/image/souvenir/souvenir-4.png/',
];
// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
});
// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});
// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
            .catch(() => {
                return caches.match('offline');
            })
    )
});