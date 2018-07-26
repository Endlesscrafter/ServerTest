from gpiozero import LED
from time import sleep
import json

#Programm zu kompletten Hochfahren der Rolladen. Dabei kann ruhig etwas länger hochgefahren werden, denn ein Relais stoppt bei Endanschlag.
#Es wird auf JSON als Austauschsprache gesetzt, so kann dann auch in der Webseite der Status angezeigt werden, falls benötigt.
#Der 'state' kann die folgenden Werte annehmen:
#OPEN (Komplett hochgefahren)
#CLOSED (Nach unten gefahren, aber die Schlitze sind auf)
#SHUT (Komplett geschlossen),
#LIGHT (Kleiner Spalt lässt Licht rein),
#HALF (Hälfte verdeckt)

with open("rolladen.json","r") as objectfile:
	data = json.load(objectfile)