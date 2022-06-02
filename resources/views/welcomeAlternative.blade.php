<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Maloha</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="{{ mix('/js/app.js') }}"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>&#x263C;</text></svg>">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased" onload="setHeights()">

    <div class="container-fluid">

        <div class="row header">
            <div class="col">
                <div class="container-fluid">
                    <div class="row headline">
                        <div class="col pt-5 pb-0 d-flex justify-content-center">
                            &#x263C; MALOHA
                        </div>
                    </div>
                    <div class="row subline">
                        <div class="col pb-5 d-flex justify-content-center">
                            <p>„Make your health a priority“</p>
                        </div>
                    </div>
                    <div class="row pb-5 head-carousel">
                        <div class="col d-flex justify-content-center">

                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <p>
                                            FITNESS & TRAINING
                                        </p>
                                    </div>
                                    <div class="carousel-item">
                                        <p>
                                            BEWUSSTE ERNÄHRUNG
                                        </p>
                                    </div>
                                    <div class="carousel-item">
                                        <p>
                                            GESUNDER LIFESTYLE
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row overview pt-5">
            <div class="col">
                <div class="container">
                    <div class="row quote pb-3">
                        <p>„Healthy isn´t a goal. It´s a way of living.“</p>
                    </div>
                    <div class="row description">
                        <p>
                            Gesundheit bedeutet für mich mehr, als nur sportlich aktiv zu sein und auf meine Ernährung zu achten.
                            Es ist ein Lifestyle! Meine Gesundheit richte ich darauf aus, genau auf meinen Körper zu hören, zu
                            spüren was er braucht und so die beste Version von mir selbst zu kreieren.
                            Als Gesundheits- und Fitnesscoach verbinde ich alle Bereiche, um gesunde
                            Gewohnheiten zu entwickeln und die richtige Balance zu finden. Mein Körper und ich sind dabei ein Team.
                            Mentale Aspekte wie Stressmanagement, das soziale Umfeld, Arbeit, eine optimale Schlafroutine und auch die
                            richtigen Nahrungsergänzungsmittel stehen dabei genauso im Fokus wie eine individuelle Fitnessroutine und das
                            Erreichen von persönlichen Trainingszielen.
                        </p>
                    </div>
                    <div class="row mt-4 description">
                        <div class="col-md-4 mt-2 mb-2 d-flex justify-content-center pr-3 pl-3 ">
                            <div class="card h-100 p-3">
                                <div class="card-body">
                                    <h5 class="card-title">FITNESS & TRAINING,</h5>
                                    <p class="card-text">für mehr Leistungsfähigkeit, körperliche Stärke und mentale Ausgeglichenheit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2 mb-2 d-flex justify-content-center pr-3 pl-3 ">
                            <div class="card h-100 p-3">
                                <div class="card-body">
                                    <h5 class="card-title">BEWUSSTE ERNÄHRUNG,</h5>
                                    <p class="card-text">um deinen Körper genau das zu geben, was er braucht und sich dabei wohl zu fühlen.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2 mb-2 d-flex justify-content-center pr-3 pl-3 ">
                            <div class="card h-100 p-3">
                                <div class="card-body">
                                    <h5 class="card-title">GESUNDER LIFESTYLE,</h5>
                                    <p class="card-text">um Gewohnheiten zu entwickeln, die dir dabei helfen, dich zur besten, gesündesten Version von dir selbst zu machen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row services  mt-5 pb-5">
            <div class="col">
                <div class="container">
                    <div class="row headline pt-5 pb-5">
                        <div class="col d-flex justify-content-center">LEISTUNGEN</div>
                    </div>
                    <div class="row description">
                        <div class="col-md-6 mt-2 mb-2 d-flex justify-content-center pr-3 pl-3 ">
                            <div class="card h-100 w-100">
                                <div class="card-body">
                                    <h5 class="card-title pb-3 pt-2">
                                        <div class="col d-flex justify-content-center">Fitnesscoaching</div>
                                    </h5>
                                    <div id="container-fitness-info" class="container card-text">
                                        <div class="row">
                                            <p><u>Dauer:</u> Wochenweise buchbar</p>
                                        </div>
                                        <div class="row">
                                            <p><u>Für wen?:</u> Dieses Coaching richtet sich besonders an Personen, die Hilfe beim Erreichen ihrer
                                                sportlichen Ziele benötigen.</p>
                                        </div>
                                        <div class="row">
                                            <p><u>Im Fokus:</u> Körperliche Fitness</p>
                                        </div>
                                        <div class="row">
                                            <p><u>Ablauf:</u> Wöchentlich trainieren wir mehrmals zusammen, um deine körperliche Leistungsfähigkeit zu verbessern,
                                                deine persönlichen Ziele zu erreichen und dich herauszufordern. Die Fitnesseinheiten werden dabei individuell auf dich
                                                und deine Fitnessziele zugeschnitten. Ich motiviere und coache dich bei intensiven, funktionalen Trainingseinheiten.
                                                Zusätzlich kannst du dir einen Trainingsplan erstellen lassen, für deinen weiteren Fitnessweg.</p>
                                        </div>
                                    </div>
                                    <h5 class="card-title card-title-small pb-3 pt-2">
                                        <div class="col d-flex justify-content-center">Im Coaching enthalten:</div>
                                    </h5>
                                    <div id="container-fitness-containing" class="container card-text pb-4">
                                        <div class="row">
                                            <ul>
                                                <li>mind. 2 intensive Trainingssessions pro Woche (erweiterbar und sowohl indoor/outdoor möglich)</li>
                                                <li>Planung und Anpassung deiner Trainingsziele</li>
                                                <li>Genaue Berechnung deiner Makro-/Mikronährstoffverteilung, um dir eine optimale Basis für eine begleitende gesunde Ernährungsweise zu bieten</li>
                                                <li>Überraschende Fitnesschallenges im Laufe der Coachingwoche, um dich zu fordern und weiter zu motivieren</li>
                                                <li>Täglicher Austausch und Support via DirectMessenger/WhatsApp</li>
                                                <li>Zugang zu Online (live) Workouts</li>
                                                <li>Trainingsplanerstellung, angepasst an deine Ziele und Bedürfnisse</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5 class="card-title card-title-small pb-3">
                                        <div class="col d-flex justify-content-center">Mögliche Schwerpunktsetzung:</div>
                                    </h5>
                                    <div class="container card-text">
                                        <div class="row">
                                            <ul>
                                                <li>Allgemeine Fitness verbessern</li>
                                                <li>Muskel- & Kraftaufbau</li>
                                                <li>Bewegungspensum erhöhen</li>
                                                <li>Motivation beim Durchhalten und Durchführen von Trainingseinheiten stärken</li>
                                                <li>Entwicklung einer gesunden & regelmäßigen Fitnessroutine</li>
                                                <li>Erarbeitung und Zielsetzung deiner individuellen Trainingsziele</li>
                                                <li>Körperliche Vorbereitung auf besondere und anstehende Ereignisse (Hochzeit, Shootings, Fitnessevents, …</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2 mb-2 d-flex justify-content-center pr-3 pl-3 ">
                            <div class="card h-100 w-100">
                                <div class="card-body">
                                    <h5 class="card-title pb-3 pt-2">
                                        <div class="col d-flex justify-content-center">Gesundheitscoaching</div>
                                    </h5>
                                    <div id="container-health-info" class="container card-text pb-5">
                                        <div class="row">
                                            <p><u>Dauer:</u> wahlweise 4,6 oder 8 Wochen lang (wöchentlich erweiterbar)</p>
                                        </div>
                                        <div class="row">
                                            <p><u>Für wen?: </u> Dieses Coaching richtet sich besonders an Personen, die ihren
                                                Weg in ein gesünderes Leben (bis jetzt) noch nicht gefunden haben oder auch an jene,
                                                die einzelne Bereiche fokussieren und optimieren wollen.</p>
                                        </div>
                                        <div class="row">
                                            <p><u>Im Fokus:</u> Ganzheitliche Gesundheit</p>
                                        </div>
                                        <div class="row">
                                            <p><u>Ablauf:</u> Im Rahmen dieses Coachings machen wir es uns zum Ziel, deinen individuellen
                                                Weg in ein gesünderes Leben zu finden. Dabei werden wir neue gesunde Gewohnheiten entwickeln
                                                und alte negative Routinen durch bessere Alternativen ersetzen. So werden deine ganzen Ressourcen
                                                gestärkt, welche du für die Herausforderungen in deinem Alltag nutzen kannst. Das Gesundheitscoaching
                                                ist sehr individuell und wird nach dem kostenlosen Erstgespräch genau auf deine Bedürfnisse
                                                zugeschnitten. Ziel ist es, dich dabei zu unterstützen, den eigenen Körper sowohl physisch
                                                als auch mental besser zu verstehen, langfristige Gesundheit zu manifestieren und das eigene Leben
                                                gesund und aktiv zu gestalten.</p>
                                        </div>
                                    </div>
                                    <h5 class="card-title card-title-small pb-3">
                                        <div class="col d-flex justify-content-center">Im Coaching enthalten:</div>
                                    </h5>
                                    <div id="container-health-containing" class="container card-text">
                                        <div class="row">
                                            <ul>
                                                <li>Wöchentliche 1:1 Coachingsessions, die auf deine Bedürfnisse und deine Ziele abgestimmt sind
                                                    + Reflexion des Prozesses (1x pro Woche a 60 Minuten)</li>
                                                <li>Individuelle Wochenaufgaben und Übungen, die dir dabei helfen, dein Ziel zu erreichen und
                                                    dich mit dir selbst, deinem Lifestyle und deiner Gesundheit auseinanderzusetzen.</li>
                                                <li>Wöchentlicher Reflexionsbogen, mit der wir in der darauffolgenden Coachingsession weiterarbeiten.</li>
                                                <li>Täglicher Austausch und Support via DirectMessenger für Fragen und mögliche Herausforderungen.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5 class="card-title card-title-small pb-3 pt-2">
                                        <div class="col d-flex justify-content-center">Mögliche Schwerpunktsetzung:</div>
                                    </h5>
                                    <div class="container card-text">
                                        <div class="row">
                                            <ul>
                                                <li>Optimierung der eigenen Lebensweise durch Bewegung, Ernährung und Mentale Gesundheit</li>
                                                <li>Bewusste Gestaltung unterschiedlicher Lebensbereiche wie Körper, Beruf, Beziehungen, Alltag und Bewegungsroutinen</li>
                                                <li>Stressmanagement und Burnout Prävention</li>
                                                <li>Gesunde Work-Life Balance entwickeln und optimieren</li>
                                                <li>Wertvolle Lebensziele setzen & planen</li>
                                                <li>Achtsamkeit, Selbstwahrnehmung & Sinnfindung</li>
                                                <li>ganzheitliches Wohlbefinden stärken</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row headline pt-5 pb-5">
                        <div class="col d-flex justify-content-center">WEITERE ANGEBOTE</div>
                    </div>
                    <div class="row description">

                        <div class="col-md-4 mt-2 mb-2 d-flex justify-content-center pr-3 pl-3 ">
                            <div class="card h-100 w-100">
                                <div class="card-body">
                                    <h6 id="container-ft-title" class="card-title pb-3 pt-2">
                                        <div class="col d-flex justify-content-center">Funktionales Training</div>
                                    </h6>
                                    <div class="container card-text">
                                        <div class="row">
                                            <p>Das Funktionale Training ist die ideale Möglichkeit, deinen gesamten Körper
                                                in kurzer Zeit zu trainieren. Dabei werden Muskelgruppen nicht isoliert beansprucht,
                                                sondern ganzheitlich gefordert. So stärkst du deine Ausdauer, Kraft, Beweglichkeit und Stabilität.</p>
                                        </div>
                                        <div class="row">
                                            <p><b>Du willst richtig ins Schwitzen kommen, ortsunabhängig trainieren und dabei motiviert und angeleitet
                                                    werden? Dann kontaktiere mich und buche eine Functional Training - Session!</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2 mb-2 d-flex justify-content-center pr-3 pl-3 ">
                            <div class="card h-100 w-100">
                                <div class="card-body">
                                    <div id="container-pt-title">
                                        <h6 class="card-title pt-2">
                                            <div class="col d-flex justify-content-center">Personal Training und</div>
                                        </h6>
                                        <h6 class="card-title pb-3">
                                            <div class="col d-flex justify-content-center">Trainingsplangestaltung</div>
                                        </h6>
                                    </div>
                                    <div class="container card-text">
                                        <div class="row">
                                            <p>Beim Personal Training bekommst du einen individuellen Trainingsplan, nach welchem du
                                                anschließend allein über einen längeren Zeitraum, am besten im Fitnessstudio,
                                                trainierst. Hier empfehle ich dir, Sessions in regelmäßigen Abständen zu buchen, um den Plan
                                                anzupassen und deine Trainingsroutine zu optimieren.</p>
                                        </div>
                                        <div class="row">
                                            <p><b>Du willst Muskeln aufbauen, gezielt nach Plan trainieren und regelmäßig gecoached werden?
                                                    Dann kontaktiere mich und buche ein Personal Training!</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2 mb-2 d-flex justify-content-center pr-3 pl-3 ">
                            <div class="card h-100 w-100">
                                <div class="card-body">
                                    <h6 id="container-olw-title" class="card-title pb-3 pt-2">
                                        <div class="col d-flex justify-content-center">ONLINE Liveworkouts</div>
                                    </h6>
                                    <div class="container card-text">
                                        <div class="row">
                                            <p>Jeden Dienstag um 19:00 Uhr biete ich ein kostenloses ONLINE Workout an. Dabei trainieren wir
                                                den ganzen Körper, stärken unsere Ausdauer und gehen am Ende bei einer Fitnesschallenge nochmal an unsere Grenzen!
                                                Einfach unverbindlich ausprobieren und kurz vor Start mit dem Link via Zoom einsteigen!</p>
                                        </div>
                                        <div class="row">
                                            <p><b><a href="https://phwien-ac-at.zoom.us/j/5717902326">Gemeinsamen Fitnessraum betreten!</a></b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function setHeights() {
        if (!mobileCheck()) {
            document.getElementById("container-fitness-info").style.height = document.getElementById("container-health-info").offsetHeight + "px";
            document.getElementById("container-health-containing").style.height = document.getElementById("container-fitness-containing").offsetHeight + "px";
            document.getElementById("container-ft-title").style.height = document.getElementById("container-pt-title").offsetHeight + "px";
            document.getElementById("container-olw-title").style.height = document.getElementById("container-pt-title").offsetHeight + "px";



        }
    }

    function mobileCheck() {
        let check = false;
        (function(a) {
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
        })(navigator.userAgent || navigator.vendor || window.opera);
        return check;
    };

    window.onresize = setHeights
</script>

</html>