// Displays hidden elements for POA page

function unlockPOA() {
    document.getElementById("puzzleScreen").style.display = "none";
    document.getElementById("phantomSite").style.display = "flex";
    window.scrollTo(0, document.body.scrollHeight);
}