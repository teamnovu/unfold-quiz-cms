---
id: home
blueprint: pages
title: Home
template: home
topic_title: 'novu Quiz'
register_checkbox_text: 'Newsletter abonnieren'
completion_feedback:
  -
    point_range: '33'
    feedback:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Zu wenig Punkte! Versuch es nochmals. Unser Team hilft dir gerne.'
  -
    point_range: '66'
    feedback:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Imperdiet potenti himenaeos neque auctor nascetur'
  -
    point_range: '100'
    feedback:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Gratuliere 🤩 du gehörst zu den novu Profis!'
mandelbaerli_text: 'Hol dir jetzt dein Mandelbärli an unserem Stand ab! Zeig uns dafür deine Punktzahl.'
no_manderlbaerli_text: 'Auch wir lieben Mandelbärli, leider können wir nur eines pro Person verteilen. Hol dir nur eines ab wenn du noch keines bekommen hast.'
updated_by: 3ef1c86e-b7fb-459b-9238-c3e41f033ec1
updated_at: 1646747126
main_title: 'Nimm jetzt am novu Quiz teil und gewinne tolle Preise!'
register_title: 'Hinterlege deine Daten, um an dem Wettbewerb teilzunehmen.'
components:
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Welche dieser Angebote gehören NICHT zu unseren Kernkompetenzen?'
    global_feedback: true
    is_illustration: true
    checkboxes:
      -
        image: uxdesign1.png
        image_overlay_text: 'UX Design'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: Falsch
      -
        image: uxdesign2.png
        image_overlay_text: 'Komplexe Schnittstellen'
        correct: true
        revealer: null
        answer_correct_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: Richtig
        answer_incorrect_text: null
      -
        image: uxdesign3.png
        image_overlay_text: Eigenentwicklungen
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: Falsch
      -
        image: uxdesign4.png
        image_overlay_text: Marketingkampagnen
        correct: true
        revealer: null
        answer_correct_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: Richtig
        answer_incorrect_text: null
    type: checkbox_images
    enabled: true
    answer_correct:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Genau richtig. Für klassische Marketingkampagnen bist du bei uns an der falschen Adresse. Wir konzentrieren uns lieber auf unsere Kernkompetenzen: Konzept & Design sowie Entwicklung von Websiten und Webapplikationen und alles was dazu gehört.'
    answer_incorrect:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Nicht ganz. Du hast eine unserer Kernkompetenzen ausgewählt. UX Design, komplexe Schnittstellen und auch eigene Entwicklungen – wenn es im Projekt einen Bedarf gibt – können wir ziemlich gut und machen uns auch wirklich Spass. Marketingkampagnen hingegen überlassen wir lieber anderen, das ist keine unserer Kernkompetenzen.'
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Für welches CMS haben wir einen heimlichen Fanclub gegründet?'
    radio_buttons:
      -
        answer: WordPress
        correct: false
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: Niemals!
        revealer: null
      -
        answer: Typo3
        correct: false
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Möglich aber falsch'
        revealer: null
      -
        answer: Statamic
        correct: true
        answer_correct_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Das ist genau richtig'
        answer_incorrect_text: null
        revealer: null
      -
        answer: Eigenentwicklung
        correct: false
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Auch möglich kostet aber viel Zeit im Unterhalt'
        revealer: null
    global_feedback: true
    type: radio_buttons
    enabled: true
    answer_correct:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Absolut richtig. Statamic ist unser absolutes Lieblings-CMS. Es ist simpel, intuitiv bedienbar, komponentenbasiert und ein wirklich performantes Tool für die Entwicklung von massgeschneiderten Webseiten.'
    answer_incorrect:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Nope, leider nein. Unser Lieblings-CMS ist Statamic. WordPress ist bei uns im Büro mehr ein Schimpfwort, Typ3 ist in der Logik zu technisch und nicht intuitiv zu bedienen und Eigenentwicklungen machen wir nur dort, wo wir mit Statamic und/oder Schnittstellen nicht die gewünschten Resultate erzielen können.'
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Wer ist stolzer Hüter unserer Siebträger-Kaffeemaschine und Schöpfer unseres Donnerstagsapéros?'
    global_feedback: false
    is_illustration: false
    radio_buttons:
      -
        image: ruslan.jpg
        image_overlay_text: Ruslan
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Ruslan trinkt eigentlich selten Kaffee und am Apéro nimmt er vor Allem bei der Umsetzung teil. Er wünscht aber jeden Freitag allen ein schönes Wochenende und wir wetten jeweils, ob er es mal vergisst.'
      -
        image: timo.jpg
        image_overlay_text: Timo
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Timo ist unser Webshop-Guru & in anderen Themen versiert. Er wohnt in Winterthur und ist am Donnerstag leider fürs Apéro gar nicht immer da.'
      -
        image: zumi.png
        image_overlay_text: Zumi
        correct: true
        revealer: null
        answer_correct_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Jackpot. Zumi putzt die Siebträgermaschine sauberer als seine eigenen Zähne und das will etwas heissen. Seine Apéros sind Gerüchten zufolge auch “änet” dem Röstigraben schon bekannt geworden und da läuft einem schon wieder das Wasser im Mund zusammen, Mjam.'
        answer_incorrect_text: null
      -
        image: kyle.jpg
        image_overlay_text: Kyle
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Kyle ist zwar vom Koch zum Entwickler konvertierter Entwickler, bezüglich Apéro übernimmt er bei uns aber nur die Stellvertretung.'
    type: radio_button_images
    enabled: true
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Wann wird eine'
      -
        type: set
        attrs:
          values:
            type: checkboxes
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Checkbox und wann ein'
      -
        type: set
        attrs:
          values:
            type: radio_buttons
      -
        type: paragraph
        content:
          -
            type: text
            text: ' Radio-Button verwendet?'
    global_feedback: false
    answer_correct:
      -
        type: paragraph
        content:
          -
            type: text
            text: Stimmt
    answer_incorrect:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Stimmt nicht'
    radio_buttons:
      -
        answer: 'Checkboxen werden verwendet, wenn mehrere Angaben ausgewählt werden können. Radio-Buttons werden bei nur einer möglichen Auswahl eingesetzt.'
        correct: true
        revealer: null
        answer_correct_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Genau. Ein Anwendungsbeispiel kannst du in diesem Quiz nachvollziehen. Checkboxes hast du bei Fragen, wo mehrere Antworten richtig sein können & Radio-Buttons setzen wir ein, wenn nur eine Antwort richtig ist.'
        answer_incorrect_text: null
      -
        answer: 'Die Verwendung von Checkboxen oder Radio-Button ist abhängig vom Design. Es wird das eingesetzt, was besser zum Design passt.'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Nicht ganz. Checkboxen und Radio-Buttons haben beide ihren ganz bestimmten Zweck. Die Verwendung ist abhängig davon, welche Art von Auswahlmöglichkeit im Konzept als besser geeignet erachtet wird, resp. für die Frage mehr Sinn macht.'
      -
        answer: 'Radio-Buttons sind aufwendiger umzusetzen. Daher werden sie nur für Projekte mit einem grösseren Budget verwendet.'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Falsch. Beide Buttons können aufwändig oder weniger aufwändig umgesetzt werden, sie haben aber beide ihren bestimmten Zweck und bieten unterschiedliche Auswahlmöglichkeiten, die je nach Bedarf im Design verwendet werden.'
    type: radio_buttons
    enabled: true
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Welche dieser Behauptungen trifft NICHT auf uns zu?'
    global_feedback: false
    radio_buttons:
      -
        answer: 'Wir setzen auf Qualität und Vertrauen'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Das haben wir uns wirklich gross auf die Fahne geschrieben. Wir schätzen den partnerschaftlichen Austausch mit Kunden und sehen Vertrauen als Grundlage für unsere Qualität. Was wir nicht mögen, ist alleine zuhause im Home Office rumsitzen und remote zusammenarbeiten – isoliert ist nicht so unser Ding.'
      -
        answer: 'Wir arbeiten gerne isoliert'
        correct: true
        revealer: null
        answer_correct_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'We don’t, genau richtig getippt. Wir arbeiten am Besten, wenn wir den regelmässigen Austausch haben - und zwar vor Ort. So helfen wir einander weiter, lernen gemeinsam und finden schnell Lösungen für komplexe Herausforderungen.'
        answer_incorrect_text: null
      -
        answer: 'Wir sind weitsichtig und denken nachhaltig'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Ein Projekt ist für uns am Ende des Tages nur wirklich erfolgreich, wenn es so viel Freude macht, dass Kunden wieder zu uns kommen. Wir wollen eine langfristige Kundenbeziehung & unsere Websiten sind so aufgebaut, dass man sie immer wieder erweitern kann. Was uns genau so wichtig ist, ist der Teamspirit. Isoliert zu Hause arbeiten mögen die wenigsten von uns.'
      -
        answer: 'Apéros gehören bei uns in die Wochenplanung'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Diese Behauptung trifft so etwas von auf uns zu. Das Apéro am Donnerstagnachmittag um 16:00 ist heilig. Es kommt immer wieder vor, das jemand nach dem Apéro noch weiter arbeitet, aber um vier sehen wir uns zum Bier. Hingegen arbeiten wir gerne zusammen, nicht isoliert. Macht Sinn oder, wegen Apéro und so.'
    type: radio_buttons
    enabled: true
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Wie viele User gehen bei einer Suche weiter als Seite 1 bei den Google Suchergebnissen?'
    global_feedback: false
    radio_buttons:
      -
        answer: 8%
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Du bist nah dran, es sind aber bedeutend weniger, nämlich etwa 1%. Darum ist eine gute SEO wichtig für deine Website.'
      -
        answer: 32%
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Hihi, hast du dich vertippt? Entweder du hast es nicht so mit Prozenten, oder du glaubst wirklich daran, dass Google-Nutzer neugierig sind, was auf Seite 2 ff. zu finden ist. Die richtige Antwort ist 1%.'
      -
        answer: 10%
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Nope, es sind bedeutend weniger, nämlich rund 1%. Überlege dir, wie oft du selbst auf Seite zwei etwas gesucht hast. Nur, wenn du nicht direkt in den vielen Antworten auf Seite 1 etwas nützliches gefunden hast, oder?'
      -
        answer: 1%
        correct: true
        revealer: null
        answer_correct_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Right. Es sind wirklich nur 1%. Darum solltest du (mit uns) schauen, dass du dein SEO-Game wirklich richtig gut im Griff hast.'
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Right. Es sind wirklich nur 1%. Darum solltest du (mit uns) schauen, dass du dein SEO-Game wirklich richtig gut im Griff hast.'
    type: radio_buttons
    enabled: true
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Wer sitzt fast täglich 3h im Auto im Podcast-Rausch, um seine Team-Kollegen/Kolleginnen zu sehen?'
    radio_buttons:
      -
        image: joel.jpg
        image_overlay_text: 'Joel von Allmen'
        correct: false
        answer_correct_text: null
        answer_incorrect_text: null
        revealer: null
      -
        image: oli.jpg
        image_overlay_text: 'Oliver Kaufmann'
        correct: true
        answer_correct_text: null
        answer_incorrect_text: null
        revealer: null
      -
        image: marcel.jpg
        image_overlay_text: 'Marcel Hofer'
        correct: false
        answer_correct_text: null
        answer_incorrect_text: null
        revealer: null
      -
        image: kyle.jpg
        image_overlay_text: 'Kyle Werner'
        correct: false
        answer_correct_text: null
        answer_incorrect_text: null
        revealer: null
    global_feedback: true
    answer_correct:
      -
        type: paragraph
        content:
          -
            type: text
            text: Correct
    answer_incorrect:
      -
        type: paragraph
        content:
          -
            type: text
            text: Incorrect
    is_illustration: false
    type: radio_button_images
    enabled: true
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Bist auch Du ein:e Usability-Spezialist:in? Welches Modal ist benutzerfreundlicher?'
    global_feedback: true
    answer_correct:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Das UX-Writing ist besser gewählt – zusätzlich werden die Auswahlmöglichkeiten gewichtet dargestellt. Dieses Modal führt so User dank einer visuell hervorgehobenen Empfehlung & hilft, die richtige Entscheidung zu treffen. Icons (Kreuz) ist besser als Text (Schliessen) und es ist auf den ersten Blick klar, dass Daten bei einem Klick gelöscht werden.'
    answer_incorrect:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Falsch. Wir finden dieses Modal nicht ideal. Es fehlt eine Gewichtung der Antwortmöglichkeiten und du musst die Frage genau durchlesen, um zu wissen, was bei einem Klick passiert. Schliessen in der Ecke oben wird generell weniger gut erkannt als ein Kreuz-Icon (idealerweise mit Hover-Effekt).'
    radio_buttons:
      -
        answer: 'Modal 1'
        image: modal1-1645713668.png
        correct: true
        revealer: null
        answer_correct_text: null
        answer_incorrect_text: null
      -
        answer: 'Modal 2'
        image: modal2-1645713672.png
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text: null
    type: radio_button_images_and_text
    enabled: true
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Mit welcher Methode meistern wir viele unsere Projekte?'
    global_feedback: false
    radio_buttons:
      -
        answer: Meilensteintrendanalyse
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Die Meilensteintrendanalyse gibt es zwar wirklich, aber die ist uns zu linear und der Titel ist uns zu lang. Klingt nach viel Management und wenig Umsetzung, nicht so unser Ding. Wir haben dafür entschieden, für grössere Projekte Scrum zu nutzen.'
      -
        answer: Scrum
        correct: true
        revealer: null
        answer_correct_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Right. Scrum it is. Das war doch gar nicht so schwierig. Scrum nutzen wir vor Allem für die grossen Projekte, es hilft uns aber auch bei kleineren Projekten mit weniger grossem Team nach Sprints zu denken und organisieren.'
        answer_incorrect_text: null
      -
        answer: Scum
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Wir fluchen schon ab und zu, wenn gerade etwas nicht klappt. Aber Scum (engl. für Abschaum) nutzen wir selten. Wer wird Millionär? Du wohl eher nicht, aber dir fehlt nur ein Buchstabe. Die richtige Lösung ist Scrum.'
      -
        answer: Hermes
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Hermes riecht uns zu sehr nach Wasserfall und viel Konzepte mit linearer Vorgehensweise. Wir arbeiten mit Design Thinking und wollen agil, transparent und gemeinsam ans Ziel kommen. Die richtige Lösung ist Scrum und wir erzählen dir gerne mehr über unsere Erfahrungen damit.'
    type: radio_buttons
    enabled: true
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Welchen Titel hat unser Wunderkind Tom im Jahre 2020 gewonnen?'
    global_feedback: false
    radio_buttons:
      -
        answer: 'Er ist Mister Schweiz geworden'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Leider falsch, Tom nimmt deine Antwort trotzdem als Kompliment, bedankt sich schmunzelnd und bereitet sich auf die Teilnahme an den World Skills (Berufs-Weltmeisterschaften) vor. Er hat nämlich die Swiss Skills für sich entschieden und darf sich auf seinem Beruf Schweizermeister nennen.'
      -
        answer: 'Er ist Badmintonspieler des Jahres geworden'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Falsch. Wir finden zwar auch, dass Tom auch als Badminton-Profi grosses Potenzial hätte, er musste sich aber auch schon von internen Mitstreiter:innen geschlagen geben. Noch besser ist er nämlich als Entwickler, weshalb er die Swiss Skills im 2020 für sich entschieden hat.'
      -
        answer: 'Er wurde Schweizermeister als Entwickler an den Swiss Skills'
        correct: true
        revealer: null
        answer_correct_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Richtige Antwort: Richtig. Tom hat sich erfolgreich durch die Aufgaben an den Swiss Skills programmiert und den richtigen Weg zwischen Effizienz und coolen Lösungen gefunden und so seine Kontrahenten gnadenlos ausgestochen.'
        answer_incorrect_text: null
      -
        answer: 'Er ist auf den Forbes 30 under 30 gelistet worden'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Nope, er hat zwar noch einige Zeit, um das zu erreichen, bevor er 30 Jahre alt wird. Er beschäftigt sich lieber mit ganz konkreten Herausforderungen, die mit Code zu lösen sind, statt die Forbes-Listen zu erklimmen. Wirklich gut konnte er das im 2020 an den Swiss Skills zeigen und kann nun den Titel als Schweizermeister geltend machen.'
    type: radio_buttons
    enabled: true
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Was ist uns für eine erfolgreiche Zusammenarbeit wichtig? (mehrere möglich)'
    checkboxes:
      -
        answer: 'Menschliche Harmonie und respektvoller Umgang'
        correct: true
      -
        answer: 'Aktiver Austausch'
        correct: true
      -
        answer: 'Ein grosses Projektbudget'
        correct: false
      -
        answer: 'Detaillierte und ausgearbeitete Vorgaben von Kund:innen'
        correct: false
    global_feedback: true
    type: checkboxes
    enabled: true
    answer_correct:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Du kleiner Sherlock. Für uns ist ein aktiver Austausch auf einer Augenhöhe mit unseren Kunden wichtig. Harmonie und der Respekt ist dabei zentral. Das macht uns und ziemlich sicher auch unseren Kunden am Meisten Spass und hilft gemeinsam coole Lösungen entstehen zu lassen.'
    answer_incorrect:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Nicht ganz richtig. Überleg noch einmal gut, wie du uns einschätzen würdest. Wir sind agil, unkompliziert und sehen eine Zusammenarbeit als Partnerschaft. Das ist aber unabhängig vom Projektbudget und wir brauchen dazu auch keine im Detail ausgearbeitete Vorgaben von Seite der Kunden.'
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Weshalb heisst Google «Google»?'
    global_feedback: false
    radio_buttons:
      -
        answer: 'Google ist das Wort für «Suche» in einem hawaianischen Dialekt.'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Auf hawaiisch heisst Suche “e imi”, mit Google hat das aber ziemlich wenig zu tun. Aber nice try. Der Name Google ist durch einen Schreibfehler entstanden, zumindest wird das so gemunkelt.'
      -
        answer: 'Google ist durch einen Schreibfehler aus dem ursprünglichen Wort Googol (mathematischer Term für eine 1 mit 100 Nullen) entstanden.'
        correct: true
        revealer: null
        answer_correct_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Genau so wird es erzählt. Googol ist der mathematische Term für eine 1 mit 100 Nullen; einzelne Quellen sprechen von einem Wortspiel, andere von einem Schreibfehler.'
        answer_incorrect_text: null
      -
        answer: 'Die ersten Skizzen von Google basieren auf der Programmiersprache Go, welche von den Gründern von Google entworfen wurde.'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Die open-source Programmiersprache Go gibt es tatsächlich und sie wurde auch von Google-Mitarbeitenden entwickelt. Google ist aber vorher aus einem Schreibfehler entstanden und der Name Go wurde wahrscheinlich von Google abgeleitet und nicht umgekehrt.'
      -
        answer: 'Google war der Name des ersten Hundes von Google-Mitgründer Larry Page.'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Google’s Office Policy ermöglicht es, Mitarbeitenden Hunde zur Arbeit mitzunehmen. So viel wir wissen, hat aber Larry Page keinen Hund der Google heisst. Wäre ein bisschen kitschig, oder? Richtig ist die Antwort Schreibfehler; Google ist aus dem Wort Googol entstanden.'
    type: radio_buttons
    enabled: true
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Weshalb verwenden wir Design Thinking in unseren Prozessen?'
    global_feedback: true
    answer_correct:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Richtig. Wir wollen ganz bewusst möglich verschiedene Personen in allen Phasen unserer Projekte an einen Tisch bringen und stark involvieren. So gewinnen Lösungen an Qualität, da die wirklichen Bedürfnisse von Usern frühzeitig und genau erkannt werden.'
    answer_incorrect:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Design Thinking klingt zugegebenermassen innovativ und ist vielleicht in Branchen verbreitet, wo es viele kreative Menschen gibt. Mit dem Projektbudget hat Design Thinking wirklich keinen direkten Zusammenhang. Vielmehr geht es bei dieser Methode darum, alle beteiligten Personen im Projekt in der Lösungsentwicklung direkt zu involvieren und so den User ins Zentrum zu nehmen, agil zu arbeiten und Prozesse zu verkürzen.'
    radio_buttons:
      -
        answer: 'Design Thinking klingt innovativ. Dies erhöht unsere Chancen ein neues Projekt zu gewinnen.'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text: null
      -
        answer: 'Mit der Design Thinking Methode können die verschiedene Personen aus unterschiedlichen Bereichen involviert werden und an der Lösungsfindung teilnehmen.'
        correct: true
        revealer: null
        answer_correct_text: null
        answer_incorrect_text: null
      -
        answer: 'Design Thinking ist besonders für kreative Menschen geeignet. Daher passt diese Methode besonders gut für unser Unternehmen.'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text: null
      -
        answer: 'Mit der Design Thinking Methode hat man automatisch ein grösseres Budget für das Projekt.'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text: null
    type: radio_buttons
    enabled: true
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Was sind alles Vorteile von einer guten Developer Experience?'
    global_feedback: true
    answer_correct:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Bravo, du hast alle Vorteile einer guten Developer Experience erkannt. Eine gute Developer Experience führt zu einer schnelleren Markteinführung des Produkts, einer höheren Zufriedenheit am Arbeitsplatz und im Endeffekt auch zur besseren User Experience.'
    answer_incorrect:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Überleg noch einmal gut. Developer Experience ist die Erfahrung und das Erlebnis, welches ein(e) Entwickler:in beim Entwickeln macht. Das führt zu einer höheren Qualität (UX wird erhöht) und Markteinführung und verkleinert das Risiko von Fluktuation. Zu einer verbesserten Kollaboration führt es nicht zwingend; eher ist diese Grundlage für eine gute Developer Experience.'
    checkboxes:
      -
        answer: 'Schnellere Markteinführung des Produktes'
        correct: true
      -
        answer: 'Weniger Fluktuation im Entwicklungsteam'
        correct: true
      -
        answer: 'Bessere Kollaboration zwischen Entwickler:innen und anderen Beteiligten'
        correct: false
      -
        answer: 'Eine verbesserte User Experience'
        correct: true
    type: checkboxes
    enabled: true
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Wer von uns schwingt das Tanzbein und unterrichtet nebenbei Hip-Hop an einer Tanzschule?'
    global_feedback: false
    radio_buttons:
      -
        answer: Manuel
        image: strebel.jpg
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Manu ist mehr so Tictoc und Bravo Hits Party. Wir trauen ihm auch zu Hip-Hop zu unterrichten, sind aber dankbar investiert er seine Zeit vor Allem in die Geschäftsführung von novu.'
      -
        answer: Joel
        image: joel.jpg
        correct: true
        revealer: null
        answer_correct_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Yes, wenn du einen Old School Hip Hop Beat laufen lässt, dann kommt Joel richtig auf Touren. Seine Körperkoordination ist crazy und deshalb ist er auch ein guter Lehrer.'
        answer_incorrect_text: null
      -
        answer: Janis
        image: janis.jpg
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Janis ist mehr so Rave. Hip Hop gefällt ihm auch, aber der Vibe ist wirklich Rave. Dmmz, dmmmz, dmmz, ab nach Berlin.'
      -
        answer: Jessica
        image: jessica.jpg
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Jessy schwebt im Winter über Langlaufloipen und klettert im Sommer elegant Felswände hoch. Hip Hop mag sie auch, aber für Tanzunterricht bleibt neben den anderen Hobbys keine Zeit mehr.'
    type: radio_button_images_and_text
    enabled: true
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Wer von uns schwingt das Tanzbein und unterrichtet nebenbei Hip-Hop an einer Tanzschule?'
    global_feedback: false
    is_illustration: false
    radio_buttons:
      -
        image: strebel.jpg
        image_overlay_text: Manu
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Manu ist mehr so Tictoc und Bravo Hits Party. Wir trauen ihm auch zu Hip-Hop zu unterrichten, sind aber dankbar investiert er seine Zeit vor Allem in die Geschäftsführung von novu.'
      -
        image: joel.jpg
        image_overlay_text: Joel
        correct: true
        revealer: null
        answer_correct_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Yes, wenn du einen Old School Hip Hop Beat laufen lässt, dann kommt Joel richtig auf Touren. Seine Körperkoordination ist crazy und deshalb ist er auch ein guter Lehrer.'
        answer_incorrect_text: null
      -
        image: null
        image_overlay_text: Janis
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Janis ist mehr so Rave. Hip Hop gefällt ihm auch, aber der Vibe ist wirklich Rave. Dmmz, dmmmz, dmmz, ab nach Berlin.'
      -
        image: null
        image_overlay_text: Jessica
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Jessy schwebt im Winter über Langlaufloipen und klettert im Sommer elegant Felswände hoch. Hip Hop mag sie auch, aber für Tanzunterricht bleibt neben den anderen Hobbys keine Zeit mehr.'
    type: radio_button_images
    enabled: true
min_result_for_mandelbaerli: 66
---
Welcome to your new Statamic website.
