var jsEmbed;
document.getElementById("EmbedSocialIFrame") || ((jsEmbed = document.createElement("script")).id = "EmbedSocialIFrame", jsEmbed.src = "https://embedsocial.com/cdn/iframe.js", document.getElementsByTagName("body")[0].appendChild(jsEmbed));
document.getElementById("EmbedSocialJsLightbox") || ((jsEmbed = document.createElement("script")).id = "EmbedSocialJsLightbox", jsEmbed.src = "https://embedsocial.com/cdn/embed_lightbox.min.js", document.getElementsByTagName("body")[0].appendChild(jsEmbed));
if (!document.getElementById("EmbedSocialLightboxCSS")) {
    var cssEmbed = document.createElement("link");
    cssEmbed.id = "EmbedSocialLightboxCSS", cssEmbed.rel = "stylesheet", cssEmbed.href = "https://embedsocial.com/cdn/embedsocial_lightbox_style.min.css", document.getElementsByTagName("head")[0].appendChild(cssEmbed)
}
EMBEDSOCIALINSTAGRAM = {
    getEmbedData: function(e, t) {
        var m = document.createElement("iframe"),
            a = "https://embedsocial.com/api/pro_album/instagram/" + e;
        m.setAttribute("src", a), m.setAttribute("id", "embedIFrame_" + e + Math.random().toString(36).substring(7)), m.style.width = "0px", m.style.height = "0px", m.style.maxHeight = "100%", m.style.maxWidth = "100%", m.style.minHeight = "100%", m.style.minWidth = "100%", m.style.border = "0", m.setAttribute("class", "embedsocial-in-album-iframe"), m.setAttribute("scrolling", "no"), t.appendChild(m), EMBEDSOCIALINSTAGRAM.initResizeFrame()
    },
    initResizeFrame: function() {
        document.getElementById("EmbedSocialIFrame") && "function" == typeof iFrameResize ? iFrameResize({
            messageCallback: function(e) {
                EMBEDSOCIALINSTAGRAM.createLightBox(e.message)
            }
        }, ".embedsocial-in-album-iframe") : setTimeout(EMBEDSOCIALINSTAGRAM.initResizeFrame, 200)
    },
    createLightBox: function(e) {
        if (document.getElementById("embedSocialLightboxDiv") && document.getElementById("embedSocialLightboxDiv").getAttribute("data-ref") == e.albumRef && document.getElementById("embedSocialLightboxDiv").getAttribute("data-num") == e.albumNum && document.getElementById("embedSocialLightboxDiv").getAttribute("data-captions") == e.showCaptions)
            for (var t = 0; t < e.albumImages.length; t++) 1 == e.albumImages[t].click && EMBEDSOCIALINSTAGRAM.openLightBox(e.albumImages[t].id);
        else {
            if (document.getElementById("embedSocialLightboxDiv"))(m = document.getElementById("embedSocialLightboxDiv")).setAttribute("data-ref", e.albumRef), m.setAttribute("data-num", e.albumNum), m.setAttribute("data-captions", e.showCaptions), m.innerHTML = "";
            else {
                var m = document.createElement("div");
                m.setAttribute("data-ref", e.albumRef), m.setAttribute("data-num", e.albumNum), m.setAttribute("data-captions", e.showCaptions), m.setAttribute("class", "embedSocialLightboxDiv"), m.setAttribute("id", "embedSocialLightboxDiv"), m.style.display = "none", document.body.appendChild(m)
            }
            for (t = 0; t < e.albumImages.length; t++) {
                var a = document.createElement("a");
                a.setAttribute("href", e.albumImages[t].href), a.setAttribute("id", "embed-lightbox-" + e.albumImages[t].id);
                var i = document.createElement("img");
                i.setAttribute("src", e.albumImages[t].href);
                var s = e.albumImages[t].caption;
                e.albumImages[t].imgAlt && (s = e.albumImages[t].imgAlt), i.setAttribute("alt", s), a.appendChild(i), m.appendChild(a)
            }
            1 == e.showCaptions ? embedLightBox.run(".embedSocialLightboxDiv", {
                captions: function(e) {
                    return e.getElementsByTagName("img")[0].alt
                },
                filterlightem: new RegExp("((.+.(gif|jpe?g|png|webp))|size=l$)", "i")
            }) : embedLightBox.run(".embedSocialLightboxDiv", {
                filterlightem: new RegExp("((.+.(gif|jpe?g|png|webp))|size=l$)", "i")
            });
            for (t = 0; t < e.albumImages.length; t++) 1 == e.albumImages[t].click && EMBEDSOCIALINSTAGRAM.openLightBox(e.albumImages[t].id)
        }
    },
    openLightBox: function(e) {
        document.getElementById("embed-lightbox-" + e).click()
    }
};
var embedsocialInstagramAlbums = document.getElementsByClassName("embedsocial-instagram"),
    embedsocialInstagramAlbumsRef = [];
for (i = 0; i < embedsocialInstagramAlbums.length; i++) {
    var embedsocialInstagramAlbumRef = embedsocialInstagramAlbums[i].getAttribute("data-ref");
    embedsocialInstagramAlbumsRef.indexOf(embedsocialInstagramAlbumRef) > -1 || (embedsocialInstagramAlbumsRef.push(embedsocialInstagramAlbumRef), EMBEDSOCIALINSTAGRAM.getEmbedData(embedsocialInstagramAlbumRef, embedsocialInstagramAlbums[i]))
}