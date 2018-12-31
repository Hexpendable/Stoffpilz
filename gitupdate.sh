#!/bin/bash
echo 
echo starting repository update...


cd Stoffpilz

git add -A

read -p "Kommentar in Anführungs-/Schlusszeichen ("):  " message
git commit -am "$message"

git push origin master

echo
echo ...completed!
echo
