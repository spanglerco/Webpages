Webpages
========

School project for how to create webpages written in PHP. The master branch contains the source, while dh-pages will have the rendered HTML pages with search, feedback, and live examples disabled. I plan to research if it's possible to preserve the live example format in pure JavaScript or redirect to another service.

Installing
========

exampleViewer.php, template.php, Styles_unstyled.php, and search/templates/standard/* currently use absolute URLs. If the domain changes, they'll have to be updated.

feedback.php needs an email address filled in (search for ENTER_ADDRESS_HERE).

The search feature needs the Sphider database reconstructed. Fill in the values in search/settings/database.php. See search/install.txt to create a fresh install then rebuild the index.