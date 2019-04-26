const scWords = ["gnih!", "aie!", "gniiih!", "oula...", "hmmrgh", "pfiou!", "help!", "Aoutch!", "sérieux?", "héhéhé", "joli!", "pouah!", "lol!", "burp", "eurk", "grrrreumunf", "Grumph", "kof kof"];
const spWords = ["Fidi di te stressa.",
    "Courage mon petit...",
    "Sébastien, le cours va commencer sans toi...",
    "Chiodo scaccia chiodo.",
    "Fai del tuo meglio...",
    "Une fois j’ai pissé par la fenêtre !",
    "J'ai entendu une série de tout petits pets comme ça : pft pft pft pft pft pft.",
    "Interprèèète ? Interprèèète ! Couhillère !",
    "Alors ça vient ? P'tite bite !",
    "Synchrone, c'est tout ce qui est à la campagne non ?",
    "Coin coin !",
    "Le code, c'est... le code ?"
];
var scWordsHistory = [];
$(function () {
    // Lors d'un clic sur bouton START
    $('#start').on('click', function () {
        startIntro(); // Démarrer l'intro
        updateWord(); // Afficher un 1er mot
    });
    // Validation des mots saisis
    $('input[name="write"]').on("input", function () {
        currentWord = $('input[name="read"]').val().toLowerCase();
        userInput = $('input[name="write"]').val().toLowerCase();
        $('input[name="write"]').removeClass("incorrect");
        if (currentWord.length <= userInput.length) { // Si saisie différente alors erreur
            if (currentWord != userInput) {
                $('input[name="write"]').addClass("incorrect");
            } else { // Si saisie correcte alors enclencher actions diverses
                $('input[name="write"]').addClass("correct");
                scWordsHistory.push(currentWord);
                var newScore = parseInt($('#score').find('span').text()) + 1; // Score + 1
                $('#score').find('span').text(newScore < 10 ? "0" + newScore : newScore);
                animateCSS('input[name="write"]', 'flash', function () {
                    makeSCDoHisThing(currentWord); // Lol
                    if ($("#spSceneWrapper").css("display") == "none" && Math.random() < 0.25) { makeSPSpeakPlz(spWords[Math.floor(Math.random() * spWords.length)]); } // Lol
                    updateWord(); // Afficher un nouveau mot
                });
            }
        }
    });
    window.onresize = function () {
        centerDiv('#start');
        centerDiv('#story');
    }
    centerDiv('#start');
    centerDiv('#story');
});

function startIntro() {
    animateCSS('#start', 'zoomOut', function () {
        $("#start").hide(); // Masquer le bouton START
        $("#story").fadeIn('slow').delay(5000).fadeOut('slow', function () { // Afficher les règles durant 3s puis les masquer
            $("#countdown").show().fadeOut(1000, function () { // Afficher un décompte
                startTimer(); // Lancer le timer
                $("#countdown").text('3').show().fadeOut(1000, function () {
                    $("#score").show(); // Afficher le score
                    $("#countdown").text('2').show().fadeOut(1000, function () {
                        $("#countdown").text('1').show().fadeOut(1000, function () {
                            $("#countdown").text("GO !").show().fadeOut(1000);
                            $("#scSceneWrapper").show(); // Afficher SC
                            $("#textInput").css('display', 'unset'); // Afficher le formulaire
                            $('input[name="write"]').focus();
                        });
                    });
                });
            });
        });
    });
}

