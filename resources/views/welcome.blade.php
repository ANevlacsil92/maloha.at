<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="{{ mix('/js/app.js') }}"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">

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
        <div class="row services mt-5 pb-5">
            <div class="col">
                <div class="container">
                    <div class="row headline pt-5 pb-5">
                        <div class="col d-flex justify-content-center">LEISTUNGEN</div>
                    </div>
                    <div class="row description">
                        <div class="col-md-4 mt-2 mb-2 d-flex justify-content-center pr-3 pl-3 ">
                            <div class="card h-100 w-100">
                                <div class="card-body">
                                    <h5 class="card-title pb-3 pt-2">
                                        <div class="col d-flex justify-content-center">Fitnesscoaching</div>
                                    </h5>
                                    <div class="container card-text">
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
                                    <div class="container card-text">
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
                                    <h5 class="card-title card-title-small pb-3 pt-2">
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
                        <div class="col-md-4 mt-2 mb-2 d-flex justify-content-center pr-3 pl-3 ">
                            <div class="card h-100 w-100">
                                <div class="card-body">
                                    <h5 class="card-title pb-3 pt-2">
                                        <div class="col d-flex justify-content-center">Gesundheitscoaching</div>
                                    </h5>
                                    <div class="container card-text">
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
                                    <h5 class="card-title card-title-small pb-3 pt-2">
                                        <div class="col d-flex justify-content-center">Im Coaching enthalten:</div>
                                    </h5>
                                    <div class="container card-text">
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
                        <div class="col-md-4 mt-2 mb-2 d-flex justify-content-center pr-3 pl-3 ">
                            <div class="card h-100 w-100">
                                <div class="card-body">
                                    <h5 class="card-title pb-3 pt-2">
                                        <div class="col d-flex justify-content-center">Sonstige Angebote</div>
                                    </h5>
                                    <h6 class="card-title card-title-small pb-3 pt-2">
                                        <div class="col d-flex">Funktionales Training</div>
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
                                    <h6 class="card-title card-title-small pb-3 pt-5">
                                        <div class="col d-flex">Personal Training und Trainingsplangestaltung</div>
                                    </h6>
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
                                    <h6 class="card-title card-title-small pb-3 pt-5">
                                        <div class="col d-flex">ONLINE Liveworkouts</div>
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

</html>