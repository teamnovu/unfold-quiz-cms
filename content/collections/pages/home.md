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
updated_by: 0492f82b-910c-4782-a2a8-239a336757f3
updated_at: 1646669489
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
    global_feedback: false
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
            text: 'That''s correct Sherlock'
    answer_incorrect:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Try it again'
  -
    question:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Bist auch Du ein:e Usability-Spezialist:in? Welches Modal ist Benutzerfreundlicher?'
    global_feedback: true
    answer_correct:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'True that!'
    answer_incorrect:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Not today'
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
            text: 'Welche dieser Angebote gehören NICHT zu unseren Kernkompetenzen?'
    global_feedback: false
    is_illustration: true
    checkboxes:
      -
        image: uxdesign1.png
        image_overlay_text: 'UX design'
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
        image_overlay_text: 'Marketing- kampagnen'
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
    global_feedback: true
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
        answer_correct_text: null
        answer_incorrect_text: null
      -
        answer: 'Die Verwendung von Checkboxen oder Radio-Button ist abhängig von dem Design. Es wird das eingesetzt, was besser zum Design passt.'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text: null
      -
        answer: 'Radio-Buttons sind aufwendiger umzusetzen. Daher werden sie nur für Projekte mit einem grösseren Budget verwendet.'
        correct: false
        revealer: null
        answer_correct_text: null
        answer_incorrect_text: null
    type: radio_buttons
    enabled: true
min_result_for_mandelbaerli: 66
---
Welcome to your new Statamic website.