function updateWord() {
    var newSCWord = scWords[Math.floor(Math.random() * scWords.length)]
    $('input[name="read"]').val(newSCWord);
    $('input[name="write"]').val("");
    $('input[name="write"]').removeClass("correct");
    $('input[name="write"]').attr('maxlength', newSCWord.length);
}
function startTimer() {
    $("#timer").show(); // Afficher le timer
    timerInterval = setInterval(updateTimer, 1000);
}
function updateTimer() {
    var s = parseInt($('#seconds').text()) + 1;
    if (s == 50) { $('#timer').addClass("alert"); }
    if (s >= 50) { animateCSS('#timer', 'pulse'); }
    if (s >= 60) {
        $('#hours').text('14');
        $('#minutes').text('00');
        s = '00';
        clearInterval(timerInterval);
        startOutro();
    }
    $('#seconds').text(s);
}
function makeSCDoHisThing(citation) {
    $('#scBubble').text(citation);
    $('#scMiniBubble').text(citation);
    $('#scBubble').css('display', 'unset');
    $('#scAvatar').css('background-image', 'url("./assets/img/sc-push.png")');
    $('#scMiniAvatar').css('background-image', 'url("./assets/img/sc-push.png")');
    animateCSS('#scAvatar', 'pulse', function() {
        $('#scAvatar').css('background-image', 'url("./assets/img/sc.png")');
    });
    animateCSS('#scMiniAvatar', 'pulse', function() {
        $('#scMiniAvatar').css('background-image', 'url("./assets/img/sc.png")');
    });
}
function makeSPSpeakPlz(citation) {
    $("#spBubble").text(citation);
    $("#spSceneWrapper").fadeIn('slow').delay(2500).fadeOut('slow');
}
function startOutro() {
    $('#textInput').remove();
    $("#scSceneWrapper").delay(1000).fadeOut('slow', function() {
        $("#story").html("Sébastien te remercie de ton soutien !<br/>Revoyons maintenant la scène au ralenti !");
        centerDiv('#story');
        $("#story").delay(1000).fadeIn('slow').delay(1500).fadeOut('slow', function() {
            $("#chair").delay(1000).fadeIn('slow', function() {
                $('#scMiniBubble').css('display', 'unset');
                releaseTheKraken();
            })
        });
    });
}
function releaseTheKraken() {
    poopInterval = setInterval(popAPoop, 1250);
    function popAPoop() {
        var currentScore = $('#score').text();
        var currentIndex = scWordsHistory.length - currentScore;
        if (currentScore == 0) { clearInterval(poopInterval); showFinalScore(currentIndex); }
        else {
            if (currentIndex >= 5) {
                if (currentIndex % 2 == 1) {
                    var fIndex = Math.floor(Math.random() * 5) + 1;
                    var audio = new Audio('./assets/sound/f' + fIndex + '.wav');
                    audio.play();
                    var newTriangle = $('.triangle:last-of-type').clone();
                    newTriangle.css('display', 'unset');
                    $('#chair').append(newTriangle);
                    var currentTop = parseInt(newTriangle.css('top'));
                    newTriangle.css('top', (currentTop - 30) + "px");
                    var currentBottom = parseInt($('#satMan').css('bottom'));
                    $('#satMan').css('bottom', (currentBottom + 30) + "px");
                    animateCSS('#satMan', 'bounce');
                }
            }
            if (currentIndex >= 0) {
                var newScore = currentScore <= 10 ? "0" + (currentScore - 1) : currentScore - 1;
                makeSCDoHisThing(scWordsHistory[currentIndex]);
                $('#score').text(newScore);
                animateCSS('#score', 'pulse');
            }
        }
    }
}
function showFinalScore(nbWords) {
    var str = "Merci l'ami !<br/>";
    str += "Tu marques un total de " + nbWords + " point" + (nbWords > 1 ? "s" : "") +  ".<br/>";
    $("#scMiniBubble").delay(1000).html(str);
    $("#chair").delay(1000).animate({
        left: '25%'
    }, function() {
        var finalText = "";
        if (nbWords == 0) { finalText += 'Vous êtes un gros nul, un zéro, un raté !'; }
        else if (nbWords <= 5) { finalText += "C'est compliqué, mais c'est compliqué !"; }
        else if (nbWords <= 8) { finalText += 'Ça vous fait pas mal à la tête de glandouiller 24h sur 24 ?'; }
        else if (nbWords <= 10) { finalText += 'Ca suffit ! Elle est où la poulette ?!'; }
        else if (nbWords <= 13) { finalText += "C'est bon, y a pas de quoi en chier une galette."; }
        else if (nbWords <= 15) { finalText += 'On vous considère désormais en tant que tel.'; }
        else { finalText += 'Bravo, vous êtes un grand chevalier !'; }
        $("#spBubble").text(finalText);
        $("#spSceneWrapper").fadeIn('slow');
    });
}
// Fonctions utilitaires
function animateCSS(element, animationName, callback) {
    const node = document.querySelector(element);
    node.classList.add('animated', animationName);

    function handleAnimationEnd() {
        node.classList.remove('animated', animationName);
        node.removeEventListener('animationend', handleAnimationEnd);
        if (typeof callback === 'function') callback();
    }
    node.addEventListener('animationend', handleAnimationEnd);
}
function centerDiv(element) {
    var e = $(element);
    var t = ($(window).height()) / 2 - (e.height() / 2);
    var l = ($(window).width()) / 2 - (e.width() / 2);
    $(element).css({
        top: t,
        left: l
    });
}