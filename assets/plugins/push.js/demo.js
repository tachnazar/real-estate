function demo() {
    Push.create('Hello world!', {
        body: 'How\'s it hangin\'?',
        icon: 'images/placeholder/banner500.png',
        link: 'www.google.com',
        timeout: 4000,
        onClick: function () {
            console.log("Fired!");
            window.focus();
            this.close();
        },
        vibrate: [200, 100, 200, 100, 200, 100, 200]
    });
}

$(document).ready(function() {
    $("#demo_button").click(demo);
});