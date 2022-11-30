<?php

$civilite = $_GET['civilite'] ?? '';


if ($civilite == 'monsieur') {
    echo "Bonjour monsieur, vous êtes beau";
} else if ($civilite == 'madame') {
    echo "Bonjour madame, vous êtes belle";
}
