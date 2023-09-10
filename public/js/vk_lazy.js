let ok = false;
window.addEventListener('load', function() {
    if (ok === false) {
        ok = true;
        setTimeout(() => {
            let script = document.createElement('script');
            script.src = 'https://vk.com/js/api/openapi.js?168';
            document.getElementById('vk_group').after(script);
            script.onload = function() {
                VK.Widgets.Group("vk_group", {mode: 4, width: "auto", height: "1000"}, 193638089);
            }
        }, 1000)

    }
});