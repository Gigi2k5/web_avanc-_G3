#!/bin/bash

# Accéder au dossier du frontend React
cd frontend

# Générer le build React
npm run build

# Copier le build dans le dossier public de Laravel
cp -r build/* ../public/

echo "React build copied to Laravel public folder."
