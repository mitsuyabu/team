    let imageNr = 0;
    // Serial number of current image
    // let finished = new Array(); // References to img objects which have finished downloading
    // let paused = false;

    function createImageLayer() {
    var img = new Image();
    // img.style.position = “absolute”;
    // img.style.zIndex = -1;
    img.onload = imageOnload;
    img.onclick = imageOnclick;
    img.src = “/?action=snapshot&n=” + (++imageNr);
    let webcam = document.getElementById(“list”);
    webcam.insertBefore(img, webcam.firstChild);
    }

    // Two layers are always present (except at the very beginning), to avoid flicker
    function imageOnload() {
    this.style.zIndex = imageNr; // Image finished, bring to front!
    while (1 < finished.length) {
        var del = finished.shift(); // Delete old image(s) from document
        del.parentNode.removeChild(del);
    }
    finished.push(this);
    if (!paused) createImageLayer();
    }

    function imageOnclick() { // Clicking on the image will pause the stream
    paused = !paused;
    if (!paused) createImageLayer();
    }

    $(‘#add’).on(‘click’,function(){
    createImageLayer();
    });