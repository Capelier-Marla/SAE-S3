<?php
    include ($_SERVER['DOCUMENT_ROOT']."/php/login.php");
    $logged = isLogin();
    if($logged){
        // do something
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <title>MySQLearn</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <script src="ace/ace.js" type="text/javascript" charset="utf-8"></script>
    <script src="script.js" type="module" charset="utf-8" defer></script>

</head>


<body>

    <div class="mobile-warning">
        <h1>Désolé, ce site ne peut être utilisé que sur un plus grand écran.</h1>
    </div>


    <div class="header">
        <div id="levelNumber" style="display: none;">1</div>
        <h1>MySQLearn</h1>
        <input type="range" min="0" max="360" class="slider" id="colorSlider">
        <select class="levels" id="levels">
            <option value="1" class="level selected" id="level1" type="button">Level 1</option>
            <option value="2" class="level" id="level2" type="button">Level 2</option>
            <option value="3" class="level" id="level3" type="button">Level 3</option>
            <option value="4" class="level" id="level4" type="button">Level 4</option>
            <option value="5" class="level" id="level5" type="button">Level 5</option>
            <option value="6" class="level" id="level6" type="button">Level 6</option>
            <option value="7" class="level" id="level7" type="button">Level 7</option>
            <option value="8" class="level" id="level8" type="button">Level 8</option>
            <option value="9" class="level" id="level9" type="button">Level 9</option>
            <option value="10" class="level" id="level10" type="button">Level 10</option>
        </select>
        <div class="connect">

            <div class="connexion">
                <button id="connexionButton">Connexion</button>
                <form action="/index.html" method="get" id="connexionForm">
                    <h1>Connection</h1>
                    <fieldset>
                        <legend>Nom d'utilisateur</legend>
                        <input type="text" name="username" id="connexionUsername">
                    </fieldset>
                    <fieldset>
                        <legend>Mot de passe</legend>
                        <input type="password" name="password" id="connexionPassword">
                    </fieldset>
                    <input type="submit" value="Se connecter">
                </form>
            </div>

            <div class="connexion">
                <button id="registerButton">Inscription</button>
                <form action="/index.html" method="get" id="registerForm">
                    <h1>Inscription</h1>
                    <fieldset>
                        <legend>Nom d'utilisateur</legend>
                        <input type="text" name="username" id="registerUsername">
                    </fieldset>
                    <fieldset>
                        <legend>Mot de passe</legend>
                        <input type="password" name="password" id="registerPassword">
                    </fieldset>
                    <fieldset>
                        <legend>Confirmer le mot de passe</legend>
                        <input type="password" name="password" id="registerPassword">
                    </fieldset>
                    <input type="submit" value="S'inscrire">
                </form>
        </div>

        </div>
    </div>


    <div class="page">

        <div class="left">

            <fieldset class="todo">
                <legend>Instructions</legend>
                <div class="instructions" id="instructions">
                </div>
                <button id="lesson"><img src="/images/lesson.svg" alt="lesson" width="32px"></button>
                <button id="hint"><img src="/images/hint.svg" alt="hint" width="32px"></button>
            </fieldset>

            <div class="verticalResizer resizer" id="verticalResizerLeft" resizeDirection="vertical"></div>

            <fieldset class="notes">
                <legend>Notes</legend>
                <textarea name="notes" id="notes">Notes pour plus tard</textarea>
            </fieldset>

        </div>

        <div class="horizontalResizer resizer" id="horizontalResizer" resizeDirection="horizontal"></div>

        <div class="right">
            <div class="code-buttons">
                <fieldset class="code">
                    <legend>Code</legend>
                    <div id="code-container">
                        <div id="code-editor">--insérer du code ici
SELECT * FROM ENQUETE01;</div>
                    </div>
                </fieldset>

                <div class="buttons">
                    <button id="restart">Restart</button>
                    <button id="execute">Execute</button>
                </div>
            </div>


            <div class="verticalResizer resizer" id="verticalResizerRight" resizeDirection="vertical"></div>

            <fieldset class="results">
                <legend>Results</legend>
                <div id="results"></div>
            </fieldset>

        </div>


        <div class="popupBackground">

            <div id="popupLesson">
                <button class="exitButton"><img src="/images/exit.png" alt="close page"></button>
                <h1>Cours</h1>
                <div class="text"></div>
            </div>


            <div id="popupHint">
                <button class="exitButton"><img src="/images/exit.png" alt="close page"></button>
                <h1>Indice</h1>
                <div class="text"></div>
            </div>


            <div id="popupEnd">
                <button class="nextButton"><img src="/images/next.png" alt="next level"></button>
                <h1>Terminé !</h1>
                <div class="text"></div>
            </div>

        </div>
    </div>

</body>

</html>
